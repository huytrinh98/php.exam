<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class mysql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:createdb {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

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
     * @return mixed
     */
    public function handle()
    {
        config(
            ["database.connections.mysql.database" => null],
            
        );
        $schemaName = $this->argument('name') ?: config("database.connections.mysql");
        // $charset = config("database.connections.mysql.charset",'utf8mb4');
        // $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');

        // putenv ("DB_DATABASE=phpexam");

        config(["database.connections.mysql.database" => null]);

        $query = "CREATE DATABASE $schemaName";

        DB::statement($query);

        // config(["database.connections.mysql.database" => $schemaName]);
    }
}
