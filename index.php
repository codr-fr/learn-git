<?php

$date = new \DateTimeImmutable();
$string = "Hello world ! It's now %s and current date is %s";

echo \sprintf($string, $date->format('H:i'), $date->format('d/m/Y'));