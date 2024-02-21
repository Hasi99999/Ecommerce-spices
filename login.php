<?php include('partials-short/header.php');?>

<!-- account -->
<div class="account-page">

    <div class="col-2">
       <div class="form-containerrr">
           <div class="form-btn">
               <div><h3>Log in</h3></div>
              <!-- <span onclick="register()">Register</span>
               <hr id="Indicator">-->
           </div>
           <!--<form >
               <input type="text" placeholder="Username">
               <input type="password"placeholder="Password">
               <button type="submit" class="btnacc">Login</button>
               <a href="register.php">New Member</a>
           </form>-->
           <form method="POST" action="verify.php" >
      <div>
        <div >

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="username">
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
              <input type="submit" id="right-label" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <br><br>
              <a href="register.php" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px; top : 10px;">Register</a>
            </div>
          </div>
        </div>
      </div>
    </form>
           <!--<form id="RegistrationForm">
               <input type="text" placeholder="Username">
               <input type="email"placeholder="Email">
               <button type="submit" class="btnacc">Register</button>
           </form>-->
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
            

</script> -->
</body>
</html>