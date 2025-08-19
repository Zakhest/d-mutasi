<?php
$events = [
    ["year" => 2024, "date" => "28", "month" => "Maret", "event" => "Peluncuran produk baru"],
    ["year" => 2023, "date" => "15", "month" => "Juni", "event" => "Pembaruan sistem"],
    ["year" => 2022, "date" => "10", "month" => "Desember", "event" => "Acara akhir tahun"],
];

$search = $_GET['search'] ?? '';
$filteredEvents = array_filter($events, function ($event) use ($search) {
    return stripos($event['event'], $search) !== false;
});
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .floating-search {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 250px;
        }
        .edit-icon {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Timeline</h2>
        
        <input type="text" id="searchBox" class="form-control floating-search" placeholder="Cari kejadian..." onkeyup="searchEvent()">
        
        <ul class="list-group">
            <?php foreach ($filteredEvents as $event): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong><?= $event['year']; ?></strong> - <?= $event['date']; ?> <?= $event['month']; ?>: <?= $event['event']; ?>
                    </div>
                    <a href="#" class="text-primary edit-icon" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2L2 11.207V14h2.793L14 3.793 11.207 2z"/>
                        </svg>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        function searchEvent() {
            let input = document.getElementById("searchBox").value.toLowerCase();
            window.location.href = "?search=" + input;
        }
    </script>
</body>
</html>
