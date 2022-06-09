<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'logo', 'website', 'created_at', 'updated_at'];
    
    public function employee()
    {
        return $this->hasMany(Company::class);
    }
    
}
