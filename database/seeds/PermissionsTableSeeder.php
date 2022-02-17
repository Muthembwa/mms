<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'school_level_create',
            ],
            [
                'id'    => '18',
                'title' => 'school_level_edit',
            ],
            [
                'id'    => '19',
                'title' => 'school_level_show',
            ],
            [
                'id'    => '20',
                'title' => 'school_level_delete',
            ],
            [
                'id'    => '21',
                'title' => 'school_level_access',
            ],
            [
                'id'    => '22',
                'title' => 'school_create',
            ],
            [
                'id'    => '23',
                'title' => 'school_edit',
            ],
            [
                'id'    => '24',
                'title' => 'school_show',
            ],
            [
                'id'    => '25',
                'title' => 'school_delete',
            ],
            [
                'id'    => '26',
                'title' => 'school_access',
            ],
            [
                'id'    => '27',
                'title' => 'stream_management_access',
            ],
            [
                'id'    => '28',
                'title' => 'darasa_create',
            ],
            [
                'id'    => '29',
                'title' => 'darasa_edit',
            ],
            [
                'id'    => '30',
                'title' => 'darasa_show',
            ],
            [
                'id'    => '31',
                'title' => 'darasa_delete',
            ],
            [
                'id'    => '32',
                'title' => 'darasa_access',
            ],
            [
                'id'    => '33',
                'title' => 'stream_create',
            ],
            [
                'id'    => '34',
                'title' => 'stream_edit',
            ],
            [
                'id'    => '35',
                'title' => 'stream_show',
            ],
            [
                'id'    => '36',
                'title' => 'stream_delete',
            ],
            [
                'id'    => '37',
                'title' => 'stream_access',
            ],
            [
                'id'    => '38',
                'title' => 'subject_create',
            ],
            [
                'id'    => '39',
                'title' => 'subject_edit',
            ],
            [
                'id'    => '40',
                'title' => 'subject_show',
            ],
            [
                'id'    => '41',
                'title' => 'subject_delete',
            ],
            [
                'id'    => '42',
                'title' => 'subject_access',
            ],
            [
                'id'    => '43',
                'title' => 'student_create',
            ],
            [
                'id'    => '44',
                'title' => 'student_edit',
            ],
            [
                'id'    => '45',
                'title' => 'student_show',
            ],
            [
                'id'    => '46',
                'title' => 'student_delete',
            ],
            [
                'id'    => '47',
                'title' => 'student_access',
            ],
            [
                'id'    => '48',
                'title' => 'exam_management_access',
            ],
            [
                'id'    => '49',
                'title' => 'exam_create',
            ],
            [
                'id'    => '50',
                'title' => 'exam_edit',
            ],
            [
                'id'    => '51',
                'title' => 'exam_show',
            ],
            [
                'id'    => '52',
                'title' => 'exam_delete',
            ],
            [
                'id'    => '53',
                'title' => 'exam_access',
            ],
            [
                'id'    => '54',
                'title' => 'mark_create',
            ],
            [
                'id'    => '55',
                'title' => 'mark_edit',
            ],
            [
                'id'    => '56',
                'title' => 'mark_show',
            ],
            [
                'id'    => '57',
                'title' => 'mark_delete',
            ],
            [
                'id'    => '58',
                'title' => 'mark_access',
            ],
            [
                'id'    => '59',
                'title' => 'broad_sheet_access',
            ],
            [
                'id'    => '60',
                'title' => 'stream_performance_access',
            ],
            [
                'id'    => '61',
                'title' => 'team_create',
            ],
            [
                'id'    => '62',
                'title' => 'team_edit',
            ],
            [
                'id'    => '63',
                'title' => 'team_show',
            ],
            [
                'id'    => '64',
                'title' => 'team_delete',
            ],
            [
                'id'    => '65',
                'title' => 'team_access',
            ],
            [
                'id'    => '66',
                'title' => 'result_create',
            ],
            [
                'id'    => '67',
                'title' => 'result_edit',
            ],
            [
                'id'    => '68',
                'title' => 'result_show',
            ],
            [
                'id'    => '69',
                'title' => 'result_delete',
            ],
            [
                'id'    => '70',
                'title' => 'result_access',
            ],
            [
                'id'    => '71',
                'title' => 'report_access',
            ],
            [
                'id'    => '72',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);

    }
}
