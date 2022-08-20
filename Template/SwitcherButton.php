<?php
if ($this->user->userMetadataModel->get($this->user->getid(), "DarkModeSwitcher_DarkMode", false)) : ?>
<li>
    <i class="fa fa-fw fa-sun-o" style="display: inline-block"></i>
    <a href="#">Switch to light mode</a>
</li>
<?php else : ?>
<li>
    <i class="fa fa-fw fa-moon-o" style="display: inline-block"></i>
    <a href="#">Switch to dark mode</a>
</li>
<?php endif; ?>