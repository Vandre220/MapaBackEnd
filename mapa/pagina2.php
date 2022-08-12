<?php
	include("dados.php");
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php" title="Tutoriais" alt="Tutoriais">Home</a></li>
				<!--<li><a href="#" title="Artigos" alt="Artigos">Artigos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Suporte</a></li> -->
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>As melhores marmitas da região</h1>
				<p>Aproveite nosso menu, e venha saborear conosco!</p>
			</header>
			<?php
                $id = $_GET['id'];
                

				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1> Tel: 44 3522-0000</h1>
				<!--<p>xxxxx</p> -->
			</header>
			<?php
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php 
                    }
				}
			?> 
			
		</section>



		<!--suport -->
        <article class="main_suport">
           <!-- <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>-->
        </article>
        
	</main>

	<footer>
	
	</footer>
</body>
</html>