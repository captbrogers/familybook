<?php

namespace App\Models\Traits;

trait EnsureUid
{
    /**
     * Boot the Uuid trait for the model.
     *
     * @return void
     */
    public static function bootEnsureUid()
    {
        static::creating(function ($model) {
            $model->generateUid();
        });

        static::saving(function ($model) {
            $model->generateUid();
        });

        static::updating(function ($model) {
            $model->generateUid();
        });
    }

    /**
     * Generate a short, unique string to act as a Unique ID for
     * a given model. This obfuscates what row ID they have
     * in the database (e.g. MySQL)
     *
     * @return boolean
     */
    public function generateUid()
    {
        if ($this->uid == null or ! isset($this->uid)) {
            $this->uid = uidGenerator();
        }
    }
}
