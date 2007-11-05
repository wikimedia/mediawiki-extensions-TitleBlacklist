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
			'titleblacklist-forbidden' => "'''This page title is blacklisted.''' It matches following blacklist regex: '''''\$1'''''",
		),
		'de' => array(
			'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt und bearbeitet werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen
",
			'titleblacklist-forbidden' => "'''Dieser Seitenname steht auf der Schwarzen Liste.''' Der folgende reguläre Ausdruck traf zu: '''''\$1'''''",
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
