<?php
namespace Command\basicswitch;

use Command\basicswitch\switchOffRadio;
use Command\basicswitch\switchOnRadio;
use Command\basicswitch\tuneRadio;

class remote
{
    private $radio=null;

    public function command($action)
    {
        $cls = 'Command\basicswitch\\' . $action;
        if (!empty($action)) {
            $this->radio = new $cls;
        } else {
            throw new \Exception('Action Not Found !!!');
        }
        return $this;
    }

    public function run()
    {
        $this->radio->execute();
        return $this;
    }
}
