<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RegisterAdminCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'register:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Register admin';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle(): int
	{
		$username = $this->ask('Username');

		while (!$this->isValidUsername($username))
		{
			$username = $this->ask('Username');
		}

		$password = $this->secret('Create Password');
		$confirm_password = $this->secret('Confirm Password');
		while (!$this->isValidPassword($password, $confirm_password))
		{
			$password = $this->secret('Create Password');
			$confirm_password = $this->secret('Confirm Password');
		}

		$user = User::create([
			'username' => $username,
			'password' => $password,
		]);

		$this->info('User created successfully:');
		$this->info($user);

		return Command::SUCCESS;
	}

	protected function isValidUsername($username): bool
	{
		if (strlen($username) < 4)
		{
			$this->error('Username should contain at least 4 characters');
			return false;
		}

		$existingUser = User::where('username', $username)->first();
		if ($existingUser)
		{
			$this->error('This username is already taken');
			return false;
		}

		return true;
	}

	protected function isValidPassword($password, $confirm_password): bool
	{
		if (strlen($password) < 6)
		{
			$this->error('Password should contain at least 6 characters');
			return false;
		}

		if ($confirm_password !== $password)
		{
			$this->error('Passwords do not match');
			return false;
		}

		return true;
	}
}
