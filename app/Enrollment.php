<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Acacha\Stateful\Traits\StatefulTrait;
use Acacha\Stateful\Contracts\Stateful;

/**
 * Class Enrollment.
 *
 * @package App
 *
 */
class Enrollment extends Model  implements Stateful
{
    use StatefulTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state'
    ];

    /**
     * Get the user record associated with the user.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the person record associated with the user.
     */
    public function person()
    {
        return $this->hasOne('App\Person');
    }

    /**
     * Enrollment States.
     *
     * @var array
     */
    protected $states = [
        'step1' => ['initial' => true],
        'step2' => ['final' => true]
    ];

    /**
     * Transaction State Transitions
     *
     * @var array
     */
    protected $transitions = [
        'step1step2' => [
            'from' => 'step1',
            'to' => 'step2'
        ],
        'step2step1' => [
            'from' => 'step2',
            'to' => 'step1'
        ]
    ];

    /**
     * @return bool
     */
    protected function validateStep1step2()
    {
        if ($this->user_id != null) return true;
        return false;
    }

    /**
     * @return bool
     */
    protected function validateStep2step1()
    {
        return false;
    }
}
