<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhavi Creation - Enquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #0046ad;
            --accent-color: #f0f7ff;
            --text-dark: #2c3e50;
            --border-light: #dbe2e8;
        }

        body {
            background-color: #f8fafc;
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            padding: 30px 0;
        }

        .bc-form-wrapper {
            max-width: 950px;
            margin: auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 70, 173, 0.08);
        }

        .bc-main-heading {
            color: var(--primary-blue);
            font-weight: 800;
            letter-spacing: -0.5px;
            margin-bottom: 35px;
            position: relative;
        }

        .bc-section-card {
            background: #ffffff;
            border: 1px solid var(--border-light);
            padding: 25px;
            border-radius: 16px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .bc-section-card:hover {
            border-color: var(--primary-blue);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.02);
        }

        .bc-section-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .bc-input-field {
            border: 2px solid var(--border-light);
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .bc-input-field:focus {
            border-color: var(--primary-blue);
            box-shadow: none;
            background-color: var(--accent-color);
        }

        /* Custom Radio & Checkbox Styling */
        .bc-option-box {
            display: inline-block;
            margin-right: 12px;
            margin-bottom: 12px;
        }

        .bc-option-label {
            display: flex;
            align-items: center;
            padding: 10px 18px;
            background: #fff;
            border: 2px solid var(--border-light);
            border-radius: 12px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.2s;
        }

        input[type="radio"]:checked + .bc-option-label,
        input[type="checkbox"]:checked + .bc-option-label {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            color: #fff;
        }

        .bc-hidden-panel {
            display: none;
            background: var(--accent-color);
            padding: 20px;
            border-radius: 12px;
            margin-top: 15px;
            border-left: 4px solid var(--primary-blue);
        }

        .bc-submit-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 18px;
            width: 100%;
            transition: 0.3s;
            margin-top: 20px;
        }

        .bc-submit-btn:hover {
            background: #003582;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 70, 173, 0.2);
        }

        .bc-badge {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="bc-form-wrapper">
        <form action="submit.php" method="post">
            <h3 class="text-center bc-main-heading">Bhavi Creation Pvt Ltd</h3>

            <div class="bc-section-card">
                <span class="bc-badge">Step 01</span>
                <h5 class="bc-section-title">Basic Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control bc-input-field" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="firm_name" class="form-control bc-input-field" placeholder="Firm Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="pernal_number" class="form-control bc-input-field" placeholder="Personal Number" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="online_url" class="form-control bc-input-field" placeholder="Contact/Other Number" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="address" class="form-control bc-input-field" placeholder="Business Address" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="online_presence_type" class="form-control bc-input-field" placeholder="Online Presence (Insta/FB/Web)" required>
                    </div>
                </div>
            </div>

            <div class="bc-section-card">
                <h5 class="bc-section-title">Core Services</h5>
                <div class="d-flex flex-wrap">
                    <div class="bc-option-box">
                        <input type="radio" name="designing" value="4" id="ds1" class="d-none">
                        <label for="ds1" class="bc-option-label">Designing</label>
                    </div>
                    <div class="bc-option-box">
                        <input type="radio" name="digital_marketing" value="4" id="dm1" class="d-none">
                        <label for="dm1" class="bc-option-label">Digital Marketing</label>
                    </div>
                    <div class="bc-option-box">
                        <input type="radio" name="branding_agency" value="8" id="ba1" class="d-none">
                        <label for="ba1" class="bc-option-label">Branding Agency</label>
                    </div>
                </div>

                <h5 class="bc-section-title mt-4">Subscription Packages</h5>
                <div class="d-flex flex-wrap">
                    <div class="bc-option-box"><input type="radio" name="payment_type" value="Monthly" id="p1" class="d-none"><label for="p1" class="bc-option-label">Monthly</label></div>
                    <div class="bc-option-box"><input type="radio" name="payment_type" value="3 Months" id="p2" class="d-none"><label for="p2" class="bc-option-label">3 Months</label></div>
                    <div class="bc-option-box"><input type="radio" name="payment_type" value="6 Months" id="p3" class="d-none"><label for="p3" class="bc-option-label">6 Months</label></div>
                    <div class="bc-option-box"><input type="radio" name="payment_type" value="Yearly" id="p4" class="d-none"><label for="p4" class="bc-option-label">Yearly</label></div>
                    <div class="bc-option-box"><input type="radio" name="payment_type" value="Festival Pack" id="p5" class="d-none"><label for="p5" class="bc-option-label">Festival Pack</label></div>
                </div>
            </div>

            <div class="bc-section-card">
                <h5 class="bc-section-title">Images Requirement</h5>
                <div class="d-flex flex-wrap mb-3">
                    <div class="bc-option-box"><input type="radio" name="photo_count" value="4" id="ic1" class="d-none" onclick="toggleElement('photo_type', true); toggleElement('photo_custom', false)"><label for="ic1" class="bc-option-label">4</label></div>
                    <div class="bc-option-box"><input type="radio" name="photo_count" value="8" id="ic2" class="d-none" onclick="toggleElement('photo_type', true); toggleElement('photo_custom', false)"><label for="ic2" class="bc-option-label">8</label></div>
                    <div class="bc-option-box"><input type="radio" name="photo_count" value="12" id="ic3" class="d-none" onclick="toggleElement('photo_type', true); toggleElement('photo_custom', false)"><label for="ic3" class="bc-option-label">12</label></div>
                    <div class="bc-option-box"><input type="radio" name="photo_count" value="custom" id="ic_custom" class="d-none" onclick="toggleElement('photo_type', false); toggleElement('photo_custom', true)"><label for="ic_custom" class="bc-option-label">Custom</label></div>
                </div>

                <div id="photo_type" class="bc-hidden-panel">
                    <h6>Image Quality</h6>
                    <div class="d-flex flex-wrap">
                        <div class="bc-option-box"><input type="radio" name="photo_type" value="Basic" id="pt1" class="d-none"><label for="pt1" class="bc-option-label">Basic</label></div>
                        <div class="bc-option-box"><input type="radio" name="photo_type" value="Standard" id="pt2" class="d-none"><label for="pt2" class="bc-option-label">Standard</label></div>
                        <div class="bc-option-box"><input type="radio" name="photo_type" value="Premium" id="pt3" class="d-none"><label for="pt3" class="bc-option-label">Premium</label></div>
                    </div>
                </div>

                <div id="photo_custom" class="bc-hidden-panel">
                    <textarea name="photo_custom_msg" class="form-control bc-input-field" placeholder="Describe your image requirements..."></textarea>
                </div>
            </div>

            <div class="bc-section-card">
                <h5 class="bc-section-title">Reels Details</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check mb-2">
                            <input type="checkbox" id="footageCheck" class="form-check-input" onclick="toggleVisibility('footageFields', this.checked)">
                            <label for="footageCheck">Footage Source</label>
                        </div>
                        <div id="footageFields" class="bc-hidden-panel">
                            <input type="radio" name="reels_footage" value="from_client"> Client end <br>
                            <input type="radio" name="reels_footage" value="from_company"> Company end
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check mb-2">
                            <input type="checkbox" id="ScriptCheck" class="form-check-input" onclick="toggleVisibility('ScriptFields', this.checked)">
                            <label for="ScriptCheck">Script Source</label>
                        </div>
                        <div id="ScriptFields" class="bc-hidden-panel">
                            <input type="radio" name="reels_script" value="from_client"> Client end <br>
                            <input type="radio" name="reels_script" value="from_company"> Company end
                        </div>
                    </div>
                </div>
            </div>

            <div class="bc-section-card">
                <h5 class="bc-section-title">Social Media Management</h5>
                <p class="small text-muted">Select Platforms:</p>
                <div class="d-flex flex-wrap">
                    <div class="bc-option-box"><input type="checkbox" name="social_media[]" value="Instagram" id="sm1" class="d-none"><label for="sm1" class="bc-option-label">Instagram</label></div>
                    <div class="bc-option-box"><input type="checkbox" name="social_media[]" value="Facebook" id="sm2" class="d-none"><label for="sm2" class="bc-option-label">Facebook</label></div>
                    <div class="bc-option-box"><input type="checkbox" name="social_media[]" value="YouTube" id="sm3" class="d-none"><label for="sm3" class="bc-option-label">YouTube</label></div>
                    <div class="bc-option-box"><input type="checkbox" name="social_media[]" value="LinkedIn" id="sm4" class="d-none"><label for="sm4" class="bc-option-label">LinkedIn</label></div>
                </div>
            </div>

            <div class="bc-section-card">
                <h5 class="bc-section-title">Tax & GST</h5>
                <div class="d-flex">
                    <div class="bc-option-box"><input type="radio" name="gst_option" value="With GST" id="gst1" class="d-none"><label for="gst1" class="bc-option-label">With GST</label></div>
                    <div class="bc-option-box"><input type="radio" name="gst_option" value="Without GST" id="gst2" class="d-none"><label for="gst2" class="bc-option-label">Without GST</label></div>
                </div>
            </div>

            <button type="submit" class="bc-submit-btn">SUBMIT ENQUIRY NOW</button>
        </form>
    </div>
</div>

<script>
    // General show/hide function
    function toggleElement(id, show) {
        document.getElementById(id).style.display = show ? 'block' : 'none';
    }

    // Toggle by checkbox state
    function toggleVisibility(id, isChecked) {
        document.getElementById(id).style.display = isChecked ? 'block' : 'none';
    }

    // You can add more specific logic here for all your IDs like 'reels_type', 'video_type' etc.
</script>

</body>
</html>