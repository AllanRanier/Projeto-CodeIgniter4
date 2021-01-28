<main class="content">
    <div class="content-title mb-4">
        <i class="icon icofont-check-alt mr-2"></i>
        <div>
            <h1>Cadastro</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="/ClienteCadastrado/clienteCadastrado" class="btn btn-primary btn-sm">Voltar</a>
            </div>
            <p class="mb-0"> </p>
        </div>
        <div class="card-body">
            <form action="/CadastrarClientes/cadastrarClientes" method="post">

                <div class="card-inner">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">Nome</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="nome" id="nome" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">CPF</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="cpf" id="cpf" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">E-mail</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">Data de Nascimento</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="nascimento" id="nascimento" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">CEP</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="cep" id="cep" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">Cidade</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="cidade" id="cidade" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">UF</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="uf" id="uf" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-label" for="cnpj">Logradouro</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="logradouro" id="logradouro" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card-footer d-flex justify-content-around">
            <input type="submit" name="submit" class="btn btn-success btn-sm" value="Cadastrar" />
        </div>
        </form>
    </div>
    </div>
</main>