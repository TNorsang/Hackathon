<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <p>
            <label for="groupID">Group ID</label>
            <input type="text" name="group_id" id="groupID">
        </p>
        <input type="submit">
    </form>

<br>

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
        else
        {
        echo "CONNECTED ";
        }

        $groupID =  $_REQUEST['group_id'];

        // $groupID = $dom->getElementById('groupid')->textContent;
        
        $sqlInsert = "INSERT INTO `GroupsCamp`(`groupKey`, `location`, `members`, `checkList`) VALUES ('$groupID','','','')";
        $result = $con->query($sqlInsert);
        
        if ($conn->query($sqlInsert) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    ?>

</body>
</html>
