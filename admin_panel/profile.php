<?php
    include '../components/connect.php';
if(isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
}else{
    $seller_id = '';
    header('location:login.php');
}


$select_productS = $conn->prepare("SELECT *FROM `products` WHERE seller_id=?");
$select_productS->execute([$seller_id]);
$total_products = $select_productS->rowCount();

$select_orders = $conn->prepare("SELECT *FROM `orders` WHERE seller_id=?");
$select_orders->execute([$seller_id]);
$total_orders = $select_orders->rowCount();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wild scoops -seller profile page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">


</head>
<body>

<div class="main-container">
    <?php include '../components/admin_header.php';  ?>
    <section class="seller-profile">
            <div class="heading">
               <h1>Profile details</h1>
               <img src="../image/separator-img.png" alt="">
            </div>
            <div class="details">
                <div class="seller">
                    <img src="../uploaded_file/<?= $fetch_profile['image']; ?>" >
                    <h3 class="name"><?= $fetch_profile['name']; ?></h3>
                    <span>Seller</span>
                    <a href="update.php" class="btn">Update profile</a>
                </div>
                <div class="flex">
                    <div class="box">
                        <span><?= $total_products; ?></span>
                        <p>Total Products</p>
                        <a href="view_product.php" class="btn">view products</a>
                    </div>
                    <div class="box">
                        <span><?= $total_orders; ?></span>
                        <p>Total Orders Placed</p>
                        <a href="admin_order.php" class="btn">view orders</a>
                    </div>
                </div>
            </div>
   </section>
</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="../js/admin_script.js"></script>


<?php include '../components/alert.php'; ?>

</body>
</html>