<?php

namespace Core;
use Core\View;

class Controller
{
    // متد یا ویژگی‌های مشترک کنترلرها اینجا می‌ره

    protected function view($viewName, $data = [])
    {
        View::make($viewName, $data);
    }

    // می‌تونی متدهای مشترک دیگه مثل redirect، middleware و ... اضافه کنی
}
