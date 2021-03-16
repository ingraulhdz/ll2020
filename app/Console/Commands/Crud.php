<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Crud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator
    {name : Class (singular) for example User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';

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
        //$this->info('Initializing database environment variables...');

        $name = $this->argument('name');
    
         $this->permission($name); 
        // \Artisan::call('make:migration create_'. $plural .'_table --create='.$plural);

        $this->route($name);

        // $this->controller($name);
        // $this->model($name);
        // $this->request($name);
        $minusculas = strtolower($name);
        $plural = Str::plural($minusculas);
    
        // \File::append(base_path('routes/web.php'),
        // 'Route::resource(\'' . $plural. "', [{$name}Controller::class, 'index'])->name('".$plural.".index');");
        // \Artisan::call('make:migration create_'. $plural .'_table --create='.$plural);
    


    }


    protected function getStub($type)
{
    return file_get_contents(resource_path("stubs/$type.stub"));
}

// Next, let’s take a look on how we can create a model using the stub inside resources/stubs.
protected function model($name)
{
    $modelTemplate = str_replace(
        ['{{modelName}}'],
        [$name],
        $this->getStub('Model')
    );

    file_put_contents(app_path("/{$name}.php"), $modelTemplate);
}


protected function request($name)
{
    $requestTemplate = str_replace(
        ['{{modelName}}'],
        [$name],
        $this->getStub('Request')
    );

    if(!file_exists($path = app_path('/Http/Requests')))
        mkdir($path, 0777, true);

    file_put_contents(app_path("/Http/Requests/{$name}Request.php"), $requestTemplate);
}



protected function controller($name)
{
    $controllerTemplate = str_replace(
        [
            '{{modelName}}',
            '{{modelNamePluralLowerCase}}',
            '{{modelNameSingularLowerCase}}'
        ],
        [
            $name,
            strtolower(Str::plural($name)),
            strtolower($name)
        ],
        $this->getStub('Controller')
    );

    file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
}



protected function route($name)
{
    $templete = str_replace(
        [
            '{{modelName}}',
            '{{modelNamePluralLowerCase}}',
            '{{modelNameSingularLowerCase}}'
        ],
        [
            $name,
            strtolower(Str::plural($name)),
            strtolower($name)
        ],
        $this->getStub('Route')
    );

    // if(!file_exists($path = app_path('/GeneratedFiles\Routes')))
    //     mkdir($path, 0777, true);

    file_put_contents(app_path("../Routes/{$name}Routes.php"), $templete);
}



protected function permission($name)
{
    $permissionTemplate = str_replace(
        [
            '{{modelName}}',
            '{{modelNamePluralLowerCase}}',
            '{{modelNameSingularLowerCase}}'
        ],
        [
            $name,
            strtolower(Str::plural($name)),
            strtolower($name)
        ],
        $this->getStub('Permission')
    );

    // if(!file_exists($path = app_path('../GeneratedFiles\Permissions')))
    //     mkdir($path, 0777, true);

    file_put_contents(app_path("../database/seeders/{$name}PermissionsSeeder.php"), $permissionTemplate);
         //\Artisan::call("db:seed --class=".$name."PermissionsSeeder");


}








}
