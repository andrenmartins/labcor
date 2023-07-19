

<div class="container">
    <form method="POST" action="enviaemail.php">
        <input type="hidden" name="para" id="id" value="laboratoriolabcor@gmail.com" />
        <input type="hidden" name="assunto" id="id" value="atendimento domiciliar" />
        <div class="form-group">
            <label for="nome">Qual seu Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Entre com seu nome">
            <small id="emailHelp" class="form-text text-muted">Entre seu nome.</small>
        </div>
        <div class="form-group">
            <label for="Email">Qual seu email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entre com email">
            <small id="emailHelp" class="form-text text-muted">Entre com seu email.</small>
        </div>


        <div class="form-group">
            <label for="exampleTextarea">Digite seu endereço</label>
            <textarea class="form-control" nome="msg" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <a href="http://agslaboratorio.com.br/"><button type="button" class="btn btn-info btn-md ">Voltar</button></a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</div>

