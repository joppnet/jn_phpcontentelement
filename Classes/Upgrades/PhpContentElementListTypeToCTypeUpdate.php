<?php

declare(strict_types=1);

namespace Joppnet\JnPhpcontentelement\Upgrades;

use TYPO3\CMS\Install\Updates\AbstractListTypeToCTypeUpdate;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;

/**
 * Upgrade wizard to migrate the PHP Content Element from list_type to CType
 */

#[UpgradeWizard('PhpContentElementListTypeToCTypeUpdate')]
final class PhpContentElementListTypeToCTypeUpdate extends AbstractListTypeToCTypeUpdate
{
    public function __construct(ConnectionPool $connectionPool)
    {
        parent::__construct($connectionPool);
    }

    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'jnphpcontentelement_phpcelist' => 'jnphpcontentelement_phpcelist',
        ];
    }

    public function getTitle(): string
    {
        return 'Migrate PHP Content Element from list_type to CType';
    }

    public function getDescription(): string
    {
        return 'Migrates existing content elements from the deprecated list_type plugin to the new CType content element.';
    }
}
