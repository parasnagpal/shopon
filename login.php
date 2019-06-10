<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='./css/style.css'>
    <script src="./js/script.js"></script>
    <title>ShopOn</title>
</head>
<body>
    <?php
     //Connect to Database sample
     $conn =new mysqli('localhost','root','alkanagpal','sample');
     
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     } 
     else {

       if(empty($_POST["new_username"]))
       {  
         echo 'user name not entered';
       }
       else{
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
    <h1>ShopOn</h1>
    <div class='container'>
        <div class='item'>
            <h3>SignIn</h3>
            <form method="POST" action='./main.php'>
                   <table>
                     <tr>
                         <th>UserName</th>
                         <td><input type="text" placeholder="username" name="user"></td>
                     </tr>
                     <tr>
                         <th>Password</th>
                         <td><input type="password" name="password"></td>
                     </tr>

                   </table>  
                   <button id='signin'>Continue..</button> 
            </form>
        </div>
        <div class="item">
            <svg id='line' height='100%' width='5px'>
                <line id='svgline' x1='0' y1='0' x2='0' y2='100%' style="stroke:rgb(0, 0, 0);stroke-width:2" />
            </svg>
        </div>
        <div class='item'>
                <h3>SignUp</h3>
                <form method="POST" action='./login.php' id='f2'>
                       <table>
                         <tr>
                             <th>Full Name</th>
                             <td><input type="text" placeholder="Your Name" name="name"></td>
                         </tr>
                         <tr> 
                             <th>UserName</th>
                             <td><input type="text" name='new_username' required></td>
                         </tr>
                         <tr>
                             <th>EmailId</th>
                             <td><input type="email" placeholder="abc@xyz.com" name='email'></td>
                         </tr>
                         <tr>
                             <th>Password</th>
                             <td><input type="password" required></td>
                         </tr>
                         <tr>
                             <th>Confirm Password</th>
                             <td><input type="password"  name="new_password" required></td>
                         </tr>
                       </table>  
                       <button id='signup'>Ready To Shop</button> 
                </form>
        </div>

    </div>
    
</body>
</html>