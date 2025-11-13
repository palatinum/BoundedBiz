<?php
return [
    'orm' => 'eloquent',
    'models' => [
        'user' => App\Models\User::class,
        'order' => App\Models\Order::class,
        'invoice' => App\Models\Invoice::class,
    ],
    'roles' => [
        'system_admin' => 'admin',
        'company_admin' => 'manager',
        'employee' => 'employee',
    ],
    'permissions' => [
        'create_user' => 'create-user',
        'manage_orders' => 'manage-orders',
        'view_invoices' => 'view-invoices',
    ]

];