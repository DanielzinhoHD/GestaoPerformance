<div class="container">
  <div class="content first-content">
      <div class="first-column">
  
          <h2 class="title title-primary"> Ainda não possui conta ?</h2>
          <a class="btn link" href="<?php echo DIRPAGE.'registro'?>" role="button"> VOLTAR</a>
          
      </div>
      <div class="second-column">
        
          <h2 class="title title-second"> Sistema de Gestão Integrado</h2>
          
          <form class="form">
    
            <input type="email" placeholder="Email" name="email">     
            <input type="password" placeholder="Senha" name="pw">
            <p id="error-msg"></p>
            <button type="submit" role="button" class="btn btn-second" name="submit" value="Submit"> Acesse</button>
        
          </form>
    
        <label class= "dark-mode" for="switch">
        
        <input type="checkbox" id="switch" > Dark mode
    
      </label>
      <span class="material-icons"> contrast</span>

      </div>
    
  </div>
<?php include_once DIRJS.'login.php';?>
<?php include_once DIRJS.'home.php';?>

