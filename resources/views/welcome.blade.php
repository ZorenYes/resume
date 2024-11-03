<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .header, .education, .experience, .skills {
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 36px;
        }
        .header p {
            font-size: 18px;
        }
        .section-title {
            font-size: 24px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .skills ul {
            display: flex;
            flex-wrap: wrap;
        }
        .skills ul li {
            flex: 1 1 30%;
            margin: 10px;
            padding: 10px;
            background-color: #f1f1f1;
            text-align: center;
            border-radius: 5px;
        }
        .contact-info {
            font-size: 16px;
            margin-top: 5px;
        }

        .header img {
            width: 150px; /* Adjust this size to fit the resume layout */
            height: auto; /* Keeps the aspect ratio */
            border-radius: 10%; /* Makes the image circular */
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>{{$info->name}}</h1>
        <img src="zoren1.jpg" alt="Zorenimg">         
       
    </div>
    <div class="About">
        <h2 class="section-title">About me</h2>
        <ul>
            <li>
               {{$info->about}}
            </li>
        </ul>
    </div>
    <div class="Hobbies">
        <h2 class="section-title">Hobbies</h2>
        <ul>
            <li>
            • {{$info->hobby_1}} <br>
            • {{$info->hobby_2}}<br>
            • {{$info->hobby_3}}
            </li>
        </ul>
    </div>
 
    <div class="education">
        <h2 class="section-title">Education</h2>
        <ul>
            <li>
               {{$info->educ}}
            </li>
        </ul>
    </div>

    <div class="experience">
        <h2 class="section-title">Work Experience</h2>
        <ul>
            <li>
            {{$info->work_exp}}
            </li>
            <li>

            </li>
        </ul>
    </div>

      <div class="Skills">
        <h2 class="section-title">Skills</h2>
        <ul>
            <li>
          {{$info->skills}}
            </li>
        </ul>
    </div>

    <div class="Contacts">
        <h2 class="section-title">Email address, contact & address</h2>
        <ul>
            <li>
            Email:{{$info->email}} <br>
            Contact number: {{$info->number}} <br>
            Address: {{$info->address}}
            </li>
        </ul>
    </div>
</div>


</div>
</body>
</html>