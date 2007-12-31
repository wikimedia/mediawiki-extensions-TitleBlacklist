<?php
/**
 * Internationalisation file for extension TitleBlacklist.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'titleblacklist' =>
"# That's a title blacklist
# Every title that matches regex here are forbidden to create and edit
# Use \"#\" for comments
",
	'titleblacklist-forbidden-edit' => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''A page titled \"\$2\" cannot be created''' <br />
It matches the following blacklist entry: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move' => "<span class=\"error\">
'''A page titled \"\$2\" cannot be moved to \"\$3\"''' <br />
It matches the following blacklist entry: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "
'''A file named \"\$2\" cannot be uploaded''' <br />
It matches the following blacklist entry: '''''\$1'''''",
	'titleblacklist-invalid' => 'The following {{PLURAL:$1|line|lines}} in the title blacklist {{PLURAL:$1|is|are}} invalid; please correct {{PLURAL:$1|it|them}} before saving:',
);

/** Arabic (العربية)
 * @author Meno25
 * @author SPQRobin
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
	'titleblacklist'                  => '# Това е черен списък на заглавията на страници
# Страници, чиито заглавия съответстват с регулярните изрази в списъка, не могат да бъдат създавани или редактирани
# За коментари се използва символът "#"',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Не може да бъде създадена страница с името \"\$2\",''' <br />
тъй като съвпада със запис от черния списък: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Страницата \"\$2\" не може да бъде преместена като \"\$3\",''' <br />
тъй като съвпада със запис от черния списък: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "'''Не може да бъде качен файл с името \"\$2\",''' <br />
тъй като съвпада със запис от черния списък: '''''\$1'''''",
	'titleblacklist-invalid'          => '{{PLURAL:$1|Следният ред|Следните редове}} от черния списък на заглавията {{PLURAL:$1|е невалиден|са невалидни}} и трябва да {{PLURAL:$1|бъде коригиран|бъдат коригирани}} преди съхранение:',
);

$messages['de'] = array(
	'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt und bearbeitet werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen",
	'titleblacklist-forbidden-edit' => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Eine Seite mit dem Titel „$2“ kann nicht erstellt werden.''' <br />
Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''</div>",
	'titleblacklist-forbidden-move' => "<span class=\"error\">
'''Die Seite „$2“ kann nicht nach „$3“ verschoben werden.''' <br />
Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''</span>",
	'titleblacklist-forbidden-upload' => "
'''Eine Datei mit dem Namen „$2“ kann nicht hochgeladen werden.''' <br />
Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
);

/** French (Français)
 * @author Sherbrooke
 * @author Grondin
 */
$messages['fr'] = array(
	'titleblacklist'                  => "# Ceci est un titre mis en liste noire
# Chaque titre qu'indique ici le code regex est interdit à la création et à l'édition
# Utilisez « \" » pour écrire des commentaires",
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''La page intitulée « \$2 » ne peut être créée.''' <br />
Dans la liste noire, elle correspond à l'expression rationnelle : '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''La page intitulée « \$2 » ne peut être déplacée à « \$3 ».''' <br />
Dans la liste noire, elle correspond à l'expression rationnelle : '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "'''Une fichier nommé « $2 » ne peut être téléchargé.''' <br />
Dans la liste noire, il correspond à l'expression rationnelle : '''''$1'''''",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La ligne suivante|Les lignes suivantes}} dans la liste noire des titres {{PLURAL:$1|est invalide|sont invalides}} : vous êtes invité à {{PLURAL:$1|la|les}} corriger avant de sauvegarder.',
);

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
	'titleblacklist'                  => '# Dit is een zwarte lijst voor paginanamen
# Iedere paginanaam die voldoet aan de reguliere expressie kan niet aangemaakt en bewerkt worden
# Gebruik "#" voor opmerkingen',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Een pagina genaamd \"\$2\" kan niet worden aangemaakt''' <br />
Hij voldoet aan de volgende regex op de zwarte lijst: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Een pagina genaamd \"\$2\" kan niet worden hernoemd naar \"\$3\"''' <br />
Hij voldoet aan de volgende reguliere expressie op de zwarte lijst: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "'''Het bestand \"\$2\" kan niet toegevoegd worden''' <br />
Het voldoet aan de volgende reguliere expressie op de zwarte lijst: '''''\$1'''''",
	'titleblacklist-invalid'          => 'De volgende {{PLURAL:$1|regel|regels}} in de zwarte lijst voor paginanamen {{PLURAL:$1|is|zijn}} onjuist. Corrgieer die {{PLURAL:$1|regel|regels}} alstublieft voordat u de lijst opslaat:',
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
