<?php

use Illuminate\Database\Seeder;
use App\Ctegory;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['villa','factory','hose','flat','shop','Owners Association',
        'Horoscope','office','other'];
        foreach ($categories as $cat)
        {
            Ctegory::create([
                'name'=>$cat
            ]);
        }
    }
}
