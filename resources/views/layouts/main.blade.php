<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="api_token" content="{{ (Auth::user()) ? Auth::user()->api_token : '' }}" />
    <title>{{ __('main.mainTitle') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico"/>
    <link href="/css/app.css" rel="stylesheet"/>
    <link href="/css/sheets.css" rel="stylesheet"/>
    <link href="/css/sidebar.css" rel="stylesheet"/>
<!--    <link href="/css/styles.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>
<!-- Responsive navbar-->

<!-- Header-->
@include('parts.header')
<main>
    @if (Session::has('warning'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>{{__("main.warning")}}</strong> {{ session('warning') }}
        </div>
    @endif
    @yield("content")
</main>

<style>
    html, body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex-grow: 1;
    }
</style>
<!-- Footer-->
@include('parts.footer')
<script src="/js/app.js"></script>
<script src="/js/sendingGrade.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>
    $(function () {
        $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            }
        );
    });
</script>

</body>
</html>
