<?php

use Shared\Domain\ValueObjects\Role;

return [
    'users' => [
        'create' => [Role::MASTER, ROLE::ADMIN, Role::MANAGER],
        'edit' => [Role::MASTER, ROLE::ADMIN, Role::MANAGER],
        'edit_own' => [Role::EMPLOYEE],
        'delete' => [Role::MASTER, ROLE::ADMIN, Role::MANAGER],,
    ],
];