<?php
include __DIR__ . '/functions.php';
$application_page = "true";
include __DIR__ . '/src/header.php';
include __DIR__ . '/src/nav.php';
?>

<div id="uploadDocument" style="width: 100vw; min-height: 100vh"></div>

<script>
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    if (params.quoteId) {
        localStorage.setItem('quoteId', params.quoteId);
    }
    localStorage.setItem('sourceUrl', 'https://comparebusiness.aiims-staging.com.au/design3');
</script>
<script>
    // SET CSS PROPERTY
    document.documentElement.style.setProperty('--widgetPrimary', '#5614BB');
    document.documentElement.style.setProperty('--widgetSecondary', '#5614BB');
    document.documentElement.style.setProperty('--widgetTertiary', '#5614BB');
    document.documentElement.style.setProperty('--widgetQuaternary', '#f2f2f2');
</script>
<script src="https://s3.ap-southeast-2.amazonaws.com/widget.driveiq/assets/js/all.js" crossorigin></script>
<script src="https://s3.ap-southeast-2.amazonaws.com/widget.driveiq/widgetApplication/js/2.eaf4f15d.chunk.js" crossorigin></script>
<script src="https://s3.ap-southeast-2.amazonaws.com/widget.driveiq/widgetApplication/js/main.06d95ded.chunk.js" crossorigin></script>
<script src="https://s3.ap-southeast-2.amazonaws.com/widget.driveiq/widgetApplication/js/runtime~main.a8a9905a.js" crossorigin></script>

<?php include __DIR__ . '/src/footer.php'; ?>