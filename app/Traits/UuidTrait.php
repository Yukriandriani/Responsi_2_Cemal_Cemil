<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    /**
     * Boot function to generate UUID for the model.
     */
    protected static function bootUuidTrait()
    {
        static::creating(function ($model) {
            // Jika kolom primary key (ID) belum terisi, maka set UUID
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }

            // Menambahkan UUID untuk kolom 'uuid' selain primary key
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }
}
