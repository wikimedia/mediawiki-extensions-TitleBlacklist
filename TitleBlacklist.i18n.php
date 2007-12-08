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
			'titleblacklist-forbidden' => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''A page titled \"\$2\" cannot be created''' <br/>
It matches the following blacklist regex: '''''\$1'''''
</div>",
			'titleblacklist-forbidden-move' => "<span class=\"error\">
'''A page titled \"\$2\" cannot be moved to \"\$3\"''' <br/>
It matches the following blacklist regex: '''''\$1'''''
</span>",
			'titleblacklist-forbidden-upload' => "
'''A file named \"\$2\" cannot be uploaded''' <br/>
It matches the following blacklist regex: '''''\$1'''''",
		),

		'ar' => array(
			'titleblacklist' => '# هذه قائمة سوداء للعناوين
# كل عنوان يطابق تعبيرا منتظما هنا ممنوع إنشاؤه وتعديله
# استخدم "#" للتعليقات',
			'titleblacklist-forbidden' => '\'\'\'عنوان هذه الصفحة في القائمة السوداء.\'\'\' إنه يوافق التعبير المنتظم التالي في القائمة السوداء: \'\'\'\'\'$1\'\'\'\'\'',
		),

		'de' => array(
			'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt und bearbeitet werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen
",
			'titleblacklist-forbidden' => "'''Dieser Seitenname steht auf der Schwarzen Liste.''' Der folgende reguläre Ausdruck traf zu: '''''\$1'''''",
		),

		'fr' => array(
			'titleblacklist' => '# Ceci est un titre mis en liste noire
# Chaque titre qu\'indique ici le code regex est interdit à la création et à l\'édition
# Utilisez « " » pour écrire des commentaires',
			'titleblacklist-forbidden' => '\'\'\'Cette page est mise en liste noire.\'\'\'  Cette mise en liste noire est due au code regex : \'\'\'\'\'$1\'\'\'\'\'',
		),

		'gl' => array(
			'titleblacklist' => '# É unha listaxe negra de títulos
# Ningún título que coincida cunha destas expresións regulares se pode crear e editar
# Use "#" para os comentarios',
			'titleblacklist-forbidden' => '\'\'\'Esta páxina está na listaxe negra.\'\'\' Coincide coa expresión regular seguinte da listaxe negra : \'\'\'\'\'$1\'\'\'\'\'',
		),

		'hsb' => array(
			'titleblacklist' => '# To je čorna lisćina nastawkowych mjenow
# Kóžde nastawkowe mjeno, kotrež so k regularnemu wurazej hodźi, njesmě so wutworjeć a wobdźěłować
# Wužij "#" za komentary',
			'titleblacklist-forbidden' => '\'\'\'Tuta stronowe mjeno je w čornej lisćinje.\'\'\' Hodźi so k slědowacemu regularnemu wurazej čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'',
		),

		'la' => array(
			'titleblacklist' => '# Hic est index titulorum prohibitorum
# Tituli qui congruunt cum expressione regulari sequente ni creari ni recenseri possunt
# Utere "#" pro commentariis',
			'titleblacklist-forbidden' => '\'\'\'Titulus huius paginae in indice titulorum prohibitorum est.\'\'\' Congruit cum expressione regulari: \'\'\'\'\'$1\'\'\'\'\'',
		),

		'nl' => array(
			'titleblacklist' => '# Dit is een zwarte lijst voor paginanamen
# Iedere paginanaam die voldoet aan de reguliere expressie kan niet aangemaakt en bewerkt worden
# Gebruik "#" voor opmerkingen',
			'titleblacklist-forbidden' => '\'\'\'Deze paginanaam staat op de zwarte lijst.\'\'\' Hij voldoet aan de volgende reguliere expressie op de zwarte lijst: \'\'\'\'\'$1\'\'\'\'\'',
		),
	);

	return $messages;
}
