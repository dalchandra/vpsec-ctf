<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random RGB Color Generator</title>
    </head>
        <?php
        if($_SERVER['REQUEST_METHOD']==="HEAD"){
            header("Flag: VPSec{You_Know_HEAD_Method?}");
        }
        else if($_SERVER['REQUEST_METHOD']==="GET")
        {
        ?>
    <body>
        <div id="colorbox" style="width:400px;height:400px;border:2px solid;"></div><br>
        <form method="POST">
            <input type="submit" value="Change Color">
        </form><br>
        <div id="color"></div>
        <?php
        }
        else if($_SERVER['REQUEST_METHOD']==="POST")
        {
        ?>
    <body>
        <div id="colorbox" style="width:400px;height:400px;border:2px solid;"></div><br>
        <form method="GET">
            <input type="submit" value="Change Color">
        </form><br>
        <div id="color"></div>
        <?php
        }
        else
        {
        ?>
    <body>
        <div id="colorbox" style="width:400px;height:400px;border:2px solid;"></div><br>
        <form method="GET">
            <input type="submit" value="Change Color">
        </form><br>
        <div id="color"></div>
        <?php
        }
        ?>
    </body>
    <script>
        var color="rgb("+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+")"
        document.getElementById("colorbox").style.backgroundColor=color;
        document.getElementById("color").innerHTML=color;
    </script>
</html>
