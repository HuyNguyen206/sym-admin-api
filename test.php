<?php
echo '> Enter your name:';
$name = fgets(STDIN);

printf('> Enter your age:');
$age = fgets(STDIN);

printf('> Enter your job:');
$job = fgets(STDIN);


fwrite(STDOUT, "Your name is $name, age is $age, job is $job");