<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('image_url')->nullable();
            $table->string('author')->default('SALTORA Export Desk');
            $table->string('category')->default('Export Insights');
            $table->string('read_time')->default('5 min read');
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });

        // Insert 2 high-quality initial dummy blog posts
        DB::table('posts')->insert([
            [
                'title' => 'Why Saudi & Gulf Importers Prefer Pakistani Himalayan Pink Salt Grade A',
                'slug' => 'saudi-gulf-importers-pakistani-himalayan-pink-salt',
                'excerpt' => 'Discover why 100% natural 98.5% NaCl pure Himalayan pink salt mined from Khewra is outperforming refined sea salt across Gulf Cooperation Council (GCC) food processing industries.',
                'content' => "Himalayan pink salt mined from the historic Salt Range in Khewra, Pakistan, has become the preferred choice for bulk food manufacturers and premium distributors across Saudi Arabia, UAE, and the wider GCC region.\n\n### 1. Unmatched Chemical Purity & Trace Minerals\nUnlike industrially bleached table salt, authentic Pakistani pink salt contains up to 84 essential trace minerals including magnesium, potassium, and iron. Mined from ancient pristine seabed deposits over 250 million years old, it is free from modern microplastics and chemical anti-caking additives.\n\n### 2. High Thermal Retaining Properties for Spas & Culinary Processing\nThe dense crystalline lattice of Himalayan salt rocks allows exceptional thermal stability, making it ideal for high-temperature culinary searing blocks as well as thermal salt therapy bricks used in wellness resorts across Riyadh, Dubai, and Jeddah.\n\n### 3. Cost-Efficient Bulk Maritime Shipping from Karachi Port\nSituated within short maritime freight distance from Port Qasim and Karachi Port to Gulf ports like Jeddah Islamic Port, King Abdulaziz Port Dammam, and Jebel Ali Port, shipping costs per Metric Ton are highly competitive for 20ft container loads.",
                'image_url' => '/khewra-mine.jpg',
                'author' => 'SALTORA Export Desk',
                'category' => 'Export Insights',
                'read_time' => '6 min read',
                'is_published' => true,
                'is_featured' => true,
                'views' => 142,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Complete Guide to Bulk Container Shipping & Logistics for Salt Rocks from Karachi Port',
                'slug' => 'complete-guide-bulk-container-shipping-logistics-saltora',
                'excerpt' => 'Essential guide on 20ft container tonnage limits, moisture-proof woven packaging, FOB vs CIF terms, and ISO-22000 export documentation for global B2B buyers.',
                'content' => "Shipping bulk Himalayan pink salt requires strict adherence to international maritime freight standards, specialized moisture barrier packaging, and accurate export customs clearance.\n\n### 1. Optimal 20ft Dry Container Tonnage Specs\nStandard 20ft heavy-duty containers are optimized to carry up to 26–27 Metric Tons of salt bags or jumbo totes. Loading in 25kg PP woven bags with inner PE liners prevents moisture absorption during humid maritime journeys across the Indian Ocean and Red Sea.\n\n### 2. Essential Export Documentation Required\nFor seamless customs clearance at destination ports, SALTORA provides complete documentation:\n- Bill of Lading (B/L)\n- Commercial Invoice & Packing List\n- Certificate of Origin (issued by Chamber of Commerce & Industry)\n- ISO-22000 & Halal Compliance Certificates\n- Chemical Assay Certificate (98.5%+ NaCl Purity Report)\n\n### 3. FOB vs CIF Procurement Terms\nWe offer flexible Incoterms based on buyer preference:\n- **FOB Karachi**: Buyer controls maritime freight and insurance.\n- **CIF Destination Port**: SALTORA manages vessel booking, sea freight, and marine cargo insurance directly to your port of entry.",
                'image_url' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80',
                'author' => 'Tariq Mansoor, Head of Export Logistics',
                'category' => 'Logistics & Shipping',
                'read_time' => '8 min read',
                'is_published' => true,
                'is_featured' => false,
                'views' => 98,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
