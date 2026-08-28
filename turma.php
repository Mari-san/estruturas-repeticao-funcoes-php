<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Controle de Turma</title>
</head>
<body>
    <div class="w3-third w3-center w3-animate-top w3-padding" style="margin:auto;">
        <h2 class="w3-container w3-teal">Controle de Turma</h2>
        <p>Exemplo de uso de <b>estruturas de repetição</b> e <b>funções</b> em PHP.</p>

        <form class="w3-container" method="post" action="turmaAction.php">
            <label class="w3-text-teal"><b>Quantos alunos tem a turma?</b></label>
            <input class="w3-input w3-border w3-light-grey"
                   name="txtQtdAlunos" type="number" min="1" max="50"
                   placeholder="Ex: 5" required>
            <br><br>
            <button class="w3-btn w3-blue-grey" name="btnGerar">Gerar Lista</button>
        </form>
    </div>
</body>
</html>