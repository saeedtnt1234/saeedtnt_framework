saeedtnt_framework
saeedtnt_framework یک فریمورک سبک، سریع و قابل توسعه‌ی PHP است که برای ساخت وب‌سایت‌های ساده با حداقل تنظیمات طراحی شده است. این فریمورک شامل یک ابزار قدرتمند خط فرمان (CLI) برای ایجاد کنترلرها، مدل‌ها، ویوها و مهاجرت‌ها است — به شما کمک می‌کند سریع‌تر با کد تمیز و سازمان‌یافته توسعه دهید.

🚀 ویژگی‌ها

🧱 ساختار سبک PHP

⚡ توسعه سریع با دستورات CLI

🛠 تولیدکننده کنترلر، مدل، ویو و مهاجرت

🔐 ابزارهای امنیتی داخلی (CSRF، محدودیت زمان نشست، فیلتر XSS)

👤 سیستم احراز هویت پایه شامل شده است

📦 کدبیس ساده و ماژولار

🧰 نیازمندی‌ها

PHP 7.4 یا بالاتر

MySQL یا دیتابیس سازگار

توصیه شده: Laragon یا سرور محلی مشابه

📦 نصب
کلون کردن پروژه:

cd C:\laragon\www
git clone https://github.com/saeedtnt1234/saeedtnt_framework.git
cd saeedtnt_framework


وب‌سرور خود را طوری تنظیم کنید که به مسیر public اشاره کند و اطمینان حاصل کنید که URL rewriting فعال باشد.

🖥 دستورات CLI
می‌توانید دستورات زیر را از طریق ترمینال اجرا کنید:

ایجاد کنترلر:

php saeedtnt make:controller Post


ایجاد می‌کند: app/Controllers/Post.php

ایجاد مدل:

php saeedtnt make:model Post


ایجاد می‌کند: app/Models/Post.php

ایجاد ویو:

php saeedtnt make:view homepage


ایجاد می‌کند: app/Views/homepage.saeedtnt.php

ایجاد مهاجرت:

php saeedtnt make:migration create_users name:string:100 email:string:150:unique password:string:255 created_at:timestamp


ایجاد می‌کند: migrations/YYYYMMDD_HHMMSS_create_users.php با ساختار کامل جدول SQL.

اجرای همه مهاجرت‌ها:

php saeedtnt migrate


تمام فایل‌های موجود در مسیر migrations/ را اجرا می‌کند.

🔐 ابزارهای امنیتی
این فریمورک شامل کلاس Security است با قابلیت‌های:

تولید و اعتبارسنجی توکن CSRF

فیلتر XSS با استفاده از htmlspecialchars()

مدیریت محدودیت زمان نشست

👥 احراز هویت
کلاس Core\Auth شامل:

attempt() برای اعتبارسنجی اطلاعات ورود

check() برای بررسی وضعیت ورود کاربر

user() برای دریافت کاربر وارد شده

logout() برای خروج و حذف نشست

🤝 همکاری و مشارکت
Pull Request ها خوش‌آمد هستند! برای مشارکت، مخزن را fork کنید و PR ارسال نمایید.

📧 ارتباط و پشتیبانی
برای گزارش مشکل، بازخورد یا سؤال: ms.khodavaesy1402@gmail.com

📜 مجوز
این پروژه تحت مجوز MIT منتشر شده است.

🔗 لینک‌ها
GitHub: https://github.com/saeedtnt1234/saeedtnt_framework

Happy coding! 🙌
