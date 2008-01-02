<?php
/**
 * Internationalisation file for extension TitleBlacklist.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'titleblacklist' =>
"# This is a title blacklist. Titles that match a regex here cannot be created.
# Use \"#\" for comments.
",
	'titleblacklist-forbidden-edit' => 'The title "$2" has been banned from creation.  It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" cannot be moved to "$3", because the title "$3" has been banned from creation. It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'The file name "$2" has been banned from creation. It matches the following blacklist entry: <code>\$1</code>',
	'titleblacklist-invalid' => 'The following {{PLURAL:$1|line|lines}} in the title blacklist {{PLURAL:$1|is|are}} invalid; please correct {{PLURAL:$1|it|them}} before saving:',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'titleblacklist'                  => '# هذه قائمة سوداء للعناوين
# كل عنوان يطابق تعبيرا منتظما هنا ممنوع إنشاؤه وتعديله
# استخدم "#" للتعليقات',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''الصفحة المعنونة \"\$2\" لا يمكن إنشاؤها''' <br />
هي تطابق ريجيكس القائمة السوداء التالي: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''الصفحة المعنونة \"\$2\" لا يمكن نقلها إلى \"\$3\"''' <br />
هي تطابق ريجيكس القائمة السوداء التالي: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "'''الملف بالاسم \"\$2\" لا يمكن رفعه''' <br />
هو يطابق ريجيكس القائمة السوداء التالي: '''''\$1'''''",
	'titleblacklist-invalid'          => '{{PLURAL:$1|السطر|السطور}} التالية في قائمة العناوين السوداء {{PLURAL:$1|غير صحيح|غير صحيحة}}؛ من فضلك {{PLURAL:$1|صححه|صححهم}} قبل الحفظ:',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'titleblacklist'                  => '# Страницата съдържа черен списък за заглавия на страници
# Страници, чиито заглавия съответстват с регулярните изрази в списъка, не могат да бъдат създавани или редактирани
# За коментари се използва символът "#"',
	'titleblacklist-forbidden-edit'   => 'Страницата "$2" не може да бъде създадена, тъй като съвпада със запис от черния списък: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Страницата "$2" не може да бъде преместена като "$3", тъй като съвпада със запис от черния списък: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Файлът "$2" не може да бъде качен, тъй като съвпада със запис от черния списък: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Следният ред|Следните редове}} от черния списък на заглавията {{PLURAL:$1|е невалиден|са невалидни}} и трябва да {{PLURAL:$1|бъде коригиран|бъдат коригирани}} преди съхранение:',
);

/** German (Deutsch)
 */
$messages['de'] = array(
	'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen.",
	'titleblacklist-forbidden-edit'   => "'''Eine Seite mit dem Titel „$2“ kann nicht erstellt werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-move'   => "'''Die Seite „$2“ kann nicht nach „$3“ verschoben werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-upload' => "'''Eine Datei mit dem Namen „$2“ kann nicht hochgeladen werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-invalid'          => 'Die {{PLURAL:$1|folgende Zeile|folgenden Zeilen}} in der Sperrliste {{PLURAL:$1|ist|sind}} ungültig; bitte korrigiere diese vor dem Speichern:',
);

/** Finnish (Suomi)
 * @author Str4nd
 */
$messages['fi'] = array(
	'titleblacklist' => '# Tämä on uudelleenluonnilta suojattujen sivujen luettelo.
# Uusien sivujen luominen on estetty sivuista, joiden otsikot vastaavat täällä määritettyjä säännöllisiä lausekkeita.
# Käytä "#"-merkkiä kommentointiin.',
);

/** French (Français)
 * @author Grondin
 */
$messages['fr'] = array(
	'titleblacklist'                  => "# Ceci est un titre mis en liste noire
# Chaque titre qu'indique ici le code regex ne peux être créé.
# Utilisez « # » pour écrire des commentaires",
	'titleblacklist-forbidden-edit'   => "Le titre « $2 » est interdit à la création.
Dans la liste noire, il est détecté par l'entrée suivante : <code>$1</code>",
	'titleblacklist-forbidden-move'   => "La page intitulée « $2 » ne peut être déplacée vers « $3 » parce que cette dernière a été interdite à la création. Dans la liste noire, elle correspond à l'entrée : <code>$1</code>",
	'titleblacklist-forbidden-upload' => "Le fichier intitulé « $2 » est interdit à la création. Dans la liste noire, il correspond à l'entrée : <code>$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La ligne suivante|Les lignes suivantes}} dans la liste noire des titres {{PLURAL:$1|est invalide|sont invalides}} : vous êtes invité à {{PLURAL:$1|la|les}} corriger avant de sauvegarder.',
);

/** Galician (Galego) */
$messages['gl'] = array(
	'titleblacklist' => '# É unha listaxe negra de títulos
# Ningún título que coincida cunha destas expresións regulares se pode crear e editar
# Use "#" para os comentarios',
);

$messages['hsb'] = array(
	'titleblacklist' => '# To je čorna lisćina nastawkowych mjenow
# Kóžde nastawkowe mjeno, kotrež so k regularnemu wurazej hodźi, njesmě so wutworjeć a wobdźěłować
# Wužij "#" za komentary',
	'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'Strona z titulom "$2" njehodźi so wutworić\'\'\' <br />
Wotpowěduje slědowacemu regularnemu wurazej čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'
</div>',
	'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'Strona z titulom "$2" njeda so do "$3"\'\'\' přesunyć.<br />
Kryje so ze slědowacym regularnym wurazom čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'
</span>',
	'titleblacklist-forbidden-upload' => '\'\'\'Dataja z mjenom "$2" njeda so nahrać\'\'\' <br />
Kryje so ze slědowacym regularnym wurazom čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'',
);

$messages['la'] = array(
	'titleblacklist' => '# Hic est index titulorum prohibitorum
# Tituli qui congruunt cum expressione regulari sequente nec creari nec recenseri possunt
# Utere "#" pro commentariis',
	'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'Pagina cum titulo "$2" nec creari nec recenseri potest\'\'\' <br />
Hic titulus congruit cum expressione regulari: \'\'\'\'\'$1\'\'\'\'\'
</div>',
	'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'Pagina cum titulo "$2" non ad "$3" moveri potest\'\'\' <br />
Hic titulus congruit cum expressione regulari: \'\'\'\'\'$1\'\'\'\'\'
</span>',
	'titleblacklist-forbidden-upload' => '\'\'\'Fasciculus cum titulo "$2" onerari non potest\'\'\' <br />
Hic titulus congruit cum expressione regulari: \'\'\'\'\'$1\'\'\'\'\'',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 */
$messages['nl'] = array(
	'titleblacklist'                  => '# Dit is een zwarte lijst voor paginanamen. Iedere paginanaam die voldoet aan een regex kan niet aangemaakt en bewerkt worden.
# Gebruik "#" voor opmerkingen.',
	'titleblacklist-forbidden-edit'   => 'Een pagina met de naam "$2" kan niet aangemaakt worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" kan niet hernoemd worden naar "$3", omdat pagina\'s met de naam "$3" niet aangemaakt kunnen worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Het bestand "$2" kan niet toegevoegd worden. Deze bestandsnaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-invalid'          => 'De volgende {{PLURAL:$1|regel|regels}} in de zwarte lijst voor paginanamen {{PLURAL:$1|is|zijn}} ongeldig. Verbeter die {{PLURAL:$1|regel|regels}} alstublieft voordat u de lijst opslaat:',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'titleblacklist'                  => "# Aquò es un títol mes en lista negra 
# Cada títol qu'indica aicí lo còde regex es interdich a la creacion e a l'edicion 
# Utilizatz « # » per escriure de comentaris",
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\"> '''La pagina intitolada « \$2 » pòt pas èsser creada.''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''\$1''''' </div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\"> '''La page intitolada « \$2 » pòt pas èsser deplaçada a « \$3 ».''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''\$1''''' </span>",
	'titleblacklist-forbidden-upload' => "'''Un fichièr nomenat « $2 » pòt pas èsser telecargat.''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''$1'''''",
);

/** Russian (Русский)
 * @author VasilievVV
 */
$messages['ru'] = array(
	'titleblacklist' =>
"# Это список запрещённый названий
# Любая статья, название которой попадает под этот список, не может быть создана
# Используйте « # » для комментариев",
	'titleblacklist-forbidden-edit' => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Страница с названием \"\$2\" не может быть создана''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move' => "<span class=\"error\">
'''Страница с названием \"\$2\" не может быть перемещена''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "
'''Файл с названием \"\$2\" не может быть загружен''' <br />
Он попадает под следующую запись списка запрещенных названий: '''''\$1'''''",
	'titleblacklist-invalid' => '{{PLURAL:$1|Следующая строка|Следующие строки}} в списке запрещенный названий {{PLURAL:$1|не является правильным регулярным выражением|не являются правильными регулярными выражениями}}. Пожалуйста, исправьте {{PLURAL:$1|её|их}} перед сохранением:',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'titleblacklist'                  => '# Dit is ju Swotte Lieste fon nit wonskede Siedennoomen.
# Älke Siedennoome, ap dän do foulgjende reguläre Uutdrukke touträffe, kon nit moaked un beoarbaided wäide.
# Text bääte ne Ruute „#“ wäd as Kommentoar betrachted.',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Ne Siede mäd dän Tittel „\$2“ kon nit moaked wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''\$1'''''</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Ju Siede „\$2“ kon nit ätter „\$3“ ferschäuwen wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''\$1'''''</span>",
	'titleblacklist-forbidden-upload' => "'''Ne Doatäi mäd dän Noome „$2“ kon nit hoochleeden wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''$1'''''",
);

/** Cantonese (粵語 / 廣東話)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'titleblacklist' =>
"# 呢個係一個標題黑名單。同呢度配合正規表達式嘅標題係唔可以新開嘅。
# 用 \"#\" 去做註解。
",
	'titleblacklist-forbidden-edit' => '個標題 "$2" 已經禁止咗去開版。佢同下面黑名單嘅項目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 唔可以搬到去 "$3"，由於個標題 "$3" 已經禁止咗去開。佢同下面黑名單嘅項目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '個檔名 "$2" 已經禁止咗去開版。佢同下面黑名單嘅項目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '下面響標題黑名單嘅{{PLURAL:$1|一行|幾行}}無效；請響保存之前改正{{PLURAL:$1|佢|佢哋}}:',
);

/** chinese (simplified) (中文 (简化字))
 * @author Fdcn
 * @author Shinjiman
 */
$messages['zh-hans'] = array(
	'titleblacklist' =>
"# 本页面为“标题黑名单”。任何匹配本名单正则表达式的标题会被阻止建立和编辑。
# 请使用\"#\"来添加注释。
",
	'titleblacklist-forbidden-edit' => '标题 "$2" 已经被禁止创建。它跟以下黑名单的项目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 不可以移动到 "$3"，由于该标题 "$3" 已经被禁止创建。它跟以下黑名单的项目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '文件名称 "$2" 已经被禁止创建。它跟以下黑名单的项目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '以下在标题黑名单上的{{PLURAL:$1|一行|多行}}无效；请在保存前改正{{PLURAL:$1|它|它们}}:',
);

/** Chinese (Traditional) (中文 (傳統字))
 * @author Fdcn
 * @author Shinjiman
 */
$messages['zh-hant'] = array(
	'titleblacklist' =>
"# 本頁面為「標題黑名單」。任何匹配本名單正則表達式的標題會被阻止建立和編輯。
# 請使用\"#\"來添加註釋。
",
	'titleblacklist-forbidden-edit' => '標題 "$2" 已經被禁止創建。它跟以下黑名單的項目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 不可以移動到 "$3"，由於該標題 "$3" 已經被禁止創建。它跟以下黑名單的項目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '檔案名稱 "$2" 已經被禁止創建。它跟以下黑名單的項目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '以下在標題黑名單上的{{PLURAL:$1|一行|多行}}無效；請在保存前改正{{PLURAL:$1|它|它們}}:',
);

$messages['zh']     = $messages['zh-hans'];
$messages['zh-cn']  = $messages['zh-hans'];
$messages['zh-hk']  = $messages['zh-hant'];
$messages['zh-sg']  = $messages['zh-hans'];
$messages['zh-tw']  = $messages['zh-hant'];
$messages['zh-yue'] = $messages['yue'];
