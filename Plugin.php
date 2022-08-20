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

        /* Add css if dark mode is enabled */
        $this->template->hook->attach('template:layout:head', 'DarkModeSwitcher:DarkModeStyleInclude');

        /* Load button handling js */
        $this->hook->on('template:layout:js', array('template' => 'plugins/DarkModeSwitcher/Assets/SwitcherButton.js'));
    }

    public function onStartup()
    {
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

