<div>
    {{-- Be like water. --}}

    <div class="bg-black">
        <div class="flex flex-wrap justify-center items-start w-full pt-[306px] pb-[226px]">
            <div class="flex flex-col items-start  lg:w-[50%] w-full pl-[40px]">
                <div class="text-white text-[46px] font-semibold leading-[120%] pb-[14px]">
                    We are here for you whenever you need!
                </div>
                <div class="text-[#C0A6FF] text-[19px] font-normal leading-[120%] pb-[50px]">
                    We're here to help you with any problems you may be have while using Cine Sphere.
                </div>

                <div class="w-[95%] h-[911px] lg:w-[500px] lg:h-[549px] p-[10px] bg-black rounded-[27px] border-[12px] border-[#1A0B28] overflow-hidden inline-flex relative justify-start items-start gap-[10px]">
                    <div class="w-[100%] h-[483px] transform rotate-[-18.72deg] origin-[0_0] flex flex-col justify-start items-start gap-[23px] absolute lg:right-[250px] right-[300px] top-[-16px] pr-[33px]">
                       
        
                        @foreach(range(0, 3) as $i)  {{-- Loop for 4 rows --}}
                        <div class="flex gap-6">
                            @foreach(range(0, 4) as $j)  {{-- Loop for 5 images per row --}}
                                @php
                                    $index = $i * 5 + $j;
                                    $imageSrc = $items->count() > $index ? Vite::asset($items[$index]->links) : 'resources/images/support-images/135x168.png';
                                @endphp
                                <img class="card-support lg:w-[130px] w-[200px] object-cover" src="{{ $imageSrc }}" />
                            @endforeach
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-black lg:w-[50%] w-full ">
                <form wire:submit.prevent="sendEmail">
                <div class="mr-10 ml-10 p-[50px] rounded-tl-[60px] rounded-br-[60px] border-2 border-[#7300FF] inline-flex flex-col justify-start items-start mt-[115px] "> 
                    @if($errors->any())
                     <x-toast-errors-message :errors="$errors" />

                @endif
                
                @if (session()->has('successMessage'))
                    <div class="p-4 rounded-lg mb-5 font-sans text-green-800 bg-green-100 border border-green-300">
                        {{ session('successMessage') }}
                    </div>
                @endif
                

                    <div class=" justify-start items-start inline-flex w-full flex-wrap ">
                        <div class="flex flex-col justify-start items-start gap-[10px] lg:w-[50%] w-full lg:pr-[20px] pt-[50px]">
                            <div class="text-white text-[19px] font-semibold leading-[22.8px]">First Name</div>
                            <input wire:model="firstName" type="text" placeholder="Enter First Name" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                        </div>
                        <div class="flex flex-col justify-start items-start gap-[10px] lg:w-[50%] w-full lg:pl-[20px] pt-[50px]">
                            <div class="text-white text-[19px] font-semibold leading-[22.8px]">Last Name</div>
                            <input wire:model="lastName" type="text" placeholder="Enter Last Name" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                        </div>
                    </div>
                    <div class=" justify-start items-start inline-flex w-full flex-wrap">
                        <div class="flex flex-col justify-start items-start gap-[10px]  lg:w-[50%] w-full lg:pr-[20px] pt-[50px]">
                            <div class="text-white text-[19px] font-semibold leading-[22.8px]">Email</div>
                            <input wire:model="email" type="email" placeholder="Enter Your Email" class="bg-black p-[20px] rounded-[8px] border-2 border-[#8A3BFF] text-[#DACDFF] text-[19px] font-normal leading-[22.8px] w-full box-border">
                        </div>
                        <div class="flex flex-col justify-start items-start gap-[16px]  lg:w-[50%] w-full lg:pl-[20px] pt-[50px]">
                            <div class="text-white text-[19px] font-semibold leading-[22.8px]">Phone Number</div>
                            <div class="flex justify-start items-center gap-[10px]">
                                <div class="w-[94px] p-[12px] rounded-[8px] border-2 border-[#8A3BFF] flex justify-between items-center cursor-pointer" style="    width: 25%;">
                                   <img src="{{ Vite::asset("resources/images/support-images/flag.png")  }}" alt="" style="    width: 70%;">
                                   <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="" style="    width: 20%;">
                                </div>
                                <div class="flex-1 h-[63px] p-[20px] rounded-[8px] border-2 border-[#8A3BFF] flex items-center">
                                    <input wire:model="phone" type="text" placeholder="Enter Phone Number" class="w-full text-[#DACDFF] text-[19px] font-normal border-none outline-none bg-transparent leading-[22.8px]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-start gap-[16px] h-[202px] pt-[50px]" style="width: 100%; ">
                        <div class="text-white text-[19px] font-semibold leading-[22.8px]">Message</div>
                        <div class="h-[163px] p-[20px] rounded-[8px] border-2 border-[#8A3BFF] flex items-start" style="    width: 100%;">
                            <textarea wire:model="messageUser" placeholder="Enter your query" class="w-full h-full text-[#DACDFF] text-[19px] font-normal border-none outline-none resize-none bg-transparent leading-[22.8px]"></textarea>
                        </div>
                    </div>
    
                    <div class=" justify-start items-center inline-flex  w-full flex-wrap">
                        <div class="flex justify-start items-center gap-[10px] lg:w-[50%] w-full pt-[50px]">
                            <input wire:model="agree" type="checkbox" id="terms" class="custom-checkbox">
                            <label for="terms" class="checkbox-label">I agree with Terms of Use and Privacy Policy</label>
                        </div>
                        <div class="lg:w-[50%] w-full lg:pl-[20px] pt-[50px]" style="display: flex;justify-content: right;">
                            <div class=" w-full lg:w-[170px] h-[67px] bg-[#7300FF] p-[10px] px-[22px] rounded-[20px] flex justify-center items-center">
                                <button type="submit" class="text-white text-[23px] font-semibold leading-[27.6px]">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
  
        </div>
    </div>

    {{-- Frequently asked questions --}}
    <div class="flex flex-col justify-start items-center gap-[87px] w-full pb-[226px]" style="background-color: black ">
        <div class="text-white text-[48px] font-semibold leading-[57.6px] text-center">
            Frequently asked questions
        </div>
        <div class=" justify-start items-center  inline-flex w-full flex-wrap flex-wrap:wrap">
            <div class="w-full flex flex-row flex-wrap justify-start items-start" >
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What is Cine Sphere?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I download movies and shows to watch offline?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I share my account with others?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What if I forget my password?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What subscription plans does Cine Sphere offer?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I cancel my subscription?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I create a Fan Art Creator Profile?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-[35px]">
                    <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] ">
                        <div class="flex justify-between items-center w-full px-[30px]">
                            <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I report an issue with the platform?</div>
                            <div class="w-[90px] h-[90px] p-[10px] bg-[#3d3a41] rounded-full flex justify-center items-center">
                                <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I download movies and shows to watch offline?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2">
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">Can I share my account with others?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2"   >
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What if I forget my password?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- FAQ item -->
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2"   >
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">What subscription plans does Cine Sphere offer?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Repeat for other FAQs -->
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] pt-2.5 w-full lg:w-1/2"   >
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I cancel my subscription?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2"   >
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I report an issue with the platform?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="lg:h-[222px] xl:h-[133px] bg-[rgba(48,0,119,0.30)] p-[20px] rounded-[20px] flex flex-col justify-center items-center gap-[50px] w-full lg:w-1/2"   >
                    <div class="flex justify-between items-center w-full px-[30px]">
                        <div class="flex-1 text-white text-[37px] font-normal leading-[44.4px]">How do I create a Fan Art Creator Profile?</div>
                        <div class="w-[90px] h-[90px] p-[10px] bg-[#1A0B28] rounded-full flex justify-center items-center">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png") }}" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
