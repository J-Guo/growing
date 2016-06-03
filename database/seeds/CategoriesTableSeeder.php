<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('categories')->insert([
//            'name' => 'PHP'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'JavaScript'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'MySQL'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'Laravel'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'Web Hosting'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'Front End'
//        ]);
//
//        DB::table('categories')->insert([
//            'name' => 'Other'
//        ]);

        $cate = new Category();
        $cate->name = "PHP";
        $cate->save();

        $cate = new Category();
        $cate->name = "JavaScript";
        $cate->save();

        $cate = new Category();
        $cate->name = "MySQL";
        $cate->save();

        $cate = new Category();
        $cate->name = "Laravel";
        $cate->save();

        $cate = new Category();
        $cate->name = "Web Hosting";
        $cate->save();

        $cate = new Category();
        $cate->name = "Front End";
        $cate->save();

        $cate = new Category();
        $cate->name = "Other";
        $cate->save();



    }
}
