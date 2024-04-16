<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        DB::unprepared(file_get_contents(public_path('ma_holiday.sql')));
    }
}
