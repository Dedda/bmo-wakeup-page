<?php

$host = $_GET["host"];

exec("ssh bmo@$host -t 'sudo shutdown -h now'");

echo '<html><head><meta http-equiv="refresh" content="0; URL=http:../shutup.html"></head></html>';
