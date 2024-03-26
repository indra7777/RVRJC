<style>
a.btt {
  display: block;
  position: fixed;
  z-index: 999;
  width: 45px;
  height: 45px;
  right: 30px;
  bottom: 30px;
  background: white;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  box-shadow: 3px 3px 10px rgba(23, 25, 25, 0.2);
  transition: transform 0.3s ease-in-out;
  background-image:  url('https://api.iconify.design/material-symbols/arrow-upward.svg?color=%23626262');
  background-repeat: no-repeat;
  background-position: center center ;
  background-size:contain;
}
</style>
<?php include './index.php' ?>
<a href="#wholeweb" class="btt"> <span class="btt-icon"></span> </a>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  var scrolled = 400;
  $(window).scroll(function() {
    if ( $(window).scrollTop() > scrolled ) {
      $('a.btt').fadeIn('slow');
    } else {
      $('a.btt').fadeOut('slow');
    }
  });

  $('a.btt').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 700);
    return false;
  });
</script>
