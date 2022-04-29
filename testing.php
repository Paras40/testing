    <?php

        $calendar = $_POST['month'];
        $time = strtotime($calendar);
        $month = date("M",$time);
        $month1 = date('m', strtotime($month));
        $year = date("Y",$time);
        echo "<script>console.log('$month1')</script>"; 
        echo "<script>console.log('$year')</script>"; 

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="index.html">Go to Index.html</a>
    </body>
    </html>