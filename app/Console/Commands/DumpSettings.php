<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use DB;
use File;

class DumpSettings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Beware:DumpSettings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update application setting';

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
     * @return int
     */
    public function handle()
    {
		$settings = \App\Models\Setting::pluck('value','key')->toArray();
		$stringify_settings = var_export($settings, true);
		$content            = "<?php return {$stringify_settings};";

		File::put(config_path('app_settings.php'), $content);
		
		$this->info('Setting file has been updated.');
    }
}
