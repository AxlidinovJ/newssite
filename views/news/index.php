<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\admin\models\News;

// $news = News::find()->all();
// $count = News::find()->count();
// $model = News::findOne($news[$count-1]->id);
$model = News::find()->orderBy('time DESC')->where(['bolim_id'=>'3'])->all();
$sport = News::find()->orderBy('time DESC')->where(['bolim_id'=>'1'])->all();
$oxirgi = News::find()->orderBy('time DESC')->where("bolim_id<>1")->all();
$jahon = News::find()->orderBy('time DESC')->where("bolim_id=2")->all();
// echo "<pre>";
// print_r($model2);
// echo "</pre>";

?>
      <div id="headline">
        <h3>Tezkor yangiliklar</h3>
        <h2><?=html::a($model[0]->title,url::to(['view','id'=>$model[0]->id]));?></h2>
        <p class="postmeta" style="margin-bottom:2px;"><?=$model[0]->time?> <!-- <a href="#">Add a Comment</a> --></p>
        <div class="the_content"> <img src="<?=url::to(['../'])?>/images/headline.jpg" alt="" width="230" height="165" border="0" />
          <p><?=substr($model[0]->content, 0,400)?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$model[0]->id]));?></p>
        </div>
        <!-- /the_content -->
      </div>
      <!-- /headline -->
      <div id="featured">
        <h3>Oxirgi habarlar</h3>

        <?php for ($i=0; $i <3 ; $i++) { ?>
        <div class="spost">
          <h2><?=html::a($oxirgi[$i]->title,url::to(['view','id'=>$oxirgi[$i]->id]));?></a></h2>
          <img src="<?=url::to(['../'])?>/images/popular1.JPG" alt="" width="95" height="80" border="0" />
          <p><?=substr($oxirgi[$i]->content, 0,100);?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$oxirgi[$i]->id]));?></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>

      </div>
      <!-- /featured -->
      <div id="popular">
        <h3>Sport habarlari</h3>
      
        <?php for ($i=0; $i <3 ; $i++) { ?>
        <div class="spost">
          <h2><?=html::a($sport[$i]->title,url::to(['view','id'=>$sport[$i]->id]));?></a></h2>
          <img src="<?=url::to(['../'])?>/images/popular1.JPG" alt="" width="95" height="80" border="0" />
          <p><?=substr($sport[$i]->content, 0,100);?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$sport[$i]->id]));?></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>

      </div>
      <!-- /popular -->
      <div id="latest">
        <h3>Jahon habarlari</h3>

        <?php for ($i=0; $i <3 ; $i++) { ?>
        <div class="spost">
          <h2><?=html::a($jahon[$i]->title,url::to(['view','id'=>$jahon[$i]->id]));?></h2>
          <img src="<?=url::to(['../'])?>/images/featured1.jpg" alt="" width="150" height="105" border="0" />
          <p><?=substr($jahon[$i]->content, 0,500)?>
           &#8230; <?=html::a($jahon[$i]->title,url::to(['view','id'=>$jahon[$i]->id]));?></p>
        </div>  
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>

        <!-- <div class="navigation">
          <div class="wp-pagenavi"> <span class="pages">Page 1 of 3</span><span class="current">1</span><a href="#" class="page">2</a><a href="#" class="page">3</a><a href="#">&raquo;</a> </div>
          - /wp-pagenavi
        </div> -->
        <!-- /navigation -->
      </div>
      <!-- /latest -->
