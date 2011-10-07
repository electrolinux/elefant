<?php

$page->layout = 'admin';

if (! User::require_admin ()) {
	$page->title = sprintf (
		'<img src="%s" alt="%s" style="margin-left: -7px" />',
		Product::logo_login (),
		Product::name ()
	);
	$page->window_title = i18n_get ('Please log in to continue.');
	if (! empty ($_POST['username'])) {
		echo '<p>' . i18n_get ('Incorrect email or password, please try again.') . '</p>';
	} else {
		echo '<p>' . i18n_get ('Please log in to continue.') . '</p>';
	}
	echo $tpl->render ('admin/index');
	return;
}

header ('Location: /');
exit;

?>