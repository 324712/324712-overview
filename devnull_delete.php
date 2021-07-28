<?php
    require('./inc/configuration.php');

    $id = $_GET["id"];
    $sql = "DELETE FROM `information` WHERE `id` = $id";
    mysqli_query($con, $sql);

    header("Location: ./devnull.php");