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
            // 1. Pink Salt (Fine, Medium, Coarse & Crystal)
            [
                'name' => 'Himalayan Pink Salt',
                'slug' => 'himalayan-pink-salt',
                'description' => '100% Pure, unrefined food-grade Himalayan Pink Salt mined directly from Khewra, Salt Range Pakistan. Calibrated in 4 distinct culinary & export grain sizes: Fine, Medium, Coarse, and Crystal Rock. Certified ISO 22000, CXS 150:1985 Codex, Halal & Kosher.',
                'image_url' => '/images/products/pink-salt-grains.jpg',
                'subcategories' => [
                    [
                        'name' => 'Fine Pink Salt (0.3 - 0.8 mm)',
                        'slug' => 'fine-pink-salt',
                        'description' => 'Direct culinary and table seasoning salt, ultra-consistent free flowing pink crystals.'
                    ],
                    [
                        'name' => 'Medium Pink Salt (0.8 - 2 mm)',
                        'slug' => 'medium-pink-salt',
                        'description' => 'Granulated gourmet grain ideal for cooking, curing, seasoning mixes, and shaker bottles.'
                    ],
                    [
                        'name' => 'Coarse Pink Salt (2 - 5 mm)',
                        'slug' => 'coarse-pink-salt',
                        'description' => 'Calibrated crystalline salt tailored specifically for refillable spice mills & grinders.'
                    ],
                    [
                        'name' => 'Crystal Pink Salt (5 - 8 mm)',
                        'slug' => 'crystal-pink-salt',
                        'description' => 'Chunky jewel-like pink salt crystals for high-end culinary presentation, bath soaks, and brining.'
                    ]
                ],
                'products' => [
                    [
                        'name' => 'Himalayan Pink Salt - Fine Table Grain (0.3-0.8mm)',
                        'subcat_slug' => 'fine-pink-salt',
                        'badge' => 'Top Seller',
                        'grade' => 'Food Grade ISO-22000 / CXS 150:1985 / Halal / Kosher',
                        'mesh_size' => '0.3 - 0.8 mm',
                        'grain_size' => 'Fine (0.3-0.8mm)',
                        'purity' => '99.1% NaCl',
                        'packaging' => '1kg Stand-up Zip Pouch (Food Grade Barrier Film)',
                        'packaging_type' => 'Stand-up Pouches',
                        'package_weight' => '1 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'pure_salt',
                        'moq' => '1,000 Pouches (1 Metric Ton)',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-grains.jpg',
                        'short_desc' => 'Ultra-pure food grade fine Himalayan pink salt calibrated from 0.3mm to 0.8mm. Naturally free-flowing with 84+ trace minerals.',
                        'full_desc' => 'Mined directly from pristine geological seams within the Khewra Salt Range of Pakistan. Our Fine Pink Salt undergoes multi-deck vibrating screen calibration and neodymium magnetic filtration. Free from microplastics, anti-caking agents, or artificial additives.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Himalayan Pink Salt - Medium Gourmet Grain (0.8-2mm)',
                        'subcat_slug' => 'medium-pink-salt',
                        'badge' => 'Chef Grade',
                        'grade' => 'Food Grade ISO-22000 / Halal / Kosher',
                        'mesh_size' => '0.8 - 2.0 mm',
                        'grain_size' => 'Medium (0.8-2mm)',
                        'purity' => '98.9% NaCl',
                        'packaging' => '500g Clear PET Jar with Tamper Seal & Dual Flip Lid',
                        'packaging_type' => 'PET / Glass Jars',
                        'package_weight' => '500g',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'pure_salt',
                        'moq' => '1,200 Jars',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-grains.jpg',
                        'short_desc' => 'Granulated medium grain pink salt providing a satisfying crunch for gourmet cooking, spice blends, and rubs.',
                        'full_desc' => 'Tailored for culinary processors and supermarket retail shelves. Perfect grain size for savory rubs, bakery toppings, and general kitchen seasoning. Retains vivid pink hues with zero chemical washing.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Himalayan Pink Salt - Coarse Grinder Crystals (2-5mm)',
                        'subcat_slug' => 'coarse-pink-salt',
                        'badge' => 'Export Choice',
                        'grade' => 'Gourmet Food Grade',
                        'mesh_size' => '2.0 - 5.0 mm',
                        'grain_size' => 'Coarse (2-5mm)',
                        'purity' => '98.8% NaCl',
                        'packaging' => '200g Glass Bottle with Adjustable Ceramic Grinder Top',
                        'packaging_type' => 'Grinder Bottles',
                        'package_weight' => '200g',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'pure_salt',
                        'moq' => '1,500 Bottles',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-grains.jpg',
                        'short_desc' => 'Evenly graded coarse pink salt crystals engineered specifically for smooth, non-jamming operation in ceramic spice grinders.',
                        'full_desc' => 'Export-grade coarse pink crystals screened to prevent grinder jamming. Pre-filled in food-grade heavy glass bottles with durable ceramic grinding mechanisms. Available with private-label OEM sleeve packaging.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Himalayan Pink Salt - Chunk Crystal Rock (5-8mm)',
                        'subcat_slug' => 'crystal-pink-salt',
                        'badge' => 'Bulk Container',
                        'grade' => 'Commercial & Culinary Grade',
                        'mesh_size' => '5.0 - 8.0 mm',
                        'grain_size' => 'Crystal (5-8mm)',
                        'purity' => '98.7% NaCl',
                        'packaging' => '25kg Woven Polypropylene Bag with PE Moisture Barrier',
                        'packaging_type' => '25kg PP Export Bags',
                        'package_weight' => '25 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'pure_salt',
                        'moq' => '25 Metric Tons (1x20ft FCL)',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-grains.jpg',
                        'short_desc' => 'Jewel-like translucent pink crystal chunks ideal for commercial brine making, gourmet presentations, and repackaging.',
                        'full_desc' => 'Direct container-load supply of chunky crystal rock pink salt. High visual appeal and mineral density make it the premium choice for European and North American importers looking to repackage into retail formats.',
                        'is_featured' => false,
                        'is_active' => true,
                    ]
                ]
            ],

            // 2. Cooking Salt Tiles
            [
                'name' => 'Cooking Salt Tiles',
                'slug' => 'cooking-salt-tiles',
                'description' => 'Natural 100% Himalayan mineral cooking tiles, searing slabs, and chilled serving platters cut directly from solid ancient Khewra salt seams. Withstands high cooking temperatures for grilling steaks, seafood, and vegetables while imparting a delicate mineral salt crust.',
                'image_url' => '/images/products/cooking-salt-tiles.jpg',
                'subcategories' => [
                    [
                        'name' => 'Rectangular Salt Cooking Slabs (8x4x2")',
                        'slug' => 'rectangular-cooking-slabs',
                        'description' => 'Precision machine-cut rectangular cooking slabs engineered for stovetop, oven, and BBQ grill searing.'
                    ],
                    [
                        'name' => 'Gourmet Grilling & Searing Blocks (12x8x1.5")',
                        'slug' => 'gourmet-searing-blocks',
                        'description' => 'Extra-large thick cooking salt blocks providing large surface area for simultaneous searing of steaks and skewers.'
                    ],
                    [
                        'name' => 'Round Salt Serving Platters & Chilling Plates',
                        'slug' => 'round-serving-platters',
                        'description' => 'Polished circular pink salt discs for serving sushi, sashimi, carpaccio, and artisanal cheeses.'
                    ]
                ],
                'products' => [
                    [
                        'name' => 'Gourmet Himalayan Salt Cooking Tile & Slab (8x4x2 in)',
                        'subcat_slug' => 'rectangular-cooking-slabs',
                        'badge' => 'Culinary Hit',
                        'grade' => 'Culinary Grade Thermal Stone',
                        'mesh_size' => 'Solid Cut Block (8x4x2")',
                        'grain_size' => 'Solid Cut Slab',
                        'purity' => '98.6% NaCl',
                        'packaging' => 'Shrink-wrapped with safety corner guards, 6 pcs per master carton',
                        'packaging_type' => 'Master Carton',
                        'package_weight' => '2.5 kg / piece',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'tile_brick',
                        'moq' => '500 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/cooking-salt-tiles.jpg',
                        'short_desc' => 'High-thermal retention pink salt cooking slab. Imparts subtle gourmet mineral notes to meats, fish, and veggies on gas stoves or charcoal grills.',
                        'full_desc' => 'Carefully extracted from solid Khewra salt blocks and precision-cut to 8x4x2 inches. Can be heated slowly to 450°F (230°C) for tabletop cooking or chilled in the freezer for cold appetizers and desserts.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Heavy-Duty Himalayan Salt Searing Block (12x8x1.5 in)',
                        'subcat_slug' => 'gourmet-searing-blocks',
                        'badge' => 'BBQ & Steakhouse',
                        'grade' => 'High-Heat Grilling Grade',
                        'mesh_size' => 'Solid Cut Block (12x8x1.5")',
                        'grain_size' => 'Solid Cut Block',
                        'purity' => '98.8% NaCl',
                        'packaging' => 'Foam-padded retail presentation box, 4 pcs per master carton',
                        'packaging_type' => 'Master Carton',
                        'package_weight' => '5.5 kg / piece',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'tile_brick',
                        'moq' => '200 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/cooking-salt-tiles.jpg',
                        'short_desc' => 'Oversized commercial-grade Himalayan cooking slab designed for professional steakhouses, BBQ enthusiasts, and gourmet caterers.',
                        'full_desc' => 'With a generous 12x8 inch surface and 1.5-inch thickness, this block retains heat for extended cooking sessions. Distributes heat evenly without flare-ups, searing meats to perfection while naturally infusing essential trace elements.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Round Himalayan Salt Chilling & Serving Platter (8 in)',
                        'subcat_slug' => 'round-serving-platters',
                        'badge' => 'Sushi & Platter',
                        'grade' => 'Cold Platter & Sushi Grade',
                        'mesh_size' => 'Polished Round Disc (8" dia x 1.5")',
                        'grain_size' => 'Polished Round Disc',
                        'purity' => '98.7% NaCl',
                        'packaging' => 'Luxury padded gift box with presentation guide',
                        'packaging_type' => 'Retail Gift Box',
                        'package_weight' => '2.8 kg / piece',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'tile_brick',
                        'moq' => '300 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/cooking-salt-tiles.jpg',
                        'short_desc' => 'Circular hand-polished salt serving platter. Chill in the freezer to keep sashimi, fruits, and carpaccio chilled for hours at dinner parties.',
                        'full_desc' => 'Artisanal round plate carved from solid pink salt crystal. Antimicrobial surface is naturally hygienic and easy to wipe clean after serving. A stunning centerpiece for upscale hospitality and retail gift catalogs.',
                        'is_featured' => false,
                        'is_active' => true,
                    ]
                ]
            ],

            // 3. Animal Lick Salt
            [
                'name' => 'Animal Lick Salt',
                'slug' => 'animal-lick-salt',
                'description' => '100% Natural Himalayan mineral lick salt for horses, cattle, sheep, goats, and livestock. Available in natural raw rock with hanging weather-proof ropes and compressed mineral lick blocks in 5kg, 10kg, 15kg, and 20kg weights.',
                'image_url' => '/images/products/animal-lick-salt.jpg',
                'subcategories' => [
                    [
                        'name' => 'Simple Natural Rock Lick Salt (5kg, 10kg, 15kg, 20kg)',
                        'slug' => 'simple-natural-rock-lick',
                        'description' => 'Raw natural rock chunks drilled with a center hole and fitted with durable hanging rope for pasture & stable use.'
                    ],
                    [
                        'name' => 'Compressed Mineral Lick Salt Blocks (5kg, 10kg, 15kg, 20kg)',
                        'slug' => 'compressed-mineral-lick-blocks',
                        'description' => 'High-density hydraulically compressed lick salt blocks fortified with vital livestock micro-minerals.'
                    ]
                ],
                'products' => [
                    [
                        'name' => 'Natural Rock Animal Lick Salt with Rope - 5kg',
                        'subcat_slug' => 'simple-natural-rock-lick',
                        'badge' => 'Equine & Stable',
                        'grade' => 'Livestock & Equine Feed Grade',
                        'mesh_size' => 'Natural Solid Rock (5 kg)',
                        'grain_size' => 'Natural Rock Lump',
                        'purity' => '84+ Essential Natural Minerals',
                        'packaging' => 'Individually shrink-wrapped with durable hemp hanging rope, 4 pcs/carton',
                        'packaging_type' => 'Shrink Wrap with Rope',
                        'package_weight' => '5 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'animal_lick',
                        'moq' => '500 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/animal-lick-salt.jpg',
                        'short_desc' => 'Pure rock salt lick mined directly from Khewra. Weather-resistant with durable rope for horse stables and cattle pens.',
                        'full_desc' => 'Hard natural pink rock crystal prevents animals from biting off large chunks, ensuring long-lasting enjoyment and natural mineral replenishment. Withstands rain and humidity far better than artificial pressed salt.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Natural Rock Animal Lick Salt with Rope - 10kg',
                        'subcat_slug' => 'simple-natural-rock-lick',
                        'badge' => 'Popular Weight',
                        'grade' => 'Livestock & Equine Feed Grade',
                        'mesh_size' => 'Natural Solid Rock (10 kg)',
                        'grain_size' => 'Natural Rock Lump',
                        'purity' => '84+ Essential Natural Minerals',
                        'packaging' => 'Individually shrink-wrapped with reinforced rope, 2 pcs/carton',
                        'packaging_type' => 'Shrink Wrap with Rope',
                        'package_weight' => '10 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'animal_lick',
                        'moq' => '300 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/animal-lick-salt.jpg',
                        'short_desc' => 'Heavy-duty 10kg natural pink rock lick for cattle herds and commercial dairy farms. Promotes healthy digestion and electrolyte balance.',
                        'full_desc' => 'Our 10kg natural salt lick is the ideal volume for cattle paddocks and farm pastures. Fitted with a heavy-duty reinforced rope to suspend easily from fence posts or barn railings out of dirt and mud.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Natural Rock Animal Lick Salt with Rope - 15kg & 20kg',
                        'subcat_slug' => 'simple-natural-rock-lick',
                        'badge' => 'Heavy Pasture',
                        'grade' => 'Free-Range Pasture Grade',
                        'mesh_size' => 'Natural Solid Rock (15kg - 20kg)',
                        'grain_size' => 'Heavy Pasture Rock',
                        'purity' => '100% Unrefined Natural Seam',
                        'packaging' => 'Heavy-duty protective wrap, stacked on shrink-wrapped export wooden pallets',
                        'packaging_type' => 'Heavy-Duty Palletized',
                        'package_weight' => '15kg - 20kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'animal_lick',
                        'moq' => '200 Pieces (or 1 FCL)',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/animal-lick-salt.jpg',
                        'short_desc' => 'Massive 15kg - 20kg natural boulder salt licks for extensive cattle ranching, game reserves, and feedlots.',
                        'full_desc' => 'Heavyweight natural Khewra boulders designed to remain stationed in open pastures through all seasonal conditions. Animals self-regulate their intake of iron, calcium, magnesium, and potassium.',
                        'is_featured' => false,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Compressed Mineral Lick Salt Block - 5kg & 10kg',
                        'subcat_slug' => 'compressed-mineral-lick-blocks',
                        'badge' => 'Weather-Resistant',
                        'grade' => 'Fortified Feed Grade',
                        'mesh_size' => 'Hydraulic Compressed Block (5kg / 10kg)',
                        'grain_size' => 'Compressed Mineral Block',
                        'purity' => 'Calibrated Minerals (Zinc, Iron, Selenium)',
                        'packaging' => 'Moisture-proof shrink film with center hole for holder mounting, 4 pcs/carton',
                        'packaging_type' => 'Shrink Wrap with Center Hole',
                        'package_weight' => '5kg & 10kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'animal_lick',
                        'moq' => '1,000 Pieces',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/animal-lick-salt.jpg',
                        'short_desc' => 'Precision hydraulically compressed pink salt blocks engineered for standard barn lick holders and automatic feeders.',
                        'full_desc' => 'Manufactured under extreme pressure to prevent crumbling and rapid dissolving in humid environments. Features a standardized central mounting hole for simple installation in barn feeder troughs.',
                        'is_featured' => true,
                        'is_active' => true,
                    ]
                ]
            ],

            // 4. Pink Salt Lamps
            [
                'name' => 'Pink Salt Lamps',
                'slug' => 'pink-salt-lamps',
                'description' => 'Artisanal hand-crafted authentic Khewra pink salt crystal lamps emitting warm amber negative ions for air ionization, stress relief, and holistic interior aesthetics. Available in natural rough shapes, fire bowls, and geometric pyramids.',
                'image_url' => '/images/products/pink-salt-lamps.jpg',
                'subcategories' => [
                    [
                        'name' => 'Natural Shape Pink Salt Lamps (2-3kg, 3-5kg, 5-7kg)',
                        'slug' => 'natural-shape-salt-lamps',
                        'description' => 'Authentic hand-chipped natural boulder lamps mounted on treated termite-resistant neem or rosewood bases.'
                    ],
                    [
                        'name' => 'Handcrafted Geometric & Fire Bowl Lamps',
                        'slug' => 'geometric-fire-bowl-lamps',
                        'description' => 'Carved artisan lamps including fire bowls filled with glowing massage balls, pyramids, and polished spheres.'
                    ],
                    [
                        'name' => 'USB & Miniature Night Light Salt Lamps',
                        'slug' => 'usb-night-light-salt-lamps',
                        'description' => 'Compact desktop USB salt lamps and wall plug-in night lights for bedrooms, offices, and wellness studios.'
                    ]
                ],
                'products' => [
                    [
                        'name' => 'Natural Shape Himalayan Pink Salt Lamp (3-5 kg)',
                        'subcat_slug' => 'natural-shape-salt-lamps',
                        'badge' => 'Best Seller',
                        'grade' => 'CE / UL / RoHS Certified Electricals',
                        'mesh_size' => 'Hand-Chipped Crystal (3-5kg)',
                        'grain_size' => 'Handcrafted Lamps',
                        'purity' => '100% Khewra Crystal',
                        'packaging' => 'Individual mail-order color gift box with polystyrene padding & neem wood base',
                        'packaging_type' => 'Retail Gift Box',
                        'package_weight' => '3-5 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'lamp_craft',
                        'moq' => '300 Units',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-lamps.jpg',
                        'short_desc' => 'Classic natural hand-carved pink crystal lamp. Emits a soothing amber glow that purifies indoor air and creates a serene ambiance.',
                        'full_desc' => 'Each lamp is uniquely hand-chiseled by master Pakistani artisans to preserve the natural mineral strata of the Khewra mines. Mounted on a durable wooden base and fitted with certified electrical cord with rotary dimmer switch.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Artisanal Fire Bowl Salt Lamp with Illuminated Salt Balls',
                        'subcat_slug' => 'geometric-fire-bowl-lamps',
                        'badge' => 'Luxury Decor',
                        'grade' => 'Holistic Wellness & Spa Grade',
                        'mesh_size' => 'Carved Bowl + 6 Polished Spheres',
                        'grain_size' => 'Handcrafted Lamps',
                        'purity' => 'Artisanal Hand-Carved',
                        'packaging' => 'Reinforced export carton with molded foam inserts (Includes 6 salt massage spheres)',
                        'packaging_type' => 'Retail Gift Box',
                        'package_weight' => '4-5 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'lamp_craft',
                        'moq' => '200 Units',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-lamps.jpg',
                        'short_desc' => 'Exquisite hand-carved salt fire bowl filled with glowing heated pink salt spheres. Ideal for spa massage therapy and upscale interior decor.',
                        'full_desc' => 'A statement piece for living rooms, yoga studios, and luxury spas. The heated salt spheres can be removed and gently rolled on sore muscles for warm stone massage therapy while releasing soothing negative ions into the room.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Geometric Pyramid Himalayan Crystal Salt Lamp',
                        'subcat_slug' => 'geometric-fire-bowl-lamps',
                        'badge' => 'Geometric Art',
                        'grade' => 'CE / UL Certified',
                        'mesh_size' => 'Precision Polished Pyramid (2.5-3.5kg)',
                        'grain_size' => 'Handcrafted Lamps',
                        'purity' => 'A-Grade Translucent Crystal',
                        'packaging' => 'Luxury gift box with dimmer switch cord & wooden mahogany base',
                        'packaging_type' => 'Retail Gift Box',
                        'package_weight' => '2.5-3.5 kg',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'lamp_craft',
                        'moq' => '250 Units',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/pink-salt-lamps.jpg',
                        'short_desc' => 'Sleek modern 4-sided pyramid cut from solid translucent pink crystal. Combines ancient mineral wellness with contemporary geometric design.',
                        'full_desc' => 'Cut and polished to exact angular proportions, this pyramid lamp showcases deep salmon and amber hues when lit. Perfect for executive desks, modern minimalist homes, and meditation corners.',
                        'is_featured' => false,
                        'is_active' => true,
                    ]
                ]
            ],

            // 5. Salt Bricks
            [
                'name' => 'Salt Bricks',
                'slug' => 'salt-bricks',
                'description' => 'Precision-calibrated Himalayan pink salt bricks, tiles, and slabs for halotherapy salt cave construction, sauna wellness walls, and architectural interior design. High mineral density with superior light transmission for dramatic backlighting.',
                'image_url' => '/images/products/salt-bricks.jpg',
                'subcategories' => [
                    [
                        'name' => 'Smooth Face Himalayan Salt Bricks (8x4x2")',
                        'slug' => 'smooth-face-salt-bricks',
                        'description' => 'Precision six-sided machine cut bricks for smooth, flush salt walls in saunas, spas, and wellness centers.'
                    ],
                    [
                        'name' => 'Natural Rock Face Salt Bricks & Tiles (8x4x1")',
                        'slug' => 'natural-rock-face-salt-bricks',
                        'description' => 'Rustic natural split face tiles providing dynamic texture and 3D shadow play in salt therapy caves.'
                    ],
                    [
                        'name' => 'Backlit Salt Wall & Sauna Construction Blocks',
                        'slug' => 'backlit-salt-wall-blocks',
                        'description' => 'Translucent high-clarity salt blocks engineered specifically for LED backlighting and sauna installation.'
                    ]
                ],
                'products' => [
                    [
                        'name' => 'Calibrated Himalayan Salt Bricks (8x4x2 in) - Smooth Finish',
                        'subcat_slug' => 'smooth-face-salt-bricks',
                        'badge' => 'Spa & Sauna Wall',
                        'grade' => 'Architectural Construction Grade',
                        'mesh_size' => 'Smooth Machine Cut (8x4x2")',
                        'grain_size' => 'Architectural Salt Bricks',
                        'purity' => '98.6% Translucent Crystal',
                        'packaging' => '10 bricks per foam-cushioned carton, 1,000 bricks per heat-treated wooden pallet',
                        'packaging_type' => 'Carton & Wooden Pallet',
                        'package_weight' => '2.2 kg / brick',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'tile_brick',
                        'moq' => '1,000 Bricks (1 Full Pallet)',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/salt-bricks.jpg',
                        'short_desc' => 'Smooth 6-sided calibrated pink salt bricks. Engineered for seamless mortar or glue assembly in halotherapy saunas and salt caves.',
                        'full_desc' => 'Direct manufacturer pricing on export pallets of 8x4x2 inch Himalayan salt bricks. Highly translucent crystalline structure allows warm LED backlighting to glow through, transforming wellness centers, private saunas, and luxury spas into therapeutic sanctuaries.',
                        'is_featured' => true,
                        'is_active' => true,
                    ],
                    [
                        'name' => 'Rustic Natural Split-Face Himalayan Salt Wall Tiles (8x4x1 in)',
                        'subcat_slug' => 'natural-rock-face-salt-bricks',
                        'badge' => 'Salt Cave Wall',
                        'grade' => 'Textured Decorative Halotherapy Grade',
                        'mesh_size' => 'Split Rough Face (8x4x1")',
                        'grain_size' => 'Architectural Salt Bricks',
                        'purity' => '98.5% Khewra Seam',
                        'packaging' => '20 tiles per carton with interleaf protection, 1,200 tiles per export pallet',
                        'packaging_type' => 'Carton & Wooden Pallet',
                        'package_weight' => '1.1 kg / tile',
                        'price' => null,
                        'price_unit' => null,
                        'product_type' => 'tile_brick',
                        'moq' => '1,200 Tiles',
                        'origin' => 'Khewra Salt Range, Pakistan',
                        'image_url' => '/images/products/salt-bricks.jpg',
                        'short_desc' => 'Natural rough split-face salt tiles for 3D textured acoustic wall cladding in halotherapy rooms and commercial spas.',
                        'full_desc' => 'Features a flat back for easy wall adhesive application and an authentic hand-split front face that diffuses warm light in dramatic patterns. Helps release negative ions and regulate indoor microclimate humidity.',
                        'is_featured' => true,
                        'is_active' => true,
                    ]
                ]
            ]
        ];

        foreach ($categoriesData as $cData) {
            $category = Category::updateOrCreate(
                ['slug' => $cData['slug']],
                [
                    'name' => $cData['name'],
                    'description' => $cData['description'],
                    'image_url' => $cData['image_url'],
                    'is_active' => true,
                ]
            );

            $subcatMap = [];
            foreach ($cData['subcategories'] as $sData) {
                $subcat = Subcategory::updateOrCreate(
                    ['slug' => $sData['slug']],
                    [
                        'category_id' => $category->id,
                        'name' => $sData['name'],
                        'description' => $sData['description'],
                        'is_active' => true,
                    ]
                );
                $subcatMap[$sData['slug']] = $subcat->id;
            }

            foreach ($cData['products'] as $pData) {
                $subcatId = $subcatMap[$pData['subcat_slug']] ?? null;
                $slug = Str::slug($pData['name']);

                Product::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'category_id' => $category->id,
                        'subcategory_id' => $subcatId,
                        'name' => $pData['name'],
                        'category' => $category->name,
                        'badge' => $pData['badge'],
                        'grade' => $pData['grade'],
                        'mesh_size' => $pData['mesh_size'],
                        'grain_size' => $pData['grain_size'],
                        'purity' => $pData['purity'],
                        'packaging' => $pData['packaging'],
                        'packaging_type' => $pData['packaging_type'],
                        'package_weight' => $pData['package_weight'],
                        'price' => $pData['price'],
                        'price_unit' => $pData['price_unit'],
                        'product_type' => $pData['product_type'],
                        'moq' => $pData['moq'],
                        'origin' => $pData['origin'],
                        'image_url' => $pData['image_url'],
                        'short_desc' => $pData['short_desc'],
                        'full_desc' => $pData['full_desc'],
                        'is_featured' => $pData['is_featured'],
                        'is_active' => $pData['is_active'],
                    ]
                );
            }
        }
    }
}
