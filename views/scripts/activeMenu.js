function activeMenuTest(){
  alert('activeMenuTest');
}

function init(){
  var activeMenuElement = document.getElementById('activeMenu');
  var activeSubMenuElement = document.getElementById('activeSubMenu');
  try{
    document.getElementById(activeMenuElement.value).classList.add('active');
  }catch(e){}
  try{
    document.getElementById(activeSubMenuElement.value).classList.add('active');
  }catch(e){}
}

window.onload = init;
