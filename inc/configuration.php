<?php
    $name_site = "324712 (Mitchel Jansen)";

    //$con = @mysqli_connect("localhost", "root", "", "324712");
    $con = @mysqli_connect("localhost", "mitchelmbo_info", "VHDBzUDmcP", "mitchelmbo_info");

    if (!$con) {
        echo "
            <div class='card card-danger card-mysqli-error uk-text-center'>
                   <div class='card-body'>
                        <strong>Connection error</strong>
                        " . mysqli_connect_error() . ".
                    </div>
                </div>
        ";
    }

    session_start();
    error_reporting(0);