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

$EM_CONF[$_EXTKEY] = array(
    'title' => '[joppnet] PHP Content Elements',
    'description' => 'PHP content elements via frontend plugin.',
    'category' => 'plugin',
    'version' => '1.2.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => true,
    'author' => 'Oliver Schlöbe',
    'author_email' => 'oli@joppnet.de',
    'author_company' => 'joppnet',
    'constraints' =>
    array(
        'depends' => array(
            'typo3' => '10.4.0-11.5.99',
        ),
        'suggests' => array(
            't3editor' => '9.0.0-0.0.0',
        ),
        'conflicts' => array(),
    ),
);
