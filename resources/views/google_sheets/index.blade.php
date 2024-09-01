<!-- resources/views/google_sheets/index.blade.php -->
@extends('layouts.app')

@section('title', 'Googleフォームの回答データ')

@section('content')
    <h2>回答データ</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>回答1</th>
                <th>回答2</th>
                <!-- 必要に応じて列を追加 -->
            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody> --}}
    </table>
    <p>kkkk</p>
    <div id="chart-container" style="width: 600px; margin: 0 auto;">
        <canvas id="myChart"></canvas>
    </div>

    <!-- データをJavaScriptに渡す -->
    <script id="chart-labels" type="application/json">{{ json_encode($labels) }}</script>
    <script id="chart-data" type="application/json">{{ json_encode($data) }}</script>
@endsection
