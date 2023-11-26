var servResponse = document.querySelector('#response');


document.forms.ourForm.onsubmit = function(e){
    e.preventDefault();

    var userInput = document.forms.ourForm.ourForm_inp.value;
    userInput = encodeURIComponent(userInput);
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'form.php?' + 'ourForm_key=' + userInput);
};