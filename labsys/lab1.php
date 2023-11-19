<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lab1.css" />
</head>
<body>
    <div class="desktop">
        <div class="overlap-group">
            <div class="welcome">Welcome, Admin!</div>
            <div class="menu">
                <ul>
                    <div class="menu-container">
                        <a href=""><li><img src="img/dashboard.png" alt="Dashboard"><div class="text-wrapper-5">Dashboard</div></li></a>
                    </div>
                    <div class="menu-container">
                        <a href="reports.php"><li><img src="img/reports.png" alt="Reports"><div class="text-wrapper-5">Reports</div></li></a>
                    </div>
                    <div class="menu-container-1">
                        <a href=""><li><img src="img/labs.png" alt="Laboratories"><div class="text-wrapper-5">Laboratories</div></li></a>
                        <ul class="dropdown">
                            <div class="drop-container">
                                <a href="lab1.php"><li>Lab 1</li></a>
                            </div>
                            <div class="drop-container">
                                <a href=""><li>Lab 2</li></a>
                            </div>
                            <div class="drop-container">
                                <a href=""><li>Lab 3</li></a>
                            </div>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="frame">
                <div class="LOG-OUT-wrapper"><div class="LOG-OUT">LOG OUT</div></div>
            </div>
        </div>
        <div class="lab1" style="background-color: transparent;">
            <h1>LAB 1</h1>
            <form method="post">
                <button type="submit" name="addComputer">Add PC</button>
                <div id="computerContainer" class="computer-container">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addComputer'])) {
                        $computerCount = $_POST['computerCount'] ?? 0;
                        $computerCount++;

                        for ($i = 1; $i <= $computerCount; $i++) {
                            echo "
                            <div class='dropdown-container'>
                                <div class='container'>
                                    <div class='frame-5'>
                                        <img class='vector' src='img/pc.png' />
                                        <div class='text-wrapper-6'>PC $i</div>
                                        <select class='dropdown-box'>
                                            <option value='' disabled selected>Status</option>
                                            <option value='option1'>WORKING</option>
                                            <option value='option2'>UNDER MAINTENANCE</option>
                                            <option value='option3'>NOT FUNCTIONAL</option>
                                        </select>
                                        <label class='status-label'></label>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                        echo "<input type='hidden' name='computerCount' value='$computerCount'>";
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
