<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Escaravelho</title>
	<link rel="icon" href="imgs/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/vendors/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/vendors/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/vendors/owl-carousel/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="css/vendors/social/arthref.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
		@font-face {
	  font-family: 'Glyphicons Halflings';
	  src: url(fonts/bootstrap/glyphicons-halflings-regular.eot?1430235042);
	  src: url(fonts/bootstrap/glyphicons-halflings-regular.eot?&1430235042#iefix) format("embedded-opentype"), url(fonts/bootstrap/glyphicons-halflings-regular.woff2?1430235042) format("woff2"), url(fonts/bootstrap/glyphicons-halflings-regular.woff?1430235042) format("woff"), url(fonts/bootstrap/glyphicons-halflings-regular.ttf?1430235042) format("truetype"), url(fonts/bootstrap/glyphicons-halflings-regular.svg?1430235042#glyphicons_halflingsregular) format("svg");
	}
   </style>
</head>
<body>
	<header class="container">
		<div class="content">
			<div id="logo-container">
			   <div id="logo-container__logo">		
				<a href="#"><img class="img-responsive" src="imgs/logo.jpg" alt="Logo" title="Escaravelho"/></a>
				</div>	
			</div>
			<div id="search-container">
				 <div id="search-container__form">		
				    <div class="input-group">
					 <input type="text" class="form-control" placeholder="Digite sua busca...">
				      <span class="input-group-btn">
				        <button class="btn btn-default hidden-xs" type="button">Buscar</button>
				      </span>
				    </div><!-- /input-group -->
				</div>
			</div>
		</div>
	</header>

<nav class="navbar navbar-default navbar-static-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div class="container">	
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Filmes</a></li>
        <li class="li_click"><a href="#" data-toggle="modal" data-target="#contato"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contato</a></li>
        <li class="li_click"><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>        
      </ul>
  </div>
    </div><!-- /.navbar-collapse -->
</nav>

<section id="slider" class="owl-carousel owl-theme">
<div class="item img_slider">
<div class="inside_imagem">
<h1>Beleza americana</h1>
<span>
Lester Burham não aguenta mais o emprego e se sente impotente perante sua vida...
</span>
<button class="btn btn-default" type="button">Ver+</button>
</div>
<img class="lazyOwl" src="imgs/american.jpg">
</div>

<div class="item img_slider">
<div class="inside_imagem">
<h1>Silêncio dos inocentes</h1>
<span>
A agente do FBI, Clarice Starling é ordenada a encontrar um assassino que arranca a pele de suas vítimas...
</span>
<button class="btn btn-default" type="button">Ver+</button>
</div>
<img class="lazyOwl" src="imgs/silence.jpg">
</div>

<div class="item img_slider">
<div class="inside_imagem">
<h1>Jogos Mortais</h1>
<span>
Jigsaw é um assassino que possui uma marca registrada: ele deixa em suas vítimas uma cicatriz em forma de...
</span>
<button class="btn btn-default" type="button">Ver+</button>
</div>
<img class="lazyOwl" src="imgs/saw.jpg">
</div>

<div class="item img_slider">
<div class="inside_imagem">
<h1>Ted</h1>
<span>
O pequeno John tem apenas um pedido a fazer ao Papai Noel: que seu ursinho de pelúcia, Ted, ganhe vida....	
</span>
<button class="btn btn-default" type="button">Ver+</button>
</div>
<img class="lazyOwl" src="imgs/te.jpg">
</div>

<div class="item img_slider">
<div class="inside_imagem">
<h1>As Branquelas</h1>
<span>
Os irmãos Marcus e Kevin Copeland são detetives do FBI que estão com problemas no trabalho...
</span>
<button class="btn btn-default" type="button">Ver+</button>
</div>
<img class="lazyOwl" src="imgs/branquelas.jpg">
</div>
</section>

<section id="boxs" class="container">
	<div class="content">
		<div id="lancamentos">
			<div class="topo"><span class="glyphicon glyphicon-play" aria-hidden="true"></span><span class="title_topo">Lançamentos</span></div>
			<div class="box_lancamento">
			<img src="imgs/saw.jpg">
			<h1>Jogos Mortais</h1>
			<h1>Descrição: <span class="desc">Jigsaw é um assassino que possui uma marca registrada: ele deixa em suas vítimas uma cicatriz em forma de [...]</span></h1>
			<button class="btn btn-default hidden-sm hidden-xs" type="button">Ver+</button>
			</div>
			<div class="box_lancamento">
			<img src="imgs/american.jpg">
			<h1>Beleza Americana</h1>
			<h1>Descrição: <span class="desc">Lester Burham não aguenta mais o emprego e se sente impotente perante sua vida [...]</span></h1>
			<button class="btn btn-default hidden-sm hidden-xs" type="button">Ver+</button>
			</div>
			<div class="box_lancamento">
			<img src="imgs/te.jpg">
			<h1>Ted</h1>
			<h1>Descrição: <span class="desc">O pequeno John tem apenas um pedido a fazer ao Papai Noel: que seu ursinho de pelúcia, Ted, ganhe vida [...]</span></h1>
			<button class="btn btn-default hidden-sm hidden-xs" type="button">Ver+</button>
			</div>
		</div>
		<aisde id="favoritos">
				<div class="topo"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><span class="title_topo">Favoritos</span></div>
				<div class="item_favorito">
					<img class="imagem_favorito" src="imgs/saw.jpg">
					<h1>Jogos Mortais</h1>
					<h1>Dirigido por: <span class="autor">James Wan<span></h1>
					<h1 class="number"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100</h1>
				</div>
				<div class="item_favorito">
					<img class="imagem_favorito" src="imgs/american.jpg">
					<h1>Beleza Americana</h1>
					<h1>Dirigido por: <span class="autor">Sam Mendes<span></h1>
					<h1 class="number"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100</h1>
				</div>
				<div class="item_favorito">
					<img class="imagem_favorito" src="imgs/te.jpg">
					<h1>Ted</h1>
					<h1>Dirigido por: <span class="autor">Seth MacFarlane<span></h1>
					<h1 class="number"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100</h1>
				</div>
		</aisde>
	</div>
</section>

<footer>
	<div class="container">
	  <div class="content">	
	 <div id="widgets"> 	
	  <div class="footer_widget">		
		<h1>SOBRE NÓS</h1>
		<span class="text_footer_widget">Somos uma empresa apaixonada por cinema. Nos erguemos para incentivar essa bela cultura de filmes. </span><br>
		<button class="btn btn-default" type="button">Saiba+</button>
		</div>
		<div class="footer_widget offset">		
		<h1>SERVIÇOS</h1>
		<span class="text_footer_widget">
			<ul>
				<li><a href="#">Compre ingressos</a></li>
				<li><a href="#">Cinemas</a></li>
				<li><a href="#">Nossa loja</a></li>
				<li><a href="#">Promoções</a></li>
			</ul>
		</span>
		</div>
		<div class="footer_widget offset">		
		<h1>INFORMAÇÕES</h1>
		<span class="text_footer_widget">
			<ul id="info">
				<li><a href="register.php">Crie sua conta</a></li>
				<li><a href="#">Fale conosco</a></li>
				<li><a class="btsocial" href="javascript:void(0)"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Siga-nos</a></li>
				<li><a href="#">Parceiros</a></li>
			</ul>
		</span>
		</div>
		</div>
		
  </div>	
 </div>
 <div id="social_media">
 <!-- O nome em inglês (corporation) e o outro em português (Escaravelho) não fica legal -->
 <!-- Optei por colocar tudo em português -->
 <a href="#">TODOS DIREITOS RESERVADOS - 2015 - CORPORAÇÃO ESCARAVELHO</a>	
 </div>
</footer>

<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="contato">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Contato</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Nome:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="control-label">E-mail:</label>
            <input type="email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Mensagem:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Logar</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">E-mail:</label>
            <input type="email" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="control-label">Senha:</label>
            <input type="password" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="register.php"><button type="button" id="btn-register" class="btn btn-primary">Registrar</button></a>
        <button type="button" class="btn btn-primary">Logar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/vendors/jquery.js"></script>
<script type="text/javascript" src="js/vendors/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vendors/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/vendors/socialProfiles.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>