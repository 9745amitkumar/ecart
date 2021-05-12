<?php include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3">
               <form action="managecart.php" method="POST">
                    <div class="card" >
                    <img src="image/1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">LAKSHMI JI</h5>
                        <p class="card-text">Price Rs250/-</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="LAKSHMI JI">
                        <input type="hidden" name="Price" value="250">
                    </div>
                    </div>
                </form>
    </div>
    <div class="col-lg-3">
               <form action="managecart.php" method="POST">
                    <div class="card" >
                    <img src="image/2.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">GANESH JI</h5>
                        <p class="card-text">Price Rs150/-</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="GANESH JI">
                        <input type="hidden" name="Price" value="150">
                    </div>
                    </div>
                </form>
                
    
    </div>
    <div class="col-lg-3">
               <form action="managecart.php" method="POST">
                    <div class="card" >
                    <img src="image/3.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">KALASH</h5>
                        <p class="card-text">Price Rs350/-</p>
                        <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="KALASH">
                        <input type="hidden" name="Price" value="350">
                    </div>
                    </div>
                </form>
    </div>
    <div class="col-lg-3">
               <form action="managecart.php" method="POST">
                    <div class="card" >
                    <img src="image/4.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">GAMALA</h5>
                        <p class="card-text">Price Rs450/-</p>
                        <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="GAMALA">
                        <input type="hidden" name="Price" value="450">
                    </div>
                    </div>
                </form>
    </div>


    <div class="col-lg-3">
               <form action="managecart.php" method="POST">
                    <div class="card" >
                    <img src="image/4.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">shuph</h5>
                        <p class="card-text">Price Rs450/-</p>
                        <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="shuph">
                        <input type="hidden" name="Price" value="450">
                    </div>
                    </div>
                </form>
    </div>

    
    </div>
    </div>
</body>
</html>