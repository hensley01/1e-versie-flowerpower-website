<?php

//start session
session_start();
include_once 'CreateDb.php';

include_once 'component.php';


//create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])) {
//print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");


        if (in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is al in het winkelwagentje toegevoegd!')</script>";
            echo "<script>window.location = 'cart.php</script>'";
        }else{
$count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;

        }
    }else{
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        //Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
    <!-- Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require_once ("cartheader.php");
?>

<div class="container">
    <div class="row-text-center py-5">
        <?php
//        component("Product 1", 1.50, "./upload/product1.jpg");
//
//        component("Product 2", 1.99, "./upload/product2.jpg");
//
//        component("Product 3", 2.50, "./upload/product3.jpg");
//
//        component("Product 4", 3.49, "./upload/product4.jpeg");

        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
        ?>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

<?php

include_once 'footer.php';

?>