<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Get and Post</title>

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
      <h1>Get and Post:</h1>
      <div>
        <?php
        echo "<h3>GET:</h3>";
        print_r($_GET);
        if ($_GET["Submit"]) {
            if ($_GET["username"]) {
                echo "<p>Hi " . $_GET["username"] . " .Welcome to my page!</p>";
            }
        }
        echo "<h3>POST:</h3>";
        print_r($_POST);
        if ($_POST["Submit"]) {
            if ($POST["country"]) {
                echo "<p>Your country is: " . $_POST["country"] . ".</p>";
            }
        }
        ?>
        <form method="get" action="16-GetandPost.php">
          <label for="username">Username:</label>
          <input type="text" name="username">
          <input type="Submit" name="Submit" value="Submit">
        </form>
        <form>
          <label for="country" id="country" >Country:</label>
          <input type="text" name="country" id="country">
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>