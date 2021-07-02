<?php include_once("signupbackend.php") ?>
<html>
    <head>
        <title>User Authentication System</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .container{
                text-align: center;
                margin-top: 150px;
                width: 400px;
            }
            .margin{
                margin-top: 20px;
            }
            .centre{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Authentication System</h1>
                    <h3>Sign Up Gateway</h3>

        <form method="post" class="margin" autocomplete="off">
  <fieldset class="form-group">
    <label for="uname">Enter the UserName</label>
    <input type="text" class="form-control centre" id="uname"  name="uname"  value = "<?php if (array_key_exists('uname', $_POST)) {
    echo $_POST['uname']; 
    
 }
 ?>">
      <label for="pass">Enter the Password</label>
    <input type="password" class="form-control centre" id="pass"  name="pass"  value = "<?php if (array_key_exists('pass', $_POST)) {
    echo $_POST['pass'];
}
                                                                                    
?>">
                                                                                        
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-default">Sign Up</button>
</form>
            <p>Already have an account? Click here to <a href='http://www.google.com' onclick='return check()'>Sign In</a>.</p>
            
           <?php
    

    
            if(isset($msg)){    ?>  

            
            <div class="alert alert-success margin">
      <?php
    
        echo $msg;
        
    
    ?>
  </div>    
         <?php } ?>

        
        
    </div>
    </body>
</html>



