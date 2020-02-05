<?php
namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use ParagonIE\EasyRSA\EasyRSA;
use ParagonIE\EasyRSA\PrivateKey;

class DecryptCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'decrypt:message
                            {private_key : Private key which you have after registration.}
                            {message : Encrypted message for decrypt.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Decrypt user message";


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $message = $this->argument('message');
        $private_key = new PrivateKey(urldecode(substr($this->argument('private_key'), 1, -1)));
        try{
            $decrypt_text = EasyRSA::decrypt($message, $private_key);
            $this->info('Decrypt message: '.$decrypt_text);
        } catch (Exception $e) {
            $this->error("An error occurred");
        }
    }
}
