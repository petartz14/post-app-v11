<?php

namespace App\Console\Commands;

use App\Jobs\StoreBulkPosts as StoreBulkPostsJob;
use Illuminate\Console\Command;

class StoreBulkPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-bulk-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store all the posts data in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        StoreBulkPostsJob::dispatch();
        return Command::SUCCESS;
    }
}
