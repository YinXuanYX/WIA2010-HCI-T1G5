<?php
// Start the session
session_start();

// Store form data in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['YEAR_OF_EXPERIENCE'] = $_POST['YOE'];
  $_SESSION['AGE'] = $_POST['Age'];
  $_SESSION['PRIMARY_ROLE'] = $_POST['PR'];
  $_SESSION['GENDER'] = $_POST['GR'];
  $_SESSION['SCHOOL_TYPE'] = $_POST['ST'];
  header("Location: getrec_pg3.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Get Recommendation - Page 2</title>
  <link rel="stylesheet" href="gc_shifted_style.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <div class="get-recommendation-2">
    <!-- Image Container Start -->
    <div class="image-container">
      <img src="Images/image 3.png" alt="Image" />
    </div>
    <!-- Image Container End -->

    <!-- Text Container Start -->
    <div class="text-container">

      <!-- H1 & H2 Start -->
      <h1 id="f30">Step 1: Enter your details</h1>
      <h2 id="f18">
        Tell us a bit about yourself so we can personalize teaching strategies
        that work best for your style!
      </h2>
      <!-- H1 & H2 Start -->

      <!-- Form Start -->
      <form action="" method="POST">

        <!-- 1st Table (Top) Start -->
        <table class="input-table">
          <tr>
            <!-- Years of Experience Start -->
            <td><label for="YOE">Years of Experience</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="YOE" name="YOE">
                  <option value="" disabled selected id="select-placeholder">
                    Select years of experience
                  </option>
                  <option value="0">Less than 1 year</option>
                  <option value="0">Less than 2 years</option>
                  <option value="1">Less than 3 years</option>
                  <option value="1">More than 3 years</option>
                </select>
              </div>
            </td>
            <!-- Years of Experience End -->

            <!-- Age Start -->
            <td><label for="Age">Age</label></td>
            <td class="input-cell">
              <input type="number" id="Age" name="Age" placeholder="Enter your age" class="form-input" />
              <!-- Error Message Start -->
              <div class="error-message">
                Age should be a number and greater than 18.
              </div>
              <!-- Error Message End -->
            </td>
            <!-- Age End -->
          </tr>

          <tr>
            <!-- Primary Role Start -->
            <td><label for="PR">Primary Role</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="PR" name="PR">
                  <option value="" disabled selected id="select-placeholder">
                    Select your role
                  </option>
                  <option value="2">Administration Staff</option>
                  <option value="1">Full-Time Teachers</option>
                  <option value="3">Teaching and Research Supervisors</option>
                  <option value="0">Others</option>
                </select>
              </div>
            </td>
            <!-- Primary Role End -->

            <!-- Gender Start -->
            <td>
              <label for="GR">Gender</label>
            </td>
            <td class="input-cell">
              <div class="select-container">
                <select id="GR" name="GR">
                  <option value="" disabled selected id="select-placeholder">
                    Select your gender
                  </option>
                  <option value="1">Male</option>
                  <option value="0">Female</option>
                </select>
              </div>
            </td>
            <!-- Gender End -->
          </tr>

          <tr>
            <!-- School Type Start -->
            <td><label for="ST">School Type</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="ST" name="ST">
                  <option value="" disabled selected id="select-placeholder">
                    Select school type
                  </option>
                  <option value="1">Higher Vocational School</option>
                  <option value="3">Secondary Vocational School</option>
                  <option value="2">University</option>
                  <option value="0">Other</option>
                </select>
              </div>
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
                  <svg viewBox="0,0,50,50">
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
            <td class="other">
              <label for="other">Other:</label>
              <input type="text" id="other-style" name="other-style" placeholder="Please specify" />
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
          <button class="cancel-btn button">Cancel</button>
          <button class="next-btn button">Next</button>
        </div>
        <!-- Same Row Buttons (Bottom) End -->
      </form>
      <!-- Form End -->
    </div>
    <!-- Text Container End -->
  </div>

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