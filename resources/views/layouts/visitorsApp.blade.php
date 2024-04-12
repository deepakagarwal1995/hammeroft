<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $page_title ?? 'Hammer Of Thor' }}</title>
    <meta name="description" content="{{ $page_descr ?? 'Hammer Of Thor' }}" />
    <meta property="og:title" content="{{ $page_title ?? 'Hammer Of Thor' }}">
    <meta property="og:image" content="{{ config('app.url') }}/assets/img/{{ $page_img ?? 'hammer-of-thor-white-150x150.webp' }}">
    <meta property="og:description" content="{{ $page_descr ?? 'Hammer Of Thor' }}">

    <link href="{{ config('app.url') }}/assets/img/hammer-of-thor-white-150x150.webp" rel="icon">
    <link href="{{ config('app.url') }}/assets/img/hammer-of-thor-white-150x150.webp" rel="apple-touch-icon">

    @include('inc.headerLink')

    @yield('head')
</head>

<body>


    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.footerLink')

    @yield('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script></script>
<script>
  @if(Session::has('success'))
       swal("Done", "{{ Session::get('success') }}", "success");
  @endif

</script>
</body>

</html>
