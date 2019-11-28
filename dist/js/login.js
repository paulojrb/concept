/*
* 
*/
$('body').on('keydown', function(e) {
    if (e.keyCode == 13) {
        sendData()
    }
});
$("#sign-in").click(function() {
    sendData()
});

/*
* 
*/
function sendData() {
    if ( $("#username").val().length > 3 ) {
        if ( $("#password").val().length > 5 ) {
            loginCall()
        } else {
            $("#password").focus()
        }
    } else {
        $("#username").focus()
    }    
}


/*
* 
*/
function loginCall() {
    $.ajax({
        url: './login-ajax.php',
        type: 'POST',
        dataType: 'json',
        data: 'nick='+$("#username").val()+'&pass='+$("#password").val(),
        beforeSend: function() {
            
        },
        success: function(response) {
            
        },
        error: function() {
            
        },
        complete: function() {
            
        }
    });
}