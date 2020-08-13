<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$lang="ru_RU";
$domain="programm";

setlocale(LC_ALL,$lang.'.utf8',$lang.'.utf-8',$lang.'.UTF-8',$lang);
bindtextdomain($domain,__DIR__.'/locale');
bind_textdomain_codeset($domain, "utf-8");
textdomain($domain);
$bottles = 5;
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title><?= _("Welcome to my page") ?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?= _("Thank you very much") ?></h1>
<p><?=_("Finally i have reached 1000 Subsribers and i'am very happy now, it was a long process")?></p>
<p><?=_("today i will drink ")?><b><?=$bottles?></b> <?= ngettext("bottle","bottles",$bottles)?></p>
<p><?= strftime("%A %e %B %Y", time()); ?></p>
</body>
</html>
