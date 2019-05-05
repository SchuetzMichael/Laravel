<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Order extends Model
{
    protected $fillable = ['date', 'price_brutto', 'price_netto', 'user_id'];

    public function books() : BelongsToMany {
        return $this->belongsToMany(Book::class)->withPivot('quantity');
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function status() : HasMany {
        return $this->HasMany(Status::class);
    }

}