<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RemoveUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:removeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rimuovi il ruolo da revisore ad un utente';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        $user = User::where("email", $this->argument("email"))->first();

        if (!$user) {

            $this->error("Utente non trovato");
            return;
        } else if ($user->is_revisor == false) {

            $this->error("L'utente non è un revisore");
            return;

        }

        $user->is_revisor = false;
        $user->save();
        $this->info("L'utente {$user->name} non più un revisore");

    }
}
