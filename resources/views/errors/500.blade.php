<div class="content">
    <div class="title">Something went wrong.</div>

    @if(app()->bound('sentry') && app('sentry')->getLastEventId())
        <div class="subtitle">Error ID: </div>
        <script src="https://browser.sentry-cdn.com/4.6.3/bundle.min.js" crossorigin="anonymous"></script>
        <script>
            Sentry.init({ dsn: 'https://c09298e2d2c04e25ba586f01f267adca@sentry.io/1402267' });
            Sentry.showReportDialog({ eventId: '500' });
        </script>
    @endif
</div>
