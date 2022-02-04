<?php
$hashAlgo = "sha256";
$hashValue = hash($hashAlgo, "password1");
echo $hashValue;