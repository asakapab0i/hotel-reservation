//init for jqTransform
jQuery(document).ready(function($) {
    $('#form1').jqTransform({
        imgPath:'jqtransformplugin/img/'
    });	
});


//process booking
$.fn.validateForm = function (name, email, daystay, people, year,day,month, notes){
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

$.fn.confirmValidateForm = function(fname,mname,lname, email, daystay,people,date,notes,address)
{
    if(fname == ''){
        alert('Please enter the following.');
        $('#fname').focus();
        return FALSE;
    }else if(lname == '' ){
        alert('Please enter the following.');
        $('#lname').focus();
        return FALSE;
    }else if(mname == '' ){
        alert('Please enter the following.');
        $('#mname').focus();
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
    }else if(notes = ''){
        alert('Please enter the following.');
        $('#notes').focus();
        return FALSE;
    }else if(address = ''){
        alert('Please enter the following.');
        $('#address').focus();
        return FALSE;
    }


}


$(function(){
    // onclick event for booking
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

$(function(){
    $('#confirmAjax').click(function(){
        //personal info
        var fname = $('#fname').val();
        var mname = $('#mname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        
        //booking info
        var daystay = $('#daystay').val();
        var people = $('#people').val();
        var date = $('#date').val();
        var notes = $('#notes').val();
        var title = $('#title').val();
        var address = $('#address').val();
        var roomtype= $('#rmtype').val();
        
        $(this).confirmValidateForm(fname,mname,lname, email, daystay,people,date,notes,address);
        
        $.ajax({
            type: 'POST',
            url: 'includes/controller/ajax/bookingAjaxCont.php',
            data: {
                title:title,
                fname:fname,
                mname:mname,
                lname:lname,
                email:email,
                daystay:daystay,
                people:people,
                address:address,
                date:date,
                notes:notes,
                rmtype:roomtype
                    
            }
        }).success(function(data){
            window.location = "confirmbooking.php#modalSuccess";
        });
    
    });
});