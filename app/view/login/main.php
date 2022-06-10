<div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
        <div class="card-img-left d-none d-md-flex">
          <!-- Background image for card set in CSS! -->
          <a href="index.php"><img src="img/UNIVESP.png"/></a>
        </div>
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-light fs-5"><i class="fas fa-lock fa-4x" ></i></h5>
          <form id="login-form" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputUsername" placeholder="myemail" required autofocus name="email">
              <label for="floatingInputUsername"><i style="margin-right:15px;" class="fas fa-user"></i> Email</label> 
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="pwd" placeholder="mypassword" name="pw">
              <label for="floatingInputEmail"><i style="margin-right:20px;" class="fas fa-lock"></i>Senha</label>
            </div>                
            <span id="error-msg"></span>
            <div class="d-grid mb-2">
              <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="submit">Logar</button>
            </div>
            <a class="d-block text-center mt-2 small" href="cadastro.php">Ainda não possui uma conta? Cadastre-se</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once DIRJS.'login.php';?>
