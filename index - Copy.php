<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	$userLogged="False";
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		$userName="Guest";
        $userLogged="False";
	}else{
        $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	   $userRow=mysql_fetch_array($res);
        $userName=$userRow['userName'];
        $userLogged="True";
    }
	// select loggedin users detail
	
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        
        <link rel="stylesheet" type="text/css" href="check/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="check/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="check/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="check/css/checkout-cornerflat.css" />
		<!-- Modernizr is used for flexbox fallback -->
		<script src="js/modernizr.custom.js"></script>
        <style >
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            height: 67px;
        }

        li {
            float: left;
        }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 25px 16px;
                text-decoration: none;
            }

                li a:hover:not(.active) {
                    background-color: #111;
                }

        .active {
            background-color: #4CAF50;
        }
    </style>
	</head>
	<body>
        <div class="container">
			
			<ul>
        <li>
            <a href="#">Welcome </a>
        </li>
        <li>
            <a href="viewfiles.php">View Files</a>
        </li>
       
            
        <li>
            
                <a class="active" href="logout.php?logout">Sign Out</a>
            
            
        </li>
                </ul>
        </div>
        <div class="checkout">
                    <a href="#" class="checkout__button">
                            <span class="checkout__text">
                    
								<svg class="checkout__icon" width="30px" height="30px" viewBox="0 0 35 35">
									<path fill="#fff" d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
								</svg>
							</span>
                    </a>
                    <div class="checkout__order">
							<div class="checkout__order-inner">
								<table class="checkout__summary">
									<thead>
								        <tr><th>Your Order</th><th>Price</th></tr>
								    </thead>
								    <tfoot>
								        <tr><th colspan="2">Total <span class="checkout__total">$56.20</span></th></tr>
								    </tfoot>
								    <tbody>
										<tr><td>Imitations <span>Mark Lanegan</span></td><td>$9.90</td></tr>
										<tr><td>In The Silence <span>Ásgeir</span></td><td>$5.50</td></tr>
										<tr><td>Out Of Exile <span>Audioslave</span></td><td>$11.00</td></tr>
										<tr><td>London <span>Frank Sinatra</span></td><td>$19.90</td></tr>
										<tr><td>Cure For Pain <span>Morphine</span></td><td>$9.90</td></tr>
									</tbody>
								</table><!-- /checkout__summary -->
								<button class="checkout__option checkout__option--silent checkout__cancel"><i class="fa fa-angle-left"></i> Continue Shopping</button><button class="checkout__option">Buy</button>
								<button class="checkout__close checkout__cancel"><i class="icon fa fa-fw fa-close"></i>Close</button>
							</div><!-- /checkout__order-inner -->
						</div><!-- /checkout__order -->
		</div><!-- /container -->
		<!-- Compare basket -->
		<div class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>
		<!-- Main view -->
		<div class="view">

			<!-- Product grid -->
			<section class="grid">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/1.png" alt="Product 1" />
						<h3 class="product__title">Chryseia</h3>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">Douro</span>
						<span class="product__varietal extra highlight">Touriga Nacional</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$55.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/2.png" alt="Product 2" />
						<h3 class="product__title">Meiomi Pinot Noir</h3>
						<span class="product__year extra highlight">2013</span>
						<span class="product__region extra highlight">California</span>
						<span class="product__varietal extra highlight">Pinot Noir</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$19.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/10.png" alt="Product 3" />
						<h3 class="product__title">Antucura Cabernet Sauvignon</h3>
						<span class="product__year extra highlight">2013</span>
						<span class="product__region extra highlight">Argentina</span>
						<span class="product__varietal extra highlight">Cabernet Sauvignon </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$15.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/4.png" alt="Product 4" />
						<h3 class="product__title">Leonetti Sangiovese</h3>
						<span class="product__year extra highlight">2012</span>
						<span class="product__region extra highlight">Washington</span>
						<span class="product__varietal extra highlight">Sangiovese</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$85.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/5.png" alt="Product 5" />
						<h3 class="product__title">Chateau Pontet-Canet</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Pauillac, Bordeaux</span>
						<span class="product__varietal extra highlight">Bordeaux </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$269.00</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/6.png" alt="Product 6" />
						<h3 class="product__title">Quintessa</h3>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">California</span>
						<span class="product__varietal extra highlight">Cabernet Sauvignon</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$125.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/7.png" alt="Product 7" />
						<h3 class="product__title">Clarendon Hills Astralis</h3>
						<span class="product__year extra highlight">2006</span>
						<span class="product__region extra highlight">McLaren Vale</span>
						<span class="product__varietal extra highlight">Syrah, Shiraz</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$153.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/8.png" alt="Product 8" />
						<h3 class="product__title">Lapostolle Clos Apalta</h3>
						<span class="product__year extra highlight">2010</span>
						<span class="product__region extra highlight">Chile</span>
						<span class="product__varietal extra highlight">Bordeaux</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$82.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/9.png" alt="Product 9" />
						<h3 class="product__title">Bodega Colome Reserva</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Argentina</span>
						<span class="product__varietal extra highlight">Malbec</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$99.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/10.png" alt="Product 10" />
						<h3 class="product__title">Montevertine Le Pergole Torte</h3>
						<span class="product__year extra highlight">2011</span>
						<span class="product__region extra highlight">Tuscany</span>
						<span class="product__varietal extra highlight">Sangiovese </span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$119.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/2.png" alt="Product 11" />
						<h3 class="product__title">Massolino Vigna Parussi Barolo</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">Piedmont</span>
						<span class="product__varietal extra highlight">Nebbiolo</span>
						<span class="product__alcohol extra highlight">12%</span>
						<span class="product__price highlight">$169.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/4.png" alt="Product 12" />
						<h3 class="product__title">Chateau Branaire-Ducru</h3>
						<span class="product__year extra highlight">2009</span>
						<span class="product__region extra highlight">St-Julien, Bordeaux</span>
						<span class="product__varietal extra highlight">Bordeaux</span>
						<span class="product__alcohol extra highlight">13%</span>
						<span class="product__price highlight">$99.90</span>
						<button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="action__text">Add to cart</span></button>
					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</section>
		</div><!-- /view -->
		<!-- product compare wrapper -->
		<section class="compare">
			<button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
