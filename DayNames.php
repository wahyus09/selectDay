<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestPhase1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $dayNames = array("Monday", "Tuesday", "Wednesday","Thrusday","Friday","Saturday","Sunday");
        $today ="Sunday";
    ?>
    <div class="container">
        <p>Today is <span class="today"><?php echo $today;?></span></p>
            <ul>
                <?php
                    for($x=0; $x < sizeof($dayNames); $x++){
                        echo "<li><button class='day' value=".$dayNames[$x].">". $dayNames[$x] ."</button></li>";
                        if($today == $dayNames[$x]){
                            #echo "Today Day is " . $dayNames[$x] . "\n";
                            echo "<script>document.getElementsByClassName('day')[".$x."].classList.add('green-box')</script>";
                        }
                    }
                ?>
            </ul>
        <p>Selected day is <span class="selectDay"></span></p>
    </div>
    <script src="script.js"></script>
</body>
</html>