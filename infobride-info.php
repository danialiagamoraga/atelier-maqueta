<div class="modal fade in" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <form id="form" action="#" class="wizard" method="post">
          <h1>Información novia</h1>
          <hr class="line-pink">
          <fieldset>
            <div class="col-form">
              <div class="form-group">
                <label>Nombre *</label>
                <input id="userName" name="userName" type="text" class="form-control required">
              </div>
              <div class="form-group">
                <label>Email*</label>
                <input id="email" name="password" type="email" class="form-control required">
              </div>
              <div class="form-group">
                <label>Matrimonio*</label>
                <input id="date" name="marriage" type="date" class="form-control required">
              </div>
              <div class="form-group">
                <input id="region" name="region" type="checkbox" class="form-control">
                <label>¿Eres una novia de región?</label>
              </div>
            </div>
            <div class="col-form">
              <div class="form-group phone-info">
                <label>Telefono primario*</label>
                <input id="tel" name="phone" type="tel" class="form-control required">
              </div>
              <div class="form-group phone-info">
                <label>Telefono secundario</label>
                <input id="tel" name="phone" type="tel" class="form-control">
              </div>
            </div>
          </fieldset>
          <div class="botonera">
            <input type="submit" name="guardar" id="save" value="guardar">
            <button type="button" name="cancelar" id="cancel" value="">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
