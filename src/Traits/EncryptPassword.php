<?php



declare(strict_types=1);

namespace BrianFaust\Utilities\Traits;

trait EncryptPassword
{
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
