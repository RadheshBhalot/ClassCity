@extends('header')
@section('nav')
<style>
    #aboutimg {
      background-image: url("{{ asset('counter-bc.jpg') }}");
        background-size: cover;
        background-position: center;
        position: relative;
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        /* margin-top: 20px; */
        font-size: 60px;
    }

    #aboutimg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    #aboutimg h3 {
        position: relative;
        z-index: 2;
        font-size: 2rem;
        font-weight: bold;
        
    }

    #hea {
        margin-left: 0px;
        font-size: 20px;
        color: #7a7a7a;
    }
    #hed {
        color: red;
        font-size: 15px;
        margin-left: 4%;
        margin-top: -4%;
        font-style: italic;

    }
ul.tip-list {
    padding-left: 18px;
    list-style: none;
    font-family: Arial, sans-serif;
}

ul.tip-list li {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

ul.tip-list li span {
    color: #999;
    float: right;
}
strong{
    color:#7a7a7a;
    font-size: 15px;
}
p{
    color:#7a7a7a;
}
</style>
<div id="aboutimg">
    <h3>PARTY BAR RENTAL TIPS</h3>
</div>

<div class="container mt-4">
    <div class="row">

        <div class="col-md-8 mb-4">
            <h1 style="font-size: 35px;margin-top:50px; ">Party Bar Rental Tips</h1>
            <p id="hea">category: <span id="hed">Bar Rental Tips</span></p>
             <img src="{{ asset($item['image']) }}"style="width: 100%; height: 500px; object-fit: cover;">
              <p style="margin-top: 20px;color:#7a7a7a">Tips on Hiring Bar Rental Tips</p>
                <p>Are you planning to arrange an open bar in your upcoming event? To set up the bar, you need to rent some essential bar rentals for party whether it is a wedding, anniversary or any kind of celebration. The arrangements for your bar set up may need to be adjusted based on your guest list and their drinking preferences. Planning an available bar at major events like private parties, weddings, family get-togethers and business events is a growing trend. When you are going to include bar in your special occasion, maintaining best bar equipment is essential.</p>
            <strong>Here are some essential supplies that you need to rent for your upcoming event:</strong><br>
        <br>
            <strong>Portable bar:</strong>
            <p>For setting up a party bar, it is essential for renting portable bar. But make sure that you have enough room around the bar for people to mill about. These portable bars come with proper spacing and shelf for glassware and supplies.</p>
            <strong>Glassware</strong>
            <p>Glassware is one of the most important things for bar setup. Glassware rentals for weddings, anniversaries and family get-togethers can give all the essentials you need to organize a well-planned party. You can rent this barware from a wide variety of collection. You can just have a look at various glassware by visiting our site.</p>
            <strong>Bar spoons:</strong>
            <p>Boor spoons are the long handled spoons to blend tall drinks, and to add dollops of whipped cream to mixed drink concoctions and café beverages. These spoons are used for tasting.</p>
            <strong>Beer coolers:</strong>
            <p>This equipment is essential for cooling wine and beverages. You will find a variety of beverage coolers ranging from can coolers and wine coolers to portable beverage coolers. These coolers come in a variety of sizes that can store between 8 to 80 bottles of wine and beverages. So, consider renting a beverage cooler based on your guest list.</p>
            <hstrong5>Bottle openers:</strong>
            <p>For opening beer bottles, be sure to use a bottle opener. Some are handheld while others are mounted on the wall. For the ones mounted on the wall, attach a cap catcher underneath.</p>
            <strong>Ice bucket:</strong>
            <p>Ice buckets are available in various shapes, sizes, and styles. They are available in plastic, glass or metal forms. There is a large collection of ice buckets like: mood light chiller, metal ice bucket, chrome-plated ice bucket, champagne bucket with base, ice bucket with lid, aluminum ice bucket, etc</p>
            <strong>Cocktail shakers:</strong>
            <p>There are a wide collection of cocktail shakers in different designs and styles. These bar rentals are available in many styles, ranging from the function-only to the designer. For making cocktails, use a cocktail shaker for superior mixing of drinks. Some units include lids, while others require the use of another cup to cover when mixing.</p>
            <strong>Bar stools:</strong>
            <p>Stools are the most important things to rent when considering bar setup at your party. Rental bar stools for party can be made of different types of materials such as metal, plastic, and wood. Your choice of bar stools will entirely depend on your party theme.</p>
          <p style="margin-top:40px;font-size:15px;">You can order any of these products at –Bar Rental Tips</p>
       
 
     </div>
           

        <div class="col-md-4 mb-4">
            <div style=" padding: 15px; ">
                <h4 style="margin-left:20px;text-transform: uppercase;color: #000;border-bottom: 1px solid #cdcdcd; font-weight:600; font-size:15px;padding-bottom: 10px;">CATEGORIES</h4>
                <ul class="tip-list">
                <li style="color: #000">Bar Setup Tips <span style=" color:#000">(8)</span></li>
                <li>Canopies Rental Tips <span style=" color:#000 ">(8)</span></li>
                <li>Casino Rental Tips <span  style=" color:#000 ">(3)</span></li>
                <li>Catering Equipment Tips <span style=" color:#000 ">(6)</span></li>
                <li>Chairs Rental Tips <span style=" color:#000 ">(3)</span></li>
                <li>China Rental Tips <span style=" color:#000 ">(8)</span></li>
                <li>Concession Supplies Tips <span style=" color:#000 ">(12)</span></li>
                <li>Safety & Legal Tips <span style=" color:#000 ">(5)</span></li>
                <li>Entertainment Tips <span style=" color:#000 ">(1)</span></li>
                <li>Fountains Rental Tips <span style=" color:#000 ">(7)</span></li>
                <li>Garden Rental Tips <span style=" color:#000 ">(0)</span></li>
                <li>Glassware Rental Tips <span style=" color:#000 ">(7)</span></li>
                <li>Heaters & Coolers Tips <span style=" color:#000 ">(3)</span></li>
                <li>Lighting Rental Tips <span style=" color:#000 ">(6)</span></li>
            </ul>
            </div>
            
        </div>

<div class="container">
    <h3 style="margin-top:30px; font-weight:bold; font-size:25px;">RELATED ARTICLES</h3>
    <hr style="width:10%; border:solid 1px red;margin-left:0%; margin-top:10px;" />
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('2 - Copy.jpg') }}" style="width:80%; height:200px; object-fit:cover;">
            <p style="text-align:center;width:80%; color:#000; cursor:pointer; padding:10px; font-weight:bold; text-transform:uppercase; box-shadow:2px 2px 5px rgba(0, 0, 0, 0.3);">
                Tent and Canopy Rental Guide
            </p>
        </div>

        <div class="col-md-6 mb-4">
            <img src="{{ asset('2 - Copy.jpg') }}" style="width:80%; height:200px; object-fit:cover;">
            <p style="text-align:center; color:#000; width:80%;cursor:pointer; padding:10px; font-weight:bold; text-transform:uppercase; box-shadow:2px 2px 5px rgba(0, 0, 0, 0.3);">
                Tent and Canopy Rental Guide
            </p>
        </div>
    </div>
</div>

    </div>
</div>

@endsection         
