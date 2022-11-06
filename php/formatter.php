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
            height: 2000px;
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
</html>