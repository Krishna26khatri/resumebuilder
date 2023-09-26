<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./resume.css">
</head>
<body>
    <div class="container">
        <div class="row name">
        <?=$data['firstname'].$data['middlename'].$data['lastname']?>
        </div>
        <div class="row eml">
        <?php $data['email'] ?> | <?php $data['phoneno'] ?> | <?php $data['addresss'] ?>
        </div>
    </div>
</body>
</html>