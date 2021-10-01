<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Classes\NotificationService;
use App\Classes\User;

class SendNotificationCommand extends Command
{

    protected $id;
    protected NotificationService $ns;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->user = new User($this->id, "esunaprueba@gmail.com");
        $this->result = $this->ns->notify($this->user, "mensaje de prueba");
        //echo $this->result;
        $data = ['succes' => true,
        'id' => $this->user->getId(),
        'email' => $this->user->getEmail(),
        'message' => "mensaje de prueba",
        'result' => $this->result];
        return response()->json($data, 200, []);
    }
}
