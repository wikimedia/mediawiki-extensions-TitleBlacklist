<?php

function efGetTitleBlacklistMessages()
{
	$messages = array(
		'en' => array(
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
		),

		'ar' => array(
			'titleblacklist' => '# هذه قائمة سوداء للعناوين
# كل عنوان يطابق تعبيرا منتظما هنا ممنوع إنشاؤه وتعديله
# استخدم "#" للتعليقات',
			'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'الصفحة المعنونة "$2" لا يمكن إنشاؤها\'\'\' <br />
هي تطابق ريجيكس القائمة السوداء التالي: \'\'\'\'\'$1\'\'\'\'\'
</div>',
			'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'الصفحة المعنونة "$2" لا يمكن نقلها إلى "$3"\'\'\' <br />
هي تطابق ريجيكس القائمة السوداء التالي: \'\'\'\'\'$1\'\'\'\'\'
</span>',
			'titleblacklist-forbidden-upload' => '\'\'\'الملف بالاسم "$2" لا يمكن رفعه\'\'\' <br />
هو يطابق ريجيكس القائمة السوداء التالي: \'\'\'\'\'$1\'\'\'\'\'',
		),

		'de' => array(
			'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt und bearbeitet werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen
",
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
		),

		'fr' => array(
			'titleblacklist' => '# Ceci est un titre mis en liste noire
# Chaque titre qu\'indique ici le code regex est interdit à la création et à l\'édition
# Utilisez « " » pour écrire des commentaires',
			'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'La page intitulée « $2 » ne peut être créée.\'\'\' <br />
Dans la liste noire, elle correspond à l\'expression rationnelle : \'\'\'\'\'$1\'\'\'\'\'
</div>',
			'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'La page intitulée « $2 » ne peut être déplacée à « $3 ».\'\'\' <br />
Dans la liste noire, elle correspond à l\'expression rationnelle : \'\'\'\'\'$1\'\'\'\'\'
</span>',
			'titleblacklist-forbidden-upload' => '\'\'\'Une fichier nommé « $2 » ne peut être téléchargé.\'\'\' <br />
Dans la liste noire, il correspond à l\'expression rationnelle : \'\'\'\'\'$1\'\'\'\'\'',
		),

		'gl' => array(
			'titleblacklist' => '# É unha listaxe negra de títulos
# Ningún título que coincida cunha destas expresións regulares se pode crear e editar
# Use "#" para os comentarios',
		),

		'hsb' => array(
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
		),

		'la' => array(
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
		),

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 */
		'nl' => array(
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

),
	);

	return $messages;
}
