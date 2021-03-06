
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @isset($meta)
        {{ $meta }}
    @endisset

    <title>{{ $title }}</title>

    @isset($css)
        {{ $css }}
    @endisset
</head>

<body
    @isset($body)
        class="{{ $body }}"
    @endisset
>
    <div id="root">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        {{ $slot }}
    </div>

    @isset($js)
        {{ $js }}
    @endisset
</body>

</html>
