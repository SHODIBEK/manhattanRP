<!DOCTYPE html>

<html lang="ru">

<head>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<? echo Yii::app()->params['description']; ?>">
      <link rel="shortcut icon" href="/images/design/favicon.ico" type="image/x-icon">
      <title>Админ панель | Manhattan RP</title>
      <link href="/css/font-awesome.css" rel="stylesheet">
      <link href="/css/bootstrap.min.css" rel="stylesheet">
  	  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="/css/styleindex.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="/css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="/css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="/css/fm.revealator.jquery.css">
      <link rel="manifest" href="/manifest.json">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      

</head>

 <body>
<!--	<style>
  body { background: url(<?=Yii::app()->baseUrl?>/images/design/fon.png); }
</style>
-->
	<header>

		<div id="back-top" style="display: block;">
         <a href="#"><span></span> </a>
      </div>
      <nav class="white" role="navigation">
      <div class="logo"><a href="index.php" style="position: absolute; width: 100px; height: 100px;"></a></div>
      
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <?
                     // Генерация элементов навигации
                     
                     $this->widget('zii.widgets.FrapsyNavbar');
                     
                     ?>
        </div>
       </nav>
	</header>

	<section class="page">

		<div class="all-content">

			<?=$content?>

		</div>
		<div class="clearfix"></div>
	</section>



    <!-- JavaScript -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> 

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

</body>

</html>