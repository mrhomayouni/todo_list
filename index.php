<?php

require "function.php";
?>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <style>
        div.one {
            border-style: solid;
            border-color: red;
            width: 200px;
        }

        div.one0 {
            border-top-style: dotted;
            border-bottom-style: dotted;
            border-color: red;
        }

        a {
            text-decoration: none;
        }

        td {
            width: 200px;
            vertical-align: top;
        }
    </style>

</head>
<body dir="rtl">

<form action="" method="post">
    <label> انتخاب تاریخ:</label>
    <input type="date" name="date">
    <input type="submit" value="send" name="select_date">
</form>

<table border="2px">
    <tr>
        <th>به زودی</th>
        <th>در حال انجام</th>
        <th>انجام شده</th>
    </tr>
    <tr>
        <td>
            <table>
                <?php
                if (isset($_POST["select_date"])):
                $date = $_POST["date"];
                $tasks = show0(0, $date);
                foreach ($tasks as $task) { ?>
                    <tr>
                        <td>
                            <div class="one">
                                <div><h2> <?= $task["explanation"] ?> </h2></div>
                                <div class="one0"><p> تاریخ: <?= $task["date"] ?> </p></div>
                                <form action="" method="post">
                                    <a href="delete.php?task_id=<?= $task["id"] ?>" class="btn btn-outline-primary">delete</a>
                                    <a href="status.php?id=<?=$task["id"]?>&status=1" class="btn btn-outline-primary"><i class="bi bi-check"></i></a>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

            </table>
            <a href="insert.php">
                <i class="bi bi-plus-circle" style="font-size: 30px;margin-right: 80px"></i>
            </a>
        </td>
        <td>
            <table>
                <?php
                $tasks = show0(1, $date);

                foreach ($tasks as $task) {
                    ?>
                    <tr>
                        <td>
                            <div class="one">
                                <div><h2> <?= $task["explanation"] ?> </h2></div>
                                <div class="one0"><p> تاریخ: <?= $task["date"] ?> </p></div>
                                <form action="" method="post">
                                    <a href="delete.php?task_id=<?= $task["id"] ?>" class="btn btn-outline-primary">delete</a>
                                    <a  href="status.php?id=<?=$task["id"]?>&status=2" class="btn btn-outline-primary"><i class="bi bi-check"></i></a>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </td>
        <td>
            <table>
                <?php
                $tasks = show0(2, $date);
                foreach ($tasks as $task) {
                    ?>
                    <tr>
                        <td>
                            <div class="one">
                                <div><h2> <?= $task["explanation"] ?> </h2></div>
                                <div class="one0"><p> تاریخ: <?= $task["date"] ?> </p></div>
                                <a href="delete.php?task_id=<?= $task["id"] ?>"
                                   class="btn btn-outline-primary">delete</a>
                            </div>
                        </td>
                    </tr>
                <?php }
                endif;
                ?>

            </table>
        </td>
    </tr>
</table>
</body>
</html>