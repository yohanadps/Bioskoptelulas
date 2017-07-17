<?php
$conn = oci_connect("fp", "king", "//localhost/XE");
if (!$conn) {
$m = oci_error();
echo $m['message'], "\n";
exit;
}

?>