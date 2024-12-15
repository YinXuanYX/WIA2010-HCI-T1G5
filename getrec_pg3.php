<?php
// Start the session
session_start();

// Initialize an array to store error messages
$errors = [];

// Store form data in session if validation passes
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {

  // Validation
  if (!isset($_GET['Cname']) || $_GET['Cname'] === '') {
    $errors['Cname'] = 'Course name cannot be empty. Please enter the course name.';
  }

  if (!isset($_GET['TM']) || $_GET['TM'] === '') {
    $errors['TM'] = 'Teaching mode cannot be empty. Please select the teaching mode.';
  }

  if (!isset($_GET['Clevel']) || $_GET['Clevel'] === '') {
    $errors['Clevel'] = 'Course level cannot be empty. Please select the course level.';
  }

  if (!isset($_GET['CD']) || $_GET['CD'] === '') {
    $errors['CD'] = 'Course duration cannot be empty. Please select the course duration.';
  }

  if (!isset($_GET['FOS']) || $_GET['FOS'] === '') {
    $errors['FOS'] = 'Field of study cannot be empty. Please select the field of study.';
  }

  if (!isset($_GET['Csize']) || $_GET['Csize'] === '') {
    $errors['Csize'] = 'Class size cannot be empty. Please enter the class size.';
  } else if (!preg_match('/^[0-9]+$/', $_GET['Csize'])) {
    $errors['Csize'] = 'Class size should be a number.';
  } else if ($_GET['Csize'] < 1) {
    $errors['Csize'] = 'Class size should greater than 0.';
  }

  // Store form data in session
  if (empty($errors)) {
    $_SESSION['COURSE_NAME'] = $_GET['Cname'];
    $_SESSION['TEACHING_MODE'] = $_GET['TM'];
    $_SESSION['COURSE_LEVEL'] = $_GET['Clevel'];
    $_SESSION['COURSE_DURATION'] = $_GET['CD'];
    $_SESSION['FIELD_OF_STUDY'] = $_GET['FOS'];
    $_SESSION['COURSE_CONTENTS'] = $_GET['CC'];
    $_SESSION['AVERAGE_STUDENT_SCORE'] = $_GET['ASS'];
    $_SESSION['STUDENT_PASSING_RATE'] = $_GET['SPP'];
    $_SESSION['CLASS_SIZE'] = $_GET['Csize'];
    if ($_SESSION['CLASS_SIZE'] > 40) {
      $class_size = 2;
    } else if ($_SESSION['CLASS_SIZE'] > 30) {
      $class_size = 1;
    } else {
      $class_size = 0;
    }
    $_SESSION['CONVERTED_CLASS_SIZE'] = $class_size;
    $_SESSION['CONVERTED_FIELD_OF_STUDY'] = substr($_SESSION['FIELD_OF_STUDY'], 0, 1);
    header("Location: ml.php");
  }
}

if (isset($errors['Cname'])) {
  $Cname = isset($_GET['Cname']) ? $_GET['Cname'] : '';
} else {
  $Cname = isset($_SESSION['COURSE_NAME']) ? $_SESSION['COURSE_NAME'] : (isset($_GET['Cname']) ? $_GET['Cname'] : '');
}
$TM = isset($_SESSION['TEACHING_MODE']) ? $_SESSION['TEACHING_MODE'] : (isset($_GET['TM']) ? $_GET['TM'] : '');
$Clevel = isset($_SESSION['COURSE_LEVEL']) ? $_SESSION['COURSE_LEVEL'] : (isset($_GET['Clevel']) ? $_GET['Clevel'] : '');
$CD = isset($_SESSION['COURSE_DURATION']) ? $_SESSION['COURSE_DURATION'] : (isset($_GET['CD']) ? $_GET['CD'] : '');
$FOS = isset($_SESSION['FIELD_OF_STUDY']) ? $_SESSION['FIELD_OF_STUDY'] : (isset($_GET['FOS']) ? $_GET['FOS'] : '');
if (isset($errors['CC'])) {
  $CC = isset($_GET['CC']) ? $_GET['CC'] : '';
} else {
  $CC = isset($_SESSION['COURSE_CONTENTS']) ? $_SESSION['COURSE_CONTENTS'] : (isset($_GET['CC']) ? $_GET['CC'] : '');
}
$ASS = isset($_SESSION['AVERAGE_STUDENT_SCORE']) ? $_SESSION['AVERAGE_STUDENT_SCORE'] : (isset($_GET['ASS']) ? $_GET['ASS'] : '');
$SPP = isset($_SESSION['STUDENT_PASSING_RATE']) ? $_SESSION['STUDENT_PASSING_RATE'] : (isset($_GET['SPP']) ? $_GET['SPP'] : '');
if (isset($errors['CC'])) {
  $Csize = isset($_GET['Csize']) ? $_GET['Csize'] : '';
} else {
  $Csize = isset($_SESSION['CLASS_SIZE']) ? $_SESSION['CLASS_SIZE'] : (isset($_GET['Csize']) ? $_GET['Csize'] : '');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Get Recommendation - Page 2</title>
  <link rel="stylesheet" href="gc_style3.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <!-- Bootstrap Libraries Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Self-Created Stylesheet -->
  <link href="css/hci.css" rel="stylesheet">

  <!-- Font Stylesheet -->
  <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
  <?php
  include 'header.php'
    ?>
  <div class="get-recommendation-2">

    <!-- Text Container Start -->
    <div class="text-container">

      <!-- H1 & H2 Start -->
      <h1 id="f30">Step 2: Enter your course details</h1>
      <h2 id="f18">
        Share details about your course so we can tailor a personalized teaching plan just for you!
      </h2>
      <!-- H1 & H2 Start -->

      <!-- Form Start -->
      <form action="" method="GET">

        <!-- 1st Table (Top) Start -->
        <table class="input-table">
          <tr>

            <div>
              <td><label for="Cname">Course Name</label></td>
              <td class="input-cell"><input type="text" id="Cname" name="Cname" placeholder="Enter the course name"
                  class="form-input <?php echo isset($errors['Cname']) ? 'error' : ''; ?>"
                  value="<?php echo $Cname; ?>">
                <!-- Error Message Start -->
                <?php if (isset($errors['Cname'])): ?>
                  <div class="error-message"><?php echo $errors['Cname']; ?></div>
                <?php endif; ?>
                <!-- Error Message End -->
              </td>
            </div>

            <!-- Teaching Mode Start -->
            <td><label for="TM">Teaching Mode</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['TM']) ? 'error' : ''; ?>">
                <select id="TM" name="TM">
                  <option value="" disabled selected id="select-placeholder">
                    Select the teaching mode
                  </option>
                  <option value="PM" <?php echo $TM == 'PM' ? 'selected' : ''; ?>>Physical Mode</option>
                  <option value="OM" <?php echo $TM == 'OM' ? 'selected' : ''; ?>>Online Mode</option>
                  <option value="HB" <?php echo $TM == 'HB' ? 'selected' : ''; ?>>Hybrid Mode</option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['TM'])): ?>
                <div class="error-message"><?php echo $errors['TM']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Teaching Mode End -->
          </tr>



          <tr>
            <td>
              <label for="Clevel">Course Level</label>
            </td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['Clevel']) ? 'error' : ''; ?>">
                <select id="Clevel" name="Clevel">
                  <option value="" disabled selected id="select-placeholder">
                    Select the course level
                  </option>
                  option value="Cert1">Certificate-Year 1</option>
                  <option value="Diploma-1" <?php echo $Clevel == 'Diploma-1' ? 'selected' : ''; ?>>Diploma-Year 1
                  </option>
                  <option value="Diploma-2" <?php echo $Clevel == 'Diploma-2' ? 'selected' : ''; ?>>Diploma-Year 2
                  </option>
                  <option value="Diploma-3" <?php echo $Clevel == 'Diploma-3' ? 'selected' : ''; ?>>Diploma-Year 3
                  </option>
                  <option value="Bachelor-1" <?php echo $Clevel == 'Bachelor-1' ? 'selected' : ''; ?>>Bachelor'
                    Degree-Year 1</option>
                  <option value="Bachelor-2" <?php echo $Clevel == 'Bachelor-2' ? 'selected' : ''; ?>>Bachelor'
                    Degree-Year 2</option>
                  <option value="Bachelor-3" <?php echo $Clevel == 'Bachelor-3' ? 'selected' : ''; ?>>Bachelor'
                    Degree-Year 3</option>
                  <option value="Bachelor-4" <?php echo $Clevel == 'Bachelor-4' ? 'selected' : ''; ?>>Bachelor'
                    Degree-Year 4</option>
                  <option value="Master-1" <?php echo $Clevel == 'Master-1' ? 'selected' : ''; ?>>Master's Degree-Year 1
                  </option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['Clevel'])): ?>
                <div class="error-message"><?php echo $errors['Clevel']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>


            <td><label for="CD">Course Duration</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['CD']) ? 'error' : ''; ?>">
                <select id="CD" name="CD">
                  <option value="" disabled selected id="select-placeholder">
                    Select the course duration
                  </option>
                  <option value="short" <?php echo $CD == 'short' ? 'selected' : ''; ?>>Short(Less than 1 month)</option>
                  <option value="med" <?php echo $CD == 'med' ? 'selected' : ''; ?>>Medium(1-3 months)</option>
                  <option value="long" <?php echo $CD == 'long' ? 'selected' : ''; ?>>Long(4 months and above)</option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['CD'])): ?>
                <div class="error-message"><?php echo $errors['CD']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
          </tr>

          <tr>
            <td><label for="FOS">Field of Study</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['FOS']) ? 'error' : ''; ?>">
                <select id="FOS" name="FOS">
                  <option value="" disabled selected id="select-placeholder">
                    Select the field of study
                  </option>
                  <option value="5-1" <?php echo $FOS == '5-1' ? 'selected' : ''; ?>>Built Environment</option>
                  <option value="2-1" <?php echo $FOS == '2-1' ? 'selected' : ''; ?>>Languages & Linguistics</option>
                  <option value="0-1" <?php echo $FOS == '0-1' ? 'selected' : ''; ?>>Pharmacy</option>
                  <option value="5-2" <?php echo $FOS == '5-2' ? 'selected' : ''; ?>>Engineering</option>
                  <option value="0-2" <?php echo $FOS == '0-2' ? 'selected' : ''; ?>>Education</option>
                  <option value="0-3" <?php echo $FOS == '0-3' ? 'selected' : ''; ?>>Dentistry</option>
                  <option value="3-1" <?php echo $FOS == '3-1' ? 'selected' : ''; ?>>Business amd Economics</option>
                  <option value="0-4" <?php echo $FOS == '0-4' ? 'selected' : ''; ?>>Medicine</option>
                  <option value="0-5" <?php echo $FOS == '0-5' ? 'selected' : ''; ?>>Science</option>
                  <option value="1-1" <?php echo $FOS == '1-1' ? 'selected' : ''; ?>>Computer Science</option>
                  <option value="4-1" <?php echo $FOS == '4-1' ? 'selected' : ''; ?>>Arts and Social Sciences</option>
                  <option value="4-2" <?php echo $FOS == '4-2' ? 'selected' : ''; ?>>Creative Arts</option>
                  <option value="0-6" <?php echo $FOS == '0-6' ? 'selected' : ''; ?>>Law</option>
                  <option value="0-7" <?php echo $FOS == '0-7' ? 'selected' : ''; ?>>Sport & Exercise Sciences</option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['FOS'])): ?>
                <div class="error-message"><?php echo $errors['FOS']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>

            <div>
              <td><label for="CC">Course Contents</label></td>
              <td class="input-cell"><input type="text" id="CC" name="CC" placeholder="Enter the course contents"
                  class="form-input <?php echo isset($errors['CC']) ? 'error' : ''; ?>" <?php echo $CC; ?>>

                <div colspan="4" class="small-text">* Optional</div>
                <!-- Error Message Start -->
                <?php if (isset($errors['CC'])): ?>
                  <div class="error-message"><?php echo $errors['CC']; ?></div>
                <?php endif; ?>
                <!-- Error Message End -->
              </td>
            </div>

          </tr>


          <tr>
            <td><label for="ASS">Average student score</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['ASS']) ? 'error' : ''; ?>">
                <select id="ASS" name="ASS">
                  <option value="" disabled selected id="select-placeholder">
                    Select the average student score
                  </option>
                  <option value="3" <?php echo $ASS == '3' ? 'selected' : ''; ?>>90-100</option>
                  <option value="2" <?php echo $ASS == '2' ? 'selected' : ''; ?>>80-89</option>
                  <option value="1" <?php echo $ASS == '1' ? 'selected' : ''; ?>>70-79</option>
                  <option value="0" <?php echo $ASS == '0' ? 'selected' : ''; ?>>60-69</option>
                </select>
              </div>

              <div colspan="4" class="small-text">* Optional</div>

              <!-- Error Message Start -->
              <?php if (isset($errors['ASS'])): ?>
                <div class="error-message"><?php echo $errors['ASS']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>


            <!-- Student passing rate Start -->
            <td><label for="SPP">Student Passing Percentage</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['SPP']) ? 'error' : ''; ?>">
                <select id="SPP" name="SPP">
                  <option value="" disabled selected id="select-placeholder">
                    Select percentage
                  </option>
                  <option value="0" <?php echo $SPP == '0' ? 'selected' : ''; ?>>0%-50%</option>
                  <option value="1" <?php echo $SPP == '1' ? 'selected' : ''; ?>>51%-70%</option>
                  <option value="2" <?php echo $SPP == '2' ? 'selected' : ''; ?>>71%-89%</option>
                  <option value="3" <?php echo $SPP == '3' ? 'selected' : ''; ?>>90%-100%</option>
                </select>
              </div>

              <div colspan="4" class="small-text">* Optional</div>

              <!-- Error Message Start -->
              <?php if (isset($errors['SPP'])): ?>
                <div class="error-message"><?php echo $errors['SPP']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Student passing rate End -->


          </tr>

          <tr>
            <div>
              <td><label for="Csize">Class Size</label></td>
              <td class="input-cell"><input type="text" id="Csize" name="Csize" placeholder="Enter the class size eg.30"
                  class="form-input <?php echo isset($errors['Csize']) ? 'error' : ''; ?>"
                  value="<?php echo $Csize; ?>">
                <!-- Error Message Start -->
                <?php if (isset($errors['Csize'])): ?>
                  <div class="error-message"><?php echo $errors['Csize']; ?></div>
                <?php endif; ?>
                <!-- Error Message End -->
              </td>
            </div>

          </tr>

        </table>
        <!-- 1st Table (Top) End -->

        <!-- Same Row Buttons (Bottom) Start -->
        <div class="same-row-btn">
          <button type="button" class="back-btn button" onclick="location.href='getrec_pg2.php'">Back</button>
          <button type="submit" class="sbm-btn button">Submit</button>
        </div>
        <!-- Same Row Buttons (Bottom) End -->
      </form>
      <!-- Form End -->
    </div>
    <!-- Text Container End -->

    <!-- Image Container Start -->
    <div class="image-container">
      <img src="Images/image 4.png" alt="Image" />
    </div>
    <!-- Image Container End -->
  </div>

  <?php
  include 'footer.php'
    ?>

  <script>
    // Script for selection list
    var x, i, j, l, ll, selElmnt, a, b, c, arrow, text;
    x = document.getElementsByClassName("select-container");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      text = document.createElement("SPAN");
      text.classList.add("select-text");
      text.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      a.appendChild(text);
      arrow = document.createElement("DIV");
      arrow.classList.add("select-arrow");
      arrow.innerHTML = '<i class="fas fa-light fa-chevron-down"></i>';
      a.appendChild(arrow);
      x[i].appendChild(a);
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;

          var text = h.getElementsByClassName("select-text")[0];
          text.innerHTML = this.innerHTML;

          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }
    function closeAllSelect(elmnt) {
      var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;

      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i);
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    document.addEventListener("click", closeAllSelect);
  </script>
</body>

</html>