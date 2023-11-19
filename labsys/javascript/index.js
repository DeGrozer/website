const dropdown = document.getElementById('lab-dropdown');

dropdown.addEventListener('change', function() {
    if (this.value === '') {
        this.value = ''; 
    }
});

dropdown.addEventListener('blur', function() {
    if (this.value === '') {
        this.value = ''; 
    }
});
