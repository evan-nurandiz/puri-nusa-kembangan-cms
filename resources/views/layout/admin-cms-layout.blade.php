<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1920">

        <title>Aryana Admin</title>
        <link rel="icon" type="image/x-icon" href="{{url('/icon/main-icon.ico')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />

        @yield('style')

        @vite('resources/css/app.css')
        @vite(['resources/scss/style.scss'])
    </head>
    <div id="root">
    <body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
					<div class="side-nav side-nav-transparent side-nav-expand">
						<div class="side-nav-header">
							<div class="logo px-6">
								<!-- <img src="img/logo/logo-light-full.png" alt="Elstar logo"> -->
							</div>
						</div>
						<div class="side-nav-content relative side-nav-scroll">
							<nav class="menu menu-transparent px-4 pb-4">
								<div class="menu-group">
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item menu-collapse-item-active">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
												</svg>
												<span class="menu-item-text">Home</span>
											</div>
											<ul style="display: block;">
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="{{route('admin-banner-cms')}}">
														<span>Banner</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="{{route('admin-concept-cms')}}">
														<span>Konsep</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="{{route('admin-benefit-cms')}}">
														<span>Benefit</span>
													</a>
												</li>
												<li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="{{route('admin-house-type-cms')}}">
														<span>Layout</span>
													</a>
												</li>
												<li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Tipe Rumah</span>
													</a>
												</li>
                                                <li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Sekeliling</span>
													</a>
												</li>
                                                <li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Penghargaan</span>
													</a>
												</li>
                                                <li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Contact Us</span>
													</a>
												</li>
                                                <li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Article</span>
													</a>
												</li>
                                                <li data-menu-item="modern-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-issue.html">
														<span>Foto</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>	
						</div>
					</div>
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
								@yield('add-new-content')
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">
									<!-- User Dropdown-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item flex items-center gap-2">
												<span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
												<img class="avatar-img avatar-circle" src="{{url('/assets/avatar/thumb-1.jpg')}}" loading="lazy" alt=""></span>
												<div class="hidden md:block">
													<div class="text-xs capitalize">admin</div>
													<div class="font-bold">Carolyn Perkins</div>
												</div>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end min-w-[240px]">
											<li class="menu-item-header">
												<div class="py-2 px-3 flex items-center gap-2">
													<span class="avatar avatar-circle avatar-md">
														<img class="avatar-img avatar-circle" src="{{url('/assets/avatar/thumb-1.jpg')}}" loading="lazy" alt="">
													</span>
													<div>
														<div class="font-bold text-gray-900 dark:text-gray-100">Carolyn Perkins</div>
														<div class="text-xs">carolyn.p@elstar.com</div>
													</div>
												</div>
											</li>
											<li class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-settings.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
														</svg>
													</span>
													<span>Profile</span>
												</a>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-settings.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
														</svg>
													</span>
													<span>Account Setting</span>
												</a>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-activity-log.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
														</svg>
													</span>
													<span>Activity Log</span>
												</a>
											</li>
											<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
												<span class="text-xl opacity-50">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
													</svg>
												</span>
												<span>Sign Out</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>
						<div class="modal fade" id="mobile-nav-drawer" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog drawer drawer-start !w-[330px]">
								<div class="drawer-content">
									<div class="drawer-header">
										<h4>Navigation</h4>
										<span class="close-btn" role="button" data-bs-dismiss="modal">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
											</svg>
										</span>
									</div>
									<div class="drawer-body p-0">
										<div class="side-nav-mobile">
											<div class="side-nav-content relative side-nav-scroll">
												<nav class="menu menu-transparent px-4 pb-4">
													<div class="menu-group">
														<ul>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
																	</svg>
																	<span class="menu-item-text">Project</span>
																</div>
																<ul>
																	<li data-menu-item="modern-project-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-project-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-project-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-project-list.html">
																			<span>Project List</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-scrum-board" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-scrum-board.html">
																			<span>Scrum Board</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-issue" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-issue.html">
																			<span>Issue</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
												</nav>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Popup end -->
						<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
								@if(session()->has('status'))
									@if (session()->get('status') == 'success')
									<div class="alert alert-dismissible fade show alert-success">
										<div class="alert-content">
											<div>{{ session()->get('message') }}</div>
										</div>
										<button type="button" data-bs-dismiss="alert">
											<span class="close-btn">
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
												</svg>
											</span>
										</button>
									</div>
									@elseif (session()->get('status') == 'fail')
									<div class="alert alert-dismissible fade show alert-danger">
										<div class="alert-content">
											<div>{{ session()->get('message') }}</div>
										</div>
										<button type="button" data-bs-dismiss="alert">
											<span class="close-btn">
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
												</svg>
											</span>
										</button>
									</div>
									@endif
								@endif
                                    @yield('content')
                                </div>
							</main>
							<!-- Content end -->
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- Core Vendors JS -->
		<script src="{{url('/js/vendors.min.js')}}"></script>
        <!-- Page js -->
        <script src="{{url('/js/pages/sales-dashboard.js')}}"></script>

        <!-- Core JS -->
        <script src="{{url('/js/app.min.js')}}"></script>
        </body>
    </div>
    @yield('script')
</html>
