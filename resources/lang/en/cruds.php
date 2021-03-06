<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'User Name',
            'name_helper'              => 'Enter a user name (Min 6 characters)',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'school_name'              => 'School',
            'school_name_helper'       => 'Please select user\'s school',
            'team'                     => 'Team',
            'team_helper'              => '',
            'approved'                 => 'Approved',
            'approved_helper'          => '',
            'surname'                  => 'Surname',
            'surname_helper'           => '',
        ],
    ],
    'schoolLevel'       => [
        'title'          => 'Institution Level',
        'title_singular' => 'Institution Level',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'stage_name'        => 'Stage Name',
            'stage_name_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'school'            => [
        'title'          => 'School',
        'title_singular' => 'School',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'school_name'        => 'School Name',
            'school_name_helper' => 'enter the name of the school',
            'sub_county'         => 'Sub County',
            'sub_county_helper'  => 'Select the sub county of the school',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'level'              => 'Institution Level',
            'level_helper'       => '',
            'team'               => 'Team',
            'team_helper'        => '',
        ],
    ],
    'streamManagement'  => [
        'title'          => 'Stream Management',
        'title_singular' => 'Stream Management',
    ],
    'darasa'            => [
        'title'          => 'Class',
        'title_singular' => 'Class',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'class_name'        => 'Class Name',
            'class_name_helper' => 'Please Enter the class name',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
            'streams'           => 'Streams',
            'streams_helper'    => 'Select all streams for this class',
        ],
    ],
    'stream'            => [
        'title'          => 'Stream',
        'title_singular' => 'Stream',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'class_name'        => 'Stream Name',
            'class_name_helper' => 'Please enter the stream name',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
        ],
    ],
    'subject'           => [
        'title'          => 'Subjects',
        'title_singular' => 'Subject',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'subject_name'            => 'Subject Name',
            'subject_name_helper'     => 'Please enter the name of the subject.',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'subject_teachers'        => 'Subject Teachers',
            'subject_teachers_helper' => 'Select all the subject teachers',
            'team'                    => 'Team',
            'team_helper'             => '',
        ],
    ],
    'student'           => [
        'title'          => 'Students',
        'title_singular' => 'Student',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => '',
            'admission_number'              => 'Admission Number',
            'admission_number_helper'       => 'Please enter the student\'s admission number',
            'first_name'                    => 'First Name',
            'first_name_helper'             => 'Please enter the First Name of the student.',
            'last_name'                     => 'Last Name',
            'last_name_helper'              => 'Please enter the last name of the student.',
            'class'                         => 'Class',
            'class_helper'                  => '',
            'guardians_name'                => 'Guardians Name',
            'guardians_name_helper'         => 'Please enter the student guardian\'s name',
            'guardians_phone_no'            => 'Guardians Phone No',
            'guardians_phone_no_helper'     => 'Please enter the student guardian\'s phone number',
            'created_at'                    => 'Created at',
            'created_at_helper'             => '',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => '',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => '',
            'guardians_email'               => 'Guardians Email',
            'guardians_email_helper'        => 'Please enter the student guardian\'s email',
            'stream'                        => 'Stream',
            'stream_helper'                 => 'Please select stream',
            'team'                          => 'Team',
            'team_helper'                   => '',
            'mathematics'                   => 'Mathematics',
            'mathematics_helper'            => '',
            'english'                       => 'English',
            'english_helper'                => '',
            'kiswahili'                     => 'Kiswahili',
            'kiswahili_helper'              => '',
            'chemestry'                     => 'Chemestry',
            'chemestry_helper'              => '',
            'biology'                       => 'Biology',
            'biology_helper'                => '',
            'physics'                       => 'Physics',
            'physics_helper'                => '',
            'history_and_government'        => 'History And Government',
            'history_and_government_helper' => '',
            'geography'                     => 'Geography',
            'geography_helper'              => '',
            'religious_education'           => 'Religious Education',
            'religious_education_helper'    => '',
            'agriculture'                   => 'Agriculture',
            'agriculture_helper'            => '',
            'business_studies'              => 'Business Studies',
            'business_studies_helper'       => '',
            'computer_science'              => 'Computer Science',
            'computer_science_helper'       => '',
            'art_and_design'                => 'Art and Design',
            'art_and_design_helper'         => '',
            'home_science'                  => 'Home Science',
            'home_science_helper'           => '',
            'aviation'                      => 'Aviation',
            'aviation_helper'               => '',
            'french'                        => 'French',
            'french_helper'                 => '',
            'german'                        => 'German',
            'german_helper'                 => '',
            'arabic'                        => 'Arabic',
            'arabic_helper'                 => '',
            'music'                         => 'Music',
            'music_helper'                  => '',
        ],
    ],
    'examManagement'    => [
        'title'          => 'Exam Management',
        'title_singular' => 'Exam Management',
    ],
    'exam'              => [
        'title'          => 'Exams',
        'title_singular' => 'Exam',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'exam_name'         => 'Exam Name',
            'exam_name_helper'  => 'Hint: End Term 1 Exam 2019',
            'exam_code'         => 'Exam Code',
            'exam_code_helper'  => 'E1219 (Exam 1 term 2 year 2019)',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'start_date'        => 'Start Date',
            'start_date_helper' => '',
            'end_date'          => 'End Date',
            'end_date_helper'   => '',
            'team'              => 'Team',
            'team_helper'       => '',
            'classes'           => 'Classes',
            'classes_helper'    => '',
        ],
    ],
    'mark'              => [
        'title'          => 'Marks',
        'title_singular' => 'Mark',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
            'adm_no'            => 'Adm No',
            'adm_no_helper'     => '',
        ],
    ],
    'broadSheet'        => [
        'title'          => 'Broad Sheet',
        'title_singular' => 'Broad Sheet',
    ],
    'streamPerformance' => [
        'title'          => 'Stream Performance',
        'title_singular' => 'Stream Performance',
    ],
    'team'              => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
            'name'              => 'Name',
            'name_helper'       => '',
        ],
    ],
    'result'            => [
        'title'          => 'Results',
        'title_singular' => 'Result',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'student'           => 'Admission Number',
            'student_helper'    => '',
            'exam'              => 'Exam',
            'exam_helper'       => '',
            'mean'              => 'Mean',
            'mean_helper'       => '',
            'grade'             => 'Grade',
            'grade_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'team'              => 'Team',
            'team_helper'       => '',
            'class'             => 'Class',
            'class_helper'      => '',
            'rank'              => 'Rank',
            'rank_helper'       => '',
        ],
    ],
    'report'            => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
    ],
];
