<?php
// Array multidimensional com informações de múltiplas pessoas

$carros = array(
    array(
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "ano" => 2020,
        "cor" => "Prata"
    ),
    array(
        "marca" => "Honda",
        "modelo" => "Civic",
        "ano" => 2019,
        "cor" => "Preto"
    ),
    array(
        "marca" => "Ford",
        "modelo" => "Focus",
        "ano" => 2018,
        "cor" => "Azul"
    )
);

echo "<strong>Exercício 02:</strong> Criado com sucesso!<br><br>";

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros)
{
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro["marca"] . "<br>";
        echo "Modelo: " . $carro["modelo"] . "<br>";
        echo "Ano: " . $carro["ano"] . "<br>";
        echo "Cor: " . $carro["cor"] . "<br><br>";
    }
}


echo "<strong>Exercício 02:</strong> Array original<br><br>";
exibirCarros($carros);
echo "<br>";

$carros[1][3] = "Branco";
echo "<strong>Exercício 03:</strong> Modifique a cor do segundo carro (Honda Civic) para Branco.<br><br>";
exibirCarros($carros);
echo "<br>";

$carros[] = array("Chevrolet", "Cruze", 2021, "Vermelho");
echo "<strong>Exercício 04:</strong> Adicione um novo carro ao array com as informações: [Chevrolet, Cruze, 2021, Vermelho] <br><br>";
exibirCarros($carros);
echo "<br>";

unset($carros[0]);
echo "<strong>Exercício 05:</strong> Remova o primeiro carro do array.<br><br>";
exibirCarros($carros);
echo "<br>";

echo "<strong>Exercício 06:</strong> Feito!<br><br>";
