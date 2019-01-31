<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Package;
use App\Mail\PackageExpired;

class SendExpiryMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:packexpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Package Expiry Mail';

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
        $packages = Package::whereIn('status', ['ship','review','invoice','values'])
                        ->get();
        $packCustomers = array();
        foreach ($packages as $package) {
            $today = date('Y-m-d');
            if(strtotime($today) >= strtotime($package->received.' + 19 days')){
                $packCustomers[$package->customer_id][] = $package;
            }
        }

        foreach ($packCustomers as $custPackages) {
            Mail::to($custPackages[0]->customer->email)->send(new PackageExpired($custPackages));
        }

        $this->info('Package expiry mail send successfully!');
    }
}
