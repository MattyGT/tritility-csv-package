<?php

namespace tritilitytest\matthewcsvtest;

use Illuminate\Console\Command;

class GenerateCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GenerateCSVSignature';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a CSV file based an an xls file';

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
        $this->info('Generating CSV file....');
        $path = base_path('public') . "\\spreadsheets\\";
        if ( !file_exists($path) ) { mkdir($path, 0777, true); }
        $spreadsheets = glob($path . "*.xls"); // Find all xls files in directory
        if ( is_array($spreadsheets) && count($spreadsheets) > 0 ) {
            $csv = new \tritilitytest\matthewcsvtest\MatthewCSVTestController();
            $result = $csv->convertSpreadSheetContent();
            $this->info('Operation complete.');
        } else {
            $this->info('No xls files found in public/spreadsheets/.');
        }
    }
}