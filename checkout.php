<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widtth">
    <title>checkout Mirror Fashion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css">
    <style>
        body {
            padding-top: 55px;
        }
    </style>
</head>

<body>

    

    <nav class="fixed-top">
        <nav class="navbar navbar-expand-1g navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">Mirror Fashion</a>

            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <!-- <span class="navba-togglerí-icon"></span> -->
                        <a class="nav-link" href="sobre.html">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perguntas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entre em contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1>Ótima escolha!</h1>
            <p>Obrigada por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>

    <div class="container">
        <!-- ... card aqui ... -->
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <!-- ... cartão todo aqui ... -->
                    <div class="card-header">

                        Sua compra

                    </div><!-- fim .card-header -->
                    <div class="card-body">
                        <div class="form-group"  >
                            <label  for="qtd" >Quantidade:</label>
                            <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                        </div>

                        <div class="form-agroup" id="#form">
                            <label for="total" >Total:</label>
                            <dd id="preco">R$ 129,90</dd>
                            <output for="qtd preco" id="total" class="form-control">
                                R$ 129,90
                            </output>
                        </div>

                        <img src="img/produtos/foto1-verde.png" alt="Fuzz Cardigan" class="img-thumbnail mb-3">
                        <!-- ... aqui vai o <dl> que já temos ... -->
                        <dl>
                            <dt>produto</dt>
                            <dd>Fuzz Cardigan</dd>

                            <dt>Cor</dt>
                            <dd><?=	$_POST['cor']?></dd>

                            <dt>tamanho</dt>
                            <dd>40</dd>

                            <dt>Preço</dt>
                            <dd>R$ 129,90</dd>
                        </dl>
                    </div><!-- fim .card-body -->

                </div><!--fim .card mb-3 -->

                <!-- Aqui virá o código novo-->

            </div><!-- fim .col-md-4-->


            <form div class="col-md-8">
                <!-- ... todos os campos aqui ... -->
                <div class="row">

                    <fieldset class="col-lg-6">
                        <legend>Dados pessoais</legend>

                        <div class="form-group">
                            <label id="#p" for="nome">nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="usuario_twitter">usuario twitter</label>
                            <input type="text" class="form-control" id="usuario_twitter" name="usuario_twitter" required
                                pattern="^@\w{2,}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="email@exemplo.com" required>
                            </div>
                            <!-- <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"> -->
                        </div>

                        <div class="form-group">
                            <label for="CPF">cpf</label>
                            <input data-mask="999.999.999-99" type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                        </div>

                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" chacked
                                required>
                            <label class="custom-control-label" for="newsletter"></label>
                            Quero receber newsletter da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="col-lg-6">

                        <legend>Cartão de crédito</legend>

                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input data-mask="9999 9999 9999 9999 - 999" type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="bandeira-cartao">Banderia</label>
                                </div>
                                <select class="custom-select" id="bandeira">
                                    <option disabled selected>Selecione uma opção...</option>
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn-primary">
                    Confirmar Pedido
                </button>
            </form>

        </div> <!-- fim .row -->
    </div> <!-- fim .container -->

   

    <button type="subimit" class="btn btn-primary">
        <span class="oi oi-trump-up"></span>
        Confirmar Pedido
    </button>

    <!-- <output for="tamanho" name="valortamanho">42</output> -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/total.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
    
</body>

</html>