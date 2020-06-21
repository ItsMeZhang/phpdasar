<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3 - Contoh Pengulangan</title>
</head>
<body>
<h1>Cara Pertama</h1>
    <table border="1" cellpadding="10" cellspasing="0">  
        <?php
            for($i=1; $i<=3; $i++){ //baris
                echo "<tr>";
                    for($j = 1; $j<=5; $j++){ //kolom
                        echo "<td>$i,$j</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
<br>
<h1>Cara Kedua</h1>
    <table border="1" cellpadding="10" cellspasing="0">
        <?php for($row=1; $row<=5; $row++){ ?>
            <tr>
                <?php for($col=1; $col<=5; $col++){ ?>
                    <td> <?php echo"$row, $col"; ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

<h1>Cara Ketiga</h1>
    <table border="1" cellpadding="10" cellspasing="0">
        <?php for($row=1; $row<=5; $row++) : ?>
            <tr>
                <?php for($col=1; $col<=5; $col++) : ?>
                    <td> <?php echo"$row, $col"; ?> </td>
                <?php endfor; ?>
            </tr>
                <?php endfor; ?>
    </table>
<!-- Created By Ivan Chandra Sutanto -->
</body>
</html>
