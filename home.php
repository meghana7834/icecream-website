<?php
    include 'components/connect.php';
    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id ='';
    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sunny scoops delight-Home page</title>
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include 'components/user_header.php'; ?>


<!-- slider section start -->
<div class="slider-container">
    <div class="slider">
        <div class="slideBox active">
            <div class="textBox">
                <h1>Scoop Up Happiness,<br> One Flavor at a Time</h1>
                <a href="menu.php" class="btn">shop now</a>
            </div>
            <div class="imgBox">
                <img src="image/slider.jpg" alt="">
            </div>
        </div>


        <div class="slideBox">
            <div class="textBox">
                <h1>Cherish the moments,<br> savor each sweet scoop of joy.</h1>
                <a href="menu.php" class="btn">shop now</a>
            </div>
            <div class="imgBox">
                <img src="image/slider0.jpg" alt="">
            </div>
        </div>
    </div>
    <ul class="controls">
        <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
        <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>

    </ul>
</div>


<!-- slider section end -->
<div class="service">
    <div class="box-container">
        <!-- service item box -->
        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services.png" class="img1">
                    <img src="image/services (1).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>delivery</h4>
                <span>100% secure</span>
            </div>
        </div>
        <!-- service item box -->


        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (2).png" class="img1">
                    <img src="image/services (3).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>payment</h4>
                <span>100% secure</span>
            </div>
        </div>


        
        <!-- service item box -->


        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (5).png" class="img1">
                    <img src="image/services (6).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>support</h4>
                <span>24*7 hours</span>
            </div>
        </div>


                <!-- service item box -->


                <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services (7).png" class="img1">
                    <img src="image/services (8).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>gift services</h4>
                <span>support gift services</span>
            </div>
        </div>

        


        <!-- service item box -->


        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/service.png" class="img1">
                    <img src="image/service (1).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>returns</h4>
                <span>24*7 free returns</span>
            </div>
        </div>


        

        
        <!-- service item box -->


        <div class="box">
            <div class="icon">
                <div class="icon-box">
                    <img src="image/services.png" class="img1">
                    <img src="image/services (1).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>deliver</h4>
                <span>24*7 hours</span>
            </div>
        </div>

    </div>
</div>
<!-- service section end -->

<!-- categories section start -->

<div class="categories">
    <div class="heading">
        <h1>categories features</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/categories.jpg" alt="">
            <a href="menu.php" class="btn">coconuts</a>
        </div>

        <div class="box">
            <img src="image/categories0.jpg" alt="">
            <a href="menu.php" class="btn">chocolate</a>
        </div>


        <div class="box">
            <img src="image/categories2.jpg" alt="">
            <a href="menu.php" class="btn">strawberry</a>
        </div>

        <div class="box">
            <img src="image/categories1.jpg" alt="">
            <a href="menu.php" class="btn">cone</a>
        </div>



    </div>
</div>




<!-- categories section end -->

<img src="image/menu-banner.jpg" class="menu-banner">
<div class="taste">
<div class="heading">
        <span>Taste </span>
        <h1>buy an ice cream@ get one free</h1>
        <img src="image/separator-img.png" alt="">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/taste.webp">
            <div class="detail">
                <h2>natural sweetness</h2>
                <h1>vanilla</h1>
            </div>
        </div>

        <div class="box">
            <img src="image/taste0.webp">
            <div class="detail">
                <h2>natural sweetness</h2>
                <h1>matcha</h1>
            </div>
        </div>


        <div class="box">
            <img src="image/taste1.webp">
            <div class="detail">
                <h2>natural sweetness</h2>
                <h1>bluberry</h1>
            </div>
        </div>
    </div>
</div>

<!-- taste section end -->

<div class="ice-container">
    <div class="overlay">
        <div class="detail">
            <h1>All you need to melt away your stress is a<br> comforting scoop of ice cream.</h1><br><br>
            <p>When life gets a little crazy, remember that sometimes the best remedy for all that chaos is a delightful scoop of ice cream.<br> It may not solve all your problems, but it's a sweet escape, a brief pause in the madness,<br> and a comforting indulgence that can make the craziness of the world a little more bearable</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
</div>
<!-- taste section end -->
<div class="taste2">
    <div class="t-banner">
        <div class="overlay"></div>
        <div class="detail">
            <h1>Find your sweet satisfaction</h1>
        <p>Discover wild, crazy flavors that redefine dessert norms. Embrace the delicious chaos!</p>
        <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type4.jpg">
            <div class="box-details fadeIn-bottom">
                <h1>rasberry-vanilla</h1>
                <p>Tangy raspberry, smooth vanilla swirl</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>

        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type.avif">
            <div class="box-details fadeIn-bottom">
                <h1>Strawbutterscotch Swirl</h1>
                <p>create a sweet and tangy fusion</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>

        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type1.png">
            <div class="box-details fadeIn-bottom">
                <h1>mixed fruit</h1>
                <p>Fruity, creamy, dreamy scoops of delight</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>


        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type2.png">
            <div class="box-details fadeIn-bottom">
                <h1>kiwi-blue berry</h1>
                <p>a tantalizing symphony of flavors in each scoop</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>
        


        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type0.avif">
            <div class="box-details fadeIn-bottom">
                <h1>strawberry</h1>
                <p>Taste your dessert destiny</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>

        <div class="box">
            <div class="box-overlay"></div>
            <img src="image/type3.jpg">
            <div class="box-details fadeIn-bottom">
                <h1>chocolate</h1>
                <p>Rich, creamy chocolate delight</p>
                <a href="menu.php" class="btn">Explore More</a>
            </div>
        </div>



    </div>
</div>


<!-- taste2 section end -->
<div class="flavor">
    <div class="box-container">
        <img src="image/left-banner2.webp">
        <div class="detail">
            <h1>Hot Deal ! Sale Up to <span>20% off</span></h1>
            <p>expired</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
</div>


<!-- flavour section end -->
<div class="usage">
    <div class="heading">
        <h1>How it works</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="row">
        <div class="box-container">
            <div class="box">
                <img src="image/icon.avif">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>"Scoop Cone Cream Icon: Where sweet dreams become reality in every bite, crafting a legacy of timeless indulgence."</p>
                </div>
            </div>


            <div class="box">
                <img src="image/icon0.avif">
                <div class="detail">
                    <h3>cone ice-cream</h3>
                    <p>"Stick cone cream icon: A timeless symbol of ice cream bliss in a convenient handheld treat, offering a satisfying crunch and creamy delight."</p>
                </div>
            </div>



            <div class="box">
                <img src="image/icon1.avif">
                <div class="detail">
                    <h3>stick ice-cream</h3>
                    <p>The stick ice cream icon, a nostalgic favorite, brings back fond childhood memories with its classic combination of creamy flavors and a convenient, mess-free design. It's a timeless treat that evokes a sense of joy and simplicity.</p>
                </div>
            </div>
        </div>
        <img src="image/sub-banner.png" class="divider">


        <div class="box-container">
            <div class="box">
                <img src="image/icon2.avif">
                <div class="detail">
                    <h3>scoop ice-cream</h3>
                    <p>"Scoop Cone Cream Icon: Where sweet dreams become reality in every bite, crafting a legacy of timeless indulgence."</p>
                </div>
            </div>


            <div class="box">
                <img src="image/icon3.avif">
                <div class="detail">
                    <h3>cone ice-cream</h3>
                    <p>"Stick cone cream icon: A timeless symbol of ice cream bliss in a convenient handheld treat, offering a satisfying crunch and creamy delight."</p>
                </div>
            </div>



            <div class="box">
                <img src="image/icon4.avif">
                <div class="detail">
                    <h3>stick ice-cream</h3>
                    <p>The stick ice cream icon, a nostalgic favorite, brings back fond childhood memories with its classic combination of creamy flavors and a convenient, mess-free design. It's a timeless treat that evokes a sense of joy and simplicity.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- usage section end -->
<div class="pride">
    <div class="detail">
        <h1>We pride ourselves on <br> exceptional flavours.</h1>
        <p>We're all about exceptional flavors. At Sunny Scoops Delight,<br> every scoop is a delicious experience you won't forget."</p>
        <a href="menu.php" class="btn">shop now</a>
    </div>
</div>

<!-- pride section end -->

<?php
include 'components/footer.php';
?>












































<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="js/user_script.js">

</script>


<?php include 'components/alert.php'; ?>

</body>
</html>