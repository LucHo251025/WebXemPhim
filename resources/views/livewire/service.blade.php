    <div class="flex max-w-5xl mx-auto p-8 gap-9">
        @if($showModal)
            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50">
                <div class="bg-white rounded-lg p-8 max-w-lg mx-auto">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold">ZaloPay</h2>
                        <button wire:click="hideModal" class="text-black">&times;</button>
                    </div>

                    <div class="mt-4">
                        <!-- QR Code Image -->
                        <img src="" alt="QR Code" class="w-48 h-48 mx-auto">

                        <p class="text-center mt-4 text-gray-500">
                            Quét mã QR bằng ứng dụng ZaloPay để thanh toán dịch vụ FPT Play
                        </p>

                        <ul class="mt-4 text-gray-600 text-sm">
                            <li><strong>Bước 1:</strong> Mở ứng dụng ZaloPay trên điện thoại.</li>
                            <li><strong>Bước 2:</strong> Nhấp vào biểu tượng quét mã.</li>
                            <li><strong>Bước 3:</strong> Sử dụng tính năng để quét mã QR.</li>
                        </ul>

                        <!-- Countdown Timer -->
                        <p class="text-center mt-6 font-semibold">
                            Thời gian còn: <span id="timer">{{ gmdate('i:s', $timeRemaining) }}</span>
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <div class="w-full  md:grid-cols-2 gap-8">

            <div class="space-y-4 w-full">
                <h2 class="text-xl font-bold mb-4">Chọn hình thức thanh toán</h2>

                <!-- Payment Option 1 -->
                <div class="p-4 rounded-md flex items-center gap-3 w-full cursor-pointer" style="background-color: #161616;">
                    <label class="relative flex items-center justify-self-start w-full cursor-pointer" for="html1month">
                        <!-- Outer radio circle -->
                        <input wire:model="month" value="1 month" wire:click="$set('month', '1 month')" name="month" type="radio" class="peer h-5 w-5 cursor-pointer  appearance-none rounded-full border border-[#3c3c3c] transition-all peer-checked:border-[#ff6500] mr-2" id="html1month">

                        <!-- Inner active state -->
                        <span class="absolute bg-[#ff6500] w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-2.5 transform -translate-x-1/2 -translate-y-1/2"></span>
                        <div class="ml-3">
                            <span class="font-bold text-white">1 Month</span>
                        </div>
                    </label>

                    <div class="">
                        <p>$12.66</p>
                    </div>
                </div>


                <div class="p-4 rounded-md flex justify-self-start items-center gap-3 w-full cursor-pointer" style="background-color: #161616;">
                    <label class="relative flex items-center w-full cursor-pointer" for="html3month">
                        <!-- Outer radio circle -->
                        <input wire:model="month" wire:click="$set('month', '3 months')" value="3 months" name="month" type="radio" class="peer mr-2 h-5 w-5 cursor-pointer appearance-none rounded-full border border-[#3c3c3c] transition-all peer-checked:border-[#ff6500]" id="html3month">

                        <!-- Inner active state -->
                        <span class="absolute bg-[#ff6500] w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-2.5 transform -translate-x-1/2 -translate-y-1/2"></span>
                        <div class="ml-3">
                            <span class="font-bold text-white">3 Tháng</span>
                        </div>
                    </label>
                    <div class="">
                        <p>$12.66</p>
                    </div>
                </div>

                <div class="p-4 rounded-md flex justify-self-start items-center gap-3 w-full cursor-pointer" style="background-color: #161616;">
                    <label class="relative flex items-center w-full cursor-pointer" for="html6month">
                        <!-- Outer radio circle -->
                        <input wire:model="month" wire:click="$set('month', '6 months')" value="6 months" name="month" type="radio" class="peer mr-2 h-5 w-5 cursor-pointer appearance-none rounded-full border border-[#3c3c3c] transition-all peer-checked:border-[#ff6500]" id="html6month">

                        <!-- Inner active state -->
                        <span class="absolute bg-[#ff6500] w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-2.5 transform -translate-x-1/2 -translate-y-1/2"></span>
                        <div class="ml-3">
                            <span class="font-bold text-white">6 Tháng</span>
                        </div>
                    </label>
                    <div class="">
                        <p>$12.66</p>
                    </div>
                </div>

                <div class="p-4 rounded-md flex justify-self-start items-center gap-3 w-full cursor-pointer" style="background-color: #161616;">
                    <label class="relative flex items-center w-full cursor-pointer" for="html12month">
                        <!-- Outer radio circle -->
                        <input wire:model="month" wire:click="$set('month', '12 months')" value="12 months" name="month" type="radio" class="peer mr-2 h-5 w-5 cursor-pointer appearance-none rounded-full border border-[#3c3c3c] transition-all peer-checked:border-[#ff6500]" id="html12month">

                        <!-- Inner active state -->
                        <span class="absolute bg-[#ff6500] w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-2.5 transform -translate-x-1/2 -translate-y-1/2"></span>
                        <div class="ml-3">
                            <span class="font-bold text-white">12 Tháng</span>
                        </div>
                    </label>
                    <div class="">
                        <p>$12.66</p>
                    </div>
                </div>

            </div>



            <!-- Left Section - Payment Methods -->
            <div class="space-y-4 w-full">
                <h2 class="text-xl font-bold mb-4">Chọn hình thức thanh toán</h2>

                <!-- Payment Option 1 -->
                <div class="p-4 rounded-md flex justify-center items-center gap-3" style="background-color: #161616;">
                    <label for="payment1" class="relative inline-flex items-center cursor-pointer">
                        <input wire:model="zalopay"  value="zalopay" id="payment1" type="radio" name="payment" class="hidden peer">
                        <div class="mr-2 w-5 h-5 border-2 border-[#3c3c3c] rounded-full peer-checked:border-[#ff6500] transition-all duration-300 ease-in-out flex items-center justify-center">
                            <!-- Vòng tròn bên trong sẽ phóng to khi radio button được chọn -->
                            <div class="w-3 h-3 bg-[#ff6500] rounded-full peer-checked:scale-100 scale-0 transition-transform duration-300"></div>
                        </div>
                    </label>
                    <img class="w-[50px] h-[50px]" src="{{ Vite::asset('resources/images/play_image/zalopay.png') }}" alt="">
                    <div class="">
                        <span class="font-bold">Zalo Pay</span>
                        <p class="text-sm text-gray-400">Giảm ngay 10% - Giảm tối đa 20.000Đ (đơn tối thiểu 20.000Đ) khi thanh toán qua ShopeePay.</p>
                    </div>
                </div>




                <div class="p-4 rounded-md flex justify-center items-center gap-3" style="background-color: #161616;">
                    <label class="relative flex items-center w-fit cursor-pointer" for="html12month">
                        <!-- Outer radio circle -->
                        <input value="shoppeepay" name="payment2" type="radio" class="peer mr-2 h-5 w-5 cursor-pointer appearance-none border-2  rounded-full checked:border-[#ff6500] border-[#3c3c3c] transition-all " id="html12month">

                        <!-- Inner active state -->
                        <span class="absolute bg-[#ff6500] w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-2.5 transform -translate-x-1/2 -translate-y-1/2"></span>
                    </label>
                    <img class="w-[50px] h-[50px]" src="{{ Vite::asset('resources/images/play_image/shopeepay.png') }}" alt="">
                    <div class="">
                        <span class="font-bold">Ví ShopeePay</span>
                        <p class="text-sm text-gray-400">Giảm ngay 10% - Giảm tối đa 20.000Đ (đơn tối thiểu 20.000Đ) khi thanh toán qua ShopeePay.</p>
                    </div>
                </div>


            </div>
        </div>

        <!-- Right Section - Payment Details -->
        <div class="w-full rounded-md min-h-full" style="background-color: #161616;">
            <h2 class="text-xl font-bold mb-6">Thông tin thanh toán</h2>
            <div class="space-y-4 p-5">
                <div class="flex justify-between">
                    <span>Tài khoản:</span>
                    <span>{{$emailUser}}</span>
                </div>
                <div class="flex justify-between">
                    <span>Tên gói:</span>
                    <span class="uppercase">{{$name}}</span>
                </div>
                <div class="flex justify-between">
                    <span>Thời hạn gói:</span>
                    <span>{{$month}}</span>
                </div>
                <div class="flex justify-between">
                    <span>Dịch vụ:</span>
                    <span>Gói dịch vụ FPT Play</span>
                </div>
                <div class="flex justify-between">
                    <span>Giá gói:</span>
                    <span>{{$price}}</span>
                </div>
                <div class="flex justify-between">
                    <span>Giảm giá:</span>
                    <span>{{$discountAmount}}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-bold text-lg">Tổng thanh toán:</span>
                    <span class="font-bold text-lg">{{$this->getTotalPrice()}}</span>
                </div>

                <!-- Apply promo code section -->
                <div class="mt-4 flex relative w-[100%]">
                    <input wire:model="discountCode" type="text" placeholder="Mã khuyến mãi" class="p-[14px_16px] placeholder:font-bold  text-gray-400 w-[68%]"
                           style="border-radius:8px;border: none !important; outline: none !important;box-shadow: none !important;font-weight: 300; line-height: 150%;color: #fff;background: #0f0f0f;">
                    <button wire:click="applyDiscount" class="absolute right-0 p-[12px_24px] bg-orange-500 text-white rounded-md " style="background-color: #2c2c2e !important; border-radius: 8px;color: #616161;font-weight: 500;font-size: 16px;line-height: 150%;white-space: nowrap;">Áp dụng</button>
                </div>

                <!-- Payment Button -->
                <button type="button" wire:click="pay" class="bg-orange-600 text-white w-full mt-4 py-2 rounded-md">Thanh toán</button>
            </div>
        </div>
    </div>
