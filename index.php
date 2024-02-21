<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<?php include('partials-short/headerhome.php');?>


<!---------futured products------
<div class="small-container" >
    <h2 class="title" id="futureproduct">futured product</h2>
    <div class="row" >
        <div class="col-4" >
            <a href="product details.html"><div class="imgcontainer4"><img src="project images/1.jpg"></div></a>
            <h4>cenaman</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/2.jpg"></div>
            <h4>blackpepper</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/3.png"></div>
            <h4>Cloves</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/4.webp"></div>
            <h4>coriander</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
    </div>
    <h2 class="title" >least product</h2>
    <div class="row" >
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/5.webp"></div>
            <h4>Black_Pepper</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/6.webp"></div>
            <h4>Currypowder</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/7.jpg"></div>
            <h4>Ginger</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/8.jpg"></div>
            <h4>Cardamom</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
    </div>
    
</div>-->

<div class="testimonial" >
    <div class="small-container" >
        <div class="row">
            <div class="col-3">
                <h1 class="txtcenter q">"</h1>
                <p> "Amazing variety! This spice shop offers an extensive range of high-quality spices that elevate my cooking to a whole new level. The packaging is excellent, ensuring freshness, and the website's user-friendly design makes the ordering process a breeze. I highly recommend this e-commerce platform for spice enthusiasts."</p>
                <img src="project images/u1.jpg" >
                <h3>Hasintha Chamika</h3>
            </div>
            <div class="col-3">
                <h1 class="txtcenter q">"</h1>
                <p> "Top-notch quality! I've been a customer for months, and this spice store never disappoints. The flavors are vibrant, and the spices are sourced with care. The website's layout is straightforward, making it easy to find what you need. Fast shipping and stellar customer service complete the package. A must-try for any home chef!"
</p>
                <img src="project images/u2.jpg" >
                <h3>Thamidu Sathsara</h3>
            </div>
            <div class="col-3">
                <h1 class="txtcenter q">"</h1>
                <p>"Exceptional service and freshness! This online spice store exceeded my expectations. The website is well-organized, allowing me to explore an extensive collection of spices effortlessly. The spices arrive promptly, sealed for maximum freshness. The quality is outstanding, and the competitive prices make it my go-to for all my spice needs. Highly satisfied!"</p>
                <img src="project images/u3.jpg" >
                <h3>Sachin Nimash</h3>
            </div>
        </div>
    </div>
</div>
<!----footer---->
<?php include('partials-short/footer.php');?>
<!------js for toggle menue------->
<script>
    var MenuItems= document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px"
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight ="200px";
        }
        else{
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
</body>
</html>