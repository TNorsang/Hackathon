<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console</title>
</head>
<body>
<?php
       //Makes DB connection
        $servername = "sql1.njit.edu";
        $username = "tn25";
        $password = "Freetibet11!";
        $dbname = "tn25";
        $con = mysqli_connect($servername,$username,$password,$dbname);
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } 
       else{
        echo "-";
       }

       $sql = "SELECT * FROM GroupsCamp;";
       $result = mysqli_query($con, $sql);
       $resultCheck = mysqli_num_rows($result);

       if($resultCheck > 0){
        while($row = mySqli_fetch_assoc($result)){
            echo $row['location'];
        }
       }
        // Updating
        // UPDATE `GroupsCamp` SET `location`='hither' WHERE groupKey = 'FunGroup';
    ?>
        
    <iframe src="../Pages/DatePlanner.html" frameborder="0" height="400" width = "100%"></iframe>
    <iframe src="../Pages/Checklist.html" frameborder="0" height="400" width = "100%"></iframe>
    <iframe src="../Pages/tracking.html" frameborder="0" height="400" width = "100%"></iframe>
</body>
</html>