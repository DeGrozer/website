<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lab1.css" />
    <style>
   
    </style>
    
    <script>
        let labCount = 0;

        function addLab() {
            labCount++;

            const labName = prompt(`Enter the name for Lab ${labCount}:`);
            if (labName) {
                const menu = document.querySelector('.menu');
                const labsMenu = menu.querySelector('.menu-container-1 ul.dropdown');

                const newLab = document.createElement('div');
                newLab.classList.add('drop-container');
                newLab.innerHTML = `<a href="#" onclick="showLab(${labCount})"><li>${labName}</li></a>`;

                labsMenu.appendChild(newLab);

                const labSection = document.createElement('div');
                labSection.classList.add('lab1'); // Always use lab1 class
                labSection.id = `lab${labCount}`; // Unique ID for each lab
                labSection.style.display = 'none'; 
                labSection.innerHTML = `
                    <h1>${labName}</h1>
                    <form method="post">
                        <button type="button" onclick="addPC(${labCount})">Add PC</button>
                        <button type="button" onclick="saveLayout(${labCount})">Save Layout</button> 
                        <div id="computerContainer${labCount}" class="computer-container">
                            <!-- PCs will be dynamically added here -->
                        </div>
                    </form>
                `;

                const desktop = document.querySelector('.desktop');
                desktop.appendChild(labSection);
                showLab(labCount); 
            }
        }

        function showLab(labNumber) {
            const labs = document.querySelectorAll('.desktop > div[class^="lab"]');
            labs.forEach(lab => lab.style.display = 'none');

            const selectedLab = document.querySelector(`.desktop > #lab${labNumber}`);
            if (selectedLab) {
                selectedLab.style.display = 'block';
            }
        }

        function addPC(labNumber) {
            const computerContainer = document.getElementById(`computerContainer${labNumber}`);
            const pcCount = computerContainer.childElementCount + 1; 

            const newPC = document.createElement('div');
            newPC.classList.add('dropdown-container');
            newPC.innerHTML = `
                <div class='container'>
                    <div class='frame-5'>
                        <img class='vector' src='img/pc.png' />
                        <div class='text-wrapper-6'>PC ${pcCount}</div> <!-- Autoincrement PC name -->
                        <select class='dropdown-box' id='dropdown${labNumber}_${pcCount}'> <!-- Unique dropdown ID -->
                            <option value='' disabled selected>Status</option>
                            <option value='option1'>WORKING</option>
                            <option value='option2'>UNDER MAINTENANCE</option>
                            <option value='option3'>NOT FUNCTIONAL</option>
                        </select>
                        <label class='status-label'></label>
                    </div>
                </div>
            `;

            computerContainer.appendChild(newPC);
        }
    </script>
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
                            <li><button onclick="addLab()">Add a Lab</button></li>
                            <!-- Labs will be added here -->
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="frame">
                <div class="LOG-OUT-wrapper"><div class="LOG-OUT">LOG OUT</div></div>
            </div>
        </div>
    </div>
</body>
</html>
