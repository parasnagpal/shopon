<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Oswald&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='./css/style.css'>  
    <title>ShopOn</title>
</head>
<body>

    <!--Php for database-->
    <?php
        //Connect to Database sample
        /*$conn =new mysqli('localhost','root','alkanagpal','sample');
       if(!empty($_POST['itemID']))
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        else {
            $id=$_POST['itemID'];
            $sql="SELECT * FROM products WHERE id=$id;";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["price"]." Details: ".$row['details']. "<br>";
                }
            } else {
                echo "0 results";
            }
        }*/
    ?>

     <h1 class="title">ShopOn</h1>
  <!-- pos -f -t --> 

      <div class="pos-f-t">

        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h5 class="text-white h4">Categories</h5>
            <span class="text-muted">
                <table class="table table-dark">
                  <tr>
                    <th scope="col">Electronics</th>
                    <th scope="col">Fashion</th>
                    <th scope="col">Others</th>
                  </tr>
                  <tr>
                    <td>Mobile Phones And Accessories</td>
                    <td>Men's Fashion</td>
                    <td>Home Decor</td>
                  </tr>
                  <tr>
                    <td>Laptops And Desktops</td>
                    <td>Women's Fashion</td>
                    <td>Tools</td>
                  </tr> 
                </table>
            </span>
          </div>
        </div>      
  
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>

     </div>

  <!-- pos -f -t --> 

  <!--Break-->
    <div>
         <img class="side" src="">
         <img class='side' src="">
         <img class="side" src="">
    </div>
  <!--Break-->

    <img id='main' src=<?php   if(!empty($_POST["image"])) 
                       {
                        $image=$_POST["image"];
                         echo "$image";
                       }  ?>>
  <!--Break-->

    <div class="body">
      <h3>Product XYZ</h3>
      <ul class='details'>
         <li></li>
         <li></li>
      </ul>
      <div class='reviews'>
         <h5>Customer Reviews</h5>
         <span>No reviews Yet</span>
      </div>
    </div>                   

</body>
</html>