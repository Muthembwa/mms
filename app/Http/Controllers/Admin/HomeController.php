<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Exams Done',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Exam',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
        ];

        $settings1['total_number'] = $settings1['model']::when(isset($settings1['filter_field']), function ($query) use ($settings1) {
            if (isset($settings1['filter_days'])) {
                return $query->where(
                    $settings1['filter_field'],
                    '>=',
                    now()->subDays($settings1['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings1['filter_period'])) {
                switch ($settings1['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings1['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings1['aggregate_function'] ?? 'count'}($settings1['aggregate_field'] ?? '*');

        $settings2 = [
            'chart_title'           => 'No. of Classes',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Darasa',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
        ];

        $settings2['total_number'] = $settings2['model']::when(isset($settings2['filter_field']), function ($query) use ($settings2) {
            if (isset($settings2['filter_days'])) {
                return $query->where(
                    $settings2['filter_field'],
                    '>=',
                    now()->subDays($settings2['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings2['filter_period'])) {
                switch ($settings2['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings2['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings2['aggregate_function'] ?? 'count'}($settings2['aggregate_field'] ?? '*');

        $settings3 = [
            'chart_title'           => 'No. of Students',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Student',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
        ];

        $settings3['total_number'] = $settings3['model']::when(isset($settings3['filter_field']), function ($query) use ($settings3) {
            if (isset($settings3['filter_days'])) {
                return $query->where(
                    $settings3['filter_field'],
                    '>=',
                    now()->subDays($settings3['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings3['filter_period'])) {
                switch ($settings3['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings3['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings3['aggregate_function'] ?? 'count'}($settings3['aggregate_field'] ?? '*');

        $settings4 = [
            'chart_title'           => 'No. of Exam Subjects',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Subject',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
        ];

        $settings4['total_number'] = $settings4['model']::when(isset($settings4['filter_field']), function ($query) use ($settings4) {
            if (isset($settings4['filter_days'])) {
                return $query->where(
                    $settings4['filter_field'],
                    '>=',
                    now()->subDays($settings4['filter_days'])->format('Y-m-d')
                );
            } else if (isset($settings4['filter_period'])) {
                switch ($settings4['filter_period']) {
                    case 'week':
                        $start  = date('Y-m-d', strtotime('last Monday'));
                        break;
                    case 'month':
                        $start = date('Y-m') . '-01';
                        break;
                    case 'year':
                        $start  = date('Y') . '-01-01';
                        break;
                }

                if (isset($start)) {
                    return $query->where($settings4['filter_field'], '>=', $start);
                }
            }
        })
            ->{$settings4['aggregate_function'] ?? 'count'}($settings4['aggregate_field'] ?? '*');

        $settings5 = [
            'chart_title'           => 'New Students This Year',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Student',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                '0' => 'admission_number',
                '1' => 'first_name',
                '2' => 'class',
                '3' => 'guardians_name',
                '4' => 'guardians_phone_no',
            ],
        ];

        $settings5['data'] = [];

        if (class_exists($settings5['model'])) {
            $settings5['data'] = $settings5['model']::latest()
                ->take($settings5['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings5)) {
            $settings5['fields'] = [];
        }

        $settings6 = [
            'chart_title'           => 'Top Ten Scores this Year',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Result',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '10',
            'fields'                => [
                '0' => 'student',
                '1' => 'exam',
                '2' => 'mean',
                '3' => 'grade',
                '4' => 'class',
            ],
        ];

        $settings6['data'] = [];

        if (class_exists($settings6['model'])) {
            $settings6['data'] = $settings6['model']::latest()
                ->take($settings6['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings6)) {
            $settings6['fields'] = [];
        }

        return view('home', compact('settings1', 'settings2', 'settings3', 'settings4', 'settings5', 'settings6'));
    }
}
