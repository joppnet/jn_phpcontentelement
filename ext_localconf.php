<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Joppnet\JnPhpcontentelement\Controller\JnPhpcontentController;

defined('TYPO3') or die();

$boot = static function (): void {
	$iconIdentifier = 'jnphpcontentelement-plugin-phpcelist';

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

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	if (!$iconRegistry->isRegistered($iconIdentifier)) {
		$iconRegistry->registerIcon(
			$iconIdentifier,
			\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
			['source' => 'EXT:jn_phpcontentelement/Resources/Public/Icons/Extension.png']
		);
	}
};

$boot();
unset($boot);
