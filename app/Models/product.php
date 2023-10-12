<?php


namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class product extends Model
{
    use HasFactory;
    protected  $table = 'products';
    protected $fillable = ['name', 'description', 'unit_price', 'item_code'];


    static public function getRecord()
    {
        $return = self::select('products.*');

        $return = $return->orderBy('id', 'desc')

            ->orderBy('id', 'desc')
            ->paginate(50);

        return $return;
    }

}
