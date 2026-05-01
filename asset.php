<?php
$assetDir = __DIR__ . '/asset/';
$files = [];
if (is_dir($assetDir)) {
    $handle = opendir($assetDir);
    while (($file = readdir($handle)) !== false) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
            $files[] = $file;
        }
    }
    closedir($handle);
    sort($files);
}
header('Content-Type: application/json');
echo json_encode($files);
?>
