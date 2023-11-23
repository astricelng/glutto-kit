<!doctype html>
<html lang="{{ $site->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? $site->name }}</title>

    @vite('resources/css/site.css')
    @vite('resources/js/site.js')

    {!! Statamic::tag('partial:statamic-peak-seo::snippets/seo')!!}
    {!! Statamic::tag('partial:statamic-peak-browser-appearance::snippets/browser_appearance') !!}
    {!! Statamic::tag('partial:statamic-peak-tools::snippets/live_preview') !!}
</head>
<body class="bg-gray-100 font-sans leading-normal text-gray-800">
<div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center">
    {!! Statamic::tag('partial:layout/seobody') !!}

    {!! Statamic::tag('partial:statamic-peak-tools::snippets/noscript') !!}
    {!! Statamic::tag('partial:statamic-peak-tools::navigation/skip_to_content') !!}
    {!! Statamic::tag('partial:statamic-peak-tools::components/toolbar') !!}

    {{ $template_content }}
</div>
</body>
</html>
