<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property int|null $product_id
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_product';
    protected $guarded = false;
}
