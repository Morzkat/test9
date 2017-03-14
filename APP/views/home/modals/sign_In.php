<!-- Modal Sign In-->
<div id="sign_In" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Registrate</h3>
      </div>
      <div class="modal-body">

        <form class="" action="#" id="frmSign_In" method="post">

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="user" type="text" class="form-control" name="user" placeholder="Usuario">
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="pass" type="text" class="form-control" name="pass" placeholder="Contraseña">
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="pass2" type="text" class="form-control" name="pass2" placeholder="Repite-Contraseña">
          </div>

          <button type="button" class="btn btn-success" onclick="log_In()" name="button">Registrarse</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
