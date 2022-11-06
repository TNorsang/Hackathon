<html>
  <head>
    <title>Add Map</title>
   

    <link rel="stylesheet" type="text/css" href="../css/mapStyle.css"/>
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
        else
        {
        echo "";
        }
        // group_id = name
        $loc = "SELECT `location` FROM GroupsCamp WHERE 1";
        echo $loc;

       
        // $groupID = $dom->getElementById('groupid')->textContent;
        
        $sqlInsert = "INSERT INTO `GroupsCamp`(`groupKey`, `location`, `members`, `checkList`) VALUES ('$groupID','','','')";
        $result = $con->query($sqlInsert);
        
        if ($conn->query($sqlInsert) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }

        // Updating
        // UPDATE `GroupsCamp` SET `location`='hither' WHERE groupKey = 'FunGroup';
    ?>
   
  </body>
</html>


