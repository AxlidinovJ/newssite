<?php
use yii\helpers\Html;
use yii\helpers\Url;
include "func.php";
use yii\widgets\LinkPager;

?>
      <div id="latest">
        <h3>Songi yangiliklar</h3>
          <?php foreach ($news as $new){?>
        <div class="spost">
          <h2><a href="#"><?=$new->title?></a></h2>
          <?=html::img(url::to(yesimg($new->content)),['width'=>'150','height'=>'105'])?>
          <p><?=substr(noimg($new->content), 0,400);?>&#8230; </p>
          <?=html::a("Davomini o'qish",url::to(['view','id'=>$new->id]));?>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>


        <!-- /spost -->
        
            <!-- <span class="pages">Page 1 of 3</span>
            <span class="current">1</span>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <a href="#">&raquo;</a>  -->
            <?php
            echo LinkPager::widget([
              'pagination'=>$pages,
              // 'linkOptions'=>['class'=>"active"],
              'options'=>['class'=>'navigation wp-pagenavi'],
            ]);
            ?>
        
      </div>
