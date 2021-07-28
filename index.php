<?php
    require('./inc/configuration.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name_site ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.2/css/all.css" type="text/css">
    <link rel="stylesheet" href="./src/css/main.css" type="text/css">
</head>
<body>
    <main class="uk-container">
        <div class="middle-content">
            <div class="card">
                <div class="card-header no-border">
                    <span class="card-title">
                        324712 (Mitchel Jansen)
                    </span>
                    <span class="card-subtitle">
                        Mitchel Jansen, student Software Development at the MBO Utrecht from class: IO-SD-2009A.
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="card-body uk-text-center">
                    <button type="button" class="button btn btn-dark btn-padding" data-for="year-1">Year #1</button>
                    <button type="button" class="button btn btn-dark btn-padding" data-for="year-2">Year #2</button>
                    <button type="button" class="button btn btn-dark btn-padding" data-for="year-3">Year #3</button>
                </div>
            </div>
            <div class="years" id="no-year">
                <div class="card">
                    <div class="card-body uk-text-center text-small text-italic">
                        Choose the grade of which you want to see the available information...
                    </div>
                </div>
            </div>
            <div class="years" id="year-1" style="display: none;">
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Git-repository(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 1" AND type = "repository"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Demo(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 1" AND type = "demo"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
            </div>
            <div class="years" id="year-2" style="display: none;">
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Git-repository(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 2" AND type = "repository"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Demo(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 2" AND type = "demo"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
            </div>
            <div class="years" id="year-3" style="display: none;">
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Git-repository(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 3" AND type = "repository"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
                <div class="card card-darker">
                    <div class="card-header">
                        <span class="card-title">Demo(s)</span>
                    </div>
                    <?php
                    $sql = 'SELECT * FROM `information` WHERE year = "year 3" AND type = "demo"';
                    $result = mysqli_query($con,$sql);

                    while($record = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="card-navList">
                                <a class="nav-link" href="' . $record['url'] . '">
                                    <span>
                                        <i class="fas fa-' . $record['iconname'] . ' fa-fw"></i>
                                        ' . $record['linkname'] . '
                                        <div class="badge badge-' . $record['badgecolor'] . '">' . $record['badgename'] . '</div>
                                    </span>
                                </a>
                            </div>  
                            ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="./src/js/main.js"></script>
</body>
</html>