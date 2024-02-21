<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

//if (isset($_SESSION["username"])) {header ("location:index.php");}


?>


<?php include('partials-short/header.php');?>

<!-- account -->
<div class="account-page">

    <div class="col-2">
       <div class="form-containerr">
               
               <div><h3 style="text-decoration: underline">Register </h3></div>
           <form method="POST" action="insert.php">
      <div class="row">
        <div class="small-8">

          <div class="row">
           <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Nayan" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Seth" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Infinite Loop" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Mumbai" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="400056" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
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
<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

<!--loginform js
<script>
    var LoginForm=document.getElementById("LoginForm");
    var RegistrationForm=document.getElementById("RegistrationForm");
    var Indicator=document.getElementById("Indicator");
        function register(){
                RegistrationForm.style.transform="translateX(opx)";
                LoginForm.style.transform="translateX(0px)";
                Indicator.style.transform="translateX(100px)";
            }
            
        function login(){
                RegistrationForm.style.transform="translateX(300px)";
                LoginForm.style.transform="translateX(300px)";
                Indicator.style.transform="translateX(0px)";
            }
            

</script>-->
</body>
</html>