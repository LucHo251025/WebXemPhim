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
        <div class="flex w-[777px] h-[872px] p-[88px_154px] justify-center items-center gap-3 flex-shrink-0" style="border-radius: 30px;border: 2px solid rgba(255, 255, 255, 0.10);background: var(--Glass, rgba(89, 77, 91, 0.20));
    backdrop-filter: blur(24.5px);">
            <div class="flex w-[408px] flex-col items-center gap-3 flex-shrink-0">
                <div class="flex w-[356px] flex-col items-center gap-5">
                    <div class="flex flex-col items-center gap-9 self-stretch">
                        <div class="flex flex-col items-center self-stretch" style="gap: -20px">
                            <div class="login-signup flex items-center gap-3">
{{--                                <p class="text-white font-poppins leading-[120%]" style="font-size: 37px;font-weight: 700;">Login</p>--}}
{{--                                <div class="w-[1px] h-[42px]" style="background: #FFF;"></div>--}}
{{--                                <p class="font-poppins font-normal leading-[314.286%]" style="color:#A473FF;font-size: 35px;font-weight: 300;">Signup</p>--}}
                                <p class="text-white font-poppins leading-[120%]" style="font-size: 37px;font-weight: 700;">Forgot Password</p>

                            </div>
                            <p class="self-stretch text-center font-poppins font-normal leading-[120%]" style="font-weight: 400;font-size: 19px;color: rgba(255, 255, 255, 0.70);">Register Now to watch your favourite shows</p>
                        </div>
                        <p class="self-stretch text-white text-center font-poppins leading-[120%]" style="font-size: 19px;font-weight: 600;">Or</p>
                    </div>
                </div>
                <form wire:submit.prevent="save">
                    <div  class="flex flex-col items-start gap-8 self-stretch">
                        @if(session('success'))
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{session('success')}}</span>
                                </div>
                            </div>
                            @endsession
                        <div class="flex flex-col items-start gap-3 self-stretch">
                            <div class="flex flex-col items-start gap-8 self-stretch">
                                <div class="email-login flex p-[22px_40px] flex-col items-start gap-3 self-stretch" style="border-radius: 8px;border: 1px solid var(--Electric-Violet-400, #A473FF);background: rgba(48, 0, 119, 0.10);">
                                    <div class="flex justify-between items-center self-stretch">
                                        <input type="email" id="email" wire:model="email"
                                               class="text-white font-poppins leading-[120%] bg-transparent border-none focus:outline-none text-lg"
                                               style="font-size: 20px; font-weight: 400;"
                                               placeholder="Email Address"
                                               required>
                                        <img src="{{ Vite::asset('resources/images/play_image/iconamoon_profile-thin.svg') }}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-6 self-stretch">
                            <button type="submit" class="flex h-[53px] p-[16px_50px] justify-center items-center gap-3 self-stretch" style="border-radius: 8px;background: #7300FF;">
                                <p class="text-white font-poppins font-normal leading-[120%]" style="font-size: 15px;font-weight: 700;">Reset Password</p>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
