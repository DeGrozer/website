<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/indexstyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@700&display=swap" rel="stylesheet">
</head>
<body>
  <canvas class="orb-canvas"></canvas>

  <div class="overlay">
    <div class="vl"></div>
    <!-- Title -->
    <h1 class="overlayTitle">
        LABORATORY <br /> EQUIPMENT <br />INVENTORY <br />SYSTEM
    </h1>
   <a href = "login_admin.php"> <button class="login">LOG IN</button></a>

    <div class="flex-container">
      <div class="report-container">
       
        <div class="container">
    <div class="table">
    <div class="report">
          <h1>REPORT A PROBLEM</h1>
        </div>
      <div class="row lab-and-dropdown">
        <!-- Laboratory dropdown -->
        <h1>LABORATORY</h1>
        <select class="dropdown-box">
          <option value="" disabled selected>SELECT A LAB</option>
          <option value="option1">MAC LAB</option>
          <option value="option2">IT LAB 1</option>
          <option value="option3">IT LAB 2</option>
          <option value="option4">IT LAB 3</option>
        </select>
      </div>
      <div class="row pc-and-dropdown">
        <!-- PC Number dropdown -->
        <h1>PC NUMBER</h1>
        <select class="dropdown-box-pc">
          <option value="" disabled selected>SELECT A LAB</option>
          <option value="option1">MAC LAB</option>
          <option value="option2">IT LAB 1</option>
          <option value="option3">IT LAB 2</option>
          <option value="option4">IT LAB 3</option>
        </select>
      </div>
      <div class="row specify-problem">
        <!-- Specify Problem section -->
        <h1>SPECIFY PROBLEM</h1>
        <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter text here..."></textarea>
        <button class="submit">SUBMIT</button>
      </div>
    </div>
  </div>

       
        
      </div>
     
    </div>
 
  </div>
</body>
</html>
