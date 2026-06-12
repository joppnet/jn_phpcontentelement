<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {
    ExtensionUtility::registerPlugin(
        'JnPhpcontentelement',
        'Phpcelist',
        '[joppnet] PHP Content Element'
    );

    // Re-add the "Startingpoint" and "Recursive" fields that were part of the
    // old list CType plugin tab — TYPO3 14 no longer includes them automatically.
    $GLOBALS['TCA']['tt_content']['types']['jnphpcontentelement_phpcelist']['showitem'] .=
    ',--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pages,recursive';
})();
