var servResponse = document.querySelector('#response');
// var servResponse2 = document.querySelector('#response2');
document.forms.testForm.onsubmit = function(e){
    e.preventDefault();
    var userInput = document.forms.testForm.value;
    userInput = encodeURIComponent(userInput);

    // var userInput2 = document.forms.testForm.ras.value;
    // userInput2 = encodeURIComponent(userInput2);

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '1(1).php');

    var formData = new FormData(document.forms.testForm);
    // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            servResponse.textContent = xhr.responseText;
            // servResponse2.textContent = xhr.responseText;
        }
    }
    xhr.send(formData);
    // xhr.send('rip='+userInput2);

    
};