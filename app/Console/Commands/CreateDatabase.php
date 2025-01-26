<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    protected $signature = 'db:create';
    protected $description = 'Cria o banco de dados especificado no .env';

    public function handle()
    {
        $database = Config::get('database.connections.mysql.database');

        Config::set('database.connections.mysql.database', null);

        try {
            DB::statement("CREATE DATABASE IF NOT EXISTS `$database`");
            Config::set('database.connections.mysql.username', $database);

            $this->info("Banco de dados '{$database}' criado com sucesso.");

        } catch (\Exception $e) {
            $this->error('Erro ao criar o banco de dados' . $e->getMessage());
        }
    }
}
