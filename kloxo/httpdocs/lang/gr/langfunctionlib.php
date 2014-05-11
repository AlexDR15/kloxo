<?php 
function get_plural($word)
{
	if ($word[strlen($word) - 1] === 'ί') {
		$ret = "{$word}";
	} else if ($word[strlen($word) - 1] === 'α') {
		if ($word[strlen($word) - 2] === 'α') {
			$ret = "{$word}τα";
		} else {
			$ret = substr($word, 0, strlen($word) - 1) . "ί";
		}
	} else if ($word[strlen($word) - 1] === 'τατα') {
		$ret = substr($word, 0, strlen($word) - 1) . "τατατα";
	} else {
		$ret = "{$word}α";
	}
	return ucfirst($ret);
}

// This is an alternate get_plural, which has the all the plurals are defined in a file.
function get_plural_alternate($word)
{
	include_once "lang/en/lang_plural.inc";

	if (isset($__plural_desc[$word])) {
		return $__plural_desc[$word];
	}

	return "{$word}s";
}


