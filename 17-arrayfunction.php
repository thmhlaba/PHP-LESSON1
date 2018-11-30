<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Array Functions</title>

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
      <h1> Array Functions:</h1>
      <div>
        <?php

        $shoppingBasket1=array("bread","milk","eggs");
          $shoppingBasket2=array("apple","banana","orange");
          $shoppingBasket=array_merge($shoppingBasket1,$shoppingBasket2);
          echo "<p>Shopping Basket:</p>";
          print_r($shoppingBasket);
          echo "<p>Number of times in shopping basket:</p>" . count($shoppingBasket);

              $count=array_count_values($shoppingBasket);
              echo "<p> Basket Count</p>";
              print_r($count);
              echo "<p>Number of bread items in Basket:</p>" .$count["bread"];
          if(in_array("bread",$shoppingBasket)){
          echo "<p>There is bread in the basket.</p>";
               }else{
                 echo "<p>There is no bread in the basket</p>";
               }
              
            array_push($shoppingBasket,"yogurt");
            echo "<p>Shopping Basket after adding yogurt:</p>";
            print_r($shoppingBasket);
               if($_GET["submit"]){
                  if($_GET["item"]){
                    array_push($shoppingBasket,$_GET["item"]);


              }
            }
            print_r($shoppingBasket);
        ?>

                      <form>
                      
                      <label for="item">Add item to shopping Basket</label>
                      
                      <input type="text" name="item" id="item">
                      <input type="submit" name="submit" value="Submit">
                      
                      </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>