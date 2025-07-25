<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Works</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .media-tab-buttons {
            margin-bottom: 2rem;
            justify-content: center; /* Center the buttons */
        }
        .media-tab-btn {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            padding: .5rem 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap; /* Prevent wrapping for long button texts */
        }
        .media-tab-btn:hover {
            background-color: #e2e6ea;
        }
        .media-tab-btn.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
        .media-tab-content {
            display: none;
        }
        .media-tab-content.active {
            display: block;
        }
        .card {
            border-radius: 8px;
        }
        .card-body img, .card-body video {
            max-height: 250px; /* Limit height for consistent card appearance */
            width: auto; /* Maintain aspect ratio */
            object-fit: contain; /* Ensure media is fully visible within its container */
        }
        /* Specific style for website preview to ensure image fits within the smaller box */
        #website .card-body img {
            max-height: 145px;
            width: auto;
            object-fit: contain;
        }
        .hover-card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Our Creative Portfolio</h1>
    <hr>

    <div class="row g-2 mb-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 media-tab-buttons">
        <div><button class="media-tab-btn active" onclick="showMediaTab(event, 'all')">All</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'logo')">Logo</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'website')">Website</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'posters')">Posters</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'reels')">Reels</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'photoshoot')">Photo Shoot</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'videos')">Videos</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'testimonials')">Testimonials</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'animatedvideos')">Animated Videos</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'visitingcards')">Visiting Cards</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'pamphlets')">Pamphlets</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'brochures')">Brochures</button></div>
        <div><button class="media-tab-btn" onclick="showMediaTab(event, 'hoardings')">Hoardings</button></div>
    </div>

    <div id="all" class="media-tab-content active">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php'; // Adjust path as necessary

            $sql = "SELECT * FROM our_works ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                    echo "<div class='col-md-4 mb-4'>
                    <div class='card shadow-sm h-100' style='overflow: hidden;'>
                        <div class='card-body p-2'>";

                    // Wrap in link if available
                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    // Display image (centered)
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<div class='d-flex justify-content-center'>
                            <img src='$path' class='img-fluid' style='max-width: 100%; border-radius: 8px;'>
                        </div>";
                    }
                    // Display video
                    elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls style='object-fit: cover; width: 100%; border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                        </video>";
                    }
                    // Display PDF
                    elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    }
                    // Unsupported type
                    else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No media uploaded yet.</p></div>";
            }
            // Close connection only once after all PHP blocks are processed
            $conn->close(); 
            ?>
        </div>
    </div>

    <div id="logo" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php'; // Re-establish connection for each block, or establish once at the top and pass $conn around
            $conn_logo = new mysqli($servername, $username, $password, $dbname); // New connection for this block
            if ($conn_logo->connect_error) { die("Connection failed: " . $conn_logo->connect_error); }


            $sql = "SELECT * FROM our_works WHERE media_type = 'Logo' ORDER BY id DESC";
            $result = $conn_logo->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-3 mb-4'>
                        <div class='card' style='overflow: hidden;'>
                            <div class='card-body' style='text-align: center;'>"; // Changed to center for consistency

                    if (!empty($link)) echo "<a href='$link' target='_blank' style='display: block;'>";

                    echo "<div style='display: flex; justify-content: center; align-items: center; height: 150px;'>"; // Added height for consistency

                    // Show image
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' alt='$title' class='img-fluid' style='max-height: 100%; max-width: 100%; object-fit: contain;'>";
                    }
                    // Show video
                    elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='img-fluid' style='max-height: 100%; max-width: 100%; object-fit: contain;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    }
                    // Show PDF
                    elseif ($ext === 'pdf') {
                        echo "<a href='$path' target='_blank' class='btn btn-outline-primary'>📄 View PDF</a>";
                    } else {
                        echo "<p class='text-muted'>Unsupported file</p>";
                    }

                    echo "</div>"; // end media wrapper

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No logo media uploaded yet.</p></div>";
            }
            $conn_logo->close();
            ?>
        </div>
    </div>

    <div id="website" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_website = new mysqli($servername, $username, $password, $dbname);
            if ($conn_website->connect_error) { die("Connection failed: " . $conn_website->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Website' ORDER BY id DESC";
            $result = $conn_website->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-lg-4 col-md-6 col-12 mb-4'>
                        <div class='card border-0 shadow-sm h-100 hover-card'>
                            <div class='card-body d-flex flex-column justify-content-between' style='padding: 10px;'>";

                    // Media Preview with link
                    echo "<div style='width: 100%; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa; height: 145px; overflow: hidden;'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank' style='display:block; width:100%; text-align:center;'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='max-height: 100%; max-width: 100%; object-fit: contain; transition: transform 0.3s;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls style='max-height: 100%; max-width: 100%; object-fit: contain;'>
                                <source src='$path' type='video/$ext'>
                                Your browser does not support the video tag.
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<div class='w-100 h-100 d-flex align-items-center justify-content-center'>
                                <span class='text-muted'>📄 PDF</span>
                            </div>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "</div>"; // end media preview

                    // Title
                    echo "<div class='mt-2 text-center'><strong>$title</strong></div>";

                    // View Site Button
                    if (!empty($link)) {
                        echo "<div class='mt-2 text-center'>
                                <a href='$link' target='_blank' class='btn btn-sm btn-success'>🌐 View Site</a>
                            </div>";
                    }

                    echo "</div></div></div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No Website media uploaded yet.</p></div>";
            }
            $conn_website->close();
            ?>
        </div>
    </div>

    <div id="posters" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_posters = new mysqli($servername, $username, $password, $dbname);
            if ($conn_posters->connect_error) { die("Connection failed: " . $conn_posters->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Posters' ORDER BY id DESC";
            $result = $conn_posters->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card border-0 shadow-sm'>
                            <div class='card-body p-2 text-center'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    // Display media with original ratio
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                                Your browser does not support the video tag.
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No Posters uploaded yet.</p></div>";
            }
            $conn_posters->close();
            ?>
        </div>
    </div>

    <div id="reels" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_reels = new mysqli($servername, $username, $password, $dbname);
            if ($conn_reels->connect_error) { die("Connection failed: " . $conn_reels->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Reels' ORDER BY id DESC";
            $result = $conn_reels->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    // Show image
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    }
                    // Show video
                    elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    }
                    // Show PDF link
                    elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    }
                    // Unsupported format
                    else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No Reels uploaded yet.</p></div>";
            }
            $conn_reels->close();
            ?>
        </div>
    </div>

    <div id="photoshoot" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_photoshoot = new mysqli($servername, $username, $password, $dbname);
            if ($conn_photoshoot->connect_error) { die("Connection failed: " . $conn_photoshoot->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Photo Shoot' ORDER BY id DESC";
            $result = $conn_photoshoot->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls style='width: 100%; border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No Photo Shoot media uploaded yet.</p></div>";
            }
            $conn_photoshoot->close();
            ?>
        </div>
    </div>

    <div id="videos" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_videos = new mysqli($servername, $username, $password, $dbname);
            if ($conn_videos->connect_error) { die("Connection failed: " . $conn_videos->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Videos' ORDER BY id DESC";
            $result = $conn_videos->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    // IMAGE
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    }
                    // VIDEO
                    elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    }
                    // PDF
                    elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    }
                    // OTHER
                    else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No video media uploaded yet.</p></div>";
            }
            $conn_videos->close();
            ?>
        </div>
    </div>

    <div id="testimonials" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_testimonials = new mysqli($servername, $username, $password, $dbname);
            if ($conn_testimonials->connect_error) { die("Connection failed: " . $conn_testimonials->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Testimonials' ORDER BY id DESC";
            $result = $conn_testimonials->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No testimonials uploaded yet.</p></div>";
            }
            $conn_testimonials->close();
            ?>
        </div>
    </div>

    <div id="animatedvideos" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_animated = new mysqli($servername, $username, $password, $dbname);
            if ($conn_animated->connect_error) { die("Connection failed: " . $conn_animated->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Animated Videos' ORDER BY id DESC";
            $result = $conn_animated->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No animated videos uploaded yet.</p></div>";
            }
            $conn_animated->close();
            ?>
        </div>
    </div>

    <div id="visitingcards" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_visitingcards = new mysqli($servername, $username, $password, $dbname);
            if ($conn_visitingcards->connect_error) { die("Connection failed: " . $conn_visitingcards->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Visiting Cards' ORDER BY id DESC";
            $result = $conn_visitingcards->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No visiting cards uploaded yet.</p></div>";
            }
            $conn_visitingcards->close();
            ?>
        </div>
    </div>

    <div id="pamphlets" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_pamphlets = new mysqli($servername, $username, $password, $dbname);
            if ($conn_pamphlets->connect_error) { die("Connection failed: " . $conn_pamphlets->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Pamphlets' ORDER BY id DESC";
            $result = $conn_pamphlets->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No pamphlets uploaded yet.</p></div>";
            }
            $conn_pamphlets->close();
            ?>
        </div>
    </div>

    <div id="brochures" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_brochures = new mysqli($servername, $username, $password, $dbname);
            if ($conn_brochures->connect_error) { die("Connection failed: " . $conn_brochures->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Brochures' ORDER BY id DESC";
            $result = $conn_brochures->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No brochures uploaded yet.</p></div>";
            }
            $conn_brochures->close();
            ?>
        </div>
    </div>

    <div id="hoardings" class="media-tab-content">
        <div class="row">
            <?php
            include 'db.connection/db_connection.php';
            $conn_hoardings = new mysqli($servername, $username, $password, $dbname);
            if ($conn_hoardings->connect_error) { die("Connection failed: " . $conn_hoardings->connect_error); }

            $sql = "SELECT * FROM our_works WHERE media_type = 'Hoardings' ORDER BY id DESC";
            $result = $conn_hoardings->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file = htmlspecialchars($row['file_path']);
                    $title = htmlspecialchars($row['title']);
                    $link = htmlspecialchars($row['media_link']);
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $path = "admin/public/uploads/staff/" . $file;

                    echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                    if (!empty($link)) echo "<a href='$link' target='_blank'>";

                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                        echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                    } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                        echo "<video controls class='w-100' style='border-radius: 8px;'>
                                <source src='$path' type='video/$ext'>
                            </video>";
                    } elseif ($ext === 'pdf') {
                        echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                    } else {
                        echo "<p class='text-muted text-center'>Unsupported file format</p>";
                    }

                    if (!empty($link)) echo "</a>";

                    echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<div class='col-12'><p class='text-muted text-center'>No hoardings uploaded yet.</p></div>";
            }
            $conn_hoardings->close();
            ?>
        </div>
    </div>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showMediaTab(event, tabName) {
        // Hide all tab contents
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("media-tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }

        // Deactivate all tab buttons
        tablinks = document.getElementsByClassName("media-tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Show the specific tab content
        document.getElementById(tabName).classList.add("active");

        // Activate the button that opened the tab
        event.currentTarget.classList.add("active");

        // Update URL hash
        window.location.hash = tabName;
    }

    // Function to show the correct tab on page load based on URL hash
    function showTabFromHash() {
        let hash = window.location.hash.substring(1); // Remove the '#'
        if (hash) {
            let targetTab = document.getElementById(hash);
            let targetButton = document.querySelector(`.media-tab-btn[onclick*="'${hash}'"]`);

            if (targetTab && targetButton) {
                // Manually trigger the tab display
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("media-tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.remove("active");
                }
                tablinks = document.getElementsByClassName("media-tab-btn");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active");
                }

                targetTab.classList.add("active");
                targetButton.classList.add("active");
            } else {
                // If hash doesn't match a valid tab, default to 'all'
                showMediaTab(null, 'all');
            }
        } else {
            // Default to 'all' tab if no hash is present
            showMediaTab(null, 'all');
        }
    }

    // Call showTabFromHash when the page loads
    window.onload = showTabFromHash;

    // Listen for hash changes (e.g., when user uses browser back/forward buttons)
    window.onhashchange = showTabFromHash;

</script>
