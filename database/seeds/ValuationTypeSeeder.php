<?php

use Illuminate\Database\Seeder;

use App\ValuationType;

class ValuationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$types = [
            [
				'label' => 'Eating & Drinking habits',
				'desc' => '',
				'color' => '#ff0000'
			],
			[
				'label' => 'Family relations',
				'desc' => '',
				'color' => '#ff1100'
			],
			[
				'label' => 'Intimate relations',
				'desc' => '',
				'color' => '#ff2200'
			],
			[
				'label' => 'Parenting',
				'desc' => '',
				'color' => '#ff3300'
			],
			[
				'label' => 'Friendships & social life',
				'desc' => '',
				'color' => '#ff4400'
			],
			[
				'label' => 'Work/life balance',
				'desc' => '',
				'color' => '#ff5500'
			],
			[
				'label' => 'Personal growth',
				'desc' => '',
				'color' => '#ff6600'
			],
			[
				'label' => 'Recreation',
				'desc' => '',
				'color' => '#ff7700'
			],
			[
				'label' => 'Spirituality',
				'desc' => '',
				'color' => '#ff7700'
			],
			[
				'label' => 'Citizenship / Community',
				'desc' => '',
				'color' => '#ff8800'
			],
			[
				'label' => 'Health & Fitness',
				'desc' => '',
				'color' => '#ff9900'
			]
		];

		foreach ($types as $type) {
			$item = new ValuationType();
			$item->label = $type['label'];
			$item->desc = $type['desc'];
			$item->color = $type['color'];
			$item->save();
		}


    }
}
