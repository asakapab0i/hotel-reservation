//init for jqTransform
jQuery(document).ready(function($) {
    $('#form1').jqTransform({
        imgPath:'jqtransformplugin/img/'
    });	
});


//process booking
$.fn.validateForm = function (name, email, daystay,people,year,day,month, notes){
    if(name == ''){
        alert('Please enter the following.');
        $('#name').focus();
        return FALSE;
    }else if(email == '' ){
        alert('Please enter the following.');
        $('#email').focus();
        return FALSE;
    }else if(daystay == ''){
        alert('Must be an email address.');
        $('#daystay').focus();
        return FALSE;
    }else if(people == ''){
        alert('Please enter the following.');
        $('#people').focus();   
        return FALSE;
    }
    else if(year == '' || day == '' || month == ''){
        alert('Please enter the following.');
        $('#year').focus();
        return FALSE;
    }
     else if(notes = ''){
        alert('Please enter the following.');
        $('#notes').focus();
        return FALSE;
    }
    
    
}


$(function(){
    
    $('#bookingAjax').click(function(){
        //get the value
        var name = $('#name').val();
        var email = $('#email').val();
        var daystay = $('#daystay').val();
        var people = $('#people').val();
        var year = $('#year').val();
        var day = $('#day').val();
        var month = $('#month').val();
        var notes = $('#notes').val();
    
        $(this).validateForm(name, email, daystay,people,year,day,month);
    
        $.ajax({
            type: 'POST',
            url: 'includes/controller/ajax/indexAjaxClass.php',
            data:{
                name:name,
                email:email,
                daystay:daystay,
                people:people,
                year:year,
                day:day,
                month:month,
                notes:notes
            }
        }).success(function(data){
            window.location = "index.php#openModal";
        });
    
    });

    
});