<?php
require_once($GLOBALS['g_campsiteDir']. "/$ADMIN_DIR/templates/template_common.php");

if (!SecurityToken::isValid()) {
    camp_html_display_error(getGS('Invalid security token!'));
    exit;
}

if (!$g_user->hasPermission('ManageTempl')) {
	camp_html_display_error(getGS("You do not have the right to modify templates."));
	exit;
}

$f_path = Input::Get('f_path', 'string', '');
$f_charset = Input::Get('f_charset', 'string', '');
$fileName = isset($_FILES['f_file']['name']) ? $_FILES['f_file']['name'] : '';

$backLink = "/$ADMIN/templates/upload_templ.php?Path=".urlencode($f_path);

if (!Template::IsValidPath($f_path.DIR_SEP.$fileName, false)) {
	camp_html_goto_page("/$ADMIN/templates/");
}

$result = Template::OnUpload("f_file", $f_path, null, $f_charset);

if (!PEAR::isError($result)) {
	Template::UpdateStatus();
	camp_html_add_msg(getGS('File "$1" uploaded.', $fileName), "ok");
	camp_html_goto_page("/$ADMIN/templates/?Path=" . urlencode($f_path));
} else {
	camp_html_add_msg($result->getMessage());
	camp_html_goto_page($backLink);
}


?>