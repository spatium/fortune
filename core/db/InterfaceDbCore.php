<?php

interface InterfaceDbCore
{
	// возвращает ассоциативный массив
	public function _array($result);
	// выполняет запрос к базе данных
	public function _query($sql);
	// возвращает ассоциативный массивв
	public function _assoc($result);
	// выборка в базе
	public function _select($sql);
	public function _row($result);
}

?>