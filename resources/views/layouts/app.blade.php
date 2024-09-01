<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'アプリケーション')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite('resources/js/chart.js')
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">@yield('header', 'フォームページ')</h1>
        
        {{-- <!-- リンクセクション -->
        <div class="mb-3">
            <a href="{{ route('showForm', ['formId' => 1]) }}" class="btn btn-primary">フォーム 1</a>
            <a href="{{ route('showForm', ['formId' => 2]) }}" class="btn btn-secondary">フォーム 2</a>
        </div> --}}

        <!-- フォーム表示セクション -->
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
