<?php


class LaravelFormBuilderInstallCommand extends \Illuminate\Console\Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-form-builder:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install laravel form builder';

    public function handle()
    {
        $this->comment('Publishing Assets...');
        $this->call('vendor:publish', ['--tag' => 'laravel-form-builder-assets', '--force' => true,]);
        $this->info('Done.');
    }

}
