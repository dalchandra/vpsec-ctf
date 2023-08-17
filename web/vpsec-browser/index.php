<html lang="en"><head>
    <title>My New Website</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php
    if(substr($_SERVER['HTTP_USER_AGENT'],0,8)=="VPSec")
    {
    ?>
    <body data-new-gr-c-s-check-loaded="8.904.0" data-gr-ext-installed="">

    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Home</a>
                    </li>
                    <li role="presentation"><a href="#">Sign In</a>
                    </li>
                    <li role="presentation"><a href="#">Sign Out</a>
                    </li>
                </ul>
            </nav>
            <h3 class="text-muted">My New Website</h3>
        </div>
         
        <!-- Categories: success (green), info (blue), warning (yellow), danger (red) -->
        
        
        <div class="alert alert-success alert-dismissible" role="alert" id="myAlert">
          <?php echo("VPSec{browser_of_VPSec!!}"); ?>
            </div>
    </div>
    <script>
    $(document).ready(function(){
        $(".close").click(function(){
            $("myAlert").alert("close");
        });
    });
    </script>


</body>
</html>
    <?php
    }
    else
    {
?>

<body data-new-gr-c-s-check-loaded="8.904.0" data-gr-ext-installed="">

    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Home</a>
                    </li>
                    <li role="presentation"><a href="#">Sign In</a>
                    </li>
                </ul>
            </nav>
            <h3 class="text-muted">My New Website</h3>
        </div>
         
        <!-- Categories: success (green), info (blue), warning (yellow), danger (red) -->
        
        
        <div class="alert alert-danger alert-dismissible" role="alert" id="myAlert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          <!-- <strong>Title</strong> --> You're not using VPSec  browser!
<?php echo($_SERVER['HTTP_USER_AGENT']) ?>
            </div>
      
      
      
        <div class="jumbotron">
            <p class="lead"></p>
            <p><a href="index.php" class="btn btn-lg btn-success btn-block"> Flag</a></p>
        </div>

    </div>
    <script>
    $(document).ready(function(){
        $(".close").click(function(){
            $("myAlert").alert("close");
        });
    });
    </script>


</body>
</html>
<?php
    }
?>
