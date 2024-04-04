<?php

// Read and write for owner, nothing for everybody else
chmod("/york/data/file.txt", 0600);

// Read and write for owner, read for everybody else
chmod("/york/data/file.txt", 0644);

// Everything for owner, read and execute for others
chmod("/york/data/file.txt", 0755);

// Everything for owner, read and execute for owner's group
chmod("/york/data/file.txt", 0750);

?>
