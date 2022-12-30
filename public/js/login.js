$(function() {
  $('#formelection').submit(function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de manera tradicional

    var logemail = $('#logemail').val();
    var password = $('#password').val();

    // Envía los datos del formulario a login.php mediante una solicitud AJAX
    $.ajax({
      type: 'POST',
      url: './controllers/login.php',
      data: {
        logemail: logemail,
        password: password
      },
      success: function(response) {
        console.log(response);
        if (response === 'success') {
          window.location = 'frmelections.php';
        } else {
          $('#formelection').prepend(Swal.fire({
            icon: 'error',
            text: 'Email or password invalid',
          }));
        }
      }
    });
  });
});
