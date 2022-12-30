


 $(document).ready(function(){
    $('#formelection').validate({
       rules: {
          year: {
            required: true,
            min: 2000,
            max: 2022,
          },
          pparty: {
             required: true,
          },
          county: {
             required: true,
          },
          votecount: {
            required: true,
            min: 1,
          },
       },
       messages: {           

          pparty: {
             required: "Please select a political party.",    
          },
          year: {
            required: "Please enter the year of the election.",
            min: "Please enter a value greater than or equal to 2000.",
            max: "Please enter a value less than or equal to 2022.",
          },
          county: {
            required: "Please select a county.",  
          },
          votecount: {
            required: "Please enter the vote count",
            min: "The number of votes must be greater."
          }
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