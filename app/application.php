<?php
include __DIR__ . '/functions.php';
$application_page = "true";
include __DIR__ . '/src/header.php';
include __DIR__ . '/src/nav.php';
?>

<div id="widgetApplication" style="width: 100vw; min-height: 100vh"></div>

<script>
    // SET CSS PROPERTY
    document.documentElement.style.setProperty('--widgetPrimary', '#5614BB');
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