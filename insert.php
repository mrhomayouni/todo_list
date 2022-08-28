<?php

require "function.php";

if (isset($_POST["send"])) {
    var_dump($_POST);
    insert($_POST["explanation"], $_POST["status"], $_POST["date"]);
    header("Location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
<body dir="rtl">

<form action="" method="post" enctype='multipart/form-data'>

    <input type="text" name="explanation" placeholder="explanation" style="width: 170px;height: 100px"> <br><br>
    <label> وضعیت </label>
    <select name="status">
        <option value="0"> به زودی</option>
        <option value="1"> درحال انجام</option>
        <option value="2"> انجام شده</option>
    </select><br><br>
    <input type="date" name="date" placeholder="date">
    <input type="submit" name="send" value="افزودن"> <br><br>
</form>
</body>
</html>


