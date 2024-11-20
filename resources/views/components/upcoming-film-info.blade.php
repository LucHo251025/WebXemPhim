<div style="display: flex; margin: 10px 10px; width:45%; align-items: center;">
    <div style="width: 142px;
height: 142px;
border-radius: 71px;
border: 3px;
background: var(--Transluse2, #3000774D);
border: 3px solid #7300FF;
display: flex;
justify-content: center;
align-items: center;

">
        <div style="width: 68px;
height: 77px;
font-family: Poppins,sans-serif;
font-size: 64px;
font-weight: 700;
line-height: 76.8px;
text-align: left;
color: var(--Primary, #7300FF); 
text-align: center;
">{{ $movie->release_day_upcoming }}</div>
    </div>
    <div style="margin-left: 20px;">
        <img src="{{ Vite::asset($movie->links) }}" style="width: 134px;
height: 125px;
border-radius: 29px;
">
    </div>
    <div style="display: flex;
flex-direction: column;
justify-content: center;
margin-left: 20px;">
        <div style="
font-family: Poppins,sans-serif;
font-size: 29px;
font-weight: 600;
line-height: 34.8px;
text-align: left;
">{{ $movie->title_upcoming }}</div>
        <div style="
font-family: Poppins,sans-serif;
font-size: 19px;
font-weight: 400;
line-height: 22.8px;
text-align: left;
">Wordwide</div>
    </div>


</div>