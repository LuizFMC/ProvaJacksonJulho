<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}"> <!-- Aqui estou referenciando o seu arquivo style.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="body">
    <div class="container justify-content-between align-items-center">
        <header class="blog-header"> <!-- Adicionando a classe blog-header ao header -->
            <div class="img-css">
                <img src="https://m.media-amazon.com/images/I/71KooCemS1L.jpg" alt="logo" width="110" height="100">
            </div>
            <center>
                <div class="nav-nav">
                    <nav class="nav justify-content-space-around align-items-center">
                        <a class="nav-link" href="{{url("dieta")}}">Dieta</a>
                        <a class="nav-link" href="{{url("treino")}}">Treino</a>
                        <a class="nav-link" href="{{url("produto")}}">Produto</a>
                        <a class="nav-link" href="{{url("empresa")}}">Empresa</a>
                        <a class="nav-link" href="{{url("assinatura")}}">Assinatura</a>
  
                    </nav>
                </div>
            </center>
        </header>
    </div>
</body>
</html>
<body>

  <section class="container mt-5">
	 <div class="row">
      <div class="col-sm-6 col-sm-offset-1">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/img/Russel.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Russel</h5>
        <p>Ele tem 30% de gordura coporal.</p>
      </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/img/Joe.jpg" class="d-block w-100" alt="..." >
       <div class="carousel-caption d-none d-md-block">
       <h5>Esse é Joe</h5>
        <p>Ele tem cerca de 20% de gordura corporal.</p>
      </div>
      
    </div>
    <div class="carousel-item">
      <img src="/img/Axel.jpg" class="d-block w-100 h-100"  alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Esse é o Axel</h5>
        <p>Ele tem menos de 10% de gordural coporal, sem músculos.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
      <aside class="col-sm-4">
			<ol class="col-bg-6">
			   <p>
           O sedentarismo, caracterizado pela falta de atividade física regular, traz diversos malefícios à saúde. Entre eles, destacam-se o aumento do risco de doenças cardíacas, obesidade e problemas de postura. Ficar ativo é essencial para manter uma vida saudável e prevenir tais complicações.</p>
<p>
No primeiro slide podemos observar pessoas que não praticam nenhum tipo de atividade física e tem péssimos hábitos alimentares.
            </p>
          
        
      </ol>
      </aside>
   </div>
  </section>
      
  <section class="container mt-5">
	 <div class="row">
      <div class="col-sm-6 col-sm-offset-1">
            <div id="carouselExampleDark2" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/img/Marcos.jpg" class="d-block w-100" alt="..." >
       <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Marcos</h5>
        <p>Ele treina muay thai há 7 anos e faz academia 3 vezes por semana.</p>
      </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/img/Bernardo.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Bernardo</h5>
        <p>Ele pratica academia moderadamente 4 vezes na semana por 5 anos</p>
      </div>
      
    </div>
    <div class="carousel-item">
      <img src="/img/Renan.jpg" class="d-block w-100 h-100"  alt="...">
      <div class="carousel-caption d-none d-md-block" >
        <h5>Esse é Renan Vicente</h5>
        <p style="color: #3d5700; text-shadow: 1px 0px indianred;">Ele pratica natação competitivamente desde a infância e faz academia 2 vezes por semana</p>
      </div>
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
      <aside class="col-sm-4">
			<ol class="col-bg-6">
			   <p>
           A atividade física moderada na academia é uma abordagem equilibrada e sensata para o exercício, que se destaca por sua regularidade, mas não necessariamente por sua intensidade. Esse estilo de treinamento se concentra em manter uma rotina consistente de exercícios sem exigir esforços extremos ou extremamente vigorosos.</p>
          <p>  Nesse segundo slide, podemos ver pessoas que adquiriram um físico "bom" apenas tendo hábitos saudáveis moderados.
            </p>
          
        
      </ol>
      </aside>
   </div>
  </section>

  <section class="container mt-5">
	 <div class="row">
      <div class="col-sm-6 col-sm-offset-1">
            <div id="carouselExampleDark3" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/img/Michael.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Michael</h5>
        <p>Ele pratica musculação 6 vezes por semana de forma intensa tem mais de 7 anos.</p>
      </div>
      
    </div>
    <div  class="carousel-item" data-bs-interval="2000">
      <img src="/img/Icaro.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Icaro</h5>
        <p>Ele praticou calistenia por um ano na adolescencia e agora pratica musculação intensa 5 vezes por semana.</p>
      </div>
      
    </div>
    <div class="carousel-item">
      <img src="/img/Jeferson.jpg" class="d-block w-100 h-100"  alt="..." >
       <div class="carousel-caption d-none d-md-block">
        <h5>Esse é Jeferson</h5>
        <p>Ele praticou crossfit por 3 anos e atualmente pratica musculação 6 vezes por semana.</p>
    </div>
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
      <aside class="col-sm-4">
			<ol class="col-bg-6">
			   <p>
           A musculação frequente na academia é uma abordagem de treinamento físico que se concentra na hipertrofia muscular, força e desenvolvimento da composição corporal. Esse estilo de exercício é popular entre aqueles que desejam construir massa muscular magra, melhorar a resistência e alcançar uma aparência mais tonificada.</p>
          <p> Nesse terciero slide, podemos ver pessoas que praticam de forma frequente e constante a musculação na academia durante anos, levando à prática ao famoso esporte do <b>Fisiculturismo</b>.
            </p>
          
        
      </ol>
      </aside>
      <aside class="sidebar col-sm-1 d-block" style="width: 200px;">
  <div class="side-t ic-l decor col-bg-1 p-2"><span class="fa fa-dumbbell"></span>&nbsp;Gym Rats</div>
  <nav class="side-r col-bg-1 align-items-start">
    <a  href="{{url("login")}}">
      <i class="fas fa-angle-right"></i> Login <i class="fas fa-star"></i>
    </a>
    <a href="{{url("register")}}">
      <i class="fas fa-angle-right"></i> Cadastrar-se <i class="fas fa-star"></i>
    </a>
    <a  href="{{url("/dashboard")}}">
      <i class="fas fa-angle-right"></i> Dashboard <i class="fas fa-star"></i>
    </a>
  </nav>
</aside>
   </div>
  </section>    
        </main>

        <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center"">
                    <nav class="navbar">
                        <span class="navbar-text justify-content-between">
                            Siga-nos: &nbsp;
                        </span>
                        <!-- Ícone do Instagram usando Font Awesome -->
                        <a class="navbar-link" href="https://www.instagram.com/fernando315_/">
                            <i class="fab fa-instagram social-icons"></i>
                        </a>
                      <a class="navbar-link" href="https://www.facebook.com/luizfernandomeurer.costa">
                            <i class="fab fa-facebook social-icons"></i>
                        </a>
                       <a class="navbar-link" href="https://twitter.com/thebausffs">
                            <i class="fab fa-twitter social-icons"></i>
                        </a>
                    </nav>
                </div>
                <div class="col-md-6">
                    <!-- Outros links ou informações do footer -->
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>