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
    <title>sunny scoops delight-About us page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<div class="banner">
    <div class="detail">
        <h1>about us</h1>
        <p>"Sunny Scoops Delight is where frozen dreams become reality. <br>
        We're passionate about crafting the creamiest, most delightful <br>
        ice cream that's sure to put a smile on your face with every scoop."</p>
        <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
    </div>
</div>
<div class="chef">
    <div class="box-container">
        <div class="box">
            <div class="heading">
                <span>Alex Doe</span>
                <h1>Master chef</h1>
                <img src="image/separator-img.png">
            </div>
            <p>Our skilled ice cream chef, Alex Doe, is the creative genius behind our mouthwatering ice cream creations. With years of expertise and a passion for innovation, Alex continuously churns out unique and delicious flavors that will take your taste buds on an unforgettable journey. Every scoop is a masterpiece crafted by Alex's unwavering dedication to delivering the finest frozen delights</p>
            <div class="flex-btn">
                <a href="" class="btn">explore our menu</a>
                <a href="menu.php" class="btn">vist our shop</a>
            </div>
        </div>
        <div class="box">
            <img src="image/ceaf.png" class="img">
        </div>
    </div>
</div>


<!-- chef section end -->
<div class="story">
    <div class="heading">
        <h1>our story</h1>
        <img src="image/separator-img.png">
    </div>
    <p>In the heart of our town, Sunny Scoops Delight began as a dream to share joy<br>
     through ice cream. With creativity as our compass and quality as our creed, <br>
     we've sculpted flavors that spark smiles and forge memories.<br>
      Join us in savoring life's sweetest moments, one scoop at a time</p>
      <a href="menu.php" class="btn">our services</a>
</div>

<!-- story section start -->
<div class="container">
    <div class="box-container">
        <div class="img-box">
            <img src="image/about.png">
        </div>
        <div class="box">
            <div class="heading">
                <h1>Taking Ice Cream To New Heights</h1>
                <img src="image/separator-img.png">
            </div>
            <p>our unwavering motivation and dedication fuel our mission to elevate 
            the world of ice cream. We believe that there are endless possibilities 
            when it comes to crafting exceptional flavors and creating unforgettable moments.
             With every scoop, we set out to redefine the ice cream experience, pushing the boundaries 
             of what's possible in the world of frozen delights. Our journey is one of continuous innovation and exploration,
              where we strive to reach new summits of taste and pleasure. Join us on this exhilarating adventure as we embark 
               on the quest to turn every bite into a sweet, soaring delight.</p>
               <a href="" class="btn">learn more</a>
        </div>
    </div>
</div>
<!-- story section end -->



<!-- team section start -->
<div class="team">
    <div class="heading">
        <span>our team</span>
        <h1>Quality & Passion with our services</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/team-1.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>Ralph Jhonson</h2>
                <p>Coffee chef</p>
            </div>
        </div>

        <div class="box">
            <img src="image/team-2.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>Fiona Jhonson</h2>
                <p>Pastery chef</p>
            </div>
        </div>


        <div class="box">
            <img src="image/team-3.jpg" class="img">
            <div class="content">
                <img src="image/shape-19.png" alt="" class="shap">
                <h2>Tom Kknell</h2>
                <p>Dessert Chef</p>
            </div>
        </div>
    </div>
</div>

<!-- team section end -->
<div class="standers">
    <div class="detail">
        <div class="heading">
            <h1>our standerts</h1>
            <img src="image/separator-img.png">
        </div>
        <p>we uphold unwavering standards for top-notch quality, innovation, and exceptional service.</p>
        <i class="bx bxs-heart"></i>
        <p>ensuring that each visit promises the best in taste, service, and a welcoming atmosphere.</p>
        <i class="bx bxs-heart"></i>
        <p>providing top-tier ice cream, friendly service, and an atmosphere that keeps you coming back for more.</p>
        <i class="bx bxs-heart"></i>
        <p>We take pride in our unchanging devotion to delivering exceptional ice cream, and an eco-conscious</p>
        <i class="bx bxs-heart"></i>
        <p>Quality, innovation, and customer happiness are our guiding standards at Sunny Scoops Delight.</p>
        <i class="bx bxs-heart"></i>
    </div>
</div>
<!-- standers section end -->
<div class="testimonial">
    <div class="heading">
        <h1>testmonial</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="testimonal-container">
        <div class="slide-row" id="slide">
            <div class="slide-col">
                <div class="user-text">
                    <p> Meet our satisfied customer and testimonial author: ZEN. His passion for our ice cream shines through in every word,<br>
                     and we're honored to have made his Sunny Scoops Delight experience truly delightful.</p>
                    <h2>Zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (1).jpg">
                </div>
            </div>


            <div class="slide-col">
                <div class="user-text">
                    <p> Allow us to introduce [John Doe], one of our cherished customers who couldn't resist sharing his joy about Sunny Scoops Delight. His heartfelt testimonial is a testament to the pleasure our ice cream brings to your taste buds!</p>
                    <h2>John Doe</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (2).jpg">
                </div>
            </div>



            <div class="slide-col">
                <div class="user-text">
                    <p> Meet Sarah Mitchell, a thrilled customer and the author of this testimonial. Her love for our ice cream shines through her words, and we're grateful for the sweet memories we've helped create. Join Sarah in sharing the Sunny Scoops Delight experience!</p>
                    <h2>Sarah Mitchell</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (3).jpg">
                </div>
            </div>



            <div class="slide-col">
                <div class="user-text">
                    <p>Introducing Emily Davis, a delighted customer and author of this testimonial. Her passion for our ice cream shines through in every word, and we're honored to have made her Sunny Scoops Delight experience truly delightful. Join Emily in sharing your own sweet moments!</p>
                    <h2>Emily Davis</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (4).jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="indicator">
        <span class="btn1 active"></span>
        <span class="btn1"></span>
        <span class="btn1"></span>
        <span class="btn1"></span>
    </div>

</div>
<!-- testimonial section end -->
<div class="mission">
    <div class="box-container">
        <div class="box">
        <div class="heading">
            <h1>Our Mission</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="detail">
            <div class="img-box">
            <img src="image/mission.webp">
            </div>
            <div>
                <h2>mexicon chocolate</h2>
                <p>Layers of shaped marshmallow candies - bunnies, chicks, and simple flowers - make a memorable gift in a beribboned box</p>
            </div>
        </div>


        <div class="detail">
            <div class="img-box">
            <img src="image/mission1.webp">
            </div>
            <div>
                <h2>vanilla with honey</h2>
                <p>Beribboned boxes filled with vanilla ice cream drizzled with honey, a delightful and memorable treat</p>
            </div>
        </div>


        <div class="detail">
            <div class="img-box">
            <img src="image/mission2.webp">
            </div>
            <div>
                <h2>peppermint chip</h2>
                <p>Discover the joy of gifting with a ribbon-adorned box of delightful peppermint chip marshmallows.</p>
            </div>
        </div>


        <div class="detail">
            <div class="img-box">
            <img src="image/mission0.jpg">
            </div>
            <div>
                <h2>rasberry sorbat</h2>
                <p>Layers of shaped marshmallow candies - bunnies, chicks, and simple flowers - make a memorable gift in a beribboned box</p>
            </div>
        </div>
        </div>
        <div class="box">
            <img src="image/form.png" alt="" class="img">
        </div>



    </div>
</div>






<!-- mission section end -->












<?php
include 'components/footer.php';
?>


<script src="js/user_script.js"></script>
</body>
</html>