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
<i>Hey....</i>
I am <b>Telegram File Storing Bot</b> <a href='https://telegram.dog/Plethro_Admin'>😁</a>

📌 <u>How to Use &amp; What are the Benefits?</u>
<i>📤 Send Me any File. I can upload in my database. 🤗 and </i><i><u>You will get your file link.</u></i>

🤔 <b><u>Benefits:</u></b>
<i>If you have a Telegram Movie Channel! Then it will be useful to you. You can Send me your File and I'll send you link of your file. So subscribers will get the file from me 😊 and </i><b><i><u>Then your channel will not have any Copyright © Issue.🤩</u></i></b>.

⚠️ <b><u>Don't Use Pornography File otherwise you will be ban </u></b>⚠️

Subscribe ℹ️
 <a href='https://telegram.dog/joinchat/AAAAAFIN2ibGFWeYBNj2Xg'><b>1. @TM_Moviez</b></a><b>,
 </b><a href='https://telegram.dog/joinchat/AAAAAEm4tE0nftbUmrSaJg'><b>2. @Tamil_BiggBoss

</b></a> <b><i>and  Thanks to both of them.</i>
 </b><a href='https://telegram.dog/Plethro_Admin'><b>1. Plethro_Admin</b></a><b>, </b><a href='https://telegram.dog/TM_Adminz'><b>2. TM_Adminz</b></a>
   <i>if you ❤️ using this bot!</i>
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🤔";
require_once __DIR__ . "/../vendor/autoload.php";
