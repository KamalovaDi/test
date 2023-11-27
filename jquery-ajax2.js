$(document).ready(function() {
    let testForm = $('#testForm');
    testForm.submit(function() {
        if ($('#region').val().length = 0) {
            alert("Введите не менее 5 символов!");
            $('#region').focus();
            return false;
        }
        if ($('#datav').val().length = 0) {
            alert("Введите не менее 5 символов!");
            $('#datav').focus();
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