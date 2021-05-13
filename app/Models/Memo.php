<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    protected $table = "memos";

    protected $fillable = [
      "day",
      "hour_start",
      "hour_end",
      "type",
      "hour_start_2",
      "hour_end_2",
      "type_2",
      "hour_start_3",
      "hour_end_3",
      "type_3"
    ];

    protected $casts = [
      "day" => "date:l d/m/Y",
      "created_at" => "datetime",
      "updated_at" => "datetime"
    ];
}
