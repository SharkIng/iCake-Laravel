<?php

	class ProductTableSeeder extends Seeder{

		public function run(){

			foreach (range(1, 10) as $index => $value) {
				Product::create({
					'name' => 'My Product #'.($value+1),
					'pic' => '/pictures/'.($value+1).'.png',
					'description' => 'Description #'.($value+1),
					'price' => '100',
				});
			}
		}
	}

?>