<?php
require_once 'vendor/autoload.php';

use Rubix\ML\Classifiers\RandomForest;
use Rubix\ML\Classifiers\ClassificationTree;
use Rubix\ML\Datasets\Labeled;

session_start();

$YEAR_OF_EXPERIENCE = $_SESSION['YEAR_OF_EXPERIENCE'];
$AGE = $_SESSION['AGE'];
$PRIMARY_ROLE = $_SESSION['PRIMARY_ROLE'];
$GENDER = $_SESSION['GENDER'];
$SCHOOL_TYPE = $_SESSION['SCHOOL_TYPE'];
$COURSE_NAME = $_SESSION['COURSE_NAME'];
$TEACHING_MODE = $_SESSION['TEACHING_MODE'];
$COURSE_LEVEL = $_SESSION['COURSE_LEVEL'];
$COURSE_DURATION = $_SESSION['COURSE_DURATION'];
$FIELD_OF_STUDY = $_SESSION['FIELD_OF_STUDY'];
$COURSE_CONTENTS = $_SESSION['COURSE_CONTENTS'];
$AVERAGE_STUDENT_SCORE = $_SESSION['AVERAGE_STUDENT_SCORE'];
$STUDENT_PASSING_RATE = $_SESSION['STUDENT_PASSING_RATE'];
$CLASS_SIZE = $_SESSION['CLASS_SIZE'];


class TeachingStrategyRecommender {
    private RandomForest $model;

    public function __construct(int $estimators = 100) {
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
    private function prepareDataset(array $trainingData, array $labels): Labeled {
        return new Labeled($trainingData, $labels);
    }

    /**
     * Train the model
     * 
     * @param array $trainingData Array of feature vectors
     * @param array $labels Corresponding teaching strategy labels
     */
    public function train(array $trainingData, array $labels): void {
        $dataset = $this->prepareDataset($trainingData, $labels);
        $this->model->train($dataset);
    }

    /**
     * Predict the most suitable teaching strategy
     * 
     * @param array $features Feature vector of a student
     * @return string Recommended teaching strategy
     */
    public function recommend(array $features): string {
        return $this->model->predict(new Labeled([$features], ['']))[0];
    }

    /**
     * Get probability scores for different teaching strategies
     * 
     * @param array $features Feature vector of a student
     * @return array Probability scores for each strategy
     */
    public function getProbabilities(array $features): array {
        return $this->model->proba(new Labeled([$features], ['']))[0];
    }

    /**
     * Get feature importances to understand what factors most influence the recommendation
     * 
     * @return array Feature importance scores
     */
    public function getFeatureImportances(): array {
        return $this->model->featureImportances();
    }

    /**
     * Read data from CSV file
     * 
     * @param string $filename Path to the CSV file
     * @return array Associative array with 'data' and 'labels'
     */
    public function readCSV(string $filename): array {
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

// Example usage
try {
    // Create the recommender
    $recommender = new TeachingStrategyRecommender();

    // Read data from CSV
    $trainingDataset = $recommender->readCSV('strategy-data.csv');

    // Train the model
    $recommender->train($trainingDataset['data'], $trainingDataset['labels']);

    // Make a recommendation for a new student
    $newStudentFeatures = [$AGE,$GENDER,$SCHOOL_TYPE,$PRIMARY_ROLE,$YEAR_OF_EXPERIENCE,$FIELD_OF_STUDY,$CLASS_SIZE,0,0,$AVERAGE_STUDENT_SCORE,$STUDENT_PASSING_RATE,0,0];
    $recommendedStrategy = $recommender->recommend($newStudentFeatures);
    echo "Recommended Strategy: $recommendedStrategy\n";

    // Get probability scores
    $probabilities = $recommender->getProbabilities($newStudentFeatures);
    echo "Probabilities:\n";
    print_r($probabilities);

    // Get feature importances
    $importances = $recommender->getFeatureImportances();
    echo "Feature Importances:\n";
    print_r($importances);

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}