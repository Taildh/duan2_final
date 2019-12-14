<?php
use Illuminate\Database\Seeder;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => 'Thể thao'],
        	['name' => 'Văn hóa'],
        	['name' => 'Giáo dục'],
        	['name' => 'Chính trị'],
        	['name' => 'Thời sự'],
        	['name' => 'Sức khỏe'],
        	['name' => 'Tôn giáo']
        ];
        DB::table('categories')->insert($cates);
        $posts = App\Post::all();
        foreach ($posts as $item) {
        	$item->category_id = rand(1, 7);
        	$item->save();
        }
    }
}