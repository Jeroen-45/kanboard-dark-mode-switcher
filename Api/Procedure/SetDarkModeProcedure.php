<?php

namespace Kanboard\Plugin\DarkModeSwitcher\Api\Procedure;

use Kanboard\Api\Procedure\BaseProcedure;

class SetDarkModeProcedure extends BaseProcedure
{
    public function setDarkMode($enabled)
    {
        return $this->user->userMetadataModel->save($this->user->getid(), ["DarkModeSwitcher_DarkMode" => $enabled]);
    }
}