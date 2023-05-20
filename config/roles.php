<?php

return [
    'super_admin' => [
        'permissions' => ['manage_users', 'manage_roles'], // Example permissions for super admin
    ],
    'admin' => [
        'permissions' => ['manage_users'], // Example permissions for admin
    ],
    'user' => [
        'permissions' => [], // Example permissions for regular user
    ],
];
