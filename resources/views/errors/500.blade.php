@extends('layout')

@section('title', '500 - Internal Server Error')

@section('content')

    <section class="page_head">
        <div class="pagebanner">
            <img src="{{env('AWS_CLOUD_FRONT')}}/img/banner1.jpg" width="100%">
            <div class="banner-cap">
                <h2>Unexpected <span class="text-orange"> Error</span></h2>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="title">Something went wrong.</div>

        @if(app()->bound('sentry') && !empty(Sentry::getLastEventID()))
            <div class="subtitle">Error ID: {{ Sentry::getLastEventID() }}</div>

            <!-- Sentry JS SDK 2.1.+ required -->
            <script src="https://cdn.ravenjs.com/3.3.0/raven.min.js"></script>

            <script>
                Raven.showReportDialog({
                    eventId: '{{ Sentry::getLastEventID() }}',
                    // use the public DSN (dont include your secret!)
                    dsn: 'http://32f140f94aa74489987aad818042a7a3@logs.shoppre.com/2',
                    user: {
                        'name': localStorage.name || 'Your Name',
                        'email': localStorage.email || 'Your Email',
                    }
                });
            </script>
        @endif
    </div>

@endsection
