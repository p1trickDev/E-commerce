
document.getElementById('menu-icon').addEventListener('click', function() {
    var menuItems = document.getElementById('menu-items');
    if (menuItems.classList.contains('show')) {
        menuItems.classList.remove('show');
    } else {
        menuItems.classList.add('show');
    }
});
