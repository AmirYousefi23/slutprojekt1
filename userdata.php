
<?php
session_start();  //skapar en php-session för att lagra data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //hanterar data som har skickats till denna sida
    $name = htmlspecialchars($_POST['name']);
    $account_number = htmlspecialchars($_POST['account_number']);
    $balance = htmlspecialchars($_POST['balance']);
    $picture = $_FILES['picture'];

    if ($picture['error'] == 0) { 
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($picture["name"]);
        move_uploaded_file($picture["tmp_name"], $target_file);

        $data = [
            'name' => $name,
            'account_number' => $account_number,
            'balance' => $balance,
            'picture' => $target_file
        ];

        if (!isset($_SESSION['data'])) {
            $_SESSION['data'] = [];
        }
        array_push($_SESSION['data'], $data);
    }
}

header('Location: user_bank.php');
exit();
?>
