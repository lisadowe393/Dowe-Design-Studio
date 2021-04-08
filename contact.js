// $(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

//     $('#contact-form').validator();


//     // when the form is submitted
//     $('#contact-form').on('submit', function (e) {

//         // if the validator does not prevent form submit
//         if (!e.isDefaultPrevented()) {
//             var url = "contact-3.php";

//             // POST values in the background the the script URL
//             $.ajax({
//                 type: "POST",
//                 url: url,
//                 data: $(this).serialize(),
//                 success: function (data)
//                 {
//                     // data = JSON object that contact.php returns

//                     // we recieve the type of the message: success x danger and apply it to the 
//                     var messageAlert = 'alert-' + data.type;
//                     var messageText = data.message;

//                     // let's compose Bootstrap alert box HTML
//                     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    
//                     // If we have messageAlert and messageText
//                     if (messageAlert && messageText) {
//                         // inject the alert to .messages div in our form
//                         $('#contact-form').find('.messages').html(alertBox);
//                         // empty the form
//                         $('#contact-form')[0].reset();
//                     }
//                 }
//             });
//             return false;
//         }
//     })
// });

function updateMailto(e){
 mail.href="mailto:info@dowedesignstudio.com?subject="+encodeURIComponent("Info Request - "+firstName.value+" "+lastName.value)+"&body="+encodeURIComponent(message.value)
}
var mail=document.querySelector('#mail')

var firstName=document.querySelector('#form_firstname')

var lastName=document.querySelector('#form_lastname')

var message=document.querySelector('#form_message')

firstName.addEventListener("keyup", updateMailto)

lastName.addEventListener("keyup", updateMailto)

message.addEventListener("keyup", updateMailto)


mail.addEventListener("click", function(){
    setTimeout(function(){
        window.location = "/thankyou.html"
    }, 1000)
})