<?php
   include_once 'db_engine/bd_mysql_pdo.php';  
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sign-up.css">
    <!-------Logo title------->
   <title>Cadastro - Newron</title>
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
</head>

<body>
    <main>
        <div class="loader"></div><script src="../script/preloader.js"></script>
        <section class="login-area">
            <div class="texto">
                <h1>Faça parte da nossa Comunidade!😉</h1>
            </div>

            <div class="inputs">
                <form action="" method="post">

                    <input type="text" name="login" id="login" placeholder="Login" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <input type="submit" name="cadastrar" value="cadastrar" id="cadastrar" >
                    <div class="sign-up"><a href="sign-in.php">Já possui uma Conta?</a></div>

                </form>
                <?php

                      if(isset($_POST['cadastrar'])){
                         $stmt = $conn->prepare('insert into usuarios(login, senha)
                                                               values(:login, :senha)');
                         $stmt->bindValue('login', $_POST['login']);
                         $stmt->bindValue('senha', $_POST['senha']);	
                         //$stmt->execute();					 
						 
						 if($stmt->execute()){
                        echo '<div class="alert alert-success">Usuario cadastrado com sucesso</div>';
                         }else{                          
						  echo '<div class="alert alert-danger">Erro no cadastro</div>';
                         }		
					   }					   
					   
                      ?>
            </div>
            <div class="suporte">
                <a href="#">Suporte</a>
                <a href="#">Políticas de Privacidade</a>
            </div>
        </section>
    </main>
    <div class="bg-details circle1"></div>
    <div class="bg-details circle2"><p>Newron®</p></div>
</body>

</html>