<?php
	include("dados.php");
	//var_dump($tutoriais);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Tutoriais">Marmitas da Dona Rita</a></li>
				
			</ul>
		</nav>
	</header>
	
	<main>
		<!--<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você encontra as melhores marmitas da região, venha almoçar conosco!</h1>
                    </header> -->
                  
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>As melhores marmitas da região</h1>
				<p>Aproveite nosso menu, e venha se saborear conosco!</p>
			</header>
			<?php
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
				}
			?>
			
		</section>
		<!--suport -->
        <!--<article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>-->
        <!--3ª dobra-->
	</main>

	<footer>
		<font align = "center">
        <p class="rodape">MARMITA DA DONA RITA<br><br>
        <a href="#">www.marmitadadonarita.com.br</a> <br>
        Fone: (44) 44 3522-0000 <br>
        Endereço: Rua José de Alencar nº00   <br>
    <div align="center" >
        <p>  Vandré J. Santos | RA: 21179398-5 | Curso: SISTEMAS PARA INTERNET</p>
    </div>
    </font></footer>
</body>
</html>