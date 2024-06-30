<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = "loans";

    protected $fillable = ['user_id', 'book_id', 'fecha_inicio', 'fecha_devolucion', 'devuelto'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
