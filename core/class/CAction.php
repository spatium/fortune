<?php

/**
 * @author Koval V.
 * @version 0.0.1
 */

class CAction
{
    private $action = array();

    public function __construct()
    {
        $this->getActions();
    }

    private function getActions()
    {
        while ( $_params = Db::select(array(_DB_NAME_ACTION_), true, false)->nextRow() )
        {
            $this->action[] = $_params;
        }
        prent($this->action);
    }
}
