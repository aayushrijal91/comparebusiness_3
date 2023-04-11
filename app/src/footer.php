<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-lg-between align-items-center gy-5 gy-lg-0">
			<div class="col-lg-auto text-center">
				<a href="./" class="heroLogo"><?= renderImg('logo.png', 'logo') ?></a>
			</div>
			<div class="col-auto">
				<div class="row gx-2 gx-md-3 gx-xl-5 gy-3 gy-md-0 text-white text-center justify-content-center">
					<div class="col-md-auto fw-700"><?= $site ?></div>
					<div class="col-md-auto">Copyright © <?= date('Y') ?></div>
					<div class="col-md-auto">All Rights Reserved</div>
				</div>
			</div>
			<div class="col-lg-auto text-center">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>

<script async src="https://trkcall.com/scripts/95487.js"></script>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
<script type="text/javascript" src="./assets/js/widget.min.js?v=0.10"></script>

<?php if ($application_page) : ?>
	<script type="text/javascript" src="./assets/js/tracking.min.js?v=0.10"></script>
	<script async src="https://tag.clearbitscripts.com/v1/pk_ddb38ae22b25239f16051287139d4d08/tags.js" referrerpolicy="strict-origin-when-cross-origin"></script>
<?php endif; ?>
</body>

</html>