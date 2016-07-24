<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/shopping.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/shopping.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</head>


<body>
    <!-- nav sidebar -->
    <aside>
        <nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

            <div class="nav-side-menu">
                <div class="brand">Brand Shopping</div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                <div class="menu-list">

                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard fa-lg"></i>Catogeries
                            </a>
                        </li>

                        <li data-toggle="collapse" data-target="#products" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Mobile & Accessories  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="products">
                            <li class="active"><a href="#"><strong>Mobiles</strong></a>
                            </li>
                            <li><a href="#">Features Phone</a>
                            </li>
                            <li><a href="#">Smart Phone</a>
                            </li>
                            <li><a href="#"><strong>Tablets</strong></a>
                            </li>

                            <li><a href="#">Calling Tablet</a>
                            </li>
                            <li><a href="#">Non-calling Tablet</a>
                            </li>
                            <li><a href="#"><strong>MObile Accessories</strong></a>
                            </li> <li><a href="#">Mobile Enhancement</a>
                            </li>
                            <li><a href="#">Power Banks</a>
                            </li>
                            <li><a href="#">Blutooth Headsets</a>
                            </li>
                            <li><a href="#">Cases & Covers</a>
                            </li>
                            <li><a href="#">MObile SCreen Guards</a>
                            </li>
                            <li><a href="#">Cables</a>
                            </li <li><a href="#">Mobile Chargers</a>
                            </li>
                            <li><a href="#">Selfie Stick</a>
                            </li>
                            <li><a href="#">Mobile Skins</a>
                            </li>
                            <li><a href="#">Mobile Accessories Combos</a>
                            </li>
                            <li><a href="#">MObile Lenses</a>
                            </li>
                            <li><a href="#">Mobile Holders</a>
                            </li <li><a href="#">Mobile Charms</a>
                            </li>
                            <li><a href="#">Card Reader </a>
                            </li>

                        </ul>





                        <li data-toggle="collapse" data-target="#Electric" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Electronics  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Electric">
                            <li class="active"><a href="#"><strong>Home Appiances</strong></a>
                            </li>
                            <li><a href="#">Air Conditioner</a>
                            </li>
                            <li><a href="#">Washing Machines</a>
                            </li>
                            <li><a href="#">Wter Purifier</a>
                            </li>

                            <li><a href="#">Refrigerators</a>
                            </li>
                            <li><a href="#">Immersion Rod</a>
                            </li>
                            <li><a href="#">Geygers</a>
                            </li <li><a href="#">Air Purifierst</a>
                            </li>
                            <li><a href="#">Chimneys</a>
                            </li>
                            <li><a href="#">Room Heaters</a>
                            </li>
                            <li><a href="#">Fans</a>
                            </li>
                            <li><a href="#">Irons</a>
                            </li>
                            <li><a href="#">Vacuum Cleaner</a>
                            </li <li><a href="#">Inverters</a>
                            </li>
                            <li><a href="#">Inverter Battries</a>
                            </li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Kitchen" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i><strong>Kitchen Appliances</strong> <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Kitchen">
                            <li class="active"><a href="#"><strong>Mixer Juicer Grinders</strong></a>
                            </li>
                            <li><a href="#">Electric Cookers</a>
                            </li>
                            <li><a href="#">Electric Kettels</a>
                            </li>
                            <li><a href="#">Popup Toasters</a>
                            </li>

                            <li><a href="#">Sndwich Makers</a>
                            </li>
                            <li><a href="#">Hand Blenders</a>
                            </li>
                            <li><a href="#">Food Processors</a>
                            </li <li><a href="#">Coffee Makers</a>
                            </li>
                            <li><a href="#">Popcorn Makers</a>
                            </li>
                            <li><a href="#">Grills & Tandoors</a>
                            </li>
                            <li><a href="#">Microwave Ovens</a>
                            </li>

                        </ul>


                        <li data-toggle="collapse" data-target="#Computer" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Computer Accessories  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Computer">
                            <li class="active"><a href="#"><strong>Laptops</strong></a>
                            </li>
                            <li><a href="#">Computer Accessories</a>
                            </li>
                            <li><a href="#">Computer Components</a>
                            </li>
                            <li><a href="#">Software</a>
                            </li>

                            <li><a href="#">Computer Peripherals</a>
                            </li>
                            <li>
                                <a href="#"></a>Networking Devices</li>
                            <li>
                                <a href="#"></a>Desktop</li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Audio" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Audio & Video <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Audio">
                            <li class="active"><a href="#"><strong>AV Amplifiers</strong></a>
                            </li>
                            <li><a href="#">Televisions</a>
                            </li>
                            <li><a href="#">Set Top Box</a>
                            </li>
                            <li><a href="#">Home Theaters</a>
                            </li>

                            <li><a href="#">Streaming Devices</a>
                            </li>
                            <li><a href="#">Speakers</a>
                            </li>
                            <li><a href="#">Video Players</a>
                            </li <li><a href="#">Mp3 & Mp4 Player</a>
                            </li>
                            <li><a href="#">Ipods</a>
                            </li>
                            <li><a href="#">FM Radio</a>
                            </li>
                            <li><a href="#">Karaoke</a>
                            </li>
                            <li><a href="#">Video Recorder</a>
                            </li>
                            <li><a href="#">Audio Video Accessories</a>
                            </li>

                        </ul>



                        <li data-toggle="collapse" data-target="#Gaming" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Gaming   <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Gaming">
                            <li class="active"><a href="#"><strong>Gaming Consoles</strong></a>
                            </li>
                            <li><a href="#">Gming Accessories</a>
                            </li>
                            <li><a href="#">Gming Titels</a>
                            </li>

                        </ul>


                        <li data-toggle="collapse" data-target="#Personal" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Personal Grooming  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Personal">
                            <li class="active"><a href="#"><strong>Trimmers</strong></a>
                            </li>
                            <li><a href="#">Shavers</a>
                            </li>
                            <li><a href="#">Hair Dryer</a>
                            </li>
                            <li><a href="#">Hair Straightener</a>
                            </li>

                            <li><a href="#">Hair Stylers</a>
                            </li>
                            <li><a href="#">Hair Curlers</a>
                            </li>
                            <li><a href="#">Epilators</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Camera" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Camera & Accessories  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Camera">
                            <li class="active"><a href="#">Camera Accessories</a>
                            </li>
                            <li><a href="#">DSLR</a>
                            </li>
                            <li><a href="#">Point & Shoot</a>
                            </li>
                            <li><a href="#">Advanced Point & Shoot</a>
                            </li>

                            <li><a href="#">Sports & Action Camera</a>
                            </li>
                            <li><a href="#">Inatant Camera</a>
                            </li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Men" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Mens Fashion <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Men">
                            <li class="active"><a href="#"><strong>Footwear</strong></a>
                            </li>
                            <li><a href="#">Sandals & Floaters</a>
                            </li>
                            <li><a href="#">Sneakers & Sport Shoes</a>
                            </li>
                            <li><a href="#">Casual Shoes</a>
                            </li>

                            <li><a href="#">Formal Shoes</a>
                            </li>
                            <li><a href="#">Slippers & FlipFlops </a>
                            </li>
                            <li><a href="#">Loafers</a>
                            </li <li><a href="#">Canvas Shoes</a>
                            </li>
                            <li><a href="#">Boots</a>
                            </li>
                            <li><a href="#">Ethnic</a>
                            </li>
                            <li><a href="#">Shoe Care & Accessories</a>
                            </li>


                        </ul>


                        <li data-toggle="collapse" data-target="#Clothing" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i> Clothing  <i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Clothing">
                            <li class="active"><a href="#"><strong>T-Shirts</strong></a>
                            </li>
                            <li><a href="#">Jeans</a>
                            </li>
                            <li><a href="#">Casual Shirts</a>
                            </li>
                            <li><a href="#">Formal Shirts</a>
                            </li>

                            <li><a href="#">Sportwear</a>
                            </li>
                            <li><a href="#">Casual Trouser</a>
                            </li>
                            <li><a href="#">Formal Trouser</a>
                            </li <li><a href="#">Innerwear & Sleepwear</a>
                            </li>
                            <li><a href="#">Suitings & Shirtings</a>
                            </li>
                            <li><a href="#">Shorts & 3/4ths</a>
                            </li>
                            <li><a href="#">Ethnic Wear</a>
                            </li>


                        </ul>



                        <li data-toggle="collapse" data-target="#Bags" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Bages Luaggage<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Bags">
                            <li class="active"><a href="#"><strong>Home Appiances</strong></a>
                            </li>
                            <li><a href="#">Air Conditioner</a>
                            </li>
                            <li><a href="#">Washing Machines</a>
                            </li>
                            <li><a href="#">Wter Purifier</a>
                            </li>

                            <li><a href="#">Refrigerators</a>
                            </li>
                            <li><a href="#">Immersion Rod</a>
                            </li>
                            <li><a href="#">Geygers</a>
                            </li <li><a href="#">Air Purifierst</a>
                            </li>
                            <li><a href="#">Chimneys</a>
                            </li>
                            <li><a href="#">Room Heaters</a>
                            </li>
                            <li><a href="#">Fans</a>
                            </li>
                            <li><a href="#">Irons</a>
                            </li>
                            <li><a href="#">Vacuum Cleaner</a>
                            </li <li><a href="#">Inverters</a>
                            </li>
                            <li><a href="#">Inverter Battries</a>
                            </li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Watch" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Watches<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Watch">
                            <li class="active"><a href="#"><strong>Analog</strong></a>
                            </li>
                            <li><a href="#">Disital</a>
                            </li>
                            <li><a href="#">Chronograph</a>
                            </li>
                            <li><a href="#">Analog-Disital</a>
                            </li>

                            <li><a href="#">Couple Watches</a>
                            </li>
                            <li><a href="#">Smart Watches</a>
                            </li>
                            <li><a href="#">Luxury Watches</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Acc" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Accessories<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Acc">
                            <li class="active"><a href="#"><strong>Branded Accessories</strong></a>
                            </li>
                            <li><a href="#">Wallets</a>
                            </li>
                            <li><a href="#">Belts</a>
                            </li>
                            <li><a href="#">Socks & Handkerchief</a>
                            </li>

                            <li><a href="#">The Raymond Shop</a>
                            </li>
                            <li><a href="#">Gift Sets</a>
                            </li>
                            <li><a href="#">Cardholder & Watchcases</a>
                            </li <li><a href="#">Necktie & Cufflings</a>
                            </li>
                            <li><a href="#">Umbrella & Raincoat</a>
                            </li>
                            <li><a href="#">Hats & Caps</a>
                            </li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Sun" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Sunglasses<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Sun">
                            <li class="active"><a href="#"><strong>Aviators</strong></a>
                            </li>
                            <li><a href="#">Wayfarers</a>
                            </li>
                            <li><a href="#">Rectangular Frames</a>
                            </li>
                            <li><a href="#">Sports Frames</a>
                            </li>

                            <li><a href="#">Oval Frames</a>
                            </li>
                            <li><a href="#">Round Frames</a>
                            </li>
                            <li><a href="#">Duffles & Gym Bags</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Eye" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>EyeGlasses<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Eye">
                            <li class="active"><a href="#"><strong>Fragrances</strong></a>
                            </li>
                            <li><a href="#">Grooming</a>
                            </li>
                            <li><a href="#">Hair Care</a>
                            </li>
                            <li><a href="#">Bath & Body Care</a>
                            </li>

                            <li><a href="#">Skin Care</a>
                            </li>
                            <li><a href="#">Oral Care</a>
                            </li>
                            <li><a href="#">Combo Deals</a>
                            </li>
                            <li><a href="#">Tattoo & Body Arts</a>
                            </li>


                        </ul>

                        <li data-toggle="collapse" data-target="#Women" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Womens Fashion<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Women">
                            <li class="active"><a href="#"><strong>Ethnic Wear</strong></a>
                            </li>
                            <li><a href="#">Dress Material</a>
                            </li>
                            <li><a href="#">Saree</a>
                            </li>
                            <li><a href="#">Kurta & Kurti</a>
                            </li>

                            <li><a href="#">Lehenga Saree & Lehenga</a>
                            </li>
                            <li><a href="#">Salwar Kameez</a>
                            </li>
                            <li><a href="#">Salwar Chudidar & Leggings</a>
                            </li>
                            <li><a href="#">Ethnic Grown</a>
                            </li>
                            <li><a href="#">Mix & Match</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Foot" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Footwear<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Foot">
                            <li class="active"><a href="#"><strong>Sneakers & Sports Shoes</strong></a>
                            </li>
                            <li><a href="#">Heels</a>
                            </li>
                            <li><a href="#">Wedges</a>
                            </li>
                            <li><a href="#">Bellies</a>
                            </li>

                            <li><a href="#">Boots</a>
                            </li>
                            <li><a href="#">Sandals & Floaters</a>
                            </li>
                            <li><a href="#">Slippers & Flip Flop</a>
                            </li>
                            <li><a href="#">Canvas Shoes</a>
                            </li>
                            <li><a href="#">Flats</a>
                            </li>
                            <li><a href="#">Formals</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Wat" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Watches<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Wat">
                            <li class="active"><a href="#"><strong>Smart Watches</strong></a>
                            </li>
                            <li><a href="#">Analog Watches</a>
                            </li>
                            <li><a href="#">Chronograph Watches</a>
                            </li>
                            <li><a href="#">Disital Watches</a>
                            </li>

                            <li><a href="#">Couple Watches</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Begs" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Bages & Wallets<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Begs">
                            <li class="active"><a href="#"><strong>Handbags</strong></a>
                            </li>
                            <li><a href="#">Clutches</a>
                            </li>
                            <li><a href="#">Backpacks</a>
                            </li>

                            <li><a href="#">Sling Bags</a>
                            </li>
                            <li><a href="#">Totes</a>
                            </li>
                            <li><a href="#">Wallets</a>
                            </li>
                            <li><a href="#">Laptop Bags</a>
                            </li>
                            <li><a href="#">Vanity Cases</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Western" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Western Wear<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Western">
                            <li class="active"><a href="#"><strong>Winter Wear</strong></a>
                            </li>
                            <li><a href="#">Sports Wear</a>
                            </li>
                            <li><a href="#">T-Shirts & Tank Top</a>
                            </li>

                            <li><a href="#">Shirts</a>
                            </li>
                            <li><a href="#">Tops & Tunics</a>
                            </li>
                            <li><a href="#">Jeans & Jeggings</a>
                            </li>
                            <li><a href="#">Trousers & Pants</a>
                            </li>
                            <li><a href="#">Leggings & Plazzos</a>
                            </li>
                            <li><a href="#">Dresses</a>
                            </li>
                            <li><a href="#">Shrugs & Summer Jackets</a>
                            </li>
                            <li><a href="#">Skirts</a>
                            </li>
                            <li><a href="#">PLus Size</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Design" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Designer Wear<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Design">
                            <li class="active"><a href="#"><strong>Clothing</strong></a>
                            </li>
                            <li><a href="#">Accessories</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Jewellery" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Jewellery<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Jewellery">
                            <li class="active"><a href="#"><strong>Imitation Jewellery</strong></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>

                            <li><a href="#">Semi Precious Jewellery</a>
                            </li>
                            <li><a href="#">Precious Jewellery</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Beauty" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Beauty Care<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Beauty">
                            <li class="active"><a href="#"><strong>Fragrances</strong></a>
                            </li>
                            <li><a href="#">Makeup</a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>

                            <li><a href="#">Skin Care</a>
                            </li>
                            <li><a href="#">Hair Care</a>
                            </li>
                            <li><a href="#">Bath & Body</a>
                            </li>
                            <li><a href="#">Women Hygiene</a>
                            </li>
                            <li><a href="#">Oral Care</a>
                            </li>
                            <li><a href="#">Combo Deals</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Fashion" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Fashion Accessories<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Fashion">
                            <li class="active"><a href="#"><strong>Socks & Stockings</strong></a>
                            </li>
                            <li><a href="#">Belts</a>
                            </li>
                            <li><a href="#">Scarves & Stoles</a>
                            </li>

                            <li><a href="#">Organisers & Utillity</a>
                            </li>
                            <li><a href="#">Hair Care</a>
                            </li>
                            <li><a href="#">Umbrella & Raincoats</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Glasses" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Eyewear<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Glasses">
                            <li class="active"><a href="#"><strong>Sunglasses</strong></a>
                            </li>
                            <li><a href="#">EyeGlasses</a>
                            </li>
                            <li><a href="#">Contact Lenses</a>
                            </li>
                            <li><a href="#">Eyewear Accessories</a>
                            </li>

                        </ul>

                        <li data-toggle="collapse" data-target="#Sleep" class="collapsed active">
                            <a href="#"><i class="fa fa-gift fa-lg"></i>Lingerie & Sleepwear<i class="fa fa-gift fa-lg btn pull-right" style="margin-top:5px"></i></a>
                        </li>
                        <ul class="sub-menu collapse" id="Sleep">
                            <li class="active"><a href="#"><strong>Bras</strong></a>
                            </li>
                            <li><a href="#">Painties</a>
                            </li>
                            <li><a href="#">Nightwear & Nighties</a>
                            </li>
                            <li><a href="#">Camisoles & Slips</a>
                            </li>
                            <li><a href="#">Shapewear</a>
                            </li>
                            <li><a href="#">Lingerie Sets</a>
                            </li>
                            <li><a href="#">Pyjamas & Lounge Wear</a>
                            </li>

                        </ul>
                    </ul>
                </div>
            </div>
        </nav>

    </aside>
</body>

</html>
