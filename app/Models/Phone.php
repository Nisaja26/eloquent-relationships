<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
// kita menambahkan user dan di dalamnya melakukan ineverse / belongs to take dalam Model user. 
// fungsi memberitahu laravel bahwa model phone dimiliki user 
// relasi one the one sudah berhasil dibuat
// kita akan mencoba menampilkannya kita menggunakkan controller dan view