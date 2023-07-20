<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'اعدادات  المستخدمين',
            'التعديل على المنتجات',
            'التعديل على الاقسام',
            'قسم الطلبات',
            'قسم الحسوم',
            'اعدادت الطالب',
            'اعدادات الشركة',
'صفحة الادمن'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
