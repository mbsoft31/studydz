<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Section;
use App\User;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sections = [
			[
				"id" => 1,
				"name" => 'primary-education',
				"title" => 'Primary education',
				"subsections" => [
					[
						"id" => 5,
						"name" => 'first-grade',
						"title" => 'First grade',
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
						]
					],
					[
						"id" => 6,
						"name" => 'second-grade',
						"title" => 'Second grade',
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
						]
					],
					[
						"id" => 7,
						"name" => 'third-grade',
						"title" => 'Third grade',
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
							[
								"id" => 26,
								"name" => 'hist-geo',
								"title" => 'التاريخ والجغرافية',
							],
							[
								"id" => 27,
								"name" => 'français',
								"title" => 'اللغة الفرنسية',
							],
						]
					],
					[
						"id" => 8,
						"name" => 'fourth-grade',
						"title" => 'Fourth grade',
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
							[
								"id" => 26,
								"name" => 'hist-geo',
								"title" => 'التاريخ والجغرافية',
							],
							[
								"id" => 27,
								"name" => 'français',
								"title" => 'اللغة الفرنسية',
							],
							[
								"id" => 28,
								"name" => 'amazigh',
								"title" => 'اللغة الأمازيغية',
							],
						]
					],
					[
						"id" => 9,
						"name" => 'fifth-grade',
						"title" => 'Fifth grade',
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
							[
								"id" => 26,
								"name" => 'hist-geo',
								"title" => 'التاريخ والجغرافية',
							],
							[
								"id" => 27,
								"name" => 'français',
								"title" => 'اللغة الفرنسية',
							],
							[
								"id" => 28,
								"name" => 'sci-tech',
								"title" => 'التربية العلمية والتكنولوجية',
							],
							[
								"id" => 29,
								"name" => 'amazigh',
								"title" => 'اللغة الأمازيغية',
							],
						]
					]
				]
			],
			[
				"id" => 2,
				"name" => 'middle-education',
				"title" => 'middle education',
				"subsections" => [
					[
						"id" => 10,
						"name" => 'first-grade',
						"title" => 'First grade'
						,
						"subsections" => [
							[
								"id" => 20,
								"name" => 'arabic',
								"title" => 'اللغة العربية',
							],
							[
								"id" => 21,
								"name" => 'math',
								"title" => 'الرياضيات',
							],
							[
								"id" => 23,
								"name" => 'islamic',
								"title" => 'التربية الاسلامية',
							],
							[
								"id" => 24,
								"name" => 'civil',
								"title" => 'التربية المدنية',
							],
							[
								"id" => 25,
								"name" => 'scientific',
								"title" => 'التربية العلمية',
							],
							[
								"id" => 26,
								"name" => 'hist-geo',
								"title" => 'التاريخ والجغرافية',
							],
							[
								"id" => 27,
								"name" => 'français',
								"title" => 'اللغة الفرنسية',
							],
							[
								"id" => 28,
								"name" => 'sci-tech',
								"title" => 'التربية العلمية والتكنولوجية',
							],
							[
								"id" => 29,
								"name" => 'amazigh',
								"title" => 'اللغة الأمازيغية',
							],
						]
					],
					[
						"id" => 11,
						"name" => 'second-grade',
						"title" => 'Second grade'
					],
					[
						"id" => 12,
						"name" => 'third-grade',
						"title" => 'Third grade'
					],
					[
						"id" => 13,
						"name" => 'fourth-grade',
						"title" => 'Fourth grade'
					],
				]
			],
			[
				"id" => 3,
				"name" => 'secondary-education',
				"title" => 'Secondary education',
				"subsections" => [
					[
						"id" => 14,
						"name" => 'first-grade',
						"title" => 'First grade'
					],
					[
						"id" => 15,
						"name" => 'second-grade',
						"title" => 'Second grade'
					],
					[
						"id" => 16,
						"name" => 'third-grade',
						"title" => 'Third grade'
					],
				]
			],
			[
				"id" => 4,
				"name" => 'higher-education',
				"title" => 'Higher education',
				"subsections" => [
					[
						"id" => 17,
						"name" => 'bachlor-degree',
						"title" => 'Bachlor degree'
					],
					[
						"id" => 18,
						"name" => 'master-degree',
						"title" => 'Master Degree'
					],
					[
						"id" => 19,
						"name" => 'doctorat-degree',
						"title" => 'Post graduate'
					],
				]
			]
		];

		foreach ($sections as $sec) {
			
			$section = Section::create([
				"name"  => $sec['name'],
				"title" => $sec['title']
			]);

			foreach ($sec['subsections'] as $sub) {
				$subsection = Section::create([
					"name"       => $sub['name'],
					"title"      => $sub['title'],
					"section_id" => $section->id
				]);
				if (isset($sub['subsections'])) {
					
					foreach ($sub['subsections'] as $subsub) {
					$subsubsection = Section::create([
						"name"       => $subsub['name'],
						"title"      => $subsub['title'],
						"section_id" => $subsection->id
					]);
					
				}
			}
			}

		}

		$admin = User::create([
    		"name"     => "Super Admin",
    		"email"    => "bekhouche.mouadh@gmail.com",
    		"password" => Hash::make("admin"),
    	]);
    }
}
