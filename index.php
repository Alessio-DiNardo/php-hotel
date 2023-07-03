<!-- 
Stampare tutti i nostri hotel con tutti i dati disponibili, iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<div class="table-container">
        <!-- Bootstrap Table -->
        <table class="table">
            <thead>
                <tr class="bg-light">
                    <th scope="col">
                        Number
                    </th>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        Description
                    </th>
                    <th scope="col">
                        Parking
                    </th>
                    <th scope="col">
                        Vote
                    </th>
                    <th scope="col">
                        Distance to city center
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $counter; ?>
                        </th>
                        <td>
                            <?php echo $hotel['name']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['description']; ?>
                        </td>
                        <td>
                            <?php if ($hotel['parking'] == true) {
                                echo "Yes, parking available";
                            } elseif ($hotel['parking'] == false) {
                                echo "No, parking not available";
                            } ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote'] . "/5"; ?>
                        </td>
                        <td>
                            <?php echo $hotel['distance_to_center'] . " km"; ?>
                        </td>
                    </tr>
                    <?php $counter++; ?>
                <?php } ?>
            </tbody>

        </table>
    </div>

</body>
</html>