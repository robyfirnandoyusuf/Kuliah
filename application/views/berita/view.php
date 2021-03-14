<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <h1><?= $heading; ?></h1>
    <div><?= $message; ?></div>
    <hr>
    <?php
    foreach ($berita as $row) {
        echo "<b>".$row->title."</b><br>";
        echo $row->name."<br>";
        echo $row->body."<hr>";
    }
    ?>
</body>

</html>