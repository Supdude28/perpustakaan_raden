<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersmodel extends Model
{
    use HasFactory;
    protected $table = 'table_user';

    protected $primaryKey = 'UserId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];
}
