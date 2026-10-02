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
                'description' => '100% Pure, unrefined food-grade Himalayan Pink Salt mined directly from Khewra, Salt Range Pakistan. Certified ISO 22000, CXS 150:1985 Codex, Halal & Kosher.',
                'image_url' => '/product1.jpg',
                'subcategories' => [
                    ['name' => 'Fine Salt (0.3 - 0.8 mm)', 'description' => 'Direct culinary and table seasoning salt, ultra-consistent free flowing pink crystals.'],
                    ['name' => 'Medium Salt (0.8 - 2 mm)', 'description' => 'Granulated gourmet grain ideal for cooking, curing, and seasoning mixes.'],
                    ['name' => 'Coarse Salt (2 - 5 mm)', 'description' => 'Granulated salt crystals tailored specifically for refillable spice mills & grinders.'],
                    ['name' => 'Crystal Salt (5 - 8 mm)', 'description' => 'Chunky jewel-like pink salt crystals for high-end culinary presentation & brining.'],
                    ['name' => 'Natural Rock Salt Lumps', 'description' => 'Raw uncrushed pink salt boulders mined directly from ancient Khewra salt seams.']
                ]
            ],
            [
                'name' => 'Retail Packaged Salt',
                'description' => 'Retail-ready, private-label packaging options including zip pouches, PET jars, luxury glass jars, grinders, and shakers.',
                'image_url' => '/product2.jpg',
                'subcategories' => [
                    ['name' => 'Zip Pouch (200g - 1kg)', 'description' => 'Moisture-barrier food-grade stand-up pouches (200g, 400g, 500g, 750g, 1kg) with resealable zip lock.'],
                    ['name' => 'PET Jar (200g - 500g)', 'description' => 'Food-grade transparent PET screw-cap jars (200g, 400g, 500g) for retail shelf display.'],
                    ['name' => 'Glass Jar (250g - 500g)', 'description' => 'Premium heavy glass jars with gold/silver metal lids for gourmet export lines.'],
                    ['name' => 'Grinder Bottles', 'description' => 'Pre-filled spice bottles with integrated adjustable ceramic grinder tops.'],
                    ['name' => 'Shaker Bottles', 'description' => 'Dual-sift flip-top shaker dispensers for direct kitchen and tabletop use.']
                ]
            ],
            [
                'name' => 'Bulk Export Packaging',
                'description' => 'Heavy-duty industrial and food-grade packaging for commercial importers, processors, and bulk maritime container shipments.',
                'image_url' => '/bulk.jpg',
                'subcategories' => [
                    ['name' => 'Food Grade PP Bags (2kg - 25kg)', 'description' => 'Woven polypropylene bags with PE inner liner (2kg, 5kg, 10kg, 20kg, 25kg, 50kg) for moisture protection.'],
                    ['name' => '1-Ton Jumbo Bags (FIBC)', 'description' => 'Heavy-duty 1000kg (1 MT) jumbo bags with top duffle and bottom discharge spout for containerized vessel loading.'],
                    ['name' => 'Bulk Container Loose Shipment', 'description' => '20ft FCL container liner bag bulk salt shipment for commercial chemical & food processing.']
                ]
            ],
            [
                'name' => 'Himalayan Salt Lamps & Decor',
                'description' => 'Artisanal hand-crafted pure Himalayan crystal lamps emitting warm amber negative ions for air purification and holistic wellness.',
                'image_url' => '/product3.jpg',
                'subcategories' => [
                    ['name' => 'Natural Salt Lamps', 'description' => 'Authentic hand-chipped natural shape salt lamps mounted on treated neem/rosewood base (2-3kg, 3-5kg, 5-7kg).'],
                    ['name' => 'Basket Salt Lamps', 'description' => 'Modern wrought-iron geometric baskets filled with illuminated natural pink salt crystal chunks.'],
                    ['name' => 'Bowl Salt Lamps', 'description' => 'Smooth hand-carved salt fire-bowls with glowing polished massage salt spheres.'],
                    ['name' => 'Crystal & Geometric Lamps', 'description' => 'Precision cut pyramid, obelisk, cylinder, and crystal cluster statement salt lamps.'],
                    ['name' => 'Decorative Salt Lamps', 'description' => 'Stylized shapes including Teardrop, Flame, Heart, and Sphere carved lamps.'],
                    ['name' => 'Salt Lamp Sets', 'description' => 'Coordinated multi-piece sets containing multiple complementary sizes and shapes.'],
                    ['name' => 'Salt Candle & Tealight Holders', 'description' => 'Solid rock salt candle holders providing natural flicker and ambient glow.']
                ]
            ],
            [
                'name' => 'Salt Cooking Tiles & Bricks',
                'description' => 'Natural rock salt slabs for cooking, grilling, searing, and Himalayan salt brick architectural wall installations.',
                'image_url' => '/product4.jpg',
                'subcategories' => [
                    ['name' => 'Cooking & Grilling Slabs', 'description' => '8x8x2 inch and 8x12x2 inch gourmet salt cooking plates for stovetops and BBQ grills.'],
                    ['name' => 'Salt Wall Bricks & Tiles', 'description' => '8x4x2 inch calibrated pink salt bricks for wellness spas, saunas, and salt rooms.']
                ]
            ],
            [
                'name' => 'Animal Salt Lick Blocks',
                'description' => 'Essential 84+ trace mineral supplement blocks and raw rock lumps for livestock, equine, and wildlife health.',
                'image_url' => '/product2.jpg',
                'subcategories' => [
                    ['name' => 'Compressed Mineral Lick Blocks', 'description' => 'Machine-pressed 2kg - 10kg mineral lick blocks for cattle, sheep, and horses.'],
                    ['name' => 'Raw Salt Lumps on Rope', 'description' => 'Natural hand-drilled rock salt lumps equipped with weather-proof hanging ropes (3-5 kg).']
                ]
            ],
            [
                'name' => 'Industrial & De-Icing Salt',
                'description' => 'High-purity technical grade rock salt for chemical manufacturing, water softening, and winter road deicing.',
                'image_url' => '/product1.jpg',
                'subcategories' => [
                    ['name' => 'Water Softener Salt Pellets', 'description' => 'High purity evaporated salt pellets for industrial water treatment.'],
                    ['name' => 'Bulk Deicing Rock Salt', 'description' => 'Screened rock salt for snow clearance and highway winter maintenance.']
                ]
            ]
        ];

        foreach ($categoriesData as $cData) {
            $category = Category::updateOrCreate(
                ['slug' => Str::slug($cData['name'])],
                [
                    'name' => $cData['name'],
                    'description' => $cData['description'],
                    'image_url' => $cData['image_url'],
                    'is_active' => true,
                ]
            );

            foreach ($cData['subcategories'] as $subData) {
                Subcategory::updateOrCreate(
                    [
                        'category_id' => $category->id,
                        'slug' => Str::slug($subData['name'])
                    ],
                    [
                        'name' => $subData['name'],
                        'description' => $subData['description'],
                        'is_active' => true,
                    ]
                );
            }
        }

        // Seed realistic representative products covering the full catalog range from the images
        $edibleCat = Category::where('slug', 'edible-pink-salt')->first();
        $retailCat = Category::where('slug', 'retail-packaged-salt')->first();
        $bulkCat = Category::where('slug', 'bulk-export-packaging')->first();
        $lampsCat = Category::where('slug', 'himalayan-salt-lamps-decor')->first();
        $tilesCat = Category::where('slug', 'salt-cooking-tiles-bricks')->first();
        $animalCat = Category::where('slug', 'animal-salt-lick-blocks')->first();

        $subFine = Subcategory::where('slug', 'fine-salt-03-08-mm')->first();
        $subMedium = Subcategory::where('slug', 'medium-salt-08-2-mm')->first();
        $subCoarse = Subcategory::where('slug', 'coarse-salt-2-5-mm')->first();
        $subCrystal = Subcategory::where('slug', 'crystal-salt-5-8-mm')->first();
        $subPouches = Subcategory::where('slug', 'zip-pouch-200g-1kg')->first();
        $subPetJars = Subcategory::where('slug', 'pet-jar-200g-500g')->first();
        $subGlassJars = Subcategory::where('slug', 'glass-jar-250g-500g')->first();
        $subGrinders = Subcategory::where('slug', 'grinder-bottles')->first();
        $subPpBags = Subcategory::where('slug', 'food-grade-pp-bags-2kg-25kg')->first();
        $subJumboBags = Subcategory::where('slug', '1-ton-jumbo-bags-fibc')->first();
        $subNatLamps = Subcategory::where('slug', 'natural-salt-lamps')->first();
        $subBasketLamps = Subcategory::where('slug', 'basket-salt-lamps')->first();
        $subBowlLamps = Subcategory::where('slug', 'bowl-salt-lamps')->first();
        $subCrystalLamps = Subcategory::where('slug', 'crystal-geometric-lamps')->first();
        $subDecorLamps = Subcategory::where('slug', 'decorative-salt-lamps')->first();
        $subLampSets = Subcategory::where('slug', 'salt-lamp-sets')->first();
        $subTiles = Subcategory::where('slug', 'cooking-grilling-slabs')->first();
        $subLicks = Subcategory::where('slug', 'raw-salt-lumps-on-rope')->first();

        $sampleProducts = [
            [
                'name' => 'Fine Himalayan Pink Salt (Zip Pouch)',
                'slug' => 'fine-himalayan-pink-salt-zip-pouch',
                'category_id' => $retailCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subPouches?->id ?? $subFine?->id,
                'category' => 'Retail Packaged Salt',
                'badge' => 'Top Seller',
                'grade' => 'Food Grade ISO-22000 / Codex CXS 150:1985',
                'mesh_size' => '0.3 - 0.8 mm',
                'grain_size' => 'Fine Salt (0.3 - 0.8 mm)',
                'purity' => '99.1% NaCl',
                'packaging' => '500g Stand-up Zip Pouch (Matte Black)',
                'packaging_type' => 'Zip Pouch',
                'package_weight' => '500g',
                'price' => 1.45,
                'price_unit' => 'per pouch',
                'product_type' => 'packaged_retail',
                'moq' => '1,000 Pouches',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product1.jpg',
                'short_desc' => '100% natural, unrefined food-grade fine pink salt packed in premium matte-finish resealable zip pouches.',
                'full_desc' => 'Our fine grain (0.3-0.8 mm) Himalayan Pink Salt is triple-washed and optical-sorted to guarantee peak purity and mineral content (84+ trace minerals). Fitted with airtight barrier foil and zipper closure for lasting freshness.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Medium Gourmet Pink Salt (Clear PET Jar)',
                'slug' => 'medium-gourmet-pink-salt-pet-jar',
                'category_id' => $retailCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subPetJars?->id ?? $subMedium?->id,
                'category' => 'Retail Packaged Salt',
                'badge' => 'Retail Ready',
                'grade' => 'Food Grade ISO-22000',
                'mesh_size' => '0.8 - 2.0 mm',
                'grain_size' => 'Medium Salt (0.8 - 2 mm)',
                'purity' => '98.8% NaCl',
                'packaging' => '400g Clear PET Jar with Black Ribbed Cap',
                'packaging_type' => 'PET Jar',
                'package_weight' => '400g',
                'price' => 1.75,
                'price_unit' => 'per jar',
                'product_type' => 'packaged_retail',
                'moq' => '500 Jars',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product2.jpg',
                'short_desc' => 'Medium mesh granulated pink salt packed in transparent shatterproof PET retail jars.',
                'full_desc' => 'Designed for international retail supermarket shelves. Transparent food-grade PET container displays the brilliant natural salmon-pink crystal hue. Perfect for general culinary use and rubs.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Coarse Pink Salt in Luxury Glass Jar',
                'slug' => 'coarse-pink-salt-luxury-glass-jar',
                'category_id' => $retailCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subGlassJars?->id ?? $subCoarse?->id,
                'category' => 'Retail Packaged Salt',
                'badge' => 'Gourmet Selection',
                'grade' => 'Food Grade ISO-22000 / Kosher',
                'mesh_size' => '2.0 - 5.0 mm',
                'grain_size' => 'Coarse Salt (2 - 5 mm)',
                'purity' => '98.9% NaCl',
                'packaging' => '500g Heavy Flint Glass Jar w/ Gold Metal Lid',
                'packaging_type' => 'Glass Jar',
                'package_weight' => '500g',
                'price' => 2.45,
                'price_unit' => 'per jar',
                'product_type' => 'packaged_retail',
                'moq' => '500 Jars',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product3.jpg',
                'short_desc' => 'Luxury presentation glass jar containing coarse crystalline pink salt for gourmet kitchens.',
                'full_desc' => 'High-end culinary glass jar presentation featuring selected 2-5mm coarse pink salt. Ideal for gourmet gifting, retail delicatessens, and direct table grinding.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Adjustable Ceramic Grinder Bottle Salt',
                'slug' => 'adjustable-ceramic-grinder-bottle-salt',
                'category_id' => $retailCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subGrinders?->id ?? $subCoarse?->id,
                'category' => 'Retail Packaged Salt',
                'badge' => 'Best Seller',
                'grade' => 'Food Grade ISO-22000',
                'mesh_size' => '2.0 - 5.0 mm',
                'grain_size' => 'Coarse Salt (2 - 5 mm)',
                'purity' => '99.0% NaCl',
                'packaging' => '200g Glass Bottle with Adjustable Ceramic Mill',
                'packaging_type' => 'Grinder Bottle',
                'package_weight' => '200g',
                'price' => 2.85,
                'price_unit' => 'per bottle',
                'product_type' => 'packaged_retail',
                'moq' => '500 Bottles',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product4.jpg',
                'short_desc' => 'Pre-filled refillable glass grinder bottle with durable ceramic core for adjustable coarse-to-fine milling.',
                'full_desc' => 'Commercial grade corrosion-proof ceramic mechanism grinds coarse pink salt crystals effortlessly. Reusable glass bottle with hygienic dust cover.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Natural Hand-Carved Salt Lamp',
                'slug' => 'natural-hand-carved-salt-lamp',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subNatLamps?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Authentic Handcrafted',
                'grade' => 'A-Grade Khewra Pink Crystal',
                'mesh_size' => 'Solid Rock Crystal',
                'grain_size' => 'Not Applicable (Hand-Carved Single Lamp)',
                'purity' => '98.5%+ Natural Rock Salt',
                'packaging' => 'Individual Gift Box with Neem Wood Base & CE/UL Cord',
                'packaging_type' => 'Single Piece / Treated Wooden Base',
                'package_weight' => '2 - 3 kg (Also available 3-5kg, 5-7kg)',
                'price' => 12.50,
                'price_unit' => 'per piece',
                'product_type' => 'lamp_craft',
                'moq' => '100 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product3.jpg',
                'short_desc' => 'Simple, authentic, and timeless Himalayan pink salt rock lamp with warm therapeutic amber glow.',
                'full_desc' => 'Each lamp is individually carved by master artisans from solid Himalayan rock salt blocks. Emits warm soothing light that creates negative ions to freshen indoor environments.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Modern Basket Salt Lamp',
                'slug' => 'modern-basket-salt-lamp',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subBasketLamps?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Trending Decor',
                'grade' => 'A-Grade Khewra Pink Salt Chunks',
                'mesh_size' => 'Natural Rock Chunks',
                'grain_size' => 'Not Applicable (Crafted Lamp)',
                'purity' => '98.5%+ Rock Salt',
                'packaging' => 'Matte Black Wire Frame with Certified Cord Set',
                'packaging_type' => 'Metal Basket + Chunks',
                'package_weight' => '3 - 4 kg total weight',
                'price' => 18.50,
                'price_unit' => 'per piece',
                'product_type' => 'lamp_craft',
                'moq' => '50 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product2.jpg',
                'short_desc' => 'A beautiful blend of natural salt crystals and modern metal cage design.',
                'full_desc' => 'Contemporary geometric metal wire basket loaded with raw glowing pink salt chunks. Provides stunning accent lighting for living rooms, bedrooms, and yoga studios.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Hand-Carved Fire Bowl Salt Lamp',
                'slug' => 'hand-carved-fire-bowl-salt-lamp',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subBowlLamps?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Luxury Wellness',
                'grade' => 'A-Grade Hand-Turned Salt',
                'mesh_size' => 'Polished Salt Spheres + Bowl',
                'grain_size' => 'Not Applicable (Handmade Bowl)',
                'purity' => '98.8% Pink Salt',
                'packaging' => 'Reinforced Master Carton with Wooden Base & 5 Massage Balls',
                'packaging_type' => 'Single Piece / Bowl + Salt Balls',
                'package_weight' => '4 - 5 kg total',
                'price' => 21.00,
                'price_unit' => 'per piece',
                'product_type' => 'lamp_craft',
                'moq' => '50 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product1.jpg',
                'short_desc' => 'Brings natural purity and a calming radiant glow to your space with heated salt massage spheres.',
                'full_desc' => 'Hand-sculpted glowing salt bowl complete with 5 to 6 polished massage spheres. The heated salt balls can be gently applied to tense muscles for soothing thermal therapy.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Crystal Pyramid & Geometric Salt Lamp',
                'slug' => 'crystal-pyramid-geometric-salt-lamp',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subCrystalLamps?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Designer Craft',
                'grade' => 'A-Grade Khewra Pink Crystal',
                'mesh_size' => 'Precision Carved Block',
                'grain_size' => 'Not Applicable (Geometric Carving)',
                'purity' => '98.7% Pink Salt',
                'packaging' => 'Protected Foam Gift Box with Rosewood Base',
                'packaging_type' => 'Single Piece / Wooden Base',
                'package_weight' => '3 - 3.5 kg',
                'price' => 19.50,
                'price_unit' => 'per piece',
                'product_type' => 'lamp_craft',
                'moq' => '50 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product4.jpg',
                'short_desc' => 'Unique geometric crystal shape radiating a soft, soothing ambient light.',
                'full_desc' => 'Meticulously cut and polished geometric pyramid salt lamp. Harmonizes interior aesthetics with ancient crystal energy.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Decorative Teardrop Flame Salt Lamp',
                'slug' => 'decorative-teardrop-flame-salt-lamp',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subDecorLamps?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Artisan Special',
                'grade' => 'A-Grade Khewra Pink Crystal',
                'mesh_size' => 'Hand-Turned Solid Rock',
                'grain_size' => 'Not Applicable (Handmade Lamp)',
                'purity' => '98.5% Pink Salt',
                'packaging' => 'Export Box with Foam Padding & Electrical Cord',
                'packaging_type' => 'Single Piece / Wooden Base',
                'package_weight' => '3 - 4 kg',
                'price' => 17.50,
                'price_unit' => 'per piece',
                'product_type' => 'lamp_craft',
                'moq' => '50 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product3.jpg',
                'short_desc' => 'Stylized flame teardrop design carved to enhance home and spa decor.',
                'full_desc' => 'Graceful organic curves mimicking an eternal flame. Hand-carved from deep pink-orange Himalayan salt seams.',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Trio Himalayan Salt Lamp Set (3-Piece)',
                'slug' => 'trio-himalayan-salt-lamp-set-3-piece',
                'category_id' => $lampsCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subLampSets?->id,
                'category' => 'Himalayan Salt Lamps & Decor',
                'badge' => 'Complete Gift Set',
                'grade' => 'Premium Multi-Shape Set',
                'mesh_size' => 'Multi-Piece Set',
                'grain_size' => 'Not Applicable (Multi-Piece Set)',
                'purity' => '98.5%+ Pink Salt',
                'packaging' => '3-in-1 Master Gift Carton with Cords & Bulbs Included',
                'packaging_type' => 'Salt Lamp Set (3 Pcs)',
                'package_weight' => '8 - 10 kg total set',
                'price' => 38.00,
                'price_unit' => 'per set',
                'product_type' => 'lamp_craft',
                'moq' => '25 Sets',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product2.jpg',
                'short_desc' => 'Multiple coordinated shapes (Cylinder, Pillar & Sphere) in one cohesive wellness collection.',
                'full_desc' => 'Curated 3-piece designer set offering coordinated ambient illumination across living spaces, desks, and master suites.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Export Grade Food Pink Salt (25 kg PP Bag)',
                'slug' => 'export-grade-food-pink-salt-25-kg-pp-bag',
                'category_id' => $bulkCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subPpBags?->id ?? $subCoarse?->id,
                'category' => 'Bulk Export Packaging',
                'badge' => 'Commercial Bulk',
                'grade' => 'Food Grade ISO-22000 / CXS 150:1985 / Halal / Kosher',
                'mesh_size' => '0.3-0.8mm, 0.8-2mm, or 2-5mm (Buyer Specified)',
                'grain_size' => 'Fine, Medium or Coarse (Selectable)',
                'purity' => '99.2% NaCl',
                'packaging' => '25 kg Food-Grade Woven Polypropylene (PP) Bag with PE Liner',
                'packaging_type' => 'PP Bag (Food Grade)',
                'package_weight' => '25 kg (Also in 2kg, 5kg, 10kg, 20kg, 50kg)',
                'price' => 14.50,
                'price_unit' => 'per 25kg bag',
                'product_type' => 'pure_salt',
                'moq' => '200 Bags (5 Metric Tons)',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/bulk.jpg',
                'short_desc' => 'Standard international export bag with polyethylene moisture barrier for bulk food manufacturers and repackers.',
                'full_desc' => 'Hygienic multi-layer woven PP bag with inner liner protecting pure pink salt from ocean humidity during container transit. Available in 2kg, 5kg, 10kg, 20kg, 25kg and 50kg configurations.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Bulk Raw Pink Salt (1-Ton Jumbo Bag)',
                'slug' => 'bulk-raw-pink-salt-1-ton-jumbo-bag',
                'category_id' => $bulkCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subJumboBags?->id,
                'category' => 'Bulk Export Packaging',
                'badge' => 'Vessel & Container Load',
                'grade' => 'Industrial / Food Processing Grade',
                'mesh_size' => 'Custom Screened Grain (0.3mm to 8mm or Rock)',
                'grain_size' => 'Custom Screened or Raw Lump',
                'purity' => '98.5% - 99.5% NaCl',
                'packaging' => '1000 kg (1 Metric Ton) FIBC Big Bag with Lifting Loops',
                'packaging_type' => '1-Ton Jumbo Bag (FIBC)',
                'package_weight' => '1 Metric Ton (1,000 kg)',
                'price' => 280.00,
                'price_unit' => 'per metric ton',
                'product_type' => 'pure_salt',
                'moq' => '20 Metric Tons (1 x 20ft FCL)',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/bulk.jpg',
                'short_desc' => '1-Ton industrial FIBC big bags engineered for container vessel shipments directly to international ports.',
                'full_desc' => 'Cost-effective high-volume export packaging. 1-Ton FIBC bags equipped with 4 top lifting loops, filling spout, and bottom discharge valve for automated silo loading.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Himalayan Salt Cooking & Grilling Slab',
                'slug' => 'himalayan-salt-cooking-grilling-slab',
                'category_id' => $tilesCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subTiles?->id,
                'category' => 'Salt Cooking Tiles & Bricks',
                'badge' => 'Chef Choice',
                'grade' => 'Food Grade 100% Solid Rock Slab',
                'mesh_size' => '8 x 8 x 2 inch Solid Slab',
                'grain_size' => 'Not Applicable (Solid Salt Slab)',
                'purity' => '98.8% Natural Rock Salt',
                'packaging' => 'Carton with Corner Foam Protectors',
                'packaging_type' => 'Single Piece / Box',
                'package_weight' => '5.5 kg (8x8x2")',
                'price' => 9.50,
                'price_unit' => 'per slab',
                'product_type' => 'tile_brick',
                'moq' => '100 Slabs',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product4.jpg',
                'short_desc' => 'Natural rock salt slab for direct high-heat searing of steak, seafood, and chilled sashimi service.',
                'full_desc' => 'Withstands temperatures up to 450°F (230°C). Imparts subtle, rich mineral complexity into food while cooking or serving.',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Natural Mineral Animal Lick Salt on Rope',
                'slug' => 'natural-mineral-animal-lick-salt-on-rope',
                'category_id' => $animalCat?->id ?? $edibleCat?->id,
                'subcategory_id' => $subLicks?->id,
                'category' => 'Animal Salt Lick Blocks',
                'badge' => '100% Organic Livestock',
                'grade' => 'Feed Supplement Grade',
                'mesh_size' => 'Raw Mined Boulders',
                'grain_size' => 'Not Applicable (Raw Rock Lump)',
                'purity' => '98.4% NaCl + 84 Minerals',
                'packaging' => 'Heavy Weatherproof Jute Rope Through Center',
                'packaging_type' => 'Single Rock with Rope',
                'package_weight' => '3 - 4 kg / piece',
                'price' => 3.20,
                'price_unit' => 'per piece',
                'product_type' => 'animal_lick',
                'moq' => '250 Pieces',
                'origin' => 'Khewra Salt Range, Pakistan',
                'image_url' => '/product2.jpg',
                'short_desc' => 'Natural drilled rock salt lump with weatherproof hanging rope for horses, cattle, and farm livestock.',
                'full_desc' => 'Resists dissolving in rain far better than pressed salt blocks. Supplies horses and cattle with essential natural electrolytes and minerals.',
                'is_featured' => false,
                'is_active' => true,
            ]
        ];

        foreach ($sampleProducts as $pData) {
            Product::updateOrCreate(
                ['slug' => $pData['slug']],
                $pData
            );
        }
    }
}
