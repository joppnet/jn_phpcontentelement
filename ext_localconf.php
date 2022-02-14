<?php
defined('TYPO3_MODE') || die('Access denied.');

$boot = static function (): void {
	$iconIdentifier = 'jn_phpcontentelement-plugin-phpcelist';

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'JnPhpcontentelement',
		'Phpcelist',
		[
			\Joppnet\JnPhpcontentelement\Controller\JnPhpcontentController::class => 'list'
		],
		[
			\Joppnet\JnPhpcontentelement\Controller\JnPhpcontentController::class => 'list'
		]
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					phpcelist {
						iconIdentifier = ' . $iconIdentifier . '
						title = LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jn_phpcontentelement_phpcelist.name
						description = LLL:EXT:jn_phpcontentelement/Resources/Private/Language/locallang_db.xlf:tx_jn_phpcontentelement_phpcelist.description
						tt_content_defValues {
							CType = list
							list_type = jnphpcontentelement_phpcelist
						}
					}
				}
				show = *
			}
	}'
	);

	if (TYPO3_MODE === 'BE') {
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		if (!$iconRegistry->isRegistered($iconIdentifier)) {
			$iconRegistry->registerIcon(
				$iconIdentifier,
				\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
				['source' => 'EXT:jn_phpcontentelement/Resources/Public/Icons/Extension.png']
			);
		}
	}
};

$boot();
unset($boot);
