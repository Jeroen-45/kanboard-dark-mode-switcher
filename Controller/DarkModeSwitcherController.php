<?php
namespace Kanboard\Plugin\DarkModeSwitcher\Controller;

use \Kanboard\Controller\BaseController;

class DarkModeSwitcherController extends BaseController
{
    public function enable()
    {
        $this->setDarkMode(true);
    }

    public function disable()
    {
        $this->setDarkMode(false);
    }

    private function setDarkMode($enable)
    {
        $this->userMetadataModel->save($this->userSession->getid(), ["DarkModeSwitcher_DarkMode" => $enable]);
    }
}
