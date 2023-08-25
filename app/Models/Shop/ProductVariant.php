<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductVariant extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name'
    ];

    protected $translatable = ['name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
