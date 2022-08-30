<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'user:create {name} {email} {password}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Creates a new user';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		User::create([
			'name'     => $this->argument('name'),
			'email'    => $this->argument('email'),
			'password' => bcrypt($this->argument('password')),
		]);
		$this->info('Successfuly created user');
	}
}
