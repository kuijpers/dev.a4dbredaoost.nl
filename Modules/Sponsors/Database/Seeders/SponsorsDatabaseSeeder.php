<?php

namespace Modules\Sponsors\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sponsors\Entities\Models\Main\Sponsor;
use Modules\Sponsors\Entities\Models\Main\SponsorImage;
use Modules\Sponsors\Entities\Models\Main\SponsorInformation;
use Modules\Sponsors\Entities\Models\Main\SponsorLink;
use Modules\Sponsors\Entities\Models\Main\SponsorPackages;
use Modules\Sponsors\Entities\Models\Main\SponsorSettings;
use Modules\Sponsors\Entities\Models\Main\SponsorSpotlight;

class SponsorsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(SponsorsInformationTableSeeder::class);

         $this->call(SponsorsPackagesTableSeeder::class);

         $this->call(SponsorsTableSeeder::class);

         $this->call(SponsorsImageTableSeeder::class);

         $this->call(SponsorsLinkTableSeeder::class);

         $this->call(SponsorsSpotlightTableSeeder::class);

         $this->call(SponsorsSettingsTableSeeder::class);

    }
}
