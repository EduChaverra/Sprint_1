<?php
class NumberChecker {

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}

/* $num1 = new NumberChecker(0);
echo $num1->isEven() . "<br>";
echo $num1->isPositive(); */

?>