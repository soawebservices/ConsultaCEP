# ConsultaCEP
SOAWebServices www.soawebservices.com.br

Exemplo de como consumir o webservice CEP Estendida em PHP.

É necessário abrir sua conta e possuir créditos para consultas em ambiente de produção.

Acesse no site: http://www.soawebservices.com.br/


É necessário editar o seu php.ini e descomentar a linha:

;extension=soap para
extension=soap

Informação importante quanto ao uso da solução em container Docker:

 - Caso seu container nao possua suporte ao SOAP, instalar o mesmo utilizando:

apt-get install php-soap

