<?php

class math{

	const ADD = "Add";
    const SUBTRACT = "Subtract";
    const MULTIPLY = "Multiply";
    const DIVIDE = "Divide";

	public function add(int $var1, int $var2, ...$more){
		return $this->doOperation(self::ADD, $var1, $var2, ...$more);
	}

	public function subtract(int $var1, int $var2, ...$more){
		return $this->doOperation(self::SUBTRACT, $var1, $var2, ...$more);
	}
	public function multiply(int $var1, int $var2, ...$more){
		return $this->doOperation(self::MULTIPLY, $var1, $var2, ...$more);
	}

	public function divide(int $var1, int $var2, ...$more){
		return $this->doOperation(self::DIVIDE, $var1, $var2, ...$more);
	}

	private function doOperation($operationType, int $var1, int $var2, ...$more){
		$res;
		switch ($operationType) {
			case (self::ADD):
				$res = $var1+$var2;
				foreach ($more as $value) {
					$res += $value;
				}
				break;
			case (self::SUBTRACT):
				$res = $var1+$var2;
				foreach ($more as $value) {
					$res -= $value;
				}
				break;
			case (self::MULTIPLY):
				$res = $var1+$var2;
				foreach ($more as $value) {
					$res *= $value;
				}
				break;
			case (self::DIVIDE):
				$res = $var1+$var2;
				foreach ($more as $value) {
					$res /= $value;
				}
				break;
		}
		return $res;

	}
}