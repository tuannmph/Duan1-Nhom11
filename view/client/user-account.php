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
                                        <span class="me-2 mb-0"><i data-feather="credit-card" class="size-4"></i></span>
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
                <h5 class="text-lg font-semibold mb-6">My Orders</h5>
                <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
                    <table class="w-full text-start text-slate-500 dark:text-slate-400">
                        <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr class="text-start">
                                <th scope="col" class="px-2 py-3 text-start">Order no.</th>
                                <th scope="col" class="px-2 py-3 text-start">Date</th>
                                <th scope="col" class="px-2 py-3 text-start">Status</th>
                                <th scope="col" class="px-2 py-3 text-start">Total</th>
                                <th scope="col" class="px-2 py-3 text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-slate-900 text-start">
                                <th class="px-2 py-3 text-start" scope="row">7107</th>
                                <td class="px-2 py-3 text-start">1st November 2021</td>
                                <td class="px-2 py-3 text-start text-green-600">Delivered</td>
                                <td class="px-2 py-3 text-start">$ 320 <span class="text-slate-400">for 2items</span>
                                </td>
                                <td class="px-2 py-3 text-start"><a href="javascript:void(0)"
                                        class="text-orange-500">View <i class="mdi mdi-chevron-right"></i></a></td>
                            </tr>

                            <tr
                                class="bg-white dark:bg-slate-900 text-start border-t border-gray-100 dark:border-gray-700">
                                <th class="px-2 py-3 text-start" scope="row">8007</th>
                                <td class="px-2 py-3 text-start">4th November 2021</td>
                                <td class="px-2 py-3 text-start text-slate-400">Processing</td>
                                <td class="px-2 py-3 text-start">$ 800 <span class="text-slate-400">for 1item</span>
                                </td>
                                <td class="px-2 py-3 text-start"><a href="javascript:void(0)"
                                        class="text-orange-500">View <i class="mdi mdi-chevron-right"></i></a></td>
                            </tr>

                            <tr
                                class="bg-white dark:bg-slate-900 text-start border-t border-gray-100 dark:border-gray-700">
                                <th class="px-2 py-3 text-start" scope="row">8008</th>
                                <td class="px-2 py-3 text-start">4th November 2021</td>
                                <td class="px-2 py-3 text-start text-red-600">Canceled</td>
                                <td class="px-2 py-3 text-start">$ 800 <span class="text-slate-400">for 1item</span>
                                </td>
                                <td class="px-2 py-3 text-start"><a href="javascript:void(0)"
                                        class="text-orange-500">View <i class="mdi mdi-chevron-right"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Hero -->