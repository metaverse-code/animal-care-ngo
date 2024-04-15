<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for supporting Animal Care</title>
    <link rel="stylesheet" href="css/donate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="thanksContent">
        <div class="iconTick">
            <i class="fas fa-check-circle"></i>
        </div>
        <h2>Thank You!</h2>
        <p>
            <?php
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                echo "Dear $name";
            } ?>,
        </p>

        <p>
            We extend our heartfelt gratitude for your generous donation, Your support empowers us to continue our work,
            and we deeply appreciate your kindness and commitment to our cause.
        </p>
        <p style="text-align:center;">
            <a href="index.php" class="goTohome">Go to homepage</a>
        </p>
    </div>
</body>

</html>