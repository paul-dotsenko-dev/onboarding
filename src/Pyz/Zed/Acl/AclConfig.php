<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Acl;

use Spryker\Shared\Acl\AclConstants;
use Spryker\Zed\Acl\AclConfig as SprykerAclConfig;

class AclConfig extends SprykerAclConfig
{
    protected const BUNDLE_MERCHANT_DASHBOARD_GUI_PAGE = 'merchant-dashboard-gui-page';
    protected const BUNDLE_PROFILE_DASHBOARD_GUI_PAGE = 'merchant-profile-gui-page';

    protected const RULE_TYPE_DENY = 'deny';

    /**
     * @return array
     */
    public function getInstallerRules()
    {
        $installerRules = parent::getInstallerRules();
        $installerRules[] = [
            'bundle' => static::BUNDLE_MERCHANT_DASHBOARD_GUI_PAGE,
            'controller' => AclConstants::VALIDATOR_WILDCARD,
            'action' => AclConstants::VALIDATOR_WILDCARD,
            'type' => static::RULE_TYPE_DENY,
            'role' => AclConstants::ROOT_ROLE,
        ];
        $installerRules[] = [
            'bundle' => static::BUNDLE_PROFILE_DASHBOARD_GUI_PAGE,
            'controller' => AclConstants::VALIDATOR_WILDCARD,
            'action' => AclConstants::VALIDATOR_WILDCARD,
            'type' => static::RULE_TYPE_DENY,
            'role' => AclConstants::ROOT_ROLE,
        ];

        return $installerRules;
    }

    /**
     * @return array
     */
    public function getInstallerUsers()
    {
        return [
            'admin@spryker.com' => [
                'group' => AclConstants::ROOT_GROUP,
            ],
            'admin_de@spryker.com' => [
                'group' => AclConstants::ROOT_GROUP,
            ],
            //this is related to existent username and will be searched into the database
        ];
    }
}
