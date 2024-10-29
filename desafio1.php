<?php
// Array multidimensional com informações de múltiplas pessoas

$carros = array(
    array("Toyota", "Corolla", 2020, "Prata"),
    array("Honda", "Civic", 2019, "Preto"),
    array("Ford", "Focus", 2018, "Azul")
);

echo "<strong>Exercício 02:</strong> Criado com sucesso!<br><br>";

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros)
{
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>";
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

?>