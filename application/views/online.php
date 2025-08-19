<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna yang Online</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }

        /* Container Statistik */
        .stats-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .stats-box {
            background: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: 600;
        }

        .stats-box i {
            font-size: 22px;
        }

        .online {
            color: green;
        }

        .offline {
            color: red;
        }

        .total {
            color: blue;
        }

        /* Tombol Muat Ulang */
        .btn-green {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }

        .btn-green:hover {
            background-color: #45a049;
        }

        .btn-green:active {
            transform: translateY(1px);
        }

        /* Table Styling */
        .table-container {
            max-width: 800px;
            margin: auto;
            overflow-x: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        thead {
            background: #007bff;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background: #f1f1f1;
        }

        /* Status Badge */
        .status {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
        }

        .status.online {
            color: green;
        }

        .status.offline {
            color: red;
        }

        /* Pesan Tidak Ada Data */
        .no-data {
            text-align: center;
            font-size: 18px;
            color: #888;
            font-style: italic;
            padding: 15px;
        }

        /* Responsive Design */
        @media screen and (max-width: 600px) {
            .stats-box {
                font-size: 14px;
                padding: 10px;
            }
            th, td {
                font-size: 14px;
            }
        }
    </style>
<script>
    $(document).ready(function(){
        function fetchOnlineUsers() {
            $.ajax({
                url: '<?= base_url("Login/get_online_users") ?>',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let onlineUsers = response.online;
                    let totalCount = response.total;
                    let offlineCount = response.offline;
                    let onlineCount = onlineUsers.length;

                    let tableContent = '';
                    
                    if (onlineCount > 0) { 
                        onlineUsers.forEach(function(user, index) { 
                            let statusClass = user.status === 'online' ? 'online' : 'offline';
                            let statusIcon = user.status === 'online' ? '<i class="fa-solid fa-circle"></i>' : '<i class="fa-regular fa-circle"></i>';

                            tableContent += `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${user.id_login}</td>
                                    <td>${user.username}</td>
                                    <td>${new Date(user.last_activity * 1000).toLocaleString()}</td>
                                    <td class="status ${statusClass}">${statusIcon} ${user.status}</td>
                                </tr>
                            `;
                        });
                    } else {
                        tableContent = `<tr><td colspan="5" class="no-data">Tidak ada yang online</td></tr>`;
                    }

                    $('#onlineUsersTable tbody').html(tableContent);
                    $('#onlineCount').text(onlineCount);
                    $('#offlineCount').text(offlineCount);
                    $('#totalCount').text(totalCount);
                }
            });
        }

        fetchOnlineUsers();
        setInterval(fetchOnlineUsers, 3000);
    });
</script>

</head>
<body>

<h1>Pengguna yang Sedang Online</h1>

<div class="stats-container">
    <div class="stats-box total">
        <i class="fa-solid fa-users"></i> Total: <span id="totalCount">0</span>
    </div>
    <div class="stats-box online">
        <i class="fa-solid fa-circle"></i> Online: <span id="onlineCount">0</span>
    </div>
    <div class="stats-box offline">
        <i class="fa-regular fa-circle"></i> Offline: <span id="offlineCount">0</span>
    </div>
</div>

<div class="table-container">
    <button class="btn-green">Muat ulang data</button>
    <table id="onlineUsersTable">
        <thead>
            <tr>
                <th>No.</th>  
                <th>ID Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Terakhir Aktif</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data pengguna online akan dimuat di sini -->
        </tbody>
    </table>
</div>

</body>
</html>
