<?php

class TestModel{
	public function listTest(){
		$getTest = new Database();
		$test = $getTest -> query('SELECT * FROM Meal');
		return $test;
	}
}