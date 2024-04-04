<?php

$input = "<p>Test paragraph.</p><!-- Test Comment --> <a href='#YorkUniversity'>Other text</a>";

$secure_input = strip_tags($input);

echo $secure_input;

// Output: Test paragraph. Other text;

?>
