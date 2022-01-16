<?php
use yii\helpers\Html;
use yii\helpers\Url;
include "func.php";

?>
      <div id="latest">
        <h3>Songi yangiliklar</h3>
          <?php foreach ($news as $new){?>
        <div class="spost">
          <h2><a href="#"><?=$new->title?></a></h2>
          <img src="<?=url::to(['../'])?>/images/featured1.jpg" alt="" width="150" height="105" border="0" />
          <p><?=substr(noimg($new->content), 0,400);?>&#8230; </p>
          <?=html::a("Davomini o'qish",url::to(['view','id'=>$new->id]));?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>

       
        <!-- /spost -->
        <div class="navigation">
          <div class="wp-pagenavi"> <span class="pages">Page 1 of 3</span><span class="current">1</span><a href="#" class="page">2</a><a href="#" class="page">3</a><a href="#">&raquo;</a> 
          </div>
          <!-- /wp-pagenavi -->
        </div>
        <!-- /navigation -->
      </div>
      <!-- /latest -->