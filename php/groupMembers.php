<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroupMembers</title>
    <style>
      body{
        background-color: beiges;
        background:url('../mediaimgs/campingfire2.gif');
        
      }
      
      #fire{
        height: 500px;
      }
      label,p{
        color:white
      }
      #adding{
        
      background: #3498db;
      background-image: -webkit-linear-gradient(top, #c21414,#510400);
      background-image: -moz-linear-gradient(top, #c21414,#510400);
      background-image: -ms-linear-gradient(top, #c21414,#510400);
      background-image: -o-linear-gradient(top, #c21414,#510400);
      background-image: linear-gradient(to bottom, #c21414,#510400);
      -webkit-border-radius: 28;
      -moz-border-radius: 28;
      border-radius: 28px;
      text-shadow: 6px 2px 6px #000000;
      -webkit-box-shadow: 0px 1px 3px #666666;
      -moz-box-shadow: 0px 1px 3px #666666;
      box-shadow: 0px 1px 3px #666666;
      font-family: Courier New;
      color: #ffffff;
      font-size: 28px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
    }
    
    #adding:hover {
      background: #0c7dc4;
      background-image: -webkit-linear-gradient(top, #c21414,#510400);
      background-image: -moz-linear-gradient(top,#c21414,#510400);
      background-image: -ms-linear-gradient(top, #c21414,#510400);
      background-image: -o-linear-gradient(top, #c21414,#510400);
      background-image: linear-gradient(to bottom,#c21414,#510400);
      text-decoration: none;
    
    
      -webkit-box-shadow: 0px 0px 191px 45px rgba(45, 255, 196, 0.1);
        -moz-box-shadow: 0px 0px 191px 45px rgba(45, 255, 196, 0.1);
        box-shadow: 0px 0px 191px 45px rgba(45, 255, 196, 0.1);
    
    
    
    
    
    }
    
    #addmember{
      width: 20%;
      cursor: pointer;
      color:black;
    }
    #addmember:hover{
      width: 20%;
      cursor: pointer;
      background-color: #510400;
      color:white;
    }
    
    
    
    </style>
    

</head>

<body>
    <form action="../php/Checklists.php" method="post">
        <label  for="size">Member count: </label>
           <input id="inputcount" type="number" id = "size" name="size" value="0">
        
           <div id ="names">
               <p>Enter your Group Member Names:</p> <div id ="addmember" style = " text-align: center;border: red solid 2px; padding: 10px;" onclick="addMember()">Add Member</div> <br>
   
           </div>
           
       <button id="adding" type="submit">Submit</button>
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



   


</body>
</html>
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

