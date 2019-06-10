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
    <h1 class="title">ShopOn</h1>

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
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>

    </div>

    <div>Hi<?php
    if(!empty($_POST['user'])) 
      echo $_POST['user'];
    ?></div>

    <div class="container layout2"> 
       <div id="Showcase" class="item">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">  
             <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
             </ol>

             <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.shopclues.com/images/banners/BrandedWatches_akb_19Feb_W_re.jpg" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img src="https://cdn.shopclues.com/images/banners/RMS_akb_6June_W_r.jpg" class="d-block w-100" >
              </div>
              <div class="carousel-item">
                <img src="https://cdn.shopclues.com/images/mailer/08March2019/11th_Mar_Musical_W_Hero_AK.jpg" class="d-block w-100">
              </div>
             </div>

             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
             
         </div>
       </div>
    </div>
    
      <h4 class="newArrivals">New Arrivals</h4>

    <div class="container layout2">  

      <div class="card" style="width: 18rem;">
        <form method="POST" action="./product.php">
         <input name='itemID' style="display:none;" value="1">
        <div class='image'><img src="https://images-na.ssl-images-amazon.com/images/I/514YMVAc6NL._SL1024_.jpg" class="card-img-top" ></div>
         <br class='break'>
         <div class="card-body">
           <h5>Apple iPhone X (Silver, 256 GB)</h5>
           <p class="card-text">
             <ul>
               <li>56 GB ROM</li> <li>14.73 cm (5.8 inch) Super Retina HD Display</li>
               <li>12MP + 12MP | 7MP Front Camera</li>
               <li>A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Coprocessor Processor</li>
             </ul>
            </p>
         </div>
         <div class="container">
         <div class="row">
           <button class="btn btn-outline-primary col">View</button>
           <button class="btn btn-outline-primary col">Add To Cart</button>
         </div>      
         </div>

       </form>
      </div>

      <div class="card" style="width: 18rem;">
      <form method="POST" action="./product.php">
         <input name='itemID' style="display:none;" value='2'>
         <div class='image'><img src="https://images-na.ssl-images-amazon.com/images/I/61yoslB8R2L._SX679_.jpg" class="card-img-top" ></div>
         <br class='break'>
         <div class="card-body">
           <h5>Google Pixel 2 128 GB, Black</h5>
           <p class="card-text">
             <ul>
               <li>56 GB ROM</li> <li>14.73 cm (5.8 inch) Super Retina HD Display</li>
               <li>12MP + 12MP | 7MP Front Camera</li>
               <li>A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Coprocessor Processor</li>
             </ul>
            </p>
         </div>
         <div class="container">
         <div class="row">
           <button class="btn btn-outline-primary col">View</button>
           <button class="btn btn-outline-primary col">Add To Cart</button>
         </div>      
         </div>
      </form>
      </div>   

      <div class="card" style="width: 18rem;">
      <form method="POST" action="./product.php">
            <input name='itemID' style="display:none;" value='3'>
            <div class='image'><img src="https://images-na.ssl-images-amazon.com/images/I/61YVqHdFRxL._SL1322_.jpg" class="card-img-top" ></div>
            <br class='break'>
            <div class="card-body">
             <h5>SamSung Galaxy S10</h5>
             <p class="card-text">
             <ul>
               <li>56 GB ROM</li> <li>14.73 cm (5.8 inch) Super Retina HD Display</li>
               <li>12MP + 12MP | 7MP Front Camera</li>
               <li>A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Coprocessor Processor</li>
             </ul>
             </p>
            </div>
            <div class="container">
         <div class="row">
           <button class="btn btn-outline-primary col">View</button>
           <button class="btn btn-outline-primary col">Add To Cart</button>
         </div>      
         </div>
       </form>    
       </div>

   </div>

</body>
</html>