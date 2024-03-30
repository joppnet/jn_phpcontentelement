<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jn_phpcontentelement".
 *
 * Auto generated 29-10-2021 09:39
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['jn_phpcontentelement'] = [
    'title' => '[joppnet] PHP Content Elements',
    'description' => 'PHP content elements via frontend plugin.',
    'category' => 'plugin',
    'version' => '1.3.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => true,
    'author' => 'Oliver Schlöbe',
    'author_email' => 'oschloebe@joppnet.de',
    'author_company' => 'joppnet',
    'constraints' =>
    array(
        'depends' => array(
            'typo3' => '12.0.0-12.4.99',
        ),
        'suggests' => array(
            't3editor' => '9.0.0-0.0.0',
        ),
        'conflicts' => array(),
    ),
];
