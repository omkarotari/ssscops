<?php 
error_reporting(0);
$cur_page_arr = explode("/",$_SERVER['PHP_SELF']);
$cur_page = $cur_page_arr[count($cur_page_arr)-1];
//echo $cur_page;
if($cur_page=='index.php'){
  $class_active='active';
  }
else if($cur_page=='about_college.php')
{
  $abt_college='active';
}
else if($cur_page=='about_sanstha.php')
{
  $abt_sanstha='active';
}
else if($cur_page=='contact.php')
{
  $contact='active';
}
else{
  $class_active='active';
}

echo '<div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class='.$class_active.'><a href="index.php"><span>Home</span></a></li>
          <li class='.$abt_college.'><a href="about_college.php"><span>About College</span></a></li>
          <li class='.$abt_sanstha.'><a href="about_sanstha.php"><span>About sanstha</span></a></li>
          <li class='.$contact.'><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php">COP<span>Sawarde</span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span> College of Pharmacy(Poly) Sawarde...</span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /><span> World\'s Pharmasist Day Celebration...</span></a> <a href="#"><img src="images/slide3.jpg" width="960" height="500" alt="" /><span> Students Performing in Laboratory...</span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div> ' ?>