<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Dashboard</title>
</head>
  <body>
    <div class="desktop">
      <div class="div">
        <div class="overlap-group">
          <div class="text-wrapper">Welcome, Admin!</div>
          <div class = "menu">
            <ul>
              <div class = "menu-container">
                <a href = ""><li><img src = "img/dashboard.png" alt = "Dashboard"><div class="text-wrapper-5">Dashboard</div></li></a>
              </div>
              <div class = "menu-container">
                <a href = "reports.php"><li><img src = "img/reports.png" alt = "Reports"><div class="text-wrapper-5">Reports</div></li></a>
              </div>
              <div class = "menu-container-1">
                <a href = ""><li><img src = "img/labs.png" alt = "Laboratories"><div class="text-wrapper-5">Laboratories</div></li></a>
                <ul class = "dropdown">
                  <div class = "drop-container">
                    <a href = "lab1.php"><li>Lab 1<li></a>
                  </div>
                  <div class = "drop-container">
                    <a href = ""><li>Lab 2<li></a>
                  </div>
                  <div class = "drop-container">
                    <a href = ""><li>Lab 3<li></a>
                  </div>
                </ul>
              </div>
            </ul>
          </div>

          

          <div class="frame">
            <div class="LOG-OUT-wrapper"><a href = "index.php"><div class="LOG-OUT">LOG OUT</div></a></div>
          </div>
        </div>

        <div id = "container">
            <div class="rectangle">
                <div class="p">
                    <span class="span">6<br /></span> <p>UNDER <br/>MAINTENANCE</p>
                </div>
            </div>
            <div class="rectangle">
                <div class="p">
                    <span class="span">6<br /></span> <p>PROBLEMS<br/> SUBMITTED</p>
            </div>
            </div>
            <div class="rectangle">
                <div class="p">
                    <span class="span">6<br /></span> <p>DONE</p>
                </div>
            </div>
        </div>
        
      </div>
    </div>
</body>
</html>