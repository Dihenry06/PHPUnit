<?php

namespace CodeExperts\Aritmetico;

class Soma  
{
    /**
     *
     * @var int
     */
    private $num1;
    /**
     *
     * @var int
     */
    private $num2;

    /**
     *
     * @return int
     */
	public function getNum1() {
		return $this->num1;
	}
    /**
     *
     * @param int $num1
     * @return void
     */
	public function setNum1($num1) {
		$this->num1 = $num1;
	}
    /**
     *
     * @return int
     */
	public function getNum2() : int{
		return $this->num2;
	}
    /**
     *
     * @param int $num2
     * @return void
     */
	public function setNum2($num2) {
		$this->num2 = $num2;
	}
    /**
     *
     * @return int
     */
    public function somar() : int
    {
        return $this->num1 + $this->num2;
    }
}
