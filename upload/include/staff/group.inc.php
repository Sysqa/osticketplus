<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die(_('Access Denied'));

$info=($errors && $_POST)?Format::input($_POST):Format::htmlchars($group);
if($group && $_REQUEST['a']!='new'){
    $title=sprintf(_('Edit Group: %s'), $group['group_name']);
    $action='update';
}else {
    $title=_('Add New Group');
    $action='create';
    $info['group_enabled']=isset($info['group_enabled'])?$info['group_enabled']:1; //Default to active 
}

?>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
 <form action="admin.php" method="POST" name="group">
 <input type="hidden" name="do" value="<?=$action?>">
 <input type="hidden" name="a" value="<?=Format::htmlchars($_REQUEST['a'])?>">
 <input type="hidden" name="t" value="groups">
 <input type="hidden" name="group_id" value="<?=$info['group_id']?>">
 <input type="hidden" name="old_name" value="<?=$info['group_name']?>">
 <tr><td>
    <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform">
        <tr class="header"><td colspan=2><?=Format::htmlchars($title)?></td></tr>
        <tr class="subheader"><td colspan=2>
                <?= _('Group permissions set below applies cross all group members, but don\'t apply to adminstrators and Dept. managers in some cases.') ?>
            </td></tr>
        <tr><th><?= _('Group Name:') ?></th>
            <td><input type="text" name="group_name" size=25 value="<?=$info['group_name']?>">
                &nbsp;<font class="error">*&nbsp;<?=$errors['group_name']?></font>
                    
            </td>
        </tr>
        <tr>
            <th><?= _('Group Status:') ?></th>
            <td>
                <input type="radio" name="group_enabled"  value="1"   <?=$info['group_enabled']?'checked':''?> /> <?= _('Enabled') ?>
                <input type="radio" name="group_enabled"  value="0"   <?=!$info['group_enabled']?'checked':''?> /><?= _('Disabled') ?>
                &nbsp;<font class="error">&nbsp;<?=$errors['group_enabled']?></font>
            </td>
        </tr>
        <tr><th valign="top"><br><?= _('Dept Access') ?></th>
            <td class="mainTableAlt"><i><?= _('Select departments group members are allowed to access in addition to thier own department.') ?></i>
                &nbsp;<font class="error">&nbsp;<?=$errors['depts']?></font><br/>
                <?
                //Try to save the state on error...
                $access=($_POST['depts'] && $errors)?$_POST['depts']:explode(',',$info['dept_access']);
                $depts= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE.' ORDER BY dept_name');
                while (list($id,$name) = db_fetch_row($depts)){
                    $ck=($access && in_array($id,$access))?'checked':''; ?>
                    <input type="checkbox" name="depts[]" value="<?=$id?>" <?=$ck?> > <?=$name?><br/>
                <?
                }?>
                    <a href="#" onclick="return select_all(document.forms['group'])"><?= _('Select All') ?></a>&nbsp;&nbsp;
                    <a href="#" onclick="return reset_all(document.forms['group'])"><?= _('Select None') ?></a>&nbsp;&nbsp;
            </td>
        </tr>
        <tr><th><?= _('Can <b>Create</b> Tickets') ?></th>
            <td>
                <input type="radio" name="can_create_tickets"  value="1"   <?=$info['can_create_tickets']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_create_tickets"  value="0"   <?=!$info['can_create_tickets']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Ability to open tickets on behalf of users!') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can <b>Edit</b> Tickets') ?></th>
            <td>
                <input type="radio" name="can_edit_tickets"  value="1"   <?=$info['can_edit_tickets']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_edit_tickets"  value="0"   <?=!$info['can_edit_tickets']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Ability to edit tickets. Admins & Dept managers are allowed by default.') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can <b>Close</b> Tickets') ?></th>
            <td>
                <input type="radio" name="can_close_tickets"  value="1" <?=$info['can_close_tickets']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_close_tickets"  value="0" <?=!$info['can_close_tickets']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('<b>Mass Close Only:</b> Staff can still close one ticket at a time when set to No') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can <b>Transfer</b> Tickets') ?></th>
            <td>
                <input type="radio" name="can_transfer_tickets"  value="1" <?=$info['can_transfer_tickets']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_transfer_tickets"  value="0" <?=!$info['can_transfer_tickets']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Ability to transfer tickets from one dept to another.') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can <b>Delete</b> Tickets') ?></th>
            <td>
                <input type="radio" name="can_delete_tickets"  value="1"   <?=$info['can_delete_tickets']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_delete_tickets"  value="0"   <?=!$info['can_delete_tickets']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Deleted tickets can\'t be recovered!') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can Ban Emails') ?></th>
            <td>
                <input type="radio" name="can_ban_emails"  value="1" <?=$info['can_ban_emails']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_ban_emails"  value="0" <?=!$info['can_ban_emails']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Ability to add/remove emails from banlist via tickets interface.') ?></i>
            </td>
        </tr>
        <tr><th><?= _('Can Manage Premade') ?></th>
            <td>
                <input type="radio" name="can_manage_kb"  value="1" <?=$info['can_manage_kb']?'checked':''?> /><?= _('Yes') ?>
                <input type="radio" name="can_manage_kb"  value="0" <?=!$info['can_manage_kb']?'checked':''?> /><?= _('No') ?>
                &nbsp;&nbsp;<i><?= _('Ability to add/update/disable/delete premade responses.') ?></i>
            </td>
        </tr>
    </table>
    <tr><td style="padding-left:165px;padding-top:20px;">
            <input class="button" type="submit" name="submit" value="<?= _('Submit') ?>">
            <input class="button" type="reset" name="reset" value="<?= _('Reset') ?>">
            <input class="button" type="button" name="cancel" value="<?= _('Cancel') ?>" onClick='window.location.href="admin.php?t=groups"'>
        </td>
    </tr>
 </form>
</table>
