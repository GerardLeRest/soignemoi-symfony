<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

$password = $argv[1] ?? null;

if (!$password) {
    echo "Usage: php hash.php \"mot_de_passe\"\n";
    exit;
}

$factory = new PasswordHasherFactory([
    'common' => ['algorithm' => 'bcrypt'],
]);

$hasher = $factory->getPasswordHasher('common');

$hash = $hasher->hash($password);

echo $hash . PHP_EOL;
