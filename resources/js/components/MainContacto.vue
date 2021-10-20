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
    <div class="p-5 fondo-amarillo row align-items-center" style="height: 400px;">
      <h1 class="color-blanco negrita">CONTACTO</h1>
    </div>

    <div class="row p-5">
      <div class="col-12 col-md-6">
        <h5 class="amarillo-header negrita">HABLAR PARA INNOVAR</h5>
        <h1 class="negrita mb-4">A un click de la innovación</h1>
        <p class="gris-interedes">Sabemos que quiere saber más de esta gran empresa, ponemos a su disposición toda la información pertinente.</p>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="d-flex">
              <div>
                <img width="40" class="ms-3" src="../../assets/phone.png"/>
              </div>
              <div>
                <h5 class="negrita">MÓVIL</h5>
                <p class="gris-interedes">+57 317 501 74 69</p>
              </div>
            </div>
            <div class="d-flex">
              <div>
                <img width="40" class="ms-3" src="../../assets/mail.png"/>
              </div>
              <div>
                <h5 class="negrita">EMAIL</h5>
                <p class="gris-interedes">contacto@interedes.com.co</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="d-flex">
              <div>
                <img width="40" class="ms-3" src="../../assets/map.png"/>
              </div>
              <div>
                <h5 class="negrita">SEDE PRINCIPAL</h5>
                <p class="gris-interedes mb-0">Interedes SAS Bodega C7</p>
                <p class="gris-interedes mb-0">Parque industrial</p>
                <p class="gris-interedes mb-0">Palermo Kilómetro 2 vía</p>
                <p class="gris-interedes mb-0">Neiva -Palermo, Huila</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <img width="200" class="" src="../../assets/interedes.jpg"/>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="shadow p-5">
          <h5 class="negrita text-center">QUEREMOS ENTREGAR SOLUCIONES JUNTOS</h5>
          <p class="my-5 gris-interedes text-center">Nosotros nos encargaremos de generar los puentes necesarios para entablar esta gran relación.</p>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre y Apellido</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group mt-4">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group mt-4">
            <label for="exampleInputEmail1">Asunto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <button type="button" class="mt-5 btn btn-dark">ENVIAR</button>
        </div>
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
    console.log('hola contacto')
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
