<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='./css/style.css'>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Oswald&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='./css/style.css'> 
    <title>ShopOn</title>
</head>
<body class="body1">
    <?php
     //Connect to Database sample
     $conn =new mysqli('localhost','root','******','sample');
     
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     } 
     else {

       if(!empty($_POST["new_username"]))
       {
         $name=$_POST["name"];
         $username=$_POST["new_username"];
         $password=$_POST["new_password"];
         $email=$_POST["email"];

         $add_query="INSERT INTO Users(name,username,email,password) VALUES (
            '$name','$username','$email','$password'
         );" ;

         echo $_POST['new_username']  ;
         if($conn->query($add_query)===TRUE)
          {
              echo "USER added";
          }
          else echo $conn->error;
       }

     }
    
    ?>
    <h1 class="title">ShopOn</h1>
    <div class='container bucket' >
        <div class='item'>
            <h3 class="signin_Head">SignIn</h3>
            <form class="signin_form" method="POST" action='./main.php'>
                   <table class="form-group">
                     <tr>
                         <th>UserName</th>
                         <td><input type="text" class="form-control" placeholder="username" name="user"></td>
                     </tr>
                     <tr>
                         <th>Password</th>
                         <td><input type="password" class="form-control" name="password"></td>
                     </tr>

                   </table>  
                   <button id='signin' class="btn btn-outline-light">Continue..</button> 
            </form>
        </div>
        <div class="item" id='svg'>
            <svg id='line' height='100%' width='5px'>
                <line id='svgline' x1='0' y1='0' x2='0' y2='100%' style="stroke:rgb(255, 255, 255);stroke-width:5" />
            </svg>
        </div>
        <div class='item' id='signup'>
                <h3>SignUp</h3>
                <form method="POST" action='./login.php' id='f2'>
                       <table>
                         <tr>
                             <th>Full Name</th>
                             <td><input type="text" class="form-control" placeholder="Your Name" name="name"></td>
                         </tr>
                         <tr> 
                             <th>UserName</th>
                             <td><input type="text" class="form-control" name='new_username' required></td>
                         </tr>
                         <tr>
                             <th>EmailId</th>
                             <td><input type="email" class="form-control" placeholder="abc@xyz.com" name='email'></td>
                         </tr>
                         <tr>
                             <th>Password</th>
                             <td><input type="password" class="form-control" required></td>
                         </tr>
                         <tr>
                             <th>Confirm Password</th>
                             <td><input type="password" class="form-control"  name="new_password" required></td>
                         </tr>
                       </table>  
                       <button id='signup'class="btn btn-outline-light">Register</button> 
                </form>
        </div>

    </div>
    
</body>
</html>