<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1920">

        <title>Purinusa Kembangan Admin</title>
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
					<div class="side-nav bg-[#344643] side-nav-expand">
						<div class="side-nav-header">
							<div class="logo px-6">
								<!-- <img src="img/logo/logo-light-full.png" alt="Elstar logo"> -->
							</div>
						</div>
						<div class="side-nav-content relative side-nav-scroll">
							<nav class="menu menu-transparent ">
								<div class="py-[10px] bg-[#1D2D2B]">
									<img src="{{url('/assets/icon/main-logo.svg')}}" alt="" class="mx-auto">
								</div>
								<div class="menu-group px-4 pb-4">
									<ul>
										<li>
											<div class="menu-collapse-item menu-collapse-item-active">
												<span class="menu-item-text text-[#CEAE92] text-[14px] font-bold">SETTING</span>
											</div>
											<ul style="display: block;">
												<a class="menu-item-link {{ 
													Route::is('admin-banner-cms', 'admin-banner-create-cms', 'admin-banner-edit-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-banner-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-banner-cms', 'admin-banner-create-cms', 'admin-banner-edit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M16.3804 8.25V6C16.3804 4.75736 15.3804 3.75 14.1468 3.75H5.95653C4.7229 3.75 3.72284 4.75736 3.72284 6V14.25C3.72284 15.4926 4.7229 16.5 5.95653 16.5H8.19023M16.3804 8.25H17.8696C19.1032 8.25 20.1033 9.25736 20.1033 10.5V18C20.1033 19.2426 19.1032 20.25 17.8696 20.25H10.4239C9.19029 20.25 8.19023 19.2426 8.19023 18V16.5M16.3804 8.25H10.4239C9.19029 8.25 8.19023 9.25736 8.19023 10.5V16.5" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-banner-cms', 'admin-banner-create-cms', 'admin-banner-edit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}" href="{{route('admin-banner-cms')}}">Banner</span>
													</li>
												</a>
												<a class="menu-item-link {{ 
													Route::is('admin-concept-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-concept-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-concept-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M7.44566 8.25H16.3804M7.44566 11.25H11.9131M2.2337 12.7593C2.2337 14.3604 3.34898 15.754 4.92154 15.987C6.04187 16.1529 7.17487 16.2796 8.31914 16.3655C8.66679 16.3916 8.9846 16.5753 9.17798 16.8674L11.9131 21L14.6481 16.8675C14.8415 16.5753 15.1593 16.3917 15.5069 16.3656C16.6512 16.2796 17.7842 16.153 18.9045 15.9871C20.4771 15.7542 21.5924 14.3606 21.5924 12.7595V6.74056C21.5924 5.13946 20.4771 3.74583 18.9045 3.51293C16.6227 3.17501 14.2883 3 11.9133 3C9.53814 3 7.20354 3.17504 4.92155 3.51302C3.34898 3.74593 2.2337 5.13956 2.2337 6.74064V12.7593Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-concept-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">Konsep</span>
													</li>
												</a>
												<a class="menu-item-link {{ 
													Route::is('admin-benefit-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-benefit-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-benefit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<g clip-path="url(#clip0_58_769)">
																<path d="M20.8478 11.25V19.5C20.8478 20.3284 20.1811 21 19.3587 21H5.21196C4.38954 21 3.72283 20.3284 3.72283 19.5V11.25M11.9131 4.875C11.9131 3.42525 10.7463 2.25 9.30707 2.25C7.86783 2.25 6.70109 3.42525 6.70109 4.875C6.70109 6.32475 7.86783 7.5 9.30707 7.5C10.0363 7.5 11.9131 7.5 11.9131 7.5M11.9131 4.875C11.9131 5.59024 11.9131 7.5 11.9131 7.5M11.9131 4.875C11.9131 3.42525 13.0798 2.25 14.519 2.25C15.9583 2.25 17.125 3.42525 17.125 4.875C17.125 6.32475 15.9583 7.5 14.519 7.5C13.7898 7.5 11.9131 7.5 11.9131 7.5M11.9131 7.5V21M3.35055 11.25H21.2201C21.8369 11.25 22.337 10.7463 22.337 10.125V8.625C22.337 8.00368 21.8369 7.5 21.2201 7.5H3.35055C2.73373 7.5 2.2337 8.00368 2.2337 8.625V10.125C2.2337 10.7463 2.73373 11.25 3.35055 11.25Z" 
																stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															</g>
															<defs>
																<clipPath id="clip0_58_769">
																	<rect width="23.8261" height="24" fill="white"/>
																</clipPath>
															</defs>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-benefit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															Benefit
														</span>
													</li>
												</a>
											</ul>
										</li>
										<li class="mt-[12px]">
											<div class="menu-collapse-item menu-collapse-item-active">
												<span class="menu-item-text text-[#CEAE92] text-[14px] font-bold">RESIDENCE</span>
											</div>
											<ul style="display: block;">
												<a class="menu-item-link {{ 
													Route::is('admin-house-layout-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-house-layout-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-house-layout-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M3.72284 6C3.72284 4.75736 4.7229 3.75 5.95653 3.75H8.19023C9.42387 3.75 10.4239 4.75736 10.4239 6V8.25C10.4239 9.49264 9.42387 10.5 8.19023 10.5H5.95653C4.7229 10.5 3.72284 9.49264 3.72284 8.25V6Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M3.72284 15.75C3.72284 14.5074 4.7229 13.5 5.95653 13.5H8.19023C9.42387 13.5 10.4239 14.5074 10.4239 15.75V18C10.4239 19.2426 9.42387 20.25 8.19023 20.25H5.95653C4.7229 20.25 3.72284 19.2426 3.72284 18V15.75Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M13.4022 6C13.4022 4.75736 14.4022 3.75 15.6359 3.75H17.8696C19.1032 3.75 20.1033 4.75736 20.1033 6V8.25C20.1033 9.49264 19.1032 10.5 17.8696 10.5H15.6359C14.4022 10.5 13.4022 9.49264 13.4022 8.25V6Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M13.4022 15.75C13.4022 14.5074 14.4022 13.5 15.6359 13.5H17.8696C19.1032 13.5 20.1033 14.5074 20.1033 15.75V18C20.1033 19.2426 19.1032 20.25 17.8696 20.25H15.6359C14.4022 20.25 13.4022 19.2426 13.4022 18V15.75Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-house-layout-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
														Layout
														</span>
													</li>
												</a>
												<a class="menu-item-link {{ 
													Route::is('admin-house-type-cms', 'admin-house-type-cms-create', 'admin-house-type-cms-edit') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-house-type-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-house-type-cms', 'admin-house-type-cms-create', 'admin-house-type-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M8.19022 21V16.125C8.19022 15.5037 8.69025 15 9.30707 15H11.5408C12.1576 15 12.6576 15.5037 12.6576 16.125V21M12.6576 21H17.125V3.54545M12.6576 21H20.1033V10.75M2.2337 21H3.72283M21.5924 21H3.72283M2.2337 9L6.70109 7.36364M18.6141 3L17.125 3.54545M17.125 9.75L20.1033 10.75M21.5924 11.25L20.1033 10.75M6.70109 7.36364V3H3.72283V21M6.70109 7.36364L17.125 3.54545" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-house-type-cms', 'admin-house-type-cms-create', 'admin-house-type-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
														Tipe Rumah
														</span>
													</li>
												</a>
												<a class="menu-item-link {{ 
													Route::is('admin-around-house-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-around-house-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-around-house-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M3.72284 3.75V8.25M3.72284 3.75H8.19023M3.72284 3.75L8.9348 9M3.72284 20.25V15.75M3.72284 20.25H8.19023M3.72284 20.25L8.9348 15M20.1033 3.75L15.6359 3.75M20.1033 3.75V8.25M20.1033 3.75L14.8913 9M20.1033 20.25H15.6359M20.1033 20.25V15.75M20.1033 20.25L14.8913 15" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-around-house-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															Sekeliling
														</span>
													</li>
												</a>
											</ul>
										</li>
										<li class="mt-[12px]">
											<div class="menu-collapse-item menu-collapse-item-active">
												<span class="menu-item-text text-[#CEAE92] text-[14px] font-bold">PROFIL</span>
											</div>
											<ul style="display: block;">
												<a class="menu-item-link {{ 
													Route::is('admin-general-cms', 'admin-house-layout-cms-create', 'admin-house-layout-cms-edit') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-general-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-general-cms', 'admin-house-layout-cms-create', 'admin-house-layout-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M2.2337 13.5H6.06516C6.91122 13.5 7.68467 13.9815 8.06304 14.7438L8.31741 15.2562C8.69578 16.0185 9.46923 16.5 10.3153 16.5H13.5108C14.3569 16.5 15.1303 16.0185 15.5087 15.2562L15.7631 14.7438C16.1414 13.9815 16.9149 13.5 17.7609 13.5H21.5924M2.2337 13.8383V18C2.2337 19.2426 3.23376 20.25 4.4674 20.25H19.3587C20.5923 20.25 21.5924 19.2426 21.5924 18V13.8383C21.5924 13.614 21.5591 13.391 21.4936 13.1766L19.0993 5.33831C18.8109 4.39423 17.945 3.75 16.9644 3.75H6.86171C5.88111 3.75 5.01518 4.39423 4.7268 5.33831L2.33248 13.1766C2.267 13.391 2.2337 13.614 2.2337 13.8383Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-general-cms', 'admin-house-layout-cms-create', 'admin-house-layout-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}"> General
														</span>
													</li>
												</a>
												<a href="{{route('admin-award-cms')}}" class="menu-item-link {{ 
													Route::is('admin-award-cms', 'admin-award-cms-create', 'admin-award-cms-edit') ? 'bg-white rounded-[6px]' : ''
												}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-award-cms', 'admin-award-cms-create', 'admin-award-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M16.3807 18.75H7.44592M16.3807 18.75C18.0255 18.75 19.359 20.0931 19.359 21.75H4.46765C4.46765 20.0931 5.80107 18.75 7.44592 18.75M16.3807 18.75V15.375C16.3807 14.7537 15.8807 14.25 15.2638 14.25H14.3985M7.44592 18.75V15.375C7.44592 14.7537 7.94594 14.25 8.56276 14.25H9.42808M14.3985 14.25H9.42808M14.3985 14.25C13.8552 13.3038 13.5111 12.227 13.4242 11.0777M9.42808 14.25C9.97145 13.3038 10.3155 12.227 10.4024 11.0777M5.21222 4.23636C4.23704 4.3792 3.27174 4.55275 2.31732 4.75601C2.76437 7.42349 4.959 9.49282 7.6739 9.72775M5.21222 4.23636V4.5C5.21222 6.60778 6.17132 8.48992 7.6739 9.72775M5.21222 4.23636V2.72089C7.40166 2.41051 9.63888 2.25 11.9133 2.25C14.1877 2.25 16.4249 2.41051 18.6144 2.72089V4.23636M7.6739 9.72775C8.45577 10.3719 9.38479 10.8415 10.4024 11.0777M18.6144 4.23636V4.5C18.6144 6.60778 17.6553 8.48992 16.1527 9.72775M18.6144 4.23636C19.5896 4.3792 20.5549 4.55275 21.5093 4.75601C21.0623 7.42349 18.8676 9.49282 16.1527 9.72775M16.1527 9.72775C15.3708 10.3719 14.4418 10.8415 13.4242 11.0777M13.4242 11.0777C12.9386 11.1904 12.4329 11.25 11.9133 11.25C11.3937 11.25 10.888 11.1904 10.4024 11.0777" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-award-cms', 'admin-award-cms-create', 'admin-award-cms-edit') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">Penghargaan</span>
													</li>
												</a>
											</ul>
										</li>
										<li class="mt-[12px]">
											<div class="menu-collapse-item menu-collapse-item-active">
												<span class="menu-item-text text-[#CEAE92] text-[14px] font-bold">GALERI</span>
											</div>
											<ul style="display: block;">
												<a class="menu-item-link {{ 
													Route::is('admin-article-cms', 'admin-article-create-cms', 'admin-article-edit-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-article-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-article-cms', 'admin-article-create-cms', 'admin-article-edit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M11.9131 7.5H13.4022M11.9131 10.5H13.4022M5.95653 13.5H13.4022M5.95653 16.5H13.4022M16.3804 7.5H19.731C20.3478 7.5 20.8478 8.00368 20.8478 8.625V18C20.8478 19.2426 19.8478 20.25 18.6141 20.25M16.3804 7.5V18C16.3804 19.2426 17.3805 20.25 18.6141 20.25M16.3804 7.5V4.875C16.3804 4.25368 15.8804 3.75 15.2636 3.75H4.09512C3.4783 3.75 2.97827 4.25368 2.97827 4.875V18C2.97827 19.2426 3.97833 20.25 5.21197 20.25H18.6141M5.95653 7.5H8.93479V10.5H5.95653V7.5Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-article-cms', 'admin-article-create-cms', 'admin-article-edit-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															Artikel
														</span>
													</li>
												</a>
												<a class="menu-item-link {{ 
													Route::is('admin-gallery-cms') ? 'bg-white rounded-[6px]' : ''
												}}" href="{{route('admin-gallery-cms')}}">
													<li data-menu-item="modern-project-dashboard" class="menu-item">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="{{ 
															Route::is('admin-gallery-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															<path d="M6.77742 6.1749C6.41896 6.75354 5.81881 7.13398 5.14843 7.22994C4.77173 7.28386 4.39645 7.34223 4.02264 7.40497C2.97739 7.58042 2.2337 8.50663 2.2337 9.57402V18C2.2337 19.2426 3.23376 20.25 4.4674 20.25H19.3587C20.5923 20.25 21.5924 19.2426 21.5924 18V9.57403C21.5924 8.50664 20.8487 7.58043 19.8035 7.40498C19.4297 7.34223 19.0544 7.28387 18.6777 7.22995C18.0073 7.13398 17.4071 6.75354 17.0487 6.17491L16.2334 4.85889C15.8577 4.25237 15.2183 3.85838 14.5096 3.82005C13.6499 3.77355 12.7842 3.75 11.9131 3.75C11.0419 3.75 10.1762 3.77355 9.3165 3.82005C8.60778 3.85838 7.96842 4.25237 7.59268 4.85889L6.77742 6.1749Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M16.3804 12.75C16.3804 15.2353 14.3803 17.25 11.9131 17.25C9.44578 17.25 7.44566 15.2353 7.44566 12.75C7.44566 10.2647 9.44578 8.25 11.9131 8.25C14.3803 8.25 16.3804 10.2647 16.3804 12.75Z" 
															stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M18.6141 10.5H18.6216V10.5075H18.6141V10.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="h-full w-full flex items-center {{ 
															Route::is('admin-gallery-cms') ? 'text-[#344643]' : 'text-[#FFFFFF]'
														}}">
															Foto
														</span>
													</li>
												</a>
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
											<!-- <li class="menu-item-header">
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
												</a> -->
											</li>
											<!-- <li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li> -->
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
												<a class="flex gap-2 items-center" href="{{route('admin-logout')}}">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
														</svg>
													</span>
													<span>Sign Out</span>
												</a>
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
							<main class="h-full bg-[#F9FAFB]">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6 relative">
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
									<div class="flex justify-between mb-[34px]">
										<span class="text-[#344643] text-[26px] font-bold leading-[32px]">@yield('cms-title')</span>
										@yield('add-new-content')
									</div>
                                    @yield('content')
									<p class="text-[#8A898E] absolute bottom-[14px] font-normal">Copyright ©  {{ \Carbon\Carbon::now()->year }} Puri Nusa All rights reserved.</p>
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
