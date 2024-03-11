<?php

namespace Modules\Statistics\Database\Seeders;
use Modules\Statistics\App\Models\Customer;

use Illuminate\Database\Seeder;

class StatisticsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @todo get the factory working! namespacing?
     */
    public function run(): void
    {
        \Modules\Statistics\App\Models\Customer::factory(10)->create();
    }
}
