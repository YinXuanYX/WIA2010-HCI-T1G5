<?php
// Start the session
session_start();

// Initialize an array to store error messages
$errors = [];

// Store form data in session if validation passes
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
  // Validation
  if (!isset($_GET['YOE']) || $_GET['YOE'] === '') {
    $errors['YOE'] = 'Years of experience cannot be empty. Please select the experience.';
  }

  if (!isset($_GET['Age']) || $_GET['Age'] === '') {
    $errors['Age'] = 'Age cannot be empty. Please enter your age.';
  } else if (!preg_match('/^[0-9]+$/', $_GET['Age'])) {
    $errors['Age'] = 'Age should be a number.';
  } else if ($_GET['Age'] < 18) {
    $errors['Age'] = 'Age should greater than 18.';
  }

  if (!isset($_GET['PR']) || $_GET['PR'] === '') {
    $errors['PR'] = 'Role cannot be empty. Please select your role.';
  }
  if (!isset($_GET['GR']) || $_GET['GR'] === '') {
    $errors['GR'] = 'Gender is required.';
  }
  if (!isset($_GET['ST']) || $_GET['ST'] === '') {
    $errors['ST'] = 'School type cannot be empty. Please select your school type.';
  }

  // If there are no errors, store data in session and redirect
  if (empty($errors)) {
    $_SESSION['YEAR_OF_EXPERIENCE'] = $_GET['YOE'];
    $_SESSION['CONVERTED_YEAR_OF_EXPERIENCE'] = substr($_SESSION['YEAR_OF_EXPERIENCE'], 0, 1);
    $_SESSION['AGE'] = $_GET['Age'];
    $_SESSION['PRIMARY_ROLE'] = $_GET['PR'];
    $_SESSION['GENDER'] = $_GET['GR'];
    $_SESSION['SCHOOL_TYPE'] = $_GET['ST'];
    header("Location: getrec_pg3.php");
  }
}

$YOE = isset($_SESSION['YEAR_OF_EXPERIENCE']) ? $_SESSION['YEAR_OF_EXPERIENCE'] : (isset($_GET['YOE']) ? $_GET['YOE'] : '');
if (isset($errors['Age'])) {
  $Age = isset($_GET['Age']) ? $_GET['Age'] : '';
} else {
  $Age = isset($_SESSION['AGE']) ? $_SESSION['AGE'] : (isset($_GET['Age']) ? $_GET['Age'] : '');
}
$PR = isset($_SESSION['PRIMARY_ROLE']) ? $_SESSION['PRIMARY_ROLE'] : (isset($_GET['PR']) ? $_GET['PR'] : '');
$GR = isset($_SESSION['GENDER']) ? $_SESSION['GENDER'] : (isset($_GET['GR']) ? $_GET['GR'] : '');
$ST = isset($_SESSION['SCHOOL_TYPE']) ? $_SESSION['SCHOOL_TYPE'] : (isset($_GET['ST']) ? $_GET['ST'] : '');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Get Recommendation</title>
  <link rel="stylesheet" href="css/gc_shifted_style.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <!-- Bootstrap Libraries Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Self-Created Stylesheet -->
  <link href="css/helper.css" rel="stylesheet">

  <!-- Font Stylesheet -->
  <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
  <?php
  include 'helper/header.php'
    ?>
  <div class="get-recommendation-2">
    <!-- Image Container Start -->
    <div class="image-container">
      <img src="img/image 3.png" alt="Image" />
    </div>
    <!-- Image Container End -->

    <!-- Text Container Start -->
    <div class="text-container">

      <div class="blank"></div>
      <!-- H1 & H2 Start -->
      <h1 id="f30">Step 1: Enter your details</h1>
      <h2 id="f18">
        Tell us a bit about yourself so we can personalize teaching strategies
        that work best for your style!
      </h2>
      <!-- H1 & H2 Start -->

      <!-- Form Start -->
      <form action="" method="GET">

        <!-- 1st Table (Top) Start -->
        <table class="input-table">
          <tr>
            <!-- Years of Experience Start -->
            <td><label for="YOE">Years of Experience</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['YOE']) ? 'error' : ''; ?>">
                <select id="YOE" name="YOE">
                  <option value="" selected disabled id="select-placeholder">
                    Select years of experience
                  </option>
                  <option value="0A" <?php echo $YOE == '0A' ? 'selected' : ''; ?>>
                    Less than 1 year
                  </option>
                  <option value="0B" <?php echo $YOE == '0B' ? 'selected' : ''; ?>>
                    Less than 2 years
                  </option>
                  <option value="1A" <?php echo $YOE == '1A' ? 'selected' : ''; ?>>
                    Less than 3 years
                  </option>
                  <option value="1B" <?php echo $YOE == '1B' ? 'selected' : ''; ?>>
                    More than 3 years
                  </option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['YOE'])): ?>
                <div class="error-message"><?php echo $errors['YOE']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Years of Experience End -->

            <!-- Age Start -->
            <td><label for="Age">Age</label></td>
            <td class="input-cell">
              <input type="text" id="Age" name="Age" placeholder="Enter your age"
                class="form-input <?php echo isset($errors['Age']) ? 'error' : ''; ?>" value="<?php echo $Age; ?>" />
              <!-- Error Message Start -->
              <?php if (isset($errors['Age'])): ?>
                <div class="error-message"><?php echo $errors['Age']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Age End -->
          </tr>

          <tr>
            <!-- Primary Role Start -->
            <td><label for="PR">Primary Role</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['PR']) ? 'error' : ''; ?>">
                <select id="PR" name="PR">
                  <option value="" disabled selected id="select-placeholder">
                    Select your role
                  </option>
                  <option value="2" <?php echo $PR == '2' ? 'selected' : ''; ?>>
                    Administration Staff</option>
                  <option value="1" <?php echo $PR == '1' ? 'selected' : ''; ?>>Full-Time
                    Teachers</option>
                  <option value="3" <?php echo $PR == '3' ? 'selected' : ''; ?>>Teaching
                    and Research Supervisors</option>
                  <option value="0" <?php echo $PR == '0' ? 'selected' : ''; ?>>Others
                  </option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['PR'])): ?>
                <div class="error-message"><?php echo $errors['PR']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Primary Role End -->

            <!-- Gender Start -->
            <td>
              <label for="GR">Gender</label>
            </td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['GR']) ? 'error' : ''; ?>">
                <select id="GR" name="GR">
                  <option value="" disabled selected id="select-placeholder">
                    Select your gender
                  </option>
                  <option value="1" <?php echo $GR == '1' ? 'selected' : ''; ?>>Male
                  </option>
                  <option value="0" <?php echo $GR == '0' ? 'selected' : ''; ?>>Female
                  </option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['GR'])): ?>
                <div class="error-message"><?php echo $errors['GR']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- Gender End -->
          </tr>

          <tr>
            <!-- School Type Start -->
            <td><label for="ST">School Type</label></td>
            <td class="input-cell">
              <div class="select-container <?php echo isset($errors['ST']) ? 'error' : ''; ?>">
                <select id="ST" name="ST">
                  <option value="" disabled selected id="select-placeholder">
                    Select school type
                  </option>
                  <option value="1" <?php echo $ST == '1' ? 'selected' : ''; ?>>Higher
                    Vocational School</option>
                  <option value="3" <?php echo $ST == '3' ? 'selected' : ''; ?>>Secondary
                    Vocational School</option>
                  <option value="2" <?php echo $ST == '2' ? 'selected' : ''; ?>>University
                  </option>
                  <option value="0" <?php echo $ST == '0' ? 'selected' : ''; ?>>Other
                  </option>
                </select>
              </div>
              <!-- Error Message Start -->
              <?php if (isset($errors['ST'])): ?>
                <div class="error-message"><?php echo $errors['ST']; ?></div>
              <?php endif; ?>
              <!-- Error Message End -->
            </td>
            <!-- School Type End -->
            <td></td>
            <td></td>
          </tr>
        </table>
        <!-- 1st Table (Top) End -->

        <!-- 2nd Table (Bottom) Start -->
        <table class="teaching-style-preference">
          <tr>
            <!-- h3 & h6 Start -->
            <td colspan="4">
              <h3>Teaching Style(s) Preference</h3>
              <h6>• Tick on the box(es) wherever related to you</h6>
            </td>
            <!-- h3 & h6 End -->
          </tr>
          <tr class="same-row">
            <!-- Authority, or lecture style Start -->
            <td>
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="authority-style" id="authority-style" />
                <label for="authority-style" style="--size: 30px">
                  <svg viewBox="0,0,40,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td>
              <label for="authority-style" class="label-box">Authority, or lecture style</label>
            </td>
            <!-- Authority, or lecture style End -->
            <td>
              <!-- Facilitator, or activity style Start -->
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="facilitator-style" id="facilitator-style" />
                <label for="facilitator-style" style="--size: 30px">
                  <svg viewBox="0,0,50,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td>
              <label for="facilitator-style" class="label-box">Facilitator, or activity style</label>
            </td>
            <!-- Facilitator, or activity style End -->
          </tr>
          <tr class="same-row">
            <!-- Demonstrator, or coach style Start -->
            <td>
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="demonstrator-style" id="demonstrator-style" />
                <label for="demonstrator-style" style="--size: 30px">
                  <svg viewBox="0,0,50,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td>
              <label for="demonstrator-style" class="label-box">Demonstrator, or coach style</label>
            </td>
            <!-- Demonstrator, or coach style End -->

            <!-- Hybrid, or blended style Start -->
            <td>
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="hybrid-style" id="hybrid-style" />
                <label for="hybrid-style" style="--size: 30px">
                  <svg viewBox="0,0,50,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td>
              <label for="hybrid-style" class="label-box">Hybrid, or blended style</label>
            </td>
            <!-- Hybrid, or blended style End -->
          </tr>
          <tr class="same-row">
            <!-- Delegator, or group style Start -->
            <td>
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="delegator-style" id="delegator-style" />
                <label for="delegator-style" style="--size: 30px">
                  <svg viewBox="0,0,50,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td>
              <label for="delegator-style" class="label-box">Delegator, or group style</label>
            </td>
            <!-- Delegator, or group style End -->

            <!-- Other style Start -->
            <td>
              <div class="checkbox-wrapper-23">
                <input type="checkbox" name="other" id="other" />
                <label for="other" style="--size: 30px">
                  <svg viewBox="0,0,50,50">
                    <path d="M5 30 L 20 45 L 45 5"></path>
                  </svg>
                </label>
              </div>
            </td>
            <td class="other input-cell">
              <label for="other">Other:</label>
              <input type="text" id="other-style" name="other-style" placeholder="Please specify" class="form-input" />
            </td>
            <!-- Other style End -->
          </tr>
          <tr class="same-row">
            <td colspan="4" class="small-text">* Optional</td>
          </tr>
        </table>
        <!-- 2nd Table (Bottom) End -->

        <!-- Same Row Buttons (Bottom) Start -->
        <div class="same-row-btn">
          <button type="button" class="cancel-btn button" onclick="location.href='getrec_pg1.php'">Cancel</button>
          <button type="submit" class="next-btn button">Next</button>
        </div>
        <!-- Same Row Buttons (Bottom) End -->
      </form>
      <!-- Form End -->
    </div>
    <!-- Text Container End -->
  </div>

  <?php
  include 'helper/footer.php'
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