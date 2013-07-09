<?php

// Pretty Console for PHP

class PrettyConsole
{
	static function output($string, $foreground=255, $background=0)
	{
		return "\033[38;5;{$foreground}m\033[48;5;{$background}m{$string}\033[0m";
	}

	static function __callStatic($function, $arguments = array())
	{
		preg_match("/^(?P<method>echo|return|puts)(?P<fore>\d+)?(on(?P<back>\d+)$)?/",$function,$match);

		if(!isset($match['method']))
			return;

		extract($match);

		$back = (isset($back) && strlen($back)!=0) ? $back : 0;
		$fore = (isset($fore) && strlen($fore)!=0) ? $fore : 255;
		$string = $arguments[0];

		if($method=="echo")
			echo self::output($string,$fore,$back);
		else if($method=="return")
			return self::output($string,$fore,$back);
		else if($method=="puts")
			echo self::output($string,$fore,$back) . "\n";
	}
}

if(!class_exists("Pretty"))
{
	class Pretty extends PrettyConsole { }
}
