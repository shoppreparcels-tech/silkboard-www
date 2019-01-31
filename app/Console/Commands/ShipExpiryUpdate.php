<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\ShipRequest;

class SendExpiryMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:shipexpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shipment Expiry Updated';

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
     * @return mixed
     */
    public function handle()
    {
        $shipments = ShipRequest::whereIn('shipping_status', ['inqueue', 'inreview', 'confirmation'])->get();

        foreach ($shipments as $shipment) {
            if(time() > strtotime($shipment->created_at.' + 7 days')){


            }
        }

        $this->info('Shipment expiry updated successfully!');
    }
}
