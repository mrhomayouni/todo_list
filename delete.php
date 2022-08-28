<?php
require "function.php";

$id=$_GET["task_id"];

delete($id);

header("Location:index.php");

?>