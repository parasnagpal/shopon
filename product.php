<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopOn</title>
</head>
<body>
    <?php
        //Connect to Database sample
        $conn =new mysqli('localhost','root','alkanagpal','sample');
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
        }
    ?>
</body>
</html>