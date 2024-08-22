<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Gera o sitemap do site';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $sitemap = Sitemap::create();

        $sitemap->add(
            Url::create('/')
                ->setPriority(1.0)  // Define a prioridade
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY) // Define a frequência de mudança
                ->setLastModificationDate(Carbon::now()) // Inclui a data de última modificação
        );

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap gerado com sucesso!');
    }
}
