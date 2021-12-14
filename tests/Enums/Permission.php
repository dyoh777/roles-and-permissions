<?php

namespace Tarzancodes\RolesAndPermissions\Tests\Enums;

use Tarzancodes\RolesAndPermissions\Helpers\BasePermission;

final class Permission extends BasePermission
{
    // Product permissions
    const DeleteProduct = 'delete_product';
    const MarkAsSoldOut = 'mark_as_sold_out';
    const EditProduct = 'edit_product';
    const CreateProduct = 'create_product';
    const BuyProduct = 'buy_product';

    // Transactions permissions
    const DeleteTransaction = 'delete_transaction';
    const ViewTransaction = 'view_transaction';
}