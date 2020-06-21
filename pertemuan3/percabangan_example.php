<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3 - Contoh Percabangan</title>
    <style>
        .warna-baris-ganjil{ /* Style CSS warna table jika ganjil */
            background-color: red;
        }
        .warna-baris-genap{ /* Style CSS warna table jika genap */
            background-color: green;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspasing="0">
        <?php for($row=1; $row<=5; $row++) : ?>
            <?php if($row % 2 == 1) : ?>
            <tr class="warna-baris-ganjil">
            <?php else : ?>
            <tr class="warna-baris-genap">
            <?php endif; ?>
                <?php for($col=1; $col<=5; $col++) : ?>
                    <td> <?php echo"$row, $col"; ?> </td>
                <?php endfor; ?>
            </tr>
                <?php endfor; ?>

    <!-- Created By Ivan Chandra Sutanto -->
    </table>
</body>
</html>
