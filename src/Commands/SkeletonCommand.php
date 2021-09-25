<?php

namespace IamRahul1973\Skeleton\Commands;

use Illuminate\Console\Command;

class SkeletonCommand extends Command
{
    public $signature = 'bootstrap-dashboard-skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
