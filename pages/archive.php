<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;

// page made just for old layouts compability
header('Location: ?subtopic=forum&action=show_board&id=1');