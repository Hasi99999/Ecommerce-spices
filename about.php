
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?><?php include('partials-short/header.php');?>

<!--about-->
<section class="about txtcenter accountgradiant">
    <div class="txtcenter">
        <h1 class="txtunderline">About Company</h1><br>
        <p class="margbottom marge80 "><h4 class="marge80">Welcome to Rosa Products official website. We are entrepreneurs from Sri Lanka in well-known Ceylon spices, including chili powder, crushed chili, dry black pepper, pepper,Pepper pepper powder,  turmeric powder, and many other agro-products. At Rosa Products, we are passionate about bringing you the finest selection of organic products that are truly in harmony with nature. Our brand is built on a commitment to authenticity, quality, and sustainability. When you choose Rosa Products, you're choosing products that are free from artificial ingredients and chemicals, because we believe that nature knows best. Browse our intuitive website filled with tantalizing options, effortlessly selecting the perfect additions to your culinary arsenal. Elevate your dishes to new heights, infusing them with depth, aroma, and the vibrant colors only the best spices can bring.</h4>
        </p>
    </div>
    <br><br><br>
    <div>
        <h1 class="txtunderline">Mission</h1><br>
        <p class="margbottom marge80 text-center"><h4 class=" marge80">"At Rosa Products, our mission is to bring the world's finest spices to your doorstep, enhancing every culinary experience with authenticity, convenience, and exceptional quality. We are dedicated to sourcing and curating products that reflect the pure beauty of nature while also promoting ethical and sustainable practices.</h3></p>
    </div>
    </section>

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