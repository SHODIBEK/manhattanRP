<? $this->pageTitle = 'Создание новой новости - '.Yii::app()->params->sitename; ?>

<div class="my-panel my-form my-form-add-news">

	<div class="my-panel-header">

		<i class="fa fa-plus-circle"></i>&nbsp;Добавление новости

	</div>

	<div class="my-panel-body">				

		<? $this->renderPartial('_form',array('model'=>$model)); ?>

	</div>

</div>