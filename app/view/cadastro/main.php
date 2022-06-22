</div>

  <div class="container">
    <div class="content first-content">
        <div class="first-column">
            <h2 class="title title-primary">Bem-vindo de volta</h2>
            <p class="description description-primary"> Para se conectar</p>
            <p class="description description-primary"> Por favor inserir seus dados pessoais</p>
            <a class="btn btn-primary" href="<?php echo DIRPAGE.'login'?>" role="button"> Logar</a>
        </div>
        <div class="second-column">
         
          <h2 class="title title-second"> Criar uma conta</h2>
          <p class="description"> Uso do Email pessoal para registro</p>
          
          <form class="form">
            <input type="text" placeholder="Nome" >
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Senha">
            <a class="btn btn-second" href="#" role="button"> Cadastrar</a>
          
         </form>
        
         <label class= "dark-mode" for="switch">
         
          <input type="checkbox" id="switch" > Dark mode
     
        </label>
        <span class="material-icons"> contrast</span>
      </div>
</div>
<?php include_once DIRJS.'home.php';?>


