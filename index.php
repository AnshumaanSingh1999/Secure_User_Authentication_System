<?php include_once("signupbackend.php") ?>
<?php include_once("signinbackend.php") ?>

<html>
    <head>
        <title>User Authentication System</title>
                <script src="linksfunctionality.js"></script>
<link rel="stylesheet" href="indexstyle.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .container{
                text-align: center;
                margin-top: 180px;
                width: 400px;
            }
        </style>
        
    </head>
    <body>
        <div class="container">
            <h1>Authentication System</h1>
            
<div id="signup">
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
                        <b><p>Have an account? Click here to <a href="#" onclick='myFunction()'>Sign In</a>.</p></b>
</div>
            
      <div id="signin">
            <form method="post" class="margin" autocomplete="off">
  <fieldset class="form-group">
    <label for="uname2">Enter the UserName</label>
    <input type="text" class="form-control centre" id="uname2"  name="uname2"  value = "<?php if (array_key_exists('uname2', $_POST)) {
    echo $_POST['uname2']; 
    
 }
 ?>">
      <label for="pass2">Enter the Password</label>
    <input type="password" class="form-control centre" id="pass2"  name="pass2"  value = "<?php if (array_key_exists('pass2', $_POST)) {
    echo $_POST['pass2'];
}
                                                                                    
?>">
                                                                                        
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-default">Sign In</button>
                
                

</form>
               <b><p>Don't have an account? Click here to <a href="#" onclick='myFunction()'>Sign Up</a>.</p></b>

            
            </div>      
            
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



