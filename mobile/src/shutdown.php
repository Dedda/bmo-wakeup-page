<?php

$host = $_GET["host"];

exec("ssh bmo@$host -T 'sudo shutdown -h now'");

echo '<html><head><meta http-equiv="refresh" content="0; URL=http:../"></head></html>';
