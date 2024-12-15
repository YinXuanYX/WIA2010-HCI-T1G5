<?php
require_once 'vendor/autoload.php';

use Rubix\ML\Classifiers\RandomForest;
use Rubix\ML\Classifiers\ClassificationTree;
use Rubix\ML\Datasets\Labeled;

session_start();

$YEAR_OF_EXPERIENCE = $_SESSION['CONVERTED_YEAR_OF_EXPERIENCE'];
$AGE = $_SESSION['AGE'];
$PRIMARY_ROLE = $_SESSION['PRIMARY_ROLE'];
$GENDER = $_SESSION['GENDER'];
$SCHOOL_TYPE = $_SESSION['SCHOOL_TYPE'];
$COURSE_NAME = $_SESSION['COURSE_NAME'];
$TEACHING_MODE = $_SESSION['TEACHING_MODE'];
$COURSE_LEVEL = $_SESSION['COURSE_LEVEL'];
$COURSE_DURATION = $_SESSION['COURSE_DURATION'];
$FIELD_OF_STUDY = $_SESSION['CONVERTED_FIELD_OF_STUDY'];
$COURSE_CONTENTS = $_SESSION['COURSE_CONTENTS'];
$AVERAGE_STUDENT_SCORE = $_SESSION['AVERAGE_STUDENT_SCORE'];
$STUDENT_PASSING_RATE = $_SESSION['STUDENT_PASSING_RATE'];
$CLASS_SIZE = $_SESSION['CONVERTED_CLASS_SIZE'];


class TeachingStrategyRecommender
{
    private RandomForest $model;

    public function __construct(int $estimators = 100)
    {
        // Create the Random Forest with a Classification Tree as the base learner
        $this->model = new RandomForest(
            base: new ClassificationTree(),
            estimators: $estimators, // Number of trees in the forest
            ratio: 0.2, // 20% of the dataset used for each tree
            balanced: true // Helps with imbalanced class distributions
        );
    }

    /**
     * Prepare training data for the model
     * 
     * @param array $trainingData Array of feature vectors
     * @param array $labels Corresponding teaching strategy labels
     * @return Labeled
     */
    private function prepareDataset(array $trainingData, array $labels): Labeled
    {
        return new Labeled($trainingData, $labels);
    }

    /**
     * Train the model
     * 
     * @param array $trainingData Array of feature vectors
     * @param array $labels Corresponding teaching strategy labels
     */
    public function train(array $trainingData, array $labels): void
    {
        $dataset = $this->prepareDataset($trainingData, $labels);
        $this->model->train($dataset);
    }

    /**
     * Predict the most suitable teaching strategy
     * 
     * @param array $features Feature vector of a student
     * @return array Recommended teaching strategy
     */
    // public function recommend(array $features): array {
    //     $predictions = $this->model->predict(new Labeled([$features], ['']));
    //     return array_slice($predictions, 0, 3);
    // }

    public function recommend(array $features): array
    {
        $probabilities = $this->model->proba(new Labeled([$features], ['']))[0];

        // Sort probabilities in descending order
        arsort($probabilities);

        // Take top 3 recommendations
        $topRecommendations = array_slice($probabilities, 0, 3, true);
        $topLabels = array_keys($topRecommendations);
        return $topLabels;
    }



    // public function recommend(array $features): array 
    // {
    //     $strategies = [];

    //     // First, get the initial prediction
    //     $initialStrategy = $this->model->predict(new Labeled([$features], ['']));
    //     $strategies[] = is_array($initialStrategy) ? implode(' ', $initialStrategy) : $initialStrategy;

    //     // Generate two more strategies by slightly modifying the input
    //     while (count($strategies) < 3) {
    //         // Create variations of the input features
    //         $modifiedFeatures = $this->createVariation($features);

    //         $newStrategy = $this->model->predict(new Labeled([$modifiedFeatures], ['']));
    //         $newStrategyStr = is_array($newStrategy) ? implode(' ', $newStrategy) : $newStrategy;

    //         // Ensure unique strategies
    //         if (!in_array($newStrategyStr, $strategies)) {
    //             $strategies[] = $newStrategyStr;
    //         }
    //     }

    //     return $strategies;
    // }

    // Method to create variations of input features
    private function createVariation(array $features): array
    {
        $variation = $features;

        // Introduce small random modifications
        foreach ($variation as $key => &$value) {
            if (is_numeric($value)) {
                // Add a small random perturbation
                $value += (rand(-10, 10) / 100);
            } elseif (is_string($value)) {
                // For string values, append a small random suffix
                $value .= '_var' . rand(1, 100);
            }
        }

        return $variation;
    }

    /**
     * Get probability scores for different teaching strategies
     * 
     * @param array $features Feature vector of a student
     * @return array Probability scores for each strategy
     */
    public function getProbabilities(array $features): array
    {
        return $this->model->proba(new Labeled([$features], ['']))[0];
    }

    /**
     * Get feature importances to understand what factors most influence the recommendation
     * 
     * @return array Feature importance scores
     */
    public function getFeatureImportances(): array
    {
        return $this->model->featureImportances();
    }

    /**
     * Read data from CSV file
     * 
     * @param string $filename Path to the CSV file
     * @return array Associative array with 'data' and 'labels'
     */
    public function readCSV(string $filename): array
    {
        $data = [];
        $labels = [];

        if (($handle = fopen($filename, "r")) !== FALSE) {
            // Skip header if exists
            fgetcsv($handle);

            while (($row = fgetcsv($handle)) !== FALSE) {
                // Separate features and labels
                $features = array_slice($row, 0, -1);  // All columns except last
                $label = $row[count($row) - 1];  // Last column as label

                // Convert features to float
                $features = array_map('floatval', $features);

                $data[] = $features;
                $labels[] = $label;
            }
            fclose($handle);
        }

        return ['data' => $data, 'labels' => $labels];
    }
}

// Usage
try {

    // echo the data retrieved
    // echo "YEAR_OF_EXPERIENCE:" . $YEAR_OF_EXPERIENCE ."  ";
    // echo "AGE:" . $AGE  ."  ";
    // echo "PRIMARY_ROLE:" . $PRIMARY_ROLE ."  ";
    // echo "GENDER:" . $GENDER  ."  ";
    // echo "SCHOOL_TYPE:" . $SCHOOL_TYPE ."  ";
    // echo "COURSE_NAME:" . $COURSE_NAME ."  ";
    // echo "TEACHING_MODE:" . $TEACHING_MODE ."  ";
    // echo "COURSE_LEVEL:" . $COURSE_LEVEL ."  ";
    // echo "COURSE_DURATION:" . $COURSE_DURATION ."  ";
    // echo "FIELD_OF_STUDY:" . $FIELD_OF_STUDY ."  ";
    // echo "COURSE_CONTENTS:" . $COURSE_CONTENTS ."  ";
    // echo "AVERAGE_STUDENT_SCORE:" . $AVERAGE_STUDENT_SCORE ."  ";
    // echo "STUDENT_PASSING_RATE:" . $STUDENT_PASSING_RATE ."  ";
    // echo "CLASS_SIZE:" . $CLASS_SIZE ."  ";

    // Create the recommender
    $recommender = new TeachingStrategyRecommender();

    // Read data from CSV
    $trainingDataset = $recommender->readCSV('strategy-data.csv');

    // Train the model
    $recommender->train($trainingDataset['data'], $trainingDataset['labels']);

    // Make a recommendation for a new student
    $features = [$AGE, $GENDER, $SCHOOL_TYPE, $PRIMARY_ROLE, $YEAR_OF_EXPERIENCE, $FIELD_OF_STUDY, $CLASS_SIZE, 0, 0, $AVERAGE_STUDENT_SCORE, $STUDENT_PASSING_RATE, 0, 0];

    // $recommendedStrategy = $recommender->recommend($features);
    // echo "Recommended Strategy: $recommendedStrategy\n";
    $recommendedStrategies = $recommender->recommend($features);
    
    session_start();
    foreach ($recommendedStrategies as $index => $value) {
        $_SESSION['strategy-' . ($index + 1)] = $value;
    }
    //print_r($_SESSION);

    header("Location: getrec_pg4.php");

    // Get probability scores
    // $probabilities = $recommender->getProbabilities($features);
    // echo "Probabilities:\n";
    // print_r($probabilities);

    // Get feature importances
    // $importances = $recommender->getFeatureImportances();
    // echo "Feature Importances:\n";
    // print_r($importances);

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}