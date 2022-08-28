<?php
require "db.php";

function insert($explanation, $status, $date)
{
    global $db;

    $sql = "INSERT INTO `task`(`explanation`, `status`, `date`) VALUES (:explanation,:status,:date)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("explanation", $explanation);
    $stmt->bindValue("status", $status);
    $stmt->bindValue("date", $date);
    $stmt->execute();
}

function show0(int $status, string $date)
{
    global $db;

    $sql = "SELECT * FROM `task` WHERE `status`=:status AND `date`=:date";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("status", $status);
    $stmt->bindValue("date", $date);
    $stmt->execute();
    $task = $stmt->fetchAll();
    return $task;
}

function delete($id)
{
    global $db;

    $sql = "DELETE FROM `task` WHERE `id`=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("id", $id);
    $stmt->execute();
}

function update($id, $status)
{
    global $db;
    $sql = "UPDATE `task` SET `status`=:status WHERE `id`=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("id",$id);
    $stmt->bindValue("status",$status);
    $stmt->execute();
}