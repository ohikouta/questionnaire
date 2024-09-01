<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートグラフ</title>
    @vite('resources/js/chart.js') <!-- Viteでビルドしたスクリプトを読み込む -->
</head>
<body>
    <div id="chart-container" style="width: 600px; margin: 0 auto;">
        <canvas id="myChart"></canvas>
    </div>

    <!-- データをJavaScriptに渡す -->
    <!-- データをJavaScriptに渡す -->
    <script id="chart-labels" type="application/json">
        {!! json_encode($labels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
    <script id="chart-data" type="application/json">
        {!! json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

</body>
</html>
