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
                     <div
                         class="p-6 md:flex justify-between items-center border-b border-gray-100 dark:border-gray-700">
                         <div class="mb-4 md:mb-0">
                             <h5 class="text-xl font-semibold">Current Plan</h5>
                         </div>
                         <a href="#"
                             class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md">Switch
                             to Annual Plan</a>
                     </div>

                     <div class="p-6">
                         <h5 class="text-2xl font-semibold">$18/Monthly</h5>
                         <p class="text-slate-400 mt-2">Your next monthly charge of $18 will be applied to your primary
                             payment method on July 20, 2022.</p>
                     </div>
                 </div>

                 <div class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-6">
                     <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                         <h5 class="text-xl font-semibold">Payment Methods</h5>
                         <p class="text-slate-400 mt-2">Primary payment method is used by default</p>
                     </div>

                     <div class="px-6">
                         <ul>
                             <li class="flex justify-between items-center py-6">
                                 <div class="flex items-center">
                                     <img src="assets/images/payments/visa.jpg"
                                         class="rounded shadow dark:shadow-gray-800 w-12" alt="">

                                     <div class="ms-3">
                                         <p class="font-semibold">Visa ending in 4578</p>
                                         <p class="text-slate-400 text-sm">Expires in 12/2022</p>
                                     </div>
                                 </div>

                                 <div>
                                     <a href="#"
                                         class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i
                                             data-feather="trash-2" class="h-4 w-4"></i></a>
                                 </div>
                             </li>

                             <li
                                 class="flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-700">
                                 <div class="flex items-center">
                                     <img src="assets/images/payments/american-express.jpg"
                                         class="rounded shadow dark:shadow-gray-800 w-12" alt="">

                                     <div class="ms-3">
                                         <p class="font-semibold">American Express ending in 4578</p>
                                         <p class="text-slate-400 text-sm">Expires in 12/2022</p>
                                     </div>
                                 </div>

                                 <div>
                                     <a href="#"
                                         class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i
                                             data-feather="trash-2" class="h-4 w-4"></i></a>
                                 </div>
                             </li>

                             <li
                                 class="flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-700">
                                 <div class="flex items-center">
                                     <img src="assets/images/payments/discover.jpg"
                                         class="rounded shadow dark:shadow-gray-800 w-12" alt="">

                                     <div class="ms-3">
                                         <p class="font-semibold">Discover ending in 4578</p>
                                         <p class="text-slate-400 text-sm">Expires in 12/2022</p>
                                     </div>
                                 </div>

                                 <div>
                                     <a href="#"
                                         class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i
                                             data-feather="trash-2" class="h-4 w-4"></i></a>
                                 </div>
                             </li>

                             <li
                                 class="flex justify-between items-center py-6 border-t border-gray-100 dark:border-gray-700">
                                 <div class="flex items-center">
                                     <img src="assets/images/payments/mastercard.jpg"
                                         class="rounded shadow dark:shadow-gray-800 w-12" alt="">

                                     <div class="ms-3">
                                         <p class="font-semibold">Master Card ending in 4578</p>
                                         <p class="text-slate-400 text-sm">Expires in 12/2022</p>
                                     </div>
                                 </div>

                                 <div>
                                     <a href="#"
                                         class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i
                                             data-feather="trash-2" class="h-4 w-4"></i></a>
                                 </div>
                             </li>

                             <li class="py-6 border-t border-gray-100 dark:border-gray-700">
                                 <a href="javascript:void(0)" onclick="paymentMethod.showModal()"
                                     class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md">Add
                                     Payment Method</a>
                             </li>
                         </ul>
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