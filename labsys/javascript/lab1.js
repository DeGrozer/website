document.addEventListener('DOMContentLoaded', function () {
  const addButton = document.getElementById('addComputerButton');
  const computerContainer = document.getElementById('computerContainer');
  let computerCount = 0;

  addButton.addEventListener('click', function () {
      computerCount++;

      const newComputerDiv = document.createElement('div');
      newComputerDiv.classList.add('dropdown-container');

      newComputerDiv.innerHTML = `
          <div class="container">
              <div class="frame-5">
                  <img class="vector" src="img/pc.png" />
                  <div class="text-wrapper-6">PC ${computerCount}</div>
                  <select class="dropdown-box">
                      <option value="" disabled selected>Status</option>
                      <option value="option1">WORKING</option>
                      <option value="option2">UNDER MAINTENANCE</option>
                      <option value="option3">NOT FUNCTIONAL</option>
                  </select>
                  <label class="status-label"></label>
              </div>
          </div>
      `;

      computerContainer.appendChild(newComputerDiv);
  });
});
