<?php

namespace Themysticgeek\LarpOrgRolesLocal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Themysticgeek\LarpOrgRolesLocal\LarpOrgRolesLocal
 */
class LarpOrgRolesLocalFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larp-org-roles-local';
    }
}
