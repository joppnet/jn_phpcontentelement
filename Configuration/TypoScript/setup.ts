
plugin.tx_jnphpcontentelement_phpcelist {
    view {
        templateRootPaths.0 = EXT:jn_phpcontentelement/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_jnphpcontentelement_phpcelist.view.templateRootPath}
        partialRootPaths.0 = EXT:jn_phpcontentelement/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_jnphpcontentelement_phpcelist.view.partialRootPath}
        layoutRootPaths.0 = EXT:jn_phpcontentelement/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_jnphpcontentelement_phpcelist.view.layoutRootPath}
    }
    persistence {
		#storagePid = {$plugin.tx_jnphpcontentelement_phpcelist.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}