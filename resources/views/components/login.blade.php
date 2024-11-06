<div class="flex w-[408px] flex-col items-center gap-2 flex-shrink-0">
    <div class="flex w-[356px] flex-col items-center gap-5">
        <div class="flex flex-col items-center gap-9 self-stretch">
            <div class="flex flex-col items-center self-stretch" style="gap: -20px">
                <div class="login-signup flex items-center gap-3">
                    <p class="text-white font-poppins leading-[120%]" style="font-size: 37px;font-weight: 700;">Login</p>
                    <div class="w-[1px] h-[42px]" style="background: #FFF;"></div>
                    <p class="font-poppins font-normal leading-[314.286%]" style="color:#A473FF;font-size: 35px;font-weight: 300;">Signup</p>
                </div>
                <p class="self-stretch text-center font-poppins font-normal leading-[120%]" style="font-weight: 400;font-size: 19px;color: rgba(255, 255, 255, 0.70);">Log in to watch your favourite shows</p>
            </div>
            <div class="flex items-center gap-9 self-stretch">
                <div class="items-center gap-3 p-[18px_63px]" style="border-radius: 10px;border: 1.3px solid rgba(255, 255, 255, 0.18);background: rgba(217, 217, 217, 0.10);">
                    <img class="flex-shrink-0" src="{{ Vite::asset('resources/images/play_image/flat-color-icons_google.svg') }}" alt="">
                </div>
                <div class="items-center gap-3 p-[18px_63px]" style="border-radius: 10px;border: 1.3px solid rgba(255, 255, 255, 0.18);background: rgba(217, 217, 217, 0.10);">
                    <img class="flex-shrink-0" src="{{ Vite::asset('resources/images/play_image/ri_facebook-fill.svg') }}" alt="">
                </div>
            </div>
            <p class="self-stretch text-white text-center font-poppins leading-[120%]" style="font-size: 19px;font-weight: 600;">Or</p>
        </div>
    </div>
    <div class="flex flex-col items-start gap-8 self-stretch">
        <div class="flex flex-col items-start gap-3 self-stretch">
            <div class="flex flex-col items-start gap-8 self-stretch">
                <div class="email-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                    <div class="flex justify-between items-center self-stretch" >
                        <p class="text-white font-poppins leading-[120%]" style="font-size: 12px;font-weight: 400;">
                            Email Address
                        </p>
                        <img src="{{ Vite::asset('resources/images/play_image/ic_baseline-email.svg') }}" alt="">
                    </div>
                </div>
                <div class="password-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                    <div class="flex justify-between items-center self-stretch" >
                        <p class="text-white font-poppins leading-[120%]" style="font-size: 12px;font-weight: 400;">
                            Password
                        </p>
                        <img src="{{ Vite::asset('resources/images/play_image/tabler_lock-filled.svg') }}" alt="">
                    </div>
                </div>

            </div>
            <div class="flex items-center gap-3">
                <div class="flex w-[24px] h-[24px] p-[6px] items-center gap-3" style="border-radius: 12px;border: 1px solid #FFF;">
                    <img src="{{ Vite::asset('resources/images/play_image/Ellipse 12.svg') }}" alt="">
                </div>
                <p class="w-[91px] h-[17px] text-white font-pooppins font-normal leading-[120%]" style="font-size: 12px;font-weight: 400;">Remember Me</p>
            </div>
        </div>
        <div class="flex flex-col items-center gap-6 self-stretch">
            <button class="flex h-[53px] p-[16px_50px] justify-center items-center gap-3 self-stretch" style="border-radius: 8px;background: #7300FF;">
                <p class="text-white font-poppins font-normal leading-[120%]" style="font-size: 15px;font-weight: 700;">LOGIN</p>
            </button>
            <div class="flex items-center gap-3">
                <img src="{{ Vite::asset('resources/images/play_image/ri_facebook-fill.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/images/play_image/twitter.svg') }}" alt="">
                <img src="{{ Vite::asset('resources/images/play_image/mage_instagram-circle.svg') }}" alt="">

            </div>
        </div>

    </div>
</div>
