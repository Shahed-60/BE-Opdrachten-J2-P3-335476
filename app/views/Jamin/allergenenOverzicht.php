<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Overzicht Allergenen</title>
</head>


<body>
    <h4> <u>overzicht Allergenen</u></h4>
    <table>
        <thead>
            <?php
            // var_dump($data['overzichtAllergeen']);
            // if (empty($data['overzichtAllergeen'])) {
            //     echo "Leeg";
            // }

            foreach ($data['productInfo'] as $productInfo) : ?>
                <tr>
                    <th>Naam:</th>
                    <td><?= $productInfo->Naam ?></td>
                </tr>
                <tr>
                    <th>Barcode:</th>
                    <td><?= $productInfo->Barcode ?></td>
                </tr>
            <?php endforeach ?>

            <table>
                <thead>

                    <th>Naam</th>
                    <th>Omschrijving</th>
                </thead>
                <tbody>

                    <?php if (empty(($data['overzichtAllergeen']))) :
                    ?>
                        <tr>
                            <td colspan='6'>
                                In dit product zitten geen stoffen die een allergische reacties kunnen veroorzaken </td>
                        </tr>
                    <?php else : ?>
                        <?php
                        foreach ($data['overzichtAllergeen'] as $overzicht) : ?>


                            <tr>
                                <td><?= $overzicht->Naam ?></td>
                                <td><?= $overzicht->Omschrijving ?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif; ?>

                </tbody>
            </table>
</body>

</html>