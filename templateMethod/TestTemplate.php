<?php

abstract class TestTemplate
{
	public final function execute() {
		echo "execution logic </br>";
		$this->start();

		$this->pause();
		$this->rest();
		sleep(1);
		$this->finish();

	}

	public abstract function start();

	
	public abstract function pause();
		
	
	public abstract function rest();
		
	
	public abstract function finish();
		
	

}