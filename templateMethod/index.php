<?php
require_once ("TestTemplate.php");
require_once ("EnglishTest.php");
require_once ("MilitaryTest.php");
$method = @$_GET['meth'];
switch($method) {
	case 'english':
	execute(new EnglishTest());
	break;
	case 'military':
	execute(new MilitaryTest());
	break;
	default:
	'';

}

function execute(TestTemplate $template)
{
	$template->execute();
}