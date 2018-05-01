<?php

/**
* String overrides:
*
* To override specific strings on your site with or without enabling the Locale
* module, add an entry to this list. This functionality allows you to change
* a small number of your site's default English language interface strings.
*
* Remove the leading hash signs to enable.
*/
$conf['locale_custom_strings_en'][''] = array(
'Navigation'      => 'Site Menus',
'Submitted by !username on !datetime'      => 'Written by the amazing !username on !datetime',
'Powered by <a href="@poweredby">Drupal</a>'      => 'What rhymes with <a href="@poweredby">Drupal</a>?',
);
// strings were found by doing global searches to know correct assignments, for example the Submitted by... was a string in the node.module file.
