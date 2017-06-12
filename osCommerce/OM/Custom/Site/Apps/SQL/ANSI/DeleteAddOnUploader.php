<?php
/**
 * osCommerce Apps Marketplace Website
 *
 * @copyright (c) 2017 osCommerce; https://www.oscommerce.com
 * @license BSD; https://www.oscommerce.com/license/bsd.txt
 */

namespace osCommerce\OM\Core\Site\Apps\SQL\ANSI;

use osCommerce\OM\Core\Registry;

class DeleteAddOnUploader
{
    public static function execute(array $params): bool
    {
        $OSCOM_PDO_OLD = Registry::get('PDO_OLD');

        return $OSCOM_PDO_OLD->delete('contrib_admins', [
            'contrib_packages_id' => $params['id'],
            'userprofile_id' => $params['user_id']
        ], [
            'prefix_tables' => false
        ]) === 1;
    }
}