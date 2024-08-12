<?php

namespace App\Models;

use App\Models\User;
use App\Models\classroom;
use App\Models\department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'department',
        'classroom',
        'address',
        'city'];

    use SoftDeletes;

    public function department()
    {
        return $this->belongsTo(department::class);
    }
    public function classroom()
    {
        return $this->belongsTo(classroom::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
