<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person.
 *
 * @package App
 */
class Person extends Model
{
    /**
     * Get the user record associated with the user.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
