var servResponse = document.querySelector('#response');

document.forms.ourForm.onsubmit = function(e){
    e.preventDefault();
    
    var userInput = document.forms.testForm.value;
    userInput = encodeURIComponent(userInput);

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '1(1).php');

    var formData = new FormData(document.forms.testForm);
    // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            servResponse.textContent = xhr.responseText;
        }
    }
    xhr.send(formData);
    //xhr2.send('ourF='+userInput2);
    
};