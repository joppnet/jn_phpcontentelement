
plugin.tx_jnphpcontentelement_phpcelist {
    view {
        # cat=plugin.tx_jnphpcontentelement_phpcelist/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:jn_phpcontentelement/Resources/Private/Templates/
        # cat=plugin.tx_jnphpcontentelement_phpcelist/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:jn_phpcontentelement/Resources/Private/Partials/
        # cat=plugin.tx_jnphpcontentelement_phpcelist/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:jn_phpcontentelement/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_jnphpcontentelement_phpcelist//a; type=string; label=Default storage PID
        storagePid = 
    }
}
