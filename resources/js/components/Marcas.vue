<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!--Inicio do card de busca-->

                <div class="card mb-3">
                    <div class="card-header">Busca de Marcas</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="InputId" id-help="idHelp"
                                    text-ajuda="Opcional. Informe o ID da Marca">
                                    <input type="number" class="form-control" id="InputId" placeholder="ID"
                                        aria-describedby="idlHelp">
                                </input-container-component>
                            </div>

                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="InputId" id-help="idHelp"
                                    text-ajuda="Opcional. Informe o nome da Marca">
                                    <input type="text" class="form-control" id="InputNome"
                                        placeholder="Informe o nome da Marca" aria-describedby="nomelHelp">
                                </input-container-component>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                        </div>
                    </div>
                </div>

                <!--Fim do card de busca-->



                <!--Inicio do card listagem de marcas -->

                <div class="card">
                    <div class="card-header">Relação de Marcas</div>
                    <div class="card-body">
                        <table-component></table-component>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary btn-sm float-right">Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Fim do card listagem de marcas -->
        </div>
    </div>
</template>

<script>

</script>
