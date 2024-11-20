<div style="background: #000000; color:#fff">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div style=" height: 865px;
    background-image: url({{ Vite::asset('resources/images/upcoming_image/movies-main.jpg') }});
    background-size: cover;
">

        <div
            style="
                   height: 865px;
                   background: linear-gradient(353.54deg, #000000 9.64%, rgba(0, 0, 0, 0.731602) 37.09%, rgba(0, 0, 0, 0.468485) 45.71%, rgba(0, 0, 0, 0) 54.28%);">

            <div style="height:100%;display:flex;margin: 0px 120px;">
                <div style="
                            display : flex;
                            justify-content: end;
                            justify-items: end;
                            align-items: end;
                            flex: 1;
                            ">
                    <div style="flex: 1;">
                        <div style="display: flex;
                                flex-direction: column;
                                align-items: flex-start;
                                padding: 0px;
                                font-family: Poppins,sans-serif;
                                font-size: 46px;
                                font-weight: 700;
                                line-height: 55.2px;
                                text-align: left;">
                            Get Ready for Action: Upcoming Blockbusters You Can't Miss!

                        </div>
                        <div style="display: flex;
                                        flex-direction: column;
                                        align-items: flex-start;
                                        font-family: Poppins,sans-serif;
                                        font-size: 18px;
                                        line-height: 22.8px;
                                        text-align: left;
                                        padding-top:10px
                                                        ">
                            Prepare for an adrenaline-packed season with our upcoming blockbusters! From thrilling
                            action
                            sequences to heart-pounding adventures, these movies will keep you on the edge of your seat.
                            Mark your calendars for an unforgettable cinematic experience!
                        </div>
                    </div>

                    <div style="flex: 1;
                                       justify-items: center;
                                       display: flex;
                                       justify-content: center;
                              ">


                        <div style="    height: 119px; width: 100%;
                                 justify-content: end;    display: flex;">

                            <div style="width: 151px;
                                padding: 10px 22px 10px 22px;
                                gap: 10px;
                                border-radius: 0px 16px 0px 16px;
                               border: 2px solid #FFFFFF;
                               background: var(--Transluse2, #3000774D);
                                   margin-top: 70px;
                               ">
                                <div style="
                                        font-family: Poppins,sans-serif;
                                        font-size: 15px;
                                        font-weight: 600;
                                        line-height: 18px;
                                        text-align: left;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
">
                                    Movies
                                    <div style="width: 17px;
                                                        height: 11px;
                                                        margin-left: 5px;
                        
                                                    
">

                                        <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}">



                                    </div>

                                </div>

                            </div>


                            <div style="width: 151px;
                    padding: 10px 22px 10px 22px;
                    gap: 10px;
                    border-radius: 0px 16px 0px 16px;
                   border: 2px solid #FFFFFF;
                   background: var(--Transluse2, #3000774D);
                       margin-left: 33px;
                           margin-top: 70px;
                   ">
                                <div style="
                            font-family: Poppins,sans-serif;
                            font-size: 15px;
                            font-weight: 600;
                            line-height: 18px;
                            text-align: left;
                                display: flex;
                                align-items: center;
                                justify-content: center;
">
                                    2024
                                    <div style="width: 17px;
                                            height: 11px;
                                            margin-left: 5px;
            
                                        
">

                                        <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}">



                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>




                </div>






            </div>





        </div>
    </div>
    <div style="margin: 50px 120px 0px 120px;background: #000000;">

        <div style="
font-family: Poppins,sans-serif;
font-size: 29px;
font-weight: 600;
line-height: 34.8px;
text-align: left;
">
            Upcoming Movies
        </div>
    <?php foreach ($groupedMovies as $year_month => $movies) {
        $item=['year_month'=>$year_month, 'movies'=>$movies];
        ?>
       <x-upcoming-month :item="$item" />
        <?php }?>

        <div style="margin: 30px 0px 0px 0px; padding-bottom:30px" >            

                <div style="     width: 100%;
                                 justify-content: center;    display: flex;">

                    <div style="width: 151px;
                                padding: 10px 22px 10px 22px;
                                gap: 10px;
                                border-radius: 0px 16px 0px 16px;
                               border: 2px solid #FFFFFF;
                               background: var(--Transluse2, #3000774D);
                               ">
                        <div style="
                                        font-family: Poppins,sans-serif;
                                        font-size: 15px;
                                        font-weight: 600;
                                        line-height: 18px;
                                        text-align: left;
                                            display: flex;
                                            align-items: center;
">
                            Show more
                            <div style="width: 17px;
                                                        height: 11px;
                                                        margin-left: 5px;
                        
                                                    
">

                                <img src="{{ Vite::asset('resources/images/upcoming_image/Vector 3.png') }}">



                            </div>

                        </div>

                    </div>


                </div>
            </div>




        </div>
    </div>

</div>


</div>