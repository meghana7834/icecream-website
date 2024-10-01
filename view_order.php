<?php
    include 'components/connect.php';
    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id ='';
    }
    
    if(isset($_GET['get_id'])){
        $get_id = $_GET['get_id'];
    }else{
        header('location:order.php');
    }
    if(isset($_POST['cancle'])){

        $update_order = $conn->prepare("UPDATE `orders` SET status=? where id=?");
        $update_order->execute(['cancelled', $get_id]);

        header('location:order.php');
    }

   

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sunny scoops delight-order details page</title>
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>order details</h1>
            <p>"Sunny Scoops Delight is where frozen dreams become reality. <br>
            We're passionate about crafting the creamiest, most delightful <br>
            ice cream that's sure to put a smile on your face with every scoop."</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>order details</span>
        </div>
    </div>

    <div class="order-detail">
     <div class="heading">
        <h1>my order detail</h1>
        <p>Satisfying cravings, one order at a time, with care and flavor.</p>
        <img src="image/separator-img.png">
     </div>
     <div class="box-container">
        <?php 
            $grand_total = 0;
            $select_order = $conn->prepare("SELECT * FROM `orders` WHERE id=? LIMIT 1");
            $select_order->execute([$get_id]);

            if($select_order->rowCount() >0){
                while($fetch_order = $select_order->fetch(PDO::FETCH_ASSOC)){
                    $select_product = $conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
                    $select_product->execute([$fetch_order['product_id']]);
                    if($select_product->rowCount() > 0){
                        while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)){
                            $sub_total = ($fetch_order['price']* $fetch_order['qty']);
                            $grand_total += $sub_total;
        ?>
        <div class="box">
            <div class="col">
                <p class="title"> <i class="bx bxs-calendar-alt"></i><?= $fetch_order['date']; ?> </p>
                <img src="uploaded_file/<?= $fetch_product['image']; ?>" class="image">
                <p class="price">₹<?= $fetch_product['price']; ?>/-</p>
                <h3 class="name"><?= $fetch_product['name']; ?></h3>
                <p class="grand-total">total amount payable: &nbsp <span>₹<?= $grand_total; ?>/-</span></p>
            </div>
            <div class="col">
                <p class="title">billing address</p>
                <p class="user"><i><iconify-icon icon="bi:person-bounding-box"></iconify-icon></i><?= $fetch_order['name']; ?></p>
                <p class="user"><i><iconify-icon icon="bi:phone"></iconify-icon></i> <?= $fetch_order['number']; ?></p>
                <p class="user"> <i><iconify-icon icon="bi:envelope"></iconify-icon></i> <?= $fetch_order['email']; ?></p>
                <p class="user"> <i><iconify-icon icon="bi:pin-map-fill"></iconify-icon></i> <?= $fetch_order['address']; ?></p>
                <p class="status" style="color: <?php if($fetch_order['status'] == 'delivered'){echo "green";}elseif($fetch_order['status'] == 'cancelled'){echo "red";}else{echo "orange";} ?>"><?= $fetch_order['status']; ?></p>
                <?php if($fetch_order['status'] == 'cancelled'){ ?>
                    <a href="checkout.php?get_id=<?= $fetch_product['id']; ?>" class="btn" style="line-height: 3;" >order again</a>
                <?php }else{ ?>  
                    <form action="" method="post">
                        <button type="submit" name="cancle" class="btn" onclick="return confirm('do you want to cancel this product');">cancel</button>
                    </form>
                <?php } ?>
                
            </div>
        </div>
        <?php
                        }
                    }
                }
            }else{
                echo '<p class="empty">No order has been placed yet!</p>';
            }
        ?>
     </div>
    </div>









<?php
include 'components/footer.php';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="js/user_script.js"></script>


<?php include 'components/alert.php'; ?>


<script src="js/user_script.js"></script>
</body>
</html>