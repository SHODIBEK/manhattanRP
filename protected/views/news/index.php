<? $this->pageTitle = 'Новости - '.Yii::app()->params->sitename; ?>
<? $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_news',
)); ?>
