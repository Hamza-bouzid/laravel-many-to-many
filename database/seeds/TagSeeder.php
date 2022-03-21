<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['calcio', 'nuoto', 'carne', 'pesce', 'netflix', 'youtube', 'bascket', 'formula 1', 'vegano' ];
        foreach($tags as $tag_name) {
            $new_tag = new Tag();
            $new_tag->name = $tag_name;
            $new_tag->slug = Str::of($tag_name)->slug("-");
            $new_tag->save();
        }
    }
}
