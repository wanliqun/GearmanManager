#!/usr/bin/env php
<?php

if(!class_exists("GearmanManager\Bridge\GearmanPeclManager")) {
    require __DIR__."/../src/Bridge/GearmanPeclManager.php";
}

declare(ticks = 1);

$gm = NULL;
if (isset($config)) {
    $gm = new GearmanManager\Bridge\GearmanPeclManager($config);  
} else {
    $gm = new GearmanManager\Bridge\GearmanPeclManager();
}
