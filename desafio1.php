<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio: Sistema de Pontuação de Alunos</title>
</head>
<body>
    <h1>Sistema de Pontuação de Alunos</h1>

    <form action="" method="post">
        <h2>Aluno 1</h2>
        Nome: <input type="text" name="aluno1_nome" required><br>
        Nota: <input type="number" name="aluno1_nota" min="0" max="10" required><br><br>

        <h2>Aluno 2</h2>
        Nome: <input type="text" name="aluno2_nome" required><br>
        Nota: <input type="number" name="aluno2_nota" min="0" max="10" required><br><br>

        <h2>Aluno 3</h2>
        Nome: <input type="text" name="aluno3_nome" required><br>
        Nota: <input type="number" name="aluno3_nota" min="0" max="10" required><br><br>

        <input type="submit" value="Calcular Resultados">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receber os dados do formulário
        $alunos = [
            ['nome' => $_POST['aluno1_nome'], 'nota' => (float)$_POST['aluno1_nota']],
            ['nome' => $_POST['aluno2_nome'], 'nota' => (float)$_POST['aluno2_nota']],
            ['nome' => $_POST['aluno3_nome'], 'nota' => (float)$_POST['aluno3_nota']]
        ];

        $soma_notas = 0;
        $maior_nota = 0;
        $aluno_maior_nota = "";

        // Percorrer os alunos para calcular a média e verificar maior nota
        foreach ($alunos as $aluno) {
            $soma_notas += $aluno['nota'];

            // Condicional para aprovação
            if ($aluno['nota'] >= 7) {
                echo "<p>{$aluno['nome']} foi <strong>aprovado</strong> com nota {$aluno['nota']}.</p>";
            } else {
                echo "<p>{$aluno['nome']} foi <strong>reprovado</strong> com nota {$aluno['nota']}.</p>";
            }

            // Verificar maior nota
            if ($aluno['nota'] > $maior_nota) {
                $maior_nota = $aluno['nota'];
                $aluno_maior_nota = $aluno['nome'];
            }
        }

        // Calcular a média
        $media = ______________ / count($alunos);
        echo "<p>A média das notas é: <strong>$media</strong>.</p>";

        // Mostrar o aluno com maior nota
        echo "<p>O aluno com a maior nota é: <strong>$aluno_maior_nota</strong> com nota $maior_nota.</p>";
    }
    ?>
</body>
</html>
