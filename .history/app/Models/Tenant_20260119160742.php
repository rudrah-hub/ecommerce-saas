<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\Tenant as TenantContract;

class Tenant extends BaseTenant implements TenantContract
{
    protected $fillable = [
        'id',
        'name',
        'timezone',
        'plan',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
        'data' => 'array',
    ];
}
