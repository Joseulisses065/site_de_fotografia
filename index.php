<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina inicial</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/inicio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="icon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--cobeçalho do site-->
    <header>
        <a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#familia">Familia</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#fotografos">Fotografos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>


        </div>
    </header>



    <!--corpo principal ode ficam as seções do site-->
    <main>

        <!--seção inicial do site-->

        <section class="inicio" id="inicio">
            <div class="inicio-texto">
                <h1>Conhecendo Lugares</h1>
                <h2>Atraves de cada foto</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam totam recusandae consequatur fugit,
                    atque, esse dolores a neque delectus sunt quos </p>
                <button class="btn">
                    <a href="./tipos.php">Conhecer</a>
                </button>
            </div>
            <div class="inicio-imagem">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>


            </div>
        </section>

        <!--seção familia-->
        <section class="familia" id="familia">
            <div class="familia-imagem">
                <a><img src="img/page2-img-01.jpg" alt=""></a>
                <a><img src="img/page2-img-02.jpg" alt=""></a>
                <a><img src="img/page2-img-03.jpg" alt=""></a>
                <a><img src="img/page2-img-04.jpg" alt=""></a>

            </div>
            <div class="familia-texto">
                <h2>Fuja da rotina</h2>
                <h1>Viaje em familia</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, debitis! Omnis quod ipsa atque
                    laudantium</p>
                <button class="btn"><a href="./tipos.php#familia">Saber mais</a></button>

            </div>


        </section>

        <!--seção blog do site-->
        <section class="blog" id="blog">
            <div class="texto-centro">
                <h2>Conheça cada lugar sem sair de casa</h2>
                <h1>Ultimas do blog</h1>
            </div>
            <div class="blog-imagem">


                <div class="card">
                    <div class="img-card">
                        <img src="img/page2-img-01.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>


                </div>

                <div class="card">
                    <div class="img-card">
                        <img src="img/familia-1.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>


                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="img/page2-img-02.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="img/page2-img-04.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>


                </div>

                <div class="card">
                    <div class="img-card">
                        <img src="img/page2-img-01.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>


                </div>
                <div class="card">
                    <div class="img-card">
                        <img src="img/familia-1.jpg" alt="">
                    </div>
                    <div class="texto-card">
                        <h3>21/02/2022</h3>
                        <h2>lorem sdhsdh djdkl</h2>
                        <p>Lorem ipsum dolor sit adipisicing elit. Voluptate molestias quis, eaque qu</p>
                        <a href="/conteudo1.php" class="lermais">leia mais</a>

                    </div>
                </div>


            </div>


        </section>

        <!--seção fotografos do site-->

        <section class="fotografos" id="fotografos">
            <div class="texto-centro">
                <h2>Nosso time trabalhando para você</h2>
                <h1>fotografos experientes</h1>
            </div>
            <div class="fotografos-imagem">
                <a href="./pages/fotografos/fotografo-emanuele.php"><img src="img/fotografos-1.jpg" alt=""></a>
                <a href="./pages/fotografos/fotografo-amanda.php"><img src="img/fotografos-2.jpg" alt=""></a>
                <a href="./pages/fotografos/fotografo-jonas.php"><img src="img/fotografos-3.jpg" alt=""></a>

            </div>

            <!--seção de propagandas do site-->

        </section>
        <section class="anuncio">
            <a href=""><img src="img/prpaganda.png" alt=""></a>
        </section>

        <!--seção locais do site-->
        <section class="locais">
            <div class="texto-centro">
                <h2>Logares incriveis para</h2>
                <h1>Todas a familia</h1>
            </div>
            <div class="tipos">
                <div class="tipo">
                    <div class="img-tipos">
                        <img src="img/family.png" alt="">

                    </div>
                    <div class="texto-tipos">
                        <a href="./tipos.php#familia">Familia</a>
                    </div>
                </div>
                <div class="tipo">
                    <div class="img-tipos">
                        <img src="img/feijoada.png" alt="">

                    </div>
                    <div class="texto-tipos">
                        <a href="./tipos.php#comida">Comida</a>
                    </div>
                </div>

                <div class="tipo">
                    <div class="img-tipos">
                        <img src="img/sports (1).png" alt="">

                    </div>
                    <div class="texto-tipos">
                        <a href="./tipos.php#esportes">Esportes</a>
                    </div>
                </div>

                <div class="tipo">
                    <div class="img-tipos">
                        <img src="img/culturas.png" alt="">

                    </div>
                    <div class="texto-tipos">
                        <a href="./tipos.php#cultura">Cultura</a>
                    </div>
                </div>


            </div>


        </section>

        <!--seção contatos do site-->
        <section class="contato" id="contato">

            <div classe="contatenos">
                <h3>Contate-nos</h3>
                <ul>
                    <li class="cont-li">sulisses111@gmail.com</li>
                    <li class="cont-li">(88) 9 98987-6509</li>
                    <li class="redes-sociais"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </li>


                </ul>
            </div>

            <div class="navegacao">
                <h3>Navegação</h3>
                <ul>
                    <li class="cont-li"><a href="#inicio">Inicio</a></li>
                    <li class="cont-li"><a href="#familia">Familia</a></li>
                    <li class="cont-li"><a href="#blog">Blog</a></li>
                    <li class="cont-li"><a href="#fotografos">Fotografos</a></li>
                    <li class="cont-li"><a href="#contato">Contato</a></li>

                </ul>
            </div>

            <div class="colaboradores">
                <h3>Colaboradores</h3>
                <ul>
                    <li class="cont-li">marca1</li>
                    <li class="cont-li">marca2</li>
                    <li class="cont-li">marca3</li>
                    <li class="cont-li">marca4</li>

                </ul>
            </div>
        </section>



    </main>

    <!--rodapé do site-->
    <footer>
        <p>&copy Lorem ipsum dolor sit amet</p>

    </footer>
    <script src="js/java.js" type="text/javascript"></script>
</body>

</html>