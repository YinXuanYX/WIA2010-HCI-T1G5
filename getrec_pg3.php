<?php
// Start the session
session_start();

// Store form data in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['COURSE_NAME'] = $_POST['CName'];
  $_SESSION['TEACHING_MODE'] = $_POST['TM'];
  $_SESSION['COURSE_LEVEL'] = $_POST['Clevel'];
  $_SESSION['COURSE_DURATION'] = $_POST['CD'];
  $_SESSION['FIELD_OF_STUDY'] = $_POST['FOS'];
  $_SESSION['COURSE_CONTENTS'] = $_POST['CC'];
  $_SESSION['AVERAGE_STUDENT_SCORE'] = $_POST['ASS'];
  $_SESSION['STUDENT_PASSING_RATE'] = $_POST['SPP'];
  $class_size = $_POST['CSize'];

  if($class_size>40){
    $class_size=2;
  } else if($class_size>30){
    $class_size=1;
  } else {
    $class_size=0;
  }
  $_SESSION['CLASS_SIZE'] = $class_size;

  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Get Recommendation - Page 2</title>
  <link rel="stylesheet" href="gc_style3.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
</head>

<body>
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
      <form action="" method="POST">

        <!-- 1st Table (Top) Start -->
        <table class="input-table">
          <tr>

            <div>
              <td><label for="CName">Course Name</label></td>
              <td  class="input-cell"><input type="text" id="Cname" name="Cname" placeholder="Enter the course name"  class="form-input"></td>
            </div>

          <!-- Teaching Mode Start -->

            <td><label for="TM">Teaching Mode</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="TM" name="TM">
                  <option value="" disabled selected id="select-placeholder">
                    Select the teaching mode
                  </option>
                  <option value="PM">Physical Mode</option>
                  <option value="OM">Online Mode</option>
                  <option value="HB">Hybrid Mode</option>
                </select>
              </div>
            </td>
          </tr>
          <!-- Teaching Mode End -->

         
          <tr>
            <td>
              <label for="Clevel">Course Level</label>
            </td>
            <td class="input-cell">
              <div class="select-container">
                <select id="Clevel" name="Clevel">
                  <option value="" disabled selected id="select-placeholder">
                    Select the course level
                  </option>
                  option value="Cert1">Certificate-Year 1</option>
                  <option value="Diploma">Diploma-Year 1</option>
                  <option value="Diploma">Diploma-Year 2</option>
                  <option value="Diploma">Diploma-Year 3</option>
                  <option value="Bachelor">Bachelor' Degree-Year 1</option>
                  <option value="Bachelor">Bachelor' Degree-Year 2</option>
                  <option value="Bachelor">Bachelor' Degree-Year 3</option>
                  <option value="Bachelor">Bachelor' Degree-Year 4</option>
                  <option value="Master">Master's Degree-Year 1</option>
                </select>
              </div>
            </td>


            <td><label for="CD">Course Duration</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="CD" name="CD">
                  <option value="" disabled selected id="select-placeholder">
                    Select the course duration
                  </option>
                  <option value="short">Short(Less than 1 month)</option>
                  <option value="med">Medium(1-3 months)</option>
                  <option value="long">Long(4 months and above)</option>
                </select>
              </div>
            </td>
          </tr>

          <tr>
            <td><label for="FOS">Field of Study</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="FOS" name="FOS">
                  <option value="" disabled selected id="select-placeholder">
                    Select the field of study
                  </option>
                  <option value="5">Built Environment</option>
                  <option value="2">Languages & Linguistics</option>
                  <option value="0">Pharmacy</option>
                  <option value="5">Engineering</option>
                  <option value="0">Education</option>
                  <option value="0">Dentistry</option>
                  <option value="3">Business amd Economics</option>
                  <option value="0">Medicine</option>
                  <option value="0">Science</option>
                  <option value="1">Computer Science</option>
                  <option value="4">Arts and Social Sciences</option>
                  <option value="4">Creative Arts</option>
                  <option value="0">Law</option>
                  <option value="0">Sport & Exercise Sciences</option>
                </select>
              </div>
            </td>

            <div>
              <td><label for="CC">Course Contents</label></td>
              <td class="input-cell"><input type="text" id="CC" name="CC" placeholder="Enter the course contents" class="form-input"></td>
            </div>

          </tr>


          <tr>
            <td><label for="ASS">Average student score</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="ASS" name="ASS">
                  <option value="" disabled selected id="select-placeholder">
                    Select the average student score
                  </option>
                  <option value="3">90-100</option>
                  <option value="2">80-89</option>
                  <option value="1">70-79</option>
                  <option value="0">60-69</option>
                </select>
              </div>
            </td>

 
            <!-- Student passing rate Start -->
            <td><label for="SPP">Student Passing Percentage</label></td>
            <td class="input-cell">
              <div class="select-container">
                <select id="SPP" name="SPP">
                  <option value="" disabled selected id="select-placeholder">
                    Select percentage
                  </option>
                  <option value="0">0%-50%</option>
                  <option value="1">51%-70%</option>
                  <option value="2">71%-89%</option>
                  <option value="3">90%-100%</option>
                </select>
              </div>
            </td>
            <!-- Student passing rate End -->


          </tr>

          <tr>
            <div>
              <td><label for="CSize">Class Size</label></td>
              <td class="input-cell"><input type="text" id="CSize" name="CSize" placeholder="Enter the class size eg.30"  class="form-input"></td>
            </div>

          </tr>

        </table>
        <!-- 1st Table (Top) End -->

        <!-- Same Row Buttons (Bottom) Start -->
        <div class="same-row-btn">
          <button class="back-btn button">Back</button>
          <button class="sbm-btn button">Submit</button>
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