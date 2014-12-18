<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/abonements.css" type="text/css" rel="stylesheet">
	<link href="css/coachs.css" type="text/css" rel="stylesheet">
	<link href="css/dos.css" type="text/css" rel="stylesheet">
	<link href="css/emTgimn.css" type="text/css" rel="stylesheet">
	<link href="css/grav.css" type="text/css" rel="stylesheet">
	<link href="css/history.css" type="text/css" rel="stylesheet">
	<link href="css/matchsE.css" type="text/css" rel="stylesheet">
	<link href="css/matchsK.css" type="text/css" rel="stylesheet">
	<link href="css/matchsSK.css" type="text/css" rel="stylesheet">
	<link href="css/matchsUA.css" type="text/css" rel="stylesheet">
	<link href="css/meneg.css" type="text/css" rel="stylesheet">
	<link href="css/new1.css" type="text/css" rel="stylesheet">
	<link href="css/new2.css" type="text/css" rel="stylesheet">
	<link href="css/new5.css" type="text/css" rel="stylesheet">
	<link href="css/news.css" type="text/css" rel="stylesheet">
	<link href="css/newsUA.css" type="text/css" rel="stylesheet">
	<link href="css/next_match.css" type="text/css" rel="stylesheet">
	<link href="css/tickets_at_office.css" type="text/css" rel="stylesheet">
	<title> Футбольний клуб "Динамо" Київ </title>
	<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("h1").mouseover(function(){
				$("h1").animate({fontSize: "50px", opacity: "0.1"},1000);
				});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("h1").mouseout(function(){
				$("h1").animate({fontSize: "25px", opacity: "0.5"},800);
				$("h1").animate({color: "#004497"},800);
				});
		});
	</script>
	
</head>
<body>
	<div id="wrapper">
		<header>	
			<p>
				<a href="index.php"><img src="images/43f03fa67d5fd3060905c85358497f8e.gif"  width="110" height="160" alt="Анімація"></a> 
			</p>
			
			<hgroup id="dk">
				<h1>  ФК ДИНАМО КИЇВ </h1>
				<h3> Офіційний сайт </h3>
			</hgroup>
			
			<!-- Menu of page -->
				<ul class="menu">
					<li class="bold_menu"><a href=#>Новини</a>
						<ul class="submenu">
							<li><a href="index.php?page=newsUA">Україна</a></li>
							<li><a href="index.php?page=newsE">Європа</a></li>
						</ul>
					</li>
					<li class="bold_menu"><a href=#>Клуб</a>
						<ul class="submenu">
							<li><a href="index.php?page=meneg">Менеджмент</a></li>
							<li><a href="index.php?page=dos">Досягнення</a></li>
							<li><a href="index.php?page=history">Історія</a></li>
							<li><a href="index.php?page=emTgimn">Емблема та гімн</a></li>
						</ul>
					</li>
					<li class="bold_menu"><a href=#>Команда</a>
						<ul class="submenu">
							<li><a href="index.php?page=grav">Гравці</a></li>
							<li><a href="index.php?page=coachs">Тренери</a></li>
						</ul>
					</li>
					<li class="bold_menu"><a href=#>Матчі</a>
						<ul class="submenu">
							<li><a href="index.php?page=matchsE">Ліга Європи Уєфа</a></li>
							<li><a href="index.php?page=matchsUA">Чемпіонат Прем'єр-Ліги</a></li>
							<li><a href="index.php?page=matchsK">Кубок України</a></li>
							<li><a href="index.php?page=matchsSK">Суперкубок України</a></li>
						</ul>
					</li >
					<li class="bold_menu"><a href=#>Квитки</a>
						<ul class="submenu">
							<li><a href="index.php?page=next_match">Наступний матч</a></li>
							<li><a href="index.php?page=tickets_at_office">Квитки у касах</a></li>
							<li><a href="index.php?page=abonements">Абонементи</a></li>
						</ul>
					</li>
				</ul>
 
			<div class="font_1">
        <a href="index.php?page=say" class="abs">Додати коментар&emsp;&emsp;&emsp;</a>
		</div>
		<div class="font_2">
        <a href="index.php?page=login" class="abs"><?php echo isset($_COOKIE['username']) ? "Вихід" : "Реєстрація/Увійти"?></a>
	</div>
		</header>		
	<?php
		
		if((isset($_GET['page'])) && (!isset($page)))
			$page = strip_tags(trim($_GET['page']));
		else 
			$page = 'main';
			
		
		$s = "themes/".$page.".html";
			
		if(!file_exists($s))
			include("themes/main.html");
		else
			include($s);
	?> 					
	
		<footer class="clear">
			<p> 
				<h2> ГЕНЕРАЛЬНІ СПОНСОРИ ТА ПАРТНЕРИ </h2>  
				
					<nav>
						<a href="http://www.nadrabank.ua/site/page.php" target="_blank" title="Офіційний сайт"> <img src="images/nadra_gen.png" width="123" height="83" class="img" alt="Надра банк"></a>
						<a href="http://groupdf.com/ru/" target="_blank" title="Офіційний сайт" ><img src="images/ost_gen.png" width="76" height="85" class="img" alt="groupgf"></a>
					</nav>
			</p>
		
			<p>
				<h2> СПОНСОРИ ТА ПАРТНЕРИ </h2>
				
					<nav>
						<a href="http://www.global.adidas.com/" target="_blank" title="Офіційний сайт" ><img src="images/adidas.png" width="49" height="32" class="img" alt="adidas"></a>
						<a href="http://www.marathonbet.com/su/home.htm" target="_blank" title="Офіційний сайт" ><img src="images/marafon.png" width="85" height="28" class="img" alt="maraphonbet"></a>
						<a href="http://www.amacoint.com/" target="_blank" title="Офіційний сайт" ><img src="images/amacoint2.png" width="76" height="28" class="img" alt="amacoint"></a>
						<a href="http://www.boris.kiev.ua/" target="_blank" title="Офіційний сайт" ><img src="images/boris.png" width="107" height="22" class="img" alt="boris.kiev"></a>
						<a href="http://arma.ua/" target="_blank" title="Офіційний сайт" ><img src="images/arma.png" width="81" height="22" class="img" alt="arma"></a>
						<a href="http://arber.ua/" target="_blank" title="Офіційний сайт" ><img src="images/arber.png" width="70" height="24" class="img" alt="a"> </a>
					</nav>
			</p>
		</footer>
	</div>
</body>
</html>
<?php ob_end_flush(); ?>
