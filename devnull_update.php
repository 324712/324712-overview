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
            <div class="card-header">
                <span class="card-title">Update a item</span>
                <span class="card-subtitle">The form below allows you to update a item of the list.</span>
            </div>
            <div class="card-body">
                <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM `information` WHERE `id` = $id";
                $result = mysqli_query($con, $sql);
                $record = mysqli_fetch_assoc($result);

                if(isset($_POST['update'])) {

                    $type = $_POST["type"];
                    $iconname = $_POST["iconname"];
                    $linkname = $_POST["linkname"];
                    $url = $_POST["url"];
                    $badgename = $_POST["badgename"];
                    $badgecolor = $_POST["badgecolor"];
                    $year = $_POST["year"];

                    $sql = "UPDATE `information`
                    SET `type` = '$type',
                        `iconname` = '$iconname',
                        `linkname` = '$linkname',
                        `url` = '$url',
                        `badgename` = '$badgename',
                        `badgecolor` = '$badgecolor',
                        `year` = '$year'
                    WHERE `id` = '$id'";


                    if(mysqli_query($con, $sql)) {
                        echo "
                            <div class='uk-alert-success' uk-alert>
                                <p>Succesfull edited.!</p>
                            </div>
                        ";
                        header("Refresh:1; url=./devnull.php");
                    }
                }
                ?>

                <form class="uk-grid-small" method="post" uk-grid>
                    <div class="uk-width-1-4@m">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-select">Type</label>
                            <div class="uk-form-controls">
                                <select class="uk-select uk-form-width-large" name="type" required>
                                    <option name="year"><?php echo $record["type"]; ?></option>
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
                                    <option name="year"><?php echo $record["year"]; ?></option>
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
                                    <option name="badgecolor"><?php echo $record["badgecolor"]; ?></option>
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
                            <input class="uk-input" type="text" value="<?php echo $record["badgename"]; ?>" name="badgename">
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-select">Name of the URL</label>
                            <input class="uk-input" type="text" value="<?php echo $record["linkname"]; ?>" name="linkname">
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-h-select">URL (https://)</label>
                            <input class="uk-input" type="text" value="<?php echo $record["url"]; ?>" name="url">
                        </div>
                    </div>
                    <div class="uk-width-1-1@m">
                        <button class="btn btn-success btn-full" type="submit"
                                name="update">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
<script src="./src/js/main.js"></script>
</body>
</html>