
/*
* 
*/
function sendData() {
    if ( $("#user").val().length > 4 ) {
        if ( $("#pass").val().length > 5 ) {
            loginCall()
        } else {
            $("#pass").focus()
        }
    } else {
        $("#user").focus()
    }    
}

/* ------------- Click ------------- */

/*
* Eventos de click
*/
$("#sign-in").click(function() {
    sendData()
});

/*
* 
*/
function loginCall() {
    $.ajax({
        url: './sign-in.php',
        type: 'POST',
        dataType: 'json',
        data: 'user='+$("#user").val()+'&pass='+$("#pass").val(),
        beforeSend: function() {
        },
        success: function(response) {
            console.log(response)
            if ( response.status == "ok" ) {
                window.location.href = "/concept-master/";
            }
        },
        error: function() {
            console.log('Internal Error 500!')
        },
        complete: function() {
            
        }
    });
}
