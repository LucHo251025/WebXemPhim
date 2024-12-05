<div >
    {{-- Be like water. --}}


    <div style="background-color: black;">
        <div style="display: flex;
    align-items: flex-start;
    width: 100%;
    justify-content: center;
    padding-top: 306px;
    padding-bottom: 226px;
">
            <div style="    display: flex;
      width: 40%;
    flex-direction: column;
    align-items: flex-start;
    align-self: stretch;
    margin-right: 80px;
    margin-left: 80px;">

                <div style="align-self: stretch;
color: var(--Absolute-White, #FFF);
font-family: Poppins,sans-serif;
font-size: 46px;
font-style: normal;
font-weight: 600;
line-height: 120%;
padding-bottom: 14px;
 /* 55.2px */">
                    We are here for you whenever you need!

                </div>
                <div style="align-self: stretch;
color: var(--Electric-Violet-300, #C0A6FF);
font-family: Poppins,sans-serif;
font-size: 19px;
font-style: normal;
font-weight: 400;
line-height: 120%;
    padding-bottom: 50px; /* 22.8px */">
                    We're here to help you with any problems you may be have while using Cine Sphere.
                </div>


                 <div style="    width: 500px;
    height: 509px;padding: 10px; background: black; border-radius: 27px; overflow: hidden; border: 12px #1A0B28 solid; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex;position:relative;">
                        <div style="width: 513px; height: 483px; transform: rotate(-18.72deg); transform-origin: 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 23px; display: inline-flex;    padding-right: 33px;
    position: absolute;
  right: 102px  ;top:-16px;">

                            <?php for($i=0;$i<4;$i++){
                                ?>
  <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 23px; display: inline-flex">
                              <?php for($j=0;$j<5;$j++){
                                ?>
<img class="card-support"  src="{{ Vite::asset($items->count() > $i*5+$j? $items[$i*5+$j]->links : 'resources/images/support-images/135x168.png') }}" />

                                <?php

                                }
                               ?>
                               </div>
                               <?php
                            }
                            ?>
                        </div>
                 </div>






            </div>

            <div style=" padding: 50px; background: black;  border-top-right-radius: 60px; border: 2px #7300FF solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex;    border-bottom-left-radius: 60px;         width: 60%; margin-right:80px">
                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div style="align-self: stretch; color: white; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 22.80px; word-wrap: break-word">First Name</div>
                        <input type="text"
                        placeholder="Enter First Name"
                        style=" background-color: black;padding: 20px; border-radius: 8px; border: 2px #8A3BFF solid; color: #DACDFF; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 22.8px; width: 100%; box-sizing: border-box;">


                    </div>
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div style="align-self: stretch; color: white; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 22.80px; word-wrap: break-word">Last Name</div>
                        <input type="text"
                        placeholder="Enter Last Name"
                        style=" background-color: black;padding: 20px; border-radius: 8px; border: 2px #8A3BFF solid; color: #DACDFF; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 22.8px; width: 100%; box-sizing: border-box;">
                    </div>
                </div>
                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div style="align-self: stretch; color: white; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 22.80px; word-wrap: break-word">Email</div>
                        <input type="email"
                        placeholder="Enter Your Email"
                        style=" background-color: black;padding: 20px; border-radius: 8px; border: 2px #8A3BFF solid; color: #DACDFF; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 22.8px; width: 100%; box-sizing: border-box;">
                    </div>
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div style="align-self: stretch; color: white; font-size: 19px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 22.80px; word-wrap: break-word">Phone Number</div>
                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                            <!-- Dropdown Container with Flag Icon and Dropdown Arrow -->
                            <div style="width: 94px; align-self: stretch; padding: 12px; border-radius: 8px; border: 2px #8A3BFF solid; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">



                            </div>

                            <!-- Input Field for Phone Number -->
                            <div style="flex: 1 1 0; height: 63px; padding: 20px; border-radius: 8px; border: 2px #8A3BFF solid; display: flex; align-items: center;">
                                <input type="text" placeholder="Enter Phone Number" style="width: 100%; color: #DACDFF; font-size: 19px; font-family: Poppins,sans-serif, sans-serif; font-weight: 400; border: none; outline: none; background: transparent; line-height: 22.8px;">
                            </div>
                        </div>

                    </div>
                </div>
                <div style="align-self: stretch; height: 202px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex;">
                    <!-- Label for the Text Area -->
                    <div style="align-self: stretch; color: white; font-size: 19px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 22.8px; word-wrap: break-word;">Message</div>

                    <!-- Text Area Container -->
                    <div style="align-self: stretch; height: 163px; padding: 20px; border-radius: 8px; border: 2px #8A3BFF solid; display: flex; align-items: flex-start;">
                        <textarea placeholder="Enter your query" style="width: 100%; height: 100%; color: #DACDFF; font-size: 19px; font-family: Poppins, sans-serif; font-weight: 400; border: none; outline: none; resize: none; background: transparent; line-height: 22.8px;"></textarea>
                    </div>
                </div>

                <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 70px; display: inline-flex">
                    <div style="flex: 1 1 0; height: 28px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                        <input type="checkbox" id="terms" class="custom-checkbox">
                        <label for="terms" class="checkbox-label">I agree with Terms of Use and Privacy Policy</label>
                    </div>
                    <div  style="width: 170px; height: 67px; padding-left: 22px; padding-right: 22px; padding-top: 10px; padding-bottom: 10px; background: #7300FF;     border-bottom-left-radius: 20px;; border-top-right-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div style="width: 100%; height: 100%; padding-left: 22px; padding-right: 22px; padding-top: 10px; padding-bottom: 10px; background: #7300FF; border-top-left-radius: 20px; border-top-right-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <div style="justify-content: flex-start; align-items: center; gap: 7px; display: inline-flex">
                            <button style="color: white; font-size: 23px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 27.60px; word-wrap: break-word">Button</button>
                            </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

      {{-- Frequently asked questions --}}


      <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 87px; display: inline-flex;padding-bottom:226px">
        <div style="align-self: stretch; text-align: center; color: white; font-size: 48px; font-family: Poppins,sans-serif; font-weight: 600; line-height: 57.60px; word-wrap: break-word">Frequently asked questions</div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 81px; display: inline-flex">
            <div style="width: 50%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 71px; display: inline-flex;margin-left:80px">
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">What is Cine Sphere?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                          <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">Can I download movies and shows to watch offline?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">Can I share my account with others?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">What if I forget my password?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div style="    width: 50%;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 71px;
    display: inline-flex;
    margin-right: 80px;">
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">What subscription plans does Cine Sphere offer?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">How do I cancel my subscription?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">How do I report an issue with the platform?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="align-self: stretch; height: 127px; padding-left: 20px; padding-right: 20px; background: rgba(48, 0, 119, 0.30); border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 50px; display: flex">
                    <div style="align-self: stretch; padding-left: 30px; padding-right: 30px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex: 1 1 0; color: white; font-size: 37px; font-family: Poppins,sans-serif; font-weight: 400; line-height: 44.40px; word-wrap: break-word">How do I create a Fan Art Creator Profile?</div>
                        <div style="width: 90px; height: 90px; padding: 10px; background: #1A0B28; border-radius: 98px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <img src="{{ Vite::asset("resources/images/support-images/Vector3.png")  }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  style="width: 228px; height: 67px; padding-top: 10px; padding-bottom: 10px; background: #7300FF;     border-bottom-left-radius: 20px;; border-top-right-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
            <div style="width: 200px; height: 100%; padding-left: 22px; padding-right: 22px; padding-top: 10px; padding-bottom: 10px; background: #7300FF; border-top-left-radius: 20px; border-top-right-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div style="justify-content: flex-start; align-items: center; gap: 7px; display: inline-flex">
                <button style="color: white; font-size: 23px; font-family: Poppins,sans-serif; line-height: 27.60px; word-wrap: break-word">Ask a Question</button>
                </div>
            </div>
        </div>
    </div>


</div>
