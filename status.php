<?php
require "function.php";

$task_id=$_GET["id"];
$task_status=$_GET["status"];

update($task_id,$task_status);

header("Location:index.php");
exit();