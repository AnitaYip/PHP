<?php
namespace advanced;
trait HardDrive {
	public function getHardDrive(){
		
		
		$message = function () {
			return "This has a hard drive. And it has a trait and a closure\n";
		};
		
		echo $message();
		parent::getHardDrive();
	}
}

?>