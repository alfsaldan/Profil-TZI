<?php
$brands = ['Dell', 'ASUS', 'Cisco', 'Acer', 'HP', 'Lenovo', 'MSI', 'Fujitsu', 'Panasonic', 'Daikin', 'LG', 'Samsung', 'Sharp', 'Toshiba', 'Carrier', 'Mitsubishi', 'Sony', 'Sennheiser', 'Apple', 'Huawei', 'Gree', 'Midea', 'York'];
$out_dir = 'd:/Laragon/laragon/www/Company-ProfileTZI/public/images/principals';
if (!is_dir($out_dir)) mkdir($out_dir, 0777, true);

$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
    ]
];
$context = stream_context_create($opts);

foreach ($brands as $brand) {
    echo "Fetching $brand...\n";
    try {
        $url = 'https://en.wikipedia.org/w/api.php?action=query&list=search&srsearch=' . urlencode($brand . ' logo filetype:svg') . '&utf8=&format=json';
        $json = @file_get_contents($url, false, $context);
        if (!$json) {
            echo "Failed to fetch search results for $brand\n";
            continue;
        }
        $data = json_decode($json, true);
        
        if (!empty($data['query']['search'])) {
            $title = str_replace(' ', '_', $data['query']['search'][0]['title']);
            $f_url = 'https://en.wikipedia.org/w/api.php?action=query&titles=' . urlencode($title) . '&prop=imageinfo&iiprop=url&format=json';
            $f_json = @file_get_contents($f_url, false, $context);
            if (!$f_json) {
                 echo "Failed to fetch image info for $brand\n";
                 continue;
            }
            $f_data = json_decode($f_json, true);
            
            $pages = $f_data['query']['pages'];
            $page = reset($pages);
            if (isset($page['imageinfo'][0]['url'])) {
                $img_url = $page['imageinfo'][0]['url'];
                $img_data = @file_get_contents($img_url, false, $context);
                if ($img_data) {
                    file_put_contents($out_dir . '/' . strtolower($brand) . '.svg', $img_data);
                    echo "Saved $brand.svg\n";
                } else {
                    echo "Failed to download SVG for $brand\n";
                }
            } else {
                 echo "No image URL in page info for $brand\n";
            }
        } else {
            echo "No search results for $brand\n";
        }
    } catch (Exception $e) {
        echo "Error for $brand: " . $e->getMessage() . "\n";
    }
}
