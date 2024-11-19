    <div class="flex max-w-5xl mx-auto p-8 gap-9">
        <div class="w-full  md:grid-cols-2 gap-8">
            <!-- Left Section - Payment Methods -->
            <div class="space-y-4 w-full">
                <h2 class="text-xl font-bold mb-4">Chọn hình thức thanh toán</h2>

                <!-- Payment Option 1 -->
                <label class="block p-4 rounded-md" style="background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">Ví ShopeePay</span>
                    <p class="text-sm text-gray-400">Giảm ngay 10% - Giảm tối đa 20.000Đ (đơn tối thiểu 20.000Đ) khi thanh toán qua ShopeePay.</p>
                </label>

                <!-- Payment Option 2 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">VietQR</span>
                </label>

                <!-- Payment Option 3 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">Ví ZaloPay</span>
                    <p class="text-sm text-gray-400">Hoàn ngay 10% - Hoàn tối đa 10.000Đ khi thanh toán lần đầu qua ZaloPay.</p>
                </label>

                <!-- Payment Option 4 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">VNPAY-QR</span>
                </label>

                <!-- Payment Option 5 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">FPT Pay</span>
                </label>

                <!-- Payment Option 6 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">Ví MoMo</span>
                </label>

                <!-- Payment Option 7 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">Viettel Pay</span>
                    <p class="text-sm text-gray-400">Lưu ý: Không hỗ trợ áp dụng mã giảm giá khi thanh toán qua cổng Viettel Pay.</p>
                </label>

                <!-- Payment Option 8 -->
                <label class="block  p-4 rounded-md" style="    background-color: #161616;">
                    <input type="radio" name="payment" class="mr-2">
                    <span class="font-bold">Thẻ ATM</span>
                </label>
            </div>
        </div>

        <!-- Right Section - Payment Details -->
        <div class="w-full rounded-md min-h-full" style="background-color: #161616;">
            <h2 class="text-xl font-bold mb-6">Thông tin thanh toán</h2>
            <div class="space-y-4 p-5">
                <div class="flex justify-between">
                    <span>Tài khoản:</span>
                    <span>0796967806</span>
                </div>
                <div class="flex justify-between">
                    <span>Tên gói:</span>
                    <span>Gói Combo SMAX K+</span>
                </div>
                <div class="flex justify-between">
                    <span>Thời hạn gói:</span>
                    <span>6 Tháng</span>
                </div>
                <div class="flex justify-between">
                    <span>Dịch vụ:</span>
                    <span>Gói dịch vụ FPT Play</span>
                </div>
                <div class="flex justify-between">
                    <span>Giá gói:</span>
                    <span>1.134.000 VND</span>
                </div>
                <div class="flex justify-between">
                    <span>Giảm giá:</span>
                    <span>0 VND</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-bold text-lg">Tổng thanh toán:</span>
                    <span class="font-bold text-lg">1.134.000 VND</span>
                </div>

                <!-- Apply promo code section -->
                <div class="mt-4 flex relative w-[100%]">
                    <input type="text" placeholder="Mã khuyến mãi" class="p-[14px_16px] placeholder:font-bold  text-gray-400 w-[68%]"
                           style="border-radius:8px;border: none !important; outline: none !important;box-shadow: none !important;font-weight: 300; line-height: 150%;color: #fff;background: #0f0f0f;">
                    <button class="absolute right-0 p-[12px_24px] bg-orange-500 text-white rounded-md " style="background-color: #2c2c2e !important; border-radius: 8px;color: #616161;font-weight: 500;font-size: 16px;line-height: 150%;white-space: nowrap;">Áp dụng</button>
                </div>

                <!-- Payment Button -->
                <button class="bg-orange-600 text-white w-full mt-4 py-2 rounded-md">Thanh toán</button>
            </div>
        </div>
    </div>
