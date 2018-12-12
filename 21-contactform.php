
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact form</title>

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
    .contactForm{
        border: 1px solid #7c73f6;
        margin-top:50px;
        border-radius: 15px;

    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
      <div class="col-sm-offset-1 col-sm-10 contactForm">
      <h1>Contact us:</h1>

      <?php
    
      $name=$_POST["name"];
      $email=$_POST["email"];
      $message=$_POST["message"];
//error messages 
$missingName='<p><strong>Please enter your name!</strong></p>';
$missingEmail='<p><strong>Please enter your email address!</strong></p>';
$invalidEmail='<p><strong>Please enter a valid email address!</strong></p>';
$missingMessage='<p><strong>Please enter a message!</strong></p>';

        //if the user has submitted the form
        if($_POST["submit"]){
             //check for errors 
                if(!$name){
                    $errors .= $missingName;
                }else{
                    $name=filter_var($name,FILTER_SANITIZE_STRING);
                }
                if(!$email){
                    $errors .=$missingEmail;
                 }else{
                    $email=filter_var($email,FILTER_SANITIZE_EMAIL);

                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $errors .=$invalidEmail;
                    }
                 }
                 if(!$message){
                     $errors .=$missingMessage;    
                 }else{
                     $message=filter_var($message,FILTER_SANITIZE_STRING);
                 }
                //if there are errors 
                if($errors){////print error message
                    $resultMessage='<div class="alert alert-danger">' .$errors .'</div>';
                }else{
                    // Configuring SMTP server settings

                    $to ="thmhlaba@gmail.com";
                    $subject= "contact";
                    $message= "
                    <p>Name:$name.</p>
                    <p>Email:$email;</p>
                    <p>Message:</p>
                    <p><strong>$message</strong></p>";
                    $headers="content-type: text/html";
                    if(mail($to,$subject,$message,$headers)){
                        $resultMessage='<div class="alert alert-success">Thanks for your message.We will get back to you as soon as possible!</div>';
                      }else{
                        $resultMessage='<div class="alert alert-warning">Unable to send Email.Please try again later</div>';
                      }
                }
                      
        echo $resultMessage;
    }
      ?>
      <form action="21-contactform.php" method="POST">
            <div class="form-group">
            <label for="name">Name:</label>
            <input type ="text" name ="name" id="name" placeholder="Name" class="form-control" value="<?php echo $_POST["name"]; ?>">
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type ="email" name ="email" id="email" placeholder="Email" class="form-control" value="<?php echo $_POST["email"]; ?>">
            </div>
            <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="5"><?php echo $_POST["message"]; ?></textarea></textarea>
            </div>
            
            <input type ="submit" name ="submit" class=" btn btn-success btn-lg" value="Send Message">
            
      </form>
      </div>
      </div>
      <div>
        <?php
      
        ?>
      </div>
    </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>