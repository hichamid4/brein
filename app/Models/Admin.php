<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $username
 * @property string $fullName
 * @property string $password
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
}
