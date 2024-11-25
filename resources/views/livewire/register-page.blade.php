<div class="flex w-full h-[100vh] p-[104px_90px] justify-center items-center" style="background: url({{ Vite::asset('resources/images/play_image/background.jpg') }}) lightgray 50% / cover no-repeat;">
<div class="flex w-[1740px] justify-between items-center flex-shrink-0">
    <div class="flex w-[805px] flex-col items-center gap-12 flex-shrink-0">
        <p class="flex h-36 flex-col justify-center self-stretch text-center font-normal font-poppins leading-[120%]"
           style="font-size: 125px;font-weight: 700;color:#7300FF";>
            Cine Sphere
        </p>
        <p class="self-stretch text-white text-center font-poppins leading-[120%] font-normal" style="font-size: 80px;font-weight: 700">
            The world’s Largest Movie Library
        </p>
    </div>


    <div class="flex w-[800px] h-[1070px] p-[88px_154px] justify-center items-center gap-3 flex-shrink-0" style="border-radius: 30px;border: 2px solid rgba(255, 255, 255, 0.10);background: var(--Glass, rgba(89, 77, 91, 0.20));
backdrop-filter: blur(24.5px);">
        <div class="flex w-[408px] flex-col items-center gap-3 flex-shrink-0">
            <div class="flex w-[356px] flex-col items-center gap-5">
                <div class="flex flex-col items-center gap-9 self-stretch">
                    <div class="flex flex-col items-center self-stretch" style="gap: -20px">
                        <div class="login-signup flex items-center gap-3">
                            <p class="text-white font-poppins leading-[120%]" style="font-size: 37px;font-weight: 700;">Login</p>
                            <div class="w-[1px] h-[42px]" style="background: #FFF;"></div>
                            <p class="font-poppins font-normal leading-[314.286%]" style="color:#A473FF;font-size: 35px;font-weight: 300;">Signup</p>
                        </div>
                        <p class="self-stretch text-center font-poppins font-normal leading-[120%]" style="font-weight: 400;font-size: 19px;color: rgba(255, 255, 255, 0.70);">Register Now to watch your favourite shows</p>
                    </div>
                    <p class="self-stretch text-white text-center font-poppins leading-[120%]" style="font-size: 19px;font-weight: 600;">Or</p>
                </div>
            </div>
            <form wire:submit.prevent="save">
                <div class="flex flex-col items-start gap-8 self-stretch">

                    <div class="flex flex-col items-start gap-3 self-stretch">
                        <div class="flex flex-col items-start gap-4 self-stretch">
                            <div class="email-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                                <div class="flex justify-between items-center self-stretch">
                                    <input type="text" id="name" wire:model="name"
                                           class="text-white font-poppins leading-[120%] bg-transparent border-none focus:outline-none text-lg"
                                           style="font-size: 20px; font-weight: 400;"
                                           placeholder="User Name"
                                           >
                                    <img src="{{ Vite::asset('resources/images/play_image/iconamoon_profile-thin.svg') }}" alt="">
                                </div>
                            </div>
                            @error('name')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{$message}}</span>
                            </div>
                            @enderror
                            <div class="password-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                                <div class="flex justify-between items-center self-stretch">
                                    <input type="email" id="email" wire:model="email"
                                           class="text-white font-poppins leading-[120%] bg-transparent border-none focus:outline-none"
                                           style="font-size: 20px; font-weight: 400;"
                                           placeholder="Email Address"
                                           >
                                    <img src="{{ Vite::asset('resources/images/play_image/ic_baseline-email.svg') }}" alt="">
                                </div>
                            </div>
                            @error('email')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{$message}}</span>
                            </div>
                            @enderror
                            <div class="password-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                                <div class="flex justify-between items-center self-stretch">
                                    <input type="password" id="password" wire:model ='password'
                                           class="text-white font-poppins leading-[120%] bg-transparent border-none focus:outline-none"
                                           style="font-size: 20px; font-weight: 400;"
                                           placeholder="Password"
                                           >
                                    <img src="{{ Vite::asset('resources/images/play_image/tabler_lock-filled.svg') }}" alt="">
                                </div>
                            </div>
                            @error('password')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{$message}}</span>
                            </div>
                            @enderror
                            <div class="password-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                                <div class="flex justify-between items-center self-stretch">
                                    <input type="password" id="password_confirmation" wire:model="password_confirmation"
                                           class="text-white font-poppins leading-[120%] bg-transparent border-none focus:outline-none"
                                           style="font-size: 20px; font-weight: 400;"
                                           placeholder="Confirm Password"
                                           >
                                    <img src="{{ Vite::asset('resources/images/play_image/tabler_lock-filled.svg') }}" alt="">
                                </div>
                            </div>
                            @error('password-confirmation')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{$message}}</span>
                            </div>
                            @enderror

                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex w-[24px] h-[24px] p-[6px] items-center gap-3" style="border-radius: 12px;border: 1px solid #FFF;">
                                <img src="{{ Vite::asset('resources/images/play_image/Ellipse 12.svg') }}" alt="">
                            </div>
                            <p class="w-full h-[17px] text-white font-pooppins font-normal leading-[120%]" style="font-size: 12px;font-weight: 400;">I agree to the privacy policy & Terms and conditions</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-6 self-stretch">
                        <button type="submit" class="flex h-[53px] p-[16px_50px] justify-center items-center gap-3 self-stretch" style="border-radius: 8px;background: #7300FF;">
                            <p class="text-white font-poppins font-normal leading-[120%]" style="font-size: 15px;font-weight: 700;">Sign Up</p>
                        </button>
                        <div class="flex items-center gap-3">
                            <img src="{{ Vite::asset('resources/images/play_image/ri_facebook-fill.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/images/play_image/twitter.svg') }}" alt="">
                            <img src="{{ Vite::asset('resources/images/play_image/mage_instagram-circle.svg') }}" alt="">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
</div>

