<?php 

 class FormController{
 	private $uiFormAwal;
 	private $uiFormAkhir;
 	private $ObjekModel;



 	public function getFormAwal(){
 		$this->uiFormAwal = new FormView();
 		$this->uiFormAwal-> FormAwal();
	}

	public function getFormAkhir(){
		$this->ObjekModel = new FormModel();
		$data = $this->ObjekModel->Ruangan();
		$this->uiFormAkhir = new FormView();
		$this->uiFormAkhir-> FormAkhir($data);
	}

 }