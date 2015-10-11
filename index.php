<?php include("inc/works.php"); ?>
<?php 
$section = "index";
include("inc/header.php");
?>
    <div id="wrapper">
      <section>
        <ul id="gallery">
          <li><div class="item">
            <a href="intro.php?work_key=shirtsShop">
              <img src="img/shirtsShop_s.jpg" alt="">
              <p>An online shirts shop</p>
            </a>
          </div></li>        
          <li><div class="item">
            <a href="intro.php?work_key=paperlessCheckout">
              <img src="img/paperlessCheckout_s.jpg" alt="">
              <p>Checkout without paper but with QR code</p>
            </a>
          </div></li>        
          <li><div class="item">
            <a href="intro.php?work_key=greenCheckout">
              <img src="img/greenCheckout_s.jpg" alt="">
              <p>An Android App to replace paper receipt</p>
            </a>
          </div></li>        
        </ul>
      </section>
<?php 
include("inc/footer.php");
?>

