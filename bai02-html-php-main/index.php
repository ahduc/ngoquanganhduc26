<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai02-Html-Php</title>
</head>

<body>
    <!-- Header -->
    <?php include_once './inc/header.php' ?>
    <h1>Html va Php</h1>
    <?php echo 'Hello world' ?>
    <?php
    $language = 'Ngoi ngu lap trinh Php';
    var_dump($language);
    ?>
    <?php include './inc/content.php' ?>
    <?php include './inc/content.php' ?>
    <!-- Footer -->
    <?php include_once './inc/footer.php' ?>
</body>

</html>