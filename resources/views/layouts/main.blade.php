<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sandbox</title>
</head>
<body>
{{--    เหมือนกับตอน import ทำแบบนี้เพื่อความเป้นระเบียบสวยงาม--}}
    @include('layouts.menu')
    <div class="container">
        @yield('content')
    </div>

    <footer>
        Footer Zone
    </footer>
</body>
</html>
