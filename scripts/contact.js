function sendEmail() {
    var first = $("#first_name");
    var last = $("#last_name");
    var email = $("#email");
    var message = $("#message");

    console.log(first.val())
    $.ajax({
        url: 'email.php',
        method: 'POST',
        dataType: 'json',
        data: {
            name: last.val() + ", " + first.val(),
            email: email.val(),
            body: message.val()
        }, success: function(res) {
            console.log("success")
        }, failure: function(res) {
            
        }
    });
};