<?php
require_once 'sws_extensao.php';
require_once 'sws_cep.php';

$credenciais        = new Credenciais();
$credenciais->Email = 'seu email';
$credenciais->Senha = 'sua senha';

$cep                 = new CEPEstendida();
$cep->Credenciais    = $credenciais;
$cep->CEP            = '99999999';


$svccep = new CEP();
$cep = $svccep->getCEPEstendida($cep);

echo "\n\n-----------------------   INFORMACOES GERAIS   -----------------------\n\n\n";

# PRINT PROPRIEDADES DO OBJETO
echo 'CEP:                        ' . $cep->CEP . "\n";
echo 'Logradouro:                 ' . $cep->Logradouro . "\n";

echo "\n----------------------------------------------------------------------\n\n\n";

# PRINT TODOS ELEMENTOS (TESTE)
print_r($cep);
?>