<?php
namespace Naciri;

use Naciri\Contracts\Observer;

class ConcreteObserver2 extends AbstractObserver implements Observer {


public function onInit() {
echo "initialzation of object! ".get_class($this)."<br>";

}

public function onBooted() {
	echo "Booted! ".get_class($this)."<br>";
}
}