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
	    			<pre><code>&lt;form action=&quot;welcome.php&quot; method=&quot;post&quot;&gt;
Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;
&lt;input type=&quot;submit&quot;&gt;
&lt;/form&gt;</code></pre>
					<br> 
					<i>PHP: проверка на существование значений и отправка</i>
					<hr class="line"><br>
					<pre><code>if(isset($_POST['submit']) 
   {
      echo(&quot;First name: &quot; . $_POST['firstname'] . &quot;&lt;br /&gt;\\n&quot;);
      echo(&quot;Last name: &quot; . $_POST['lastname'] . &quot;&lt;br /&gt;\\n&quot;);
   }</code></pre>

				</b>
	    	</div>

	    	<div class="pop-get xget-c">
    			<p>метод GET - для получения данных </p>
    			<i>по хорошему написать бы псевдокод</i>
    			<b class="smooth">
    					<pre><code>// and &quot; <span style="color: orangered;">welcome_get.php</span> &quot; looks like this:
Welcome &lt;?php echo $_GET[&quot;name&quot;]; ?&gt;&lt;br&gt;
Your email address is: &lt;?php echo $_GET[&quot;email&quot;]; ?&gt;</code></pre>
    			</b>
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
			<h2>интерессный сайт по добовлению какого то контента</h2>
	    	<p>добовлять можно всякие вещи</p>
		</div>
	</header>

    <div class="section">
    	<section class="mob-i">
	       <h2>Хороший инструмент : </h2>
		   <p>PHP это очень хороший язык - для работы с протоколами http / https ... в данном случае мы будем использовать методы для работы с данными <br>
		   	<b>
		   	<span class="x-click xpost" title="данный метод используется для добовления данных">POST</span> |
		   	<span class="x-click xget" title="данный метод используется для получения данных">GET</span> |
		   	<span class="x-click xput" title="данный метод используется для изменения данных">PUT</span> |
		   	<span class="x-click xdel" title="данный метод используется для удаления данных">DELETE</span>
		
		   	</b></p>
		   	<br>	
		   	<div class="mini-text"><p>нажми на метод что бы узнать посмотреть код</p>
		   		<div class="mono">
		   			<i class="mini-t">*дальше мы будем проводить с ними операции</i><br>
		  		 	<i class="mini-t">*но для этого нужно узнать как это работает из под 'коробки'</i>
		   		</div>
		   	</div>
    	</section>
    </div>


    
	<div class="content">

		<!-- раздели блок на одном форма на другом картинка с пояснением и так все 4 блока на методы -->  
		<div class="backg-filter content-wrapper">
			<div class="crud">
				blur - window
				form here
				routes
				send post 
			</div>
		</div>

	</div>

	<footer>
		
	</footer>
</body>
</html>
<!-- 
создать документацию по установки на локалку или опенсервер
документация по созданию данных по умолчанию 
документация по установки данных и подключение к бд
возможно уже будет включена по умолчанию
 -->