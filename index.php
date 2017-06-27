<?php
$data = file_get_contents('mockdata.json');
$json_data = json_decode($data, true);
$courses = $json_data['courses']['completed'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
        <link rel="stylesheet" href="grid.css" media="screen" title="no title" charset="utf-8">
        <title><?php echo $json_data['user']['username']; ?>'s achievements</title>
    </head>

    <body>
        <header>
            <h1><?php echo $json_data['user']['username']; ?>'s completed courses</h1>
        </header>
        <div class="container">
            <div class="grid">
                <?php foreach($courses as $course){
                    echo '<div class="grid-cell">';
                    echo '<img height="200px" src="' . $course["badge"] . '"><br>';
                    echo '<a href="' . $course["url"] . '">' . $course['title'] . '</a>';
                    echo '</div>';
                } ?>
            </div>
        </div>
    </body>
</html>
