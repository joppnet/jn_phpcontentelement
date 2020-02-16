<?php
/***************************************************************
 * Extension Manager/Repository config file for ext "jn_phpcontentelement".
 *
 * Auto generated 16-02-2020 10:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => '[joppnet] PHP Content Elements',
    'description' => 'PHP content elements via frontend plugin.',
    'category' => 'plugin',
    'author' => 'Oliver Schlöbe',
    'author_email' => 'oli@joppnet.de',
    'author_company' => 'joppnet',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.1.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-10.4.99',
        ) ,
        'conflicts' => array() ,
        'suggests' => array(
            't3editor' => '8.0.0-0.0.0',
        ) ,
    ) ,
    'clearcacheonload' => true
);