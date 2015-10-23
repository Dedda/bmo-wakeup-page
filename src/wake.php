<?php

$macs = array(
    "optimus-prime" => "D4:3D:7E:E3:4B:50",
    "hans-dampf" => "BC:5F:F4:5B:76:CB",
    "video" => "00:25:22:D1:BA:C0"
);

$host = $_GET["host"];
$mac = $macs[$host];

exec("sudo etherwake $mac");

echo '<html><head><meta http-equiv="refresh" content="0; URL=http:../"></head></html>';
