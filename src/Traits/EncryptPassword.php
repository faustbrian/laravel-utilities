<?php

namespace BrianFaust\Utilities\Traits;

trait EncryptPassword
{
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
