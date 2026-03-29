<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de Estilizado con Bootstrap</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" hreft="css/boostrap.min.css">

</head>
<body>

    <header>
        <h1 class="text-center text-primary fst-italic">Práctica de Estilizado con Bootstrap</h1>
        <p class= "fs-5 text-center">
            En esta actividad deberás aplicar clases de Bootstrap para mejorar la
            presentación de los elementos de esta página
        </p>
    </header>

    <main>
        <section>
            <h2 class ="text-center text-secondary fst-italic">Tipografía</h2>
            <p class= "fs-5 text-center">
                Bootstrap permite dar formato al texto de manera rápida y ordenada.
                En esta sección puedes aplicar estilos al título, subtítulo y párrafos.
            </p>
            <p class= "fs-5 text-center">
                También puedes resaltar información importante y mejorar la alineación
                del contenido para hacerlo más atractivo visualmente.
            </p>
        </section>




        <section>
    <div class="container text-center">
  <div class="row g-2 justify-content-center">

    <div class="col-sm-12 col-md-6 col-lg-3">
      <div class="p-3">
        <button type="button" class="btn btn-success w-100">Guardar</button>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
      <div class="p-3">
        <button type="button" class="btn btn-secondary w-100">Editar</button>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
      <div class="p-3">
        <button type="button" class="btn btn-danger w-100">Eliminar</button>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
      <div class="p-3">
        <button type="button" class="btn btn-dark w-100">Cancelar</button>
      </div>
    </div>

  </div>
</div>
        </section>




        <section>
            <div class="container mt-4">

  <div class="row">
    <div class="col-12">
      <h2 class="text-center text-secondary fst-italic">Tabla de estudiantes</h2>
      <p class="fs-5 text-center">
        Da formato a la siguiente tabla usando las clases de Bootstrap para
        mejorar su legibilidad y presentación.
      </p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-10 col-lg-8">

      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">

          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Carrera</th>
              <th>Promedio</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Luis Gutierrez</td>
              <td>Informatica Educativa</td>
              <td>100</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Victor Miamor</td>
              <td>Informática Educativa</td>
              <td>60</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Suneida Pancho</td>
              <td>Ingeniería en Sistemas</td>
              <td>70</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Pecho</td>
              <td>Fisica-Matematica</td>
              <td>100</td>
            </tr>
          </tbody>

        </table>
      </div>

    </div>
  </div>

</div>
        </section>
    </main>

    <footer>
        <p>Actividad práctica de Bootstrap</p>
    </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src= "js/boostrap.min.js"></script>
</body>
</html> 