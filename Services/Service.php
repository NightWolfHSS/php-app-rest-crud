<?php 
require 'php_classes/MsqRepository.php';

class Service {

	private $msqRepository;

	public function __construct(MsqRepository $msqRepository)
	{
		$this->msqRepository = $msqRepository;
	}

	public function getData()
	{
		return $this->msqRepository->getAll();
	}
}
