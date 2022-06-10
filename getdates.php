<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="date" name="date">
        <input type="submit" value="submit">
    </form>

    <?php

    if (isset($_POST['date'])) {

        $calendar = $_POST['date'];
        $date = date('d', strtotime($calendar));
        $month = date('M', strtotime($calendar));
        $year = date("Y", strtotime($calendar));
        $day = date("D", strtotime($calendar));

        echo $date . "-" . $month . "-" . $year . "(" . $day . ")";
    }

    ?>

</body>

</html>