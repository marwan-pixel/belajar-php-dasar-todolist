<?php

require_once __DIR__ . "/../Helper/Input.php";

$name = input("Name");
echo "name: $name" . PHP_EOL;

$channel = input("Channel");
echo "channel: $channel" . PHP_EOL;
