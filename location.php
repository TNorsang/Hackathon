<html>
  <head>
    <title>Add Map</title>
   

    <link rel="stylesheet" type="text/css" href="../css/mapStyle.css"/>
  </head>
  <body>
 
    <script src="../js/map.js">   
    </script>
    <script src="../js/HandleData.js"></script>
     <h3>Camping Map</h3>
     <form action="../php/groupMembers.php" method="post" data-netlify="true">
        <div id = "locations">            
            <input type="radio" name="radio" id="heather" value="heather">
            <label for="heather">Hither Hills State Park, Montauk, Long Island</label> <br>
            <!-- heather fish north-south watkins letchworth buttermilks -->
            <input type="radio" name="radio" id="fish" value="fish"> 
            <label  for="fish">Fish Creek Pond Campground, Adirondack Park</label><br>

            <input type="radio" name="radio" id="north-south" value="north-south">
            <label  for="north-south">North-South Lake Campground, Catskill Forest Preserve</label><br>

            <input type="radio" name="radio" id="watkins" value = "watkins" >
            <label for="watkins">Watkins Glen State Park, Finger Lakes region</label> <br>

            <input type="radio" name="radio" id="letchworth" value = "letchworth">
            <label  for="letchworth">Letchworth State Park, Genesee region</label> <br>
            <input type="radio" name="radio" id="buttermilks" value= "buttermilks" >
            <label for="buttermilks">Buttermilks Falls State Park, near Ithaca, NY</label> <br>
            
          
            <input onclick="MapAdvance(clicked)" type="submit">
       </div>

     </form>
   
     
    <div id="map"></div> 
    <div>
        <a href="../index.html"><button>Home</button></a>
    </div> 
    <script>
        const loc = document.querySelectorAll("#locations input");
        var clicked;
        for(let item of loc){
            item.addEventListener("click", menuHandler);
        }
        function menuHandler(e){
            
            if(e.target.id == "heather"){
                initMap(41.040619, -71.946083);
                clicked = "heather";
            }
            else if(e.target.id == "fish"){
                initMap(44.304270,-74.358040);
                clicked = "fish";
            }
            else if(e.target.id == "north-south"){
                initMap(42.196461,-74.096962);
                 clicked = "north-south";
            }
            else if(e.target.id == "watkins"){
                initMap(42.378159,-76.872162);
                 clicked = "watkins";
            }
            else if(e.target.id == "letchworth"){
                initMap(42.571792,-78.051946);
                 clicked = "letchworth";
            }
            else if(e.target.id == "buttermilks"){
                initMap(42.41768,-76.5231341);
                 clicked = "buttermilks";
            }      
        }
       </script>
  
    

    <script defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly"></script>
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
        $groupID =  $_REQUEST['group_id'];
        
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


