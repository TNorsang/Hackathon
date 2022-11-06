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

      echo '
       
      <!DOCTYPE html>
<html >
<head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body {
            background-image: url("../mediaimgs/para-rafy.png");
            background-repeat: no-repeat;
        }
        .container{
            display:flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            top:23vh;
            
        }
        h1 {
            font-size: 8vh;
            color: rgb(154, 155, 163);
        }
        h2{
            position: relative;
            top: 9vh;
            font-size: 5vh;
            color: rgb(154, 155, 163);
        }
        #long{
            margin-top: 500px;
            background: rgb(28,29,49);
            background: linear-gradient(359deg, rgba(28,29,49,1) 0%, rgba(77,83,129,1) 100%, rgba(77,83,129,1) 100%);
            height: 1000px;
        }
        #weather{
            position: relative;
            top: -20vh;
            display: flex;
            justify-content: center;
            text-align: center;
            /* border: solid;
            border-width: 2vw;
            border-color: rgba(28, 29, 49, 0.679); */
            width: 100%;
        }
        .container2{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            top: -20vh;
        }
        .container2 h2 {
            position: relative;
            top: 4vh;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>You are all set CAMPERS!</h1><br>
        <h2>Here are the BEST days out of the next 7 days</h2>
    </div>

    <div id = "long">
        <div id="weather">
            <iframe src="../Pages/DatePlanner.html" frameborder="0" height="500" width = "80%"></iframe>
        </div>
        <div class="container2">
            <h1>Camping Area!</h1><br>
            <h2>Become familiar with the area by checking out the map</h2>
        </div>
        <div id="map">
               
            <!-- <iframe src="../Pages/map.html" frameborder="0" height="400" width = "100%"></iframe> -->

        </div>
    </div>

    
</body>
</html>';
       $sql = "SELECT `location` FROM GroupsCamp;";
 
       $result = mysqli_query($con, $sql);
       $resultCheck = mysqli_num_rows($result);
        $loc;
       if($resultCheck > 0){
        while($row = mySqli_fetch_assoc($result)){
           $loc = $row['location'];
        }
       }

      
switch ($loc) {
  case "heather":
    echo "
            <html>
  <head>
    <title>Add Map</title>
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
  </head>
  <body>
    <script src=\"../js/map.js\">   
    </script>
    <script src=\"../js/HandleData.js\"></script>
     <h3>heather Map</h3>
    <div id=\"map\"></div> 
    <script>
       
    initMap(41.040619, -71.946083);
    </script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
    <!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
    <script defer
     src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>
   
  </body>
</html> ";
    break;
  case "fish":
    echo "
            <html>
  <head>
    <title>Add Map</title>
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
  </head>
  <body>
    <script src=\"../js/map.js\">   
    </script>
    <script src=\"../js/HandleData.js\"></script>
     <h1 >Fish Map</h1>
    <div id=\"map\"></div> 
    <script>
       
    initMap(47.304270,-74.358040);
    </script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
    <!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
    <script defer
     src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>
   
  </body>
</html> ";
    break;
  case "north-south":
    echo "
            <html>
  <head>
    <title>Add Map</title>
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
  </head>
  <body>
    <script src=\"../js/map.js\">   
    </script>
    <script src=\"../js/HandleData.js\"></script>
     <h3>North-south Map</h3>
    <div id=\"map\"></div> 
    <script>
       
    initMap(42.196461,-74.096962);
    </script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
    <!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
    <script defer
     src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>
   
  </body>
</html> ";
    break;
case "watkins":
    echo "
    <html>
<head>
<title>Add Map</title>

<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
</head>
<body>
<script src=\"../js/map.js\">   
</script>
<script src=\"../js/HandleData.js\"></script>
<h3>Watkins Map</h3>
<div id=\"map\"></div> 
<script>

initMap(42.378159,-76.872162);
</script>
<!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
<!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
<script defer
src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>

</body>
</html> ";
        break;
     case "letchworth":
            echo "
            <html>
  <head>
    <title>Add Map</title>
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
  </head>
  <body>
    <script src=\"../js/map.js\">   
    </script>
    <script src=\"../js/HandleData.js\"></script>
     <h3>Letchworth Map</h3>
    <div id=\"map\"></div> 
    <script>
       
    initMap(42.571792,-78.051946);
    </script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
    <!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
    <script defer
     src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>
   
  </body>
</html> ";
            break;
        case "buttermilks":
            echo "
            <html>
  <head>
    <title>Add Map</title>
   
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mapStyle.css\"/>
  </head>
  <body>
    <script src=\"../js/map.js\">   
    </script>
    <script src=\"../js/HandleData.js\"></script>
     <h3>ButterMilk Map</h3>
    <div id=\"map\"></div> 
    <script>
       
    initMap(42.41768,-76.5231341);
    </script>
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\" integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script> -->
    <!--API : AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA-->
    <script defer
     src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDqBAadQzKBzngKCFJjT-ZmrGdRrdYlxKA&callback=initMap&v=weekly\"></script>
   
  </body>
</html> ";
                break;

}

       

        // Updating
        // UPDATE `GroupsCamp` SET `location`='hither' WHERE groupKey = 'FunGroup';
    ?>
        
    <!-- <iframe src="../Pages/DatePlanner.html" frameborder="0" height="400" width = "100%"></iframe> -->
    <iframe src="../Pages/Checklist.html" frameborder="0" height="400" width = "100%"></iframe>
    <iframe src="../Pages/tracking.html" frameborder="0" height="400" width = "100%"></iframe>
    
</body>
</html>