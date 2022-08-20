<?php

namespace Kanboard\Plugin\DarkModeSwitcher;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        /* Add the switcher button in the header */
        $this->template->hook->attach('template:header:dropdown', 'DarkModeSwitcher:SwitcherButton');

        /* Load dark mode CSS if dark mode is enabled for this user */
        if ($this->user->userMetadataModel->get($this->user->getid(), "DarkModeSwitcher_DarkMode", false)) {
            $this->hook->on('template:layout:css', array('template' => 'plugins/Css/Greenwing_dark.css'));
        }
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Dark mode Switcher';
    }

    public function getPluginDescription()
    {
        return t('A simple plugin that adds a button to switch between dark and light modes');
    }

    public function getPluginAuthor()
    {
        return 'Jeroen Tas';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Jeroen-45/kanboard-dark-mode-switcher';
    }
}

