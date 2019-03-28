<?php
namespace Naciri;

use Naciri\Contracts\{Subject,Observer};

class ConcreteSubject implements Subject
{
	protected $observers = array();
	protected $status = "";
	public function attach (Observer $o) {
		$this->observers []= $o;

	}

	public function detach (Observer $o) {
		foreach($this->observers as $key => $ob) {
			if($o->id == $ob->id) {
				unset($this->observers[$key]);
			}
		}
		
	}
	public function setStatus($status) {
		$this->status = $status;
		$this->notify();

	}
	public function getstatus() {
		return $this->status;

	}
	public function notify() {
		foreach($this->observers as $o) {
			$o->update($this);
		}
		
	}
	public function init() {
		echo "init...<br>";
		$this->setStatus("init");
	}
	public function boot() {
		echo "booting...</br>";
		$this->setStatus("booted");
	}
	public function start() {
		sleep(1);
		echo "starting...</br>";
		$this->setStatus("started");
	}
	
}