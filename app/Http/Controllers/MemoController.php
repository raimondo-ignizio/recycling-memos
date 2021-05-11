<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Memo;


class MemoController extends Controller
{
  public function read()
  {
    return view("memos", [
      "memos" => DB::table("memos")->get()
    ]);
  }

  public function create(request $request)
  {
    $day = $request->input("day");
    $hourStart = $request->input("time-start");
    $hourEnd = $request->input("time-end");
    $type = $request->input("recycling-type");
    $hourStart2 = $request->input("time-start-2");
    $hourEnd2 = $request->input("time-end-2");
    $type2 = $request->input("recycling-type-2");
    $hourStart3 = $request->input("time-start-3");
    $hourEnd3 = $request->input("time-end-3");
    $type3 = $request->input("recycling-type-3");

    Memo::Create([
      "day" => $day,
      "hour_start" => $hourStart,
      "hour_end" => $hourEnd,
      "type" => $type,
      "hour_start_2" => $hourStart2,
      "hour_end_2" => $hourEnd2,
      "type_2" => $type2,
      "hour_start_3" => $hourStart3,
      "hour_end_3" => $hourEnd3,
      "type_3" => $type3
    ]);

    return view("memos", [
      "memos" => DB::table("memos")->get()
    ]);
  }
}
