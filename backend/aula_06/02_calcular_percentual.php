<?php
$numeroAlunos = 5;
$totaldeaulas = 15;
$frequencia = []; // Percentual de presença

for($i = 1; $i <= $numeroAlunos; $i++) {
    $nome = readline("Digite o nome do aluno $i: ");
    $aulasfrequentadas = readline("Digite a quantidade de aulas: ");
    $percentualfrequencia = ($aulasfrequentadas / $totaldeaulas) * 100;
    
    $frequencia [$nome] = $percentualfrequencia ;
}   





?>