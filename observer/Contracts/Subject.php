<?php
namespace Naciri\Contracts;

interface Subject 
{

	public function attach(Observer $o);
	public function detach (Observer $o);
	public function setStatus($status);
	public function getstatus();
	public function notify();
}