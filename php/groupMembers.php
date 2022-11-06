<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroupMembers</title>
</head>
<body>
    

     <form action="../php/Checklists.php" method="post">
     
        <button onclick = addBox()></button>
        <div id ="names">
            <p>Enter your Group Member Names:</p> <div style = "color: red; text-align: center;border: red solid 2px; padding: 10px;" onclick="addMember()">Add Member</div> <br>

        </div>
        <label for="size"></label>
        <input type="hidden" id = "size" name="size" value="0">
    <button type="submit">Submit</button>
    </form>





    <script>
        class Person {
  name;
  geoX;
  geoY;
  icon;

  constructor(name) {
    this.name = name;
    this.geoX = 0;
    this.geoY = 0;
    this.icon = "default";
  }

  setGeoXANDY(geoX,geoY){
    this.geoX = geoX;
    this.geoY = geoY;
  }

  setIcon(ic){
    this.icon = ic;
  }

  introduceSelf() {
    console.log(`Hi! I'm ${this.name} I am at location ${this.geoX} , ${this.geoY}`);
  }

}



    var field = document.querySelector("#names");
    var i = 1;
    var size  = document.querySelector("#size");
    console.log(field);
    function addMember(){
    var el = document.createElement("label");
    el.setAttribute("for","name"+i);
    el.innerText = "Name of Member " + i + " "; 
    var el3 = document.createElement("br");
    var el2 = document.createElement("input");
    el2.setAttribute("type","text");
    el2.setAttribute("name","name"+i);
    el2.setAttribute("value","");
    el2.setAttribute("placeholder","Enter A Group Member Name");
    i++;
        
    field.appendChild(el3);
    field.appendChild(el);
    
    field.appendChild(el2);
    size.value = i;
    
    }
    
    
   

    </script>


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
        $groupName = "SELECT * FROM `GroupsCamp` WHERE 1";
        

        $location =  $_REQUEST['radio'];

        // $groupID = $dom->getElementById('groupid')->textContent;
        
        $sqlUpdate = "UPDATE `GroupsCamp` SET `location`='$location' WHERE 1";

        // $sqlInsert = "INSERT UPDATE `GroupsCamp`(`groupKey`, `location`, `members`, `checkList`) VALUES ('$groupID','','','')";
        $result = $con->query($sqlUpdate);
        
        if ($conn->query($sqlUpdate) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sqlUpdate . "<br>" . $conn-> error;
        }

        // Updating
        // UPDATE `GroupsCamp` SET `location`='hither' WHERE groupKey = 'FunGroup';
    ?>


</body>
</html>

