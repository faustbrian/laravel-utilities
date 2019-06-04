<?php

namespace Artisanry\Utilities\Traits;

trait EncryptPassword
{
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
