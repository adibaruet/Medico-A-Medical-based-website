Medico: A Complete Medical Website

Medico is a full-featured medical website that streamlines healthcare services. Patients can book appointments, browse medical resources, and contact doctors, while admins and doctors manage schedules, sessions, and patients from their own dashboards.

Built with a focus on user experience, Medico aims to be a secure, efficient, and easy-to-use platform for everyday medical needs.



Table of Contents





Features



Tech Stack



Getting Started





Prerequisites



Installation



Database Configuration



Running the Project



User Roles



Screenshots



Full Presentation



Contributing





Features



Authentication and Security





Signup with OTP verification sent by email



Forgot Password flow with a dedicated submission page



Secure database storage for user data



Patient Experience





Browse doctors and book appointments



Access a repository of medical resources and articles



Interactive chatbot for medical assistance



Management





Admin panel for doctors, schedules, and appointments



Doctor panel for appointments, sessions, patients, and settings



Profile management for doctors and patients



Design





Responsive, modern UI built with Bootstrap





Tech Stack







Layer



Technologies





Frontend



HTML, CSS, JavaScript, Bootstrap





Backend



PHP





Database



MySQL





Email / OTP



PHPMailer





Local Server



XAMPP (Apache + MySQL)





Getting Started



Prerequisites





XAMPP (Apache and MySQL)



A Gmail or SMTP account for sending OTP emails through PHPMailer



Git



Installation





Clone the repository into your XAMPP htdocs folder:

 cd path/to/xampp/htdocs
 git clone https://github.com/adibaruet/Medico-A-Medical-based-website.git medico
 cd medico



Start Apache and MySQL from the XAMPP Control Panel.



Database Configuration





Open phpMyAdmin.



Create a new database (for example, medico).



Import the project's .sql file into that database.



Update the database credentials in the project's connection file:

 $host     = "localhost";
 $user     = "root";
 $password = "";
 $database = "medico";



Add your SMTP email and app password in the PHPMailer configuration so OTP emails can be sent.



Running the Project

Open your browser and go to:

http://localhost/medico





User Roles







Role



What they can do





Patient



Sign up, browse doctors, book sessions, read articles, use the chatbot





Doctor



View appointments, manage sessions, see patients, update settings





Admin



Manage doctors, schedules, and all appointments





Screenshots

All screenshots below are from the project presentation, shown in order.

Overview

Account Access
Account Access

Security Verification
Security Verification

Website Preview

Homepage
Homepage

Our Services
Our Services

Healthcare Providers
Healthcare Providers

Patient Testimonials
Patient Testimonials

Latest Articles
Latest Articles

Admin Panel

Admin Permissions
Admin Permissions

Dashboard
Admin Dashboard

Schedule Manager
Schedule Manager

Appointment Manager
Appointment Manager

Doctor Panel

Doctor Permissions
Doctor Permissions

Dashboard
Doctor Dashboard

My Appointments
My Appointments

My Sessions
My Sessions

My Patients
My Patients

Settings
Settings

Booking Flow

Booking an Appointment
Booking an Appointment

Schedule & Book a Session
Schedule & Book a Session

Booking Confirmation
Booking Confirmation

Full Presentation

📽️ View the complete project presentation on Google Slides:
Medico — Presentation Deck

Contributing

Contributions are welcome!





Fork the repository



Create a new branch: git checkout -b feature/your-feature



Commit your changes: git commit -m "Add your feature"



Push to the branch: git push origin feature/your-feature



Open a Pull Request

