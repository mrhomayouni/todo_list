<?php
require "function.php";

if (isset($_GET["task_id"])) {
    $id = $_GET["task_id"];

    delete($id);

    header("Location:index.php");
    exit();
} else {
    header("Location:index.php");
    exit();
}
