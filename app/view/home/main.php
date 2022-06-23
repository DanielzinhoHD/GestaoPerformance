

  <nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">
        SMARTFAST
      <?php 
        if(isset($_SESSION['id'])){
          echo ' - '.ucfirst($_SESSION['name']);
        } 
      ?>
      </span>
      <label class= "dark-mode" for="switch">
         
        <input type="checkbox" id="switch" > Modo escuro
   
    
      </label>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
      
          <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
          
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        

        <div class="modal-body">

          <ul class="list-group list-group-flush">
            <li class="list-group-item"> <span class="material-icons">
                grid_view </span>DASHBOARD</li>

            <li class="list-group-item"> <span class="material-icons">
                description
              </span>FORMULÁRIOS </li>
            <li class="list-group-item"> <span class="material-icons">
                grid_view </span> RELATÓRIOS</li>
            <li class="list-group-item"> <span class="material-icons">
                description
              </span>PROJETOS </li>
            
          </ul>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fechar Menu</button>
          <a href="<?php echo DIRPAGE.'logout/'?>" role="button" class="btn btn-second"> Deslogar</a>
         
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center">
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card1">
        <div class="card-header">
         
          
          <hi class="card-title"> F0RMULÁRIOS</hi>
        </div>
        <div class="card-body">

          <p class="card-text"> Área destinada para o preenchimento das atividades diárias feitas pela equipe.
          </p>
          <a href="<?php echo DIRPAGE.'formulario'?>" class="btn btn-success btn-sm"> PREENCHER</a>
         
          <div class="card-footer">
            <span class="material-icons">
              fact_check </span> 
          </div>
        </div>
      </div>
    </div>

    <div class="card2" style="width: 250px;">
      <div class="card-header">
        <hi class="card-title"> RELATÓRIOS</hi>
      </div>
      <div class="card-body">
        <p class="card-text"> Opção para ao acesso aos relatórios mensais.</p>
        <a href="relatorios" target="_blank" class="btn btn-secondary"> ACESSE</a>
      </div>
      <div class="card-footer"> <span class="material-icons">
        feed </span> </div>
    </div>
    <div class="card3" style="width: 250px;">
      <div class="card-header">
        <hi class="card-title">PROJETOS</hi>
      </div>
    
      <div class="card-body">
        <p class="card-text"> Opção para listar, adicionar,  editar e excluir projetos.</p>
        <a href="<?php echo DIRPAGE.'projetos'?>" class="btn btn-secondary"> ACESSE</a>
      </div>
      <div class="card-footer"> <span class="material-icons">
        plumbing</span></div>
    </div>
  </div>
  <div class="card4" style="width: 250px;">
    <div class="card-header">
      <hi class="card-title"> GRÁFICOS</hi>
    </div>
    <div class="card-body">
      <p class="card-text"> Opção para visualizar os gráficos mensais.</p>
      <a href="graficos" target="_blank" class="btn btn-secondary"> ACESSE</a>
    </div>
    <div class="card-footer"> <span class="material-icons">
      equalizer</span></div>
  </div>


  <span class="material-icons"> contrast</span>
  </div>
  
<?php include_once DIRJS.'home.php';?>
