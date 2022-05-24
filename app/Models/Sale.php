<?php
namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function item()
    {
        return $this->hasOne(Item::class,'id','itemId');
    }
     

}

