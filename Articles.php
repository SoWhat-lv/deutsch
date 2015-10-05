<?php

class Articles
{

    const plural = "Noun that refers to multiple objects.";
    const artikel = "one of three words that refer to gender of Noun";

    function __construct()
    {

    }

    function init()
    {
        if (plural) {
            artikel = "die";
        }

        if (word_ends_with = [-ich, -ig, -ling, -s, [-er,-e]])
            artikel = der;
        elseif (word_ends_with == [-ei, -in, -heit, -keit, -ung, -schaft, -a, -ie, [-e]] OR isNumber())
            artikel = die;
        elseif (word_ends_with == [-chen, -lein, -le, -icht, -tum, -ing, -um, -ment])
            artikel = das;
    }



    function unbestimteArtikel()
    {
        if (SEIN) akkusativ();

    }

}
