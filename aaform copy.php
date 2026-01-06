<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhavi Creation Pvt Ltd - Service Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 0;
        }
        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            padding: 40px;
            max-width: 900px;
            margin: 0 auto;
        }
        .company-header {
            text-align: center;
            margin-bottom: 40px;
            color: #667eea;
        }
        .section-title {
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .custom-input {
            margin-top: 10px;
        }
        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px 50px;
            font-size: 18px;
            margin-top: 30px;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="company-header">
                <h1>Bhavi Creation Pvt Ltd</h1>
                <p class="text-muted">Service Request Form</p>
            </div>

            <form id="serviceForm">
                <!-- Basic Information -->
                <h4 class="section-title">Basic Information</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number *</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address *</label>
                    <textarea class="form-control" id="address" rows="3" required></textarea>
                </div>

                <!-- Photo Section -->
                <h4 class="section-title">Photo Services</h4>
                <div class="mb-3">
                    <label class="form-label d-block">Number of Photos</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="photo4" value="4" onchange="handlePhotoCheck(this)">
                        <label class="form-check-label" for="photo4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="photo8" value="8" onchange="handlePhotoCheck(this)">
                        <label class="form-check-label" for="photo8">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="photo12" value="12" onchange="handlePhotoCheck(this)">
                        <label class="form-check-label" for="photo12">12</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="photo16" value="16" onchange="handlePhotoCheck(this)">
                        <label class="form-check-label" for="photo16">16</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="photoCustom" value="Custom" onchange="handlePhotoCheck(this)">
                        <label class="form-check-label" for="photoCustom">Custom</label>
                    </div>
                </div>
                <div id="photoCustomInput" class="mb-3 custom-input" style="display:none;">
                    <input type="number" class="form-control" id="photoCustomValue" placeholder="Enter number of photos">
                </div>
                <div id="photoType" class="mb-3" style="display:none;">
                    <label class="form-label">Photo Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="photoType" id="photoBasic" value="Basic">
                        <label class="form-check-label" for="photoBasic">Basic</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="photoType" id="photoStandard" value="Standard">
                        <label class="form-check-label" for="photoStandard">Standard</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="photoType" id="photoPremium" value="Premium">
                        <label class="form-check-label" for="photoPremium">Premium</label>
                    </div>
                </div>

                <!-- Video Section -->
                <h4 class="section-title">Video Services</h4>
                <div class="mb-3">
                    <label class="form-label d-block">Number of Videos</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="video4" value="4" onchange="handleVideoCheck(this)">
                        <label class="form-check-label" for="video4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="video8" value="8" onchange="handleVideoCheck(this)">
                        <label class="form-check-label" for="video8">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="video12" value="12" onchange="handleVideoCheck(this)">
                        <label class="form-check-label" for="video12">12</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="video16" value="16" onchange="handleVideoCheck(this)">
                        <label class="form-check-label" for="video16">16</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="videoCustom" value="Custom" onchange="handleVideoCheck(this)">
                        <label class="form-check-label" for="videoCustom">Custom</label>
                    </div>
                </div>
                <div id="videoCustomInput" class="mb-3 custom-input" style="display:none;">
                    <input type="number" class="form-control" id="videoCustomValue" placeholder="Enter number of videos">
                </div>
                <div id="videoType" class="mb-3" style="display:none;">
                    <label class="form-label">Video Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="videoType" id="videoBasic" value="Basic">
                        <label class="form-check-label" for="videoBasic">Basic</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="videoType" id="videoStandard" value="Standard">
                        <label class="form-check-label" for="videoStandard">Standard</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="videoType" id="videoPremium" value="Premium">
                        <label class="form-check-label" for="videoPremium">Premium</label>
                    </div>
                </div>

                <!-- Reels Section -->
                <h4 class="section-title">Reels Services</h4>
                <div class="mb-3">
                    <label class="form-label d-block">Number of Reels</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="reel4" value="4" onchange="handleReelCheck(this)">
                        <label class="form-check-label" for="reel4">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="reel8" value="8" onchange="handleReelCheck(this)">
                        <label class="form-check-label" for="reel8">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="reel12" value="12" onchange="handleReelCheck(this)">
                        <label class="form-check-label" for="reel12">12</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="reel16" value="16" onchange="handleReelCheck(this)">
                        <label class="form-check-label" for="reel16">16</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="reelCustom" value="Custom" onchange="handleReelCheck(this)">
                        <label class="form-check-label" for="reelCustom">Custom</label>
                    </div>
                </div>
                <div id="reelCustomInput" class="mb-3 custom-input" style="display:none;">
                    <input type="number" class="form-control" id="reelCustomValue" placeholder="Enter number of reels">
                </div>
                <div id="reelType" class="mb-3" style="display:none;">
                    <label class="form-label">Reel Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reelType" id="reelBasic" value="Basic">
                        <label class="form-check-label" for="reelBasic">Basic</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reelType" id="reelStandard" value="Standard">
                        <label class="form-check-label" for="reelStandard">Standard</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reelType" id="reelPremium" value="Premium">
                        <label class="form-check-label" for="reelPremium">Premium</label>
                    </div>
                </div>

                <!-- Website Section -->
                <h4 class="section-title">Website Services</h4>
                <div class="mb-3">
                    <label class="form-label d-block">Website Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="websiteBasic" value="Basic">
                        <label class="form-check-label" for="websiteBasic">Basic</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="websiteStandard" value="Standard">
                        <label class="form-check-label" for="websiteStandard">Standard</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="websitePremium" value="Premium">
                        <label class="form-check-label" for="websitePremium">Premium</label>
                    </div>
                </div>

                <!-- SEO Section -->
                <h4 class="section-title">SEO Services</h4>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seo" id="seoNeed" value="Need">
                        <label class="form-check-label" for="seoNeed">Need</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="seo" id="seoNone" value="None">
                        <label class="form-check-label" for="seoNone">None</label>
                    </div>
                </div>

                <!-- Social Media Section -->
                <h4 class="section-title">Social Media Handling</h4>
                <div class="mb-3">
                    <label for="socialMediaCount" class="form-label">Number of Platforms</label>
                    <select class="form-select" id="socialMediaCount" onchange="handleSocialMediaChange()">
                        <option value="0">Select number of platforms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div id="socialMediaPlatforms"></div>

                <!-- Payment Section -->
                <h4 class="section-title">Payment Options</h4>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="paymentQuarterly" value="Quarterly">
                        <label class="form-check-label" for="paymentQuarterly">Quarterly</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="paymentOfferly" value="Offerly">
                        <label class="form-check-label" for="paymentOfferly">Offerly</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="paymentAnnually" value="Annually">
                        <label class="form-check-label" for="paymentAnnually">Annually</label>
                    </div>
                </div>

                <!-- GST Section -->
                <h4 class="section-title">GST</h4>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gst" id="gstWith" value="With GST">
                        <label class="form-check-label" for="gstWith">With GST</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gst" id="gstWithout" value="Without GST">
                        <label class="form-check-label" for="gstWithout">Without GST</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary submit-btn">Submit Request</button>
                </div>
            </form>

            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Success!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>Your request has been submitted successfully!</p>
                            <p class="text-muted">Data has been sent to email and saved to database.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handlePhotoCheck(checkbox) {
            const checkboxes = ['photo4', 'photo8', 'photo12', 'photo16', 'photoCustom'];
            checkboxes.forEach(id => {
                if (id !== checkbox.id) {
                    document.getElementById(id).checked = false;
                }
            });

            const anyChecked = checkboxes.some(id => document.getElementById(id).checked);
            document.getElementById('photoType').style.display = anyChecked ? 'block' : 'none';
            document.getElementById('photoCustomInput').style.display = checkbox.id === 'photoCustom' && checkbox.checked ? 'block' : 'none';
        }

        function handleVideoCheck(checkbox) {
            const checkboxes = ['video4', 'video8', 'video12', 'video16', 'videoCustom'];
            checkboxes.forEach(id => {
                if (id !== checkbox.id) {
                    document.getElementById(id).checked = false;
                }
            });

            const anyChecked = checkboxes.some(id => document.getElementById(id).checked);
            document.getElementById('videoType').style.display = anyChecked ? 'block' : 'none';
            document.getElementById('videoCustomInput').style.display = checkbox.id === 'videoCustom' && checkbox.checked ? 'block' : 'none';
        }

        function handleReelCheck(checkbox) {
            const checkboxes = ['reel4', 'reel8', 'reel12', 'reel16', 'reelCustom'];
            checkboxes.forEach(id => {
                if (id !== checkbox.id) {
                    document.getElementById(id).checked = false;
                }
            });

            const anyChecked = checkboxes.some(id => document.getElementById(id).checked);
            document.getElementById('reelType').style.display = anyChecked ? 'block' : 'none';
            document.getElementById('reelCustomInput').style.display = checkbox.id === 'reelCustom' && checkbox.checked ? 'block' : 'none';
        }

        function handleSocialMediaChange() {
            const count = parseInt(document.getElementById('socialMediaCount').value);
            const container = document.getElementById('socialMediaPlatforms');
            container.innerHTML = '';

            for (let i = 0; i < count; i++) {
                const div = document.createElement('div');
                div.className = 'mb-3';
                div.innerHTML = `
                    <label class="form-label">Platform ${i + 1}</label>
                    <input type="text" class="form-control social-platform" placeholder="Enter platform name (e.g., Facebook, Instagram)" required>
                `;
                container.appendChild(div);
            }
        }

        document.getElementById('serviceForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                address: document.getElementById('address').value,
                photo: {
                    count: ['photo4', 'photo8', 'photo12', 'photo16', 'photoCustom']
                        .find(id => document.getElementById(id).checked) 
                        ? document.getElementById(['photo4', 'photo8', 'photo12', 'photo16', 'photoCustom']
                            .find(id => document.getElementById(id).checked)).value
                        : '',
                    customValue: document.getElementById('photoCustomValue').value,
                    type: document.querySelector('input[name="photoType"]:checked')?.value || ''
                },
                video: {
                    count: ['video4', 'video8', 'video12', 'video16', 'videoCustom']
                        .find(id => document.getElementById(id).checked)
                        ? document.getElementById(['video4', 'video8', 'video12', 'video16', 'videoCustom']
                            .find(id => document.getElementById(id).checked)).value
                        : '',
                    customValue: document.getElementById('videoCustomValue').value,
                    type: document.querySelector('input[name="videoType"]:checked')?.value || ''
                },
                reel: {
                    count: ['reel4', 'reel8', 'reel12', 'reel16', 'reelCustom']
                        .find(id => document.getElementById(id).checked)
                        ? document.getElementById(['reel4', 'reel8', 'reel12', 'reel16', 'reelCustom']
                            .find(id => document.getElementById(id).checked)).value
                        : '',
                    customValue: document.getElementById('reelCustomValue').value,
                    type: document.querySelector('input[name="reelType"]:checked')?.value || ''
                },
                website: ['websiteBasic', 'websiteStandard', 'websitePremium']
                    .filter(id => document.getElementById(id).checked)
                    .map(id => document.getElementById(id).value),
                seo: document.querySelector('input[name="seo"]:checked')?.value || '',
                socialMedia: {
                    count: document.getElementById('socialMediaCount').value,
                    platforms: Array.from(document.querySelectorAll('.social-platform')).map(input => input.value)
                },
                payment: ['paymentQuarterly', 'paymentOfferly', 'paymentAnnually']
                    .filter(id => document.getElementById(id).checked)
                    .map(id => document.getElementById(id).value),
                gst: document.querySelector('input[name="gst"]:checked')?.value || ''
            };

            // Send email (simulated with API call)
            try {
                await sendEmail(formData);
                await saveToDatabase(formData);
                
                // Show success modal
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
                
                // Reset form
                document.getElementById('serviceForm').reset();
                document.getElementById('photoType').style.display = 'none';
                document.getElementById('videoType').style.display = 'none';
                document.getElementById('reelType').style.display = 'none';
                document.getElementById('socialMediaPlatforms').innerHTML = '';
            } catch (error) {
                alert('Error submitting form. Please try again.');
                console.error(error);
            }
        });

        async function sendEmail(data) {
            // Simulated email sending
            console.log('Sending email with data:', data);
            // In production, this would call your backend API endpoint
            // Example: await fetch('/api/send-email', { method: 'POST', body: JSON.stringify(data) });
            return new Promise(resolve => setTimeout(resolve, 500));
        }

        async function saveToDatabase(data) {
            // Simulated database save
            console.log('Saving to database:', data);
            // In production, this would call your backend API endpoint
            // Example: await fetch('/api/save-form', { method: 'POST', body: JSON.stringify(data) });
            return new Promise(resolve => setTimeout(resolve, 500));
        }
    </script>
</body>
</html>