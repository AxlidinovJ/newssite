<?php
use yii\helpers\Html;
use yii\helpers\Url;
include "func.php";
?>

      <!-- /popular -->
      <div id="latest">
        <h3>Topilgan natijalar</h3>
        <?php 
        if(count($searchs)>0){
        foreach ($searchs as $search) { ?>
        <div class="spost">	
          <h2><?=html::a($search->title,url::to(['view','id'=>$search->id]));?></h2>
          <?=html::img(url::to(yesimg($search->content)),['width'=>'150','height'=>'105'])?>
          <p><?=substr(noimg($search->content), 0,300)?>
           &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$search->id]));?></p>
        </div>  
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php 
   		}
   	}else{
    	echo "<h1 style='color:red;'>Malumotlar topilmadi</h1>";
	}

    	?>

        <!-- <div class="navigation">
          <div class="wp-pagenavi"> <span class="pages">Page 1 of 3</span><span class="current">1</span><a href="#" class="page">2</a><a href="#" class="page">3</a><a href="#">&raquo;</a> </div>
          - /wp-pagenavi
        </div> -->
        <!-- /navigation -->
      </div>
      <!-- /latest -->
