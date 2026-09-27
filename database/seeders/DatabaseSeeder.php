<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\QuoteRequest;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@saltora.com'],
            [
                'name' => 'Saltora Admin Desk',
                'password' => Hash::make('password123'),
            ]
        );

        // 2. Default Export Products
        $products = [
            [
                'name' => 'Himalayan Pink Salt',
                'slug' => 'himalayan-pink-salt',
                'image_url' => '/product1.jpg',
                'category' => 'Edible Salt',
                'grade' => 'Natural Rock Salt',
                'mesh_size' => 'Mixed Raw',
                'purity' => '98.5%+ NaCl',
                'short_desc' => 'Authentic Pakistani Himalayan pink salt in its natural, mineral-rich form — the core of the Saltora range for food and retail buyers.',
                'full_desc' => 'Direct from the salt mines of Pakistan. Unrefined, pure, and rich in natural trace minerals.',
                'badge' => 'Top Seller',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Fine Himalayan Pink Salt',
                'slug' => 'fine-himalayan-pink-salt',
                'image_url' => '/product2.jpg',
                'category' => 'Edible Salt',
                'grade' => 'Fine Table Grade',
                'mesh_size' => '0.2mm – 0.8mm',
                'purity' => '98.8%+ NaCl',
                'short_desc' => 'Finely milled pink salt with a smooth, even texture — suited to table salt, food manufacturing, seasoning blends and food-service use.',
                'full_desc' => 'Precision milled fine table salt for international culinary and manufacturing use.',
                'badge' => 'Popular',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Coarse Himalayan Pink Salt',
                'slug' => 'coarse-himalayan-pink-salt',
                'image_url' => '/product3.jpg',
                'category' => 'Edible Salt',
                'grade' => 'Coarse Grinder Grade',
                'mesh_size' => '2.0mm – 5.0mm',
                'purity' => '98.6%+ NaCl',
                'short_desc' => 'Coarse, sparkling pink salt crystals for grinders, gourmet retail, food processing and culinary applications.',
                'full_desc' => 'Sparkling coarse crystals ideal for glass pepper & salt grinders and gourmet food seasoning.',
                'badge' => 'Export Grade',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Himalayan Salt Granules',
                'slug' => 'himalayan-salt-granules',
                'image_url' => '/product4.jpg',
                'category' => 'Spa & Wellness',
                'grade' => 'Granulated Grade',
                'mesh_size' => '1.0mm – 3.0mm',
                'purity' => '98.7%+ NaCl',
                'short_desc' => 'Uniform mid-size pink salt granules for food production, bath and wellness products, and further processing by manufacturers.',
                'full_desc' => 'Evenly granulated pink salt crystals suited for spa treatments, bath salts, and food manufacturing.',
                'badge' => 'Wellness',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Salt Chunks / Lumps',
                'slug' => 'salt-chunks-lumps',
                'image_url' => '/sourcingsec.jpg',
                'category' => 'Salt Lamps & Craft',
                'grade' => 'Raw Rock Lumps',
                'mesh_size' => '50mm – 150mm+',
                'purity' => '98.5%+ NaCl',
                'short_desc' => 'Natural rock salt chunks and lumps in raw form — for buyers who process, mill or craft salt products to their own specifications.',
                'full_desc' => 'Raw natural rock salt blocks and lumps for industrial mills and salt craft manufacturers.',
                'badge' => 'Raw Rock',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Industrial / Bulk Salt',
                'slug' => 'industrial-bulk-salt',
                'image_url' => '/bulk.jpg',
                'category' => 'Industrial & Chemical',
                'grade' => 'Industrial Grade Bulk',
                'mesh_size' => 'Custom Mesh Size',
                'purity' => '98.2%+ NaCl',
                'short_desc' => 'Bulk-supply Himalayan salt for industrial applications, large-volume buyers and non-food-based export programs.',
                'full_desc' => 'Volume containerized bulk salt supplied in 1-Ton FIBC supersacks for heavy industrial programs.',
                'badge' => 'Bulk FIBC',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Custom Packaging / Private Label',
                'slug' => 'custom-packaging-private-label',
                'image_url' => '/bag2.jpg',
                'category' => 'Edible Salt',
                'grade' => 'OEM Custom Grade',
                'mesh_size' => 'Per Buyer Spec',
                'purity' => '98.5%+ NaCl',
                'short_desc' => 'Export-ready pink salt prepared under buyer specifications — packaging for retail, branding and private-label programs discussed per requirement.',
                'full_desc' => 'Tailor-made private label pouches, shakers, and custom branded retail packaging solutions.',
                'badge' => 'OEM Packaging',
                'is_active' => true,
                'is_featured' => true,
            ],
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // 3. Sample Dummy Bulk Orders
        $dummyOrders = [
            [
                'quote_number' => 'SLT-2026-849120',
                'full_name' => 'Alexander Wright',
                'company_name' => 'Nordic Gourmet Imports Ltd',
                'email' => 'alexander@nordicgourmet.se',
                'phone' => '+46 8 123 4567',
                'destination_country' => 'Sweden',
                'destination_port' => 'Port of Gothenburg',
                'target_date' => '2026-10-15',
                'notes' => 'Require 25kg PP bags with food grade PE liner. Please provide FOB Karachi pricing.',
                'items' => [
                    ['id' => 1, 'name' => 'Himalayan Pink Salt', 'category' => 'Edible Salt', 'quantity' => 25],
                    ['id' => 2, 'name' => 'Fine Himalayan Pink Salt', 'category' => 'Edible Salt', 'quantity' => 20]
                ],
                'status' => 'pending'
            ],
            [
                'quote_number' => 'SLT-2026-720194',
                'full_name' => 'Marcus Vance',
                'company_name' => 'Vance Food Products Corp',
                'email' => 'mvance@vancefoods.com',
                'phone' => '+1 713 555 0192',
                'destination_country' => 'United States',
                'destination_port' => 'Port of Houston, TX',
                'target_date' => '2026-11-01',
                'notes' => 'Full container load (FCL 20ft). Need COA certificates and ISO-22000 compliance docs.',
                'items' => [
                    ['id' => 3, 'name' => 'Coarse Himalayan Pink Salt', 'category' => 'Edible Salt', 'quantity' => 40],
                    ['id' => 4, 'name' => 'Himalayan Salt Granules', 'category' => 'Spa & Wellness', 'quantity' => 15]
                ],
                'status' => 'processing'
            ],
            [
                'quote_number' => 'SLT-2026-619283',
                'full_name' => 'Klaus Weber',
                'company_name' => 'Weber Saltz & Chemie GmbH',
                'email' => 'k.weber@weber-saltz.de',
                'phone' => '+49 40 9876 543',
                'destination_country' => 'Germany',
                'destination_port' => 'Port of Hamburg',
                'target_date' => '2026-10-20',
                'notes' => 'Industrial bulk order. 1-Ton Jumbo Bags required.',
                'items' => [
                    ['id' => 6, 'name' => 'Industrial / Bulk Salt', 'category' => 'Industrial & Chemical', 'quantity' => 100]
                ],
                'status' => 'completed'
            ],
            [
                'quote_number' => 'SLT-2026-509124',
                'full_name' => 'Tariq Al-Mansoor',
                'company_name' => 'Gulf Distribution Co',
                'email' => 'tariq@gulfdist.ae',
                'phone' => '+971 4 321 9876',
                'destination_country' => 'United Arab Emirates',
                'destination_port' => 'Jebel Ali Port, Dubai',
                'target_date' => '2026-10-10',
                'notes' => 'Private label stand-up pouches 500g needed. OEM design artwork ready.',
                'items' => [
                    ['id' => 7, 'name' => 'Custom Packaging / Private Label', 'category' => 'Edible Salt', 'quantity' => 30]
                ],
                'status' => 'pending'
            ]
        ];

        foreach ($dummyOrders as $ord) {
            QuoteRequest::updateOrCreate(['quote_number' => $ord['quote_number']], $ord);
        }

        // 4. Sample Dummy Contact Messages
        $dummyInquiries = [
            [
                'name' => 'David Miller',
                'email' => 'dmiller@pacificimports.com.au',
                'phone' => '+61 2 9876 5432',
                'company' => 'Pacific Imports Australia',
                'subject' => 'Bulk Pink Salt Container Rate to Sydney',
                'country' => 'Australia',
                'message' => 'Hello Saltora Team, we are interested in importing 20ft FCL of Fine Pink Salt to Sydney Port. Please send us your specification sheet and price per MT.',
                'status' => 'new'
            ],
            [
                'name' => 'Sophia Rossi',
                'email' => 'sophia@bellasal.it',
                'phone' => '+39 02 5555 1234',
                'company' => 'BellaSal Gourmet Italia',
                'subject' => 'Salt Grinder Coarse Crystals Inquiry',
                'country' => 'Italy',
                'message' => 'Buon giorno, we require 2-5mm coarse pink salt for our spice grinder line. Do you supply in 25kg woven bags? Looking forward to your reply.',
                'status' => 'read'
            ],
            [
                'name' => 'Chen Wei',
                'email' => 'chen.wei@shanghaifoods.cn',
                'phone' => '+86 21 6543 2100',
                'company' => 'Shanghai Food Trading',
                'subject' => 'Himalayan Salt Block & Lumps Bulk Purchase',
                'country' => 'China',
                'message' => 'We wish to inquire about raw rock salt chunks for salt lamp manufacturing. Minimum order quantity and container lead times needed.',
                'status' => 'replied'
            ]
        ];

        foreach ($dummyInquiries as $inq) {
            ContactSubmission::create($inq);
        }
    }
}
