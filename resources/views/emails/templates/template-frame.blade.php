<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', env('APP_NAME', 'Beware'))</title>
</head>

<body style="background:#e8e8e8;padding:100px 0;max-width:800px;margin:auto;">
    <!-- Body main wrapper start -->
        <table cellpadding="0" cellspacing="0" width="100%" align="center" style="border:1px solid lightgray;border-collapse:collapse;background:url({{ asset('assets/images/emailer/main-bg.jpg') }}),#eeeeee;background-repeat:no-repeat;font-family:sans-serif;max-width:640px;">
            @include('emails.templates._shared.template-frame--header')
            <tr>
                <td align="center">
                    <table cellpadding="0" cellspacing="0" width="100%" style="background:#fff;max-width:90%">
                        <tr>
                            <td align="center">
                                {{-- <img src="{{ asset('assets/images/emailer/paid-bill.png') }}" width="65"> --}}
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding:0 15px 15px;">
                                 @yield('content')
                            </td>
                        </tr>
                       
                    </table>
                </td>
            </tr>
            @include('emails.templates._shared.template-frame--footer')
        </table>
    <!-- Body main wrapper end -->
</body>
</html>


