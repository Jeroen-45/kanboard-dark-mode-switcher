<?php
/* Load dark mode CSS if dark mode is enabled for this user */
if ($this->user->userMetadataModel->get($this->user->getid(), "DarkModeSwitcher_DarkMode", false)) : ?>
    <link rel="stylesheet" href="/plugins/DarkModeSwitcher/Css/Greenwing_dark.css" media="screen">
<?php endif; ?>