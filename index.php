<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        require './Util.php';
        $util = new Util();
        $util->cabecalho();
        ?>


    </head>
    <header>
        <?php
        $util->menu();
        ?>
    </header> 
    <script>
        function carregar(pagina) {
            $("#conteudo").load(pagina);
        }
    </script>

    <body onload="carregar('principal.php')"class="top" >
        <!-- carrossel-->
        <div id="conteudo">

            <!-- /.container -->

            <hr>
        </div>
        <?php $util->rodape(); ?>

    </body>

</html>
