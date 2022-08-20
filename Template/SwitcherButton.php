<?php
if ($this->user->userMetadataModel->get($this->user->getid(), "DarkModeSwitcher_DarkMode", false)) : ?>
<li>
    <i class="fa fa-fw fa-sun-o" style="display: inline-block"></i>
    <a data-update-url="<?= $this->url->href('DarkModeSwitcherController', 'disable', array('csrf_token' => $this->app->getToken()->getReusableCSRFToken(), 'plugin' => 'DarkModeSwitcher')) ?>" onclick="DarkModeSwitcherUpdate(this);">Switch to light mode</a>
</li>
<?php else : ?>
<li>
    <i class="fa fa-fw fa-moon-o" style="display: inline-block"></i>
    <a data-update-url="<?= $this->url->href('DarkModeSwitcherController', 'enable', array('csrf_token' => $this->app->getToken()->getReusableCSRFToken(), 'plugin' => 'DarkModeSwitcher')) ?>" onclick="DarkModeSwitcherUpdate(this);">Switch to dark mode</a>
</li>
<?php endif; ?>