<?php
/*
Template Name: Client Intake Form
*/
get_header();
?>

<style>
    .intake-hero {
        background: linear-gradient(135deg, #ecf5f3 0%, #d4e8e4 100%);
        padding: 100px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .intake-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(91, 140, 133, 0.1) 0%, transparent 70%);
        animation: float 20s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    .intake-hero h1 {
        font-size: 48px;
        color: #1a2332;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
        position: relative;
        z-index: 1;
    }
    
    .intake-hero p {
        font-size: 24px;
        color: #5b8c85;
        max-width: 800px;
        margin: 0 auto;
        font-style: italic;
        position: relative;
        z-index: 1;
    }
    
    .intake-main {
        padding: 60px 0;
        background-color: #ffffff;
    }
    
    .intake-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .intake-instructions {
        background-color: #ecf5f3;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 40px;
    }
    
    .intake-instructions h2 {
        color: #1a2332;
        font-size: 24px;
        margin-bottom: 15px;
    }
    
    .intake-instructions p {
        color: #2c3e50;
        line-height: 1.7;
        margin-bottom: 10px;
    }
    
    .intake-form {
        background-color: #f9fbfa;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    
    .form-section {
        margin-bottom: 40px;
        padding-bottom: 40px;
        border-bottom: 2px solid #e8f0ef;
    }
    
    .form-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .section-title {
        color: #5b8c85;
        font-size: 22px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .section-icon {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #ecf5f3, #d4e8e4);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
    }
    
    .form-group.full-width {
        grid-column: 1 / -1;
    }
    
    .form-group label {
        color: #1a2332;
        font-weight: 500;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .required {
        color: #d9534f;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px 12px;
        border: 1px solid #e8f0ef;
        border-radius: 6px;
        font-size: 14px;
        transition: all 0.3s ease;
        font-family: inherit;
        background-color: white;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #5b8c85;
        box-shadow: 0 0 0 3px rgba(91, 140, 133, 0.1);
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }
    
    .radio-group,
    .checkbox-group {
        display: flex;
        gap: 20px;
        margin-top: 8px;
    }
    
    .radio-option,
    .checkbox-option {
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .radio-option label,
    .checkbox-option label {
        font-weight: normal;
        margin-bottom: 0;
        color: #2c3e50;
    }
    
    .inline-fields {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 15px;
    }
    
    .date-fields {
        display: grid;
        grid-template-columns: 1fr 1fr 2fr;
        gap: 10px;
    }
    
    .medications-list {
        margin-top: 15px;
    }
    
    .medication-row {
        display: grid;
        grid-template-columns: 2fr 1fr auto;
        gap: 10px;
        margin-bottom: 10px;
        align-items: end;
    }
    
    .add-medication {
        background-color: #ecf5f3;
        color: #5b8c85;
        border: 1px solid #5b8c85;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s ease;
        margin-top: 10px;
    }
    
    .add-medication:hover {
        background-color: #5b8c85;
        color: white;
    }
    
    .remove-medication {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 8px 12px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.3s ease;
    }
    
    .remove-medication:hover {
        background-color: #f5c6cb;
    }
    
    .consent-section {
        background-color: #fff8f5;
        padding: 25px;
        border-radius: 10px;
        border: 2px solid #f4e4d8;
        margin-top: 30px;
    }
    
    .consent-section h3 {
        color: #ba8778;
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .consent-text {
        color: #2c3e50;
        line-height: 1.7;
        margin-bottom: 20px;
        font-size: 14px;
    }
    
    .consent-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    
    .consent-checkbox input {
        margin-top: 3px;
    }
    
    .consent-checkbox label {
        color: #2c3e50;
        font-size: 14px;
        line-height: 1.6;
    }
    
    .form-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 40px;
    }
    
    .btn-submit {
        background-color: #5b8c85;
        color: white;
        padding: 14px 35px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .btn-submit:hover {
        background-color: #4a7268;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(91, 140, 133, 0.3);
    }
    
    .btn-save {
        background-color: transparent;
        color: #5b8c85;
        padding: 14px 35px;
        border: 2px solid #5b8c85;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .btn-save:hover {
        background-color: #ecf5f3;
    }
    
    .privacy-note {
        text-align: center;
        margin-top: 30px;
        padding: 20px;
        background-color: #f0f7f5;
        border-radius: 8px;
    }
    
    .privacy-note p {
        color: #6c7983;
        font-size: 13px;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .inline-fields {
            grid-template-columns: 1fr;
        }
        
        .date-fields {
            grid-template-columns: 1fr;
        }
        
        .medication-row {
            grid-template-columns: 1fr;
        }
        
        .radio-group,
        .checkbox-group {
            flex-direction: column;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="intake-hero">
        <div class="container">
            <h1>Client Intake Form</h1>
            <p>Please complete this form to help me understand your needs better</p>
        </div>
    </section>
    
    <section class="intake-main">
        <div class="intake-container">
            
            <div class="intake-instructions">
                <h2>Before You Begin</h2>
                <p>This form helps me gather important information to provide you with the best possible care.</p>
                <p>All information is strictly confidential and will be stored securely.</p>
                <p>Please use CAPITAL LETTERS where indicated. Fields marked with * are required.</p>
            </div>
            
            <form class="intake-form" id="intakeForm">
                
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="section-icon">👤</span>
                        Personal Information
                    </h3>
                    
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="fullName">Full Name <span class="required">*</span> (CAPITAL LETTERS)</label>
                            <input type="text" id="fullName" name="fullName" required style="text-transform: uppercase;">
                        </div>
                        
                        <div class="form-group">
                            <label for="dob">Date of Birth <span class="required">*</span></label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="gender">Gender <span class="required">*</span></label>
                            <select id="gender" name="gender" required>
                                <option value="">Please select...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="non-binary">Non-binary</option>
                                <option value="prefer-not">Prefer not to say</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="pronouns">Pronouns</label>
                            <input type="text" id="pronouns" name="pronouns" placeholder="e.g., she/her, he/him, they/them">
                        </div>
                        
                        <div class="form-group">
                            <label for="ethnicity">Ethnicity</label>
                            <input type="text" id="ethnicity" name="ethnicity">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="address">Street Address <span class="required">*</span></label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number <span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="altPhone">Alternative Phone</label>
                            <input type="tel" id="altPhone" name="altPhone">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="maritalStatus">Marital Status</label>
                            <select id="maritalStatus" name="maritalStatus">
                                <option value="">Please select...</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                                <option value="separated">Separated</option>
                                <option value="partnered">Partnered</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="residentialStatus">Residential Status</label>
                            <select id="residentialStatus" name="residentialStatus">
                                <option value="">Please select...</option>
                                <option value="own">Own Home</option>
                                <option value="rent">Renting</option>
                                <option value="family">Living with Family</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation">
                        </div>
                        
                        <div class="form-group">
                            <label>Are You Retired?</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="retiredYes" name="retired" value="yes">
                                    <label for="retiredYes">Yes</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="retiredNo" name="retired" value="no">
                                    <label for="retiredNo">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <input type="text" id="religion" name="religion">
                        </div>
                        
                        <div class="form-group">
                            <label for="education">Education Level</label>
                            <select id="education" name="education">
                                <option value="">Please select...</option>
                                <option value="secondary">Secondary School</option>
                                <option value="college">College/A-Levels</option>
                                <option value="undergraduate">Undergraduate Degree</option>
                                <option value="postgraduate">Postgraduate Degree</option>
                                <option value="doctorate">Doctorate</option>
                                <option value="vocational">Vocational Training</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="livingArrangements">Living Arrangements</label>
                            <input type="text" id="livingArrangements" name="livingArrangements" placeholder="e.g., Alone, with partner, with family">
                        </div>
                        
                        <div class="form-group">
                            <label>Do You Have Children?</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="childrenYes" name="children" value="yes" onchange="toggleChildrenAge()">
                                    <label for="childrenYes">Yes</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="childrenNo" name="children" value="no" onchange="toggleChildrenAge()">
                                    <label for="childrenNo">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width" id="childrenAgeGroup" style="display: none;">
                            <label for="childrenAges">Ages of Children</label>
                            <input type="text" id="childrenAges" name="childrenAges" placeholder="e.g., 5, 8, 12">
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="section-icon">🆘</span>
                        Emergency Contact
                    </h3>
                    
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="emergencyName">Full Name <span class="required">*</span> (CAPITAL LETTERS)</label>
                            <input type="text" id="emergencyName" name="emergencyName" required style="text-transform: uppercase;">
                        </div>
                        
                        <div class="form-group">
                            <label for="emergencyRelation">Relationship <span class="required">*</span></label>
                            <input type="text" id="emergencyRelation" name="emergencyRelation" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="emergencyPhone">Phone Number <span class="required">*</span></label>
                            <input type="tel" id="emergencyPhone" name="emergencyPhone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="emergencyAltPhone">Alternative Phone</label>
                            <input type="tel" id="emergencyAltPhone" name="emergencyAltPhone">
                        </div>
                        
                        <div class="form-group">
                            <label for="emergencyEmail">Email</label>
                            <input type="email" id="emergencyEmail" name="emergencyEmail">
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="section-icon">🏥</span>
                        Medical Information
                    </h3>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="gpName">GP Name</label>
                            <input type="text" id="gpName" name="gpName">
                        </div>
                        
                        <div class="form-group">
                            <label for="gpPhone">GP Phone Number</label>
                            <input type="tel" id="gpPhone" name="gpPhone">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="gpAddress">GP Practice Address</label>
                            <input type="text" id="gpAddress" name="gpAddress">
                        </div>
                        
                        <div class="form-group full-width">
                            <label>Are You Taking Regular Medication?</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="medicationYes" name="medication" value="yes" onchange="toggleMedication()">
                                    <label for="medicationYes">Yes</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="medicationNo" name="medication" value="no" onchange="toggleMedication()">
                                    <label for="medicationNo">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width" id="medicationsList" style="display: none;">
                            <label>Medication Details</label>
                            <div class="medications-list" id="medicationsContainer">
                                <div class="medication-row">
                                    <input type="text" placeholder="Medication name" name="medName[]">
                                    <input type="text" placeholder="Dosage" name="medDosage[]">
                                    <button type="button" class="remove-medication" onclick="removeMedication(this)">Remove</button>
                                </div>
                            </div>
                            <button type="button" class="add-medication" onclick="addMedication()">+ Add Another Medication</button>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="medicalConditions">Current Medical Conditions</label>
                            <textarea id="medicalConditions" name="medicalConditions" placeholder="Please list any current medical conditions..."></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <label>Recent Mental Health Diagnosis?</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="diagnosisYes" name="diagnosis" value="yes" onchange="toggleDiagnosis()">
                                    <label for="diagnosisYes">Yes</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="diagnosisNo" name="diagnosis" value="no" onchange="toggleDiagnosis()">
                                    <label for="diagnosisNo">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width" id="diagnosisDetails" style="display: none;">
                            <label for="diagnosisInfo">Please Specify Diagnosis</label>
                            <textarea id="diagnosisInfo" name="diagnosisInfo"></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="familyHistory">Family Medical History</label>
                            <textarea id="familyHistory" name="familyHistory" placeholder="Please note any relevant family medical history..."></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <label>Any Previous Counselling?</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="counsellingYes" name="counselling" value="yes" onchange="toggleCounselling()">
                                    <label for="counsellingYes">Yes</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="counsellingNo" name="counselling" value="no" onchange="toggleCounselling()">
                                    <label for="counsellingNo">No</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width" id="counsellingDetails" style="display: none;">
                            <label for="counsellingInfo">When, How Long & Why?</label>
                            <textarea id="counsellingInfo" name="counsellingInfo" placeholder="Please provide details of previous counselling..."></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="consent-section">
                    <h3>Consent & Agreement</h3>
                    <div class="consent-text">
                        By submitting this form, you acknowledge that:
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>All information provided is accurate to the best of your knowledge</li>
                            <li>This information will be kept strictly confidential</li>
                            <li>This form is for administrative purposes and does not constitute a therapeutic relationship</li>
                            <li>You consent to being contacted using the details provided</li>
                        </ul>
                    </div>
                    
                    <div class="consent-checkbox">
                        <input type="checkbox" id="consent" name="consent" required>
                        <label for="consent">
                            I have read and agree to the above statements. I consent to the secure storage 
                            and processing of my data for the purpose of providing therapeutic services.
                        </label>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn-save" onclick="saveForm()">Save Draft</button>
                    <button type="submit" class="btn-submit">Submit Form</button>
                </div>
                
                <div class="privacy-note">
                    <p>
                        Your information is protected under GDPR and professional confidentiality guidelines. 
                        This form is transmitted securely and stored in accordance with data protection regulations.
                    </p>
                </div>
                
            </form>
            
        </div>
    </section>
</main>

<script>
    function toggleChildrenAge() {
        const hasChildren = document.getElementById('childrenYes').checked;
        document.getElementById('childrenAgeGroup').style.display = hasChildren ? 'block' : 'none';
    }
    
    function toggleMedication() {
        const takingMeds = document.getElementById('medicationYes').checked;
        document.getElementById('medicationsList').style.display = takingMeds ? 'block' : 'none';
    }
    
    function toggleDiagnosis() {
        const hasDiagnosis = document.getElementById('diagnosisYes').checked;
        document.getElementById('diagnosisDetails').style.display = hasDiagnosis ? 'block' : 'none';
    }
    
    function toggleCounselling() {
        const hadCounselling = document.getElementById('counsellingYes').checked;
        document.getElementById('counsellingDetails').style.display = hadCounselling ? 'block' : 'none';
    }
    
    function addMedication() {
        const container = document.getElementById('medicationsContainer');
        const newRow = document.createElement('div');
        newRow.className = 'medication-row';
        newRow.innerHTML = `
            <input type="text" placeholder="Medication name" name="medName[]">
            <input type="text" placeholder="Dosage" name="medDosage[]">
            <button type="button" class="remove-medication" onclick="removeMedication(this)">Remove</button>
        `;
        container.appendChild(newRow);
    }
    
    function removeMedication(button) {
        button.parentElement.remove();
    }
    
    function saveForm() {
        const formData = new FormData(document.getElementById('intakeForm'));
        localStorage.setItem('intakeFormDraft', JSON.stringify(Object.fromEntries(formData)));
        alert('Form draft saved! Your information will be restored when you return.');
    }
    
    document.getElementById('intakeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('.btn-submit');
        const originalText = submitBtn.textContent;
        
        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            submitBtn.textContent = 'Form Submitted!';
            submitBtn.style.backgroundColor = '#5cb85c';
            
            localStorage.removeItem('intakeFormDraft');
            
            setTimeout(() => {
                alert('Thank you for completing the intake form. We will review your information and contact you soon.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.style.backgroundColor = '';
                submitBtn.disabled = false;
            }, 2000);
        }, 1500);
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        const savedDraft = localStorage.getItem('intakeFormDraft');
        if (savedDraft) {
            if (confirm('You have a saved draft. Would you like to restore it?')) {
                const data = JSON.parse(savedDraft);
                Object.keys(data).forEach(key => {
                    const field = document.querySelector(`[name="${key}"]`);
                    if (field) {
                        if (field.type === 'checkbox' || field.type === 'radio') {
                            field.checked = field.value === data[key];
                        } else {
                            field.value = data[key];
                        }
                    }
                });
            }
        }
    });
</script>

<?php get_footer(); ?>