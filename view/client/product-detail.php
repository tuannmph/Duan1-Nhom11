<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .img-select img {
        width: 430px;

    }

    .p-px {
        margin-bottom: 10px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .img-select {
        margin-right: 10px;
        margin-top: -70px;

    }

    .img-showcase img {
        width: 500px;


    }

    select {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        border-radius: 2px;
    }
    </style>
</head>

<body>
    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Chi tiết sản phẩm</h3>
            </div>
            <!--end grid-->

            <!-- <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500">
                    <a href="index.html">Cartzio</a>
                </li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500">
                    <a href="shop-grid.html">Store</a>
                </li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Mens Brown
                    Jecket</li>
            </ul>
        </div> -->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <?php
        extract($onesp);
       
        ?>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 items-center">
                <div class="">
                    <ul class="product-imgs flex list-none items-center">
                        <li>
                            <ul class="img-select list-none">
                                <?php
                                $hinh = $img_path . $image;
                                echo '<li class="p-px">
                                    <a href="#" data-id="1">
                                        <img src="'.$hinh.'" class="shadow dark:shadow-gray-800"
                                            alt="" >
                                    </a>
                                </li>'
                                ?>

                                <li class="p-px">
                                    <a href="#" data-id="2">
                                        <img src="img/ship.png" class="shadow dark:shadow-gray-800" alt="">
                                    </a>
                                </li>
                                <li class="p-px">
                                    <a href="#" data-id="3">
                                        <img src="img/box.jpg" class="shadow dark:shadow-gray-800" alt="">
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="img-display shadow dark:shadow-gray-800 m-px">
                            <div class="img-showcase flex w-full duration-500">
                                <?php
                                $hinh = $img_path . $image;
                                echo '<img src="'.$hinh.'" class="min-w-full" alt="shoe image" >'
                                ?>

                                <img src="img/ship.png" class="min-w-full" alt="shoe image">
                                <img src="img/box.jpg" class="min-w-full" alt="shoe image">

                            </div>
                        </li>
                    </ul>
                </div>


                <div class="">
                    <h5 class="text-2xl font-semibold"><?= $product_name?></h5>
                    <div class="mt-2">
                        <span class=" me-1 text-red-600 font-semibold"><?= $price ?> <del
                                class=" text-slate-400 ">$21USD</del></span>


                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">Mô tả :</h5>
                        <p class="text-slate-400 mt-2"><?=$description?></p>

                        <!-- <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i
                                    class="mdi mdi-check-circle-outline text-orange-500 text-xl me-2"></i>
                                Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i
                                    class="mdi mdi-check-circle-outline text-orange-500 text-xl me-2"></i>
                                Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i
                                    class="mdi mdi-check-circle-outline text-orange-500 text-xl me-2"></i>
                                Create your own skin to match your brand</li>
                        </ul> -->
                    </div>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-4">
                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">Size:</h5>
                            <select name="" id="">
                                <option selected disabled>Chọn size sản phẩm</option>
                                <?php
                                $sizes = load_all_sizes();
                                foreach ($sizes as $size) {
                                    echo '<option value="'.$size['size_id'].'">'.$size['size_name'].'</option> ';
                                }
                            ?>
                            </select>


                        </div>


                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">Số lượng:</h5>
                            <div class="qty-icons ms-3 space-x-0.5">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                    class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</button>
                                <input min="0" name="quantity" value="0" type="number"
                                    class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</button>
                            </div>
                        </div>

                    </div>


                    <div class="mt-4 space-x-1">
                        <a href="#"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Thêm
                            vào giỏ hàng</a>
                        <!-- <a href="#"
                            class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2"></a> -->
                    </div>
                </div>

            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-3 md:col-span-5">
                    <div class="sticky top-20">
                        <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md"
                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <!-- <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-orange-500 duration-500"
                                    id="description-tab" data-tabs-target="#description" type="button" role="tab"
                                    aria-controls="description" aria-selected="true">Description</button>
                            </li> -->
                            <!-- <li role="presentation">
                            <button
                                class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500"
                                id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab"
                                aria-controls="addinfo" aria-selected="false">Additional Information</button>
                        </li> -->
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500"
                                    id="review-tab" data-tabs-target="#review" type="button" role="tab"
                                    aria-controls="review" aria-selected="false">Review</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-9 md:col-span-7">
                    <div id="myTabContent"
                        class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <!-- <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-slate-400">Due to its widespread use as filler text for layouts,
                                non-readability
                                is of great importance: human perception is tuned to recognize certain patterns and
                                repetitions in texts. If the distribution of letters and 'words' is random, the reader
                                will
                                not be distracted from making a neutral judgement on the visual impact and readability
                                of
                                the typefaces (typography), or the distribution of text on the page (layout or type
                                area).
                                For this reason, dummy text usually consists of a more or less random series of words or
                                syllables.</p>
                        </div> -->

                        <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                            <table class="w-full text-start">
                                <tbody>
                                    <tr class="bg-white dark:bg-slate-900">
                                        <td class="font-semibold pb-4" style="width: 100px;">Color</td>
                                        <td class="text-slate-400 pb-4">Red, White, Black, Orange</td>
                                    </tr>

                                    <tr
                                        class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-700">
                                        <td class="font-semibold py-4">Material</td>
                                        <td class="text-slate-400 py-4">Cotton</td>
                                    </tr>

                                    <tr
                                        class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-700">
                                        <td class="font-semibold pt-4">Size</td>
                                        <td class="text-slate-400 pt-4">S, M, L, XL, XXL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour "</p>
                                </div>
                            </div>

                            <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                                <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                                <form class="mt-8">
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-start">
                                                <label for="name" class="font-semibold">Your Name:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <input name="name" id="name" type="text"
                                                        class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                                        placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-start">
                                                <label for="email" class="font-semibold">Your Email:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <input name="email" id="email" type="email"
                                                        class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                                        placeholder="Email :">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1">
                                        <div class="mb-5">
                                            <div class="text-start">
                                                <label for="comments" class="font-semibold">Your Comment:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="message-circle"
                                                        class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <textarea name="comments" id="comments"
                                                        class="ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                                        placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" name="send"
                                        class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 mb-6 text-center">
                <h3 class="font-semibold text-3xl leading-normal">Sản phẩm cùng loại</h3>
            </div>
            <!--end grid-->


            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 pt-6">
                <?php
                foreach ($sp_cung_loai as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=ctsanpham&idsp=" . $product_id;
                    $hinh = $img_path . $image;
                    echo '<div class="group">
                        <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
                            <img src="' . $hinh . '" class="group-hover:scale-110 duration-500" alt="">

                            <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
                                <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
                            </div>

                            <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
                                <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="' . $linksp . '" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
                                <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <a href="' . $linksp . '" class="hover:text-orange-500 text-lg font-medium">' . $product_name . '</a>
                            <div class="flex justify-between items-center mt-1">
                                <p>$' . $price . ' <del class="text-slate-400">$21.00</del></p>
                                <ul class="font-medium text-amber-400 list-none">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }
                ?>



            </div>
        </div>
    </section>
    <!--end section-->
    <!-- End -->
</body>

</html>