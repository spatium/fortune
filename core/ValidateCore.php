<?php

class ValidateCore
{
	public function isEssence($name)
	{
		return (bool)(is_string($name) && preg_match('/^[0-9a-zA-Z-_]*$/u', $name));
	}

	public function isLanguage($lang)
	{
		return (bool)(is_string($lang) && preg_match('/^[a-zA-Z]{2}$/', $lang));
	}

	public function isPage($name)
	{
		return (bool)(is_string($name) && preg_match('/^([a-zA-Z0-9-]{32})+(.html)&/', $name));
	}
}

?>