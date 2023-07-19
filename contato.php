
<div class="container">
    <h3>Contato</h3>

    <form method="POST" action="enviaemail.php">
        <input type="hidden" name="para" id="id" value="laboratoriolabcor@gmail.com" />
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
            <label for="assunto">Qual o assunto</label>
            <input type="text" class="form-control" name="assunto" aria-describedby="nomeHelp" placeholder="Entre com o assunto">
            <small id="emailHelp" class="form-text text-muted">Entre com o assunto da Mensagem</small>
        </div>

        <div class="form-group">
            <label for="exampleTextarea">Digite sua mensagem</label>
            <textarea class="form-control" nome="msg" rows="3"></textarea>
        </div>
        <div class="form-group row">
            <a href="http://agslaboratorio.com.br/"><button type="button" class="btn btn-info btn-md ">Voltar</button></a>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>