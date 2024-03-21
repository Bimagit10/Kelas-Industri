<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GenerateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ini command untuk generate user fake';

    /**
     * Execute the console command.
     */
    public function handle()
    {
     try{
        User::factory()->count(10)->create();
        $this->info('success generate 10 user');

     }catch(\Throwable $th) {
        throw $th;
        }
    }
}
