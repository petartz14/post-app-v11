<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\StoreBulkUsers as StoreBulkUsersJob;

class StoreBulkUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-bulk-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store all the users data in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        StoreBulkUsersJob::dispatch();
        return Command::SUCCESS;
    }
}
