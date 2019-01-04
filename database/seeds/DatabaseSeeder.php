<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $addresses = factory(App\Address::class, 10)->create();
        foreach($addresses as $address){
            $competition = factory(App\Competition::class)->create(['address_id' => $address->id]);
            $courses = factory(App\Course::class, 3)->create(['competition_id' => $competition->id]);
            foreach ($courses as $course){
                for($i = 0; $i < 3; $i++) {
                    $fileGroup = factory(App\FileGroup::class)->create();
                    factory(App\Element::class)->create(['course_id' => $course->id, 'file_group_id' => $fileGroup->id]);
                    factory(App\FileName::class, 3)->create(['file_group_id' => $fileGroup->id]);
                }
            }
        }
    }
}
