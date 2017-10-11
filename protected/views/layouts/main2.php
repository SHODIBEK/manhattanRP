
<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<? echo Yii::app()->params['description']; ?>">
      <link rel="shortcut icon" href="/images/design/favicon.ico" type="image/x-icon">
      <title>Главная страница - Manhattan RolePlay</title>
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/font-awesome.css" rel="stylesheet">
      <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="/css/styleindex.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!--<link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
      <link href="/css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="/css/fm.revealator.jquery.css">
      <link rel="manifest" href="/manifest.json">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?=Yii::app()->baseUrl?>/css/style.css">
   </head>
   <body>
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
      <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container"><br><br>
             <h2 class="header center col s12 light">ManHattan Role Play</h2>
        <div class="row center">
          <h5 class="header col s12 light">А ты с нами?</h5>
        </div>
        <div class="row center">
    <a href="/account/reg_welcome.php" id="download-button" class="waves-effect waves-light btn blue">Создать персонаж</a>        </div><br><br>
      </div>
    </div>
    <div class="parallax"><img src="images/design/1.jpg"></div>
  </div>
  <div class="container revealator-slideright revealator-once revealator-delay1">
    <div class="section">
      <div class="row">
      <h4>Почему именно мы?</h4>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Качество</h5>
            <p class="light center">Мы сделали большую часть тяжелой работы для вас, чтобы обеспечить высокую и стабильную работу нашего проекта. Над проектам работают лучшие разработчики SA-MP сферы.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Комьюнити</h5>
            <p class="light center">В течении двух лет работы над проектом, мы собрали адекватное и дружелюбное сообщество. При поддержке функционала, неадекватные игроки не смогут помешать вам в отыгровке вашей собственной роли.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">subject</i></h2>
            <h5 class="center">Регистрация с тестом</h5>
            <p class="light center">Мы один из небольшого количества проектов, которые имеют регистрацию с тестом через сайт. Это не дает попасть на сервер неадекватным игрокам, и создает атмосферу, которую вы хотели.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Жизнь - как вождение велосипеда. Чтобы сохранить равновесие, ты должен двигаться!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/design/5.jpg" alt="Unsplashed background img 2"></div>
  </div>
      <div class="container-fluid revealator-slideright revealator-once revealator-delay1  container">
    <div class="section">
  <h4 class="header center col s12 light">Статистика</h4>
  </div>
      <div class="row" style="padding: 50px 0; text-align: center;">
        <div class="col-xs-6 col-md-4 col-xs-12 stat">
          <div class="generation_online"><b><?php echo $aInformation['Players']; ?> / <?php echo $aInformation['MaxPlayers']; ?></b></div>
          <div class="generation_text"><p>Зарегистрированные игроки</p></div>
        </div>
        <div class="col-xs-6 col-md-4 col-xs-12 stat">
          <div class="generation_online"><b><?php echo $aInformation['Players']; ?> / <?php echo $aInformation['MaxPlayers']; ?></b></div>
          <div class="generation_text"><p>Сейчас онлайн</p></div>
        </div>
        <div class="col-xs-6 col-md-4 col-xs-12 stat">
          <div class="generation_online"><b class="online_site"><script language="JavaScript" src="/online.php"></script></b>
          </div>
          <div class="generation_text"><p>Посетителей на сайте</p></div>
        </div>
      </div>
     </div>
       <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Ты развиваешься только тогда, когда играешь с более сильным соперником!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/design/2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <section class="info section_2 moveDown revealator-slideright revealator-once revealator-delay1" id="info">
        <div class="info__wrapper">
            <div class="info__nav">
                <div class="tabs-nav">
                    <a href="#1" class="info__nav-link info__nav-link_1" data-img="images/design/info1.png">

                    </a>

                    <a href="#2" class="info__nav-link info__nav-link_2" data-img="images/design/info2.png">

                    </a>

                    <a href="#3" class="info__nav-link info__nav-link_3" data-img="images/design/info3.png">

                    </a>

                    <a href="#4" class="info__nav-link info__nav-link_4" data-img="images/design/info4.png">

                    </a>

                    <a href="#5" class="info__nav-link info__nav-link_5" data-img="images/design/info5.png">

                    </a>

                    <a href="#6" class="info__nav-link info__nav-link_6" data-img="images/design/info6.png">

                    </a>

                    <a href="#7" class="info__nav-link info__nav-link_7" data-img="images/design/info7.png">

                    </a>
                </div>

                <img src="images/design/info1.png" alt="" class="info__img"/>
            </div>
            <div class="info__content tabs__list" id="tabs">
                <div id="1" class="info__tab info__tab_1">
                    <div class="info__title">
                        стань
                        <span>журналистом!</span>
                    </div>

                    <div class="info__text">
                        У тебя появится возможность работать в крупной медиакорпорации CNN. Сперва ты будешь писать 
                        небольшие заметки, брать интервью, редактировать объявления. А по мере карьерного роста
                        ты сможешь стать радио- или теле- ведущим, а затем и вовсе возглавить корпорацию!
                    </div>
                </div>

                <div id="2" class="info__tab info__tab_2">
                    <div class="info__title">
                        стань
                        <span>политиком!</span>
                    </div>

                    <div class="info__text">
                       Жизнь политика очень непростая, но невероятно интересная. Создай свою партию, стань сенатором
                       и учавствуй в президентской гонке. Тебя ждут не только публичные выступления, теледебаты и общественная деятельность,
                       но и роскошные государственные резиденции с дорогущими автомобилями!

                    </div>
                </div>

                <div id="3" class="info__tab info__tab_3">
                    <div class="info__title">
                        стань
                        <span>военным!</span>
                    </div>

                    <div class="info__text">
                        Армейская жизнь это не только постоянные военные действия. Часто это нудное времяпровождение 
                        на постах или выполнение непростых приказов. Однако если ты все это преодолеешь, 
                        то сможешь стать офицером, а в последствии управлять огромной армией!

                    </div>
                </div>

                <div id="4" class="info__tab info__tab_4">
                    <div class="info__title">
                        стань
                        <span>полицейским!</span>
                    </div>

                    <div class="info__text">
                        Ежедневные погони за самыми отъявленными преступниками, налеты на наркопритоны и
                        охрана высокопоставленных лиц - все это станет частью твоей работы. И все это ради спокойной жизни 
                        простых граждан, которые даже не догадываются насколько опасна твоя профессия!

                    </div>
                </div>

                <div id="5" class="info__tab info__tab_5">
                    <div class="info__title">
                        стань
                        <span>медиком!</span>
                    </div>

                    <div class="info__text">
                        Лечение больных - одна их самых непростых задач. Ведь к каждому больному нужно найти подход.
                        Путь от простого интерна до главного врача больницы не короткий, но если усиленно трудится,
                        то у тебя все получится!

                    </div>
                </div>

                <div id="6" class="info__tab info__tab_6">
                    <div class="info__title">
                        стань
                        <span>бандитом!</span>
                    </div>

                    <div class="info__text">
                        Ежедневные перестрелки, борьба за территории, выращивание и продажа наркотиков 
                        - это часть нелегкой доли преступника. В этом мире никому нельзя доверять,
                        ведь любой может оказаться предателем!

                    </div>
                </div>

                <div id="7" class="info__tab info__tab_7">
                    <div class="info__title">
                        стань
                        <span>мафиози!</span>
                    </div>

                    <div class="info__text">
                        Красивые дома, быстрые автомобили и роскошные девушки - это лишь одна сторона жизни успешного мафиози.
                        Контроль наркотрафика, контрабанда оружия и жестокие войны триад занимают большую часть жизни.
                        Добейся уважения и стань главой преступного синдиката, чтобы контролировать всех, даже политиков!

                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Время летит — это плохая новость. Хорошая новость — вы пилот своего времени.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/design/4.jpg" alt="Unsplashed background img 4"></div> 
  </div>
    <div class="container revealator-slideright revealator-once revealator-delay1">
    <div class="section">
  <h4 class="header center col s12 light" id="play_game">Как начать играть?</h4>
  </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">play_arrow</i></h2>
            <h5 class="center">Скачать игру</h5>
            <p class="light center">Для того, чтобы начать играть, вам сначала нужна чистая копия Gta San Andreas. Скачать её можно ниже по кнопке.</p>
      <center><a href="media/gtasa.torrent" class="waves-effect waves-light btn blue"><i class="material-icons left">note_add</i>Скачать</a></center>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">swap_vert</i></h2>
            <h5 class="center">Скачать модификацию</h5>
            <p class="light center">После установки игры, вам нужно установить модификацию SA-MP, чтобы начать играть по сети. Установка идет в папку с игрой.</p>
      <center><a href="media/sa-mp-0.3.7-install.exe" class="waves-effect waves-light btn blue"><i class="material-icons left">note_add</i>Скачать</a></center>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text"><i class="material-icons">playlist_add</i></h2>
            <h5 class="center">Добавить нас</h5>
            <p class="light center">После установки SA-MP, запускаем его и вводим свой ник аккаунта, после чего добавляем наш IP и нажимаем "Играть". Готово!</p>
      <center><a  href="samp://185.74.4.111:7777" class="waves-effect waves-light btn blue btn-clipboard" id="textarea-example" data-clipboard-target="#textarea-example" style="cursor: pointer; margin-bottom: 10px;"><i class="material-icons left ">play_arrow</i>Скопировать IP</a></center>
           </div>
        </div>
      </div>
     </div>
     <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Кого бы ни взялся изображать человек, он всегда играет вместе с тем и себя самого!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/design/3.jpg" alt="Unsplashed background img 3"></div> 
  </div>
  <footer class="page-footer blue">
      <div class="footer-copyright">
      <div class="container">
      © Все права защищены  <a class="brown-text text-lighten-3" href="index.html#">ManHattan Role Play</a><p class="brown-text text-lighten-3 right">Сайт разработан в: <a href="http://creativelab.uz/">CreativeLab</a></p>
      </div>
    </div>
  </footer>
  <script src="/js/jquery-2.1.1.min.js"></script> 
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/scrollSpeed.js"></script>
  <script src="/js/fm.revealator.jquery.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  
  <script type="text/javascript">
      // tabs
    var tabImg = $('.info__img');

    $('#tabs>div').hide();
    $('#tabs>div:first').show();
    $('.tabs-nav a:first').addClass('active');

    $('.tabs-nav a').click(function () {
        $('.tabs-nav a').removeClass('active');
        $(this).addClass('active');
        var currentTab = $(this).attr('href');

        $('#tabs>div').hide();
        $(currentTab).show();
        $(tabImg).attr('src', $(this).attr('data-img'));

        return false;
    });

    // burger nav

    $('.burger').on('click', function (e) {
        e.preventDefault();

        $('.topmenu').slideToggle(300);
    });

    $(document).ready(function () {
        $(function() {
            $('a[href*="#"]:not(.info__nav-link)').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 850);
                        return false;
                    }
                }
            });
        });
    resizeSections();

        $(window).on('resize', function(){
            resizeSections()
        });

    function resizeSections() {
        if ( $(window).width() > 1070 && $(window).height() > 699) {

            var windowHeight = $(window).height();

            $('section, .info__wrapper, .how-to-play__wrapper').height(windowHeight);
        } else {
            $('section, .info__wrapper, .how-to-play__wrapper').height('auto');
        }
    }

    });
    $(function(){
  $.fn.scrollToTop=function(){
    $(this).hide().removeAttr("href");
    if($(window).scrollTop()!="0"){
        $(this).fadeIn("slow")
  }
  var scrollDiv=$(this);
  $(window).scroll(function(){
    if($(window).scrollTop()=="0"){
    $(scrollDiv).fadeOut("slow")
    }else{
    $(scrollDiv).fadeIn("slow")
  }
  });
    $(this).click(function(e){
      e.preventDefault();
      $("html, body").animate({scrollTop:0},"slow")
    })
  }
});
$(function() {$("#back-top").scrollToTop();
});
    
    $(window).load(function() {
  $('#before-load').find('i').fadeOut().end().delay(400).fadeOut('slow');
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("a.nav-wrapper").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
          scrollTop: $($(this).attr("href")).offset().top
        }, 1000);
        return false;
    });
    });
  </script>
   </body>
</html>