@extends('layout.app')

@section('title','Dashboard')


@section('content')
<div class="wrapper">
    <div class="iq-sidebar  sidebar-default  ">
        <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
             <a href="../backend/index.html" class="header-logo">
                {{-- <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo"> --}}
                <span>Zigmawave</span>            
            </a>
            <div class="side-menu-bt-sidebar-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="side-menu">
                    <li class="active sidebar-layout">
                        <a href="{{route('dashboard')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </i>
                            <span class="ml-2">Dashboard</span>
                            
                        </a>
                    </li>
                    <li class="px-3 pt-3 pb-2">
                        <span class="text-uppercase small font-weight-bold">Pages</span>
                    </li>
                     <li class=" sidebar-layout">
                        <a href="{{route('user-profile')}}" class="svg-icon">
                            <i class="">
                                <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </i><span class="ml-2">User Profile</span>
                        </a>
                    </li>

                    <li class=" sidebar-layout">
                        <a href="{{route('project')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                            </i><span class="ml-2">Projects</span>
                        </a>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="{{route('employee')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </i><span class="ml-2">Employee</span>
                        </a>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="{{route('task')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </i><span class="ml-2">Tasks</span>
                        </a>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="{{route('customers')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                  </svg>                                  
                            </i><span class="ml-2">Customer</span>
                        </a>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="{{route('accounting')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </i><span class="ml-2">Accounting</span>
                        </a>
                    </li>
                     <li class=" sidebar-layout">
                        <a href="{{route('activity')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </i><span class="ml-2">Activities</span>
                        </a>
                    </li>

                    <li class=" sidebar-layout">
                        <a href="{{route('role-manager')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                  </svg>                                  
                            </i><span class="ml-2">Role Manager</span>
                        </a>
                    </li>

                    <li class=" sidebar-layout">
                        <a href="{{route('reports')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                  </svg>                                  
                            </i><span class="ml-2">Reports</span>
                        </a>
                    </li>

                    <li class=" sidebar-layout">
                        <a href="{{route('leave')}}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </i><span class="ml-2">Leave</span>
                        </a>
                    </li>
            </nav>
            <div class="pt-5 pb-5"></div>
        </div>
    </div>
     <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="side-menu-bt-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item nav-icon dropdown"> 
                                <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                    <div class="card shadow-none m-0 border-0">
                                        <div class="p-3 card-header-border">
                                            <h6 class="text-center">
                                                Notifications
                                            </h6>
                                        </div>
                                        <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">                                        
                                            <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                <li class="dropdown-item-1 float-none p-3">
                                                    <div class="list-item d-flex justify-content-start align-items-start">
                                                        <div class="avatar">
                                                            <div class="avatar-img avatar-danger avatar-20">
                                                                <span>
                                                                    <svg class="icon line" width="30" height="30" id="cart-alt1" stroke="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3,3H5.32a1,1,0,0,1,.93.63L10,13,8.72,15.55A1,1,0,0,0,9.62,17H19" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><polyline points="10 13 18.2 13 21 6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><line x1="20.8" y1="6" x2="7.2" y2="6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line><circle cx="10.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle><circle cx="16.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle></svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-style-detail ml-2 mr-2">
                                                            <h6 class="font-weight-bold">Your order is placed</h6>
                                                            <p class="m-0">
                                                                <small class="text-secondary">If several languages coalesce</small>
                                                            </p>
                                                            <p class="m-0">
                                                                <small class="text-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                3 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div>                                                
                                                </li>
                                                 <li class="dropdown-item-1 float-none p-3">
                                                     <div class="list-item d-flex justify-content-start align-items-start">
                                                         <div class="avatar">
                                                            <div class="avatar-img avatar-success avatar-20">
                                                                <span><img class="avatar is-squared rounded-circle" src="../assets/images/user/2.jpg" alt="2.jpg"></span>
                                                            </div>
                                                        </div>
                                                        <div class="list-style-detail ml-2 mr-2">
                                                            <h6 class="font-weight-bold">New message form cate</h6>
                                                            <p class="m-0">
                                                                <small class="text-secondary">You have 3 unreded messages</small>
                                                            </p>
                                                            <p class="m-0">
                                                                <small class="text-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    5 hours ago</small>
                                                            </p>
                                                        </div>
                                                     </div>                                                
                                                </li>
                                                 <li class="dropdown-item-1 float-none p-3">
                                                     <div class="list-item d-flex justify-content-start align-items-start">
                                                         <div class="avatar">
                                                            <div class="avatar-img avatar-warning avatar-20">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" stroke="white" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <g>
                                                                    <g>
                                                                        <path d="M386.689,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538    c35.593,0,64.538-28.951,64.538-64.538S422.276,304.403,386.689,304.403z M386.689,401.21c-17.796,0-32.269-14.473-32.269-32.269    c0-17.796,14.473-32.269,32.269-32.269c17.796,0,32.269,14.473,32.269,32.269C418.958,386.738,404.485,401.21,386.689,401.21z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M166.185,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538s64.538-28.951,64.538-64.538    S201.772,304.403,166.185,304.403z M166.185,401.21c-17.796,0-32.269-14.473-32.269-32.269c0-17.796,14.473-32.269,32.269-32.269    c17.791,0,32.269,14.473,32.269,32.269C198.454,386.738,183.981,401.21,166.185,401.21z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M430.15,119.675c-2.743-5.448-8.32-8.885-14.419-8.885h-84.975v32.269h75.025l43.934,87.384l28.838-14.5L430.15,119.675z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="216.202" y="353.345" width="122.084" height="32.269"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M117.781,353.345H61.849c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h55.933    c8.912,0,16.134-7.223,16.134-16.134C133.916,360.567,126.693,353.345,117.781,353.345z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M508.612,254.709l-31.736-40.874c-3.049-3.937-7.755-6.239-12.741-6.239H346.891V94.655    c0-8.912-7.223-16.134-16.134-16.134H61.849c-8.912,0-16.134,7.223-16.134,16.134s7.223,16.134,16.134,16.134h252.773v112.941    c0,8.912,7.223,16.134,16.134,16.134h125.478l23.497,30.268v83.211h-44.639c-8.912,0-16.134,7.223-16.134,16.134    c0,8.912,7.223,16.134,16.134,16.134h60.773c8.912,0,16.134-7.223,16.135-16.134V264.605    C512,261.023,510.806,257.538,508.612,254.709z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M116.706,271.597H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h74.218    c8.912,0,16.134-7.223,16.134-16.134C132.84,278.82,125.617,271.597,116.706,271.597z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M153.815,208.134H16.134C7.223,208.134,0,215.357,0,224.269s7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134S162.727,208.134,153.815,208.134z"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M180.168,144.672H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134C196.303,151.895,189.08,144.672,180.168,144.672z"/>
                                                                    </g>
                                                                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g> </svg>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        <div class="list-style-detail ml-2 mr-2">
                                                            <h6 class="font-weight-bold">Your item is shipped</h6>
                                                            <p class="m-0">
                                                                <small class="text-secondary">You got new order of goods</small>
                                                            </p>
                                                            <p class="m-0">
                                                                <small class="text-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    5 hours ago</small>
                                                            </p>
                                                        </div>
                                                     </div>                                                
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-muted p-3">
                                            <p class="mb-0 text-primary text-center font-weight-bold">Show all notifications</p>
                                        </div>
                                    </div>
                                </div>
                            </li>                        
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                        <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                        <a href="#" class="search-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </a> 
                                        </div>
                                    </form>
                                </div>
                            </li>
                            
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <img src="../assets/images/user/1.jpg" class="img-fluid avatar-rounded" alt="user">
                                    <span class="mb-0 ml-2 user-name">John Doe</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="{{route('user-profile')}}">My Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <a href="{{route('edit-user-profile')}}">Edit Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-secondary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <a href="#">Account Settings</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <a href="#">Privacy Settings</a>
                                    </li>
                                    <li class="dropdown-item  d-flex svg-icon border-top">
                                        <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>                     
                    </div> 
                </div>
            </nav>
        </div>
    </div>
    <div class="content-page">
<div class="container-fluid">
 <div class="row">
    <div class="col-md-12 mb-4 mt-1">
       <div class="d-flex flex-wrap justify-content-between align-items-center">
           <h4 class="font-weight-bold">Overview</h4>
           <div class="form-group mb-0 vanila-daterangepicker d-flex flex-row">
                <div class="date-icon-set">
                   <input type="text" name="start" class="form-control" placeholder="From Date">
                   <span class="search-link">
                      <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                   </span>
                </div>                  
                   <span class="flex-grow-0">
                   <span class="btn">To</span>
                </span>
                <div class="date-icon-set">
                   <input type="text" name="end" class="form-control" placeholder="To Date">
                   <span class="search-link">
                      <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                   </span>
                </div>                  
          </div>
       </div>
    </div>
    <div class="col-lg-8 col-md-12">
       <div class="row">
          <div class="col-md-4">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                      <div class="">
                          <p class="mb-2 text-secondary">Total Profit</p>
                          <div class="d-flex flex-wrap justify-content-start align-items-center">
                             <h5 class="mb-0 font-weight-bold">$95,595</h5>
                             <p class="mb-0 ml-3 text-success font-weight-bold">+3.55%</p>
                          </div>                            
                      </div>
                   </div>
                </div>
             </div>   
          </div>
          <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex align-items-center">
                      <div class="">
                          <p class="mb-2 text-secondary">Total Expenses</p>
                          <div class="d-flex flex-wrap justify-content-start align-items-center">
                             <h5 class="mb-0 font-weight-bold">$12,789</h5>
                             <p class="mb-0 ml-3 text-success font-weight-bold">+2.67%</p>
                          </div>                            
                      </div>
                  </div>
              </div>
          </div>   
          </div>
          <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex align-items-center">
                      <div class="">
                         <p class="mb-2 text-secondary">New Users</p>
                         <div class="d-flex flex-wrap justify-content-start align-items-center">
                            <h5 class="mb-0 font-weight-bold">13,984</h5>
                            <p class="mb-0 ml-3 text-danger font-weight-bold">-9.98%</p>
                         </div>                            
                      </div>
                  </div>
              </div>
          </div>   
          </div>
          <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                   <h4 class="font-weight-bold">Sales Report</h4>
                   <div class="d-flex justify-content-between align-items-center">
                      <div><svg width="24" height="24" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" fill="#3378FF" />
                            </svg>
                         <span>Incomes</span>
                      </div>
                      <div class="ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="18" height="18" rx="2" fill="#19b3b3" />
                                        </svg>
                         <span>Expenses</span>
                      </div>
                   </div>
                </div>
                 <div id="chart-apex-column-01" class="custom-chart"></div>
              </div>
          </div>   
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-8">
       <div class="card card-block card-stretch card-height">
          <div class="card-header card-header-border d-flex justify-content-between">
             <div class="header-title">
                <h4 class="card-title">Top Selling Product</h4>
             </div>
          </div>
          <div class="card-body-list">               
             <ul class="list-style-3 mb-0">
                <li class="p-3 list-item d-flex justify-content-start align-items-center">
                   <div class="avatar">
                      <img class="avatar avatar-img avatar-60 rounded" src="../assets/images/products/1.jpg" alt="1.jpg">                        
                   </div>
                   <div class="list-style-detail ml-3 mr-2">
                      <p class="mb-0">Rockerz Bluetooth Headset</p>
                   </div>
                   <div class="list-style-action d-flex justify-content-end ml-auto">                        
                      <h6 class="font-weight-bold">$1,056</h6>                        
                   </div>
                </li>
                <li class="p-3 list-item d-flex justify-content-start align-items-center">
                   <div class="avatar">
                      <img class="avatar avatar-img avatar-60 rounded" src="../assets/images/products/2.jpg" alt="2.jpg">                        
                   </div>
                   <div class="list-style-detail ml-3 mr-2">
                      <p class="mb-0">Wifi Security Camera</p>
                   </div>
                   <div class="list-style-action d-flex justify-content-end ml-auto">                        
                      <h6 class="font-weight-bold">$1,799</h6>                        
                   </div>
                </li>
                <li class="p-3 list-item d-flex justify-content-start align-items-center">
                   <div class="avatar">
                      <img class="avatar avatar-img avatar-60 rounded" src="../assets/images/products/13.jpg" alt="3.jpg">                        
                   </div>
                   <div class="list-style-detail ml-3 mr-2">
                      <p class="mb-0">Stone Bluetooth Speaker</p>
                   </div>
                   <div class="list-style-action d-flex justify-content-end ml-auto">                        
                      <h6 class="font-weight-bold">$1,099</h6>                        
                   </div>
                </li>
                <li class="p-3 list-item d-flex justify-content-start align-items-center">
                   <div class="avatar">
                      <img class="avatar avatar-img avatar-60 rounded" src="../assets/images/products/4.jpg" alt="4.jpg">                        
                   </div>
                   <div class="list-style-detail ml-3 mr-2">
                      <p class="mb-0">Ryzen 5 Hexa Core 5600H</p>
                   </div>
                   <div class="list-style-action d-flex justify-content-end ml-auto">                        
                      <h6 class="font-weight-bold">$9,999</h6>                        
                   </div>
                </li>
             </ul>
          </div>
       </div>
       
    </div>
    <div class="col-md-4">
       <div class="row">
          <div class="col-md-12">
             <div class="card bg-primary">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div class="fit-icon-2 text-info text-center">
                             <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-light" data-min-value="0" data-max-value="100" data-value="62" data-type="percent"></div>
                         </div>
                         <div class="ml-3">
                             <h5 class="text-white font-weight-bold">1,860 <small> /3k Target</small></h5>
                             <small class="mb-0">Order In Period</small>
                         </div>
                     </div>
                 </div>
             </div>
          </div>
          <div class="col-md-12">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                      <h6 class="font-weight-bold">Active Users</h6>
                      <div class="d-flex align-items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                         </svg>
                         <span class=" font-weight-bold">200</span>
                      </div>
                   </div>
                   <p class="mb-0">Pages views per day</p>
                   <div id="chart-apex-column-02" class="custom-chart"></div>
                   <div class="d-flex justify-content-between align-items-center">
                      <p class="mb-0 pt-3 ">25 June</p>
                      <p class="mb-0 pt-3 ">26 June</p>
                      <p class="mb-0 pt-3 ">27 June</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-6">
       <div class="card card-block card-stretch card-height">
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
                <h4 class="card-title">Upcoming Events</h4>
             </div>
             <div class="card-header-toolbar d-flex align-items-center">                  
                <div class="dropdown">
                      <a href="#" class="text-muted pl-3" id="dropdownMenuButton-event" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                               <circle cx="12" cy="12" r="1"/>
                               <circle cx="19" cy="12" r="1"/>
                               <circle cx="5" cy="12" r="1"/></g>
                         </svg>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-event">
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                               </svg>
                               Edit
                         </a>
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                               </svg>
                               View
                         </a>
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                               </svg>
                               Delete
                         </a>
                      </div>
                   </div>
             </div>
          </div>
          <div class="card-body p-0">
             <div class="table-responsive">
                <table class="table table-spacing mb-0">
                   <tbody>
                      <tr class="white-space-no-wrap">
                         <td>
                            <h6 class="mb-0 text-uppercase text-secondary">
                               <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                               </svg>
                               30 Jun, Tue</h6>
                         </td>
                         <td class="pl-0 py-3">
                         Big Billion Day Sale
                         </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>
                            <h6 class="mb-0 text-uppercase text-secondary">
                               <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                               </svg>
                               09 July, Mon</h6>
                         </td>
                         <td class="pl-0 py-3">
                            5% Off on Mobile
                         </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>
                            <h6 class="mb-0 text-uppercase text-secondary">
                               <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                               </svg>
                               15 Aug, Sun</h6>
                         </td>
                         <td class="pl-0 py-3">
                         Electronics Sale 
                         </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>
                            <h6 class="mb-0 text-uppercase text-secondary">
                               <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                               </svg>
                               26 Oct, Thu</h6>
                         </td>
                         <td class="pl-0 py-3">
                         Fashionable Sale
                         </td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>
                            <h6 class="mb-0 text-uppercase text-secondary">
                               <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                               </svg>
                               25 Dec, Fri</h6>
                         </td>
                         <td  class="pl-0 py-3">
                            5% Off on Cloths
                         </td>
                      </tr>                        
                   </tbody>
                </table>
                
             </div>
             <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                   <button class="btn btn-secondary btn-sm">See All</button>
                </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-6">
       <div class="card">
          <div class="card-body">
             <h4 class="font-weight-bold mb-3">Popular Categories</h4>
             <div id="chart-apex-column-03" class="custom-chart"></div>
             <div class="d-flex justify-content-around align-items-center">
                <div><svg width="24" height="24" viewBox="0 0 24 24" fill="#ffbb33" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="3" width="18" height="18" rx="2" fill="#ffbb33" />
                      </svg>
                      
                      <span>Mobile</span>
                </div>
                <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="#e60000" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="3" width="18" height="18" rx="2" fill="#e60000" />
                      </svg>
                      
                      <span>Laptop</span>
                </div>
             </div>
             <div class="d-flex justify-content-around align-items-center mt-3">
                <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="3" width="18" height="18" rx="2" fill="#04237D" />
                      </svg>
                      
                      <span>Electronics</span>
                </div>
                <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="3" width="18" height="18" rx="2" fill="#8080ff" />
                      </svg>
                      
                      <span>Others</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-8 col-md-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
                <h4 class="card-title">New Customer</h4>
             </div>
             <div class="card-header-toolbar d-flex align-items-center">                  
                <div class="dropdown">
                      <a href="#" class="text-muted pl-3" id="dropdownMenuButton-customer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                               <circle cx="12" cy="12" r="1"/>
                               <circle cx="19" cy="12" r="1"/>
                               <circle cx="5" cy="12" r="1"/></g>
                         </svg>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-customer">
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                               </svg>
                               Edit
                         </a>
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                               </svg>
                               View
                         </a>
                         <a class="dropdown-item" href="#">
                               <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                               </svg>
                               Delete
                         </a>
                      </div>
                   </div>
             </div>
          </div>
          <div class="card-body p-0">
             <div class="table-responsive">
                <table class="table mb-0">
                   <thead class="table-color-heading">
                      <tr class="text-secondary">
                         <th scope="col">Date</th>
                         <th scope="col">Customer</th>
                         <th scope="col">Status</th>
                         <th scope="col" class="text-right">Total</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr class="white-space-no-wrap">
                         <td>01 Jun 2020</td>
                         <td>
                            <div class="d-flex align-items-center">
                               <div class="avatar-45 mr-2">
                                  <img src="../assets/images/user/2.jpg" class="img-fluid rounded-circle"
                                     alt="image">
                               </div>
                               <div>Maggie Potts</div>
                            </div>
                         </td>
                         <td>
                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                               <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                               <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                               </small> Completed
                            </p>
                         </td>
                         <td class="text-right">$104.98</td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>02 Jun 2020</td>
                         <td>
                            <div class="d-flex align-items-center">
                               <div class="avatar-45 mr-2">
                                  <img src="../assets/images/user/5.jpg" class="img-fluid rounded-circle"
                                     alt="image">
                               </div>
                               <div>Kevin Adkins</div>
                            </div>
                         </td>
                         <td>
                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                               <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                               <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                               </small> Completed
                            </p>
                         </td>
                         <td class="text-right">$233.00</td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>05 Jun 2020</td>
                         <td>
                            <div class="d-flex align-items-center">
                               <div class="avatar-45 mr-2">
                                  <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle"
                                     alt="image">
                               </div>
                               <div>Max Lynn</div>
                            </div>
                         </td>
                         <td>
                            <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                               <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                               <circle cx="12" cy="12" r="8" fill="#db7e06"></circle></svg>
                               </small>Pending
                            </p>
                         </td>
                         <td class="text-right">$150.01</td>
                      </tr>
                      <tr class="white-space-no-wrap">
                         <td>06 Jun 2020</td>
                         <td>
                            <div class="d-flex align-items-center">
                               <div class="avatar-45 mr-2">
                                  <img src="../assets/images/user/3.jpg" class="img-fluid rounded-circle"
                                     alt="image">
                               </div>
                               <div>Danniw Yatt</div>
                            </div>
                         </td>
                         <td>
                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                               <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                               <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle></svg>
                               </small>Cancelled
                            </p>
                         </td>
                         <td class="text-right">$199.99</td>
                      </tr>                        
                   </tbody>
                </table>
                <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                         <button class="btn btn-secondary btn-sm">See All</button>
                      </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-12">
       <div class="card">
          <div class="card-body">
             <h4 class="font-weight-bold mb-3">City Orders Statistics</h4>
             <div id="chart-map-column-04" class="custom-chart"></div>
          </div>
       </div>
    </div>
 </div>
  <!-- Page end  -->
</div>
    </div>
  </div>
  <!-- Wrapper End-->
  <footer class="iq-footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                      <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                      <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                  </ul>
              </div>
              <div class="col-lg-6 text-right">
                  <span class="mr-1">
                      Copyright
                      <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Zigmawave</a>
                      All Rights Reserved.
                  </span>
              </div>
          </div>
      </div>
  </footer> 
@endsection