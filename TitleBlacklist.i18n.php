<?php

function efGetTitleBlacklistMessages()
{
	$messages = array(
		"en" => array(
			'titleblacklist' =>
"# That's a title blacklist
# Every title that matches regex here are forbidden to create and edit
# Use \"#\" for comments
",
			'titleblacklist-forbidden' => "'''This page title is blacklisted.''' It matches following blacklist regex: '''''\$1'''''",
		),
	);
	
	return $messages;
}