<?php

require 'vendor/autoload.php';

use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

$instagram = new InstagramBasicDisplay([
    'appId' => '2897223953686449',
    'appSecret' => '●●●●●●●●',
    'redirectUri' => 'https://tiendalocal.club/'
]);

echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";







?>