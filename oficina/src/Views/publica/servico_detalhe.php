<?=$this->fetch('commons/header.php')?>
<?=$this->fetch('commons/Migalha.php', $data)?>

<section class="servico_detalhe">
    <div class="container">
        <div class="texto">
            <img src="<?=URL_BASE?>resources/imagens/institucional.png">
            <h2 class="titulo">Ar condicionado</h2>
            <p>   A manutenção recorrente do ar-condicionado automotivo tem grande importância, pois qualquer problema no equipamento afeta 
            diretamente a qualidade do ar respirado pelos passageiros. 
            Além disso, caso o sistema pare de funcionar,
        </p>
            <p> a viagem pode se tornar desconfortável nos momentos em que não for possível abrir os vidros, como durante chuvas fortes.
            A revisão preventiva deve ser realizada a cada seis meses por um profissional habilitado ou nos momentos em que o equipamento 
            der sinais de que pode estar com algum problema. De acordo com o site Doutor Multas, entre os problemas mais comuns do ar-condicionado 
            que podem ser sentidos pelos passageiros, estão incapacidade de refrigerar, queda no nível de ventilação e não funcionamento.
            Na maioria dos casos, a manutenção é feita de forma rápida, envolvendo apenas a troca de algumas peças e determinados ajustes.
            O uso frequente do ar-condicionado está relacionado com o aumento do consumo de combustível nos veículos. Por isso, para aqueles 
            que desejam economizar na hora de abastecer, pode ser interessante otimizar o uso do equipamento.
        </p>
            <p>  Uma das formas de fazer isso é preferir transitar com os vidros abaixados e o ar-condicionado desligado nos centro urbanos, visto que nesses 
            perímetros os deslocamentos são mais lentos devido a sinaleiros, congestionamentos e outros aspectos do tráfego. Quando se trata da direção em 
            rodovias, o mais indicado é optar pelo uso do ar-condicionado, visto que o veículo se desloca em uma velocidade maior.
            Em dias muito quentes, em que o automóvel fica por muito tempo estacionado sob o sol com os vidros fechados, também há uma maneira de otimizar 
            o uso do equipamento. A maioria das pessoas tende a entrar no carro e já ligar o ar para reduzir a temperatura interna, mas o melhor a se fazer é 
            dirigir por alguns quilômetros com os vidros abaixados até que o calor interno reduza um pouco.
        </p>
            <p> Assim, quando houver uma sensação de amenidade, é possível fechar os vidros e ligar o ar-condicionado para resfriar a cabine mais rapidamente. De forma geral, o 
            uso do ar-condicionado deve ser feito apenas em momentos necessários por aqueles que procuram economizar combustível.
        </p>
        </div>
    </div>
</section>

<section class="galeria_fotos">
	<div class="container">
		<div class="titulo center">
			   <h2>Galeria de fotos</h2>
			</div>
			<div class="descricao">
				
         </div>
	  <div class="itens">

		<div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/m.png">
               <img src="<?=URL_BASE?>resources/imagens/m.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
		</div>
		<div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/m.png">
               <img src="<?=URL_BASE?>resources/imagens/m.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
		</div>
		<div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/fluidos.png">
               <img src="<?=URL_BASE?>resources/imagens/fluidos.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
        </div>
		<div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/freios.png">
               <img src="<?=URL_BASE?>resources/imagens/freios.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
		</div>
		<div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/ar.png">
               <img src="<?=URL_BASE?>resources/imagens/ar.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
		</div>
        <div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/pistao.png">
               <img src="<?=URL_BASE?>resources/imagens/pistao.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
		</div>
        <div class="item">
		   <div class="img">
               <a class="swipebox" title="Nome da imagem" href="<?=URL_BASE?>resources/imagens/velas.png">
               <img src="<?=URL_BASE?>resources/imagens/velas.png">
                    <div class="hover">
                        <i class="fa fa-image"></i>
                    </div>
                </a>
           </div>
        </div>

	</div>
  </div>
</section>

<section class="formulario_orcamento">
     <div class="container">
        <div class="img">
            <img src="<?=URL_BASE?>resources/imagens/imagem_orcamento.png">
        </div>
            <div class="form">
                <h2>Fazer orçamento</h2>
                <p>Aqui você faz seu orçamento sem qualquer custo ou cobranças, sem precisar sair de 
                    casa.</p>
                <form action="#" class="form_ajax">
                    <input type="text" nome="nome" placeholder="Nome" required>
                    <input type="text" nome="telefone" placeholder="Telefone" required>
                    <input type="email" nome="email" placeholder="E-mail" required>
                    <strong>Selecione os serviços desejados:</strong>
                    <label>
                        <input type="checkbox" name="servicos[]">
                        Ar condicionado
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Diagnostico de motor
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Freios
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Suspenção
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                      Câmbio
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                        Ar condicionado
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Diagnostico de motor
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Freios
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Suspenção
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                      Câmbio
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                        Ar condicionado
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Diagnostico de motor
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Freios
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                       Suspenção
                    </label>
                    <label>
                        <input type="checkbox" name="servicos[]">
                      Câmbio
                    </label>
                    <p>Nos informe no campo abaixo, com o ano e modelo do carro,
                        problema que vem observando  algum tempo e tudo o que achar relevante 
                        para nos contar:</p>
                    <textarea placeholder="Mensagem" name="mensagem" required></textarea>
                    <div class="btn_acao">
                        <div class="recaptcha"></div>
                           <div class="btn">
                             <button type= "submit">Enviar Orçamento</button>
                        </div>
                    </div>
					<div class="resposta">Enviado com sucesso</div>
                </form>
          </div>
    </div>
</section>
<?=$this->fetch('commons/footer.php')?>