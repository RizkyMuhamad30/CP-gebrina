<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

try {
    $request = Request::create('/kontak', 'POST', [
        'name' => 'Budi Santoso (Pengujian Form)',
        'phone' => '081299887766',
        'email' => 'budisantoso@gmail.com',
        'service_requested' => 'Sedot WC Rumahan & Perumahan',
        'location' => 'Kebayoran Baru, Jakarta Selatan',
        'message' => 'Halo CV GEBRINA JAYA, ini adalah tes pengiriman form kontak. Mohon info estimasi kedatangan tim ke rumah.',
    ]);

    $controller = new ContactController();
    $response = $controller->store($request);

    $lastMessage = ContactMessage::latest()->first();

    echo "CONTACT_FORM_TEST_SUCCESS\n";
    echo "ID: " . $lastMessage->id . "\n";
    echo "Nama: " . $lastMessage->name . "\n";
    echo "Phone: " . $lastMessage->phone . "\n";
    echo "Service: " . $lastMessage->service_requested . "\n";
    echo "Created At: " . $lastMessage->created_at . "\n";

} catch (\Throwable $e) {
    echo "CONTACT_FORM_TEST_ERROR: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
