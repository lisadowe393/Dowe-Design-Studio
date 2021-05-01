// function sendEmail() {
//     var first = $("#first_name");
//     var last = $("#last_name");
//     var email = $("#email");
//     var message = $("#message");

//     console.log(first.val())
//     $.ajax({
//         url: 'email.php',
//         method: 'POST',
//         dataType: 'json',
//         data: {
//             name: last.val() + ", " + first.val(),
//             email: email.val(),
//             body: message.val()
//         }, success: function(res) {
//             console.log("success")
//         }, failure: function(res) {
            
//         }
//     });
// };

// const constraints = {
//     first: {
//         presence: { allowEmpty: false }
//     },
//     last: {
//         presence: { allowEmpty: false }
//     },
//     email: {
//         presence: { allowEmpty: false },
//         email: true
//     },
//     message: {
//         presence: { allowEmpty: false }
//     }
// };

// const form = document.getElementById('contact-form');

// form.addEventListener('submit', function (event) {
//   const formValues = {
//       first: form.elements.first.value,
//       last: form.elements.first.value,
//       email: form.elements.email.value,
//       message: form.elements.message.value
//   };

//   const errors = validate(formValues, constraints);

//   if (errors) {
//     event.preventDefault();
//     const errorMessage = Object
//         .values(errors)
//         .map(function (fieldValues) { return fieldValues.join(', ')})
//         .join("\n");

//     alert(errorMessage);
//   }
// }, false);