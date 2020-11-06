<?php namespace semuscrud\crudbooster\commands;

use App;
use Illuminate\Console\Command;

class CrudboosterVersionCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crudbooster:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CRUDBooster Version Command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public static $version = "5.5.0";

    public function handle()
    {
        $this->info(static::$version);
    }
}