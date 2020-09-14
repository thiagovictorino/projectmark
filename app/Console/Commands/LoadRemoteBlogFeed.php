<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\User;
use App\Services\RemoteFeedService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class LoadRemoteBlogFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pm:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will request the content of a remote blog to feed this one';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param RemoteFeedService $remoteFeedService
     * @return void
     */
    public function handle(RemoteFeedService $remoteFeedService)
    {

        $posts = $remoteFeedService->import();
        $this->info("Total of ".count($posts)." posts imported");
        if (empty($posts)) {
            return [];
        }

        Post::insert($posts);
        Cache::forget('blog.index');
    }
}
