<?php
include_once("./views/header.php");
?>     
    <main>
      <section class="container my-5 text-center">
          <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                  <h2 class="titulo-principal mb-4">Bienvenidos a la Red de Investigación del TecNM</h2>
                  <p class="parrafos-inicio text-muted">
                      Conectamos mentes brillantes para impulsar el avance científico y tecnológico. Nuestra red es un ecosistema colaborativo que une a investigadores, estudiantes y profesionales en diversas áreas de especialización, desde la ciencia de los materiales hasta la neurociencia aplicada.
                  </p>
                  <p class="parrafos-inicio text-muted">
                      Explora nuestras investigaciones, conoce a nuestros miembros y descubre cómo puedes formar parte de la próxima gran innovación.
                  </p>
              </div>
          </div>
      </section>

      <section>
          <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="images/banners/1.png" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item">
                      <img src="images/banners/2.jpg" class="d-block w-100" alt="..." />
                  </div>
                  <div class="carousel-item">
                      <img src="images/banners/3.jpg" class="d-block w-100" alt="..." />
                  </div>
              </div>

              <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExample"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>

              <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExample"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
      </section>

      <section class="container my-5">
          <h3 class="text-center mb-5 titulo-principal">Proyectos Destacados y Novedades</h3>
          <div class="row justify-content-center g-4">
              <div class="col-12 col-md-6 col-lg-4">
                  <div class="card h-100">
                      <img src="images/investigaciones/1.png" class="card-img-top" alt="Inv. Destacada 1" />
                      <div class="card-body d-flex flex-column">
                          <h5 class="card-title text-center">Mapeando la Materia Oscura</h5>
                          <p class="card-text">
                              Explora cómo la materia oscura da forma al universo. Con simulaciones y observación de galaxias, nuestro equipo busca revelar la arquitectura oculta del cosmos.
                          </p>
                          <a href="investigaciones.php" class="btn btn-primary mt-auto align-self-center">Ver investigación</a>
                      </div>
                  </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                  <div class="card h-100">
                      <img src="images/investigaciones/2.jpg" class="card-img-top" alt="Inv. Destacada 2" />
                      <div class="card-body d-flex flex-column">
                          <h5 class="card-title text-center">Nanomateriales Solares</h5>
                          <p class="card-text">
                              Estamos superando las barreras de eficiencia de las células solares de perovskita. Nuestro trabajo busca optimizar esta tecnología para un futuro más sostenible.
                          </p>
                          <a href="investigaciones.php" class="btn btn-primary mt-auto align-self-center">Ver investigación</a>
                      </div>
                  </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                  <div class="card h-100">
                      <img src="images/congresos/evento1.jpg" class="card-img-top" alt="Evento Destacado 1" />
                      <div class="card-body d-flex flex-column">
                          <h5 class="card-title text-center">Simposio de IA en Medicina</h5>
                          <p class="card-text">
                              Participa en nuestro próximo simposio sobre inteligencia artificial en diagnósticos médicos y telemedicina. ¡No te lo pierdas!
                          </p>
                          <a href="congresos.php" class="btn btn-primary mt-auto align-self-center">Más información</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="container my-5">
          <div class="text-center p-5 rounded-3" style="background-color: #f0f8ff;">
              <h3 class="display-6 mb-3">Únete a nuestra Red de Investigación</h3>
              <p class="parafos-inicio">¿Eres un investigador, estudiante o profesional interesado en colaborar? Descubre las oportunidades que te esperan.</p>
              <a href="contacto.php" class="btn btn-lg btn-secondary">Contacta con nosotros</a>
          </div>
      </section>

    </main>
<?php
include_once("./views/footer.php");
?>       