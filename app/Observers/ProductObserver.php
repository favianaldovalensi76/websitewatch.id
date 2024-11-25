<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\ProductLog;

class ProductObserver
{
    public function created(Product $product)
    {
        ProductLog::create([
            'product_id' => $product->id,
            'action' => 'created',
            'changes' => json_encode($product->toArray()), // Ensure proper JSON
        ]);
    }

    public function updated(Product $product)
    {
        ProductLog::create([
            'product_id' => $product->id,
            'action' => 'updated',
            'changes' => json_encode($product->getChanges()), // Ensure proper JSON
        ]);
    }

    public function deleted(Product $product)
    {
        ProductLog::create([
            'product_id' => $product->id,
            'action' => 'deleted',
            'changes' => json_encode($product->toArray()), // Ensure proper JSON
        ]);
    }
}
