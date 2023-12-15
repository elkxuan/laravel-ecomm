<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create([
            'name' => 'Strawberry Daifuku',
            'description' => 'Delicious strawberry-filled mochi dessert.',
            'price' => 25.00,
            'category' => 'dessert',
            'image' => 'http://127.0.0.1:8000/assets/images/strawberry-daifuku.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Cream Puff',
            'description' => 'A classic French dessert filled with sweetened vanilla whipped cream.',
            'price' => 20.00,
            'category' => 'dessert',
            'image' => 'http://127.0.0.1:8000/assets/images/creampuff.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Vanilla Roll Cake',
            'description' => 'A delicate vanilla sponge rolled with creamy perfection.',
            'price' => 18.00,
            'category' => 'roll cake & other',
            'image' => 'http://127.0.0.1:8000/assets/images/swiss-roll-cake.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Hokkaido Chiffon Cupcakes',
            'description' => 'Light and fluffy chiffon cupcakes. Perfect for tea time or any special occasion.',
            'price' => 20.00,
            'category' => 'roll cake & other',
            'image' => 'http://127.0.0.1:8000/assets/images/hokkaido-cupcakes.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Tiramisu',
            'description' => 'Savor the rich elegance of our Tiramisu.',
            'price' => 18.00,
            'category' => 'roll cake & other',
            'image' => 'http://127.0.0.1:8000/assets/images/tiramisu.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Mango Cake',
            'description' => 'Soft and spongey chiffon cake with layers of fluffy whipped cream and fresh mangoes.',
            'price' => 70.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/mango-cake.png',
        ]);

        Product::create([
            'name' => 'Chocolate Ganache Cake',
            'description' => 'Indulge in the rich and velvety goodness of our Chocolate Ganache Cake.',
            'price' => 70.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/chocolate-ganache-cake.png',
            'best_seller' => true,
        ]);

        Product::create([
            'name' => 'Fresh Fruit Cake',
            'description' => 'Delight in the vibrant and refreshing experience of our Fresh Fruit Cake.',
            'price' => 70.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/fruit-cake.png',
        ]);

        Product::create([
            'name' => 'Strawberry Crepe Cake',
            'description' => 'Indulge in layers of delicate crepes embracing luscious strawberry-infused cream.',
            'price' => 70.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/strawberry-crepe-cake.png',
        ]);

        Product::create([
            'name' => 'Matcha Crepe Cake',
            'description' => 'The earthy richness of matcha combined with the lightness of crepes makes every bite a journey into the world of exquisite taste and texture.',
            'price' => 70.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/matcha-crepe-cake.png',
        ]);

        Product::create([
            'name' => 'Durian Crepe Cake',
            'description' => 'Delight your senses with our MUSANG KING Durian Crepe Cake, a true masterpiece for durian aficionados.',
            'price' => 120.00,
            'category' => 'whole cake',
            'image' => 'http://127.0.0.1:8000/assets/images/durian-crepe-cake.png',
        ]);

        Product::create([
            'name' => 'Christmas Tree Cake',
            'description' => 'Celebrate the festive season with our Christmas Tree Cake! ',
            'price' => 200.00,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-tree-cake.png',
            'limited_edition' => true,
        ]);

        Product::create([
            'name' => 'X\'mas Yule Log',
            'description' => 'Celebrate the festive season with our X\'mas Yule Log! ',
            'price' => 200.00,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-yule-log-cake.png',
            'limited_edition' => true,
        ]);

        Product::create([
            'name' => 'Simple Tree Delight',
            'description' => 'Celebrate the festive season with our Simple Tree Delight! ',
            'price' => 120.00,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-tree-simple-cake.png',
            'limited_edition' => true,
        ]);

        Product::create([
            'name' => 'Christmas Tree Cupcake',
            'description' => 'Celebrate the festive season with our Christmas Tree Cupcakes! ',
            'price' => 20.00,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-tree-cupcakes.png',
            'limited_edition' => true,
        ]);

        Product::create([
            'name' => 'Christmas Tree Cookie (1pc)',
            'description' => 'Celebrate the festive season with our Christmas Tree Cookies! ',
            'price' => 5.90,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-tree-cookie.png',
            'limited_edition' => true,
        ]);

        Product::create([
            'name' => 'Gingerbread Man Cookie (1pc)',
            'description' => 'Celebrate the festive season with our Gingerbread Man Cookies! ',
            'price' => 5.90,
            'category' => 'christmas',
            'image' => 'http://127.0.0.1:8000/assets/images/xmas-gingerbreadman-cookie.png',
            'limited_edition' => true,
        ]);
    }
}
