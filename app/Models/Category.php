<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shopping_lists()
    {
        return $this->hasMany(ShoppingList::class);
    }

}
