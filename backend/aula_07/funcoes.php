<?php
// Função sem parâmeros
// function apresentar() { 
//     echo "Olá, boa noite!\n";
// }

// apresentar();
// apresentar();
// apresentar();
// apresentar();

// function apresentar($nome) { //$nome => é um parâmetro
//     echo "Olá, $nome boa noite!\n";
// }

// // chamando - (invocando)
// apresentar("João"); // "João" é um argumento.
// apresentar("Alice");
// apresentar("Ana");
// apresentar("Pedro");

function apresentar($nome, $idade, $cidade) { //$nome => é um parâmetro
    echo "Olá, $nome boa noite!. Você tem $idade anos, e mora em $cidade\n";
}

// chamando - (invocando)
apresentar("João", 23, "Rio de Janeiro"); // "João" é um argumento.
apresentar("Alice", 22, "Manaus");
apresentar("Ana", 20, "São Paulo");
apresentar("Pedro", 19, "Belém");
?>