<<<<<<< HEAD
#  Ehsan App
=======
<div align="center">
>>>>>>> c8fa253 (✨ Major Update: Professional README, Documentation & Diagrams)

# 🤲 Ehsan App - Charity Management System

<img src="docs/ui-ux/logo.png" alt="Ehsan App Logo" width="200"/>

### Streamlining Charity Operations & Empowering Volunteers

[![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

[Features](#-features) • [Installation](#-installation) • [Documentation](#-documentation) • [Screenshots](#-screenshots) • [Contributing](#-contributing)

</div>

---

<<<<<<< HEAD
##   Project Structure
=======
## 📋 Overview

**Ehsan App** is a comprehensive charity management system designed to help charitable organizations streamline their operations, manage volunteers, track donations, and organize fundraising campaigns efficiently. The platform eliminates paper-based chaos and provides administrators with powerful tools to manage all aspects of their charitable work.

### 🎯 Problem Statement

Charitable organizations often struggle with:
- Manual paper-based record keeping
- Inefficient case and request management
- Lack of volunteer coordination
- Limited campaign tracking capabilities
- Difficulty in generating reports and analytics

**Ehsan App** solves these challenges by providing a centralized, digital platform for all charity operations.

---

## ✨ Features

### 🔐 Authentication & Authorization
- Secure user login/logout system
- Password reset functionality
- Role-based access control (RBAC)
- Session management
- Multi-level permission system

### 📁 Cases Management
- Create, read, update, and delete cases
- Advanced search and filtering
- Bulk operations for efficiency
- Case status tracking and management
- Complete case history

### 📝 Requests Management
- Submit assistance requests
- Approve/reject workflow
- Real-time request tracking
- Priority-based management
- Request assignment system

### 📊 Reports & Analytics
- Generate comprehensive reports
- Interactive data visualization
- Export reports (PDF, Excel, CSV)
- Custom report builder
- Real-time analytics dashboard

### 👥 User Management
- Complete CRUD operations for users
- Role and permission management
- User activity logging
- Detailed user profiles
- Access control management

### ⚙️ System Settings
- Manage assistance types
- Configure notification preferences
- System-wide preferences
- Automated backup management
- Customizable workflows

### 📎 File Management
- Secure document upload
- Organized file storage
- Document preview functionality
- File validation and security
- Version control

### 🎯 Campaign Management
- Create and manage fundraising campaigns
- Set and track campaign goals
- Monitor campaign progress in real-time
- Campaign analytics and reporting
- Archive completed campaigns

### 🙋 Volunteer Management
- Complete volunteer CRUD operations
- Volunteer profile management
- Registration and onboarding
- Activity tracking
- Performance evaluation

### 🤝 Volunteer Campaign Participation
- Register volunteers to campaigns
- Track attendance per campaign
- Monitor tasks and assignments
- Campaign-specific performance scoring
- Volunteer contribution analytics

### 🏆 Achievements & Badges System
- **Top Volunteer of the Month** recognition
- **Top Volunteer of the Year** awards
- **Medical Expert** badge
- **Logistics Hero** badge
- **Community Hero** badge
- Automated achievement tracking algorithm
- Public leaderboard display
- Badge showcase on volunteer profiles

---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **Laravel 11** | Backend Framework |
| **PHP 8.2+** | Programming Language |
| **MySQL 8.0** | Database |
| **Blade** | Template Engine |
| **Tailwind CSS** | UI Styling |
| **JavaScript** | Frontend Interactivity |
| **Chart.js** | Data Visualization |

---

## 📦 Installation

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL >= 8.0
- Node.js & NPM
- Git

### Setup Instructions

1. **Clone the repository**
```bash
git clone https://github.com/yosef00869/ehsan-app.git
cd ehsan-app
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node dependencies**
```bash
npm install
```

4. **Environment configuration**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database**
Edit `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ehsan_app
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations & seeders**
```bash
php artisan migrate --seed
```

7. **Build assets**
```bash
npm run build
```

8. **Start the development server**
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

### Default Admin Credentials
```
Email: admin@ehsan.app
Password: password
```
> ⚠️ **Important:** Change default credentials after first login!

---

## 📚 Documentation

Comprehensive documentation is available in the `docs/` directory:

- **[DFD (Data Flow Diagram)](docs/diagrams/DFD.md)** - System data flow visualization
- **[Sequence Diagrams](docs/diagrams/sequence-diagrams/)** - Process flow documentation
- **[ERD (Entity Relationship Diagram)](docs/diagrams/ERD.png)** - Database structure
- **[CRUD Matrix](docs/CRUD-Matrix.md)** - Complete CRUD operations reference
- **[UI/UX Designs](docs/ui-ux/)** - Wireframes and mockups
- **[API Documentation](docs/API-Documentation.md)** - API endpoints reference
- **[System Architecture](docs/diagrams/system-architecture.png)** - Technical architecture

---

## 🖼️ Screenshots

<div align="center">

### Dashboard
<img src="docs/screenshots/dashboard.png" alt="Dashboard" width="800"/>

### Cases Management
<img src="docs/screenshots/cases.png" alt="Cases Management" width="800"/>

### Campaign Tracking
<img src="docs/screenshots/campaigns.png" alt="Campaign Tracking" width="800"/>

### Volunteer Leaderboard
<img src="docs/screenshots/leaderboard.png" alt="Volunteer Leaderboard" width="800"/>

</div>

---

## 🗂️ Project Structure

```
>>>>>>> c8fa253 (✨ Major Update: Professional README, Documentation & Diagrams)
ehsan-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── Services/
├── database/
│   ├── migrations/
│   └── seeders/
├── docs/
│   ├── diagrams/
│   │   ├── DFD.md
│   │   ├── ERD.png
│   │   ├── sequence-diagrams/
│   │   └── system-architecture.png
│   ├── ui-ux/
│   │   ├── wireframes/
│   │   └── mockups/
│   ├── screenshots/
│   ├── CRUD-Matrix.md
│   └── API-Documentation.md
├── public/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
├── tests/
├── .env.example
├── composer.json
├── package.json
└── README.md
```

---

<<<<<<< HEAD
##  Components
=======
## 🧪 Testing
>>>>>>> c8fa253 (✨ Major Update: Professional README, Documentation & Diagrams)

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

---

<<<<<<< HEAD
## Technologies
- **Backend:** Node.js, Express.js, MySQL  
- **Frontend (Planned):** React
- **Data:** CSV / Pandas / SQL Scripts  

---

## Contributors
- Yousef  Mabrook
- Nourhan  Ashraf
- Zeinab  Talaat
- Mohmmed Ashraf
- Mohammed Osama
- Abdulaziz Atef
- Hussien Fathy
- Sherry Hany
=======
## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and development process.

---

## 🔒 Security

If you discover any security-related issues, please email security@ehsan.app instead of using the issue tracker.

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 👥 Team

- **Developers**: [Youssef Mabrook,Mohammed Ashraf,Mohammed Osama,Abdulaziz]
- **Designers**: [Zeinab talaat,Hussien Fathy,Nourhan Ahraf,Sherry Hany]

---

## 📞 Contact & Support

- **Email**: support@ehsan.app
- **Documentation**: [docs.ehsan.app](https://docs.ehsan.app)
- **Issues**: [GitHub Issues](https://github.com/yosef00869/ehsan-app/issues)
- **Discussions**: [GitHub Discussions](https://github.com/yosef00869/ehsan-app/discussions)

---

<div align="center">

### ⭐ Star this repository if you find it helpful!

Made with ❤️ for charitable organizations

</div>
>>>>>>> c8fa253 (✨ Major Update: Professional README, Documentation & Diagrams)
