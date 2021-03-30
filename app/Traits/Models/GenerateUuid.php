<?php

namespace App\Traits\Models;

use Illuminate\Support\Str;

trait GenerateUuid {

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) $model->{$model->getKeyName()} = Str::orderedUuid();
        });
    }

    public function getIncrementing() {
        return false;
    }

    public function getKeyType() {
        return 'string';
    }
}
