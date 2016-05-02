<?php

class math{

	public function add(int $var1, int $var2, ...$more){
		$res = $var1+$var2;
		foreach ($more as $value) {
			$res += $value;
		}
		return $res;
	}

	public function subtract(int $var1, int $var2, ...$more){
		$res = $var1-$var2;
		foreach ($more as $value) {
			$res -= $value;
		}
		return $res;
	}
	public function multiply(int $var1, int $var2, ...$more){
		$res = $var1*$var2;
		foreach ($more as $value) {
			$res *= $value;
		}
		return $res;
	}

	public function divide(int $var1, int $var2, ...$more){
		$res = $var1/$var2;
		foreach ($more as $value) {
			$res /= $value;
		}
		return $res;
	}
}