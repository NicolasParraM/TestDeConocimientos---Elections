<?php

session_start();
if (!isset($_SESSION['logemail'])) {
  header('Location: index.php');
  exit;
}

?>

<?php require_once("controllers/selectTab.php"); ?>
<?php require_once("controllers/querys.php"); ?>

<?php require_once("views/navbar.php"); ?>

<!-- Form Election -->

<div class="container-fluid">
    <div class="row mb-5 mt-1">

        <div class="col-9 mx-auto">
            <div class="mt-4 card">
                <div class="card-header bg-primary">
                    <p class="card-title fw-bold text-light fs-6" id="ModalLabel">Election</p>
                </div>

                <form action="" method="POST" id="formelection" class="my-4">
                    <div class="row g-3 mx-2">

                        <div class="mb-2">
                            <label for="year" class="form-label fw-bold">year</label>
                            <div class="">
                                <input type="number" id="year" name="year" class="form-control" placeholder="Enter year"
                                    required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="" class="form-label fw-bold">Political party</label>
                            <select class="form-select" value="" id="pparty" name="pparty" required>
                                <option selected disabled>Select one</option>
                                <?php foreach ($enum_values as $value) {
                                    echo '<option value="'.$value.'">'.$value.'</option>';
                                }?>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="" class="form-label fw-bold">County</label>
                            <select class="form-select" value="" id="county" name="county" required>
                                <option selected disabled>Select one</option>
                                <?php foreach($request as $county) {
                                    echo '<option value="' . $county['code_county'] . '">' . $county['county'] . '</option>';
                                }?>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="votecount" class="form-label fw-bold">vote count</label>
                            <input type="number" class="form-control" id="votecount" name="votecount"
                                placeholder="Enter number">
                        </div>


                        <div class="">
                            <button type="submit" id="insert" class="btn btn-success boton">
                                Submit
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    

    <div class="col-12 col-lg-9 mx-auto">
        <div class="text-center mt-5">
            <div class="container px-4 text-center">
                <div class="row g-5">
                    <div class="col-6">
                        <div class="p-2 border border-primary shadow-sm card rounded">¿Cuál fue el año en que se
                            realizaron más votaciones?
                            <p class="fw-bold text-primary mt-1"><?php while ($row = $stmt->fetch()) {
                                echo "Año ". $row["year"] . " - votaciones: " . $row["Max_vote_count"] . "\n";
                            } ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-2 border border-success card rounded shadow-sm">¿Cuál fue el condado con menos
                            votaciones en el 2008?
                            <p class="fw-bold text-primary mt-1"><?php while ($row = $stmt1->fetch()) {
                                echo "County ". $row["county"] . " - votaciones: " . $row["vote_count"] . "\n";
                            } ?></p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class=" bg-light border border-success rounded">¿Cuáles fueron los 3 condados que tuvieron
                            más votaciones por el partido demócrata en los años del 2000 al 2008?
                            <p class="fw-bold text-primary mt-1"><?php while ($row = $stmt2->fetch()) {
                                echo $row["county"] . " - votaciones: " . $row["vote_count"] . "." . "<br>";
                            } ?></p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="p-4 bg-light border border-info rounded">¿Cuál partido tuvo menos votaciones en el
                            rango de años de 2012 a 2016?
                            <p class="fw-bold text-primary mt-1"><?php while ($row = $stmt3->fetch()) {
                                echo "Political party: ". $row["political_party"] . " - votaciones: " . $row["vote_count"] . "." . "<br>";
                            } ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart -->
    <div class="col-12 col-lg-9 p-3 col-sm-12 mx-auto my-2">
        <div class="card-header bg-success">
            <p class="card-title fw-bold text-light fs-6 ms-2">Votes Chart </p>
        </div>
        <canvas class="bg-white rounded shadow col-sm-h-200 " id="myChart"
            style="position: relative; height: 50vh; width: 60vw;"></canvas>

        <script src="node_modules/chart.js/dist/chart.umd.js"></script>


        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: 'Elections',
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgb(19,162,151, 0.8)',
                        'rgba(255, 51, 51, 0.8)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgb(19,162,151, 1)',
                        'rgba(255, 51, 51, 1)',
                    ],
                    borderWidth: 1,
                    data: [],
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });


        let url = 'http://localhost/imanku/controllers/chartElections.php'
        fetch(url)
            .then(response => response.json())
            .then(datos => {
                mostrar(datos);
                myChart.update();
            })
            .catch(error => console.log(error))

        const mostrar = (election) => {
            election.forEach((Element) => {
                myChart.data['labels'].push(`${Element.year} - ${Element.political_party}`);
                myChart.data['datasets'][0].data.push(Element.vote_count);
            });
            //console.log(myChart.data);
        };
        </script>
    </div>


    <script src="public/js/frmValidation.js"></script>
    <script src="public/js/electionInsert.js"></script>    
 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>


    <?php require_once("./footer.php"); ?>

    