/---------------------------------------\<br />
| ©Thorsten Bylicki | 23.10.2022 |<br />
\---------------------------------------/<br />
<br /> 
Dieser Generator erstellt f&uuml;r Sie kompatible Schlüssel mit bis zu 95 Zeichen.<br />
Dafür werden verwendet: Buchstaben von a-z, A-Z, sowie Zahlen und erlaubte Sonderzeichen.<br />
Sollte der gezeigte Schlüssel Ihnen nicht sicher genug sein, generieren sie einfach einen neuen.<br />
<br />
<?php
if (version_compare(PHP_VERSION, '4.1.0', '<')) {
    if (isset($HTTP_POST_VARS['submit']) && isset($HTTP_POST_VARS['anzahl'])){
        $_POST['submit'] = $HTTP_POST_VARS['submit'];
        $_POST['anzahl'] = $HTTP_POST_VARS['anzahl'];
    }
}
if (version_compare(PHP_VERSION, '4.2.0', '<')) {
    srand((double) microtime() * 1000000);
}
$symbols=array('!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '+', ',', '-', '.', '/', ':', 
';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~');
$buchst=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
foreach($buchst as $tmp){
    $symbols[] = $tmp;
}
foreach($buchst as $tmp){
    $symbols[] = strtoupper($tmp);
}
for($i = 0; $i <= 9; $i++){
    $symbols[] = $i;
}

function generateSymbol(){
    global $symbols;
    return $symbols[rand(0, count($symbols))];    
}

function generateSymbols($num = 95){
    $ret = '';
    for ($i = 1; $i <= $num ; $i++){
        $ret .= generateSymbol();
    }
    return $ret;
}

if (isset($_POST['anzahl'])){
    $_POST['anzahl'] = preg_replace('/([^0-9]*)/', '', $_POST['anzahl']);
    if ($_POST['anzahl'] >= 95){
        $_POST['anzahl'] = 95;
    }elseif($_POST['anzahl'] == '' || $_POST['anzahl'] <= 0){
        $_POST['anzahl'] = 10;
    }
    $_POST['anzahl'] = $_POST['anzahl'] -0;
    $content = '<font color="green">Erfolgreich</font>:<br />'.
    'Ihr neuer, '.$_POST['anzahl'].' - stelliger Schlüssel wurde erstellt:<br />'.
    '<textarea style="width:45%;">'.generateSymbols($_POST['anzahl']).'</textarea>'.
    '<br /><br />';
}else{
    $_POST['anzahl'] = 95;
    $content = '';
}

$content .= '
<form method="post">
<br />
Passwort Länge:
<input name="anzahl" value="'.$_POST['anzahl'].'" />
<input name="submit" type="submit" value="Generieren" />
</form>
<br />
--------------------------------------------<br /> 
Hier gelangen sie zu meinen Websites<br /> 
--------------------------------------------<br /> 
<a href="https://github.com/bylickilabs">Github</a> | <a href="https://www.twitch.tv/dondada1703">Twitch</a> | <a href="https://www.tiktok.com/@dondada_1703">TikTok</a> |
<a href="https://keybase.io/bylickilabs">Keybase</a> | <a href="https://soundcloud.com/don-dada-1703">Soundcloud</a>
<br />
<br />
<a href="http://www.bylickilabs.de">Private Website</a>
<br />
';

echo $content;
