<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\admin\models\News;

// $news = News::find()->all();
// $count = News::find()->count();
// $model = News::findOne($news[$count-1]->id);
if(News::find()->count()>0){
$tezkor = News::find()->orderBy('time DESC')->where(['bolim_id'=>'1'])->all();
$oxirgi = News::find()->orderBy('time DESC')->where("bolim_id<>2")->all();
$sport = News::find()->orderBy('time DESC')->where('bolim_id=2')->all();
$jahon = News::find()->orderBy('time DESC')->where("bolim_id=3")->all();
// echo "<pre>";
// print_r($model2);
// echo "</pre>";
include "func.php";


?>
      <div id="headline">
        <h3>Tezkor yangiliklar</h3>
        <h2><?=html::a($tezkor[0]->title,url::to(['view','id'=>$tezkor[0]->id]));?></h2>
        <p class="postmeta" style="margin-bottom:2px;"><?=$tezkor[0]->time?> <!-- <a href="#">Add a Comment</a> --></p>
        <div class="the_content"> <?=html::img(url::to(['../images/'.$tezkor[0]->img]),['width'=>'230','height'=>'165'])?>
          <p><?php
          $content = noimg($tezkor[0]->content);  
          echo substr($content, 0,200)
        ?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$tezkor[0]->id]));?></p>
        </div>
        <!-- /the_content -->
      </div>
      <!-- /headline -->
      <div id="featured">
        <h3>Oxirgi habarlar</h3>

        <?php $t=1;
        foreach ($oxirgi as $oxir) {
        if($t==4) break;
         ?>
        <div class="spost">
          <h2><?=html::a($oxir->title,url::to(['view','id'=>$oxir->id]));?></a></h2>
          <img src="<?=url::to(['../'])?>/images/popular1.JPG" alt="" width="95" height="80" border="0" />
          <p><?=substr(noimg($oxir->content), 0,100);?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$oxir->id]));?></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php $t++; }?>

      </div>
      <!-- /featured -->
      <div id="popular">
        <h3>Sport habarlari</h3>
      
        <?php for ($i=0; $i <3 ; $i++) { ?>
        <div class="spost">
          <h2><?=html::a($sport[$i]->title,url::to(['view','id'=>$sport[$i]->id]));?></a></h2>
          <img src="<?=url::to(['../'])?>/images/popular1.JPG" alt="" width="95" height="80" border="0" />
          <p><?php
           echo substr(noimg($sport[$i]->content), 0,130);
        ?> &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$sport[$i]->id]));?></p>
        </div>
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php }?>
      </div>
      <!-- /popular -->
      <div id="latest">
        <h3>Jahon habarlari</h3>

        <?php $i=0 ;
        foreach ($jahon as $jah) {
          if($i==3) break;
        ?>
        <div class="spost">
          <h2><?=html::a($jah->title,url::to(['view','id'=>$jah->id]));?></h2>
          <img src="<?=url::to(['../'])?>/images/featured1.jpg" alt="" width="150" height="105" border="0" />
          <p><?=substr(noimg($jah->content), 0,500)?>
           &#8230; <?=html::a("Davomini o'qish",url::to(['view','id'=>$jah->id]));?></p>
        </div>  
        <!-- /spost -->
        <div class="spbottom"></div>
        <?php $i++; }?>

        <!-- <div class="navigation">
          <div class="wp-pagenavi"> <span class="pages">Page 1 of 3</span><span class="current">1</span><a href="#" class="page">2</a><a href="#" class="page">3</a><a href="#">&raquo;</a> </div>
          - /wp-pagenavi
        </div> -->
        <!-- /navigation -->
      </div>
      <!-- /latest -->

      <?php
    }else{
      echo '<div id="headline">';
      echo "<h1>Malumotlar kiritilmagan</h1>";
      echo "</div>";
    }

      ?>
