<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Marketing Mix Model')">
        <meta name="author" content="@yield('meta_author', 'Truejay')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/icons.css')) }}
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')
    </head>
    <body class="authentication-bg">
        @include('includes.partials.read-only')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div>
        </div>

        <footer class="footer footer-alt">
            @lang('labels.general.copyright') &copy; {{ date('Y') }} - {{ app_name() }}
        </footer>

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
