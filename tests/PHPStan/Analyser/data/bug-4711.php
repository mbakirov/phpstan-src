<?php

namespace Bug4711;

use function PHPStan\Testing\assertType;

class Foo
{

	function x(string $string): void {
		if(strlen($string) === 0){
			return;
		}

		assertType('array<int, string>', explode($string, ''));
		assertType('array<int, string>', explode($string[0], ''));
	}

}
