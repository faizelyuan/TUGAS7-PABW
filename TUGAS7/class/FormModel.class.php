<?php 

class FormModel{

	public function Ruangan(){
		$ran = array("Sekret BEM","Sekret EMSI","Gazebo Panggung","Sekret HMIF","Sekret HIMATEKKOM", "Gedung F lama");
		$randomElement = $ran[array_rand($ran,1)];
		return $randomElement;

	}

}



 ?>