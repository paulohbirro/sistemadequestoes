<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swagger\Analysis;
use Swagger\StaticAnalyser;
use Swagger\Util;

class Swagger extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'swagger';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Gera documentação Swagger buscando annotations nos arquivos do projeto";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Gerando documentação');

        $paths = [
            base_path('app/Http/Requests/Api'),
            base_path('routes/api.php'),
            base_path('app/Http/Controllers/Api')
        ];

        $path_exclude = [];

        $analyser = new StaticAnalyser();
        $analysis = new Analysis();

        $finder = Util::finder($paths, $path_exclude);

        foreach ($finder as $file)
            $analysis->addAnalysis($analyser->fromFile($file->getPathname()));

        $analysis->process(Analysis::processors());

        $counter = 0;
        $methods = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch'];

        foreach ($analysis->swagger->paths as $path)
        {
            foreach ($path as $method => $operation)
            {
                if ($operation !== null && in_array($method, $methods))
                {
                    $this->info(str_pad($method, 7, ' ', STR_PAD_LEFT) . ' ' . $path->path);
                    $counter++;
                }
            }
        }

        $this->info($counter.' operations documented');

        $analysis->swagger->saveAs(base_path('resources/swagger.json'));
    }
}
