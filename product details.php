<?php include('partials-short/header.php');?>
<!--single product details-->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="project images/1.jpg" width="100%" id="productimg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="project images/1.jpg" width="100%" id="smallimg">
                </div>
                <div class="small-img-col">
                    <img src="project images/1.jpg" width="100%" id="smallimg">
                </div>
                <div class="small-img-col">
                    <img src="project images/1.jpg" width="100%" id="smallimg">
                </div>
                <div class="small-img-col">
                    <img src="project images/1.jpg" width="100%" id="smallimg">
                </div>
            </div>

        </div>
        <div class="col-2">
            <p>Home / Spices</p>
            <h1>Cenaman</h1>
            <h4>$5.00</h4>
            <select>
                <option>select Weight</option>
                <option>50g</option>
                <option>100g</option>
            </select>
            <input type="number" value="1">
            <a href=""class="btn">Add to cart</a>

            <h3>Product Details</h3>
            <p>qwertyuiolkjhgfdsazxcvbnm</p>
        </div>
    </div>
</div>

<!--title-->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
    </div>
</div>

<div class="small-container" >

    <div class="row" >
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/2.jpg"></div>
            <h4>cenaman</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/3.jpg"></div>
            <h4>blackpepper</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/4.png"></div>
            <h4>Cloves</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
        </div>
        <div class="col-4" >
            <div class="imgcontainer4"><img src="project images/5.webp"></div>
            <h4>coriander</h4>
            <p>50.00 grams</p>
            <p>$5.00</p>
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

<!-- js for product -->
<script>
    var productimg = document.getElementById(id="productimg")
    var smallimg = document.getElementsByClassName(id="smallimg")
    smallimg[0].onclick = function()
    {
        productimg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function()
    {
        productimg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function()
    {
        productimg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function()
    {
        productimg.src = smallimg[3].src;
    }
    
</script>
</body>
</html>