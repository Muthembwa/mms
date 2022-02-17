<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('school_level_access')
                            <li class="{{ request()->is('admin/school-levels') || request()->is('admin/school-levels/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.school-levels.index") }}">
                                    <i class="fa-fw fas fa-level-up-alt">

                                    </i>
                                    <span>{{ trans('cruds.schoolLevel.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('school_access')
                            <li class="{{ request()->is('admin/schools') || request()->is('admin/schools/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.schools.index") }}">
                                    <i class="fa-fw fab fa-houzz">

                                    </i>
                                    <span>{{ trans('cruds.school.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('team_access')
                            <li class="{{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.teams.index") }}">
                                    <i class="fa-fw fas fa-users">

                                    </i>
                                    <span>{{ trans('cruds.team.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('stream_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-chalkboard-teacher">

                        </i>
                        <span>{{ trans('cruds.streamManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('stream_access')
                            <li class="{{ request()->is('admin/streams') || request()->is('admin/streams/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.streams.index") }}">
                                    <i class="fa-fw fas fa-chalkboard-teacher">

                                    </i>
                                    <span>{{ trans('cruds.stream.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('darasa_access')
                            <li class="{{ request()->is('admin/darasas') || request()->is('admin/darasas/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.darasas.index") }}">
                                    <i class="fa-fw fas fa-home">

                                    </i>
                                    <span>{{ trans('cruds.darasa.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('subject_access')
                            <li class="{{ request()->is('admin/subjects') || request()->is('admin/subjects/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.subjects.index") }}">
                                    <i class="fa-fw fas fa-book-open">

                                    </i>
                                    <span>{{ trans('cruds.subject.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('student_access')
                            <li class="{{ request()->is('admin/students') || request()->is('admin/students/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.students.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.student.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('exam_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-angle-double-down">

                        </i>
                        <span>{{ trans('cruds.examManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('exam_access')
                            <li class="{{ request()->is('admin/exams') || request()->is('admin/exams/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.exams.index") }}">
                                    <i class="fa-fw fas fa-book">

                                    </i>
                                    <span>{{ trans('cruds.exam.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('mark_access')
                            <li class="{{ request()->is('admin/marks') || request()->is('admin/marks/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.marks.index") }}">
                                    <i class="fa-fw fas fa-marker">

                                    </i>
                                    <span>{{ trans('cruds.mark.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('result_access')
                            <li class="{{ request()->is('admin/results') || request()->is('admin/results/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.results.index") }}">
                                    <i class="fa-fw far fa-file">

                                    </i>
                                    <span>{{ trans('cruds.result.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('broad_sheet_access')
                            <li class="{{ request()->is('admin/broad-sheets') || request()->is('admin/broad-sheets/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.broad-sheets.index") }}">
                                    <i class="fa-fw fas fa-align-justify">

                                    </i>
                                    <span>{{ trans('cruds.broadSheet.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('stream_performance_access')
                            <li class="{{ request()->is('admin/stream-performances') || request()->is('admin/stream-performances/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.stream-performances.index") }}">
                                    <i class="fa-fw fas fa-check-double">

                                    </i>
                                    <span>{{ trans('cruds.streamPerformance.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>