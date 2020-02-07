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
                'text' => ' کامپوننت های پایه',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'نشانگر صفحات',
                        'route' => 'users',
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
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'باز و بسته شونده',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'فرم ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'جامبوترون',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'لیست ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                    [
                        'type' => 'item',
                        'text' => 'ناوبری',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ], [
                        'type' => 'item',
                        'text' => 'صفحه بندی',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تولتیپ',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'پروگرس بار',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'سویچ',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'جدول ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تب ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'تولتیپ ها ۲',
                        'route' => 'users',
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
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'دکمه های گروهی',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'دراپ دان ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'شبکه های اجتماعی',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],
                ]
            ],[
                'type' => 'item',
                'text' => 'چارت ها',
                'route' => 'users',
                'icon' => 'icon-speedometer',
            ],[
                'type' => 'parent-item',
                'text' => 'ایکن ها',
                'icon' => 'icon-speedometer',
                'items' => [
                    [
                        'type' => 'item',
                        'text' => 'پرچم ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'font awesome',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'simple line icons',
                        'route' => 'users',
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
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'نشان ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'مدال ها',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ]
                ]
            ],[
                'type' => 'item',
                'text' => 'ویجت ها',
                'route' => 'users',
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
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'ثبت نام',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'خطای 404',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ],[
                        'type' => 'item',
                        'text' => 'خطای 500',
                        'route' => 'users',
                        'icon' => 'icon-speedometer',
                    ]
                ]
            ]
        ];

        return response()->json($list_menu);
    }
}
