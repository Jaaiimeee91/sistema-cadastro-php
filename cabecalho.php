<?php
  // Define o fuso horário para a nossa região
  date_default_timezone_set('America/Sao_Paulo');
  $data = date("d/m/Y");
?>
<div class="bg-primary text-white text-center py-4 shadow-sm mb-4">
    <div class="container">
        <h2 class="fw-bold mb-1">Sistema de Gestão de Dados</h2>
        <p class="mb-0 opacity-75">
            PHP Modularizado | <i class="bi bi-calendar"></i> Hoje é dia: <?php echo $data; ?>
        </p>
    </div>
</div>