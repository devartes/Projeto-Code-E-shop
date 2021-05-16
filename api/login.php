<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ************************ CSS *********************** -->
    <link rel="stylesheet" type="text/css" href="../css/social.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/services.css">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <link rel="stylesheet" type="text/css" href="../css/banner.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/menufixo.css">
    <!-- ****************************************************** -->
    <!-- ÍCONE NO TOPO DA TELA -->
    <link rel="short icon" href="../imagens/code.png">
    <!-- ********************* -->
    <!-- **** FONTAWESOME **** -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <!-- ********************* -->
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- *********** -->
    <!-- CARROSSEL -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- ******** -->
    <title>Code E-Shop</title>
</head>

<body>
    <!-- SOCIAL NAVBAR -->
    <nav>
        <div class="social-call">
            <!-- SOCIAL - ÍCONES E LINKS -->
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <!-- *********************** -->
            <!-- MENSAGEM PERTO DOS LINKS (SOCIAL) -->
            <div class="text">
                <span>Siga Nossas Redes Sociais!</span>
            </div>
            <!-- ********************************* -->
        </div>

        <!-- MENU-BAR -->
        <div class="navigation">
            <!-- ******** LOGO ********* -->
            <a href="#" class="logo">
                <img src="../imagens/code.png">
            </a>
            <!-- ************************ -->
            <!-- *** ÍCONE DO MENU RESPONSIVO *** -->
            <div class="toggle"></div>
            <!-- ******************************** -->

            <!-- ************ MENU ************** -->
            <ul class="menu">
                <li><a href="#"><span class="premium"> Premium</span></a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Nintendo</a>
                    <!-- PROMOÇÃO - RETÂNGULO -->
                    <span class="sale-lable">Promoção</span>
                    <!-- ******************** -->
                </li>
                <li><a href="#">Playstation</a></li>
                <li><a href="#">Xbox</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>
            <!-- ********** FINAL MENU ********* -->
            <!-- ÍCONE DO LADO DO MENU -->
            <div class="right-menu">
                <!-- LUPA -->
                <a href="javascript:void(0);" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!-- USUÁRIO -->
                <a href="javascript:void(0);" class="user">
                    <i class="far fa-user"></i>
                </a>
                <!-- ÍCONE CARRINHO DE COMPRAS -->
                <a href="#">
                    <i class="fas fa-shopping-cart">
                        <!-- NUMBER OF PRODUCT IN CART -->
                        <span class="num-cart-product">0</span>
                    </i>
                </a>
            </div>
        </div>
    </nav>
    <!-- *********** FINAL ÍCONE DO LADO DO MENU ************** -->

    <!-- ***************** BARRA DE PROCURA ******************* -->
    <div class="search-bar">
        <!-- BARRA DE PROCURA -->
        <div class="search-input">
            <!-- INPUT -->
            <input type="text" placeholder="Procurar Produto">
            <!-- CANCELAMENTO BTN -->
            <a href="javascript:void(0);" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>
    <!-- ******************************************************** -->

    <!-- ******************* LOGIN AND SIGNUP ******************* -->
    <div class="form">
        <!-- LOGIN -->
        <div class="login-form">
            <!-- CANCELAMENTO BTN -->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!-- **************** -->
            <!-- ** LOGIN TEXTO ** -->
            <strong>Login</strong>
            <br>
            <!-- ***************************** -->
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <!-- ****************************** -->
            <!-- INPUT -->
            <form method="POST" action="codigo.php">
                <br>
                <input type="text" name="usuario" placeholder="exemplo@email.com">

                <input type="password" name="senha" placeholder="Digite a sua senha">

                <input type="submit" name="btnLogin" value="Acessar">

            </form>
            <!-- ESQUECEU SENHA E CRIAR CONTA -->
            <div class="form-btns">
                <a href="#" class="forget">Esqueceu Sua Senha?</a>
                <a href="javascript:void(0);" class="sign-up-btn">Criar Conta</a>
            </div>

            <br>
            Usuário cadastrado no Banco de Dados<br>
            Usuário: teste@gmail.com<br>
            Senha: 123
            <!-- ****************************** -->
        </div>
        <!-- ********************************** -->
        <!-- SIGN UP -->
        <div class="sign-up-form">
            <!-- CANCELAMENTO BTN -->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!-- **************** -->
            <!-- * SIGN UP TEXTO * -->
            <strong>Sign Up</strong>
            <!-- **************** -->
            <!-- ***** INPUT **** -->
            <form>
                <input type="text" placeholder="Nome Completo" name="fullname" required>
                <input type="email" placeholder="exemplo@email.com" name="email" required>
                <input type="password" placeholder="Senha" name="password" required>
                <!-- SUBMIT BTN -->
                <input type="submit" value="Sign Up">
            </form>
            <!-- ESQUECEU A CONTA E SIGN UP -->
            <div class="form-btns">
                <a href="javascript:void(0);" class="already-account">Já Tem Conta?</a>
            </div>
            <!-- ****************** -->
        </div>
    </div>
    <!-- ******************************************************** -->

    <!-- ************************ HEADER ************************ -->
    <header id="home" class="header">
        <!-- IMAGEM DO MENU INICIAL -->
        <img src="../imagens/black.png" width="45%" class="propaganda-img" alt="">
        <!-- ********************** -->
        <div class="propaganda-content">
            <h1>
                <span>Nintendo</span>
                <span>Switch com</span>
            </h1>
            <h2><span class="discount">50%</span> de Desconto!</h2>
            <!-- CONTAGEM REGRESSIVA -->
            <h3>Corra antes que acabe!</h3>
            <div class="contador">

                <body onload="atualizaContador()">
                    <span id="contador"></span>
            </div>
        </div>
        <!-- ********************* -->
    </header>
    <!-- ******************************************************** -->

    <!-- ********************* SERVIÇOS ************************* -->

    <section class="section services">
        <div class="service-center container">
            <div class="service">
                <span class="icon"><i class='bx bxs-truck'></i></span>
                <h4>Frete Grátis</h4>
                <span class="text">Cliente Premium</span>
            </div>

            <div class="service">
                <span class="icon"><i class='bx bxs-lock'></i></span>
                <h4>Pagamento Seguro</h4>
                <span class="text">Entrega Garantida</span>
            </div>

            <div class="service">
                <span class="icon"><i class="bx bx-book-reader"></i></span>
                <h4>30 dias </h4>
                <span class="text">para Devoluções e Reembolsos</span>
            </div>

            <div class="service">
                <span class="icon"><i class="bx bx-headphone"></i></span>
                <h4>Suporte 24H</h4>
                <span class="text">Estamos aqui para te ajudar</span>
            </div>
        </div>
    </section>

    <!-- ******************************************************** -->
    <!-- *********************** BANNER ************************** -->

    <h1 class="lg-title">Oferta Relâmpago</h1>
    <div class="slider">
        <div class="slider-track">
            <div class="slide">
                <a href="#"><img src="../imagens/a.png" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="../imagens/b.png" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="../imagens/c.png" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="../imagens/d.png" alt=""></a>
            </div>
        </div>
    </div>

    <!-- ******************************************************** -->
    <!-- ************************ PRODUTOS ********************** -->

    <div class="products">
        <div class="container">
            <h1 class="lg-title">Jogos em Oferta</h1>
            <p class="text-light">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Odit, quidem.</p>

            <div class="popular">
                <h1>Jogos Populares</h1>
                <div class="popular-carousel" data-flickity='{"autoPlay": true , "prevNextButtons": false, "wrapAround": true }'>
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/1.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/2.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/3.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/4.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/5.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                </div>
            </div>

        </div>
    </div>

    <!-- ******************************************************** -->
    <!-- ***************** OUTROS PRODUTOS ********************** -->

    <div class="products">
        <div class="container">
            <div class="popular">
                <h1>Jogos Populares</h1>
                <div class="popular-carousel" data-flickity='{"autoPlay": true , "prevNextButtons": false, "wrapAround": true }'>
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/1.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/2.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/3.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/4.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                    <!-- *********************** COMEÇO PRODUTO ************************* -->
                    <div class="single-item">
                        <div class="img" style="background-image: url(../imagens/5.jpg);"></div>
                        <div class="info">
                            <h3>Game</h3>
                            <p>Essa é a descrição para o item</p>

                            <div class="item-flex">
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <div class="price">
                                    <h4>$440.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *********************** FINAL PRODUTO ************************* -->
                </div>
            </div>

        </div>
    </div>

    <!-- ******************************************************** -->
    <!-- JQUERY -->
    <script src="../js/jQuery.js"></script>
    <script src="../js/clock.js"></script>

    <!-- ****** -->
    <!-- JAVASCRIPT BARRA DE PROCURA E LOGIN/SIGN UP -->
    <script type="text/javascript">
        /* FOR SEARCH BAR */
        $(document).on('click', '.search', function() {
            $('.search-bar').addClass('search-bar-active')
        });

        $(document).on('click', '.search-cancel', function() {
            $('.search-bar').removeClass('search-bar-active')
        });

        /* LOGIN SIGNUP FORM */
        $(document).on('click', '.user,.already-account', function() {
            $('.form').addClass('login-active').removeClass('sign-up-active')
        });

        $(document).on('click', '.sign-up-btn', function() {
            $('.form').addClass('sign-up-active').removeClass('login-active')
        });

        $(document).on('click', '.form-cancel', function() {
            $('.form').removeClass('login-active').removeClass('sign-up-active')
        });
    </script>
    <!-- *********************************************** -->

    <!-- ************ MENU RESPONSIVO ************ -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggle').click(function() {
                $('.toggle').toggleClass('active')
                $('.navigation').toggleClass('active')
            })
        })
    </script>
    <!-- ***************************************** -->

    <!-- FIXAR MENU -->
    <script>
    
    $(window).scroll(function(){
        if($(document).scrollTop() > 50) {
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        }
    });

    </script>

    <!-- *********** JAVASCRIPT CARROSSEL ********* -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- ***************************************** -->

    <!-- *********** POP-UP ********* -->

    <script src="js/sweetalert.min.js"></script>


    <?php
    // PHP program to pop an alert
    // message box on the screen

    // Function defnition
    function function_alert($message)
    {

        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }


    // Function call
    function_alert("Isso é um teste!");

    ?>

    <!-- **************************** -->

    <!-- FOOTER -->
    <footer>
    
    <!-- COPYRIGHT -->
    <span class="copyright">
     Copyright 2021 - Devartes
    </span>
    <!-- SUBSCRIBE -->
     <div class = "subscribe">
      <form>
        <input type = "email" placeholder = "example@gmail.com" required>
        <input type = "submit" value="Subscribe">
      </form>
     </div>
    </footer>
</body>

</html>