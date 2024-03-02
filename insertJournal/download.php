<?php
if (isset($_GET['file'])) {
    $file = '../journalPdf/' . $_GET['file'];

    // Check if the file exists
    if (file_exists($file)) {
        // Set headers for download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Content-Length: ' . filesize($file));

        // Output the file content
        readfile($file);
        exit;
    } else {
        // File not found
        echo 'File not found.';
    }
} else {
    // Invalid request
    echo 'Invalid request.';
}
?>
