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

echo "<pre>";
echo "\n\n-----------------------   INFORMACOES GERAIS   -----------------------\n\n\n";

# PRINT PROPRIEDADES DO OBJETO
echo 'CEP:                              ' . $cep->CEP . "\n";
echo 'TipoLogradouro:                   ' . $cep->TipoLogradouro . "\n";
echo 'Logradouro:                       ' . $cep->Logradouro . "\n";
echo 'LogradouroCompleto:               ' . $cep->LogradouroCompleto . "\n";
echo 'LogradouroComplemento:            ' . $cep->LogradouroComplemento . "\n";
echo 'Bairro:                           ' . $cep->Bairro . "\n";
echo 'BairroComplemento:                ' . $cep->BairroComplemento . "\n";
echo 'UF:                               ' . $cep->UF . "\n";
echo 'Estado:                           ' . $cep->Estado . "\n";
echo 'Cidade:                           ' . $cep->Cidade . "\n";
echo 'CodigoIBGE:                       ' . $cep->CodigoIBGE . "\n";
echo 'Mensagem:                         ' . $cep->Mensagem . "\n";
echo 'Status:                           ' . $cep->Status . "\n";
echo 'Transacao.Status:                 ' . $cep->Transacao->Status . "\n";
echo 'Transacao.CodigoStatus:           ' . $cep->Transacao->CodigoStatus . "\n";
echo 'Transacao.CodigoStatusDescricao:  ' . $cep->Transacao->CodigoStatusDescricao . "\n";


echo "\n----------------------------------------------------------------------\n\n\n";

# PRINT TODOS ELEMENTOS (TESTE)
print_r($cep);
echo "</pre>";
?>