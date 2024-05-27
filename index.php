
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär för bankinformation</title>
    <style>
        body {
        
            background-color: #f4f4f4;
            
        }
        
    </style>
</head>
<body>
    <h2>Fyll i dina uppgifter</h2>
    <form action="userdata.php" method="post" enctype="multipart/form-data">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="account_number">Bankkontonummer:</label>
        <input type="text" id="account_number" name="account_number" required><br><br>
        
        <label for="balance">Saldo:</label>
        <input type="text" id="balance" name="balance" required><br><br>
        
        <label for="picture">Bild:</label>
        <input type="file" id="picture" name="picture" required><br><br>
        
        <input type="submit" name="submit" value="Skicka">
    </form>
    <br>
    <a href="user_bank.php">Visa inmatade uppgifter</a>
</body>
</html>