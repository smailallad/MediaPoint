<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creation de base de donnée.';

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
        $schemaName = $this->argument('name')?:config('database.connections.mysql.database');
        $charset = config('database.connections.mysql.charset','utf8mb4');
        $collation = config('database.connections.mysql.collation','utf8mb4_general_ci');
        config(['database.connections.mysql.database' => null]);
        //echo $schemaName;
        $query = "DROP DATABASE IF EXISTS $schemaName;";
        //$query = "SHOW DATABASES;";
        DB::statement($query);
        $query = "CREATE DATABASE IF NOT EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";
        DB::statement($query);
        echo "Database $schemaName créer avec succée.";
        config(['database.connections.mysql.database' => $schemaName]);

    }
}
