<?php

header('Content-type: application/xml');
echo file_get_contents("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");

?>