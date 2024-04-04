<?php

$$input = "<script>alert('XSS attack by Vandit!');</script>";
$secure_input = htmlentities($input);

echo $secure_input;

//Output &lt;script&gt;alert(&#039;XSS attack by Vandit!&#039;);&lt;/script&gt;

?>
