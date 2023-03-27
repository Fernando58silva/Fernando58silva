<?=$this->fetch('commons/header.php')?>
<?=$this->fetch('commons/Migalha.php', $data)?>
<section class="fale_conosco">
    <div class="container">
        <div class="topo">
            <div class="form">
                <h2>Nos envie uma mensagem</h2>
                <form action="#" class="form_ajax">
                    <input type="text" nome="nome" placeholder="Nome" required>
                    <input type="email" nome="email" placeholder="E-mail" required>
                    <input type="text" nome="telefone" placeholder="Telefone" required>
                    <input type="text" nome="assunto" placeholder="Assunto"required>
                    <textarea placeholder="Mensagem" name="mensagem" required></textarea>
                    <div class="btn_acao">
                        <div class="recaptcha"></div>
                           <div class="btn">
                             <button type= "submit">Enviar mensagem</button>
                        </div>
                    </div>
					<div class="resposta"></div>
                </form>
             </div>
        <div class="contatos">
			<div class="titulo">Nossos Contatos</div>
			<div class="informacoes">
				<div class="endereco">
					<div class="icon">
					   <i class="fa fa-map-marker"></i>
                         </div>
					     <p>
						<strong>Endereço</strong>
					 <a href="https://www.google.com.br/maps/place/Rua+Luiz+Supertti+-+Jardim+Guanabara,+S%C3%A3o+Paulo+-+SP,+04860-225/@-23.7640824,-46.7159089,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce4ed3a51b2071:0x5af077453b51722a!8m2!3d-23.7640824!4d-46.7159089">
					 Rua Luiz Supertti, 35 - Grajaú,São Paulo - SP
					 </a>
					</p>
		         </div>
				 <div class="email">
				   <div class="icon">
						<i class="far fa-envelope"></i>
						  </div>
					       <p>
							<strong>Email</strong>
							zaielite@hotmail.com
					       </p>
						     </div>
			   <div class="telefone">
				   <div class="icon">
				      <i class="fa fa-mobile-alt"></i>
                        </div>
			              <p>
				           <strong>Telefone</strong>
						   <a href="#">
					     (11) 99999-9999
						</a>
			          </p>
			    </div>
			<div class="redes-social">
				<a href="https://www.facebook.com/isaias.fernando.98">
            <i class="fab fa-facebook-f"></i>
                </a>
            
              <a href="https://www.instagram.com/fernando_almeida58/">
           <i class="fab fa-instagram"></i>
              </a>

              <a href="https://www.youtube.com/channel/UCGYJ4_m-FzhkcAOR7YbPXPw">
          <i class="fab fa-youtube"></i>
              </a>
				</div>
			</div>
        </div>
    </div>
</div>
                    <div class="iframe_mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.531450614127!2d-46.715908899999995!3d-23.7640824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4ed3a51b2071%3A0x5af077453b51722a!2sRua%20Luiz%20Supertti%20-%20Jardim%20Guanabara%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004860-225!5e0!3m2!1spt-BR!2sbr!4v1675944590162!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
 </div>
</section>
<?=$this->fetch('commons/footer.php')?>