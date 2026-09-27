<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ContactSubmission;
use App\Models\QuoteRequest;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function home()
    {
        $products = Product::where('is_active', true)->with(['categoryRef', 'subcategoryRef'])->take(8)->get();
        return view('welcome', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $categories = \App\Models\Category::where('is_active', true)
            ->with(['subcategories' => function ($q) {
                $q->where('is_active', true)->withCount(['products' => function($pq) {
                    $pq->where('is_active', true);
                }]);
            }])
            ->withCount(['products' => function($pq) {
                $pq->where('is_active', true);
            }])
            ->get();

        $products = Product::where('is_active', true)
            ->with(['categoryRef', 'subcategoryRef'])
            ->get();

        return view('products', compact('products', 'categories'));
    }

    public function certifications()
    {
        return view('certifications');
    }

    public function exportLogistics()
    {
        return view('export-logistics');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'category' => 'nullable|string|max:255',
            'quantity_port' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $submission = ContactSubmission::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you ' . e($submission->name) . '! Your inquiry has been submitted. The Saltora export desk will respond within 24 hours.',
            'id' => $submission->id
        ]);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function submitOrder(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:100',
            'destination_country' => 'required|string|max:255',
            'destination_port' => 'nullable|string|max:255',
            'target_date' => 'nullable|string|max:255',
            'items' => 'required',
            'notes' => 'nullable|string',
        ]);

        // Support stringified JSON items or array
        $itemsArray = is_string($validated['items']) ? json_decode($validated['items'], true) : $validated['items'];
        if (!is_array($itemsArray) || count($itemsArray) === 0) {
            $itemsArray = [['name' => 'Himalayan Pink Salt Export Batch', 'quantity' => 20, 'category' => 'Bulk Export']];
        }

        $quoteNumber = 'SLT-' . date('Y') . '-' . strtoupper(Str::random(6));

        $quote = QuoteRequest::create([
            'quote_number' => $quoteNumber,
            'full_name' => $validated['full_name'],
            'company_name' => $validated['company_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'destination_country' => $validated['destination_country'],
            'destination_port' => $validated['destination_port'] ?? null,
            'target_date' => $validated['target_date'] ?? null,
            'items' => $itemsArray,
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'quote_number' => $quoteNumber,
                'redirect_url' => route('order.success', ['quote_number' => $quoteNumber]),
                'quote' => $quote,
                'message' => 'Export Order #' . $quoteNumber . ' placed successfully!'
            ]);
        }

        return redirect()->route('order.success', ['quote_number' => $quoteNumber]);
    }

    public function submitQuote(Request $request)
    {
        // Support backward compatibility
        $request->merge([
            'full_name' => $request->input('full_name', $request->input('customer_name')),
            'company_name' => $request->input('company_name', $request->input('customer_company')),
            'email' => $request->input('email', $request->input('customer_email')),
            'phone' => $request->input('phone', $request->input('customer_phone')),
            'destination_country' => $request->input('destination_country', 'International Destination'),
        ]);

        return $this->submitOrder($request);
    }

    public function orderSuccess($quote_number)
    {
        $quote = QuoteRequest::where('quote_number', $quote_number)->first();
        
        if (!$quote) {
            // Fallback mock object if quote number isn't found
            $quote = (object)[
                'quote_number' => $quote_number,
                'full_name' => 'Valued Buyer',
                'company_name' => 'Global Imports Inc.',
                'email' => 'buyer@export.com',
                'phone' => '+1 234 567 890',
                'destination_country' => 'Destination Port',
                'destination_port' => 'Port of Entry',
                'created_at' => now(),
                'status' => 'pending',
                'items' => [['name' => 'Himalayan Pink Salt', 'quantity' => 20, 'category' => 'Bulk Export']],
                'notes' => 'Export order registered successfully.'
            ];
        }

        return view('order-success', compact('quote'));
    }
}

