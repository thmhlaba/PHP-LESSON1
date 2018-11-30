<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>data types : arrays</title>

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
      <h1> arrays:</h1>
      <div>
        <?php
      $car_makes=array("Audi","BMW","Mercedes");
      echo "<p>Car makes:</p>";
      print_r($car_makes);
      echo "<p>Car makes: Element one</p>";
      echo $car_makes[0];

      $shoppingBasket1=array("a"=>"bread","b"=>"milk","c"=>"eggs");
      $shoppingBasket2=array("b"=>"milk","a"=>"bread","c"=>"eggs");
      $shoppingBasket3=array("d"=>"yogurt","e"=>"orange","f"=>"apple");
      $shoppingBasket =$shoppingBasket1 + $shoppingBasket3;
      echo "<p>Shopping Basket:</p>";
      print_r($shoppingBasket1);
      echo "<br />";
      var_dump($shoppingBasket1);
      echo "<p>shoppingBasket1 == shoppingBasket2</p>";
      var_dump($shoppingBasket1 == $shoppingBasket2);
      echo "<p>shoppingBasket1 === shoppingBasket2</p>";
      var_dump($shoppingBasket1 === $shoppingBasket2);
      echo "<p>Basket 3</p>";
      print_r($shoppingBasket3);
      echo "<p>shoppingBasket1<>$shoppingBasket3</p>";
      var_dump($shoppingBasket1 <> $shoppingBasket3);
      echo "<p>shoppingBasket1 + shoppingBasket3</p>";
      print_r($shoppingBasket1 + $shoppingBasket3);




        ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>