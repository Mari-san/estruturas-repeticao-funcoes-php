<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Lista da Turma</title>
</head>
<body>

<?php

    
    // FUNÇÃO COM RETORNO
    // Monta o e-mail do aluno a partir do nome (recebe $nome e devolve uma string)
    function gerarEmail($nome)
    {
        $nomeFormatado = strtolower(str_replace(" ", ".", $nome));
        return $nomeFormatado . "@escola.com.br";
    }

    
    // FUNÇÃO SEM RETORNO (VOID)
    // Escreve diretamente na tela se o aluno é maior ou menor de idade
    function verificarMaioridade($idade)
    {
        if ($idade >= 18) {
            echo "Maior de idade";
        } else {
            echo "Menor de idade";
        }
    }

    echo '<br><a href="turma.php" class="w3-button w3-teal">Voltar</a><br>';

    $qtd = (int) $_POST["txtQtdAlunos"];

    echo '<div class="w3-container">';
    echo '<h2 class="w3-text-teal w3-center">Turma com ' . $qtd . ' aluno(s)</h2>';
    echo '<table class="w3-table-all w3-hoverable w3-text-black">';
    echo '<tr class="w3-teal">';
    echo '<th>RM</th><th>Nome</th><th>Idade</th><th>E-mail</th><th>Situação</th>';
    echo '</tr>';

    // ESTRUTURA DE REPETIÇÃO "FOR"
    // Gera uma linha da tabela para cada aluno da turma
    for ($i = 1; $i <= $qtd; $i++) {

        $rm = 1000 + $i;
        $nome = "Aluno " . $i;
        $idade = 15 + ($i % 10); // apenas para gerar idades variadas de exemplo

        echo '<tr>';
        echo '<td>' . $rm . '</td>';
        echo '<td>' . $nome . '</td>';
        echo '<td>' . $idade . '</td>';
        echo '<td>' . gerarEmail($nome) . '</td>'; // chamada da função COM retorno
        echo '<td>';
        verificarMaioridade($idade); // chamada da função SEM retorno (void)
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';


    // ESTRUTURA DE REPETIÇÃO "WHILE"
    // Conta quantos alunos são maiores de idade
    $contador = 1;
    $totalMaiores = 0;

    while ($contador <= $qtd) {
        $idadeAtual = 15 + ($contador % 10);
        if ($idadeAtual >= 18) {
            $totalMaiores++;
        }
        $contador++;
    }

    echo '<div class="w3-panel w3-pale-green w3-center w3-border">';
    echo '<p><b>' . $totalMaiores . '</b> de <b>' . $qtd . '</b> aluno(s) são maiores de idade.</p>';
    echo '</div>';
?>

</body>
</html>