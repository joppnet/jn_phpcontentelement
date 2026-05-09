<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Joppnet\JnPhpcontentelement\Controller\JnPhpcontentController;

defined('TYPO3') or die();

$boot = static function (): void {

	ExtensionUtility::configurePlugin(
		'JnPhpcontentelement',
		'Phpcelist',
		[
			JnPhpcontentController::class => 'list'
		],
		[
			JnPhpcontentController::class => 'list'
		]
	);

};

$boot();
unset($boot);
