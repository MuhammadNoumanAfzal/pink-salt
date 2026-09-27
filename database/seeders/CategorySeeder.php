<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoriesData = [
            [
                'name' => 'Edible Pink Salt',
                'description' => '100% Pure, unrefined food-grade Himalayan Pink Salt mined directly from Khewra, Salt Range Pakistan.',
                'image_url' => '/product1.jpg',
                'subcategories' => [
                    ['name' => 'Fine Table Salt (0.2-0.8mm)', 'description' => 'Ultra-fine food grade salt for direct shaker and food processing applications.'],
                    ['name' => 'Coarse Grinder Salt (2-5mm)', 'description' => 'Granulated salt crystals tailored for spice mills and gourmet kitchens.'],
                    ['name' => 'Pink Salt Granules', 'description' => 'Medium mesh granules ideal for bulk food production & baking.'],
                    ['name' => 'Organic Salt Cooking Blocks', 'description' => 'Natural rock salt slabs for grilling, searing, and gourmet serving plates.']
                ]
            ],
            [
                'name' => 'Animal Salt Lick Blocks',
                'description' => 'Essential mineral supplement blocks and raw rock lumps for livestock, equine, and wildlife health.',
                'image_url' => '/product2.jpg',
                'subcategories' => [
                    ['name' => 'Compressed Mineral Lick Blocks', 'description' => 'Machine-pressed 2kg - 10kg mineral lick blocks for cattle and horses.'],
                    ['name' => 'Raw Salt Lumps on Rope', 'description' => 'Natural hand-carved rock salt lumps equipped with weather-proof hanging ropes.'],
                    ['name' => 'Licks with Trace Minerals', 'description' => 'Enriched lick blocks formulated with Iodine, Zinc, and Calcium for farm livestock.']
                ]
            ],
            [
                'name' => 'Spa & Wellness Salt',
                'description' => 'Therapeutic bath salts, detox crystals, and natural air purifying Himalayan salt lamps.',
                'image_url' => '/product3.jpg',
                'subcategories' => [
                    ['name' => 'Detox Bath Salt Crystals', 'description' => 'Mineral-rich coarse bath salts for spa therapies and muscle relaxation.'],
                    ['name' => 'Natural Salt Lamps & Candle Holders', 'description' => 'Hand-crafted salt crystal lamps emitting warm amber therapeutic glow.'],
                    ['name' => 'Salt Inhaler Granules', 'description' => 'Cleaned micro-crystalline salt for halotherapy and respiratory wellness.']
                ]
            ],
            [
                'name' => 'Industrial & Deicing Salt',
                'description' => 'High-purity technical grade rock salt for chemical manufacturing, water softening, and winter road deicing.',
                'image_url' => '/product4.jpg',
                'subcategories' => [
                    ['name' => 'Water Softener Salt Pellets', 'description' => 'High purity evaporated salt pellets for industrial water treatment.'],
                    ['name' => 'Bulk Deicing Rock Salt', 'description' => 'Screened rock salt for snow clearance and highway winter maintenance.']
                ]
            ]
        ];

        foreach ($categoriesData as $cData) {
            $category = Category::firstOrCreate(
                ['slug' => Str::slug($cData['name'])],
                [
                    'name' => $cData['name'],
                    'description' => $cData['description'],
                    'image_url' => $cData['image_url'],
                    'is_active' => true,
                ]
            );

            foreach ($cData['subcategories'] as $subData) {
                Subcategory::firstOrCreate(
                    ['slug' => Str::slug($subData['name'])],
                    [
                        'category_id' => $category->id,
                        'name' => $subData['name'],
                        'description' => $subData['description'],
                        'is_active' => true,
                    ]
                );
            }
        }

        // Link existing products to created categories and subcategories
        $edibleCat = Category::where('slug', 'edible-pink-salt')->first();
        $animalCat = Category::where('slug', 'animal-salt-lick-blocks')->first();
        $spaCat = Category::where('slug', 'spa-wellness-salt')->first();
        $industrialCat = Category::where('slug', 'industrial-deicing-salt')->first();

        $fineSub = Subcategory::where('slug', 'fine-table-salt-02-08mm')->first();
        $coarseSub = Subcategory::where('slug', 'coarse-grinder-salt-2-5mm')->first();
        $granulesSub = Subcategory::where('slug', 'pink-salt-granules')->first();
        $blocksSub = Subcategory::where('slug', 'organic-salt-cooking-blocks')->first();
        $lickSub = Subcategory::where('slug', 'compressed-mineral-lick-blocks')->first();
        $rawSub = Subcategory::where('slug', 'raw-salt-lumps-on-rope')->first();
        $spaSub = Subcategory::where('slug', 'detox-bath-salt-crystals')->first();

        foreach (Product::all() as $product) {
            $pName = strtolower($product->name);
            if (str_contains($pName, 'fine') || str_contains($pName, 'table')) {
                $product->update([
                    'category_id' => $edibleCat?->id,
                    'subcategory_id' => $fineSub?->id,
                    'category' => 'Edible Pink Salt'
                ]);
            } elseif (str_contains($pName, 'coarse') || str_contains($pName, 'grinder')) {
                $product->update([
                    'category_id' => $edibleCat?->id,
                    'subcategory_id' => $coarseSub?->id,
                    'category' => 'Edible Pink Salt'
                ]);
            } elseif (str_contains($pName, 'granules') || str_contains($pName, 'edible')) {
                $product->update([
                    'category_id' => $edibleCat?->id,
                    'subcategory_id' => $granulesSub?->id,
                    'category' => 'Edible Pink Salt'
                ]);
            } elseif (str_contains($pName, 'lick') || str_contains($pName, 'animal')) {
                $product->update([
                    'category_id' => $animalCat?->id,
                    'subcategory_id' => $lickSub?->id,
                    'category' => 'Animal Salt Lick Blocks'
                ]);
            } elseif (str_contains($pName, 'lamp') || str_contains($pName, 'bath') || str_contains($pName, 'spa')) {
                $product->update([
                    'category_id' => $spaCat?->id,
                    'subcategory_id' => $spaSub?->id,
                    'category' => 'Spa & Wellness Salt'
                ]);
            } else {
                $product->update([
                    'category_id' => $edibleCat?->id,
                    'subcategory_id' => $coarseSub?->id,
                    'category' => 'Edible Pink Salt'
                ]);
            }
        }
    }
}
