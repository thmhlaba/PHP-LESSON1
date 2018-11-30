<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>data types : objects</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    h1{
        color:purple;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <h1> Objects:</h1>
      <div>
        <?php
      class car{
//properties
    public $make="Ford";
    private $status="off";
//methods
        function turn_on(){
            $this ->status ="on";
        }
        function getStatus(){
            return $this->status;
        }
      }
      $myCar =new car;
      var_dump($myCar);
      echo "<br />";
      echo $myCar ->make;
      echo "<br />";
      echo $myCar->turn_on();
      var_dump($myCar);
      echo "<br />";
      echo $myCar->getStatus();
        ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>