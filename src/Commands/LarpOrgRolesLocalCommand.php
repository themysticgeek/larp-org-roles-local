<?php

namespace Themysticgeek\LarpOrgRolesLocal\Commands;

use Illuminate\Console\Command;

class LarpOrgRolesLocalCommand extends Command
{
    public $signature = 'larp-org-roles-local';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
