<?php
// If you want to get the Product Image, print it, show it in the page
// Use: $product->get_image();

echo $product0>get_image();

// Place the above code to anywhere you want to show image


// Or, you just want to get the SRC of Image, Galleries, and get the right size, not 'full', not 'medium', get the image size that you registered before
// Use bellow code: 
// Replace 'full' with the size you registered before
echo wp_get_attachment_image_src($product->get_image_id(), 'full')[0];

// And for the gallery images: 

$img_gallery_ids = $product->get_gallery_image_ids();
foreach ($img_gallery_ids as $img_id) { 
    echo wp_get_attachment_image_src($img_id, 'full')[0];
}

// Okay =))
?>