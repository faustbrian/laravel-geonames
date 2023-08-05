<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;
use Spatie\SimpleExcel\SimpleExcelReader;
use ZipArchive;

final class ImportPostalCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geonames:import-postal-codes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import postal codes from geonames.org';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        foreach (Config::get('geonames.zip.sources') as $source) {
            $this->info("Downloading {$source}");

            Storage::put('geonames/'.\basename($source), Http::get($source)->body());

            $this->info("Extracting {$source}");

            $zip = new ZipArchive();
            $zip->open(storage_path('app/geonames/'.\basename($source)));
            $zip->extractTo(storage_path('app/geonames'));
            $zip->close();

            $this->info("Deleting {$source}");

            Storage::delete('geonames/'.\basename($source));
            Storage::delete('geonames/readme.txt');

            $this->info("Importing {$source}");

            if (\str_contains($source, '.csv.zip')) {
                $textFile = 'geonames/'.\str_replace('.csv.zip', '.txt', \basename($source));
            } else {
                $textFile = 'geonames/'.\str_replace('.zip', '.txt', \basename($source));
            }

            SimpleExcelReader::create(Storage::path($textFile), 'csv')
                ->useDelimiter("\t")
                ->useHeaders([
                    'country_code',
                    'postal_code',
                    'place_name',
                    'admin_name1',
                    'admin_code1',
                    'admin_name2',
                    'admin_code2',
                    'admin_name3',
                    'admin_code3',
                    'latitude',
                    'longitude',
                    'accuracy',
                ])
                ->getRows()
                ->chunk(100)
                ->each(fn (LazyCollection $rows) => PostalCode::upsert($rows->toArray(), ['country_code', 'postal_code']));

            $this->info("Deleting {$textFile}");

            Storage::delete($textFile);
        }
    }
}
