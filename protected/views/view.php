<? $this->pageTitle = 'Просмотр профиля '.$data->{$field['username']['alias']}.' - '.Yii::app()->params->sitename; ?>
<head>
	<link href="/css/profile_theme.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<?
$tabs[] = array('label'=>'Информация об аккаунте','content'=>$this->renderPartial('_osnovnoe',array('data'=>$data,'field'=>$field,'names'=>$names),true),'active'=>true);

		if($data->{$field['id']['alias']} == Yii::app()->user->userid) {

			if(!empty($team)) {

				$tabs[] = array('label'=>'Организация','content'=>$this->renderPartial('_team',array('data'=>$data,'field'=>$field,'team'=>$team),true));

			}
		}
		foreach($field as $key=>$val) {
			if(!empty($val['alias']) && $val['alias'] !== 'Новый параметр' && $val['show'] != 0) {
				switch($key) {
					case 'alias':
				}
			}
		}
		
?>
        <div class="banner-head parallax-container">
            <h1>ManHattan Role Play</h1>
            <h3 style="color: #fff">Личный кабинет персонажа</h3>
         </div>
         <div class="row">
            <div class="col s12 m8 l7">
               <div class="card">
                  <div>
                     <div class='col-xs-12'>
                        <div class='col-xs-4 textcenter leftinfo wow fadeInLeft'>
                            <div class="profile__skin-wrap hidden-xs container">
                              <img src="<? echo Yii::app()->baseUrl; ?>/images/skins/var_1/<? echo $data->{$field['skin']['alias']}; ?>.png" alt="Внешний вид игрока" class="profile__skin">
                           </div>
                           <p class='username'>1 Уровень</p>
                           <label>Очки опыта</label>
                           <div id='progress' class='exp'>
                              <span>0 / 4</span>
                              <div style='width:0%'></div>
                           </div>
                           <label>Сытость</label>
                           <div id='progress' class='satiety'>
                              <span>100 / 100</span>
                              <div style='width:100%'></div>
                           </div>
                           <ul class='userMenu'>
                              <li>
                                 <div class="search_input">
                                    <input type="text" name="search" placeholder="Найти игрока..." style="width: 90%;margin: 0;"><span class="icon"><i class="fa fa-search" style="position: absolute;
                                       top: 18px; right: 12px;"></i></span>
                                 </div>
                              </li>
                              <li><button type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="activity"><i class="fa fa-cog" aria-hidden="true"></i> Сменить пароль</button></li>
                              <div class="collapse" id="collapseExample">
                                 <div class="well">
                                    <div class="form-group is-empty">
                                       <input class="form-control" placeholder="Введите старый пароль.." name="LoginForm[password]" id="LoginForm_password" type="password" />
                                       <span class="material-input"></span>
                                       <span class="material-input"></span>
                                       <input class="form-control" placeholder="Введите новый пароль.." name="LoginForm[password]" id="LoginForm_password" type="password"  value="" required=""/>
                                       <input class="form-control" placeholder="Повторите новый пароль.." name="LoginForm[password]" id="LoginForm_password" type="password"  value="" required=""/>
                                       <button class="btn green btn-success" type="submit">ОК</button>
                                    </div>
                                 </div>
                              </div>
                              <li><a href='/site/logout/'><i class="fa fa-toggle-off" aria-hidden="true"></i> Выйти </a></li>
                           </ul>
                        </div>
                        <div class='col-xs-8'>
                              <div class="online-offline-block">
                              <div class="text-center" style="margin-bottom:25px">
                                 <span class="profile__nickname">John_Dazzer</span>
                                 <div class="on"><? echo ''.$txt.'' ?></div>
                               </div>
                           </div>
                           <h3 class='blockTitle wow fadeIn'>Общая информация</h3>
                           <div class='darkBlock wow fadeInRight'>
                              <div class='row'>
                                 <div class='col-xs-12'>
                                    <div class='col-xs-4'>
                                       <p><small>Номер аккаунта</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'>1</span></span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>E-Mail адрес</small></p>
                                       <p>
                                          <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="ac868686dfcd95949bcb9d9eceecc1cdc5c082ded9">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
                                       </p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Пол</small></p>
                                       <p><i class="fa fa-male" aria-hidden="true"></i></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Номер телефона</small></p>
                                       <p><span class='fontnumb'>+9989</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Законопослушность</small></p>
                                       <p><span class='fontnumb'>0</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Предупреждения</small></p>
                                       <p><span class='fontnumb'>0/3</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Баны</small></p>
                                       <p><span class='fontnumb'>0/3</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Варны</small></p>
                                       <p><span class='fontnumb'>0/3</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Дата регистрации</small></p>
                                       <p><span class='fontnumb'>21.04.2017</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Дом</small></p>
                                       <p><span class='fontnumb'>ID 100</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Бизнес</small></p>
                                       <p><span class='fontnumb'>24/7</span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Машина</small></p>
                                       <p><span class='fontnumb'>Bullet</span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class='darkBlock wow fadeInRight wait-1'>
                              <div class='row'>
                                 <div class='col-xs-12'>
                                    <div class='col-xs-4'>
                                       <p><small>Преступный авторитет</small></p>
                                       <p><span class='fontnumb'>0</span> Очков</p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Уровень розыска</small></p>
                                       <p><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Наркотики</small></p>
                                       <p class='empty'><span class='fontnumb'>0</span> Грамм</p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Материалы</small></p>
                                       <p class='empty'><span class='fontnumb'>0</span> Материалов</p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Репутация лидерства</small></p>
                                       <p><span class='fontnumb'></span></p>
                                    </div>
                                    <div class='col-xs-4'>
                                       <p><small>Статус администратора</small></p>
                                       <p><span class='fontnumb'><? echo ''.$names[0]['names'][$data->{$val['alias']}].' (ранг: '.$data->{$field['rang']['alias']}.') '?></span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <h3 class='blockTitle wow fadeIn'>Финансы</h3>
                           <div class='darkBlock wow fadeIn'>
                              <div class='row'>
                                 <div class='col-xs-12'>
                                    <div class='col-xs-3'>
                                       <p><small>Наличные деньги</small></p>
                                       <p><span class='fontnumb'><i class='dollar'>$</i><span class='spincrement'><? echo ''.number_format($data->{$val['alias']},0,' ','`').'' ?></span></span></p>
                                    </div>
                                    <div class='col-xs-3'>
                                       <p><small>Банковский счёт</small></p>
                                       <p><span class='fontnumb'><i class='dollar'>$</i><span class='spincrement'><? echo ''.number_format($data->{$val['alias']},0,' ','`').'' ?></span></p>
                                    </div>
                                    <div class='col-xs-3'>
                                       <p><small>Баланс на телефоне</small></p>
                                       <p><span class='fontnumb'><i class='dollar'>$</i><span class='spincrement'>0</span></p>
                                    </div>
                                    <div class='col-xs-3'>
                                       <p><small>Донат</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'>0</span></span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <h3 class='blockTitle wow fadeIn'>Трудоустройство</h3>
                           <div class='darkBlock wow fadeIn'>
                              <div class='row'>
                                 <div class='col-xs-12'>
                                    <div class='col-xs-6'>
                                       <p><small>Организация</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'><? echo ''.$names[0]['names'][$data->{$val['alias']}].'';?></span></span></p>
                                    </div>
                                    <div class='col-xs-6'>
                                       <p><small>Звание</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'><? echo .$val['label'].$names[0]['names'][$data->{$val['alias']}].' (ранг: '.$data->{$field['rang']['alias']}.)''; ?></span></p>
                                    </div>
                                    <br>
                                    <div class='col-xs-6'>
                                       <p><small>Работа</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'><?echo ''.$names[2]['names'][$data->{$val['alias']}].'' ?></span></p>
                                    </div>
                                    <div class='col-xs-6'>
                                       <p><small>Стаж</small></p>
                                       <p><span class='fontnumb'><span class='spincrement'>Отсуствует</span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class='col-xs-12'>
                                 <div class='col-xs-6'>
                                    <h3 class='blockTitle wow fadeIn'>Лицензии</h3>
                                    <div class='darkBlock lic wow fadeIn'>
                                       <p><i class="no"><i class="fa fa-times" aria-hidden="true"></i></i>Наземный транспорт</p>
                                       <p><i class="no"><i class="fa fa-times" aria-hidden="true"></i></i>Воздушный транспорт</p>
                                       <p><i class="no"><i class="fa fa-times" aria-hidden="true"></i></i>Водный транспорт</p>
                                       <p><i class="no"><i class="fa fa-times" aria-hidden="true"></i></i>Оружие</p>
                                       <p><i class="no"><i class="fa fa-times" aria-hidden="true"></i></i>Бизнес</p>
                                    </div>
                                 </div>
                                 <div class='col-xs-6'>
                                    <h3 class='blockTitle wow fadeIn'>Владение оружием</h3>
                                    <div class='darkBlock gun wow fadeIn'>
                                       <div class='oneGun'>
                                          <img src='../../../images/spistol.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>50</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:50%'></div>
                                          </div>
                                       </div>
                                       <div class='oneGun'>
                                          <img src='../../../images/pistol.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>0</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:0%'></div>
                                          </div>
                                       </div>
                                       <div class='oneGun'>
                                          <img src='../../../images/shotgun.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>0</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:0%'></div>
                                          </div>
                                       </div>
                                       <div class='oneGun'>
                                          <img src='../../../images/mp5.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>0</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:0%'></div>
                                          </div>
                                       </div>
                                       <div class='oneGun'>
                                          <img src='../../../images/ak47.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>0</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:0%'></div>
                                          </div>
                                       </div>
                                       <div class='oneGun'>
                                          <img src='../../../images/m4.png'>
                                          <p><span class='right'>100<b>%</b></span><span><span class='spincrement'>0</span><b>%</b></span></p>
                                          <div id='progress'>
                                             <div style='width:0%'></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         </div>
         </div>
