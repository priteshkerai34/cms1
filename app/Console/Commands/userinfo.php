<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
class userinfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is command ask for user information';

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
        $input['name'] = $this->ask('what is your name');
        $input['email'] = $this->ask('what is your email');
        $input['password'] = $this->ask('Enter Your password');
        $input['password'] = Hash::make($input['password']);
        User::create($input);
        $this->info("user created succesfully");
        /*$input['name'] = $this->ask('what is your name');
        $input['email'] = $this->ask('what is your email');
        $input['password'] = $this->ask('Enter Your password');
        $input['password'] = Hash::make($input['password']);
        User::create($input);
        $this->info("user created succesfully");
        //$this->info("user information: Name: ".$input['name']." and Email: ".$input['email']." and Password: ".$input['password']);*/
    }
}
