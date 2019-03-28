<?php
require_once ("StrategyContract.php");
require_once ("ShootingStrategy.php");
require_once ("KnifingStrategy.php");

$param = @$_GET['strat'];
switch($param) {
	case 'shoot':
	run(new ShootingStrategy());
	break;
	case 'knife':
	run(new KnifingStrategy());
	break;
	default:
	'';
}
function run(Strategy $sc)
{
	$sc->execute();
}