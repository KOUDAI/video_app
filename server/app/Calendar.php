<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    private $html;
    public function showCalendarTag($m, $y)
    {
        $year = $y;
        $month = $m;
        if ($year == null) {
            // システム日付を取得する。 
            $year = date("Y");
            $month = date("m");
        }
        $firstWeekDay = date("w", mktime(0, 0, 0, $month, 1, $year)); // 1日の曜日(0:日曜日、6:土曜日)
        $lastDay = date("t", mktime(0, 0, 0, $month, 1, $year)); // 指定した月の最終日
        // 日曜日からカレンダーを表示するため前月の余った日付をループの初期値にする
        $day = 1 - $firstWeekDay;
        $this->html = <<< EOS
<h1>{$year}年{$month}月</h1>
<table class="table table-bordered">
<tr>
    <th scope="col">日</th>
    <th scope="col">月</th>
    <th scope="col">火</th>
    <th scope="col">水</th>
    <th scope="col">木</th>
    <th scope="col">金</th>
    <th scope="col">土</th>
</tr>
EOS;
// カレンダーの日付部分を生成する
while ($day <= $lastDay) {
    $this->html .= "<tr>";
            // 各週を描画するHTMLソースを生成する
            for ($i = 0; $i < 7; $i++) {
                if ($day <= 0 || $day > $lastDay) {
                    // 先月・来月の日付の場合
                    $this->html .= "<td>&nbsp;</td>";
                } else {
                    $this->html .= "<td>" . $day . "</td>";
                }
                $day++;
            }
            
            $this->html .= "</tr>";
        }
        
        return $this->html .= '</table>';
    }
    
}