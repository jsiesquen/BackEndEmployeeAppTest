<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'tokenId', 'isOnline', 'salary', 'age', 'position', 'name', 'gender',
                            'email', 'phone', 'address', 'skills'];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
