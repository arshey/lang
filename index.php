<?php
    include 'fb.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-1">
            <a href="index.php?lang=en">En</a>
        </div>
        <div class="col-sm-1">
            <a href="index.php?lang=de">De</a>
        </div>
        <div class="col-sm-1">
            <a href="index.php?lang=fr">Fr</a>
        </div>
        <div class="col-sm-9"></div>
    </div>
</div>

<div class="container text-center w-50 mt-5">
    <div class="jumbotron shadow-sm">
        <h1 class="display-4">Vincent Ferie</h1>
        <p class="lead"><?= $lang['one']; ?></p>
        <hr class="my-4">
        <p><?= $lang['two']; ?></p>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>