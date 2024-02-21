<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>
<?php
include'partials-short/header.php';
?>
<section class="about txtcenter accountgradiant">
    <div class="txtcenter">
        <h1 class="txtunderline">Contact Us</h1><br>
        <p class="margbottom marge80 "><h4 class="marge80">We are more than happy to answer any questions you might have. Please contact us using the information below.</h4>
        </p>
    </div>
    <br><br><br>
    <div>
        <h3>Contact.No</h4> <p>+94 71 791 1662</p> <br>
    </div>
    <div>
    <h3>Email</h4> <p>rosaproduct@gmail.com</p> <br>
    </div>
    </section>


<?php
include'partials-short/footer.php';
?>