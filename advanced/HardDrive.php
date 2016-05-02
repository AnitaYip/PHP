<?php
namespace advanced;
trait HardDrive {
	public function getHardDrive(){
		
		echo "This has a hard drive. And it has a trait\n";
		parent::getHardDrive();
	}
}

?>