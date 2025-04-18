<?php 
        $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
        $cabecalho_title = "produto da Mirror Fashion";
        include("cabecalho.php");
    ?> 
        <div class="produto-back">
        <div class="container">
            <div class="produto">
                <form action="checkout.php" method="POST">

                <input type="hidden" name="nome" value="Fuzzy Cardigan">
                <input type="hidden" name="preco" value="129,00">

                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>

                        <input type="radio" name="cor" value="verde" id="verde" checked>
                        <label for="verde">
                            <img src="img/produtos/foto1-verde.png" alt="produto na cor verde">
                        </label>

                        <input type="radio" name="cor" value="rosa" id="rosa">
                        <label for="rosa">
                            <img src="img/produtos/foto1-rosa.png" alt="Produto na cor rosa">
                        </label>

                        <input type="radio" name="cor" value="azul" id="azul">
                        <label for="azul">
                            <img src="img/produtos/foto1-azul.png" alt="Produto na cor azul">
                        </label>

                    </fieldset>

                    <fieldset class="tamanhos">
                        <legend>Escolha o tamanho:</legend>
                        <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                        <output for="tamanho" name="valorTamanho">42</output>

                        <button class="comprar">comprar</button>

                    </fieldset>

                </form>
            </div>

            <div class="detalhes">

                <table>
                    <thead>
                        <tr>
                            <th> Características</th>
                            <th>Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardigã</td>
                        </tr>
                        <tr>
                            <td>material</td>
                            <td>Algodão e poliester</td>
                        </tr>
                        <tr>
                            <td>cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Detalhes do produto</h2>

                <p>Esse é o melhor casaco de Cardigã que você ja viu. Excelente
                    material italiano com estampa desenhada pelos artesãos da
                    comunidade de Krotor nas ilhas gregas. Compre e já receba
                    hoje mesmo pela nossa entrega a jato.</p>

                <h1>Fuzz Cardigan</h1>
                <p>por apenas 129,90</p>
            </div>




            <table>
                <caption>Quantidade e preço de camisetas.</caption>

                <colgroup>
                    <col width="10%">
                    <col width="40%">
                    <col width="30%">
                    <col width="20%">
                </colgroup>

                <thead>
                    <tr>
                        <th rowspan="2"></th>
                        <th colspan="2">Quantidade de Camisetas</th>
                        <th rowspan="2">preço</th>
                    </tr>
                    <tr>
                        <th>Amarela</th>
                        <th>Vermelha</th>
                    </tr>
                </thead>

                <tfloot>
                    <tr>
                        <td></td>
                        <td>Total de camisetas amarelas :35</td>
                        <td>Total de camisetas Vermelhas: 34</td>
                        <td>Valor Total: $45.00</td>
                    </tr>
                </tfloot>

                <tbody>

                    <tr>
                        <td>Polo</td>
                        <td>12</td>
                        <td>5</td>
                        <td>$30.00</td>
                    </tr>

                    <tr>

                        <td>Regata</td>
                        <td>23</td>
                        <td>29</td>
                        <td>$15.00</td>
                    </tr>
                </tbody>

            </table>


        </div>
    </div>
    </div>


    <script type="text/javascript" src="js/produto.js"></script>

    <!-- Aqui vai vir o miolo da nossa página depois! -->

    <?php include("rodape.php"); ?> 