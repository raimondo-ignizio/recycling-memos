<?php

use App\Models\Memo;

foreach ($memos as $memo) {
  echo "{$memo->day} from {$memo->hour_start} to {$memo->hour_end} of type {$memo->type}";
   if ($memo->hour_start_2 && $memo->hour_end_2) {
    echo ", from {$memo->hour_start_2} to {$memo->hour_end_2} of type {$memo->type_2}";
  }
  if ($memo->hour_start_3 && $memo->hour_end_3) {
    echo " and from {$memo->hour_start_3} to {$memo->hour_end_3} of type {$memo->type_3}";
  }
  echo ".<br/>";
}
