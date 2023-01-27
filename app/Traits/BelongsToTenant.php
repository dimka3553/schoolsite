<?php

namespace App\Traits;

use App\Models\Scopes\TenantScope;

trait BelongsToTenant
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);

        static::creating(function ($user) {
            $user->tenant_id = $user->tenant_id ?? app()->make('tenant')->id;
        });
    }

}
