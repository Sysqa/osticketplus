-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2012. máj. 30. 13:13
-- Szerver verzió: 5.1.62
-- PHP verzió: 5.3.5-1ubuntu7.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- A tábla adatainak kiíratása `ost_email_template`
--

INSERT INTO `ost_email_template` (`cfg_id`, `name`, `notes`, `ticket_autoresp_subj`, `ticket_autoresp_body`, `ticket_notice_subj`, `ticket_notice_body`, `ticket_alert_subj`, `ticket_alert_body`, `message_autoresp_subj`, `message_autoresp_body`, `message_alert_subj`, `message_alert_body`, `note_alert_subj`, `note_alert_body`, `assigned_alert_subj`, `assigned_alert_body`, `ticket_overdue_subj`, `ticket_overdue_body`, `ticket_overlimit_subj`, `ticket_overlimit_body`, `ticket_reply_subj`, `ticket_reply_body`, `created`, `updated`) VALUES
(1, 'osTicket HUN Sablon', 'Új sablon: osTicket Alapértelmezett Sablon másolata', 'Megnyitott Hibajegy [#%ticket]', '%name,\r\n\r\nA hibabejelentést rögzítettük, a hibajegy száma #%ticket. Hamarosan az arra kijelölt személy felveszi a kapcsolatot veled, ha szükséges.\r\n\r\nAz ügy alakulását a következő link segítségével is nyomon lehet követni online: %url/view.php?e=%email&t=%ticket.\r\n\r\nHa további megjegyzéseket szeretnél hozzáfűzni a hibajegyhez, vagy információkat adni az üggyel kapcsolatban, kérlek ne nyiss új hibajegyet. Egyszerűen használd a fent megadott linket.\r\n\r\n%signature', '[#%ticket] %subject', '%name,\r\n\r\nKollégánk létrehozott egy hibajegyet #%ticket a nevedben a következő üzenettel.\r\n\r\n%message\r\n\r\nHa további megjegyzéseket szeretnél hozzáfűzni a hibajegyhez, vagy információkat adni az üggyel kapcsolatban, kérlek ne nyiss új hibajegyet. A következő link segítségével tudod megnézni, vagy hozzászolni a hibajegyhez: %url/view.php?e=%email&t=%ticket.\r\n\r\n%signature', 'Új Hibajegy Riasztás', '%staff,\r\n\r\nÚj hibajegy lett létrehozva: #%ticket\r\n-------------------\r\nNév: %name\r\nEmail: %email\r\nRészleg: %dept\r\n\r\n%message\r\n-------------------\r\n\r\nA hibajegy megtenkintéséhez/megválaszolásához jelentkezz be a hibajegykezelő rendszerbe.', '[#%ticket] Válasz Érkezett', '%name,\r\n\r\nA bejelentett #%ticket ügyre válasz érkezett.\r\n\r\nA hibajegyre adott választ a következő link segítségével tudod megnézni online: %url/view.php?e=%email&t=%ticket.\r\n\r\n%signature', 'Új Üzenet Riasztás', '%staff,\r\n\r\nÚj üzenet érkezett a hibajegyre #%ticket\r\n\r\n----------------------\r\nNév: %name\r\nEmail: %email\r\nRészleg: %dept\r\n\r\n%message\r\n-------------------\r\n\r\nA hibajegy megtenkintéséhez/megválaszolásához jelentkezz be a hibajegykezelő rendszerbe.', 'Új Belső Megjegyzés Riasztás', '%staff,\r\n\r\nBelső megjegyzés érkezett a hibajegyre #%ticket\r\n\r\n----------------------\r\nNév: %name\r\n\r\n%note\r\n-------------------\r\n\r\nA hibajegy megtenkintéséhez/megválaszolásához jelentkezz be a hibajegykezelő rendszerbe.', 'Hibajegy #%ticket Hozzád lett rendelve', '%assignee,\r\n\r\n%assigner hozzádrendelt egy hibajegyet #%ticket!\r\n\r\n%message\r\n\r\nA részletek megtenkintéséhez jelentkezz be a hibajegykezelő rendszerbe.', 'Lejárt Hibajegy Riasztás', '%staff,\r\n\r\nA hibajegy, #%ticket ami hozzád, vagy a részlegedhez lett rendelve, komoly késésben van.\r\n\r\n%url/scp/tickets.php?id=%id\r\n\r\nKeményen kell dolgoznunk, hogy garantálni tudjuk a megfelelő és pontos ügyintézést. Elég a siránkozásból... kérlek old meg az ügyet vagy hallasz még felőlem.\r\n\r\nA te barátságos (habár korlátozott türelmű) Hibabejelntő Rendszered.', 'Hibajegy Létrehozása Megtagadva', '%name\r\n\r\nNem lett létrehozva a hibajegy. Elérted a nyitott hibajegyek maximálisan megengedett számát.\r\n\r\nAhhoz, hogy új hibajegyet tudjál nyitni le kell zárni legalább egy hibajegyedet. Egy nyitott hibajegyhez hozzászólni a következő link segítségével tudsz.\r\n\r\n%url/view.php?e=%email\r\n\r\nKöszönjük.\r\n\r\nKözponti Hibabejelentő Rendszer', '[#%ticket] %subject', '%name,\r\n\r\nKollégánk válaszolt a #%ticket bejelentésedre, a következő üzenettel:\r\n\r\n%response\r\n\r\nReméljük, hogy kollégánk kielégítő választ adott a kérdéseidre. Ha mégsem, kérlek ne nyiss új hibajegyet, inkább válaszolj erre az üzenetre a következő link segítségével, ahol a többi hibajegyeidet is meg tudod tekinteni a válaszokkal együtt.\r\n\r\n%url/view.php?e=%email&t=%ticket\r\n\r\n%signature', '2012-05-29 14:12:58', '2012-05-30 11:47:25');
