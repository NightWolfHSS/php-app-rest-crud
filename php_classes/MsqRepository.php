<?php 
// Database static data
class MsqRepository
{
	public function getAll()
	{
		return  [
			[
				"id " => 1,
				"title" => "super product 1",
				"price" => "$200"
			],
			[
				"id " => 2,
				"title" => "hardDring",
				"price" => "$700"
			]
		];
	}
}
