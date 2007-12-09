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
It matches the following blacklist regex: '''''\$1'''''
</div>",
			'titleblacklist-forbidden-move' => "<span class=\"error\">
'''A page titled \"\$2\" cannot be moved to \"\$3\"''' <br />
It matches the following blacklist regex: '''''\$1'''''
</span>",
			'titleblacklist-forbidden-upload' => "
'''A file named \"\$2\" cannot be uploaded''' <br />
It matches the following blacklist regex: '''''\$1'''''",
		),

		'ar' => array(
			'titleblacklist' => '# هذه قائمة سوداء للعناوين
# كل عنوان يطابق تعبيرا منتظما هنا ممنوع إنشاؤه وتعديله
# استخدم "#" للتعليقات',
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
		),

		'fr' => array(
			'titleblacklist' => '# Ceci est un titre mis en liste noire
# Chaque titre qu\'indique ici le code regex est interdit à la création et à l\'édition
# Utilisez « " » pour écrire des commentaires',
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

		'nl' => array(
			'titleblacklist' => '# Dit is een zwarte lijst voor paginanamen
# Iedere paginanaam die voldoet aan de reguliere expressie kan niet aangemaakt en bewerkt worden
# Gebruik "#" voor opmerkingen',
			'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'Een pagina genaamd "$2" kan niet worden aangemaakt\'\'\' <br />
Hij voldoet aan de volgende regex op de zwarte lijst: \'\'\'\'\'$1\'\'\'\'\'
</div>',
			'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'Een pagina genaamd "$2" kan niet worden hernoemd naar "$3"\'\'\' <br />
Hij voldoet aan de volgende reguliere expressie op de zwarte lijst: \'\'\'\'\'$1\'\'\'\'\'
</span>',
		),
	);

	return $messages;
}
