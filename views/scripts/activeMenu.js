function activeMenuTest(){
  alert('activeMenuTest');
}

function init(){
  var activeMenuElement = document.getElementById('activeMenu');
  var activeSubMenuElement = document.getElementById('activeSubMenu');
  document.getElementById(activeMenuElement.value).classList.add('active');
  document.getElementById(activeSubMenuElement.value).classList.add('active');
}

window.onload = init;
