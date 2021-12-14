<?php
	class CEP extends WebService
	{
		/* URL de Test-Drive */
		const URI_LOCATION      = 'https://www.soawebservices.com.br/webservices/test-drive/cep/cep.asmx';
		const URI_LOCATION_WSDL = 'https://www.soawebservices.com.br/webservices/test-drive/cep/cep.asmx?WSDL';

		/* URL de Producao */
		/*
		const URI_LOCATION      = 'https://www.soawebservices.com.br/webservices/producao/cep/cep.asmx';
		const URI_LOCATION_WSDL = 'https://www.soawebservices.com.br/webservices/producao/cep/cep.asmx?WSDL';
		*/
		
		private $_traceEnabled  = 1;
		
		public function __construct()
		{
			$options = array
			(
				'location' => CEP::URI_LOCATION,
		        'trace'    => $this->_traceEnabled,
				'style'    => SOAP_RPC,
		        'use'      => SOAP_ENCODED,
			);
			
			parent::__construct(CEP::URI_LOCATION_WSDL, $options);
		}
		
		public function getCEPEstendida(CEPEstendida $cep)
		{
			print_r($cep);
			$result = $this->callMethod('ConsultaCEPEstendida', array('parameters' => Util::objectToArray($cep)));
			return Util::arrayToObject($result->{$this->getLastCalledMethod() . 'Result'}, $cep);
		}
	}

	class Credenciais
	{
		public $Email;
		public $Senha;
	}

	class CEPEstendida extends ClassMap
	{
		public $CEP;
		public $TipoLogradouro;
		public $Logradouro;
		public $LogradouroCompleto;
		public $LogradouroComplemento;
		public $Bairro;
		public $BairroComplemento;
		public $UF;
		public $Estado;
		public $Cidade;
		public $CodigoIBGE;
		public $Mensagem;
		public $Status;
		public $Transacao;
		public function __construct()
		{
			parent::__construct(array(
				'CEP'        		    => 'string',
				'TipoLogradouro'        => 'string',
				'Logradouro'        	=> 'string',
				'LogradouroCompleto'    => 'string',
				'LogradouroComplemento'	=> 'string',
				'Bairro'         		=> 'string',
				'BairroComplemento' 	=> 'string',
				'UF'           			=> 'string',
				'Estado'       			=> 'string',
				'Cidade'          		=> 'string',
				'CodigoIBGE'     		=> 'string',
				'Mensagem'          	=> 'string',
				'Status'            	=> 'boolean',
				'Transacao'     		=> 'Transacao',
			));
		}
	}
    class Transacao extends ClassMap
{
    public $Status;
    public $CodigoStatus;
    public $CodigoStatusDescricao;

    public function __construct()
    {
        parent::__construct(array(
            'Status' => 'boolean',
            'CodigoStatus' => 'string',
            'CodigoStatusDescricao' => 'string',
        ));
    }

}
?>