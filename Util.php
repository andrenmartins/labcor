<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author andre
 */
class Util {

//put your code here


    public function cabecalho() {
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>Labcor - Laboratório de Análises Clinica</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Labcor - Laboratório de Análises Clinica">
            <meta name="author" content="Labcor">



            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

            <!-- Fav and touch icons -->
            <link rel="shortcut icon" href="img/labcor.png">


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" id="Lato-google-font-css" href="http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;subset=latin&#038;ver=4.4.3" type="text/css" media="all"/>
        <script src="js/js.js"></script>
       ';
    }
    public function menu() {
        echo '  <div class="container">
            <div class="row " >
                <div class="col-sm-4">
                    <a id="homeb" onclick="carregar(\'principal.php\')"href="#" ><img class="img-responsive " src="img/labcor.png" class="img-rounded" alt="Cinque Terre" width="300" height="" ></a>
                </div>
                <div class="col-sm-3 pull-right">
                    <a href="http://labcor.laborlis.online/"><img class="img-responsive " src="img/resultado.png" class="img-rounded" alt="Cinque Terre" width="300" height="" ></a>
                </div>
            </div>
        </div>


        <!-- Static navbar -->
        <div >
            <nav class="navbar navbar-default borda" >
                <div class="container ">
                    <div class="navbar-header ">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a onclick="carregar(\'principal.php\')"href="#">PRINCIPAL</a></li>
                             <li><a onclick="carregar(\'orcamento.php\')"href="#">SOLICITE UM ORÇAMENTO</a></li>
                            <li><a onclick="carregar(\'domiciliar.php\')"href="#">ATENDIMENTO DOMICILIAR</a></li>
                            <li><a onclick="carregar(\'parceiros.php\')"href="#">LABORATORIOS PARCEIROS</a></li>
                            <li><a onclick="carregar(\'contato.php\')"href="#">CONTATO</a></li>

                        </ul>
<!--                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://webmail.hostinger.com.br">WEBMAIL</a></li>
                        </ul> -->
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>';
        
    }
    public function rodape() {
        echo ' <footer class="section section-primary  borda">
            <div class="row">

                <div class="col-sm-4">
                    <img class="img-responsive " src="img/labcor.png" class="img-rounded" alt="Labcor - Laboratório de Análises Clinica" width="300" height="" >
                    <p><br>R. Firmino Viêira Matos, 841 <br> Jardim America, Dourados - MS, 79804-010, Brazil</p>
                </div>
                <div class="col-sm-4">
                    <p> <img src="img/contact-icon-17_1.png" alt="icone-carta" width="35" height="30" ><b>CONTATO</b></p>
                    <hr>
                    <p> <img src="img/icon-telefone.png" alt="icone-carta" width="35" height="30" >(67)3422-0858 / 3032-9628 / 9628-6718<img src="img/vivo.png" height="20" alt="vivo"/></p>
                    <p> <img src="img/icone-carta.png" alt="icone-carta" width="35" height="30" >laboratoriolabcor@gmail.com</p>



                </div>
                <div class="col-sm-4">

                    <p> <img src="img/icon-clock.png" alt="icone-carta" width="35" height="30" ><b>HORÁRIO DE ATENDIMENTO</b></p>

                    <hr><p>Segunda à Sexta - 06:30 às 11:30 e das 13:00 às 17:00</p><br>
                    Aceitamos cartões de debito <img src="img/cartoes.png" alt=""/>
                </div>
            </div>
            <hr>
            <p>Copyright &copy; Labcor - Laborátorio de Análises Clínica</p>
            <!-- Footer -->


        </footer>';
        
    }

}
