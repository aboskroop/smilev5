<?php 

ob_start();

$API_KEY = '388496656:AAGQE7vshVMmRfeGpYO7TqJ-kY0V7RDXJnc'; 
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$id    = $update->inline_query->from->id;
$user  = '@'.$update->inline_query->from->username;
$first = $update->inline_query->from->first_name;
$last  = $update->inline_query->from->last_name;
$kickuser = $message->reply_to_message->from->username;
$user_id = $message->from->id;
$id = $message->from->id;
$reply = $message->reply_to_message;
$ex = explode('ضع اسم للمجموعه',$text);
$welcome = $message->new_chat_member;
$user = $welcome->first_name;
$usert = $text->first_name;
$user2 = $welcome->username;
$msgid = $message->message_id;
$reply = $message->reply_to_message; 
$reply_id = $reply->message_id;
$msgid = $message->message_id;
$expdel = explode(' ', $text);
$get_sticker = file_get_contents('tg/sticker.txt');
$sticker = explode("\n", $get_sticker);
$get_audio = file_get_contents('tg/audio.txt');
$audio = explode("\n", $get_audio);
$get_voice = file_get_contents('tg/voice.txt');
$voice = explode("\n", $get_voice);
$get_photo = file_get_contents('tg/photo.txt');
$photo = explode("\n", $get_photo);
$get_fwd = file_get_contents('tg/fwd.txt');
$fwd = explode("\n", $get_fwd);
$get_game = file_get_contents('tg/game.txt');
$game = explode("\n", $get_game);
$get_video = file_get_contents('tg/video.txt');
$video = explode("\n", $get_video);
$get_contact = file_get_contents('tg/contct.txt');
$contact = explode("\n", $get_contact);
$get_document = file_get_contents('tg/document.txt');
$document = explode("\n", $get_document);
$get_location = file_get_contents('tg/location.txt');
$location = explode("\n", $get_location);
$groups  = explode("\n",file_get_contents("groups.txt")); 
$get_link = file_get_contents('tg/link.txt');
$link = explode("\n", $get_link);
$get_tag = file_get_contents('tg/tag.txt');
$tag = explode("\n", $get_tag);
$admin = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$id");
$idbotid = 388496656;  // حط ايدي بوتك هنا


if($text == '/start'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>" •  _مرحبا بك عزيزي_ 🕴🏻\n \n • _في سورس سمايل _ 🌟 *v5* \n •  _بوت يعمل على كل المجموعات _ ☄️ \n• _وبمميزات جميله وسرعه فائقه ☃️ _ \n •_ لمعرفه مميزات البوت اكتب الاوامر_  📇",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

if($text == 'السورس'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>" •  _مرحبا بك عزيزي_ 🕴🏻\n \n • _في سورس سمايل _ 🌟 *v5* \n •  _بوت يعمل على كل المجموعات _ ☄️ \n• _وبمميزات جميله وسرعه فائقه ☃️ _ \n •_ لمعرفه مميزات البوت اكتب الاوامر_  📇",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

if($welcome){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>"_مرحبا بك في الكروب_ 😽 \n \n _اسمك_ ☃️➖  $user \n \n _معرفك_ 📮 ➖  @$user2 \n \n \n `S  M  I  L  E  V  5 👮🏻` ",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

if($reply and $text == 'تثبيت' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $pinChatMessage)){
bot('pinChatMessage',[
'chat_id' => $chat_id,
'message_id'=>$message->reply_to_message->message_id
]);

bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`تم تثبيت الرساله بنجاح ⚓️`',
'reply_to_message_id'=>$message->reply_to_message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($reply and $text == 'تثبيت' and strpos($admin, '"status":"member"') == true){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`انت لست ادمن ⚠️`',
'reply_to_message_id'=>$message->reply_to_message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($ex and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $setChatTitle)){
bot('setChatTitle',[
'chat_id'=>$chat_id,
'title'=>$ex[1]
]);
}

if($reply and $text == 'طرد' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $KickChatMember)){
bot('KickChatMember',[
'chat_id' => $chat_id,
'user_id'=>$message->reply_to_message->from->id,
]);

bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'  •  _تم طرد العضو بنجاح_✖️',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'التيم'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'اهلاََ بِكَـ في تيم `SMILE`💭💚

_نبذَة مختصرة عناْ_💡

_فَريقْ برمجَي 🔐 متعدد الاختِصاصاتْ_ 📇❤️

_يتَكون مِن مجموعة اخوة_ 📀🌸

_هدفَهم©وضع بصمةة في~مٌجتمعاتْ تِليكَرام بِطابع📇 عراقــــ🇮🇶ـــي_',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

if($text == 'ايدي'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`your id is` : ' . $user_id,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

if($text == 'قفل الملصقات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $sticker)){
file_put_contents('tg/sticker.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الملصقات بنجاح 🌠 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الملصقات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $sticker)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الملصقات مقفوله مسبقا 🌠 _',
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}


if($text == 'قفل الملصقات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
]);
}

if($text == 'فتح الملصقات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $sticker)){
file_put_contents('tg/sticker.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الملصقات بنجاح 🌠 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}
if($text == 'فتح الملصقات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $sticker)){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_عزيزي الملصقات مفتوحه مسبقا 🌠 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الملصقات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->sticker and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل البصمات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $voice)){
file_put_contents('tg/voice.txt', $chat_id);
bot('sendMessage',[ 
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل البصمات بنجاح 🎤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل البصمات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $voice)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي البصمات مقفوله مسبقا 🎤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل البصمات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح البصمات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $voice)){
file_put_contents('tg/voice.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح البصمات بنجاح 🎤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح البصمات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $voice)){
bot('sendMessage', [
'chat_id' => $chat_id,
'text'=>'_عزيزي البصمات مفتوحه مسبقا 🎤 _',
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح البصمات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->voice and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الصوتيات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $audio)){
file_put_contents('tg/audio.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'text'=>'_تم قفل الصوتيات بنجاح 🎵 _',
 'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الصوتيات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $audio)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الصوتيات مقفوله مسبقا 🎵 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الصوتيات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصوتيات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $audio)){
file_put_contents('tg/audio.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'text'=>'_تم فتح الصوتيات بنجاح 🎵 _',
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصوتيات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $audio)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الصوتيات مفتوحه مسبقا 🎵 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصوتيات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->audio and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الفيديو' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $video)){
file_put_contents('tg/video.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الفيديوهات بنجاح 🎥 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الفيديو' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $video)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الفيديوهات مقفوله مسبقا 🎥 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الفيديو' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الفيديو' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $video)){
file_put_contents('tg/video.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الفيديوهات بنجاح 🎥 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الفيديو' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $video)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الفيديوهات مفتوحه مسبقا 🎥 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الفيديو' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->video and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الملفات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $document)){
file_put_contents('tg/document.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الملفات بنجاح 📁 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الملفات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $document)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الملفات مقفوله مسبقا 📁 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الملفات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الملفات' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $document)){
file_put_contents('tg/document.txt', ' ');

bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الملفات بنجاح 📁 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الملفات' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $document)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الملفات مفتوحه مسبقا 📁 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الملفات' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->document and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الصور' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $photo)){
file_put_contents('tg/photo.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'text'=>'_تم قفل الصور بنجاح 📸 _',
 'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الصور' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $photo)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الصور مقفوله مسبقا 📸 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الصور' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصور' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $photo)){
file_put_contents('tg/photo.txt', ' ');

bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الصور بنجاح 📸 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصور' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $photo)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الصور مفتوحه مسبقا 📸 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الصور' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->photo and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}


$phone = +9647812043100;

if($text == "المطور"){
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$phone,
'first_name'=>"🌟®•ابــو ســكروــب)•®🌟",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}


if($text == 'قفل التوجيه' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $fwd)){
file_put_contents('tg/fwd.txt', "\n" . $chat_id, FILE_APPEND);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل التوجيه بنجاح ↪️ _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل التوجيه' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $fwd)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي التوجيه مقفول مسبقا ↪️ _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل التوجيه' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح التوجيه' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $fwd)){
file_put_contents('tg/fwd.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح التوجيه بنجاح ↪️ _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح التوجيه' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $fwd)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي التوجيه مفتوح مسبقا ↪️ _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}
 
if($text == 'فتح التوجيه' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->forward_from_chat->id){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الالعاب' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $game)){
file_put_contents('tg/game.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الالعاب بنجاح 🎮 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}


if($text == 'قفل الالعاب' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $game)){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_عزيزي الالعاب مقفوله مسبقا 🎮 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الالعاب' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الالعاب' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $game)){
file_put_contents('tg/game.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الالعاب بنجاح 🎮 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الالعاب' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $game)){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_عزيزي الالعاب مفتوحه مسبقا 🎮 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الالعاب' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->game and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل الموقع' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $location)){
file_put_contents('tg/location.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الموقع بنجاح 🌐_',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الموقع' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $location)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الموقع مقفول مسبقا 🌐_',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الموقع' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الموقع' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $location)){
file_put_contents('tg/location.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الموقع بنجاح 🌐_',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الموقع' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $location)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الموقع مفتوح مسبقا 🌐_',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الموقع' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->location and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل جهات الاتصال' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $contact)){
file_put_contents('tg/contact.txt', $chat_id);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'تم قفل جهات الاتصال بنجاح',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل جهات الاتصال' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $contact)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'جهات الاتصال مقفوله',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل جهات الاتصال' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح جهات الاتصال' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $contact)){
file_put_contents('tg/contact.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'text'=>'تم فتح جهات الاتصال بنجاح',
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح جهات الاتصال' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $contact)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'جهات الاتصال مفتوح',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح جهات الاتصال' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($message->contact and !in_array(id, $admin)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}


if($text == 'قفل الروابط' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $link)){
file_put_contents('tg/link.txt', "\n" . $chat_id, FILE_APPEND);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل الروابط بنجاح 📇  _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الروابط' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $link)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الروابط مقفوله مسبقا 📇  _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل الروابط' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الروابط' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $link)){
file_put_contents('tg/link.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح الروابط بنجاح 📇  _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}
if($text == 'فتح الروابط' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $link)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي الروابط مفتوحه مسبقا 📇  _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح الروابط' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if(preg_match('/t.me/',$text) and in_array($chat_id, $link)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == 'قفل اليوزر' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $tag)){
file_put_contents('tg/tag.txt', "\n" . $chat_id, FILE_APPEND);
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_تم قفل اليوزر بنجاح 👤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل اليوزر' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $tag)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي اليوزرات مقفوله مسبقا 👤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'قفل اليوزر' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح اليوزر' and strpos($admin, '"status":"member"') == FALSE and in_array($chat_id, $tag)){
file_put_contents('tg/tag.txt', ' ');
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_تم فتح اليوزر بنجاح 👤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح اليوزر' and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $tag)){
bot('sendMessage',[
 'chat_id' => $chat_id,
 'parse_mode'=>'markdown',
 'text'=>'_عزيزي اليوزرات مفتوحه مسبقا 👤 _',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if($text == 'فتح اليوزر' and strpos($admin, '"status":"member"') == TRUE){
bot('sendMessage', [
'chat_id' => $chat_id,
'parse_mode'=>"markdown",
'text'=>'`انت لست ادمن بلمجموعه` ⚠️ ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}

if(preg_match('/@/', $text)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if ($update && !in_array($chat_id, $u)) {
  file_put_contents("mem.txt", $chat_id."\n",FILE_APPEND);
}
$u = explode("\n",file_get_contents("mem.txt"));
$c = count($u);
if ($text == 'الاعضاء') {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اعضاء البوت 🤖 الخاص بك :- $c",
    'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
  ]);
}

  
if($reply and $text == "حذف" and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $deleteMessage)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$reply_id
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" `تم حذف الرساله بنجاح` 🗑",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}


if($expdel[0] == "مسح" and isset($expdel[1]) and $expdel[1] < 100 and strpos($admin, '"status":"member"') == FALSE and !in_array($chat_id, $deleteMessage)){
for($y = $msgid - $expdel[1]; $y < $msgid; $y++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$y
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" `تم حذف الرسائل بنجاح` 🗑",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}



if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'parse_mode'=>'markdown',
	 'text'=>'`هذا العضو قام بتعديل رسالته` 🚸',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
	 ]);
 }
 

if($message->new_chat_member and $message->new_chat_member->id == $idbotid) {
if(!in_array($chat_id,$groups)) {
file_put_contents("groups.txt", "$chat_id\n", FILE_APPEND);
}
}
if($text == "عدد الكروبات"){
$c = count($groups);
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'text'=>"`NUMBER OF GROUBS IS`  ➣ $c ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
]
]])
]);
}


if(preg_match('/^(انستا) (.*)/', $text, $iinsta)){
$insta = json_decode(file_get_contents("https://instagram.com/".$iinsta[2]."/?__a=1"), true);
$a1 = $insta['user']['biography'];
$a2 = $insta["user"]["followed_by"]["count"];
$a3 = $insta["user"]["follows"]["count"];
$a4 = $insta["user"]["media"]["count"];
$a5 = $insta["user"]["profile_pic_url_hd"];
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$a5,
'caption'=>" • معلومات حسابك هي 📇",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"اسم الحساب 📮",
'url'=>"http://instagram.com/$iinsta[2]"],[
'text'=>"$a1",'url'=>"http://instagram.com/$iinsta[2]"]],[[
'text'=>"عدد متابعينك 🗳",'callback_data'=>"2$iinsta[2]"],[
'text'=>"$a2",'url'=>"http://instagram.com/$iinsta[2]"]],[[
'text'=>" عدد الاعضاء المتابعهم انت 📋",'callback_data'=>"3$iinsta[2]"],[
'text'=>"$a3",'url'=>"http://instagram.com/$iinsta[2]"]],[[
'text'=>"عدد منشوراتك 📰",'callback_data'=>"4$iinsta[2]"],[
'text'=>"$a4",'url'=>"http://instagram.com/$iinsta[2]"]],
]])
]);
}



if($text == 'الاوامر'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'_اهلاََ بِكَـ في_  `SMILE` *v5*💭💚


 `اللستات المساعده` 💡

_م_ *1* ➖ _لعرض اوامر القفل_ 
_م_ *2* ➖ _لعرض خدمات البوت_
_م_ *3* ➖_ لعرض معلومات البوت_

→→→⚙️*SV5*→→→ 📚
`S M I L E ➖ T E A M`  ',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}


if($text == 'م1'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`مرحبا بك في اوامر القفل ل` *sv5*🕴🏻 

⚙️ _قفل_ */* _فتح_ ➖ _الروابط_
⚙️ _قفل_ */* _فتح_ ➖ _اليوزر_
⚙️ _قفل_ */* _فتح_ ➖ _التوجيه_
⚙️ _قفل_ */* _فتح_ ➖ _الملصقات_
⚙️ _قفل_ */* _فتح_ ➖ _الصور_
⚙️ _قفل_ */* _فتح_ ➖ _الفيديو_
⚙️ _قفل_ */* _فتح_ ➖ _الملفات_
⚙️ _قفل_ */* _فتح_ ➖ _الصوتيات_
⚙️ _قفل_ */* _فتح_ ➖ _البصمات_
⚙️ _قفل_ */* _فتح_ ➖ _الالعاب_
⚙️ _قفل_ */* _فتح_ ➖ _الموقع_
⚙️ _قفل_ */* _فتح_ ➖ _جهات الاتصال_


→→→⚙️*SV5*→→→📚 
`S M I L E ➖ T E A M` ',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}


if($text == 'م2'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`المميزات الكليه  ل` *sv5*🕴🏻 



⚙️  _ضع اسم للمجموعه_ ⚓️
🖥 `لوضع اسم للمجموعه` ™
⚙️  _انستا + يوزرك_ ☃️
🖥  `عرض معلومات الحساب` 🗿
⚙️  _عدد الكروبات _ 🌎
🖥 ` لمعرفه كروبات البوت`⚠️
⚙️  _الاعضاء _ 🖼
🖥  `لمعرفه عدد اعضاء البوت` ☢️
⚙️  _حذف بلرد_ 🗑
🖥  `لحذف رساله معينه` 🗑
⚙️  _مسح + عدد_ 🚨
🖥  `لمسح مجموعه من الرسائل` 🚧
⚙️  _طرد بلرد_ 🕴🏻
🖥  `لطرد عضو معين` 🗿
⚙️  _تثبيت بلرد_ ⚓️
🖥  `لتثبيت الرساله في المجموعه` 🚨
⚙️  _ايدي_ ™
🖥  `لعرض ايديك` ™

→→→⚙️*SV5*→→→📚 
`S M I L E ➖ T E A M` ',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}




if($text == 'م3'){
bot('sendMessage',[
'chat_id' => $chat_id,
'parse_mode'=>'markdown',
'text'=>'`المعلومات العامه ل` *sv5*🕴🏻 


⚠️ *1*➖  _ارفع الملف العام والملفات الملحقه_

⚠️ *2* ➖ _ضع  توكن بوتك في سطر_ *5*

⚠️ *3* ➖ _ضع ايدي بوتك في سطر_ *72*

⚠️ *4* ➖ _اعمل ويبهوك لملف_  *smile v5*
   
⚠️ *5* ➖ _يجب رفع الملفات الملحقه كما هي_

⚠️ *6* ➖ _يجب ان تفعل الانلاين لبوتك_

⚠️ *7* ➖ _لمعرفه ايدي بوتك ارسل توكنك لهذا البوت_

☃️ *>*  [البوت](http://t.me/smilebotinfo_bot)  *<*


→→→⚙️*SV5*→→→📚 
`S M I L E ➖ T E A M` ',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>' تابع جديدنا  📚','url'=>'t.me/smile_team']
],

[
['text'=>' اسئلتكم واقتراحاتكم ⚙️','url'=>'t.me/heelp_bot']
],

[
['text'=>' ورشه الفريق ⚒','url'=>'https://t.me/joinchat/D3f5KD6grtn2pTvisrMP3A']
]
]])
]);
}

?>

تم تطوير السورس من قبل فريق 
SMILE TEAM
@IQ_100K
@SMILE_TEAM
@HEELP_BOT
