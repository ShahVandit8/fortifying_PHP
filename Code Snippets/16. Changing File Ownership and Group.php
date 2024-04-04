<?php

// Change file ownership
$file_path = "/york/data/file.txt";
$user = "username"; // New owner username

// Change the owner of the file
chown($file_path, $user);

// Change file group ownership
$group = "groupname"; // New group name

// Change the group ownership of the file
chgrp($file_path, $group);

?>
