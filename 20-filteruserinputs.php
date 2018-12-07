<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Filter user inputs</title>

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
    h3{
        color:green;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <h1>filter user inputs</h1>
      <h3>Clean user inputs:</h3>
      <div>
        <?php
        //username example
       $myUsername= '<script>window.alert("Hi")</script>';
       $myUsername= filter_var($myUsername,FILTER_SANITIZE_STRING);

       echo $myUsername;

        //email example
       $myEmail='thmhlaba@   g     mai\\\\l   .com';
       $myEmail= filter_var($myEmail,FILTER_SANITIZE_EMAIL);
        echo "<br />" . $myEmail;

        //URL example
        $myURL= "http://www.   google.com";
        $myURL= filter_var($myURL,FILTER_SANITIZE_URL);
        echo "<br />" . $myURL;
        ?>
 </div>
                      <h3>Validate user inputs</h3>
                      <div>

        <?php
//email validation
$myEmail='thmhlaba@   g     mai\\\\l   .com';
$myEmail=filter_var($myEmail,FILTER_SANITIZE_EMAIL);
echo "<p>Cleaned email: $myEmail</p>";

echo "<p>Email validation:" .filter_var($myEmail, FILTER_VALIDATE_EMAIL) ."</p>";

if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)){
    echo "<p>Valid Email</p>";
}else{
    echo "<p>Invalid Email</p>";
}
//URL validation

$myURL= "http://sswww.   google.com";
$myURL= filter_var($myURL,FILTER_SANITIZE_URL);
echo "<p>Cleaned URL: $myURL</p>";
echo "<p>URL validation:" .filter_var($myURL,FILTER_VALIDATE_URL) ."</p>";
        ?>
                      
    </div>
    </div>
                        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>