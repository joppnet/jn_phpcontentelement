<?php
defined('TYPO3') or die();

call_user_func(
    function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jnphpcontentelement_domain_model_jnphpcontent');
    }
);
