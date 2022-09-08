<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Busca de Marcas</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                            <label for="inputId" class="form-label">ID</label>
                            <input type="number" class="form-control" id="InputId" placeholder="ID"
                                aria-describedby="idlHelp">
                            <div id="idlHelp" class="form-text text-muted">Opcional. Informe o ID do registro.</div>
                        </div>

                        <div class="col mb-3">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="InputNome" placeholder="Nome da marca"
                            aria-describedby="nomelHelp">
                            <div id="nomelHelp" class="form-text text-muted">Opcional. Informe o Nome da Marca.</div>
                        </div>
                    </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
