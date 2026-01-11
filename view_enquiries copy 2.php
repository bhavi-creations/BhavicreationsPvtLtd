<?php
 include 'db.connection/db_connection.php';

$q = $conn->query("SELECT * FROM bhavi_enquiries ORDER BY id DESC");
$data = [];
while ($row = $q->fetch_assoc()) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bhavi Creations – Client Enquiries</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{background:#f4f6f9}
        .card-box{
            background:#fff;
            border-radius:14px;
            padding:16px;
            box-shadow:0 8px 18px rgba(0,0,0,.08);
            margin-bottom:18px;
        }
        .card-box p{margin-bottom:6px;font-size:14px}
        .label{font-weight:600;color:#555}
        .actions i{cursor:pointer;font-size:18px;margin-right:14px}
        @media(max-width:768px){.desktop-table{display:none}}
        @media(min-width:769px){.mobile-view{display:none}}
    </style>
</head>

<body>
<div class="container my-4">

    <h3 class="text-center mb-4">Bhavi Creations – Client Required</h3>

    <!-- ================= MOBILE VIEW ================= -->
    <div class="mobile-view">
        <?php foreach($data as $row): ?>
        <div class="card-box">
            <p><span class="label">Client Name:</span> <?= $row['client_name'] ?></p>
            <p><span class="label">Firm Name:</span> <?= $row['firm_name'] ?></p>
            <p><span class="label">Phone:</span> <?= $row['personal_number'] ?></p>
            <p><span class="label">Website / URL:</span> <?= $row['online_url'] ?></p>
            <p><span class="label">Address:</span> <?= $row['address'] ?></p>

            <p><span class="label">Online Presence:</span> <?= $row['online_presence_type'] ?></p>
            <p><span class="label">Services:</span> <?= $row['selected_services'] ?></p>

            <p><span class="label">Designing:</span> <?= $row['wants_designing'] ?></p>
            <p><span class="label">Digital Marketing:</span> <?= $row['wants_digital_marketing'] ?></p>
            <p><span class="label">Branding:</span> <?= $row['wants_branding'] ?></p>

            <p><span class="label">Package:</span> <?= $row['package_type'] ?></p>

            <p><span class="label">Images:</span>
                <?= $row['image_count'] ?> (<?= $row['image_quality'] ?>)
                <?= $row['image_custom_text'] ? ' - '.$row['image_custom_text'] : '' ?>
            </p>

            <p><span class="label">Reels:</span>
                <?= $row['reels_count'] ?>
                <?= $row['reels_custom_val'] ? ' ('.$row['reels_custom_val'].')' : '' ?>
            </p>

            <p><span class="label">Videos:</span>
                <?= $row['video_count'] ?>
                <?= $row['video_custom_text'] ? ' ('.$row['video_custom_text'].')' : '' ?>
            </p>

            <p><span class="label">Voice Over:</span> <?= $row['video_voice_over'] ?></p>
            <p><span class="label">Website Category:</span> <?= $row['website_category'] ?></p>
            <p><span class="label">SEO:</span> <?= $row['seo_type'] ?></p>
            <p><span class="label">Social Platforms:</span> <?= $row['social_platforms'] ?></p>
            <p><span class="label">Printing:</span> <?= $row['printing_services'] ?></p>
            <p><span class="label">GST:</span> <?= $row['gst_status'] ?></p>

            <div class="actions mt-2">
                <i class="bi bi-eye text-primary" onclick='viewData(<?= json_encode($row) ?>)'></i>
                <i class="bi bi-printer text-success" onclick='printSingle(<?= json_encode($row) ?>)'></i>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- ================= DESKTOP TABLE ================= -->
    <div class="desktop-table table-responsive">
        <table class="table table-bordered table-striped bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Client</th>
                    <th>Phone</th>
                    <th>Services</th>
                    <th>Package</th>
                    <th>Images</th>
                    <th>Reels</th>
                    <th>Videos</th>
                    <th>SEO</th>
                    <th>GST</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data as $row): ?>
                <tr>
                    <td><?= $row['client_name'] ?></td>
                    <td><?= $row['personal_number'] ?></td>
                    <td><?= $row['selected_services'] ?></td>
                    <td><?= $row['package_type'] ?></td>
                    <td><?= $row['image_count'].' ('.$row['image_quality'].')' ?></td>
                    <td><?= $row['reels_count'] ?></td>
                    <td><?= $row['video_count'] ?></td>
                    <td><?= $row['seo_type'] ?></td>
                    <td><?= $row['gst_status'] ?></td>
                    <td>
                        <i class="bi bi-eye text-primary" onclick='viewData(<?= json_encode($row) ?>)'></i>
                        <i class="bi bi-printer text-success" onclick='printSingle(<?= json_encode($row) ?>)'></i>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <button class="btn btn-danger mt-3" onclick="printAll()">Print All</button>

</div>

<!-- ================= MODAL ================= -->
<div class="modal fade" id="viewModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Full Enquiry Details</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalBody"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function viewData(row){
    let html = '';
    for (const key in row) {
        html += `<p><b>${key.replaceAll('_',' ')}:</b> ${row[key]}</p>`;
    }
    document.getElementById('modalBody').innerHTML = html;
    new bootstrap.Modal(document.getElementById('viewModal')).show();
}

function printSingle(row){
    let w = window.open('', '', 'width=900');
    let html = '<h3 style="text-align:center">Bhavi Creations</h3>';
    for (const key in row) {
        html += `<p><b>${key.replaceAll('_',' ')}:</b> ${row[key]}</p>`;
    }
    w.document.write(html);
    w.print();
    w.close();
}

function printAll(){
    window.print();
}
</script>

<script>
function printSingle(row){
    let w = window.open('', '', 'width=900');

    let html = `
    <html>
    <head>
        <title>Bhavi Creations – Enquiry</title>
        <style>
            body{font-family:Arial;padding:20px}
            h2{text-align:center;margin-bottom:5px}
            h4{margin-top:25px;border-bottom:1px solid #333;padding-bottom:4px}
            p{margin:6px 0;font-size:14px}
            .box{border:1px solid #ccc;padding:12px;border-radius:6px}
        </style>
    </head>
    <body>

    <h2>Bhavi Creations</h2>
    <p style="text-align:center">Client Enquiry Details</p>

    <div class="box">
        <h4>Client Information</h4>
        <p><b>Client Name:</b> ${row.client_name}</p>
        <p><b>Firm Name:</b> ${row.firm_name}</p>
        <p><b>Personal Number:</b> ${row.personal_number}</p>
        <p><b>Number:</b> ${row.online_url}</p>
        <p><b>Address:</b> ${row.address}</p>
    </div>

    <div class="box">
        <h4>Service Requirements</h4>
        <p><b>Online Presence:</b> ${row.online_presence_type}</p>
        <p><b>Selected Services:</b> ${row.selected_services}</p>
        <p><b>Designing:</b> ${row.wants_designing}</p>
        <p><b>Digital Marketing:</b> ${row.wants_digital_marketing}</p>
        <p><b>Branding:</b> ${row.wants_branding}</p>
        <p><b>Package Type:</b> ${row.package_type}</p>
    </div>

    <div class="box">
        <h4>Media Details</h4>
        <p><b>Images:</b> ${row.image_count} (${row.image_quality}) ${row.image_custom_text ?? ''}</p>
        <p><b>Reels:</b> ${row.reels_count} ${row.reels_custom_val ?? ''}</p>
        <p><b>Videos:</b> ${row.video_count} ${row.video_custom_text ?? ''}</p>
        <p><b>Voice Over:</b> ${row.video_voice_over}</p>
    </div>

    <div class="box">
        <h4>Marketing & Others</h4>
        <p><b>Website Category:</b> ${row.website_category}</p>
        <p><b>SEO:</b> ${row.seo_type}</p>
        <p><b>Social Platforms:</b> ${row.social_platforms}</p>
        <p><b>Printing Services:</b> ${row.printing_services}</p>
        <p><b>GST Status:</b> ${row.gst_status}</p>
    </div>

    </body>
    </html>
    `;

    w.document.write(html);
    w.document.close();
    w.print();
}
</script>

</body>
</html>
