<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titel?></title>
</head>
<body>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>PersoonId</th>
                <th>EvenementId</th>
                <th>Naam</th>
            </tr>
            <?php foreach ($personen as $persoon){ ?>
            <tr>
                <td><?php echo $persoon->naam;?><?php echo " " ?><?php echo $persoon->voornaam;?></td>
                <?php foreach ($persoon->persoonEvenementen as $persoonEvenement){?>
                <td><?php echo $persoonEvenement->id; ?></td>
                <td><?php echo $persoonEvenement->persoonId; ?></td>
                <td><?php echo $persoonEvenement->evenementId; ?></td>
                <?php } ?>


            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>