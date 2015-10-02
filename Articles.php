<?php

class WordOrder {

	const plural  = "Noun that refers to multiple objects.";
	const artikel = "one of three words that refer to gender of Noun";

	function __construct() {

	}

	function init() {
		if ( plural ) {
			artikel = "die";
		}
	}
}
