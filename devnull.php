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
    <div class="middle-content devnull">
        <div class="card">
            <div class="card-header no-border">
                    <span class="card-title">
                        /dev/null/
                    </span>
                <span class="card-titleRight"><button type="button" class="button btn btn-dark btn-padding" data-for="year-1">General</button>
                <button type="button" class="button btn btn-dark btn-padding" data-for="year-2">Add link</button></span>
                <span class="card-subtitle">
                        Admin area of 324712.dev.
                    </span>
            </div>
        </div>
        <div class="years" id="year-1">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Results year 3</span>
                    <span class="card-subtitle">All results from the database.</span>
                </div>
                <div class="card-body no-padding">
                    <table class="uk-table uk-table-striped uk-table-middle">
                        <thead>
                            <tr>
                                <th class="uk-table-shrink">ID</th>
                                <th class="uk-table-shrink uk-text-nowrap">Type</th>
                                <th class="uk-table-shrink uk-text-nowrap">Year</th>
                                <th>Name</th>
                                <th class="uk-width-small">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = 'SELECT * FROM `information` WHERE year = "year 3" ORDER BY id DESC';
                            $result = mysqli_query($con,$sql);

                            while($record = mysqli_fetch_assoc($result)) {
                                echo '
                                <tr>
                                    <td>#' . $record['id'] . '</td>
                                    <td>' . $record['type'] . '</td>
                                    <td><div class="badge no-margin">' . $record['year'] . '</div></td>
                                    <td>' . $record['linkname'] . '</td>
                                    <td>
                                        <a href="./devnull_update.php?id=' . $record['id'] . '" class="btn btn-success btn-sm btn-no-margin">Edit</button>
                                        <a href="./devnull_delete.php?id=' . $record['id'] . '" class="btn btn-primary btn-sm btn-no-margin">Delete</button>
                                    </td>
                                </tr>
                                ';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Results year 2</span>
                    <span class="card-subtitle">All results from the database.</span>
                </div>
                <div class="card-body no-padding">
                    <table class="uk-table uk-table-striped uk-table-middle">
                        <thead>
                        <tr>
                            <th class="uk-table-shrink">ID</th>
                            <th class="uk-table-shrink uk-text-nowrap">Type</th>
                            <th class="uk-table-shrink uk-text-nowrap">Year</th>
                            <th>Name</th>
                            <th class="uk-width-small">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = 'SELECT * FROM `information` WHERE year = "year 2" ORDER BY id DESC';
                        $result = mysqli_query($con,$sql);

                        while($record = mysqli_fetch_assoc($result)) {
                            echo '
                                <tr>
                                    <td>#' . $record['id'] . '</td>
                                    <td>' . $record['type'] . '</td>
                                    <td><div class="badge no-margin">' . $record['year'] . '</div></td>
                                    <td>' . $record['linkname'] . '</td>
                                    <td>
                                        <a href="./devnull_update.php?id=' . $record['id'] . '" class="btn btn-success btn-sm btn-no-margin">Edit</button>
                                        <a href="./devnull_delete.php?id=' . $record['id'] . '" class="btn btn-primary btn-sm btn-no-margin">Delete</button>
                                    </td>
                                </tr>
                                ';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Results year 1</span>
                    <span class="card-subtitle">All results from the database.</span>
                </div>
                <div class="card-body no-padding">
                    <table class="uk-table uk-table-striped uk-table-middle">
                        <thead>
                        <tr>
                            <th class="uk-table-shrink">ID</th>
                            <th class="uk-table-shrink uk-text-nowrap">Type</th>
                            <th class="uk-table-shrink uk-text-nowrap">Year</th>
                            <th>Name</th>
                            <th class="uk-width-small">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = 'SELECT * FROM `information` WHERE year = "year 1" ORDER BY id DESC';
                        $result = mysqli_query($con,$sql);

                        while($record = mysqli_fetch_assoc($result)) {
                            echo '
                                <tr>
                                    <td>#' . $record['id'] . '</td>
                                    <td>' . $record['type'] . '</td>
                                    <td><div class="badge no-margin">' . $record['year'] . '</div></td>
                                    <td>' . $record['linkname'] . '</td>
                                    <td>
                                        <a href="./devnull_update.php?id=' . $record['id'] . '" class="btn btn-success btn-sm btn-no-margin">Edit</button>
                                        <a href="./devnull_delete.php?id=' . $record['id'] . '" class="btn btn-primary btn-sm btn-no-margin">Delete</button>
                                    </td>
                                </tr>
                                ';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="years" id="year-2" style="display: none;">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Add link to site</span>
                    <span class="card-subtitle">The form below allows you to add a new link to the list.</span>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_POST['create'])) {

                            $type = $_POST["type"];
                            $iconname = $_POST["iconname"];
                            $linkname = $_POST["linkname"];
                            $url = $_POST["url"];
                            $badgename = $_POST["badgename"];
                            $badgecolor = $_POST["badgecolor"];
                            $year = $_POST["year"];

                            $sql = "INSERT INTO `information` (`type`, `iconname`, `linkname`, `url`, `badgename`, `badgecolor`, `year`) 
                                    VALUES ('$type', '$iconname', '$linkname', '$url', '$badgename', '$badgecolor', '$year')";

                            if(mysqli_query($con, $sql)) {
                                echo "
                                <div class='uk-alert-success' uk-alert>
                                    <p>Aangemaakt kut.</p>
                                </div>
                            ";
                            }
                        }
                    ?>

                    <form class="uk-grid-small" method="post" uk-grid>
                        <div class="uk-width-1-4@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Type</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" name="type" required>
                                        <option name="year">Choose a type</option>
                                        <option name="type">Repository</option>
                                        <option name="type">Demo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-4@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Year</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" name="year" required>
                                        <option name="year">Choose a year</option>
                                        <option name="year">Year 1</option>
                                        <option name="year">Year 2</option>
                                        <option name="year">Year 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-4@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Color of badge</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select uk-form-width-large" name="badgecolor" required>
                                        <option name="badgecolor">Choose a color</option>
                                        <option name="badgecolor">Primary</option>
                                        <option name="badgecolor">Secondary</option>
                                        <option name="badgecolor">Success</option>
                                        <option name="badgecolor">Danger</option>
                                        <option name="badgecolor">Warning</option>
                                        <option name="badgecolor">Info</option>
                                        <option name="badgecolor">Dark</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-4@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Name of the badge</label>
                                <input class="uk-input" type="text" placeholder="Name of the badge..." name="badgename">
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">Name of the URL</label>
                                <input class="uk-input" type="text" placeholder="Name of the URL..." name="linkname">
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-h-select">URL (https://)</label>
                                <input class="uk-input" type="text" value="https://" name="url">
                            </div>
                        </div>
                        <div class="uk-width-1-1@m">
                            <button class="btn btn-success btn-full" type="submit"
                                    name="create">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
<script src="./src/js/main.js"></script>
</body>
</html>