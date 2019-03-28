<?php
namespace Naciri;
use Naciri\Contracts\Subject;
abstract class AbstractObserver
{
	public function update(Subject $observable) {
		if(method_exists($this,"on".ucfirst($observable->getStatus()))) {
	call_user_func([$this, "on".ucfirst($observable->getStatus())]);
} else {
	
}
	}
}