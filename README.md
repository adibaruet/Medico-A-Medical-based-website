# Medico: A Complete Medical Website

Medico is a full-featured medical website that streamlines healthcare services. Patients can book appointments, browse medical resources, and contact doctors, while admins and doctors manage schedules, sessions, and patients from their own dashboards.

Built with a focus on user experience, Medico aims to be a secure, efficient, and easy-to-use platform for everyday medical needs.

---

## Table of Contents

1. [Features](#features)
2. [Tech Stack](#tech-stack)
3. [Getting Started](#getting-started)
   - [Prerequisites](#prerequisites)
   - [Installation](#installation)
   - [Database Configuration](#database-configuration)
   - [Running the Project](#running-the-project)
4. [User Roles](#user-roles)
5. [Screenshots](#screenshots)
6. [Full Presentation](#full-presentation)
7. [Contributing](#contributing)

---

## Features

### Authentication and Security
- Signup with OTP verification sent by email
- Forgot Password flow with a dedicated submission page
- Secure database storage for user data

### Patient Experience
- Browse doctors and book appointments
- Access a repository of medical resources and articles
- Interactive chatbot for medical assistance

### Management
- Admin panel for doctors, schedules, and appointments
- Doctor panel for appointments, sessions, patients, and settings
- Profile management for doctors and patients

### Design
- Responsive, modern UI built with Bootstrap

---

## Tech Stack

| Layer       | Technologies                       |
|-------------|------------------------------------|
| Frontend    | HTML, CSS, JavaScript, Bootstrap   |
| Backend     | PHP                                |
| Database    | MySQL                              |
| Email / OTP | PHPMailer                          |
| Local Server| XAMPP (Apache + MySQL)             |

---

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache and MySQL)
- A Gmail or SMTP account for sending OTP emails through PHPMailer
- Git

### Installation

1. Clone the repository into your XAMPP `htdocs` folder:

   ```bash
   cd path/to/xampp/htdocs
   git clone https://github.com/adibaruet/Medico-A-Medical-based-website.git medico
   cd medico
   ```

2. Start **Apache** and **MySQL** from the XAMPP Control Panel.

### Database Configuration

1. Open [phpMyAdmin](http://localhost/phpmyadmin).
2. Create a new database (for example, `medico`).
3. Import the project's `.sql` file into that database.
4. Update the database credentials in the project's connection file:

   ```php
   $host     = "localhost";
   $user     = "root";
   $password = "";
   $database = "medico";
   ```

5. Add your SMTP email and app password in the PHPMailer configuration so OTP emails can be sent.

### Running the Project

Open your browser and go to:

```
http://localhost/medico
```

---

## User Roles

| Role    | What they can do                                                      |
|---------|-----------------------------------------------------------------------|
| Patient | Sign up, browse doctors, book sessions, read articles, use the chatbot |
| Doctor  | View appointments, manage sessions, see patients, update settings     |
| Admin   | Manage doctors, schedules, and all appointments                       |

---

## Screenshots

All screenshots below are from the project presentation, shown in order.

### Overview

**Title**
![Title](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-01.png)

**Account Access**
![Account Access](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-02.png)

**Security Verification**
![Security Verification](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-03.png)

**A Glimpse of Medico**
![A Glimpse of Medico](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-04.png)

### Website Preview

**Homepage**
![Homepage](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-05.png)

**Our Services**
![Our Services](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-06.png)

**Healthcare Providers**
![Healthcare Providers](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-07.png)

**Patient Testimonials**
![Patient Testimonials](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-08.png)

**Latest Articles**
![Latest Articles](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-09.png)

### Admin Panel

**Admin Permissions**
![Admin Permissions](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-10.png)

**Dashboard**
![Admin Dashboard](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-11.png)

**Schedule Manager**
![Schedule Manager](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-12.png)

**Appointment Manager**
![Appointment Manager](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-13.png)

### Doctor Panel

**Doctor Permissions**
![Doctor Permissions](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-14.png)

**Dashboard**
![Doctor Dashboard](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-15.png)

**My Appointments**
![My Appointments](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-16.png)

**My Sessions**
![My Sessions](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-17.png)

**My Patients**
![My Patients](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-18.png)

**Settings**
![Settings](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-19.png)

### Booking Flow

**Booking an Appointment**
![Booking an Appointment](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-20.png)

**Schedule & Book a Session**
![Schedule & Book a Session](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-21.png)

**Booking Confirmation**
![Booking Confirmation](https://raw.githubusercontent.com/adibaruet/Medico-A-Medical-based-website/main/Images/Medico_Presentation.pptx-22.png)

## Full Presentation

📽️ View the complete project presentation on Google Slides:
[Medico — Presentation Deck](https://docs.google.com/presentation/d/19bOJ2VLaMZB4hVcXtLGbu9zAiPFimKAy/edit?usp=sharing&ouid=102604923143769449495&rtpof=true&sd=true)

## Full Presentation

📽️ View the complete project presentation on Google Slides:
[Medico Presentation Deck](https://docs.google.com/presentation/d/19bOJ2VLaMZB4hVcXtLGbu9zAiPFimKAy/edit?usp=sharing&ouid=102604923143769449495&rtpof=true&sd=true)

---

## Contributing

Contributions are welcome!

1. Fork the repository
2. Create a new branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m "Add your feature"`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a Pull Request
