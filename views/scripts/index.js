function showErrorMessage(){
  var errorMessage = document.getElementById('msgLogInError');
  errorMessage.hidden = false;
}
function hideErrorMessage(){
  var errorMessage = document.getElementById('msgLogInError');
  errorMessage.hidden = true;
}

function init(){
  //showing log in error message
  var errorFlag = window.location.search.substring(1);
  if(0 < errorFlag.length){
    showErrorMessage();
  }
  //hiding error message onclick input username
  var usernameInput = document.getElementById('txtUsername');
  usernameInput.onclick = hideErrorMessage;
}

window.onload = init;
