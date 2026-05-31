<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - Cedric Sorrera</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        .resume-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header-section {
            display: grid;
            grid-template-columns: 200px 1fr;
            background: white;
        }
        .header-image {
            background: #ccc;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-photo {
            width: 160px;
            height: 160px;
            border-radius: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            object-fit: cover;
        }
        .header-info {
            background: #0d5a9e;
            color: white;
            padding: 25px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .header-info h1 {
            font-size: 32px;
            margin-bottom: 5px;
        }
        .header-info .job-title {
            font-size: 14px;
            margin-bottom: 20px;
            opacity: 0.9;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            font-size: 12px;
            line-height: 1.6;
        }
        .contact-item label {
            font-weight: bold;
            display: block;
            margin-bottom: 2px;
        }
        .contact-item {
            font-size: 12px;
        }
        .main-content {
            padding: 30px 40px;
        }
        .about-section {
            margin-bottom: 30px;
            font-size: 13px;
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            color: #0d5a9e;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #0d5a9e;
        }
        .education-item {
            display: grid;
            grid-template-columns: 80px 1fr;
            gap: 30px;
            margin-bottom: 20px;
        }
        .education-year {
            font-weight: bold;
            font-size: 12px;
        }
        .education-content {
            font-size: 12px;
        }
        .education-degree {
            font-weight: bold;
            margin-bottom: 3px;
        }
        .education-school {
            color: #666;
            font-size: 11px;
            margin-bottom: 8px;
            font-style: italic;
        }
        .education-details {
            font-size: 11px;
            color: #555;
            margin-bottom: 5px;
        }
        .education-activities {
            font-size: 11px;
            margin-top: 8px;
            margin-left: 20px;
        }
        .education-activities li {
            margin-bottom: 3px;
        }
        .experience-item {
            display: grid;
            grid-template-columns: 80px 1fr;
            gap: 30px;
            margin-bottom: 20px;
        }
        .experience-date {
            font-weight: bold;
            font-size: 12px;
        }
        .experience-content {
            font-size: 12px;
        }
        .experience-position {
            font-weight: bold;
            margin-bottom: 3px;
        }
        .experience-company {
            color: #666;
            font-size: 11px;
            margin-bottom: 8px;
            font-style: italic;
        }
        .experience-details {
            font-size: 11px;
            margin-left: 20px;
        }
        .experience-details li {
            margin-bottom: 6px;
            line-height: 1.4;
        }
        .skills-list {
            font-size: 12px;
            margin-left: 20px;
        }
        .skills-list li {
            margin-bottom: 6px;
        }
        .back-link {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
        .back-link a {
            color: #0d5a9e;
            text-decoration: none;
            font-size: 13px;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="resume-container">
    <div class="header-section">
        <div class="header-image">
              @if(isset($data['photo']) && !empty($data['photo']))
                <img src="{{ asset($data['photo']) }}" alt="Profile Photo" class="profile-photo">
            @else
                <div class="profile-photo"></div>
            @endif
        </div>
        <div class="header-info">
            <h1>{{ $data['fullName'] }}</h1>
            <p class="job-title">{{ $data['jobTitle'] }}</p>
            
            <div class="contact-grid">
                <div class="contact-item">
                    <label>Phone:</label>
                    {{ $data['phone'] }}
                </div>
                <div class="contact-item">
                    <label>Address:</label>
                    {{ $data['address'] }}
                </div>
                <div class="contact-item">
                    <label>Email:</label>
                    {{ $data['email'] }}
                </div>
                <div class="contact-item">
                    <label>Date of birth:</label>
                    {{ $data['birthDate'] }}
                </div>
                <div class="contact-item">
                    <label>LinkedIn:</label>
                    linkedin.com/in/{{ strtolower(str_replace(' ', '-', $data['fullName'])) }}
                </div>
                <div class="contact-item">
                    <label>Gender:</label>
                    {{ $data['gender'] }}
                </div>
                <div class="contact-item">
                    <label>GitLab:</label>
                    gitlab.com/{{ strtolower(str_replace(' ', '', $data['fullName'])) }}
                </div>
                <div class="contact-item">
                    <label>Nationality:</label>
                    {{ $data['nationality'] }}
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="about-section">
            I am currently studying Bachelor of Science in Information Technology. I am a dedicated and passionate student eager to build a career in software development. I have strong foundational knowledge in programming, web development, and database management. I am committed to continuous learning and excited to apply my skills in real-world projects.
        </div>

        <div class="section">
            <div class="section-title">Education</div>
            
            <div class="education-item">
                <div class="education-year">2016-2020</div>
                <div class="education-content">
                    <div class="education-degree">Junior High School</div>
                    <div class="education-school">Juan G. Macaraeg NAtional High School</div>
                    
                </div>
            </div>

            <div class="education-item">
                <div class="education-year">2020-2022</div>
                <div class="education-content">
                    <div class="education-degree">Senior High School</div>
                    <div class="education-school">Juan G. Macaraeg NAtional High School</div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Experience</div>
            
            <div class="experience-item">
                <div class="experience-date">August 2022 - <br>Present</div>
                <div class="experience-content">
                    <div class="experience-position">Current Student</div>
                    <div class="experience-company">{{ $data['experience'] }}</div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-title">Skills</div>
            <ul class="skills-list">
                <li>Flutter</li>
                <li>C, C++</li>
                <li>JavaScript</li>
                <li>CSS</li>
                <li>HTML</li>
                <li>Java</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
