<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - PHP e Formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <?php include "cabecalho.php"; ?>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <h4 class="card-title mb-4 text-primary fw-bold">Formulário de Identificação</h4>
                        
                        <form name="form1" method="post" action="resposta.php">
                            
                            <div class="mb-4">
                                <label class="form-label fw-bold">Nome Completo:</label>
                                <input type="text" name="txnome" class="form-control form-control-lg" maxlength="50" placeholder="Ex: Jaime Silva" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold">Sexo:</label>
                                    <select name="lssexo" class="form-select">
                                        <option value="Masculino" selected>Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold d-block">Possui Filhos?</label>
                                    <div class="form-check form-check-inline mt-2">
                                        <input type="radio" name="rbfilhos" value="Sim" class="form-check-input" id="sim">
                                        <label class="form-check-label" for="sim">Sim</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-2">
                                        <input type="radio" name="rbfilhos" value="Não" class="form-check-input" id="nao" checked>
                                        <label class="form-check-label" for="nao">Não</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 p-3 bg-light rounded border">
                                <label class="form-label fw-bold d-block mb-2">Hábitos e Estilo de Vida:</label>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="cbbebe" value="Bebe" class="form-check-input" id="bebe">
                                    <label class="form-check-label" for="bebe">Consome álcool</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="cbfuma" value="Fuma" class="form-check-input" id="fuma">
                                    <label class="form-check-label" for="fuma">Fumante</label>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="Submit" class="btn btn-primary btn-lg shadow-sm">
                                    Enviar para Processamento
                                </button>
                                <button type="reset" class="btn btn-link text-muted btn-sm">Limpar campos</button>
                            </div>

                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>