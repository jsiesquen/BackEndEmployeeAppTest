<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // mass-assignment valid
    protected $fillable = [ 'tokenId', 'isOnline', 'salary', 'age', 'position', 'name', 'gender',
                            'email', 'phone', 'address', 'skills'];

    public function getName()
    {
        return $this->name;
    }
}
