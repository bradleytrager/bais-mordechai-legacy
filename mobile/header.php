<?php
if (isset($parashah)) {
$title = $parashah;
}
else{
$title = 'Bais-Mordechai';
}
echo '<div data-role="header" data-position="fixed" data-theme="b">
		<h1>'.$title.'</h1>
		<a href="/mobile/index.php" data-icon="home" class="ui-btn-right">Home</a>
	</div><!-- /header -->';
	?>