<?php

class MealsModel{
	public function listMeals(){
		$getMeals = new Database();
		$meals = $getMeals -> query('SELECT * FROM Meal');
		return $meals;
	}
}