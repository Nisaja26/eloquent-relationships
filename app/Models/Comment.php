<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
// menambahkan method baru dengan nama post lalu melakukan relasi belongTo ke dalam odel post
// memberi tahu laravel bahwa model comment terhubung model post
// relasi One to Mony