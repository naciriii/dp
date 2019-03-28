<?php

class ShootingStrategy implements Strategy
{
	public function execute()
	{
		echo "this is custom shooting strategy".PHP_EOL;
		echo "now just shoot after focusing on taarget";
	}
}