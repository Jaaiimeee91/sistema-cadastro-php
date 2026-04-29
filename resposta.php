<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Cadastro - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?php include "cabecalho.php"; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="mb-0 text-center">Dados Recebidos com Sucesso!</h4>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php
                        // Capturando os dados enviados via POST
                        // Usamos as chaves exatas definidas no arquivo dados.php
                        $nome   = $_POST['txnome']   ?? 'Não informado';
                        $sexo   = $_POST['lssexo']   ?? 'Não informado';
                        $filhos = $_POST['rbfilhos'] ?? 'Não informado';
                        
                        // Verificando os Checkboxes de hábitos
                        $bebe = isset($_POST['cbbebe']) ? "Sim" : "Não";
                        $fuma = isset($_POST['cbfuma']) ? "Sim" : "Não";
                        ?>

                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Nome Completo:</strong>
                                <span><?php echo htmlspecialchars($nome); ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Gênero:</strong>
                                <span><?php echo $sexo; ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Possui Filhos?</strong>
                                <span><?php echo $filhos; ?></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Consome Bebidas?</strong>
                                <span class="badge <?php echo ($bebe == 'Sim') ? 'bg-danger' : 'bg-success'; ?>">
                                    <?php echo $bebe; ?>
                                </span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>É Fumante?</strong>
                                <span class="badge <?php echo ($fuma == 'Sim') ? 'bg-danger' : 'bg-success'; ?>">
                                    <?php echo $fuma; ?>
                                </span>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <a href="dados.php" class="btn btn-outline-primary">Voltar ao Formulário</a>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-3 text-muted">Processamento de Dados Server-side em PHP</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>