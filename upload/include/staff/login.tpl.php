<?php defined('OSTSCPINC') or die(_('Invalid path')); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?= _('osTicket:: SCP Login') ?></title>
<link rel="stylesheet" href="css/login.css" type="text/css" />
<meta name="robots" content="noindex" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
</head>
<body id="loginBody">
<div id="loginBox">
    <h1 id="logo"><a href="index.php"><?= _('osTicket Staff Control Panel') ?></a></h1>
	<h1><?= $msg ?></h1>
	<br />
	<form action="login.php" method="post">
	<input type="hidden" name=do value="scplogin" />
    <table border=0 align="center">
        <tr><td width=100px align="right"><b><?= _('Username') ?></b>:</td><td><input type="text" name="username" id="name" value="" /></td></tr>
        <tr><td align="right"><b><?= _('Password') ?></b>:</td><td><input type="password" name="passwd" id="pass" /></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;&nbsp;<input class="submit" type="submit" name="submit" value="<?= _('Login') ?>" /></td></tr>
    </table>
</form>
</div>
    <div id="copyRights"><?= _('Copyright &copy; <a href="http://www.osticket.com" target="_blank">osTicket.com</a>') ?></div>
</body>
</html>
