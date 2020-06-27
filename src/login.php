<?php

error_reporting(E_ALL);
header("Strict-Transport-Security: max-age=16070400; includeSubDomains");

session_start();

return json_encode("true");