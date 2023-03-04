<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table = "reserves";
    protected $fillable = ['user_id',"book_id","reserve"];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

}

