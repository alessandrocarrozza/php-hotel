<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

?>

<div class="container mt-5">


    <form action="index.php" method="get">
        <label for="parking">Parcheggio</label>
        <select name="parking" id="parking">
            <option value="default">Scegli</option>
            <option value="si">Si</option>
            <option value="no">No</option>
        </select>

        <label for="vote">Voto</label>
        <input type="text" name="vote" id="vote">

        <button type="button" class="btn btn-primary">Cerca</button>
        <input class="btn btn-secondary" type="reset" value="Reset">
    </form>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Stelle</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
        </thead>

        <tbody>

        <?php
            foreach ($hotels as $key => $hotel) {
                echo "<tr>";

                if ($hotel["parking"] == true) {
                    $hotel["parking"] = "Si";
                } else {
                    $hotel["parking"] = "No";
                }

                foreach ($hotel as $keyin => $value) {
                    if ($keyin == "name") {
                        echo "<th>$value</th>";
                    } else {
                        echo "<td>$value</td>";
                    }                  
                }

                echo "</tr>";
            }
        ?>

        </tbody>

    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>