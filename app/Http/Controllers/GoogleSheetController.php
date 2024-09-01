<?php

// app/Http/Controllers/GoogleSheetController.php
namespace App\Http\Controllers;

use App\Services\GoogleSheetService;

class GoogleSheetController extends Controller
{
    protected $googleSheetService;

    public function __construct(GoogleSheetService $googleSheetService)
    {
        $this->googleSheetService = $googleSheetService;
    }

    public function index()
    {
        $range = 'Sheet1!A1:E'; // データ範囲を指定
        $data = $this->googleSheetService->getSheetData($range);
        $labels = ['とても好き', '好き', 'どちらでもない', '嫌い'];
        $data = [10, 20, 5, 8]; // 実際のアンケートデータに置き換えてください


        return view('google_sheets.index', compact('data', 'labels'));
    }
}
