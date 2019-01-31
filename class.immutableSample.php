<?php
/*
	A prototype class with some setter methods, that may be operated in a mutable, as well as in an immutable fashion.
*/

class immutableSample {
	protected $int_1;
	protected $int_2;
	protected $int_3;

	protected $str_1;
	protected $str_2;
	protected $str_3;

	protected $dat_1;
	protected $dat_2;
	protected $dat_3;

	protected $mutable;

	public function __construct($int_1,$int_2,$int_3
								,$str_1,$str_2,$str_3
								,DateTime $dat_1, DateTime $dat_2, DateTime $dat_3,  $mutable) {
		$this->int_1 = $int_1;
		$this->int_2 = $int_2;
		$this->int_3 = $int_3;
		$this->str_1 = $str_1;
		$this->str_2 = $str_2;
		$this->str_3 = $str_3;
		$this->dat_1 = $dat_1;
		$this->dat_2 = $dat_2;
		$this->dat_3 = $dat_3;
		$this->mutable = $mutable;
	}

	public function setInt1($int) {
		if($this->mutable) {
			$this->int_1 = $int;
			return $this;
		} else {
			return new self(
						$int         ,$this->int_2,$this->int_3
						,$this->str_1,$this->str_2,$this->str_3
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setInt2($int) {
		if($this->mutable) {
			$this->int_2 = $int;
			return $this;
		} else {
			return new self(
						$this->int_1,$int         ,$this->int_3
						,$this->str_1,$this->str_2,$this->str_3
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setInt3($int) {
		if($this->mutable) {
			$this->int_3 = $int;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$int
						,$this->str_1,$this->str_2,$this->str_3
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

		public function setStr1($str) {
		if($this->mutable) {
			$this->str_1 = $str;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$str        ,$this->str_2,$this->str_3
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setStr2($str) {
		if($this->mutable) {
			$this->str_2 = $str;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$this->str_1,$str        ,$this->str_3
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setStr3($str) {
		if($this->mutable) {
			$this->str_3 = $str;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$this->str_1,$this->str_2,$str
						,$this->dat_1,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setDat1(DateTime $dat) {
		if($this->mutable) {
			$this->dat_1 = $dat;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$this->str_1,$this->str_2,$this->str_3
						,$dat        ,$this->dat_2,$this->dat_3
						,$this->mutable);
		}
	}

	public function setDat2(DateTime $dat) {
		if($this->mutable) {
			$this->dat_2 = $dat;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$this->str_1,$this->str_2,$this->str_3
						,$this->dat_1,$dat        ,$this->dat_3
						,$this->mutable);
		}
	}

	public function setDat3(DateTime $dat) {
		if($this->mutable) {
			$this->dat_3 = $dat;
			return $this;
		} else {
			return new self(
						$this->int_1,$this->int_2,$this->int_3
						,$this->str_1,$this->str_2,$this->str_3
						,$this->dat_1,$this->dat_2,$dat
						,$this->mutable);
		}
	}
}