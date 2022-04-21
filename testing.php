    <?php

        $calendar = $_POST['month'];
        $time = strtotime($calendar);
        $month = date("F",$time);
        $month1 = date('m', strtotime($month));
        $year = date("Y",$time);
        echo "<script>alert($time)</script>"; 

    ?>