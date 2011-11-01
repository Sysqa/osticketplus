<?php
if(!defined('OSTCLIENTINC')) die(_('Kwaheri rafiki!'));

$e=Format::input($_POST['lemail']?$_POST['lemail']:$_GET['e']);
$t=Format::input($_POST['lticket']?$_POST['lticket']:$_GET['t']);
?>
<div>
    <?if($errors['err']) {?>
        <p align="center" id="errormessage"><?=$errors['err']?></p>
    <?}elseif($warn) {?>
        <p class="warnmessage"><?=$warn?></p>
    <?}?>
</div>
<div style="margin:5px 0px 100px 0;text-align:center; width:100%;">
    <p align="center">
        <?=_("To view the status of a ticket, provide us with your login details below.<br/>If this is your first time contacting us or you've lost the ticket ID, please <a href='open.php'>click here</a> to open a new ticket.")?>
    </p>
    <span class="error"><?=Format::htmlchars($loginmsg)?></span>
    <form action="login.php" method="post">
    <table cellspacing="1" cellpadding="5" border="0" bgcolor="#000000" align="center">
        <tr bgcolor="#EEEEEE"> 
            <td><?=_('E-Mail:') ?></td><td><input type="text" name="lemail" size="25" value="<?=$e?>"></td>
            <td><?=_('Ticket ID:') ?></td><td><input type="text" name="lticket" size="10" value="<?=$t?>"></td>
            <td><input class="button" type="submit" value="<?=_('View Status') ?>"></td>
        </tr>
    </table>
    </form>
</div>
