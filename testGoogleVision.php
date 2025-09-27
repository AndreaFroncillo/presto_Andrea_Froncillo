<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;

$credentials = getenv('GOOGLE_APPLICATION_CREDENTIALS');
echo "GOOGLE_APPLICATION_CREDENTIALS: $credentials\n";

$imagePath = __DIR__ . '/storage/app/public/articles/sample.jpg';
echo "Percorso immagine: $imagePath\n";

if (!file_exists($imagePath)) {
    die("Errore: immagine non trovata!\n");
}

try {
    $client = new ImageAnnotatorClient([
        'credentials' => $credentials
    ]);

    $response = $client->labelDetection($imagePath);
    $labels = $response->getLabelAnnotations();

    if ($labels) {
        echo "Labels trovate:\n";
        foreach ($labels as $label) {
            echo "- " . $label->getDescription() . "\n";
        }
    } else {
        echo "Nessuna label trovata.\n";
    }

    $client->close();
} catch (\Exception $e) {
    echo "Errore SDK Google Vision: " . $e->getMessage() . "\n";
}
