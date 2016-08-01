$(document).ready(function(){
    var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/i;
    var passwordPattern = /^[\d\w_]{4,20}$/i;
    $("#loginBtn").attr("disabled", true);

    $("#email").change(function() {
        var email = $(this).val();
        var password = $("#password").val();
        var isEmailValid = emailPattern.test(email);
        var isPasswordValid = passwordPattern.test(password);
        console.log('--------email input was changed--------');
        console.log('email value: '+email);
        console.log('password value: '+password);
        console.log('isEmailValid: '+isEmailValid);
        console.log('isPasswordValid: '+isPasswordValid);

        if(isEmailValid){
            $(".email-glyphicon-remove").hide();
            $(".email-glyphicon-ok").show();
        }
        else {
            $(".email-glyphicon-ok").hide();
            $(".email-glyphicon-remove").show();
        }
        if(isEmailValid && isPasswordValid) {
            $("#loginBtn").attr("disabled", false);
        }
        else {
            $("#loginBtn").attr("disabled", true);
        }
    });
    $("#password").change(function() {
        var password = $(this).val();
        var email = $("#email").val();
        var isPasswordValid = passwordPattern.test(password);
        var isEmailValid = emailPattern.test(email);

        console.log('--------password input was changed--------');
        console.log('email value: '+email);
        console.log('password value: '+password);
        console.log('isEmailValid: '+isEmailValid);
        console.log('isPasswordValid: '+isPasswordValid);

        if(isPasswordValid){
            $(".password-glyphicon-remove").hide();
            $(".password-glyphicon-ok").show();
        }
        else {
            $(".password-glyphicon-ok").hide();
            $(".password-glyphicon-remove").show();
        }
        if(isPasswordValid && isEmailValid) {
            $("#loginBtn").attr("disabled", false);
        }
        else {
            $("#loginBtn").attr("disabled", true);
        }
    });
});
