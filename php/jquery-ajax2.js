$(document).ready(function() {
    let testForm = $('#testForm');
    testForm.submit(function() {
        if ($('#username').val().length < 5) {
            alert("Введите не менее 5 символов!");
            $('#username').focus();
            return false;
        }
        if ($('#useremail').val().length < 5) {
            alert("Введите не менее 5 символов!");
            $('#useremail').focus();
            return false;
        }
        console.log($('input[name="skills"]'));
        if ($('input[name="skills[]"]:checked').length == 0) {
            alert("Выберите хотя бы один пункт!");
            return false;
        }
        
        $.ajax({
            url: testForm.attr('action'),
            type: 'POST',
            data: testForm.serialize(),
            dataType: 'html',
            beforeSend: function(){
               $('.loader').show(); 
            },
            success: function(result) {
                $(".small-width tbody").html(result);
            },
            complete: function(){
                $('.loader').hide(); 
            }
        });
        return false;
    });
});