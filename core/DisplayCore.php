<?php

class DisplayCore
{
	private $header;
	private $top;

	protected function __construct() {}

	protected function init_header()
	{
		Variable::$smarty->assign(array(
					"lang" => Variable::$language,
		));

		$this->header = Variable::$smarty->fetch(_DIR_THEMES_.'/header.tpl');
	}

	protected function init_top()
	{
		$this->top = Variable::$smarty->fetch(_DIR_THEMES_.'/top.tpl');
	}

	protected function init_index()
	{
		Variable::$smarty->assign(array(
					"HEADER" => $this->header,
					"TOP" => $this->top
		));
		Variable::$smarty->display(_DIR_THEMES_.'/index.tpl');
	}
}

?>