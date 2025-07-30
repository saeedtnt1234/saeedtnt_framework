# saeedtnt_framework

**saeedtnt_framework** is a lightweight, fast, and extensible PHP framework designed for building simple websites with minimal setup. It includes a powerful CLI tool for generating controllers, models, views, and migrations — helping you build faster with clean and organized code.

---

## 🚀 Features

- 🧱 Lightweight PHP structure
- ⚡ Fast development with CLI commands
- 🛠 Controller, model, view, and migration generators
- 🔐 Built-in security helpers (CSRF, session timeout, XSS filtering)
- 👤 Basic authentication system included
- 📦 Simple and modular codebase

---

## 🧰 Requirements

- PHP 7.4 or newer
- MySQL or compatible database
- Recommended: [Laragon](https://laragon.org/) or similar local server stack

---

## 📦 Installation

Clone the project:

```bash
cd C:\laragon\www
git clone https://github.com/saeedtnt1234/saeedtnt_framework.git
cd saeedtnt_framework
```

Configure your web server to point to the public root (e.g., `/public`) and ensure URL rewriting is enabled.

---

## 🖥 CLI Commands

You can run the following commands via terminal:

### Create a Controller
```bash
php saeedtnt make:controller Post
```
Creates: `app/Controllers/Post.php`

### Create a Model
```bash
php saeedtnt make:model Post
```
Creates: `app/Models/Post.php`

### Create a View
```bash
php saeedtnt make:view homepage
```
Creates: `app/Views/homepage.saeedtnt.php`

### Create a Migration
```bash
php saeedtnt make:migration create_users name:string:100 email:string:150:unique password:string:255 created_at:timestamp
```
Creates: `migrations/YYYYMMDD_HHMMSS_create_users.php` with a full SQL table structure.

### Run All Migrations
```bash
php saeedtnt migrate
```
Executes all migration files in the `migrations/` directory.

---

## 🔐 Security Utilities

The framework includes a `Security` class with:

- CSRF token generation and validation
- XSS filtering using `htmlspecialchars()`
- Session timeout management

## 👥 Authentication

`Core\Auth` includes:

- `attempt()` to validate login credentials
- `check()` to verify if user is logged in
- `user()` to get the current logged-in user
- `logout()` to destroy the session

---

## 🤝 Contributing

Pull requests are welcome!
If you'd like to contribute, fork the repository and submit a PR.

📧 For issues, feedback, or questions, contact:
**ms.khodavaesy1402@gmail.com**

---

## 📜 License

This project is open-sourced under the MIT License.

---

## 🔗 Links

- 🔗 GitHub: [https://github.com/saeedtnt1234/saeedtnt_framework](https://github.com/saeedtnt1234/saeedtnt_framework)

---

Happy coding! 🙌
