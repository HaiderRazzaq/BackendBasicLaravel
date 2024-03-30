<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
