<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Inmatade uppgifter</title>
</head>
<body>
    <h2>Inmatade uppgifter</h2>
    <table border="1">
        <tr>
            <th>Namn</th>
            <th>Bankkontonummer</th>
            <th>Saldo</th>
            <th>Bild</th>
        </tr>
        <?php
        if (isset($_SESSION['data'])) {
            foreach ($_SESSION['data'] as $row) {
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['account_number']}</td>";
                echo "<td>{$row['balance']}</td>";
                echo "<td><img src='{$row['picture']}' alt='Bild' width='100'></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <br>
    <a href="index.php">Tillbaka till formuläret</a>
</body>
</html>