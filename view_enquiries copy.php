<?php
include 'db.connection/db_connection.php';

$q = $conn->query("SELECT * FROM bhavi_enquiries ORDER BY id DESC");
$data = [];
while ($row = $q->fetch_assoc()) {
    $data[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bhavi Creations – Client Requirements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            padding: 0 20px;
        }

        h3 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px
        }

        .card-box {
            background: #fff;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            margin-bottom: 20px;
        }

        .label {
            font-weight: 700;
            color: #222
        }

        .section-title {
            font-weight: 700;
            border-bottom: 2px solid #000;
            margin: 15px 0 10px;
            padding-bottom: 4px;
        }

        .actions i {
            font-size: 20px;
            cursor: pointer;
            margin-right: 15px;
        }

        .actions i:hover {
            opacity: .7
        }

        .table thead th {
            background: #0d6efd;
            color: #fff;
            text-align: center;
        }

        .table tbody tr:nth-child(odd) {
            background: #e9ecef;
        }

        .table tbody tr:nth-child(even) {
            background: #fff;
        }

        .table td,
        .table th {
            vertical-align: middle;
            text-align: center;
        }

        @media(max-width:768px) {
            .desktop-table {
                display: none
            }
        }

        @media(min-width:769px) {
            .mobile-view {
                display: none
            }
        }

        @media print {
            .no-print {
                display: none
            }

            body {
                background: #fff
            }
        }

        .modal-table td,
        .modal-table th {
            vertical-align: top;
        }

        .section-group {
            margin-bottom: 25px;
        }








        /* @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1400px;
            }
        } */

        /* @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1160px;
            }
        } */

        @media (min-width: 992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width:  1480px;
            }
        }
        @media (max-width: 768px) {
    .container, .container-md, .container-sm {
        max-width: 800px;
    }
}
    </style>
</head>

<body>

    <div class="container my-4">
        <h3>
            <b>Bhavi Creations Pvt Ltd</b><br>
            Client Requirement Details
        </h3>

        <!-- ================= MOBILE VIEW ================= -->
        <div class="mobile-view">
            <?php foreach ($data as $row): ?>
                <div class="card-box">
                    <?php
                    // Group fields for mobile display
                    $personalFields = ['client_name', 'firm_name', 'personal_number', 'online_url', 'address'];
                    $serviceFields = ['online_presence_type', 'selected_services', 'wants_designing', 'wants_digital_marketing', 'wants_branding', 'package_type'];
                    $mediaFields = ['image_quality', 'image_count', 'reels_count', 'reels_custom_val', 'video_voice_over', 'video_count'];
                    $marketingFields = ['social_platforms', 'gst_status', 'printing_check', 'printing_services', 'seo_check', 'seo_type', 'reels_footage_check', 'reels_footage', 'reels_script_check', 'reels_script', 'reels_music_check', 'reels_music', 'website_category'];
                    ?>
                    <div class="section-group">
                        <div class="section-title">Personal Details</div>
                        <?php foreach ($personalFields as $f): ?>
                            <p><span class="label"><?= ucwords(str_replace('_', ' ', $f)) ?>:</span> <?= $row[$f] ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-group">
                        <div class="section-title">Service Details</div>
                        <?php foreach ($serviceFields as $f): ?>
                            <p><span class="label"><?= ucwords(str_replace('_', ' ', $f)) ?>:</span> <?= $row[$f] ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-group">
                        <div class="section-title">Media / Reels / Video</div>
                        <?php foreach ($mediaFields as $f): ?>
                            <p><span class="label"><?= ucwords(str_replace('_', ' ', $f)) ?>:</span> <?= $row[$f] ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-group">
                        <div class="section-title">Website / Marketing / Others</div>
                        <?php foreach ($marketingFields as $f): ?>
                            <p><span class="label"><?= ucwords(str_replace('_', ' ', $f)) ?>:</span> <?= $row[$f] ?></p>
                        <?php endforeach; ?>
                    </div>

                    <div class="actions mt-3 no-print">
                        <i class="bi bi-eye text-primary" onclick='viewData(<?= json_encode($row) ?>)'></i>
                        <i class="bi bi-printer text-success" onclick='printRow(<?= json_encode($row) ?>)'></i>
                        <a href="delete_enquiry.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this enquiry?')">
                            <i class="bi bi-trash text-danger"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- ================= DESKTOP TABLE ================= -->
        <div class="desktop-table table-responsive">
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <?php
                        if (isset($data[0])) {
                            foreach ($data[0] as $col => $val) {
                                echo "<th>" . ucwords(str_replace('_', ' ', $col)) . "</th>";
                            }
                        }
                        ?>
                        <th class="no-print">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <?php foreach ($row as $val): ?>
                                <td><?= $val ?></td>
                            <?php endforeach; ?>
                            <td class="no-print">
                                <i class="bi bi-eye text-primary" onclick='viewData(<?= json_encode($row) ?>)'></i>
                                <i class="bi bi-printer text-success" onclick='printRow(<?= json_encode($row) ?>)'></i>
                                <a href="delete_enquiry.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this enquiry?')">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <button class="btn btn-dark mt-3 no-print" onclick="window.print()">Print All</button>

    </div>

    <!-- ================= MODAL ================= -->
    <div class="modal fade" id="viewModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Client Full Requirement</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function viewData(row) {
            // Sections for modal display
            const sections = {
                "Personal Details": ['client_name', 'firm_name', 'personal_number', 'online_url', 'address'],
                "Service Details": ['online_presence_type', 'selected_services', 'wants_designing', 'wants_digital_marketing', 'wants_branding', 'package_type'],
                "Media / Reels / Video": ['image_quality', 'image_count', 'reels_count', 'reels_custom_val', 'video_voice_over', 'video_count'],
                "Website / Marketing / Others": ['social_platforms', 'gst_status', 'printing_check', 'printing_services', 'seo_check', 'seo_type', 'reels_footage_check', 'reels_footage', 'reels_script_check', 'reels_script', 'reels_music_check', 'reels_music', 'website_category']
            };
            let html = '<div class="container-fluid">';
            for (const section in sections) {
                html += `<div class="section-group"><h4 class="section-title">${section}</h4><table class="table table-bordered modal-table">`;
                sections[section].forEach(key => {
                    if (row[key] !== undefined)
                        html += `<tr><th>${key.replace(/_/g,' ')}</th><td>${row[key]}</td></tr>`;
                });
                html += '</table></div>';
            }
            html += '</div>';
            document.getElementById('modalBody').innerHTML = html;
            new bootstrap.Modal(document.getElementById('viewModal')).show();
        }

        function printRow(row) {
            let html = `<html><head><title>Print</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head><body style="padding:20px;">`;
            html += `<h3>Bhavi Creations Pvt Ltd - Client Requirement</h3><table class="table table-bordered">`;
            for (let key in row) {
                html += `<tr><th>${key.replace(/_/g,' ')}</th><td>${row[key]}</td></tr>`;
            }
            html += `</table></body></html>`;
            let w = window.open('', '_blank', 'width=900');
            w.document.write(html);
            w.document.close();
            w.focus();
            w.print();
            w.close();
        }
    </script>

    <script>
        function printRow(row) {
            const fields = Object.keys(row); // all fields
            const chunkSize = 15; // number of fields per page
            let html = `<html>
    <head>
        <title>Print</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{padding:20px;}
            h3{text-align:center;margin-bottom:30px;}
            table{width:100%;margin-bottom:20px;border-collapse:collapse;}
            th, td{padding:8px;text-align:left;vertical-align:top;border:1px solid #000;}
            .page-break{page-break-before:always;}
        </style>
    </head>
    <body>
        <h3>Bhavi Creations Pvt Ltd - Client Requirement</h3>
    `;

            // Split fields into chunks
            for (let i = 0; i < fields.length; i += chunkSize) {
                if (i > 0) html += '<div class="page-break"></div>'; // page break before next chunk
                html += '<table class="table table-bordered">';
                let chunk = fields.slice(i, i + chunkSize);
                chunk.forEach(key => {
                    html += `<tr><th>${key.replace(/_/g,' ')}</th><td>${row[key]}</td></tr>`;
                });
                html += '</table>';
            }

            html += '</body></html>';

            let w = window.open('', '_blank', 'width=900');
            w.document.write(html);
            w.document.close();
            w.focus();
            w.print();
            w.close();
        }
    </script>

</body>

</html>