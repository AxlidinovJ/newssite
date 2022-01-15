<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
      <div id="latest">
        <h3>Songi yangiliklar</h3>
        <div class="spost">
          <h2 align="center">
            <?=$news->title?>
          </h2>
          <p>
          <img src="<?=url::to(['../'])?>/images/featured1.jpg" alt="" width="300" height="200">

            <?=$news->content?>
              
            </p>
        </div>
        <div class="spbottom"></div>
      </div>
