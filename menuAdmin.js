var submenus = document.querySelectorAll('.submenu');

// Lặp qua từng mục submenu và thêm sự kiện click
submenus.forEach(function(submenu) {
    // Thêm sự kiện click cho mỗi mục submenu
    submenu.addEventListener('click', function() {
        // Toggle lớp "active" cho submenu
        this.classList.toggle('active');
    });
});