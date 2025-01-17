<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * users
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
// method users  dan didalamnya melakukan relasi Belongs to Many ke dalam model user dan kita set pivot table dengan user_role