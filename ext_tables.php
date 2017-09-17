<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Joppnet.JnPhpcontentelement',
            'Phpcelist',
            '[joppnet] PHP Content Element'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jn_phpcontentelement', 'Configuration/TypoScript', '[joppnet] PHP Content Element');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jnphpcontentelement_domain_model_jnphpcontent', 'EXT:jn_phpcontentelement/Resources/Private/Language/locallang_csh_tx_jnphpcontentelement_domain_model_jnphpcontent.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jnphpcontentelement_domain_model_jnphpcontent');

    }
);
