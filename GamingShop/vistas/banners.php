<?php
 function banners()
 {
?>
<section id="container-slider"> 
   <!-- <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
   <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a> -->  
   <ul id="slider">
     <li style="z-index:0; opacity: 1;">
       <div class="content_slider" >
         <div>
         <img src="../banners/OW.jpg" >
     </div>
       </div>
     </li>
     <li>
       <div class="content_slider" >
         <div>
            <img src="../banners/RDR2.jpg">
     </div>
       </div>
     </li>
     <li>
       <div class="content_slider" >
         <div>
         <img src="../banners/Fallguys.jpg">
     </div>
       </div>
     </li>
  </ul>
  <ul class="listslider">
     <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
     <li><a itlist="itList_1" href="#"></a></li>
     <li><a itlist="itList_2" href="#"></a></li>
   </ul>
</section>
<hr class="hr_banners">

   <?php
  }
?>