
// document.forms.ourForm.onsubmit = function(e){
//     var servResponse = document.querySelector('#response');
//     e.preventDefault();

//     var userInput = document.forms.ourForm.courer1.value;
//     var userInput2 = document.forms.ourForm.ourF.value;

//     userInput = encodeURIComponent(userInput);
//     userInput2 = encodeURIComponent(userInput2);

//     var xhr = new XMLHttpRequest();
//     var qwerty = userInput + userInput2;
//     xhr.open('POST', 'form.php?');
    
//     // var formd = new FormData(document.forms.ourForm);
//     xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    

//     xhr.onreadystatechange = function(){
//         if(xhr.readyState === 4 && xhr.status === 200){
//             servResponse.textContent = xhr.responseText;
//         }
//     }

//     // xhr.send('courer1='+userInput, 'ourF='+ userInput2);
//     xhr.send('courer1='+ userInput);
//     xhr.send('ourF='+ userInput2);
// };
var servResponse = document.querySelector('#response2');
document.forms.ourForm.onsubmit = function(e1){
    e1.preventDefault();
    
    var userInput2 = document.forms.ourForm.ourF.value;
    userInput2 = encodeURIComponent(userInput2);
    var xhr2 = new XMLHttpRequest();
    xhr2.open('POST', 'form.php');
    xhr2.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr2.onreadystatechange = function(){
        if(xhr2.readyState === 4 && xhr2.status === 200){
            servResponse.textContent = xhr2.responseText;
        }
    }
    xhr2.send();
    //xhr2.send('ourF='+userInput2);
    
};