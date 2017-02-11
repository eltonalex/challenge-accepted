 <?php

//Lê todo o conteúdo de um arquivo para uma string
$json_file = file_get_contents("base/locales.json");   

//Decodifica uma string JSON
$json_str = json_decode($json_file);

//Array de opções de cidades
$a = Array();
foreach ( $json_str as $n ){
    array_push($a, $n->name);
}

// get o parâmetro q da URL
$q = trim($_REQUEST["q"]);

$cidade = "";

// lookup all cidades from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($cidade === "") {
                $cidade = $name;
            } else {
                $cidade .= "$name";
            }
        }
    }
}

// Saída esperada: "Nenhuma Sugestão" se a cidade não foi encontrada
// ou a saida de uma cidade válida
echo $cidade === "" ? "Nenhuma Sugestão" : $cidade;
?> 