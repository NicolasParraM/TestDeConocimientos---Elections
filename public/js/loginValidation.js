$(document).ready(function(){
   $('#formelection').validate({      
      rules: {
         logemail: {
           required: true,
         },
         password: {
            required: true,
            minlength: 5,
         },
      },
      messages: {           
         logemail: {
           required: "Please enter the year of the election.",
         },
         password: {
            required: "Please enter the password.",
            minlength: "Your password must be at least 5 characters"
         },
       },
       
      errorElement: "span",
      errorPlacement: function (error, element) {
         // Add the `help-block` class to the error element
         error.addClass("help-block");

         if (element.prop( "type" ) === "checkbox") {
            error.insertAfter(element.parent("label") );
         } else {
            error.insertAfter(element);
         }
         error.addClass('invalid-feedback');
         element.closest('.form-group').append(error);
     },
     highlight: function (element, errorClass, validClass) {
         $(element).addClass('is-invalid');
     },
     unhighlight: function (element, errorClass, validClass) {
         $(element).addClass('is-valid').removeClass('is-invalid');
     }
   }); 
});
