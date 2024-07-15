<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @mixin IdeHelperModule
 */
class Module extends Model
{
    use HasFactory, HasUuids;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Boots the model after it has been instantiated.
     *
     * This method is called after the model has been instantiated but before its
     * connections are initialized.
     *
     * @return void
     */
    protected static function booted(): void
    {
        parent::boot();
        // Generate a unique ID for each new user when creating a new model.
        static::creating(function ($utilisateur) {
            $utilisateur->id = (string)Str::uuid();
        });
    }
}
