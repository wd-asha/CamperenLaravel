<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Home on the wheels',
            'content' => 'Cras viverra semper sagittis. Vivamus aliquet, turpis ut condimentum venenatis, ipsum felis sollicitudin sapien, scelerisque lacinia ante orci at magna. Consectetur adipiscing elit',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-1.jpg',
            'is_main' => true,
            'date' => '3 May',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Campfire on the beach',
            'content' => 'Ut eu ullamcorper sem. Cras malesuada viverra ligula ut consectetur. Suspendisse potenti. Cras justo tortor, congue sit amet dolor vel, ornare dapibus dui. Praesent sollicitudin felis dui',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-2.jpg',
            'is_main' => true,
            'date' => '15 May',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Mountain camping',
            'content' => 'Phasellus vitae metus condimentum, auctor ligula vitae, dictum dolor. Nullam tristique ullamcorper est interdum blandit. Donec diam ante, pulvinar nec tellus',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-3.jpg',
            'is_main' => true,
            'date' => '1 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Coffee time',
            'content' => 'Quisque fermentum venenatis eros vitae pretium. Nam rhoncus erat elit, eu condimentum velit vehicula vel. Donec vestibulum facilisis sodales. Proin nec libero gravida, efficitur libero quis',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-4.jpg',
            'is_main' => true,
            'date' => '8 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Breakfast in nature',
            'content' => 'Proin nulla ligula, finibus vel auctor nec, condimentum ut risus. Nullam ullamcorper risus at risus mattis molestie. Etiam nec ultrices felis, nec tincidunt felis. Quisque laoreet, risus ac sagittis',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-5.jpg',
            'is_main' => true,
            'date' => '11 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Inside the wheel house',
            'content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac diam libero. Mauris sit amet imperdiet urna. Ut eget lacus pellentesque rhoncus urna',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-6.jpg',
            'is_main' => true,
            'date' => '18 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Moto Camp',
            'content' => 'Morbi facilisis odio metus, a dignissim lorem aliquet et. Sed venenatis lectus in lorem volutpat, vel accumsan elit vulputate. Aliquam eu nisl porta, pharetra elit eget, ullamcorper magna vehicula well',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-7.jpg',
            'is_main' => true,
            'date' => '20 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Relaxation time',
            'content' => 'Nulla suscipit viverra sem, quis bibendum ex iaculis sed. Donec rhoncus gravida massa, eget interdum felis luctus a. Duis sed enim justo. Suspendisse sollicitudin metus ut libero vulputate aliquam',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-8.jpg',
            'is_main' => true,
            'date' => '21 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Hiking tour',
            'content' => 'Diam nisl tincidunt orci, ac luctus leo orci at elit. Sed id enim efficitur, ultrices erat non, sollicitudin turpis. Aliquam a accumsan justo. Eleifend est ut ultricies finibus dignissim quis velit, blandit venenatis',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-9.jpg',
            'is_main' => true,
            'date' => '23 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Summer kitchen',
            'content' => 'Nam pellentesque, est vel facilisis placerat, mi libero efficitur lectus, malesuada malesuada libero felis id orci. In suscipit ante sit amet mauris aliquam vestibulum. Praesent fringilla ut tortor aliquet semper',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-10.jpg',
            'is_main' => true,
            'date' => '23 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'RV nature camp',
            'content' => 'Viverra blandit justo, lacinia molestie tortor placerat id. Quisque eu diam sit amet arcu egestas eleifend. Vestibulum ac odio sapien. Mauris ex sem, mattis eget hendrerit at, varius ut libero',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-11.jpg',
            'is_main' => true,
            'date' => '25 Jun',
            'created_at' => now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Lake view',
            'content' => 'Aenean porta venenatis libero, quis hendrerit felis mollis volutpat. Cras aliquet vel velit et laoreet. Vestibulum congue gravida quam, vitae vehicula turpis ultrices at. Curabitur eu ornare nulla',
            'tag' => 'Camping story',
            'author' => 'Melissa Burton',
            'image' => 'blog-12.jpg',
            'is_main' => true,
            'date' => '30 Jun',
            'created_at' => now()
        ]);
    }
}
