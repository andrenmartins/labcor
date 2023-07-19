

<div class="container">


    <form name="formulario"  method="POST" action="enviaemail.php">
        <input type="hidden" name="para" id="id" value="laboratoriolabcor@gmail.com" />
        <input type="hidden" name="assunto" id="id" value="orcamento" />
        <div class="form-group">
            <label for="email">Qual seu email</label>
            <input type="email" class="form-control" nome="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com email">

        </div>
        <div class="form-group">
            <label for="assunto">Qual seu nome</label>
            <input nome="assunto" type="tel" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Entre seu nome">

        </div>
        <div class="form-group">
            <label for="assunto">Seu telefone</label>
            <input nome="fone" type="" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Entre com um telefone de contato">

        </div>
        <!--acordion-->

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            HEMATOLOGIA</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="checkbox">
                            <label><input type="checkbox" value="7 - Coagulograma" name="item"> 7 - Coagulograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=" 15 - Coombs Direto"> 15 - Coombs Direto</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="16 - Coombs Indireto"> 16 - Coombs Indireto</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="52 - Eritrograma"> 52 - Eritrograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="57 - Falcização de Hemácias"> 57 - Falcização de Hemácias</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="8 - Grupo Sangüineo/DU"> 8 - Grupo Sangüineo/DU</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="195 - Hematócrito + Hb"> 195 - Hematócrito + Hb</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="1 - Hemograma"> 1 - Hemograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="99 - Leucograma"> 99 - Leucograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="143 - Plaquetas"> 143 - Plaquetas</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="212 - Reticulócitos"> 212 - Reticulócitos</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="153 - TAP/INC"> 153 - TAP/INC</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="388 - TS/TC"> 388 - TS/TC</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="156 - TTPA"> 156 - TTPA</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="136 - VHS(Hemossedimentação)"> 136 - VHS(Hemossedimentação)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            BIOQUÍMICA</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="checkbox">
                            <label><input type="checkbox" value="32 - Ácido Úrico"> 32 - Ácido Úrico</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="237 - Alfa 1 Glicoproteína Ácida"> 237 - Alfa 1 Glicoproteína Ácida</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="44 - Amilase"> 44 - Amilase</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="17 - Bilirrubinas"> 17 - Bilirrubinas</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=" 71 - Cálcio"> 71 - Cálcio</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="148 - Clearence de Creatinina/Urina 24 hs"> 148 - Clearence de Creatinina/Urina 24 hs</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="68 - Cloreto"> 68 - Cloreto</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="9 - Colesterol"> 9 - Colesterol</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="119 - Colinesterase"> 119 - Colinesterase</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="162 - CPK - Creatina"> 162 - CPK - Creatina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="184 - CPK-MB"> 184 - CPK-MB</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="29 - Creatinina"> 29 - Creatinina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="46 - Curva glicêmica"> 46 - Curva glicêmica</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="266 - Ferritina"> 266 - Ferritina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="60 - Ferro Sérico"> 60 - Ferro Sérico</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="64 - Fosfatase Ácida"> 64 - Fosfatase Ácida</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="63 - Fosfatase Alcalina"> 63 - Fosfatase Alcalina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="72 - Fósforo"> 72 - Fósforo</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="129 - Gama GT"> 129 - Gama GT</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="5 - Glicemia"> 5 - Glicemia</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="28 - Glicemia Pós-Prandial"> 28 - Glicemia Pós-Prandial</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="877 - Hb Glicosina"> 877 - Hb Glicosina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="12 - HDL Colesterol"> 12 - HDL Colesterol</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="125 - LDH"> 125 - LDH</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="34 - lipidograma"> 34 - lipidograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="66 - Magnésio"> 66 - Magnésio</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="67 - Potássio"> 67 - Potássio</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="106 - Prot. Totais e Frações (Proteinoramas)"> 106 - Prot. Totais e Frações (Proteinoramas)</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="148 - Proteinúria 24 hs"> 148 - Proteinúria 24 hs</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="69 - Sódio"> 69 - Sódio</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="154 - TGO"> 154 - TGO</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="154 - TGO"> 155 - TGP</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="297 - Transferrina"> 297 - Transferrina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="30 - Triglicérides"> 30 - Triglicérides</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="31 - Uréia"> 31 - Uréia</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="57 - Falcização de Hemácias"> 57 - Falcização de Hemácias</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            IMUNOLOGIA/SOROLOGIA</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="checkbox">
                            <label><input type="checkbox" value="507 - Anti - HBs quantitativo"> 507 - Anti - HBs quantitativo</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="571 - Anti HCV"> 571 - Anti HCV</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="20 - ASLO"> 20 - ASLO</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="117 - Brucelose"> 117 - Brucelose</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="39 - Células LE"> 39 - Células LE</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="40 - chagas"> 40 - chagas</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="570 - Citomegalovirus IgG"> 570 - Citomegalovirus IgG</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="908 - Citomegalovirus IgM"> 908 - Citomegalovirus IgM</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="476 - Clamidia IgA"> 476 - Clamidia IgA</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="219 -  Clamidia IgG"> 219 -  Clamidia IgG</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="952 -  Clamidia IgM"> 952 -  Clamidia IgM</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="840 - Dengue IgG"> 840 - Dengue IgG</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="840 - Dengue IgM"> 840 - Dengue IgM</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="130 - Fator Reumatóide"> 130 - Fator Reumatóide</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="460 - Hbs Ag"> 460 - Hbs Ag</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="575 - HIV"> 575 - HIV</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="200 - IGE/Total"> 200 - IGE/Total</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="207 - Mononucleose"> 207 - Mononucleose</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="147 - PCR"> 147 - PCR</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="500 - PCR"> 500 - PCR</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="144 - PPD"> 144 - PPD</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="35 - Provas Reumática"> 35 - Provas Reumática</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="909 - Rubéola IgG"> 909 - Rubéola IgG</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="502 - Rubéola IgM"> 502 - Rubéola IgM</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="555 - Toxoplasmose IgG"> 555 - Toxoplasmose IgG</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="555 - Toxoplasmose IgM"> 555 - Toxoplasmose IgM</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="6 - VDRL"> 6 - VDRL</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="159 - Widal"> 159 - Widal</label>
                        </div>

                    </div>
                </div>

            </div>



            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            DIVERSOS</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="checkbox">
                            <label><input type="checkbox" value="45 - BAAR"> 45 - BAAR</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="943 - Bacterioscópio(Gram)"> 943 - Bacterioscópio(Gram)</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="700 - Citograma Nasal"> 700 - Citograma Nasal</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="56 - Espermograma"> 56 - Espermograma</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="127 - Estradiol"> 127 - Estradiol</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="58 - Exame à Freco"> 58 - Exame à Freco</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="128 - FSH"> 128 - FSH</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="273 - Gasometria"> 273 - Gasometria</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="138 - LH"> 138 - LH</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="430 - Micológico"> 430 - Micológico</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="209 -  Progesterona"> 209 -  Progesterona</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="145 - Prolactina"> 145 - Prolactina</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="220 - PSA Livre"> 220 - PSA Livre</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="172 - PSA Total"> 172 - PSA Total</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="123 - Cortisol"> 123 - Cortisol</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="299 - Vitamina B12"> 299 - Vitamina B12</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="955 - Vitamina D-250H"> 955 - Vitamina D-250H</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="109 - TSH"> 109 - TSH</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="108 - T4 Livre"> 108 - T4 Livre</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="107 - T3 Livre"> 107 - T3 Livre</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="53 - Teste Gravidez(BHCG)"> 53 - Teste Gravidez(BHCG)</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="112 - Testosterona Total"> 112 - Testosterona Total</label>
                        </div>
                    </div>
                </div>

            </div>



            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            Urina e Fezes</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="checkbox">
                            <label><input type="checkbox" value="2 - EAS"> 2 - EAS</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="942 - Gram de Gota(Urina)"> 942 - Gram de Gota(Urina)</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="4 - Bacterioscopia"> 4 - Bacterioscopia</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" value="86 - Citologia/Leucócitos Fecais"> 86 - Citologia/Leucócitos Fecais</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="3 - Parasitológia"> 3 - Parasitológia</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="104 - Sangue Oculto"> 104 - Sangue Oculto</label>
                        </div>

                    </div>
                </div>

            </div>

            <!--acordion-->             

            <div class="form-group">
                <label for="exampleTextarea">outros</label>
                <textarea  name="msg" nome="msg" class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="form-group row">
                <a href="http://agslaboratorio.com.br/"><button type="button" class="btn btn-info btn-md ">Voltar</button></a>
                <button type="submit" class="btn btn-primary" onclick="obterMarcados();">Enviar</button>
            </div>
    </form>

</div>

<script>
    function obterMarcados() {
            var listaMarcados = document.getElementsByTagName("INPUT");
            for (loop = 0; loop < listaMarcados.length; loop++) {
                var item = listaMarcados[loop];
                if (item.type == "checkbox" && item.checked) {
                    document.formulario.msg.value+=item.value+" ";
              //  alert(item.value);
                }
            }
        }
</script>



<!-- /.container -->

