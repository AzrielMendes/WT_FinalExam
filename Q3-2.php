<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        date_default_timezone_set("Asia/Kolkata");  
        $h = date('G');

        if($h>=5 && $h<12)
        {
            echo "Good morning";
        }
        else if($h>=12 && $h<16)
        {
            echo "Good afternoon";
        }
        else
        {
            echo "Good evening";
        }
    ?>  
</body>
</html>