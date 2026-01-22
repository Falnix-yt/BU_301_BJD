document.addEventListener('DOMContentLoaded', function () {

  const menuIcon = document.querySelector('.menu');
  const dropdown = document.querySelector('.menu-dropdown');
  const submenu = document.querySelector('.submenu');

  menuIcon.addEventListener('click', function (e) {
    e.stopPropagation();
    submenu.classList.toggle('active');
  });

  // ferme si on clique ailleurs
  document.addEventListener('click', function () {
    submenu.classList.remove('active');
  });

  // empêche fermeture si on clique DANS le menu
  dropdown.addEventListener('click', function (e) {
    e.stopPropagation();
  });

});
