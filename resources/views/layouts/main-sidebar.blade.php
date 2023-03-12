{{-- <div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.sid')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.title')}} </li>
                    <!-- Grades-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">{{trans('main_trans.Grades')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Grades.index')}}">{{trans('main_trans.Grades_list')}}</a></li>
                        </ul>
                    </li>
                    <!-- classes-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{trans('main_trans.classes')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Classrooms.index')}}">{{trans('My_Classes_trans.List_classes')}}</a></li>
                        </ul>
                    </li>
                    <!-- sections-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                                    class="right-nav-text">{{trans('Sections_trans.title_page')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Sections.index')}}">{{trans('Sections_trans.List_Section')}}</a></li>
                        </ul>
                    </li>
                    <!-- students-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i>{{trans('main_trans.students')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                        <ul id="students-menu" class="collapse">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Student_information">{{trans('main_trans.Student_information')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                <ul id="Student_information" class="collapse">
                                    <li> <a href="{{route('Students.create')}}">{{trans('main_trans.add_student')}}</a></li>
                                    <li> <a href="{{route('Students.index')}}">{{trans('main_trans.list_students')}}</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Students_upgrade">{{trans('main_trans.Students_Promotions')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                <ul id="Students_upgrade" class="collapse">
                                    <li> <a href="{{route('Promotion.index')}}">{{trans('main_trans.add_Promotion')}}</a></li>
                                    <li> <a href="{{route('Promotion.create')}}">{{trans('main_trans.list_Promotions')}}</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Graduate students">{{trans('main_trans.Graduate_students')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                <ul id="Graduate students" class="collapse">
                                    <li> <a href="{{route('Graduated.create')}}">{{trans('main_trans.add_Graduate')}}</a> </li>
                                    <li> <a href="{{route('Graduated.index')}}">{{trans('main_trans.list_Graduate')}}</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <!-- Teachers-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                                    class="right-nav-text">{{trans('main_trans.Teachers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Teachers.index')}}">{{trans('main_trans.List_Teachers')}}</a> </li>
                        </ul>
                    </li>
                    <!-- Parents-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Parents-menu">
                            <div class="pull-left"><i class="fas fa-user-tie"></i><span
                                    class="right-nav-text">{{trans('main_trans.Parents')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Parents-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{url('add_parent')}}">{{trans('main_trans.List_Parents')}}</a> </li>
                        </ul>
                    </li>

                    <!-- Accounts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                            <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                                    class="right-nav-text">{{trans('main_trans.Accounts')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Fees.index')}}">الرسوم الدراسية</a> </li>
                            <li> <a href="{{route('Fees_Invoices.index')}}">الفواتير</a> </li>
                            <li> <a href="{{route('receipt_students.index')}}">سندات القبض</a> </li>
                            <li> <a href="{{route('ProcessingFee.index')}}">استبعاد رسوم</a> </li>
                            <li> <a href="{{route('Payment_students.index')}}">سندت الصرف</a> </li>
                        </ul>
                    </li>
                    <!-- Attendance-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span class="right-nav-text">{{trans('main_trans.Attendance')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Attendance.index')}}">قائمة الطلاب</a> </li>
                        </ul>
                    </li>

                        <!-- Subjects-->
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">المواد الدراسية</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Subjects.index')}}">قائمة المواد</a> </li>
                        </ul>
                    </li>

                    <!-- Exams-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">{{trans('main_trans.Exams')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Exams.index')}}">قائمة الأختبارات</a> </li>
                            <li> <a href="{{route('Questions.index')}}">قائمة الاسئلة</a> </li>
                        </ul>
                    </li>
                    <!-- library-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                            <div class="pull-left"><i class="fas fa-book"></i><span class="right-nav-text">{{trans('main_trans.library')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>
                    <!-- Onlinec lasses-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                            <div class="pull-left"><i class="fas fa-video"></i><span class="right-nav-text">{{trans('main_trans.Onlineclasses')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>
                    <!-- Settings-->
                    <li>
                        <a href="{{route('Settings.index')}}"><i class="fas fa-cogs"></i><span class="right-nav-text">{{trans('main_trans.Settings')}} </span></a>
                    </li>

                @if (auth('web')->check())
                @include('layouts.main-sidebar.admin-main-sidebar')
                @endif
    
                @if (auth('student')->check())
                @include('layouts.main-sidebar.student-main-sidebar')
                @endif
    
                @if (auth('teacher')->check())
                @include('layouts.main-sidebar.teacher-main-sidebar')
                @endif

                    <!-- Users-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                            <div class="pull-left"><i class="fas fa-users"></i><span class="right-nav-text">{{trans('main_trans.Users')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>

                    @if (auth('parent')->check())
                    @include('layouts.main-sidebar.parent-main-sidebar')
                    @endif

                </ul>
            </div>
        </div>
        <!-- Left Sidebar End-->
        <!--================================= --}}

            
<!--=================================
header End--> 

<div class="container-fluid">
<div class="row">
<!-- Left Sidebar start-->
<div class="side-menu-fixed">
<div class="scrollbar side-menu-bg">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">برنامج عبدالوهاب لإدارة المدارس </li>
        <!-- Grades-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                <div class="pull-left"><i class="fas fa-school"></i><span
                        class="right-nav-text">المراحل الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Grades.index')}}">قائمة المراحل الدراسية</a></li>
            </ul>
        </li>
        <!-- classes-->
        <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
            <div class="pull-left"><i class="fa fa-building"></i><span
                    class="right-nav-text">الفصول</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
            <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Classrooms.index')}}">قائمة الصفوف الدراسية</a></li>
            </ul>
        </li>
        <!-- sections-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                        class="right-nav-text">الأقسـام</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Sections.index')}}">قائمة الأقسـام</a></li>
            </ul>
        </li>
        <!-- Teachers-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                        class="right-nav-text">المعلمين</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('Teachers.index')}}">قائمة المعلمين</a> </li>
            </ul>
        </li>
        <!-- Accounts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                        class="right-nav-text">الحسابات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('Fees.index')}}">الرسوم الدراسية</a> </li>
                {{-- <li> <a href="{{route('Fees_Invoices.index')}}">الفواتير</a> </li>
                <li> <a href="{{route('receipt_students.index')}}">سندات القبض</a> </li>
                <li> <a href="{{route('ProcessingFee.index')}}">استبعاد رسوم</a> </li>
                <li> <a href="{{route('Payment_students.index')}}">سندت الصرف</a> </li> --}}
            </ul>
        </li>
        <!-- menu item calendar-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                <div class="pull-left"><i class="ti-calendar"></i><span
                        class="right-nav-text">calendar</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="calendar.html">Events Calendar </a> </li>
                <li> <a href="calendar-list.html">List Calendar</a> </li>
            </ul>
        </li>
        <!-- menu item todo-->
        <li>
            <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo
                    list</span> </a>
        </li>
        <!-- menu item chat-->
        <li>
            <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">Chat
                </span></a>
        </li>
        <!-- menu item mailbox-->
        <li>
            <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail
                    box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
        </li>
        <!-- menu item Charts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                <div class="pull-left"><i class="ti-pie-chart"></i><span
                        class="right-nav-text">Charts</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="chart" class="collapse" data-parent="#sidebarnav">
                <li> <a href="chart-js.html">Chart.js</a> </li>
                <li> <a href="chart-morris.html">Chart morris </a> </li>
                <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>
            </ul>
        </li>

        <!-- menu font icon-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font
                        icon</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                <li> <a href="themify-icons.html">Themify icons</a> </li>
                <li> <a href="weather-icon.html">Weather icons</a> </li>
            </ul>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
        <!-- menu item Widgets-->
        <li>
            <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>
                <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
        </li>
        <!-- menu item Form-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form &
                        Editor</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Form" class="collapse" data-parent="#sidebarnav">
                <li> <a href="editor.html">Editor</a> </li>
                <li> <a href="editor-markdown.html">Editor Markdown</a> </li>
                <li> <a href="form-input.html">Form input</a> </li>
                <li> <a href="form-validation-jquery.html">form validation jquery</a> </li>
                <li> <a href="form-wizard.html">form wizard</a> </li>
                <li> <a href="form-repeater.html">form repeater</a> </li>
                <li> <a href="input-group.html">input group</a> </li>
                <li> <a href="toastr.html">toastr</a> </li>
            </ul>
        </li>
        <!-- menu item table -->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data
                        table</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="table" class="collapse" data-parent="#sidebarnav">
                <li> <a href="data-html-table.html">Data html table</a> </li>
                <li> <a href="data-local.html">Data local</a> </li>
                <li> <a href="data-table.html">Data table</a> </li>
            </ul>
        </li>
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
        <!-- menu item Custom pages-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom
                        pages</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                <li> <a href="projects.html">projects</a> </li>
                <li> <a href="project-summary.html">Projects summary</a> </li>
                <li> <a href="profile.html">profile</a> </li>
                <li> <a href="app-contacts.html">App contacts</a> </li>
                <li> <a href="contacts.html">Contacts</a> </li>
                <li> <a href="file-manager.html">file manager</a> </li>
                <li> <a href="invoice.html">Invoice</a> </li>
                <li> <a href="blank.html">Blank page</a> </li>
                <li> <a href="layout-container.html">layout container</a> </li>
                <li> <a href="error.html">Error</a> </li>
                <li> <a href="faqs.html">faqs</a> </li>
            </ul>
        </li>
        <!-- menu item Authentication-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                <div class="pull-left"><i class="ti-id-badge"></i><span
                        class="right-nav-text">Authentication</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                <li> <a href="login.html">login</a> </li>
                <li> <a href="register.html">register</a> </li>
                <li> <a href="lockscreen.html">Lock screen</a> </li>
            </ul>
        </li>
        <!-- menu item maps-->
        <li>
            <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span>
                <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
        </li>
        <!-- menu item timeline-->
        <li>
            <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span>
            </a>
        </li>
        <!-- menu item Multi level-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi
                        level Menu</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level
                        item 1<div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="auth" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level
                                item 1.1<div class="pull-right"><i class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="login" class="collapse">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#invoice">level item 1.1.1<div class="pull-right"><i
                                                class="ti-plus"></i></div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <ul id="invoice" class="collapse">
                                        <li> <a href="#">level item 1.1.1.1</a> </li>
                                        <li> <a href="#">level item 1.1.1.2</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="#">level item 1.2</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level
                        item 2<div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="error" class="collapse">
                        <li> <a href="#">level item 2.1</a> </li>
                        <li> <a href="#">level item 2.2</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
</div>

<!-- Left Sidebar End-->

<!--=================================
