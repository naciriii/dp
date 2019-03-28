<?php
require_once "../vendor/autoload.php";

use Naciri\ConcreteSubject;
use Naciri\{
	ConcreteObserver,ConcreteObserver2
};

$cs = new ConcreteSubject();
$cs->attach(new ConcreteObserver());
$cs->attach(new ConcreteObserver2());
$cs->init();
$cs->boot();
$cs->start();
