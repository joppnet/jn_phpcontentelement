<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jn_phpcontentelement".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['jn_phpcontentelement'] = [
  'title' => '[joppnet] PHP Content Element',
  'description' => 'PHP content elements via frontend plugin.',
  'category' => 'plugin',
  'version' => '1.3.6',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author' => 'Oliver Schlöbe',
  'author_email' => 'oschloebe@joppnet.de',
  'author_company' => 'joppnet',
  'constraints' => [
    'depends' => [
      'typo3' => '12.0.0-14.4.99',
    ],
    'suggests' => [
      't3editor' => '9.0.0-0.0.0',
    ],
    'conflicts' => [],
  ],
];
