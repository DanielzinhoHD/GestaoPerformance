<?php 
    session_start(); //Inicia sessão
    if(isset($_SESSION['idUsuarios'])){
        header("Location: index.php");  //Leva o usuário para tela home caso esteja logado
      }
    include_once 'headerGu.php';
?>

<!------ Include the above in your HEAD tag ---------->
   
<?php
// Pega a query error pra definir a mensagem de erro
    if(isset($_GET['error'])){
        if($_GET['error'] == 'missinginput'){
            echo '<p>You need to fill all the inputs!</p>';
        }
        elseif($_GET['error'] == 'differentpasswords'){
            echo '<p>Passwords are different</p>';
        }
        elseif($_GET['error'] == 'invalidemail'){
            echo '<p>Invalid email</p>';
        }
        elseif($_GET['error'] == 'emailtaken'){
            echo '<p>This email is already being used</p>';
        }
        elseif($_GET['error'] == 'failedtocreateaccount'){
            echo '<p>Failed to create account, try again</p>';
        }
        elseif($_GET['error'] == 'stmtfailed'){
            echo '<p>Internal error, please try again</p>';
        } 
    }
?>