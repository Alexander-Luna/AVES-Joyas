<?php

namespace App\Enums;

enum Roles: string
{
        // Roles
    case SUPERADMIN = 'Super Admin';
    case ADMIN = 'Admin';
    case CLIENT = 'Cliente';

        // Permisos
    case VIEW_PRODUCTS = 'view products';
    case CREATE_PRODUCTS = 'create products';
    case EDIT_PRODUCTS = 'edit products';
    case DELETE_PRODUCTS = 'delete products';

        // Otros permisos
    case MANAGE_ADMINS = 'manage users';
    case VIEW_ORDERS = 'view orders';

    public static function roles(): array
    {
        return [
            self::SUPERADMIN->value,
            self::ADMIN->value,
            self::CLIENT->value,
        ];
    }

    public static function permissions(): array
    {
        return [
            self::VIEW_PRODUCTS->value,
            self::CREATE_PRODUCTS->value,
            self::EDIT_PRODUCTS->value,
            self::DELETE_PRODUCTS->value,
            self::MANAGE_ADMINS->value,
            self::VIEW_ORDERS->value,
        ];
    }
}
