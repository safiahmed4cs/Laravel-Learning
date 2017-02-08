<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:component {modelName : The name of the model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create the component, inside controllers, models, views, services folders';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Component';

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
        // $this->confirm("Are you sure, creating component " . $this->argument('modelName') . "?");
        
        $errros = $this->validations();
        dd( sizeof($errros) );

        $this->createFolders();
        $this->createController();
        
        if (! file_exists('app/Components')) {
            mkdir('app/Components', 0775, true);
        }

        $modelName = ucfirst($modelName);
        if ( ! file_exists('app/Components/'.$modelName )) {
            mkdir('app/Components/'.$modelName, 0775, true);
        }

        $dirPath = 'app/Components/'.$modelName;
        
        if (! file_exists( $dirPath.'/Controller' )) {
            mkdir( $dirPath.'/Controller' , 0775, true);
        }

        if (! file_exists( $dirPath.'/Models' )) {
            mkdir($dirPath.'/Models', 0775, true);
        }
        if (! file_exists( $dirPath.'/Services' )) {
            mkdir( $dirPath.'/Services' , 0775, true);
        }

        dd('success');

    }


    /**
     * Validations.
     * @param model name
     * @return void
     */
    protected function validations()
    {

        $modelName = $this->argument('modelName');

        if ( $modelName === '' || is_null($modelName) || empty($modelName) ) {
            return $this->error('Ops, that should not happen, better luck next time');
        }

        if( trim(strtolower($modelName)) !== 'task' ){
            return $this->error('Ops, that should not happen, currently it is available only to create task component');
        }

        return; 
    }

    /**
     * Create a controller for the model.
     *
     * @return void
     */
    protected function createFolders()
    {
        $controller = Str::studly(class_basename($this->argument('modelName')));

        $modelName = $this->qualifyClass($this->getNameInput());
        dd($modelName, $this->option('resource'));

        $this->call('make:controller', [
            'name' => "{$controller}Controller",
            '--model' => $this->option('resource') ? $modelName : null,
        ]);

        return; 
    }

    /**
     * Create a controller for the model.
     *
     * @return void
     */
    protected function createController()
    {
        $controller = Str::studly(class_basename($this->argument('modelName')));

        $modelName = $this->qualifyClass($this->getNameInput());
        dd($modelName);

        $this->call('make:controller', [
            'name' => "{$controller}Controller",
            '--model' => $this->option('resource') ? $modelName : null,
        ]);

        return; 
    }

}
