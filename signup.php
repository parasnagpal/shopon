
<html lang="en">

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
     
      //Create table
      /*
       
      $sql="CREATE TABLE Users (
           id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           name VARCHAR(30),
           username VARCHAR(30) NOT NULL,
           email VARCHAR(50),
           password VARCHAR(25) NOT NULL
       )
       ";
       if($conn->query($sql)===TRUE){
           echo "Table Created";
       }
       else echo "Not created";
       
       */
      
    ?>
</body>
</html>