var isValid = true;

function validateForm(){
    /* global $ */
    $("#fNameErr").html("");
    $("#lNameErr").html("");
    $("#emailError").html("");
    $("#phoneErr").html("");
    $("#username").html("");
    $("#passwordErr").html("");
    $("#rePasswordErr").html("");
    
    isValid = true;
    
    //checks that the first name is not empty
    if($("#fName").val().trim().length == 0){
        isValid = false;
        //alert("First name must not be blank!");
        $("#fNameErr").html("First Name must not be blank!");
    }
    //checks that the last name is not empty
    if($("#lName").val().trim().length == 0){
        isValid = false;
        //alert("Last name must not be blank!");
        $("#lNameErr").html("Last Name must not be blank!");
    }

    //validate's the proper email format
    if(/^[a-z]+@[a-z]+\.[a-z]{3}$/i.test($("#email").val())== false){
        isValid = false;
        //alert("Email has the wrong format!");
        $("#emailErr").html("Email has the wrong format!");
    }
    if(/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/i.test($("#phone").val())== false){
        isValid = false;
        $("#phoneErr").html("Not a Valid Phone Number")
    }
    
    if(/^[A-Za-z0-9]$/i.test($("#password").val())== false &&  $("#password").val().trim().length < 8){
        isValid = false;
        $("#passwordErr").html("Wrong Format!");    
    }// password Error message ends
    
    if($("#password").val() != $("#rePassword").val()){
        isValid = false;
        $("#rePasswordErr").html("Passwords Don't Match!");
    }
    
    return isValid;
}

function validateUsername(){
    $("#usernameErr").html("");
    isValid = true;
    
    if($("#username").val().trim().length < 5){
        isValid = false;
        $("#usernameErr").html("Username must be at least 6 characters!");    
    }// Username Error message ends
    else{
        $.ajax({
            type: "get",
            url: "verifyUsername.php",
            dataType: "json",
            data: { "username": $("#username").val() },
            success: function(data,status) {
                 if(data == false){
                     $("#usernameErr").html("Username is available");
                 }else
                 {
                     $("#usernameErr").html("Username is already taken!");
                 }
              },
              complete: function(data,status) { //optional, used for debugging purposes
                  //alert(status);
              }
         });
    }
    
}// validateUsername ends

function validatePhone(){
     
    
    isValid = true;
    
    if(/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/i.test($("#phone").val()) == false ){
        isValid = false;
        $("#phoneErr").html("Not A Valid Phone Number! ");    
    }// phone Error message ends
    else{
        $("#phoneErr").html("");
    }
}

function validatePassword(){
    isValid = true;
    if(/^[A-Za-z0-9]$/i.test($("#password").val())== false &&  $("#password").val().trim().length < 8){
        isValid = false;
        $("#passwordErr").html("Wrong Format!");    
    }// password Error message ends
    else{
        $("#passwordErr").html("");
    }
}

function validateReEntry(){
    isValid = true;
    if($("#password").val() != $("#rePassword").val()){
        isValid = false;
        $("#rePasswordErr").html("Passwords Don't Match!");
    }
    else{
         $("#rePasswordErr").html("");
    }
}

function validateEmail(){
    isValid = true;
    
    if(/^[a-z]+@[a-z]+\.[a-z]{3}$/i.test($("#email").val())== false ){
        isValid = false;
        $("#emailErr").html("Not A Valid Email!");    
    }// email Error message ends
    else{
        $("#emailErr").html("");
    }
}

$(document).ready(function(){
    
    $("#zip").change(function(){
        $.ajax({
            type: "get",
            url: "http://hosting.otterlabs.org/laramiguel/ajax/zip.php?",
            dataType: "json",
            data: { "zip_code": $("#zip").val() },
            success: function(data,status) {
                 $("#city").html(data.city);
                 $("#lat").html(data.latitude);
                 $("#long").html(data.longitude);
              },
              complete: function(data,status) { //optional, used for debugging purposes
                  //alert(status);
              }
         });

    });// zip validate ends
    
    $("#username").change(function(){
        validateUsername();
    });// username validate ends
    
    $("#phone").change(function(){
        validatePhone();
    });// Phone validate ends
    
    $("#email").change(function(){
        validateEmail();
    });// email validate ends
    
    $("#password").change(function(){
        validatePassword();
    });// password validate ends
    
    $("#rePassword").change(function(){
        validateReEntry();
    });// rePassword validate ends
    
    $("#state").change(function(){
        $("#county").html("<option>- Select One -</option>");
        $.ajax({
            type: "get",
            url: "http://hosting.otterlabs.org/laramiguel/ajax/countyList.php",
            dataType: "json",
            data: { "state": $("#state").val() },
            success: function(data,status) {
                 for (var i=0; i < data.counties.length; i++){
                     $("#county").append("<option>" + data.counties[i].county + "</option>");
                 }
                 
              },
              complete: function(data,status) { //optional, used for debugging purposes
                  //alert(status);
              }
         });
    });
    
}); // document ready ends

