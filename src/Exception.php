<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/routing/blob/master/LICENSE
 */

namespace Quid\Routing;
use Quid\Main;

// exception
class Exception extends Main\Exception
{
	// config
	public static $config = [
		'code'=>34 // code de l'exception
	];
}

// config
Exception::__config();
?>