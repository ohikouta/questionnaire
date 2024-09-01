<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $labels = ['とても好き', '好き', 'どちらでもない', '嫌い'];
        $data = [10, 20, 5, 8]; // 実際のアンケートデータに置き換えてください

        return view('chart.index', compact('labels', 'data'));
    }
}

