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

<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
 Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <table class="table">

        <thead>
            <tr>
                <?php foreach ($hotels as $hotel) : ?>

                    <th scope="col"><?php echo $hotel['name'] ?></th>
                <?php endforeach; ?>

            </tr>
        </thead>
        <tbody>
            <tr>

                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['description'] ?></td>

                <?php endforeach; ?>

            </tr>
            <tr>
                <?php foreach ($hotels as $hotel) : ?>

                    <td>
                        <?php if ($hotel['parking'] == true) {
                            echo 'true';
                        } else {
                            echo 'false';
                        }
                        ?>
                    </td>

                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['vote'] ?></td>

                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['distance_to_center'] ?></td>

                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

    <form action="script.php" >
        <input type="text" name="parkingFilter" id="parkingFilter" placeholder="Cerca parcheggio">
        <button type="submit">invia</button>
    </form>
      


</body>

</html>