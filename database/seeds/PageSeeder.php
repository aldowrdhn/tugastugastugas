<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insert([
            'desc_terms' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur sequi sit possimus nam inventore ipsam tenetur praesentium nisi? Ipsam culpa repellendus dolore labore esse perferendis cumque, fuga repellat saepe maxime veniam ex maiores ipsum debitis? Explicabo enim quam laudantium nobis eligendi saepe eveniet consectetur maxime expedita, delectus eaque reprehenderit alias corrupti impedit quia voluptatibus porro quae sed exercitationem soluta officiis nesciunt aspernatur eos fuga. Possimus, deleniti quos, soluta magnam minus repellendus, nemo deserunt perferendis numquam doloremque modi libero! Ad officia repellat ipsum quam illum dolorum laboriosam harum deleniti obcaecati magni ut qui maxime, hic ullam voluptate commodi voluptatem voluptates provident debitis quasi. Provident at accusamus repudiandae doloribus omnis quasi! Id a itaque impedit quia unde reprehenderit assumenda incidunt quos debitis aut perspiciatis quibusdam natus cupiditate quisquam aliquid commodi atque cum officiis sint deserunt, quam, esse labore magni. Ipsam veniam inventore est sit tempore possimus aspernatur libero minima rerum iste.'
        ]);
        DB::table('privacies')->insert([
            'desc_priv' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur sequi sit possimus nam inventore ipsam tenetur praesentium nisi? Ipsam culpa repellendus dolore labore esse perferendis cumque, fuga repellat saepe maxime veniam ex maiores ipsum debitis? Explicabo enim quam laudantium nobis eligendi saepe eveniet consectetur maxime expedita, delectus eaque reprehenderit alias corrupti impedit quia voluptatibus porro quae sed exercitationem soluta officiis nesciunt aspernatur eos fuga. Possimus, deleniti quos, soluta magnam minus repellendus, nemo deserunt perferendis numquam doloremque modi libero! Ad officia repellat ipsum quam illum dolorum laboriosam harum deleniti obcaecati magni ut qui maxime, hic ullam voluptate commodi voluptatem voluptates provident debitis quasi. Provident at accusamus repudiandae doloribus omnis quasi! Id a itaque impedit quia unde reprehenderit assumenda incidunt quos debitis aut perspiciatis quibusdam natus cupiditate quisquam aliquid commodi atque cum officiis sint deserunt, quam, esse labore magni. Ipsam veniam inventore est sit tempore possimus aspernatur libero minima rerum iste.'
        ]);
        DB::table('refunds')->insert([
            'desc_refunds' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur sequi sit possimus nam inventore ipsam tenetur praesentium nisi? Ipsam culpa repellendus dolore labore esse perferendis cumque, fuga repellat saepe maxime veniam ex maiores ipsum debitis? Explicabo enim quam laudantium nobis eligendi saepe eveniet consectetur maxime expedita, delectus eaque reprehenderit alias corrupti impedit quia voluptatibus porro quae sed exercitationem soluta officiis nesciunt aspernatur eos fuga. Possimus, deleniti quos, soluta magnam minus repellendus, nemo deserunt perferendis numquam doloremque modi libero! Ad officia repellat ipsum quam illum dolorum laboriosam harum deleniti obcaecati magni ut qui maxime, hic ullam voluptate commodi voluptatem voluptates provident debitis quasi. Provident at accusamus repudiandae doloribus omnis quasi! Id a itaque impedit quia unde reprehenderit assumenda incidunt quos debitis aut perspiciatis quibusdam natus cupiditate quisquam aliquid commodi atque cum officiis sint deserunt, quam, esse labore magni. Ipsam veniam inventore est sit tempore possimus aspernatur libero minima rerum iste.'
        ]);
        DB::table('faqs')->insert([
            'desc_faq' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur sequi sit possimus nam inventore ipsam tenetur praesentium nisi? Ipsam culpa repellendus dolore labore esse perferendis cumque, fuga repellat saepe maxime veniam ex maiores ipsum debitis? Explicabo enim quam laudantium nobis eligendi saepe eveniet consectetur maxime expedita, delectus eaque reprehenderit alias corrupti impedit quia voluptatibus porro quae sed exercitationem soluta officiis nesciunt aspernatur eos fuga. Possimus, deleniti quos, soluta magnam minus repellendus, nemo deserunt perferendis numquam doloremque modi libero! Ad officia repellat ipsum quam illum dolorum laboriosam harum deleniti obcaecati magni ut qui maxime, hic ullam voluptate commodi voluptatem voluptates provident debitis quasi. Provident at accusamus repudiandae doloribus omnis quasi! Id a itaque impedit quia unde reprehenderit assumenda incidunt quos debitis aut perspiciatis quibusdam natus cupiditate quisquam aliquid commodi atque cum officiis sint deserunt, quam, esse labore magni. Ipsam veniam inventore est sit tempore possimus aspernatur libero minima rerum iste.'
        ]);

        DB::table('contacts')->insert([
            'name_store' => 'Edu-Tech',
            'email' => 'sample@mail.com',
            'address' => 'Jalan kenangan kita berdua',
            'city' => 'Bandung, Indonesia',
            'zipcode' => 14214,
            'phone_global' => '08221141241',
            'office_hours' => '00.00 - 00.01',
            'url' => 'get link location from google and edit'
        ]);

        // Size Product
        DB::table('sizes')->insert([
            'size_global' => '40'
        ]);
        DB::table('sizes')->insert([
            'size_global' => '41'
        ]);
        DB::table('sizes')->insert([
            'size_global' => '42'
        ]);
        DB::table('sizes')->insert([
            'size_global' => '43'
        ]);
        DB::table('sizes')->insert([
            'size_global' => '44'
        ]);
        DB::table('sizes')->insert([
            'size_global' => 'S'
        ]);
        DB::table('sizes')->insert([
            'size_global' => 'M'
        ]);
        DB::table('sizes')->insert([
            'size_global' => 'L'
        ]);
        DB::table('sizes')->insert([
            'size_global' => 'XL'
        ]);

        // Category
        DB::table('categories')->insert([
            'name_category' => 'Nike'
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Jordan'
        ]);
        DB::table('categories')->insert([
            'name_category' => 'Puma'
        ]);

        // Outlets
        DB::table('outlets')->insert([
            'name_store' => 'Paris Van Java',
            'email' => 'info@adminstore.com',
            'address' => 'Jalan Jaksa Agung No 45',
            'city' => 'Bandung, Indonesia',
            'zipcode' => '12345',
            'phone_global' => '08222122344',
            'office_hours' => '10.00 - 29.00',
            'url' => 'http://google.com'
        ]);
    }
}
