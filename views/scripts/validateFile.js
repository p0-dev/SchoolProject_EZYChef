var uploadFileFormElement = document.getElementById('uploadFileForm');
var fileElement = document.getElementById('fileToUpload');
var errMes = document.getElementById('errMes');

function validation(){
  var tmp = fileElement.value.split('.');
  var index = tmp.length;
  if('csv' == tmp[index-1]){
    return true;
  }
  showErrMes();
  return false;
}
function hideErrMes(){
  errMes.hidden = true;
}
function showErrMes(){
  errMes.hidden = false;
  errMes.innerHTML = 'The file needs to have extension of .csv';
}

function init(){
  uploadFileFormElement.onsubmit = validation;
  fileElement.onclick = hideErrMes;
}

init();
