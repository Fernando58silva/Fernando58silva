<?=$this->fetch('commons/header.php')?>

<section class="banner">

	<ul class="itens">
		<li class="item">
			<a href="#">
				<img src="<?=URL_BASE?>resources/imagens/banner/banner.png">
             </a>
		</li>
	<li class="item">
			<a href="#">
				<img src="<?=URL_BASE?>resources/imagens/banner/banner.png">
             </a>
		</li>
    </ul>
</section>
<?php
     $data['slider_servicos'] = true;
  echo  $this->fetch('commons/servicos.php', $data);
 ?>
<section class="call_to_action">
   <video autoplay loop muted src="<?=URL_BASE?>resources/videos/video_placeholder.mp4"></video>
	<div class="container">
		<div class="titulo_principal">
			Somos a oficina mecânica mais completa da região, com equipamentos de ultima geração e preços 
			acessiveis.
		</div>
		<div class="btn">
			<a href="#">
				Orçamento
			</a>
		</div>
    </div>
</section>

<section class="institucional">
   <div class="container">
	<div class="informacoes">
	<div class="titulo">
			   <h2>Quem somos</h2>
			</div>
			<div class="descricao">
			 <p>Criada em 2018 a Fernando mecânica em geral, tem como objetivo a 
			facilidade e conforto na manutenção do seu carro, trazendo</p>
           <p>sempre em sua bagagem versatilidade e serviços Diferente do mercado.
			sempre em sua bagagem versatilidade e serviços Diferente do mercado. 
			sempre em sua bagagem versatilidade e serviços Diferente do mercado</p>
         </div>
		 <div class="btn">
			<a href="#">
				Continue lendo
			</a>
		</div>
	   </div>
	  <div class="video">
		 <img src="<?=URL_BASE?>resources/imagens/institucional.png">
		 <div class="conteudo">
			<div class="texto">
				assista ao vídeo especial que preparamos para você
		   </div>
		   <div class="icone">
			      <a  href="https://www.youtube.com/watch?v=9uKULtNHGG8"class="swipebox-video" title="video institucional">
				  <i class="fas fa-play"></i>
				  </a>
		   </div>
		 </div>
     </div>
  </div>
</section>
<?=$this->fetch('commons/clientes.php')?>
<section class="marcas">
	<div class="container">
		<div class="galeria">
		   <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_audi.png">
          </div>
		   <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_bmw.png">
          </div>
		   <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_chevrolet.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_citroen.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_fiat.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_ford.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_honda.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_hyundai.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_jac.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_land_rover.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_mercedes.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_mitsubishi.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_nissan.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_peugeot.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_renault.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_suzuki.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_toyota.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_volkswagen.png">
          </div>
		  <div class="item">
			  <img src="<?=URL_BASE?>resources/imagens/marcas/logo_volvo.png">
          </div>
     </div>
  </div>
</section>

<section class="noticias">
	<div class="container">
		<div class="titulo center">
			   <h2>Notícias</h2>
			</div>
			<div class="descricao">
			Muito além da variedade de serviços e do atendimento diferenciado, a infraestrutura das 
			oficinas mecânicas modernas também se caracteriza pela presença de ferramentas e equipamentos
			 automotivos profissionais para os espaços.
         </div>
	  <div class="itens">
		<div class="item">
		   <div class="img">
			    <img src="<?=URL_BASE?>resources/imagens/Noticias.png">
           </div>
		   <div class="info">
			 <div class="data">
				 30/10/2022
			 </div>
			  <div class="titulo">
			     <h3>Novos equipamentos</h3>
			   </div>
			   <div class="link">
				    <a href="#"> 
						Saiba Mais
					</a>
			   </div>
		   </div>
		</div>
		<div class="item">
		   <div class="img">
			    <img src="<?=URL_BASE?>resources/imagens/Noticias.png">
           </div>
		   <div class="info">
				<div class="data">
						30/10/2022
					</div>
			  <div class="titulo">
			     <h3>Resultados</3>
			   </div>
			   <div class="link">
				    <a href="#"> 
						Saiba Mais
					</a>
			   </div>
		   </div>
		</div>
		<div class="item">
		   <div class="img">
			    <img src="<?=URL_BASE?>resources/imagens/Noticias.png">
           </div>
		   <div class="info">
				<div class="data">
						30/10/2022
					</div>
			  <div class="titulo">
			     <h3>Novas formas de economia</h3>
			   </div>
			   <div class="link">
				    <a href="#"> 
						Saiba Mais
					</a>
			   </div>
		   </div>
		</div>
		<div class="item">
		   <div class="img">
			    <img src="<?=URL_BASE?>resources/imagens/Noticias.png">
           </div>
		   <div class="info">
				<div class="data">
						30/10/2022
					</div>
			  <div class="titulo">
			     <h3>Novas peças Combustão</h3>
			   </div>
			   <div class="link">
				    <a href="#"> 
						Saiba Mais
					</a>
			   </div>
		   </div>
		</div>
		<div class="item">
		   <div class="img">
			    <img src="<?=URL_BASE?>resources/imagens/Noticias.png">
           </div>
		   <div class="info">
				<div class="data">
						30/10/2022
					</div>
					<div class="titulo">
			     <h3>Como fazer manutenções</h3>
			   </div>
			   <div class="link">
				    <a href="#"> 
						Saiba Mais
					</a>
			   </div>
		   </div>
		</div>
	 </div>
  </div>
</section>
<?=$this->fetch('commons/footer.php')?>