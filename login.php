<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bookshop B-raya</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- ESTILOS PARA ESTA PÁGINA -->
    <link href="css/cliente.css" rel="stylesheet" />

    <!-- JAVASCRIPT E JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>

<body>

<!-- INÍCIO DO MENU SUPERIOR -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="menu_superior" role="navigation" style="color: white;">
        <!--nav class="navbar navbar-default navbar-fixed-top"-->
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    
                    <i class="material-icons botao-sanduiche">&#xe8fe;</i>
                    
                </button>
                <a class="navbar-brand" href="index.php">
                    <img width="60px" height="50px" src="img/logo.png" alt="banner rotativo" class="img-responsive">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse navegacao" id="bs-example-navbar-collapse-1">
                <!-- **************************************** MENU DE NAVEGAÇÃO ************************************* -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="cliente.php">Cliente</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>
    <!-- FIM DO MENU SUPERIOR -->

    <div class="container">

        <!-- INÍCIO DO CAROUSEL -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">

                                <img src="img/banner.png" alt="banner rotativo" class="img-responsive">

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

			<?php

              include_once 'connection.php';

              $nome = $_POST['cxnome'];
              $email = $_POST['cxemail'];

                if($_POST){
                    echo mostrarDadosUsuarios($nome, $email);
                    echo "Cliente encontrado!";
                }
                else {
                    echo "Cliente não encontrado!";
                }
                
                function mostrarDadosUsuarios($nome, $email){
                    $conn1 = new DBConnection();
                    $resultSet = $conn1->query("SELECT *FROM Cliente WHERE nome LIKE '%$nome%' AND email LIKE '%$email%';");
                    $strOut =  "<hr>"."<table border=1>";
                    while ($linha = mysqli_fetch_assoc($resultSet)) {
                        $strOut .=
                        "<tr>".
                        "<td>". $linha['nome']           ."</td>".
                        "<td>". $linha['email']          ."</td>".
                        "</tr>";
                    }
                    $strOut .= "</table>";
                    return ($strOut);
                }

                ?>
                
               <main class="col-md-9 col-lg-9 col-sm-8 col-xs-12 produtos">
                       <h1 class="title">Compra</h1>
                       <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12 text-center">
                           <form action="compracliente.php" method="POST">
                              <fieldset>
                              <p class="text">Numeração:</p> 
                             <input min="1" max="6" type="number" name="cxproduto" required="required" placeholder="ex. 1"><br>
                              <input type="submit" value="Enviar"><br>
                              </fieldset>
                           </form>
                      </div>
                   
                </main>
            </div>
        <!-- FIM DA ROW -->



    </div>
    <!-- INÍCIO DO RODAPÉ -->
    <footer align="center">
        <div id="rodape" align="center">
            <ul align="center">
               &copy;Todos os direitos reservados </p>
            </ul>
        </div>
    </footer>
    <!-- FIM DO RODAPÉ -->
</body>

</html>
