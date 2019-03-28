<?php
namespace Naciri\Contracts;

interface Observer
 {
 	public function update(Subject $observable);

}
