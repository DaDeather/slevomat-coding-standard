<?php // lint >= 8.0

$foo = new \DateTimeImmutable();

class Boo
{
	public static function getInstance()
	{
		return new self();
	}
}

class Doo
{
	public static function getInstance()
	{
		return new static();
	}
}

$hooClassName = 'Hoo';
$hoo = new $hooClassName();

$classNamesInArray = ['Aoo'];
$aoo = new $classNamesInArray[0]();

$classNamesInObject = new stdClass();
$classNamesInObject->xoo = 'Xoo';
$aoo = new $classNamesInObject->xoo();

$coo = new class {

};

new
#[AllowDynamicProperties]
#[Attribute1]
class
{
};

$whitespaceBetweenClassNameAndParentheses = new stdClass    ();

new $a->{'b'}["c"]->$d['e'][1]();

$x = [
	new stdClass(),
];

$y = [new stdClass()];

$z = new stdClass() ? new stdClass() : new stdClass();

$q = $q ?: new stdClass();
$e = $e ?? new stdClass();

$aa[(string) new stdClass()] = true;

if (new stdClass()) {

}

$aaa = [
	(string) new stdClass() => new stdClass()
];

$aaaa = new (stdClass::class)();
