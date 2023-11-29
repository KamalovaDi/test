var servResponse = document.querySelector('#response');


function validate_form(){
    //var x = document.forms["testForm"]['datav'].value;
    if (document.forms["testForm"]['datav'].value == "") {
        alert("Пожалуйста, введите дату.");
        return false;
    }
    if (document.forms["testForm"]['region'].selectedIndex === 0) {
        alert("Пожалуйста, выберите регион.");
        return false;
    }
    if (document.forms["testForm"]['courer'].selectedIndex === 0) {
        alert("Пожалуйста, выберите курьера.");
        return false;
    }
};

document.forms.testForm.onsubmit = function(e){
    e.preventDefault();

    var userInput = document.forms.testForm.value;
    userInput = encodeURIComponent(userInput);

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'код глав.php');

    xhr.onload = validate_form();

    var formData = new FormData(document.forms.testForm);
    // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            servResponse.textContent = xhr.responseText;
            // servResponse2.textContent = xhr.responseText;
        }
    }
    xhr.send(formData);
    // xhr.send('r='+userInput2);
    
};






