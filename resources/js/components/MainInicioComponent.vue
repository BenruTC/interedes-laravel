<template>
  <div>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-header">
      <div class="container-fluid mx-lg-4 mt-1">
        <a class="navbar-brand" href="#">
          <img src="../../assets/logo-interedes.png" alt="" class="size-logo d-inline-block align-text-top">
        </a>
        <div class="ms-5 ocultar-telefono" style="">
          <p class="m-0 gris-interedes">Contacto</p>
          <div class="d-flex gris-interedes cursor-pointer negrita">
            <i class="material-icons" style="margin-right: 10px;">call</i>
            <p class="m-0 gris-interedes">+57 3175017469</p>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link letras-header negrita" v-on:click="irInicio()">INICIO</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link letras-header negrita" href="#">DESARROLLO</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link letras-header negrita" v-on:click="irContacto()" href="#">CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../assets/Banner-1.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../../assets/Banner-600.jpg" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel end -->
    <div class="row">
      <div class="col-12 col-md-3 py-2 py-md-5">
        <div class="d-flex align-items-center justify-content-center">
          <div class="me-3">
            <img width="50" height="50" src="../../assets/icon-call.png" alt="" class="d-inline-block align-text-top">
          </div>
          <div>
            <h5 class="mb-1">CONTACTO</h5>
            <p class="mb-0 gris-interedes">contacto@interedes.com.co</p>
            <p class="mb-0 gris-interedes">Móvil: +57 3175017469</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 py-2 py-md-5">
        <div class="d-flex align-items-center justify-content-center">
          <div class="me-3">
            <img width="40" height="50" src="../../assets/icon-map.png" alt="" class="d-inline-block align-text-top">
          </div>
          <div>
            <h5 class="mb-1">LOCACIÓN</h5>
            <p class="mb-0 gris-interedes">Bodega C7 Parque industrial</p>
            <p class="mb-0 gris-interedes">Palermo Km 2 vía Palermo</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 ocultar-movil">
        <div class="row mx-md-4 style-card-inicio">
          <div class="col-12 col-md-6 fondo-amarillo py-5">
            <div class="d-flex justify-content-center">
              <img width="60" height="60" src="../../assets/icon-world.png" alt="" class="d-inline-block align-text-top">
            </div>
            <div class="d-flex justify-content-center">
              <p class="color-blanco mb-0 text-center">PRESENCIA NACIONAL E INTERNACIONAL</p>
            </div>
          </div>
          <div class="col-12 col-md-6 fondo-amarillo py-5">
            <div class="d-flex justify-content-center">
              <img width="60" height="60" src="../../assets/icon-tec.png" alt="" class="d-inline-block align-text-top">
            </div>
            <div class="d-flex justify-content-center">
              <p class="color-blanco mb-0 text-center">AVANCES TECNOLÓGICOS</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 ocultar-desktop">
        <div class="row mx-md-4">
          <div class="col-12 col-md-6 fondo-amarillo">
            <div class="d-flex justify-content-center">
              <img width="60" height="60" src="../../assets/icon-world.png" alt="" class="d-inline-block align-text-top">
            </div>
            <div class="d-flex justify-content-center">
              <p class="color-blanco mb-0 text-center">PRESENCIA NACIONAL E INTERNACIONAL</p>
            </div>
          </div>
          <div class="col-12 col-md-6 fondo-amarillo">
            <div class="d-flex justify-content-center">
              <img width="60" height="60" src="../../assets/icon-tec.png" alt="" class="d-inline-block align-text-top">
            </div>
            <div class="d-flex justify-content-center">
              <p class="color-blanco mb-0 text-center">AVANCES TECNOLÓGICOS</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 1 -->
    <div class="row mt-5">
      <div class="mt-md-4 col-12 col-md-6 d-flex justify-content-center">
        <img src="../../assets/foto-interedes-1.jpg" alt="" class="d-inline-block align-text-top foto-interedes-1">
      </div>
      <div class="mt-md-4 col-12 col-md-6">
        <h5 class="amarillo-header negrita">Pensando en el futuro, con investigación en el presente.</h5>
        <h1 class="negrita mb-4">Somos Interedes SAS, comprometidos con el avance tecnológico.</h1>
        <div class="row">
          <div class="col-12 col-md-5">
            <div>
              <div class="d-flex">
                <i class="material-icons gris-interedes" style="">check_box</i>
                <p class="negrita ms-2">INVESTIGACIÓN</p>
              </div>
              <p class="gris-interedes">Centro de I+D+i, avance científico de calidad, reflejado en tangibles de alta utilidad.</p>
            </div>
            <div class="mt-4">
              <div class="d-flex">
                <i class="material-icons gris-interedes" style="">check_box</i>
                <p class="negrita ms-2">DESARROLLO</p>
              </div>
              <p class="gris-interedes">Desarrollo de aplicativos a la medida que generan valor en empresas tanto del sector público como del privado.</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="style-borde p-3">
              <p class="gris-interedes">
                Diariamente Interedes aporta a la construcción de estilos de vida de alta calidad, mediante el desarrollo de aplicativos y sistemas de información. Con un profundo sentido de pertenecía por lo regional, con la mirada puesta en lo internacional.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 2 -->
    <div class="row">
      <div class="col-12 px-5">
        <div class="negro py-5">
          <h5 class="amarillo-header negrita mt-5 text-center">MÁS DE 7 AÑOS ENTREGANDO VALOR</h5>
          <h1 class="negrita color-blanco mb-4 text-center">Somos productos innovadores, con razón de ser</h1>
          <p class="color-blanco mb-0 text-center">Múltiples proyectos que significan la creación constante de nuevos</p>
          <p class="color-blanco text-center">paradigmas con el fin de mejorar muchas vidas.</p>
        </div>
      </div>
    </div>
    <!-- Section 3 -->
    <div class="row p-3 ocultar-movil style-card-apps">
      <div class="col-12 col-md-3">
        <div class="shadow" style="height: 100%;">
          <div class="d-flex justify-content-center">
            <img style="width:100%;" src="../../assets/app1.jpg" alt="" class="d-inline-block align-text-top">
          </div>
          <div class="p-3">
            <h5 class="amarillo-header negrita text-center">AGRICULTURAPP</h5>
            <p class="text-center gris-interedes">Solución que integra al productor y comprador de productos del agro colombiano. Añadiendo contabilidad básica y asistencia técnica en los cultivos.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="shadow" style="height: 100%;">
          <div class="d-flex justify-content-center">
            <img style="width:100%;" src="../../assets/app2.jpg" alt="" class="d-inline-block align-text-top">
          </div>
          <div class="p-3">
            <h5 class="amarillo-header negrita text-center">SAMI</h5>
            <p class="text-center gris-interedes">Aplicativo que permite la supervisión de los funcionarios en terreno, automatiza la recolección de información, gestiona tiempos y permite la eficacia de operarios.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="shadow" style="height: 100%;">
          <div class="d-flex justify-content-center">
            <img style="width:100%;" src="../../assets/app3.jpg" alt="" class="d-inline-block align-text-top">
          </div>
          <div class="p-3">
            <h5 class="amarillo-header negrita text-center">SMART SALES</h5>
            <p class="text-center gris-interedes">Plataforma que administra la relación con los clientes, mediante un centro de comunicaciones, en el cual confluyen las distintas redes sociales.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="shadow" style="height: 100%;">
          <div>
            <img style="width:100%;" src="../../assets/app4.jpg" alt="" class="d-inline-block align-text-top">
          </div>
          <div class="p-3">
            <h5 class="amarillo-header negrita text-center">VICLASS</h5>
            <p class="text-center gris-interedes">Software de gestión de aprendizaje que permite la creación y gestión de entornos de aprendizaje on-line de manera fácil y automatizada.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 4 -->
    <div class="mt-5 p-5" style="background-color: #f9f9f9;">
      <div>
        <h5 class="amarillo-header negrita text-center">¿QUIÉNES SOMOS?</h5>
        <h1 class="negrita mb-4 text-center">Somos talento con valores desde adentro</h1>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-4">
          <div class="mb-5 ms-3">
            <div class="d-flex align-items-center justify-content-end">
              <h5 class="negrita text-center">PERSPECTIVA GLOBAL</h5>
              <img class="ms-3" src="../../assets/1.png"/>
            </div>
            <p class="text-end gris-interedes">Nuestra base es local, nuestros productos son de talla mundial.</p>
          </div>
          <div class="">
            <div class="d-flex align-items-center justify-content-end">
              <h5 class="negrita text-center">CALIDAD DE VIDA</h5>
              <img class="ms-3" src="../../assets/2.png"/>
            </div>
            <p class="text-end gris-interedes">Estamos comprometidos con el cambio, somos parte de él.</p>
          </div>
        </div>
        <div class="col-12 col-md-4">

        </div>
        <div class="col-12 col-md-4">
          <div class="mb-5">
            <div class="d-flex align-items-center justify-content-start">
              <img class="me-3" src="../../assets/3.png"/>
              <h5 class="negrita text-center">SOLUCIONES INNOVADORAS</h5>
            </div>
            <p class="text-start gris-interedes">Creamos y desarrollamos aplicativos y sitios web de alta calidad.</p>
          </div>
          <div class="">
            <div class="d-flex align-items-center justify-content-start">
              <img class="me-3" src="../../assets/4.png"/>
              <h5 class="negrita text-center">CRECIMIENTO EXPONENCIAL</h5>
            </div>
            <p class="text-start gris-interedes">Nunca paramos, crecemos a medida que innovamos.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row negro pt-5 px-5">
      <div class="col-12 col-md-4">
        <div class="d-flex">
          <div class="me-5">
            <h1 class="amarillo-header negrita text-center">60</h1>
            <p class="text-center color-blanco">LOGROS ALCANZADOS</p>
          </div>
          <div>
            <h1 class="amarillo-header negrita text-center">15</h1>
            <p class="text-center color-blanco">CLIENTES SATISFECHOS</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <img class="" style="margin-top: -320px;" src="../../assets/interedescol.png"/>
      </div>
      <div class="col-12 col-md-4">
        <div class="d-flex">
          <div class="me-5">
            <h1 class="amarillo-header negrita text-center">6</h1>
            <p class="text-center color-blanco">RECONOCIMIENTOS</p>
          </div>
          <div>
            <h1 class="amarillo-header negrita text-center">200</h1>
            <p class="text-center color-blanco">COLABORADORES</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 5 -->
    <div class="row mt-5 px-5">
      <div class="col-12 col-md-6 mt-5">
        <h5 class="amarillo-header negrita">Premio Ingenio Colombia- 2018</h5>
        <h1 class="negrita mb-4">Reconocimiento a resultados innovadores.</h1>
        <span class="gris-interedes">
          Mediante el desarrollo tecnológico de <strong>AgriculturApp</strong>, nos hicimos merecedores del premio <strong>Ingenio Colombia 2018, Categoría: Mayor impacto masivo .</strong> Esto se debe a la alta calidad de vida que los productores del Agro Colombiano obtienen, a través de la gestión comercial y contable, el control de plagas y más funcionalidades del aplicativo.
        </span>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
        <img width="300" height="400" src="../../assets/prize.png" alt="" class="d-inline-block align-text-top">
      </div>
    </div>
    <!-- Footer -->
    <footer id="footer" class="negro pt-5" style="margin-top:100px;">
      <div class="px-5">
        <div class="row">
          <div class="col-lg-3">
            <div>
              <div class="ms-4">
                <img width="150" height="45" src="../../assets/logo-interedes.png" alt="" class="d-inline-block align-text-top">
              </div>
              <p class="color-blanco">Diariamente creamos valor mediante el desarrollo de aplicativos y sistemas de información.</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div>
              <h5 class="amarillo-header negrita">COMUNICACIÓN</h5>
              <p class="color-blanco mb-0">Horario de atención:</p>
              <p class="color-blanco mb-0">7:00 a.m. a 5:30 p.m.</p>
              <p class="color-blanco mb-0">Móvil: +573175017469</p>
              <p class="color-blanco mb-0">contacto@interedes.com.co</p>
            </div>
          </div>
          <div class="col-lg-3 color-blanco">
            <div>
              <h5 class="amarillo-header negrita">LINKS DE ACCESO</h5>
              <span class="d-flex">
                <i class="material-icons amarillo-header" style="margin-right: 10px;">add</i>
                <p class="color-blanco mb-0 color-links cursor-pointer">Inicio</p>
              </span>
              <span class="d-flex">
                <i class="material-icons amarillo-header" style="margin-right: 10px;">add</i>
                <p class="color-blanco mb-0 color-links cursor-pointer">Desarrollo</p>
              </span>
              <span class="d-flex">
                <i class="material-icons amarillo-header" style="margin-right: 10px;">add</i>
                <p class="color-blanco mb-0 color-links cursor-pointer">Centro de investigación</p>
              </span>
              <span class="d-flex">
                <i class="material-icons amarillo-header" style="margin-right: 10px;">add</i>
                <p class="color-blanco mb-0 color-links cursor-pointer">Contacto</p>
              </span>
            </div>
          </div>
          <div class="col-lg-3 color-blanco">
            <div>
              <h5 class="amarillo-header negrita">REDES SOCIALES</h5>
              <p class="color-blanco mb-0">Encuentranos en:</p>
              <div class="d-flex mt-3">
                <img src="../../assets/facebook.png" class="me-2" height="25">
                <img src="../../assets/twitter.png" class="me-2" height="25">
                <img src="../../assets/youtube.png" class="me-2" height="25">
              </div>
            </div>
          </div>
          <hr class="mt-3" style="color: white;"/>
        </div>
      </div>
      <!-- Copyright -->
      <div class="text-center py-2 mt-4">
        <p class="color-blanco">© 2021Todos los derechos reservados. INTEREDES S.A.S.</p>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
</template>
<script>
export default{
  data(){
    return{
      url_base: Laravel.baseUrl,
    }
  },
  created(){
  },
  mounted(){
    console.log('hola mundo')
  },
  methods:{
    irInicio(){
      window.location.href = this.url_base+"";
    },
    irContacto(){
      window.location.href = this.url_base+"contacto";
    }
  }
}
</script>
<style>
</style>
