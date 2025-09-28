<?php
include_once("./views/header.php");
?> 
    <main>

      <section>
        <div class="tarjeta-contacto">
          <h2 class="text-center titulo-principal">Red de Investigación del TecNM</h2>  
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
              <p class="text-center">
                Tel: <a href="tel:+524611409377">4611409377</a>
              </p>
              <p class="text-center">
                Email: <a href="mailto:22030344@itcelaya.edu.mx">22030344@itcelaya.edu.mx</a>
              </p>
              
              <fieldset class="mb-4">
                <legend class="text-center">Formulario de Contacto</legend>
                <form action="enviarmensaje.php" method="get">
                  <div class="mb-3">
                    <label for="nombre" class="etiqueta-form">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre completo" required />
                  </div>

                  <div class="mb-3">
                    <label for="email" class="etiqueta-form">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required />
                  </div>

                  <div class="mb-3">
                    <label for="institucion" class="etiqueta-form">Institución o afiliación</label>
                    <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Nombre de tu universidad o empresa" />
                  </div>

                  <div class="mb-3">
                    <label for="tipo" class="etiqueta-form">Área de interés</label>
                    <select class="form-select" id="tipo" name="tipo" required>
                      <option selected disabled value="">Selecciona una opción</option>
                      <option value="materia-oscura">Materia Oscura</option>
                      <option value="nanomateriales">Nanomateriales</option>
                      <option value="neurociencia">Neurociencia</option>
                      <option value="colaboracion">Colaboración</option>
                      <option value="otro">Otro</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="mensaje" class="etiqueta-form">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Describe tu consulta, sugerencia o propuesta de colaboración." required></textarea>
                  </div>

                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="consentimiento" required>
                    <label class="form-check-label" for="consentimiento">Acepto que la red de investigación me contacte.</label>
                  </div>

                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                  </div>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </section>

    </main>
<?php
include_once("./views/footer.php");
?>    