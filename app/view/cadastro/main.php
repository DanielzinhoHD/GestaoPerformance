<div class="container forget-password">
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <a href="index.php"><img src="img/LOGO.png" alt="car-key" border="0"></a>
                        <h4  class="text-center"><i style="color:#007BFF;">Criar Conta</i> </h4>                                
                        <form  method="POST" id="register-form" role="form" autocomplete="off" >
                            <div class="form-group">
                                <input type="text" id="floatingInputUsername" name="nome" placeholder="Nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" id="floatingInputUEmail" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                    <input type="password" id="floatingInputPassword" name="senha" placeholder="Senha" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" id="floatingInputPassword" name="Confirmarsenha" placeholder="Confirmar Senha" class="form-control">
                            </div>
                            <p id="error-msg"></p>
                            <div class="form-group">                                        
                                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-login fw-bold text-uppercase">Cadastrar usuário</button>
                            </div>
                            <div class="text-left"><a href="login.php"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
