 <!-- Start Hero -->
 <section class="relative lg:pb-24 pb-16 md:mt-[84px] mt-[70px]">
     <div class="md:container container-fluid relative">
         <div
             class="relative overflow-hidden md:rounded-md shadow dark:shadow-gray-700 h-52 bg-[url('../../assets/images/hero/pages.html')] bg-center bg-no-repeat bg-cover">
         </div>
     </div>
     <!--end container-->

     <div class="container relative md:mt-24 mt-16">
         <div class="md:flex">
             <div class="lg:w-1/4 md:w-1/3 md:px-3">
                 <div class="relative md:-mt-48 -mt-32">
                     <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                         <div class="profile-pic text-center mb-5">
                             <input id="pro-img" name="profile-image" type="file" class="hidden"
                                 onchange="loadFile(event)" />
                             <div>
                                 <div class="relative h-28 w-28 mx-auto">
                                     <img src="assets/images/client/16.jpg"
                                         class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                         id="profile-image" alt="">
                                     <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                 </div>

                                 <div class="mt-4">
                                     <h5 class="text-lg font-semibold">Jesus Zamora</h5>
                                     <p class="text-slate-400">jesus@hotmail.com</p>
                                 </div>
                             </div>
                         </div>

                         <div class="border-t border-gray-100 dark:border-gray-700">
                             <ul class="list-none sidebar-nav mb-0 pb-0" id="navmenu-nav">
                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=lichsu"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="airplay" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Lịch sử mua hàng</h6>
                                     </a>
                                 </li>

                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=ttkhachhang"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="edit" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Thông tin khách hàng</h6>
                                     </a>
                                 </li>

                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=ptthanhtoan"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="credit-card"
                                                 class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Kênh thanh toán</h6>
                                     </a>
                                 </li>


                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=yeuthich"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="share-2" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Sản phẩm yêu thích</h6>
                                     </a>
                                 </li>

                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=thongbao"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="bell" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Thông báo</h6>
                                     </a>
                                 </li>

                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=caidat"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="settings" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Cài đặt</h6>
                                     </a>
                                 </li>

                                 <li class="navbar-item account-menu">
                                     <a href="index.php?act=dangnhap"
                                         class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                         <span class="me-2 mb-0"><i data-feather="log-out" class="size-4"></i></span>
                                         <h6 class="mb-0 font-medium">Đăng xuất</h6>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-6 md:mt-0">
                 <div class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                     <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                         <h5 class="text-lg font-semibold">Account Notifications :</h5>
                     </div>

                     <div class="p-6">
                         <div class="flex justify-between pb-4">
                             <h6 class="mb-0 font-medium">When someone mentions me</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" id="noti1">
                                 <label class="form-check-label" for="noti1"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">When someone follows me</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" checked id="noti2">
                                 <label class="form-check-label" for="noti2"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">When shares my activity</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" id="noti3">
                                 <label class="form-check-label" for="noti3"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">When someone messages me</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" id="noti4">
                                 <label class="form-check-label" for="noti4"></label>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-6">
                     <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                         <h5 class="text-lg font-semibold">Marketing Notifications :</h5>
                     </div>

                     <div class="p-6">
                         <div class="flex justify-between pb-4">
                             <h6 class="mb-0 font-medium">There is a sale or promotion</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" id="noti5">
                                 <label class="form-check-label" for="noti5"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">Company news</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" id="noti6">
                                 <label class="form-check-label" for="noti6"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">Weekly jobs</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" checked id="noti7">
                                 <label class="form-check-label" for="noti7"></label>
                             </div>
                         </div>
                         <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                             <h6 class="mb-0 font-medium">Unsubscribe News</h6>
                             <div class="">
                                 <input
                                     class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50"
                                     type="checkbox" value="" checked id="noti8">
                                 <label class="form-check-label" for="noti8"></label>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--end grid-->
     </div>
     <!--end container-->
 </section>
 <!--end section-->
 <!-- End Hero -->