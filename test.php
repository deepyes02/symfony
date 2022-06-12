<?php
$title = " Hello darkness my old friend, I have come to see you again";
echo str_split(strtolower(implode("-", explode("+", urlencode(trim($title)), '15'))), 125)[0];