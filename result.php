<?php require_once('header-in.php'); ?>
<section id="admin" class="content">

  <?php require_once('nav-ppal.php'); ?>
  <section id="index-nav">
    <?php require_once('breadcrumbs.php'); ?>
      <!-- Resultado de búsqueda éxitoso -->
      <table>
          <tr class="encabezado">
              <th>Nombre</th>
              <th>Matrimonio</th>
              <th>Modelo</th>
              <th>Próxima cita</th>
          </tr>
          <tr class="dato-table" onClick="location.href='info-bride.php'">
              <td>Josefina Fierro</td>
              <td> 11 / 03 / 2017</td>
              <td>Romané</td>
              <td> 15 / 12 / 2016</td>
          </tr>
          <tr class="dato-table">
              <td>Valentina Fierro</td>
              <td>11 / 03 / 2017</td>
              <td>Florecer</td>
              <td>11 / 03 / 2017</td>
          </tr>
          <tr class="dato-table">
              <td>Jeannette Campos</td>
              <td> 22 / 12 / 2017</td>
              <td>Clarisa</td>
              <td>10 / 09 / 2017</td>
          </tr>
          <tr class="dato-table">
              <td>Silvia Mena</td>
              <td>25 / 01 / 2020</td>
              <td>Candelaria</td>
              <td>Por coordinar</td>
          </tr>
      </table>
      <!-- Sino: -->
      <h3 class="no-result">No hay resultados asociados a: <span>Floripondia Gutiérrez</span>. Intenta nuevamente.</h3>
  </section>
  <!--/#index .col-8 -->
</section>
<!-- /admin -->
<?php require_once('footer.php'); ?>
