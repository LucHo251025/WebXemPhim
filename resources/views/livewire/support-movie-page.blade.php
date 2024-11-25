<div>
    {{-- Be like water. --}}

    <div class="bg-black">
        <div class="flex justify-center items-start w-full pt-[306px] pb-[226px]">
            <div class="flex flex-col items-start w-2/5 mx-[80px]">
                <div class="text-white text-[46px] font-semibold leading-[120%] pb-[14px]">
                    We are here for you whenever you need!
                </div>
                <div class="text-[#C0A6FF] text-[19px] font-normal leading-[120%] pb-[50px]">
                    We're here to help you with any problems you may be have while using Cine Sphere.
                </div>

                <div class="w-[500px] h-[509px] p-[10px] bg-black rounded-[27px] border-[12px] border-[#1A0B28] overflow-hidden inline-flex relative justify-start items-start gap-[10px]">
                    <div class="w-[513px] h-[483px] transform rotate-[-18.72deg] origin-[0_0] flex flex-col justify-start items-start gap-[23px] absolute right-[102px] top-[-16px] pr-[33px]">
                        <!-- PHP loop to generate images can remain as is -->
                        <?php for($i=0;$i<4;$i++){ ?>
                            <div class="flex justify-start items-center gap-[23px] inline-flex">
                                <?php for($j=0;$j<5;$j++){ ?>
                                    <img class="card-support" src="{{ Vite::asset($items->count() > $i*5+$j? $items[$i*5+$j]->links : 'resources/images/support-images/135x168.png') }}" />
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="bg-black p-[50px] rounded-tl-[60px] rounded-br-[60px] border-2 border-[#7300FF] inline-flex flex-col justify-start items-start gap-[50px] w-3/5 mr-[80px]">
                <div class="flex justify-start items-start gap-[50px] inline-flex">
                    <div class="flex flex-col justify-start items-start gap-[16px] flex-1">
                        <div class="text-white text-[19px] font-semibold leading-[22.8px]">First Name</div>
                        <input type="text" placeholder="Enter First Name" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                    </div>
                    <div class="flex flex-col justify-start items-start gap-[16px] flex-1">
                        <div class="text-white text-[19px] font-semibold leading-[22.8px]">Last Name</div>
                        <input type="text" placeholder="Enter Last Name" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                    </div>
                </div>
                <div class="flex justify-start items-start gap-[50px] inline-flex">
                    <div class="flex flex-col justify-start items-start gap-[16px] flex-1">
                        <div class="text-white text-[19px] font-semibold leading-[22.8px]">Email</div>
                        <input type="email" placeholder="Enter Your Email" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                    </div>
                    <div class="flex flex-col justify-start items-start gap-[16px] flex-1">
                        <div class="text-white text-[19px] font-semibold leading-[22.8px]">Phone Number</div>
                        <div class="flex justify-start items-center gap-[16px]">
                            <div class="w-[94px] p-[12px] rounded-[8px] border-2 border-[#8A3BFF] flex justify-between items-center cursor-pointer">
                                <!-- Placeholder for Flag Icon -->
                            </div>
                            <div class="flex-1 h-[63px] p-[20px] rounded-[8px] border-2 border-[#8A3BFF] flex items-center">
                                <input type="text" placeholder="Enter Phone Number" class="w-full text-[#DACDFF] text-[19px] font-normal border-none outline-none bg-transparent leading-[22.8px]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-start gap-[16px] h-[202px]">
                    <div class="text-white text-[19px] font-semibold leading-[22.8px]">Message</div>
                    <div class="h-[163px] p-[20px] rounded-[8px] border-2 border-[#8A3BFF] flex items-start">
                        <textarea placeholder="Enter your query" class="w-full h-full text-[#DACDFF] text-[19px] font-normal border-none outline-none resize-none bg-transparent leading-[22.8px]"></textarea>
                    </div>
                </div>

                <div class="flex justify-start items-center gap-[70px] inline-flex w-full">
                    <div class="flex justify-start items-center gap-[10px]">
                        <input type="checkbox" id="terms" class="custom-checkbox">
                        <label for="terms" class="checkbox-label">I agree with Terms of Use and Privacy Policy</label>
                    </div>
                    <div class="w-[170px] h-[67px] bg-[#7300FF] p-[10px] px-[22px] rounded-[20px] flex justify-center items-center">
                        <button class="text-white text-[23px] font-semibold leading-[27.6px]">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Frequently asked questions --}}
    <div class="flex flex-col justify-start items-center gap-[87px] w-full pb-[226px]" style="background-color: black ">
        <div class="text-white text-[48px] font-semibold leading-[57.6px] text-center">
            Frequently asked questions
        </div>
        <div class="flex justify-start items-center gap-[81px] inline-flex w-full">
            <div class="w-1/2 flex flex-col justify-start items-start gap-[71px] ml-[80px]">
                <!-- FAQ item -->
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What is Cine Sphere?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I download movies and shows to watch offline?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I share my account with others?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What if I forget my password?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Repeat for other FAQs -->
            </div>
            <div class="w-1/2 flex flex-col justify-start items-start gap-[71px] mr-[80px]">
                <!-- FAQ item -->
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What subscription plans does Cine Sphere offer?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Repeat for other FAQs -->
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I cancel my subscription?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I report an issue with the platform?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px]">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I create a Fan Art Creator Profile?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
