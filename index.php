<?php include("header.php"); ?>

<div class="carrossel-container">
    <div class="carrossel">
        <img id="slide" src="imagens/slide1.jpg" alt="Imagem da Cantina">
    </div>
    <div class="titulo-carrossel">Cantina Italiana</div>
</div>

<div class="conteudo" id="produtos">
    <h2>Menu de Produtos</h2>

    <h3>Pizzas</h3>
    <div class="carrossel-wrapper">
        <button class="carrossel-btn" id="pizza-prev">&#10094;</button>
        <div class="carrossel-row" id="pizza-row">
            <div class="item"><img src="imagens/pizza_margherita.jpg" alt="Pizza Margherita"><span>Pizza Margherita</span></div>
            <div class="item"><img src="imagens/pizza_calabresa.jpg" alt="Pizza Calabresa"><span>Pizza Calabresa</span></div>
            <div class="item"><img src="imagens/pizza_quatro_queijos.jpg" alt="Pizza Quatro Queijos"><span>Pizza Quatro Queijos</span></div>
            <div class="item"><img src="imagens/pizza_portuguesa.jpg" alt="Pizza Portuguesa"><span>Pizza Portuguesa</span></div>
            <div class="item"><img src="imagens/pizza_rucula_tomate_seco.jpg" alt="Pizza de Rúcula com Tomate Seco"><span>Pizza de Rúcula com Tomate Seco</span></div>
        </div>
        <button class="carrossel-btn" id="pizza-next">&#10095;</button>
    </div>

    <h3>Vinhos</h3>
    <div class="carrossel-wrapper">
        <button class="carrossel-btn" id="vinho-prev">&#10094;</button>
        <div class="carrossel-row" id="vinho-row">
            <div class="item"><img src="imagens/vinho_tinto.jpg" alt="Vinho Tinto Seco"><span>Vinho Tinto Seco</span></div>
            <div class="item"><img src="imagens/vinho_branco.jpg" alt="Vinho Branco Suave"><span>Vinho Branco Suave</span></div>
            <div class="item"><img src="imagens/vinho_rose.jpg" alt="Vinho Rosé"><span>Vinho Rosé</span></div>
            <div class="item"><img src="imagens/cerveja.jpg" alt="Cerveja"><span>Cerveja</span></div>
        </div>
        <button class="carrossel-btn" id="vinho-next">&#10095;</button>
    </div>
</div>

<div class="conteudo" id="servicos">
    <h2>Serviços Oferecidos</h2>
    <ul class="lista-servicos">
        <li>Delivery em toda a cidade</li>
        <li>Reserva de mesas para eventos</li>
        <li>Cardápio digital via QR Code</li>
        <li>Atendimento personalizado</li>
    </ul>
</div>

<?php include("footer.php"); ?>
