<!-- Start Hero -->
<section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-14">
<<<<<<< HEAD
            <h3 class="text-3xl leading-normal font-semibold">Sản phẩm</h3>
        </div>
        <!--end grid-->


=======
            <h3 class="text-3xl leading-normal font-semibold">Fashion</h3>
        </div>
        <!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500">
                    <a href="index.html">Cartzio</a>
                </li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Shop Grid
                </li>
            </ul>
        </div>
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
<<<<<<< HEAD
        <!-- <div class="md:flex justify-between items-center mb-6">
=======
        <div class="md:flex justify-between items-center mb-6">
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
            <span class="font-semibold">Showing 1-16 of 40 items</span>

            <div class="md:flex items-center">
                <label class="font-semibold md:me-2">Sort by:</label>
                <select
                    class="form-select form-input md:w-36 w-full md:mt-0 mt-1 py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">
                    <option value="">Featured</option>
                    <option value="">Sale</option>
                    <option value="">Alfa A-Z</option>
                    <option value="">Alfa Z-A</option>
                    <option value="">Price Low-High</option>
                    <option value="">Price High-Low</option>
                </select>
            </div>
<<<<<<< HEAD
        </div> -->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            <?php
            $dssp = loadall_sanpham();
            foreach($dssp as $sp){
                extract($sp);
                $linksp = "index.php?act=ctsanpham&idsp=" . $product_id ;
                $hinh = $img_path . $image;
                echo '<div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="'.$hinh.'" class="group-hover:scale-110 duration-500"
=======
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500"
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                        alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
<<<<<<< HEAD
                        <li class="mt-1"><a href="'.$linksp.'"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>

=======
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-40%
                                Off</a></li>
                    </ul>
                </div>

                <div class="mt-4">
<<<<<<< HEAD
                    <a href="'.$linksp.'" class="hover:text-orange-500 text-lg font-medium">"'.$product_name.'"</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$"'.$price.'"<del class="text-slate-400">$21.00</del></p>
=======
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Black Print
                        T-Shirt</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
<<<<<<< HEAD
            </div>';
            }
            ?>






=======
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/fashion-shoes-sneaker.jpg" class="group-hover:scale-110 duration-500"
                        alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Fashion Shoes
                        Sneaker</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/men-white-espadrilles-slip-shoes.jpg"
                        class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Mens White Slip
                        Shoes</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/luxurious-bag.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Luxurious
                        Bag</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/ladies-1.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Green
                        Top</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/ladies-2.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Onepiece
                        Wear</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/mens-jecket.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Featured</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Mens Brown
                        Jecket</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/sweater-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Sweater
                        T-Shirt</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/trendy-t-shirt2.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Trendy
                        T-shirt</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/men-sun-glasses.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Men Sun
                        Glasses</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/women-s-white-low-heel-shoes.jpg"
                        class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-25%
                                Off</a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Women White Low
                        Heel Shoes</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/casual-men-shorts.jpg" class="group-hover:scale-110 duration-500"
                        alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Featured</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Black Print
                        T-Shirt</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/luxurious-bag2.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>

                    <ul class="list-none absolute top-[10px] start-4">
                        <li><a href="javascript:void(0)"
                                class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Orange Luxurious
                        Bag</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/smart-watch.jpg" class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Smart Watch</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/white-sandals-summer-footwear.jpg"
                        class="group-hover:scale-110 duration-500" alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">White
                        Sandals</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->

            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                    <img src="assets/images/shop/ladies-skirt-pair.jpg" class="group-hover:scale-110 duration-500"
                        alt="">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                        <a href="shop-cart.html"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>

                    <ul
                        class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                        <li><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="heart" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="shop-item-detail.html"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="eye" class="size-4"></i></a></li>
                        <li class="mt-1"><a href="javascript:void(0)"
                                class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i
                                    data-feather="bookmark" class="size-4"></i></a></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="product-detail-one.html" class="hover:text-orange-500 text-lg font-medium">Ladies Skirt</a>
                    <div class="flex justify-between items-center mt-1">
                        <p>$16.00 <del class="text-slate-400">$21.00</del></p>
                        <ul class="font-medium text-amber-400 list-none">
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                            <li class="inline"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end content-->
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
        </div>
        <!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
            <div class="md:col-span-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">
                                <i data-feather="chevron-left" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-orange-500 border border-orange-500">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-orange-500 dark:hover:border-orange-500 hover:bg-orange-500 dark:hover:bg-orange-500">
                                <i data-feather="chevron-right" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end col-->
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->