### SourceCode .php
------------
------------
```yarn
<body bgcolor=#000000> 
<body text=#E02A2A> 

<a align="center">
  <a href="https://user-images.githubusercontent.com/109308073/200102009-b23152ce-91cf-4756-a738-1a74413eeda2.gif">
    <img src="https://user-images.githubusercontent.com/109308073/200102009-b23152ce-91cf-4756-a738-1a74413eeda2.gif"/>
  </a>
<br> 
<br>
<a align="center">
  <a href="https://github.com/sponsors/bylickilabs">
    <img src="https://img.shields.io/static/v1?label=Sponsor&message=%E2%9D%A4&logo=GitHub&color=ff69b4"/> 
  </a>
<br>
<br>
/-------------------------------------------------------------\<br />
| ©Thorsten Bylicki | 18.12.2022 | 07:00 Uhr | v.1.5 |<br/>
\-------------------------------------------------------------/<br />
<br /> 
<body bgcolor=999090>
Dieser Generator erstellt ihnen Passwörter mit bis zu 46 Zeichen.<br />
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
$symbols=array('©BYLICKILABS','!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '+', ',', '-', '.', '/', ':', 
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

function generateSymbols($num = 46){
    $ret = '';
    for ($i = 1; $i <= $num ; $i++){
        $ret .= generateSymbol();
    }
    return $ret;
}

if (isset($_POST['anzahl'])){
    $_POST['anzahl'] = preg_replace('/([^0-9]*)/', '', $_POST['anzahl']);
    if ($_POST['anzahl'] >= 46){
        $_POST['anzahl'] = 46;
    }elseif($_POST['anzahl'] == '' || $_POST['anzahl'] <= 0){
        $_POST['anzahl'] = 46;
    }
    $_POST['anzahl'] = $_POST['anzahl'] -0;
    $content = '<font color="green">Erfolgreich Generiert</font>:<br />'.
    'Ihr neues, '.$_POST['anzahl'].'-stelliges Passwort wurde erstellt:<br />'.
    '<textarea style="width:35%;">'.generateSymbols($_POST['anzahl']).'</textarea>'.
    '<br /><br />';
}else{
    $_POST['anzahl'] = 46;
    $content = '';
}

$content .= '
<form method="post">
<br/>
Passwort Länge:
<input name="anzahl" value="'.$_POST['anzahl'].'" />
<input name="submit" type="submit" value="Generieren" />
<br>
<br>
<br>
/--------------------------------------------------------------------------------------------\<br> 
|---------------------- Hier gelangen sie zu meinen Websites -----------------------|<br> 
\--------------------------------------------------------------------------------------------/<br> 
<br>
<details>
<summary>Kontakt / Languages, DevTools & More</summary>
<ul><li>
<details>
<summary>Keybase</summary>
https://keybase.io/bylickilabs
</details></li>
<li> 
<details>
<summary>Github</summary>
© https://github.com/bylickilabs
</details></li>
<li>  
<details>
<summary>Twitter</summary>
© https://twitter.com/DonDada_1703
</details></li>
<li>  
<details>
<summary>Twitch</summary>
© https://www.twitch.tv/dondada1703
</details></li>
<li>
<details>
<summary>TikTok</summary>
© https://www.tiktok.com/@thobyl_82
</details></li>
<li>
<details>
<summary>soundcloud</summary>
© https://soundcloud.com/don-dada-1703
</details></li>
<li> 
<details>
<summary>Instagram</summary>
© https://www.instagram.com/Dondada_1703/
</details></li>
<li> 
<details>
<summary>Telegram</summary>
© https://t.me/Bylickilabs  
</details></li></ul>
<details>

<summary>Languages, Dev Tools & More:</summary>
<ul><li>
<details>
<summary>Languages</summary>
<a href="https://www.cprogramming.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/c/c-original.svg" alt="c" width="40" height="40"/> </a> <a href="https://www.w3schools.com/cpp/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg" alt="cplusplus" width="40" height="40"/> </a> <a href="https://www.w3schools.com/cs/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/csharp/csharp-original.svg" alt="csharp" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> <a href="https://www.java.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> <a href="https://www.python.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="40" height="40"/> </a> <a href="https://www.rust-lang.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/rust/rust-plain.svg" alt="rust" width="40" height="40"/> </a> <a href="https://www.perl.org/" target="_blank" rel="noreferrer"> <img src="https://api.iconify.design/logos-perl.svg" alt="perl" width="40" height="40"/> </a> <a href="https://developer.apple.com/library/archive/documentation/Cocoa/Conceptual/ProgrammingWithObjectiveC/Introduction/Introduction.html" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/apple_objectivec/apple_objectivec-icon.svg" alt="objectivec" width="40" height="40"/> </a> <a href="https://golang.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/go/go-original.svg" alt="go" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.typescriptlang.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-original.svg" alt="typescript" width="40" height="40"/> </a>
</details></li>
<li> 
<details>
<summary>Frontend Development</summary>
<a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://reactjs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" width="40" height="40"/> </a> <a href="https://backbonejs.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/backbonejs/backbonejs-original-wordmark.svg" alt="backbonejs" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.wxwidgets.org/" target="_blank" rel="noreferrer"> <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/WxWidgets.svg" alt="wx_widgets" width="40" height="40"/> </a> <a href="https://www.gtk.org/" target="_blank" rel="noreferrer"> <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/GTK_logo.svg" alt="gtk" width="40" height="40"/> </a>
