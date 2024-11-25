<div style="margin: 50px 0px">
    <div style="font-family: Poppins, SANS-SERIF;
font-size: 29px;
font-weight: 600;
line-height: 34.8px;
text-align: left;
}
">
        {{ convertYearMonthToMonthName($item['year_month'])}}
        <hr style="    border: #A473FF 1px solid;
margin: 25px 0px;">

        <div style="display: flex">
            <div style="display: flex;
flex:1;
flex-wrap: wrap;
flex-direction: row;">
                
            <?php foreach ($item['movies'] as $movie) {?>
                <x-upcoming-film-info :movie="$movie"  />
                <?php }?>
            </div>

        </div>
    </div>




</div>