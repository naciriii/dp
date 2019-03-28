<?php
namespace Naciri;

use Naciri\Contracts\Observer;

class ConcreteObserver extends AbstractObserver implements Observer {

public function onInit() {
echo "initialzation of object! ".get_class($this)."</br>";

}
public function onStarted() {
	echo "Started! ".get_class($this)."<br>";
}

}