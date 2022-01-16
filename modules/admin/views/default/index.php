<?php
use yii\bootstrap4\Html;
use yii\helpers\url;
?>

<h1><?=html::a("Menu qo'shish",url::to(['default/addmenu']));?></h1>
<h1><?=html::a("Bo'lim qo'shish",url::to(['default/addbolim']));?></h1>
<h1><?=html::a("Yangilik qo'shish",url::to(['default/addnews']));?></h1>


<table class="table table-bordered">
		<tr>
		<th>
			Sarlavhasi
		</th>
		<th>
			Bolim nomi
		</th>
		<th>
			Rasm
		</th>
		<th>
			Kontent
		</th>
		<th>
			Vaqti
		</td>
		<th>
			DElET/EDIT
		</td>	
	</tr>
	<?php foreach ($news as $new){?>
	<tr>
		<td>
			<?=$new->title; ?>
		</td>
		<td>
			<?=$new->bolim->bnomi; ?>
		</td>
		<td>
			<?=$new->img; ?>
		</td>
		<td>
			<?=substr($new->content,0,100); ?>
		</td>
		<td>
			<?=$new->time; ?>
		</td>
		<td>
			<?=html::a("Edit",url::to(['editnews','id'=>$new->id]),['class'=>"btn btn-success block"])?>
			<?=html::a("Del",url::to(['deletenews','id'=>$new->id]),['class'=>"btn btn-danger block"])?>
		</td>	
	</tr>
	<?php }?>

</table>
