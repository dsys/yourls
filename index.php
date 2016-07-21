<?php
$root_url = getenv("YOURLS_ROOT_URL") ?: "/root";
header("Location: $root_url");
