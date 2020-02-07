<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function menu()
    {
        $list_menu = [
            [
                'type' => 'item',
                'text' => 'داشبورد',
                'route' => 'dashboard',
                'icon' => 'icon-speedometer',
                'label' => [
                    'text' => 'جدید',
                ]
            ],
            [
                'type' => 'nav-title',
                'text' => 'تم',
            ],
            [
                'type' => 'item',
                'text' => 'رنگ ها',
                'route' => 'users',
                'icon' => 'icon-drop',
            ],
            [
                'type' => 'item',
                'text' => 'تایپوگرافی',
                'route' => 'users',
                'icon' => 'icon-pencil',
            ],
            [
                'type' => 'item',
                'text' => 'کاربر',
                'route' => 'users',
                'icon' => 'icon-speedometer',
            ],
            [
                'type' => 'parent-item',
                'text' => 'کامپوننت ها',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'نشانگر صفحات',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'باکس ها',
                        'route' => 'base-cards',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'اسلایدر',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'باز و بسته شونده',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'فرم ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'جامبوترون',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'لیست ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'ناوبری',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ], [
                        'type' => 'item',
                        'text' => 'صفحه بندی',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تولتیپ',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'پروگرس بار',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'سویچ',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'جدول ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تب ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تولتیپ ها ۲',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                ]
            ],[
                'type' => 'parent-item',
                'text' => 'دکمه ها',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'دکمه ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'دکمه های گروهی',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'دراپ دان ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'شبکه های اجتماعی',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                ]
            ],[
                'type' => 'item',
                'text' => 'چارت ها',
                'route' => 'dashboard',
                'icon' => 'icon-speedometer',
            ],[
                'type' => 'parent-item',
                'text' => 'ایکن ها',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'پرچم ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'font awesome',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'simple line icons',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],
                ]
            ],[
                'type' => 'parent-item',
                'text' => 'اطلاع رسانی ها',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'هشدار ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'نشان ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'مدال ها',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ]
                ]
            ],[
                'type' => 'item',
                'text' => 'ویجت ها',
                'route' => 'dashboard',
                'icon' => 'icon-speedometer',
                'label' => [
                    'text' => 'جدید',
                ]
            ],[
                'type' => 'parent-item',
                'text' => 'صفحات',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'ورود',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'ثبت نام',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'خطای 404',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'خطای 500',
                        'route' => 'dashboard',
                        'icon' => 'icon-speedometer',
                    ]
                ]
            ]
        ];

        return response()->json($list_menu);
    }
}
