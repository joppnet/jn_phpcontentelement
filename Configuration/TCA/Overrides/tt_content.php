<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {
    ExtensionUtility::registerPlugin(
        'JnPhpcontentelement',
        'Phpcelist',
        '[joppnet] PHP Content Element'
    );
})();
