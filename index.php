<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php-template </title>
	<link rel="stylesheet" href="/root/css/main.css">
	<script defer src="/root/js/main.js"></script>
</head>
<body>

    <div class="wrapper-puppop">
    	<div class="clsd"><p>закрыть</p></div>
    	<div class="container-pop">
	    	<div class="pop-post xpost-c">
	    		<p>метод POST - для отправки в базу данных</p><br>
	    		<b class="smooth">
	    			<i>HTML: форма отправки данных методом post</i>
	    			<hr class="line">
	    			<br>
	    			<pre><code>&lt;form action=&quot;myform5.php&quot; method=&quot;post&quot;&gt;
   &lt;p&gt;First name: &lt;input type=&quot;text&quot; name=&quot;firstname&quot; /&gt;&lt;/p&gt;
   &lt;p&gt;Last name: &lt;input type=&quot;text&quot; name=&quot;firstname&quot; /&gt;&lt;/p&gt;
   &lt;input type=&quot;submit&quot; <span style="color: orangered";>name=&quot;submit&quot;</span> value=&quot;Submit&quot; /&gt;
&lt;/form&gt;</code></pre>
					<br> 
					<i>PHP: проверка на существование значений и отправка <span style="color: orangered;">*</span></i>
					<hr class="line"><br>
					<pre><code>if(isset($_POST['<span style="color: orangered;">submit</span>']) 
   {
      echo(&quot;First name: &quot; . $_POST['firstname'] . &quot;&lt;br /&gt;\\n&quot;);
      echo(&quot;Last name: &quot; . $_POST['lastname'] . &quot;&lt;br /&gt;\\n&quot;);
   }</code></pre>
   <br><hr class="line"><br>
					<i style="color: #A4907C;">это очень примитивный пример, еще нужно учесть и безопасность отправки и корректность данных (что бы не было повторяющихся данных либо что бы данные не утекли - не были подделаны или похищены)</i>
					
				</b>
	    	</div>

	    	<div class="pop-get xget-c">
    			<p>Метод GET - используется для получения данных</p>
    			<i>Как мы помним - у http есть методы - POST - GET - PUT - DELETE и много еще каких</i><br><br>
    			<i>Метод GET используется для того что бы получить данные - например из баз данных</i><br><rb>
    			<i>К примеру, если мы хотим передать серверу два значения, имя пользователя и его возраст, то это можно сделать следующей строкой:</i>
    			<br><br>
    			<b class="smooth">
    					<pre><code>URL: &quot; http://site.ru/page.php<span style="color: orangered;">?name=dima&age=27</span> &quot;</code></pre>

    			</b><br>
    			<i>Когда выполнен данный запрос, данные попадают в так называемую переменную окружения QUERY_STRING, из которой их можно получить на сервере с помощью серверного языка веб-программирования.
Вот пример, как это можно сделать на языке PHP.</i><br><br>
<hr class="line"><br>
			  <b class="smooth">
			  	<pre><code>&lt;?php
echo &quot;Ваше имя: &quot; . <span style="color: orangered;">$_GET[&quot;name&quot;]</span> . &quot;&lt;br /&gt;&quot;;
echo &quot;Ваш возраст: &quot; <span style="color: orangered;"> $_GET[&quot;age&quot;] </span>. &quot;&lt;br /&gt;&quot;;
?&gt;</code></pre>
			  </b><br><hr class="line"><br>
			  <i>
			  	будет выведено:<br>
			  	Ваше имя: dima <br>
				Ваш возраст: 27
			  </i>	

    		</div>

	    	<div class="pop-put xput-c">
	    		<p>метод PUT - для изменения / редактирования данных </p>
	    		<i>по хорошему написать бы псевдокод</i>
	    	</div>

	    	<div class="pop-del xdel-c">
	    		<p>метод DELETE - для удаление данных </p>
	    		<i>по хорошему написать бы псевдокод</i>
	    	</div>

    	</div>
    </div>

	<header>
		<div class="linespace"></div>
		<div class="contain-header">
			<h1>connecting to database in REST API + CRUD SYSTEMS</h1>
	    	<p>fast response system | система быстрого реагирования</p>
		</div>
		<br><hr><br>
		<div class="contain-header-x">
	    	<div class="logo">
				<img src="/root/images/logo/logo3.png" alt="logo">
			</div>
		</div>
		
	</header>

    <div class="section">
    	<section class="mob-i">
	       <h2>Хороший инструмент : </h2>
	       <h3 style="font-weight: 100; padding-bottom: 5px;">рассмотрим протокол HTTP и его методы</h3>
		   <p>PHP очень хорошо работает с  протоколами http / https ... в данном случае мы будем использовать методы для работы с данными <br>
		   	<b>
		   	<span class="x-click xpost" title="данный метод используется для добовления данных">POST</span> |
		   	<span class="x-click xget" title="данный метод используется для получения данных">GET</span> |
		   	<span class="x-click xput" title="данный метод используется для изменения данных">PUT</span> |
		   	<span class="x-click xdel" title="данный метод используется для удаления данных">DELETE</span>
		
		   	</b></p>
		   	<br>	
		   	<div class="mini-text"><p>нажми на метод что бы узнать, посмотреть код</p>
		   		<div class="mono">
		   			<i class="mini-t">*дальше мы будем проводить с ними операции</i><br>
		  		 	<i class="mini-t">*но для этого нужно узнать как это работает из под 'коробки'</i>
		   		</div>
		   	</div>
    	</section>
    	<section class="mob-i compres"></section>
    </div>


    
	<div class="content">

		<!-- раздели блок на одном форма на другом картинка с пояснением и так все 4 блока на методы -->  
		<div class="backg-filter content-wrapper">
			<!-- post get put delete в каждом блоке -->

			<section class="h-text">
				<h3>Отправить что то по методу post</h3>
				<p>Для этого нам понадобится форма</p>
			</section>

			<div class="crud examp1">
				<div class="wrapper-form-exm1">
					<div class="box_post_one chain_form">
						<form action="#" method="post">
							<input required type="text" name="work" placeholder="work - работа">
							<input required type="text" name="name" placeholder="name - имя">
							<input required type="text" name="cat" placeholder="есть кот ?">
							<input required type="text" name="dog" placeholder="есть собака ?">
							<button type="submit">Отправить</button>
							<div class="space-loader">
								<div class="dot r-dot"><li><i></i></li></div>
								<div class="dot b-dot"><li><i></i></li></div>
								<div class="dot c-dot"><li><i></i></li></div>
							</div>
						</form>
					</div>
				</div>
				<div class="line-decore"></div>
				<div class="box_post_two_1">
					<h3>отправка</h3>
					<p>отправка данных и получение ответа:</p>
				</div>
			</div>

			<section class="h-text">
				<h3>Получить данные:</h3>
				<p>Воспльзуемся методом get</p>
			</section>

			<div class="crud examp2">
				<div class="box_post_one">
					тут какое то пояснение и картитнка 
				</div>
				<div class="line-decore"></div>
				<div class="box_post_two">второй блок</div>
			</div>

			<section class="h-text">
				<h3>Отправить что то по методу post</h3>
				<p>Для этого нам понадобится форма</p>
			</section>

			<div class="crud examp1">
				<div class="box_post_one">
					тут какое то пояснение и картитнка 
				</div>
				<div class="line-decore"></div>
				<div class="box_post_two">второй блок</div>
			</div>

			<section class="h-text">
				<h3>Отправить что то по методу post</h3>
				<p>Для этого нам понадобится форма</p>
			</section>

			<div class="crud examp1">
				<div class="box_post_one">
					тут какое то пояснение и картитнка 
				</div>
				<div class="line-decore"></div>
				<div class="box_post_two">второй блок</div>
			</div>

		</div>

	</div>

	<footer>
		<!-- company oo too mail telegramm LOGO -->
		<!-- <h4 class="h-text">Мы используем грид (хотя можем и флексы и BOOTSTRAP 3, 4)</h4> -->
		<!-- инструменты https://grid.malven.co/ -->
		<!-- opensource github -->
	    <div class="logo">
			<img src="/root/images/logo/logo2.png" alt="logo">
		</div>
		<h5><span>theme: </span>Творический лес</h5>
		<div class="foo-wrapper">
			<section>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
			</section>
			<section>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
			</section>
			<section>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
				<li><a href="#">asdasd</a></li>
			</section>
		</div>
	</footer>
</body>
</html>

<!-- 
создать документацию по установки на локалку или опенсервер
документация по созданию данных по умолчанию 
документация по установки данных и подключение к бд
возможно уже будет включена по умолчанию
 -->