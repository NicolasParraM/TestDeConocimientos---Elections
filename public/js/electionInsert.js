insert.addEventListener("click", () => {
  let data = Object.fromEntries(new FormData(formelection));
  let year = data.year;

  const MIN_YEAR = 2000;
  const MAX_YEAR = 2022;

  if (!/^\d{4}$/.test(year) || year < MIN_YEAR || year > MAX_YEAR) {

    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Please enter a valid year between " + MIN_YEAR + " and " + MAX_YEAR
    });
    return;
  }

  $.ajax({
    type: "POST",
    url: "./controllers/insert.php",
    data: data,
    success: function(response) {
      console.log(response);
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Registrado",
          showConfirmButton: false,
          timer: 1500
        });
        formelection.reset();
        myChart.reset();
        myChart.update();
      } else {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text:
            "Invalid fields.",
        });
      }
    }
  });
});


  fetch('./controllers/selectTab.php')
  .then(response => response.json())
  .then(filas => {

    for (const fila of filas) {
      const opcion = document.createElement('option');
      opcion.value = fila.idCounty;
      opcion.textContent = fila.county;
      document.getElementById('miselect').appendChild(opcion);
    }
    
  });