<?php

namespace App\Models\Traits;

use App\Models\Timezone;

trait EnsureTimezone
{
    /**
     * Boot the Uuid trait for the model.
     *
     * @return void
     */
    public static function bootEnsureTimezone()
    {
        static::creating(function ($model) {
            $model->assignTimezone();
        });

        static::saving(function ($model) {
            $model->assignTimezone();
        });

        static::updating(function ($model) {
            $model->assignTimezone();
        });
    }

    /**
     * Generate a short, unique string to act as a Unique ID for
     * a given model. This obfuscates what row ID they have
     * in the database (e.g. MySQL)
     *
     * @return boolean
     */
    public function assignTimezone()
    {
        $timezone = Timezone::where('name', 'UTC')->first();
        if ($timezone !== null && ($this->timezone_id == null or ! isset($this->timezone_id))) {
            $this->timezone_id = $timezone->id;
        }
    }
}
