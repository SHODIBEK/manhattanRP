<? $this->pageTitle = 'Покупка донат-очков - '.Yii::app()->params->sitename; ?>
	
<? if(isset($model)) { ?>
	<strong>Сумма: </strong><span><?=$model->sum?> р.</span><br>
	<strong>F - монет: </strong><span><?=$model->sum?></span><br>
	<strong>Игровое имя: </strong><span><?=$model->nickname?></span><br>
	<strong>Описание: </strong><span>Покупка F - монет</span><br>
	<hr>
	<form action="<?=Yii::app()->params[unitpay_action]?>" method="post" role="form">
		<input type="hidden" name="sum" value="<?=$model->sum?>">
		<input type="hidden" name="desc" value="Покупка донат-очков">
		<input type="hidden" name="account" value="<?=$userid?>">
		<button type="submit" style="border-radius:0;width:258px;" class="btn btn-primary" align="center">Перейти к оплате</button>
	</form>

<? } else { ?>
<h2><p align="center" class="title">Магазин</p></h2>
<form action="/donate/" method="post" role="form">
</center>
<? } ?>