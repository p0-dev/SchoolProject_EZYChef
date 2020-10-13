var startTimeElement = document.getElementById('inputStartTime');
var endTimeElement = document.getElementById('inputEndTime');
var submitElement = document.getElementById('importForm');
var errorMessageElement = document.getElementById('errorMessage');
var now = new Date();
var defaultDate = new Date('1970-01-01');
var nowDateStr = now.getFullYear() + '-' + (now.getMonth()+1);

function hideErrorMessage(){
  errorMessageElement.hidden = true;
}
function showErrMes(){
  errorMessageElement.hidden = false;
  errorMessageElement.innerHTML = 'Time is wrong! Go fuck yourself!';
  startTimeElement.value = nowDateStr;
  endTimeElement.value = nowDateStr;
}
function validation(){
  var startTime = startTimeElement.value.split('-');
  var endTime = endTimeElement.value.split('-');
  if(2 == startTime.length && 2 == endTime.length){
    startTime = new Date(startTime[0] + '-' + startTime[1]);
    endTime = new Date(endTime[0] + '-' + endTime[1]);
    if(startTime <= endTime && startTime <= now && endTime <= now && startTime >= defaultDate && endTime >= defaultDate){
      return true;
    }
  }
  showErrMes();
  return false;
}

function init(){
  var now = new Date();
  var nowYear = now.getFullYear();
  var nowMonth = now.getMonth();
  nowMonth+=1;
  startTimeElement.value = nowDateStr;
  endTimeElement.value = nowDateStr;
  submitElement.onsubmit = validation;
  startTimeElement.onclick = hideErrorMessage;
  endTimeElement.onclick = hideErrorMessage;
}

init();
