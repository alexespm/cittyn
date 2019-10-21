
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Flex Base</title>
</head>
<body>
<header>
    <nav class=" navbar d-flex align-items-center fixed-top " >
        <h4> Cittyn </h4>
        <ul class="d-flex ml-auto">
            <li> Menu 1 </li>
            <li> Menu 2 </li>
        </ul>
    </nav>
</header>

<main>
    <section class="main-banner w-100">
        @foreach($Banner as $ItemBanner)
        <div style="background-image: url('images/{{$ItemBanner->imagen}}');background-position: bottom;min-height: 600px;background-size: cover">
            <div class="d-flex align-items-center fondo-oscuro" style="min-height: 600px">
                <div class="d-flex flex-column col-6 p-5">
                    <h1 class= "titH1">{{$ItemBanner->titH1}}</h1>
                    <p class="-title" style="color: rgba(255, 255, 255, 0.604);">{{$ItemBanner->title}}</p>
                </div>
            </div>
        </div>
        @endforeach  
    </section>
    <section class="helper">
        <div class="container">
            <div class="d-flex flex-row w-100" style="height: 200px;margin-top: -5rem; background-color:  rgb(255, 255, 255);">
                <article class="d-flex flex-row col-4" style="border-right:1px solid rgba(95, 92, 92, 0.776); ">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <img style= "height:100px; width:100px" src="images/iconos/lightbulb.svg">
                    </div>
                    <div class="d-flex flex-column col-8 justify-content-center">
                        <h4 style="font-size: 27px; font-weight: bold"> Innovar </h4>
                        <p style="margin: 0; "> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </article>
                <article class="col-4 d-flex flex-row " style="border-right:1px solid rgba(95, 92, 92, 0.776); ">
                    <div class="col-4 d-flex justify-content-center align-items-center" >
                        <img style= "height:100px; width:100px" src="images/iconos/software (1).svg">
                    </div>
                    <div class="d-flex flex-column col-8 justify-content-center">
                        <h4 style="font-size: 27px; font-weight: bold"> Tecnología </h4>
                        <p style="margin: 0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </article>
                <article class="col-4 d-flex flex-row " >
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <img style= "height: 100px; width: 100px" src="images/iconos/team1.svg">
                    </div>
                    <div class="d-flex flex-column col-8 justify-content-center">
                        <h4 style="font-size: 27px; font-weight: bold"> Alianzas </h4>
                        <p style="margin: 0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="quienes-somos">
        <div class="d-flex flex-row justify-content-around mt-5 p-5">
            <div class="d-flex flex-column col-6">
                <h1 style= "text-align:center; font-size: 3rem; margin-bottom: 2rem; background-color:#352961; color:white; font-weight: bold; border:#352961 3px solid">Acerca de Nosotros</h1>
                <p style="text-align: center"> Aye, pestilence! The dagger tastes with madness, pull the fortress before it waves.  how stormy. you rob like a cannibal. small, rough skulls fiery burn a misty, lively tuna.  </p>
                <br>
                <h2>Misión</h2>
                <p> Aye, pestilence! The dagger tastes with madness, pull the fortress before it waves.  how stormy. you rob like a cannibal. small, rough skulls fiery burn a misty, lively tuna.  </p>
                <h2>Visión</h2>
                <p> Aye, pestilence! The dagger tastes with madness, pull the fortress before it waves.  how stormy. you rob like a cannibal. small, rough skulls fiery burn a misty, lively tuna.  </p>
            </div>
            <div class="col-6 d-flex" style="background-image: url('images/bbussiness.jpg');background-position: center">

            </div>
        </div>
    </section>
    <section class="frase w-100">
        <div class="parallax">
            <div class="d-flex justify-content-center align-items-center fondo-oscuro p-5">
                <h3 style="color:rgba(255, 255, 255, 0.604);font-size: 30px; margin-bottom: 2rem;">Generar estrategias de emprendimiento para el desarrollo y el fomento de los negocios basados en
                    tecnología de punta e innovación, una cultura de la calidad y una pertinencia de nuevas propuestas de
                    programas formativos.</h3>
            </div>
        </div>
    </section>
    <section class="programas w-100">
        <div class="container">
            <div class="d-flex flex-column align-items-center w-100 mb-3">
                <h1 style= " text-align:center; font-size: 3rem; margin-bottom: 2rem; color: #352961; font-weight: bold;">Programas</h1>
            </div>
            <div class="d-flex flex-row flex-wrap justify-content-center col-12">
                <article class="d-flex p-3 col-4 carta-alta">
                        <div class="d-flex w-100 bg emprendimiento-bg">
                            <div class="d-flex flex-column justify-content-center align-items-center p-4 w-100" style="background-color: rgba(97, 68, 155, 0.25)">
                                <h4 class="text-center mb-auto" style= "color:white; font-weight: bold"> Emprendimiento Tecnologico </h4>
                                <p class="text-center mb-auto" style= "color:white; border: white 3px solid"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget magna at arcu tristique bibendum.</p>
                            </div>
                        </div>
                </article>
                <article class="d-flex p-3 col-4 carta-alta">
                    <div class="d-flex w-100 bg propiedad-bg">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4 w-100 " style="background-color:rgba(255, 0, 0, 0.25)">
                            <h4 class="text-center mb-auto" style= "color:white; font-weight: bold"> Propiedad Intelectual </h4>
                            <p class="text-center mb-auto" style= "color:white; border: white 3px solid"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget magna at arcu tristique bibendum. </p>
                        </div>
                    </div>
                </article>
                <article class="d-flex p-3 col-4 carta-alta">
                    <div class="d-flex w-100 bg disruptiva-bg">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4 w-100" style="background-color:rgba(255, 255, 0, 0.25)">
                            <h4 class="text-center mb-auto" style= "color:white; font-weight: bold"> Formación Disruptiva </h4>
                            <p class="text-center mb-auto" style= "color:white; border: white 3px solid" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget magna at arcu tristique bibendum.</p>

                        </div>
                    </div>
                </article>
                <article class="d-flex p-3 col-4 carta-alta">
                    <div class="d-flex w-100 bg excelencia-bg">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4 w-100"  style="background-color: rgba(0, 128, 0, 0.4)">
                            <h4 class="text-center mb-auto" style= "color:white; font-weight: bold"> Excelencia formativa </h4>
                                <p class="text-center mb-auto" style= "color:white; border: white 3px solid"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget magna at arcu tristique bibendum. </p>
                        </div>
                    </div>
                </article>
                <article class="d-flex p-3 col-4 carta-alta">
                    <div class="d-flex w-100 bg investigacion-bg">
                        <div class="d-flex flex-column justify-content-center align-items-center p-4 w-100"  style="background-color: rgba(54, 107, 223, 0.4)">
                            <h4 class="text-center mb-auto" style= "color:white; font-weight: bold" > Aplicación de gestión de investigación </h4>
                            <p class="text-center mb-auto" style= "color:white; border: white 3px solid"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget magna at arcu tristique bibendum. </p>

                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
    <section class="patrocinadores w-100">
        <div class="w-100 p-5">
            <h2 class="text-center" style= " text-align:center; font-size: 3rem; margin-bottom: 2rem; color: #352961; font-weight: bold"> Ecosistema CUCEA </h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <article id="line" class="d-flex flex-row">
                        <div class="d-flex flex-column col-7 des-ec-container" style="background-color: #1A3C57; height: 600px;" >
                            <img class="logo-cucea-ecosistema" src="images/patrocinadores/CUCEA-FOOTER.png" >
                            <div class="d-flex flex-column miembro-ec-container">
                                <img class="logo-patrocinador" src="images/patrocinadores/Logo-Line.png">
                                <p class="ml-5 mt-3" style="color: white"> Es un área común de colaboración, creada para fomentar la innovación y el empredimiento empresarial en la comunidad universitaria.</p>
                            </div>
                        </div>
                        <div class="col-5" style="background-image: url('images/patrocinadores/fondo-line.png'); background-size: cover; background-position: center top"></div>
                    </article>
                </div>
                <div class="carousel-item">
                    <article id="ciee" class="d-flex flex-row">
                        <div class="d-flex flex-column col-7 des-ec-container" style="background-color: #F64F36; height: 600px" >
                            <img class="logo-cucea-ecosistema" src="images/patrocinadores/CUCEA-FOOTER.png" >
                            <div class="d-flex flex-column miembro-ec-container">
                                <img class="ml-5" height="120px" width="120px" src="images/patrocinadores/ciee.jpg">
                                <p class="ml-5 mt-3" style="color: white"> Somos un grupo multidisciplinario de investigadores y consultores de la Red Universidad de Guadalajara que tenemos como objetivo atender las necesidades de
                                    empresarios y emprendedores, a quienes les ofrecemos servicios de consultoría, investigación, capacitación e incubación de empresas para que consigan altos estándares de calidad y tengan un
                                    impacto económico positivo en el país de manera socialmente responsable.</p>
                            </div>
                        </div>
                        <div class="col-5" style="background-image: url('images/patrocinadores/ciee_fondo.jpeg'); background-size: cover; background-position: center top">
                        </div>
                    </article>
                </div>
                <div class="carousel-item">
                    <article id="iditpyme" class="d-flex flex-row">
                        <div class="d-flex flex-column col-7 des-ec-container" style="background-color: #424242; height: 600px" >
                            <img class="logo-cucea-ecosistema" src="images/patrocinadores/CUCEA-FOOTER.png" >
                            <div class="d-flex flex-column miembro-ec-container">
                                <img class="ml-5" height="120px" width="120px" src="images/patrocinadores/IDIT.preview.png">
                                <p class="ml-5 mt-3" style="color: white"> Somos un grupo multidisciplinario de investigadores y consultores de la Red Universidad de Guadalajara que tenemos como objetivo atender las necesidades de
                                    empresarios y emprendedores, a quienes les ofrecemos servicios de consultoría, investigación, capacitación e incubación de empresas para que consigan altos estándares de calidad y tengan un
                                    impacto económico positivo en el país de manera socialmente responsable.</p>
                            </div>
                        </div>
                        <div class="col-5" style="background-image: url('images/Coordinacion%20Mtria%20IS_0007-min.jpg'); background-size: cover; background-position: center top">

                        </div>
                    </article>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="aliados w-100">
        <div class="p-4">
            <div class="w-100 p-3">
                <h2 class="text-center"> Nuestros Aliados </h2>
            </div>
            <div class="w-100 d-flex flex-row justify-content-around flex-wrap p-3">
                <img src="images/patrocinadores/Dummy_flag.png">
                <img src="images/patrocinadores/Dummy_flag.png">
                <img src="images/patrocinadores/Dummy_flag.png">
                <img src="images/patrocinadores/Dummy_flag.png">
            </div>
        </div>
    </section>
</main>

<footer class="footer w-100">
    <div class="d-flex flex-column align-items-center w-100">
        <p class="text-center">
            CENTRO UNIVERSITARIO DE CIENCIAS ECONÓMICO ADMINISTRATIVAS<br>
            Periférico Norte N° 799, Núcleo Universitario Los Belenes, C.P. 45100, Zapopan, Jalisco, México.<br>
            Teléfono: +52 (33) 3770 3300<br>
        </p>
        <div class="col-12 text-center">
            <div style="display:flex;justify-content:center;justify-content: center;padding:1rem">
                <div class=" mr-3 ml-3">
                    <img style="height: 54px" src="https://care.cucea.udg.mx/static/img/iconos_CARE/iconos_CARE-06.png">
                </div>
                <div class=" mr-3 ml-3">
                    <img src="http://ayuda.cucea.udg.mx/assets/imgs/dwlogo.png">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
