<?php
$vars = [
	'title' => 'Вейдерсы для квадроциклистов', 
	'subtitle' => 'тест драйв - <span>20 дней!</span><br class="mob"/> не нравится? - вернем деньги.'	
];

// utm метка, по которой будет идти проверка
$utm = $_GET['utm_ver'];



if (isset($utm))
	switch ($utm) {
		// сама проверка - содержание utm метки, заданной выше
		case 'zabrod': // в конце ссылки добавить  ?utm_content=reklama_v_yandex
			$vars = [
				'title' => 'Забродники для квадроциклистов', 
				'subtitle' => 'Супер заброд <span>20 дней!</span><br class="mob"/> не нравится? - вернем деньги.'	
			];
		break;

		case 'reklama_v_yandex_2': // в конце ссылки добавить  ?utm_content=reklama_v_yandex_2
			$vars = [
				'title' => 'Вейдерсы для квадроциклистов 2', 
				'subtitle' => 'тест драйв - <span>20 дней!</span><br class="mob"/> не нравится? - вернем деньги.'	
			];
		break;

	}


$vis = (isset($_COOKIE['vis']) ? strval($_COOKIE['vis']) : 0) + 1;

setcookie('vis', $vis, strtotime( '+90 days' ));  /* срок действия 1 год */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<title> ВЕЙДЕРСЫ ДЛЯ КВАДРОЦИКЛИСТОВ </title>

	<!-- Стандартные стили -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Russo+One" rel="stylesheet"> 


</head>
<body>
	
	<header id="header">
		<div class="wrap">
			<div class="fw">
				<div class="cc30"><img src="assets/img/logo.png" alt=""></div>
				<div class="cc30 pc5 tar"><img src="assets/img/logo2.png" alt=""></div>
				<div class="cc30 pc5 tar"><img src="assets/img/logo3.png" alt=""></div>
			</div>
		</div>
	</header><!-- /header -->

	<section id="s01">

		<div class="topSlide_novis bg1"></div>
		<div class="wrap">
			<div class="fw">
				<div class="cc60 tal pc125 topSlide_novis">
					<h1><?= $vars['title'] ?></h1>
					<p class="test mt5"><?= $vars['subtitle'] ?></p>
				</div>
				<div class="cc25 call tar topSlide_zindex">
					<p class="mb2 mt7">Звоните по России бесплатно:</p>
					<a href="tel:88005558569" title="">8-800-555-85-69</a>
					<div class="mt3">
						<a href="#x" title="" class="btn" onclick="popup(4)">Перезвоните мне</a>
					</div>
				</div>
			</div>
			<div class="fw bottom mt4">
				<div class="cc33 ml topSlide_novis user">
					<p class="name">Владислав маликов </p>
					<p class="mt1 mb1"><span>Многократный призёр крупнейших соревнований на ATV. победитель RZR CAMP 2016.</span></p>
					<p>«Заходил в воду по грудь - всё сухо! Очень понравились манжеты - воду не пропускают! Ботинки на много лучше тех, что брал в рыболовных магазинах...»</p>
					<div class="video mt2">
						<a class="ytbtn dib" href="https://www.youtube.com/watch?v=qjDK1Sg2Uno" title="">
							<img src="assets/img/playbutton.png" alt="">
						</a>
						<a class="ytbtn dib" href="https://www.youtube.com/watch?v=7BYfCvloq9s"><span>Смотреть видео с Владиславом</span></a>
					</div>
				</div>
				<div class="cc33 pc5 topSlide_zindex recommend">
					<div class="box pc5">
						<a class="ytbtn dib" href="https://www.youtube.com/watch?v=srCvD4v5JvA" title="">
							<img class="dib" src="assets/img/videobutton1.png" alt="">
						</a>
						<p class="dib pc5"><strong>Рекомендовано</strong><br>Профессором Преображенским</p>
					</div>
				</div>
				<div class="cc33 pc5 mt1 topSlide_zindex recommend">
					<div class="box pc5">
						<a class="ytbtn dib" href="https://www.youtube.com/watch?v=d9ZyLUQoqKU" title="">
							<img class="dib" src="assets/img/videobutton2.png" alt="">
						</a>
						<p class="dib pc5"><strong>Рекомендовано</strong><br>Самарскими Квадроциклистами</p>
					</div>
				</div>
			</div>
		</div>


		<div class="topSlide slide_1">
			<div class="wrap">
				<div class="fw">
					<div class="cc60 tal pc125 slide_hide">
						<h1>Вейдерсы для квадроциклистов</h1>
						<p class="test mt5">Примерьте перед покупкой в  <span>279 городах РФ</span></p>
					</div>
					<div class="cc25 call tar"> &ensp; </div>
				</div>
				<div class="fw bottom mt4">
					<div class="cc33 ml slide_hide">
						<p class="name">Сергей Карякин </p>
						<p class="mt1 mb1"><span>победитель dakar 2017! Многократный<br/> победитель крупнейших соревнований на ATV.</span></p>
						<p>«Прошёл в экипировке Finntrail больше 1500 км<br/> грязи, болот и глины. И она до сих пор не промокает!<br/> Других хватало на 1-2 покатушки..»</p>
						<div class="video mt2">
							<a class="ytbtn dib" href="https://www.youtube.com/watch?v=qjDK1Sg2Uno" title="">
								<img src="assets/img/playbutton.png" alt="">
							</a>
							<a class="ytbtn dib" href="https://www.youtube.com/watch?v=1_IgmLhnO8c"><span>Смотреть видео с Сергеем</span></a>
						</div>
					</div>
					<div class="cc33 pc5">&ensp; </div>
					<div class="cc33 pc5 mt1"> &ensp; </div>
				</div>
			</div>
		</div>


		<div class="topSlide slide_2">
			<div class="wrap">
				<div class="fw">
					<div class="cc60 tal pc125 slide_hide">
						<h1>Вейдерсы для квадроциклистов</h1>
						<p class="test mt5">Гарантия на повреждение и протечку <span>1 год</span></p>
					</div>
					<div class="cc25 call tar"> &ensp; </div>
				</div>
				<div class="fw bottom mt4">
					<div class="cc33 ml slide_hide">
						<p class="name">Алексей Тузов</p>
						<p class="mt1 mb1"><span>Многократный победитель крупнейших<br/> соревнований на ATV, чемпион России 2016</span></p>
						<p>«Только экипировка Finntrail пережила «Ладогу»!<br/> Вейдерсы других производителей протирались<br/> или расходились по швам...»</p>
						<div class="video mt2">
							<a class="ytbtn dib" href="https://www.youtube.com/watch?v=qjDK1Sg2Uno" title="">
								<img src="assets/img/playbutton.png" alt="">
							</a>
							<a class="ytbtn dib" href="https://www.youtube.com/watch?v=tL-ND8hQZ20"><span>Смотреть видео с Алексеем</span></a>
						</div>
					</div>
					<div class="cc33 pc5">&ensp; </div>
					<div class="cc33 pc5 mt1"> &ensp; </div>
				</div>
			</div>
		</div>
	</section>


	<section id="s02">
		<div class="perehod">
			<img src="assets/img/perehod.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>АКЦИИ</h1>
			</div>
			<div class="clearifx"></div>
			<div class="mt9 tac akcii">


				<div class="tovar">
					<div class="hexagon"></div>
					<div class="block">
						<div class="verh">
							<div class="fw middle">
								<div class="cc35">
									<img src="assets/img/triggers.jpg" alt="">
								</div>
								<div class="cc30">
									<img src="assets/img/pants/1.png" alt="">
								</div>
								<div class="cc35">
									<p class="mt2">Finntrail</p>
									<p class="mt9"><span>вейдерсы</span></p>
								</div>
							</div>

						</div>

						<div class="niz">
							<div class="perehod"></div>

							<p class="name mb1"><strong>Finntrail </strong>Aquamaster</p>
							<div class="price">
								<p class="discount dib">-10%</p>
								<p class="del">15 990</p>
								<p class="new dib">14 520.-</p>
							</div>
							<div class="tac mt1">
								<a href="#x" class="btn" title="" onclick="popup(2)">заказать</a>
							</div>
						</div>
						<div class="overlay tac" onclick="popup(1,this)">
							<a href="#x">смотреть<br>подробности</a><br>
							<img src="assets/img/arrows.png" alt="">
						</div>
					</div>
				</div>


				<div class="tovar">
					<div class="hexagon"></div>
					<div class="block">
						<div class="verh">
							<div class="fw middle">
								<div class="cc35">
									<img src="assets/img/triggers.jpg" alt="">
								</div>
								<div class="cc30">
									<img src="assets/img/pants/bag.png" alt="">
								</div>
								<div class="cc35">
									<p class="mt2">Finntrail</p>
									<p class="mt9"><span>сумка</span></p>
								</div>
							</div>

						</div>

						<div class="niz">
							<div class="perehod"></div>

							<p class="name mb1"><strong>Finntrail </strong>Aquabag 40L</p>
							<div class="price">
								<p class="discount dib">-100%</p>
								<p class="del">2 000</p>
								<p class="new dib">0.-</p>
							</div>
							<div class="tac mt1">
								<a href="#x" class="btn" title="" onclick="popup(2)">заказать</a>
							</div>
						</div>
						<div class="overlay tac" onclick="popup(1,this)">
							<a href="#x">смотреть<br>подробности</a><br>
							<img src="assets/img/arrows.png" alt="">
						</div>
					</div>
				</div>

				<div class="tovar">
					<div class="hexagon"></div>
					<div class="block">
						<div class="verh">
							<div class="fw middle">
								<div class="cc35">
									<img src="assets/img/triggers.jpg" alt="">
								</div>
								<div class="cc30">
									<img src="assets/img/pants/komplekt.png" alt="">
								</div>
								<div class="cc35">
									<p class="mt2">Finntrail</p>
									<p class="mt9"><span>комплект</span></p>
								</div>
							</div>

						</div>

						<div class="niz">
							<div class="perehod"></div>

							<p class="name mb1"><strong>Finntrail </strong>Mud Rider 5250 MAX-4</p>
							<div class="price">
								<p class="discount dib">-40%</p>
								<p class="del">19 480</p>
								<p class="new dib">11 680.-</p>
							</div>
							<div class="tac mt1">
								<a href="#x" class="btn" title="" onclick="popup(2)">заказать</a>
							</div>
						</div>
						<div class="overlay tac" onclick="popup(1,this)">
							<a href="#x">смотреть<br>подробности</a><br>
							<img src="assets/img/arrows.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<section id="s03">
		<div class="perehod">
			<img src="assets/img/perehod2.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>различия в вейдерсах</h1>
			</div>
			<p class="tac"><span>О которых надо знать перед тем, как перейти к выбору</span></p>
			<div class="fw mt4">
				<div class="boxes">
					<div class="cc50 visible" id="img1">
						<img src="assets/img/material1.jpg" alt="">
					</div>
					<div class="cc50" id="img2">
						<img src="assets/img/shues.jpg" alt="">
					</div>
					<div class="cc50" id="img3">
						<img src="assets/img/sapog.jpg" alt="">
					</div>
					<div class="cc50" id="img4">
						<img src="assets/img/shov.jpg" alt="">
					</div>
					<div class="cc50" id="img5">
						<img src="assets/img/size.jpg" alt="">
					</div>
				</div>
				<div class="cc50">
					<div class="accordion">

						<p class="head" onclick="look(this);" forid="img1">МАТЕРИАЛЫ</p>
						<img class="arrow" src="assets/img/acrdarrow.png" alt="">
						<p class="content active">Обычные рыболовские забродники из ПВХ не подойдут для катания на квадроцикле, так как быстро лопнут от нагрузок, а Ваше тело не будет в них "дышать"</p>
					</div>
					<div class="accordion">
						<p class="head" onclick="look(this);" forid="img2"> ВЕЙДЕРСЫ С БОТИНКАМИ</p>
						<img class="arrow" src="assets/img/acrdarrow.png" alt="">
						<p class="content">Лучший выбор для  для передвижения по грязи.<br>Отличная фиксация голеностопа. Надёжная защита<br>ног на пересечённой местности.</p>
					</div>
					<div class="accordion">
						<p class="head" onclick="look(this);" forid="img3"> ВЕЙДЕРСЫ С САПОГАМИ</p>
						<img class="arrow" src="assets/img/acrdarrow.png" alt="">
						<p class="content">Экономичное решение. Простота в эксплуатации.<br>Удобно надевать, удобно снимать</p>
					</div>
					<div class="accordion">
						<p class="head" onclick="look(this);" forid="img4"> ОТЛИЧИЯ КРОЯ И ТКАНИ</p>
						<img class="arrow" src="assets/img/acrdarrow.png" alt="">
						<p class="content">Для езды на квадроцикле, важно наличие усиленной ткани<br>и минимального количества швов в местах соприкосновения<br>с квадроциклом (внутренняя часть ног и седалище).</p>
					</div>
					<div class="accordion">
						<p class="head" onclick="look(this);" forid="img5"> РАЗМЕР</p>
						<img class="arrow" src="assets/img/acrdarrow.png" alt="">
						<p class="content">Вейдерсы прослужат долго, только при правильно подобранном размере. Обязательно примерьте вейдерсы перед покупкой,<br>или подберите размер при помощи специалиста.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="s04">
		<div class="perehod">
			<img src="assets/img/perehod3.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>Каталог</h1>
			</div>
			<div class="nav mt6">
				<ul>
					<li class="active"><a href="veiders.html#veiders">ВЕЙДЕРСЫ</a></li>
					<li><a href="kurtki.html#kurtki">КУРТКИ</a></li>
					<li><a href="boots.html#boots">БОТИНКИ</a></li>
					<li><a href="thermo.html#thermo">ТЕРМО ОДЕЖДА</a></li>
					<li><a href="komplekt.html#komplekt">КОМПЛЕКТЫ</a></li>
					<li><a href="aksesuar.html#aksesuar">АКСЕССУАРЫ</a></li>
				</ul>
			</div>
			<div class="nav dn" id="katalognav">
				<div class="btn middle"><img src="assets/img/three.svg" alt=""> <span>Открыть категории</span></div>
				<ul>
					<li class="active"><a href="veiders.html#veiders">ВЕЙДЕРСЫ</a></li>
					<li><a href="kurtki.html#kurtki">КУРТКИ</a></li>
					<li><a href="boots.html#boots">БОТИНКИ</a></li>
					<li><a href="thermo.html#thermo">ТЕРМО ОДЕЖДА</a></li>
					<li><a href="komplekt.html#komplekt">КОМПЛЕКТЫ</a></li>
					<li><a href="aksesuar.html#aksesuar">АКСЕССУАРЫ</a></li>
				</ul>
			</div>
			<div id="content"> </div>
		</div>
	</section>


	<section id="s05">
		<div class="perehod">
			<img src="assets/img/perehod4.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>Как выбрать размер?</h1>
			</div>
			<p class="tac mt1"><span>Вейдерсы не подходящие по размеру изнашиваются на 40% быстрее!</span></p>
			<div class="fw mt6">
				<div class="cc25">
					<img src="assets/img/image.png" alt="">
				</div>
				<div class="cc70 pc5">
					<p>Для определения размера вейдерсев измерьте обхват бёдер и талии<br> (используйте наибольший замер), а также внутренний шов от пола<br>до промежности. По результату замеров подберите свой размер<br>из таблицы.Если вы подбираете вейдерсы для квадроцикла,<br>прибавляйте к замеру внутреннего шва 2-3см.</p>
					<table class="pc">
						<tr class="one">
							<td>Охват талии<br>или бедер, см</td>
							<td>79-86</td>
							<td>85-92</td>
							<td>91-98</td>
							<td>97-104</td>
							<td>97-104</td>
							<td>109-117</td>
							<td>103-113</td>
							<td>103-113</td>
							<td>116-124</td>
							<td>112-120</td>
							<td>124-132</td>
							<td>119-127</td>
						</tr>
						<tr>
							<td>Внутренний<br>шов, см</td>
							<td>59-65</td>
							<td>64-71</td>
							<td>68-79</td>
							<td>72-79</td>
							<td>79-84</td>
							<td>72-79</td>
							<td>76-85</td>
							<td>82-88</td>
							<td>76-83</td>
							<td>78-85</td>
							<td>78-85</td>
							<td>8287</td>
						</tr>
						<tr>
							<td>Российский размер</td>
							<td>42</td>
							<td>44</td>
							<td>46</td>
							<td>48-50</td>
							<td>48-50</td>
							<td>52-54</td>
							<td>50-52</td>
							<td>50-52</td>
							<td>56-58</td>
							<td>54-56</td>
							<td>60-62</td>
							<td>58-60</td>
						</tr>
						<tr>
							<td>Международный размер</td>
							<td>XXS</td>
							<td>XS</td>
							<td>S</td>
							<td>M</td>
							<td>ML</td>
							<td>MK</td>
							<td>L</td>
							<td>LL</td>
							<td>LK</td>
							<td>XL</td>
							<td>XLK</td>
							<td>XXL</td>
						</tr>
						<tr>
							<td>Размер ноги</td>
							<td>36-39</td>
							<td>37-40</td>
							<td>39-42</td>
							<td>40-43</td>
							<td>40-43</td>
							<td>40-43</td>
							<td>42-45</td>
							<td>42-45</td>
							<td>42-45</td>
							<td>43-46</td>
							<td>43-46</td>
							<td>43-46</td>
						</tr>
					</table>


					<table class="mob">
						<tr class="top">
							<td>Охват талии<br>или бедер, см</td>
							<td>Внут-<br>ренний<br>шов, см</td>
							<td>Рос-<br>сийский размер</td>
							<td>Между-<br>народный размер</td>
							<td>Размер ноги</td>
						</tr>
						<tr>
							<td>79-86</td>
							<td>59-65</td>
							<td>42</td>
							<td>XXS</td>
							<td>36-39</td>
						</tr>
						<tr>
							<td>85-92</td>
							<td>64-71</td>
							<td>44</td>
							<td>XS</td>
							<td>37-40</td>
						</tr>
						<tr>
							<td>91-98</td>
							<td>68-79</td>
							<td>46</td>
							<td>S</td>
							<td>39-42</td>
						</tr>
						<tr>
							<td>97-104</td>
							<td>72-79</td>
							<td>48-50</td>
							<td>M</td>
							<td>40-43</td>
						</tr>
						<tr>
							<td>97-104</td>
							<td>79-84</td>
							<td>48-50</td>
							<td>ML</td>
							<td>40-43</td>
						</tr>
						<tr>
							<td>109-117</td>
							<td>72-79</td>
							<td>52-54</td>
							<td>MK</td>
							<td>40-43</td>
						</tr>
						<tr>
							<td>103-113</td>
							<td>76-85</td>
							<td>50-52</td>
							<td>L</td>
							<td>42-45</td>
						</tr>
						<tr>
							<td>103-113</td>
							<td>82-88</td>
							<td>50-52</td>
							<td>LL</td>
							<td>42-45</td>
						</tr>
						<tr>
							<td>116-124</td>
							<td>76-83</td>
							<td>56-58</td>
							<td>LK</td>
							<td>42-45</td>
						</tr>
						<tr>
							<td>112-120</td>
							<td>78-85</td>
							<td>54-56</td>
							<td>XL</td>
							<td>43-46</td>
						</tr>
						<tr>
							<td>124-132</td>
							<td>78-85</td>
							<td>60-62</td>
							<td>XLK</td>
							<td>43-46</td>
						</tr>
						<tr>
							<td>119-127</td>
							<td>8287</td>
							<td>58-60</td>
							<td>XXL</td>
							<td>43-46</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="border mt5">
				<div class="fw">
					<div class="cc25 img mt2">
						<img src="assets/img/round.png" alt="">
					</div>
					<div class="cc60 text mt5 pc5">
						<p><strong><span>не уверены с размером?</span></strong></p>
						<p class="mt1">Мы пришлём Вам<strong> несколько вариантов</strong><br>и Вы сможете <strong>примерить Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong> их до покупки<strong> 275 городах РФ!</strong></p>	
						<p class="size"><strong><span>(если вейдерсы не подойдут - Вы ничего не оплачиваете!!!)</span></strong></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="s06">
		<div class="perehod">
			<img src="assets/img/perehod5.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>мнение эксперта</h1>
			</div>
				<div class="slider">
				  <div class="slide_viewer">
				    <div class="slide_group">
				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review1.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">АЛЕКСЕЙ ТУЗОВ</p>
					      		<p class="mt2 status"><span>Многократный победитель крупнейших<br> соревнований на ATV, чемпион России 2016</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=qjDK1Sg2Uno" title="">
					      					<img src="assets/img/smallvideo.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=qjDK1Sg2Uno">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review2.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Сергей Карякин</p>
					      		<p class="mt2 status"><span>Многократный победитель крупнейших<br> соревнований на ATV, победитель на ралли Дакар 2017</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=1_IgmLhnO8c" title="">
					      					<img src="assets/img/smallvideo2.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=1_IgmLhnO8c">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review3.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Профессор Преображенский</p>
					      		<p class="mt2 status"><span>Эксперт, видеоблогер.</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=srCvD4v5JvA" title="">
					      					<img src="assets/img/smallvideo3.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=srCvD4v5JvA">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review4.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Алексей Филипов</p>
					      		<p class="mt2 status"><span>Президент клуба Самарские Квадроциклисты</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=d9ZyLUQoqKU" title="">
					      					<img src="assets/img/smallvideo4.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=d9ZyLUQoqKU">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review5.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Владислав Маликов</p>
					      		<p class="mt2 status"><span>Многократный призёр крупнейших соревнований на ATV, победитель RZR CAMP 2016</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=7BYfCvloq9s" title="">
					      					<img src="assets/img/smallvideo5.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=7BYfCvloq9s">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review6.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Александр Кашицын</p>
					      		<p class="mt2 status"><span>Команда Русрайдерс</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=vlgGYLSpi7w" title="">
					      					<img src="assets/img/smallvideo6.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=vlgGYLSpi7w">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>

				      <div class="slide">
					      <div class="box">
					      	<div class="img dib">
					      		<img src="assets/img/review7.png" alt="">
					      	</div>
					      	<div class="info dib">
					      		<p class="name mt2">Таскынбаев Аскар</p>
					      		<p class="mt2 status"><span>Многократный победитель крупнейших соревнований на ATV/UTV, президент крупнейшего в Казахстане клуба квадроциклистов</span></p>
					      		<p class="comment mt2">«Только экипировка Finntrail пережила «Ладогу»!<br> Вейдерсы других производителей протирались<br> или расходились по швам...»</p>
					      		<div class="video mt4">
					      			<div class="dib">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=twCaLGpkaxM" title="">
					      					<img src="assets/img/smallvideo7.jpg" alt="">
					      				</a>
					      			</div>
					      			<div class="dib pc5">
					      				<a class="ytbtn dib" href="https://www.youtube.com/watch?v=twCaLGpkaxM">Смотреть видео с Алексеем</a>
					      			</div>
					      		</div>
					      	</div>
					      </div>
				      </div>
				    </div>
				  </div>
				</div><!-- End // .slider -->

				<div class="directional_nav">
				    <div class="previous_btn" title="Previous">
			   		 	<img src="assets/img/left.png" alt="" class="pc">
			   		 	<img src="assets/img/mobleft.png" alt="" class="mob">
				    </div>
				    <div class="next_btn" title="Next">
			   		 	<img src="assets/img/right.png" alt="" class="pc">
			   		 	<img src="assets/img/mobright.png" alt="" class="mob">
				    </div>
				</div><!-- End // .directional_nav -->
				
			</div>
	</section>


	<section id="s07">
		<div class="wrap">
			<div class="title">
				<h1>наша команда</h1>
			</div>
			<div class="fw mt4">
				<div class="cc35 sotrudniki">
					<div class="block sotr1">
						<img src="assets/img/sotr1.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
					<div class="block sotr2">
						<img src="assets/img/sotr2.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
					<div class="block sotr3">
						<img src="assets/img/sotr3.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
					<div class="block sotr4">
						<img src="assets/img/sotr4.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
					<div class="block sotr5">
						<img src="assets/img/sotr5.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
					<div class="block sotr6">
						<img src="assets/img/sotr6.png" alt="">
						<div class="show">
							<p class="name">Александр петров</p>
							<p class="proffesion">менеджер по продажам</p>
						</div>
					</div>
				</div>
				<div class="cc65 mt2 pc35">
					<p><strong><span>15 лет</span> работаем с вейдерсами</strong></p>
					<p class="mt1"><strong><span>3 175</span> вейдерсов мы отправили в 2016 г.</strong></p>
					<p class="mt4 text1 text">Мы постарались сделать покупку в нашем магазине максимально удобной!<br>Мы собрали двух лучших производителей, сделали гарантию 1 год, примерку до покупки и даже возврат денег в течение 20 дней!<br>При этом, заказ мы отправляем без предоплаты!</p>  
					<p class="mt1 text">Мы отвечаем за качество нашей продукции и сами активно её используем!</p>
					<p class="text mt1"><span>Константин Лобанов, <strong>Генеральный директор</strong></span></p>
					<div class="dib mt6">
						<a href="assets/img/sert1.png" class="fancybox" title="">
							<img src="assets/img/sert.png" alt="">
						</a>
					</div>
					<div class="dib mt6">
						<p>Наша компания является эксклюзивным<br> дистрибьютором продукции Finntrail!</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="s08">
		<div class="perehod">
			<img src="assets/img/perehod6.png" alt="">
		</div>
		<div class="wrap">
			<div class="title">
				<h1>отзывы покупателей</h1>
			</div>
			<div class="slider">
			  <div class="slide_viewer">
			    <div class="slide_group">

			      <div class="slide">
				      <div class="box">
				      	<div class="img dib">
				      		<img src="assets/img/bottomreview1.png" alt="">
				      	</div>
				      	<div class="info dib">
				      		<p class="up"><strong>ЛЕОНИД</strong>, Г. ЕКАТЕРИНБУРГ</p>
				      		<p class="mt4 text">
				      			«Никогда не покупал экипировку в интернете, по двум причинам, не возможно примерить и оплата вперёд. Этот сайт оказался единственным где присылают на пункт выдачи, где я всё проверил, примерил и только потом оплатил. Да, ещё доставка суперэкспресс, через три дня после заказа я уже красовался в новых вейдерсах. Отдельное спасибо менеджеру Максиму, за профессиональную консультацию.»
				      		</p>
				      	</div>
				      </div>
			      </div>

			      <div class="slide">
				      <div class="box">
				      	<div class="img dib">
				      		<img src="assets/img/bottomreview2.png" alt="">
				      	</div>
				      	<div class="info dib">
				      		<p class="up"><strong>Александр</strong>, г. Москва</p>
				      		<p class="mt4 text">
				      			«Искал брюки с курткой, чтобы не промокали, чтоб дышали и ткань была прочная. Первый опыт покупки был грустный, заказывал в другом магазине костюм, с виду красивый, из мембранной ткани, на сайте написано для квадроцикла, не промокаемый. Прислали, всё красиво, комфортно, удобно, обрадовался.... Через две недели попал в лёгкий дождик, промок до трусов. Оказалось швы у костюма не проклеены. Тогда какой смысл в непромокаемой ткани, если по швам протекает??? В итоге купил костюм Finntrail, швы проклеены, держит любой дождь, единственный минус ткань грубовата, за то хрен порвёшь. Костюмом доволен, спасибо.»
				      		</p>
				      	</div>
				      </div>
			      </div>

			      <div class="slide">
				      <div class="box">
				      	<div class="img dib">
				      		<img src="assets/img/bottomreview3.png" alt="">
				      	</div>
				      	<div class="info dib">
				      		<p class="up"><strong>Сергей</strong>, г. Москва</p>
				      		<p class="mt4 text">
				      			«В обычных магазинах вейдерсов моего размера не найти. С удивлением обнаружил, что в этом интернет-магазине есть все размеры, да ещё и нестандартные. Заказал и в первый раз промахнулся с размером, пришлось перезаказывать, оба раза присылали быстро, с бесплатной доставкой! Спасибо! Всем советую! Чтобы не промахнуться с размером, лучше не гадать, а проконсультироваться, подбирают идеально, проверено!»
				      		</p>
				      	</div>
				      </div>
			      </div>

			      <div class="slide">
				      <div class="box">
				      	<div class="img dib">
				      		<img src="assets/img/bottomreview4.png" alt="">
				      	</div>
				      	<div class="info dib">
				      		<p class="up"><strong>Андрей</strong>, г. Кострома</p>
				      		<p class="mt4 text">
				      			«У меня уже были вейдерсы и куртка для них, недорогие (фирму называть не стану), первое время было всё ОК, кататься на квадрике одно удовольствие, но быстро ушатал, особенно куртку, видимо ткань была слабовата. Заказал комплект Финтреил. Получил, опробовал, вроде всё надёжно, куртку с прошлой не сравнить, посмотрим сколько прослужит.»
				      		</p>
				      	</div>
				      </div>
			      </div>

			      <div class="slide">
				      <div class="box">
				      	<div class="img dib">
				      		<img src="assets/img/bottomreview5.png" alt="">
				      	</div>
				      	<div class="info dib">
				      		<p class="up"><strong>Владимир</strong>, г. Казань</p>
				      		<p class="mt4 text">
				      			«Нужны были недорогие и надёжные вейдерсы для квадрика. Катаюсь экстремально, в основном в лесу. Хотел вейдерсы с усилением на сидалище, прошлые у меня там и протёрлись. Выбрал Финтреил, так как куртка и вейдерсы полностью из усиленной ткани.<br/> Гарантия год, есть время проверить.»
				      		</p>
				      	</div>
				      </div>
			      </div>
			    </div>
			  </div>
			</div><!-- End // .slider -->

			<div class="directional_nav">
			    <div class="previous_btn" title="Previous">
		   		 	<img src="assets/img/left.png" alt="" class="pc">
		   		 	<img src="assets/img/mobleft.png" alt="" class="mob">
			    </div>
			    <div class="next_btn" title="Next">
		   		 	<img src="assets/img/right.png" alt="" class="pc">
		   		 	<img src="assets/img/mobright.png" alt="" class="mob">
			    </div>
			</div><!-- End // .directional_nav -->
		</div>
	</section>


	<section id="s09">
		<div class="wrap">
			<div class="fw">
				<div class="cc45 pc50 mt3">
					<form action="#x" method="post">
						<p class="head">Пока не готовы заказать?</p>
						<p class="content">получите купон на <span>скидку 1000 руб.</span><br> и воспользуйтесь им в течение 3 мес.</p>
						<div class="input mt2">
							<input type="email" name="email" required="" placeholder="Ваш e-mail">
							<input type="tel" name="tel" required="" placeholder="Ваш телефон">
							<input type="submit" value="ПОЛУЧИТЬ КУПОН"><!-- <img class="dib" src="assets/img/kupon.jpg" alt=""> -->
							<input type="hidden" name="type" value="kupon">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="s010">
		<div class="wrap">
			<p>Примерьте свой заказ перед покупкой в <span>279 городах РФ</span></p>
		</div>
	</section>

	<section id="s011">
		<div class="overlay"></div>
		<div class="wrap">
			<div class="img">
				<img src="assets/img/map.png" alt="">

				<div class="border cc50 pc25">
					<a href="#x" onclick="popup(3)">узнайте адрес в вашем городе</a>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="wrap">
			<div class="fw tac">
				<div class="cc33">
					<img src="assets/img/footerlogo.png" alt="">
				</div>
				<div class="cc33 mt1">
					<p>© 2017 Veiders </p>
				</div>
				<div class="cc33 mt1">
					<a class="scrollto" data-speed="500" href="#s04" title="">Вернуться к каталогу</a>
				</div>
			</div>
		</div>
	</footer>


<div class='popupTube'></div>

	<!-- fancybox -->
		<!-- jQuery плагин для работы fancybox -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
		<link rel="stylesheet" href="assets/css/fancy/jquery.fancybox.css"> <!-- Стили для fancybox попапа -->
		<script type="text/javascript" src="assets/js/fancy/jquery.fancybox.pack.js"></script> <!-- fancybox плагин для попапов ссылок -->

		<!-- натравливаем fancybox на обьекты с классом fancybox -->
		<script type="text/javascript">
			$('.fancybox').fancybox();
			var vis = "<?= $vis ?>";
		</script>
	<!-- /fancybox -->

		
		<script type="text/javascript" src="assets/js/script.js"></script>



<div class="popup-bg" id="popup-bg">


  <div class="popup" id="popup1">
    <div class="head">
    	<div class="dib">
    		<img src="assets/img/finland.png" alt="">
    	</div>
    	<div class="dib">
    		<img src="assets/img/popuplogo.png" alt="">
    	</div>
      <div class="close" onclick="popup(-1)"><img src="assets/img/close.jpg" alt=""></div>
    </div>
    <div class="content big">
    	<div class="verh">
    		<div class="top">
		      	<div class="block trigger">
			      	<div class="mt4"> {{kartinki}} </div>
			      	{{foto}}
		      	</div>
			  	<div class="block">
				  	 <p>{{name}}</p>
				  	 <p class="mt1"><span>{{about}}</span></p>
				  	 <div class="block first"> {{li}} </div>
				  	 <div class="block second"> {{sprava}} </div>

				  	 <div class="clearfix"></div>
				  	 <div class="mt2">
				  	 	<div class="block box"> {{ostalos}} </div>
				  	    <div class="block box pc25">
				  	    	<p>Доставка <span class="green ddate">Завтра <?= date('d.m.Y', strtotime("+1 day")); ?></span></p>
				  	    </div>
				  	 </div>

				  	 <div class="clearfix"></div>
				  	 <div class="price mt2">
				  	 	<div class="block discount">
			  	 			<div class="podskazka dib">
			  	 				<img src="assets/img/discount.png" alt="" class="dib" title="">
				  	 			<div class="otvet">
				  	 				<p>Мы видим, что Вы у нас впервые!<br>По этому, мы предоставляем Вам<br><strong>максимально возможную скидку</strong>.<br>При последующих посещениях нашего<br>сайты, Вы не сможете приобрести товар<br>по таким «горячим» ценам!</p>
				  	 			</div>
			  	 			</div>
				  	 		<p class="dib">Максимальная скидка<br> при первом посещении сайта</p>
				  	 	</div>
				  	 	<div class="block oldprice"> {{cena_old}} </div>
				  	 	<div class="block newprice"> {{cena}} </div>
				  	 </div>

				  	 <div class="clearfix"></div>
				  	 <div class="buttons mt2">
				  	 	<div class="block one">
				  	 		<a href="#x" class="btn" onclick="showForm('01', this)">ЗАКАЗАТЬ</a>
				  	 	</div>
				  	 	<div class="block two right">
				  	 		<a href="#x" class="btn" onclick="showForm('02', this)">ПРИМЕРИТЬ БЕСПЛАТНО</a>
				  	 	</div>
				  	 </div>
			  	</div>
		    </div>
    	</div>
		
		<!-- <div class="perehod">
			<img src="assets/img/popupperehod.png" alt="">
		</div> -->
	  	<div class="niz">
	  		<div class="fw mt8">
		  		<div class="cc80 pc10">
		  			<div class="text">
				  		{{opisanie}}
				  	</div>
				  	<div class="cc90 pc5">
				  		{{opisanie_li}}
				  	</div>
		  		</div>
		  	</div>
	  	</div>
    </div>  
  </div>


   <div class="orderpopup popup" id="popup2">
     <div class="head">
     <div class="close" onclick="popup(-1)">&times;</div>
   </div> 
    <div class="content">
      <p class="mt2 top">Отправьте заказ на склад</p>
      <p class="mt3">Наш менеджер проверит наличие<br>и перезвонит, чтобы подтвердить<br>заказ и помочь с выбором размера</p>
      <form action="#x" method="post">
       <div class="fw">
       	<div class="cc80 pc10">
   		 	<input type="email" name="email" required="" placeholder="Ваш Email">
    		<input type="tel" name="tel" required="" placeholder="Ваш телефон">
    		<input type="hidden" name="tovar">
       	</div>
       </div>
        <input type="submit" value="Отправить">
      </form>
    </div>  
  </div>


   <div class="orderpopup popup" id="popup3">
     <div class="head">
     <div class="close" onclick="popup(-1)">&times;</div>
   </div> 
    <div class="content">
      <p class="mt2 top">Отправьте заявку</p>
      <p class="mt3">И наш менеджер отправит Вам<br>список городов, что-бы смогли<br>найти адрес где сможете померить вейдерсы</p>
      <form action="#x" method="post">
       <div class="fw">
       	<div class="cc80 pc10">
   		 	<input type="email" name="email" required="" placeholder="Ваш Email">
    		<input type="tel" name="tel" required="" placeholder="Ваш телефон">
    		<input type="hidden" name="type" value="adresa">
       	</div>
       </div>
        <input type="submit" value="Отправить">
      </form>
    </div>  
  </div>

   <div class="orderpopup popup" id="popup4">
     <div class="head">
     <div class="close" onclick="popup(-1)">&times;</div>
   </div> 
    <div class="content">
      <p class="mt2 top">Заполните форму</p>
      <p class="mt3">И наш менеджер свяжется с Вами<br>в ближайшее время</p>
      <form action="#x" method="post">
       <div class="fw">
       	<div class="cc80 pc10">
   		 	<input type="text" name="name" required="" placeholder="Вашe имя">
    		<input type="tel" name="tel" required="" placeholder="Ваш телефон">
       	</div>
       </div>
        <input type="submit" value="Перезвоните мне">
      </form>
    </div>  
  </div>



   <div class="orderpopup popup" id="popup01">
     <div class="head">
     <div class="close" onclick="popup(-1)">&times;</div>
   </div> 
    <div class="content">
      <p class="mt2 top">ОТПРАВИТЬ ЗАКАЗ НА СКЛАД</p>
      <p class="mt3">НАШ МЕНЕДЖЕР ПРОВЕРИТ НАЛИЧИЕ<br/> И ПЕРЕЗВОНИТ, ЧТОБЫ ПОДТВЕРДИТЬ<br/> ЗАКАЗ И ПОМОЧЬ С ВЫБОРОМ РАЗМЕРА</p>
      <form action="#x" method="post">
       <div class="fw">
       	<div class="cc80 pc10">
   		 	<input type="text" name="name" required="" placeholder="Вашe имя">
    		<input type="tel" name="tel" required="" placeholder="Ваш телефон">
    		<input type="hidden" name="tovar">
       	</div>
       </div>
        <input type="submit" value="Отправить">
      </form>
    </div>  
  </div>


   <div class="orderpopup popup" id="popup02">
     <div class="head">
     <div class="close" onclick="popup(-1)">&times;</div>
   </div> 
    <div class="content">
      <p class="mt2 top">БЕСПЛАТНО ОТПРАВИТЬ ДВА РАЗМЕРА</p>
      <p class="mt3">ЧТОБЫ ТОЧНО НЕ ОШИБИТЬСЯ С РАЗМЕРОМ,<br/> МЫ ОТПРАВИМ ВАМ 2 ВАРИАНТА БЕЗ ПРЕДОПЛАТ.<br/> ЕСЛИ НЕ ПОДОЙДУТ - ВЫ НИЧЕГО НЕ ПЛАТИТЕ!</p>
      <form action="#x" method="post">
       <div class="fw">
       	<div class="cc80 pc10">
   		 	<input type="text" name="name" required="" placeholder="Вашe имя">
    		<input type="tel" name="tel" required="" placeholder="Ваш телефон">
    		<input type="hidden" name="tovar">
       	</div>
       </div>
        <input type="submit" value="Отправить">
      </form>
    </div>  
  </div>







</div>


<script>
	tovar_akcii = [
	{
		  kartinka: 'assets/img/sale/finntrail WADEMAN 1524 sale.jpg'
		, name: '<strong>FINNTRAIL</strong> WADEMAN 1524'
		, about: 'Вейдерсы для квадроцикла'
		, li: [
			  '<li>Износостойкая мембранная<br> ткань HARD-TEX</li>'
			+ '<li>Четыре слоя мембраны</li>'
			+ '<li>БЕЗ швов на внутренней части</li>'
			+ '<li>Усиленная ткань на нижней<br>части вейдерсов</li>'
			+ '<li>Водонепроницаемые носки<br>слитные со штанами</li>'
		]
		, sprava: [
			  '<p class="mt2"><span>1 год</span> гарантии</p>'
	  	 	+ '<p class="mt6"><span>20 дней</span> moneyback</p>'
	  	 	+ '<p class="mt6">примерка перед<br> покупкой в<span> 279 городах</span></p>'
		]
		, ostalos: 7
		, cena_old: '13 220'
		, cena: '7 990.-'
		, cena_visit2: '7 990.-'
		, opisanie: 'Вейдерсы для тех, кто ценит <strong>комфорт</strong> и надёжное сцепление на пересечённой местности. Классическая модель слитная с <strong>неопреновыми носками</strong> и <strong>усиленной тканью</strong> на нижней части вейдерсов и облегченным верхом. В этой модели используется специальная износостойкая четырёхслойная ткань с мембраной <strong>«HARD-TEX»</strong>.<br>Вейдерсы <strong>не имеют швов</strong> во внутренней части, таким образом, увеличена долговечность и износостойкость. В этой модели использованы все технологии, обеспечивающие <strong>долгий срок службы и комфорт</strong>.'
		, opisanie_li: [
			  '<li>Износостойкая 4-х слойная ткань с мембраной «HARD-TEX»</li>'
			+ '<li>Высокая водонепроницаемость 20 000 мм</li>'
			+ '<li>Дышащая способность 7000г./м2/24ч</li>'
			+ '<li>Водонепроницаемые неопреновые носки толщиной 4мм для амортизации и комфорта</li>'
			+ '<li>Грязеотталкивающие покрытие «TEFLON»</li>'
			+ '<li>Петли для просушки</li>'
			+ '<li>Эластичные подтяжки и ремень с логотипами Finntrail</li>'
			+ '<li>Универсальные расцветки серый / камуфляж Bear</li>'
		]
		,  kartinki:
			'<img src="assets/img/popuptrigger1.png" alt="" align="bottom">'
	      	+ '<img src="assets/img/popuptrigger2.png" alt="" align="bottom">'
	    , foto: '<img src="assets/img/sale/finntrail WADEMAN 1524 sale.jpg" alt="" align="bottom">'
	},
	/* следующий товар */
	{
		  kartinka: 'assets/img/sale/FINNTRAIL AQUABAG 9990 SALE.jpg'
		, name: '<strong>FINNTRAIL</strong> FINNTRAIL AQUABAG 9990'
		, about: 'Гермосумка'
		, ostalos: 34
		, cena_old: '2 000'
		, cena: '0.-'
		, cena_visit2: '0.-'
		, opisanie: '<strong>Сумка в подарок к покупке любых вейдерсов!</strong><br>Лёгкая и компактная герметичная сумка для защиты одежды и ценных вещей от воды. Четырёхслойная ткань с мембраной «HARD-TEX», все швы проклеены. Ремень для переноски в комплекте.'
		, opisanie_li: [
			  '<li>Объем 40 литров</li>'
			+ '<li>Универсальные расцветки серый / камуфляж Bear</li>'
		]
		,  kartinki:
			'<img src="assets/img/popuptrigger1.png" alt="" align="bottom">'
	      	+ '<img src="assets/img/popuptrigger2.png" alt="" align="bottom">'
	    , foto: '<img src="assets/img/sale/FINNTRAIL AQUABAG 9990 SALE.jpg" alt="" align="bottom">'
	},
	/* следующий товар */
	{
		  kartinka: 'assets/img/sale/Finntrail Mud Rider SALE.jpg'
		, name: '<strong>FINNTRAIL</strong> Mud Rider'
		, about: 'Комплект'
		, li: [
					  '<li>Износостойкая мембранная<br> ткань HARD-TEX</li>'
					+ '<li>Четыре слоя мембраны</li>'
					+ '<li>БЕЗ швов на внутренней части</li>'
					+ '<li>Усиленная ткань на коленях<br> и седалище</li>'
					+ '<li>Водонепроницаемые<br> карманы</li>'
			]
		, sprava: [
			  '<p class="mt2"><span>1 год</span> гарантии</p>'
	  	 	+ '<p class="mt6"><span>20 дней</span> moneyback</p>'
	  	 	+ '<p class="mt6">примерка перед<br> покупкой в<span> 279 городах</span></p>'
		]
		, ostalos: 2
		, cena_old: '19 480'
		, cena: '11 688.-'
		, cena_visit2: '11 688.-'
		, opisanie: 'Комплект, состоящий из вейдерсов совмещённых с сапогами и куртки с водонепроницаемыми манжетами. В подарок к комплекту Вы получаете сумку Finntrail для ношения на плече! Вейдерсы в комплекте оснащены двумя удобными карманами на молниях с защитой от воды и грязи. Вейдерсы удобны тем, что их легко одевать и Вашаспина в этой модели останется сухой, даже в жаркую погоду. Сапоги из резины Goodyear смягчены неопреоновой подкладкой, для Вашего комфорта. Специальная куртка имеет 2 страховочных кольца для крепления чеки, при езде на квадроцикле. Капюшон при желании, можно свернуть и убрать в воротник. Куртка не имеет подкладки, потому не промокает и быстро высыхает даже при полном погружении в воду.'
		, opisanie_li: [
			  '<li>Износостойкая 4-х слойная ткань с мембраной «HARD-TEX»</li>'
			+ '<li>Высокая водонепроницаемость 20 000 мм</li>'
			+ '<li>Дышащая способность 7000г./м2/24ч</li>'
			+ '<li>Слитные сапоги из резины Goodyear</li>'
			+ '<li>Грязеотталкивающие покрытие «TEFLON»</li>'
			+ '<li>Внутренний карман куртки для документов и телефона</li>'
			+ '<li>Манжеты куртки с защитой от затекания воды в рукава</li>'
			+ '<li>Страховочные кольца для крепления чеки на куртке</li>'
			+ '<li>Петли для просушки</li>'
			+ '<li>Эластичные подтяжки и ремень с логотипами Finntrail</li>'
			+ '<li>Универсальные расцветки красный / камуфляж Bear</li>'
		]
		,  kartinki:
			'<img src="assets/img/popuptrigger1.png" alt="" align="bottom">'
	      	+ '<img src="assets/img/popuptrigger2.png" alt="" align="bottom">'
			+ '<img src="assets/img/popuptrigger3.png" alt="" align="bottom">'
	    , foto: '<img src="assets/img/sale/Finntrail Mud Rider SALE.jpg" alt="" align="bottom">'
	}];

</script>



<style type="text/css" media="screen">
	<?php if ($vars['head_image']) { ?> }
		#s01{
			background: url("<?= $vars['head_image'] ?>") no-repeat 50% 50%/cover;
		}
	<?php } ?>
</style>

</body>
</html>
