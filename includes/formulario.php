<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">
                Voltar
            </button>
        </a>
    </section>
    <h2 class="mt-3">Cadastrar Vaga</h2>

    <form method="post">
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo">
        </div>
        
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"> </textarea>
        </div>

        <div class="form-group">
            <label for="">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label for="ativo1" class="form-control">
                        <input type="radio" id="ativo1" name="ativo" checked value="s"> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="ativo2" class="form-control">
                        <input type="radio" id="ativo2" name="ativo" value="s"> Inativo
                    </label>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </div>
        
    </form>
</main>