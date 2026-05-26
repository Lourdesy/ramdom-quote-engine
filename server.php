<?php
/**
 * Baseline Server Template
 * Provides  text with the current server timestamp.
 * Confirms that the Docker container and port forwarding 
 * are active.
 */

// 1. Explicitly tell the browser to expect raw text
header("Content-Type: text/plain; charset=UTF-8");

// 2. Prevent the browser from caching the time response
header("Cache-Control: no-cache, must-revalidate");

// 3. Return the payload
echo "Hello from the server at " . date("Y-m-d H:i:s");
?>
