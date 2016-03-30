<?php
namespace Haris\app3;

use Haris\app1\appClass as app1Class;
use Haris\app2\appClass as app2Class;
use Haris\app2 as app2;

require_once "app1.php";
require_once "app2.php";

app1Class::staticFunc();
app2Class::staticFunc();

echo \Haris\app1\CONSTANT;
echo "<br>";
echo app2\CONSTANT;