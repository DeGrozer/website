<!DOCTYPE html>
<html>
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rosario:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/userlogin.css" />
    <title> User: Log In</title>
  </head>
  <body>
    <div class="desktop">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <form method = "POST">
            <div class="text-wrapper">REPORT A PROBLEM</div>
            <div class = "overlap">
              <label for="student_name"> Student Name</label>
              <input type="text" id="studName" name="studName"/>
            </div>

            <div class = "overlap-2">
              <label for="student_name"> Student Number</label>
              <input type="text" id="studNumber" name="studNumber"/>
            </div>

            <div class ="overlap-3">
              <label for="labName">Laboratory</label>
              <select id="dropdown" name="dropdown">
                <option value="option1">LAB 1</option>
                <option value="option2">LAB 2</option>
                <option value="option3">LAB 3</option>
              </select>
            </div>

            <div class="overlap-4">
              <label for="pcNumber">PC Number </label>
              <input type="text" id="pcNumber" name="pcNumber"/>
            </div>

            <div class="overlap-5">
              <label for="problem">Specify Problem</label>
              <input type="text" id="problem" name="problem"/>
            </div>

            <input type="submit" name="submit" id ="submit" value="SUBMIT"/>
          </form>
          

        <?php

          if(isset($_POST['submit']))
          {
            $studName = $_POST['studName'];
            $studNumber = $_POST['studNumber'];
            $dropdown = $_POST['dropdown'];
            $pcNumber = $_POST['pcNumber'];
            $problem = $_POST['problem'];

            if(empty($studName)|| empty($studNumber) || empty($dropdown) || empty($pcNumber)||empty($problem)){
            echo "<div class='message'>There is an Empty Field!";
            } else{
              echo "<div class='message'>Submitted!";
              }
            }
          ?>
        </div>
      </div>    
    </div>
  </body>
</html>
