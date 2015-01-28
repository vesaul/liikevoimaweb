<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Liikevoima</title>

<link href="styles/main.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=786500764737722&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">
  <header id="top">
    <img src="images/Logo_valk-oranssi-02_eireunoja_oranssikorjattu.jpg" alt=""/>
    <h1>Kehon ja mielen kuntokeskus</h1>
    <nav id="mainnav">
      <ul>
        <li><a href="#" class="thispage">Etusivu</a></li>
        <li><a href="valmennus.html">Valmennus</a></li>
        <li><a href="kalenteri.html">Tuntivaraus</a></li>
        <li><a href="yhteystiedot.html">Yhteystiedot</a></li>
      </ul>
    </nav>
  </header>
  <div id="sali">
    <article>Ilmainen tutustumistreeni (koskee myös ryhmäliikuntatunteja)! Tarkista varaustilanne osoitteesta Avoinna24.fi.</article>
  <img src="images/img_0193.jpg" alt=""/></div>
  <article id="main">
    <h2>Riding the Cable Cars</h2>
    <p>Uusi toiminnallisen harjoitteluun ja ryhmäliikuntaan panostava salimme on vihdoinkin avattu. Pyrimme tarjoamaan hyvät harjoitteluolosuhteet eritasoisille kuntoliikkujille ja urheilijoille, iästä riippumatta.</p>
    <p>Tarjoamme mahdollisuuden omatoimisen harjoittelumahdollisuuden lisäksi ohjattuja tunteja, jäsenillä on niihin ensisijainen varausoikeus.</p>
    <div id="ct">
    <figure class="centered"><img src="images/IMG_0188_cropped.jpg" alt=""/>
   </figure>
    <p>Cross Training (CT) on sekoitus perinteistä painoharjoittelua painoilla sekä erilaisia kehonpainoliikkeitä. Tunnin toteutuksesta riippuen painotus on joko kestävyys- tai voimaominaisuuksien kehittämisessä. Ohjatuilla tunneilla liikkeet skaalataan osallistujan taitotason mukaan, esim. leuanvedossa voidaan käyttää kuminauhaa avustamassa. Ohjattujen tuntien aikana on aina tilaa myös omatoimitreenaajille. </p>
    </div>
    <div id="ryhmaliikunta">
    <p><figure class="centered"><img src="images/IMG_0188 copy.jpg" alt=""/>
  <figcaption></figcaption></figure>Tuntivalikoimaamme kuuluvat tutut FT ja Zumba jaada jaada…</p>
    </div>
	<div id="kuntosali">
<p class="centered"><figure class="centered"><img src="images/IMG_0188 copy.jpg" alt=""/>
  <figcaption></figcaption></figure>
Perinteinen kuntosaliharjoittelu eli paikkaharjoittelu on meilä myös mahdollista: laitevalikoimassamme on kaksi nostolavaa joissa kyykkytelineet, voimaräkki, painopakalliset taljat ja GHR ja Reverse Hyper -laite. Laadukkaita tankoja löytyy 15 kpl, käsipainot 1-30 kg.
</p>
	</div>
    
  </article>
  <aside id="sidebar">
    	
    <?php
	require_once('/Users/vesa/Documents/Liikevoima/Verkkosivut/htdocs/simplepie/autoloader.php');
	 
	// We'll process this feed with all of the default options.
	$feed = new SimplePie();
	 
	// Set the feed to process.
	$feed->set_feed_url('https://www.facebook.com/feeds/page.php?id=658902177541364&format=rss20');
	// Run SimplePie.
	$feed->init();
	  
	// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
	$feed->handle_content_type();
	?>  
	<div id="fbdataheader">
	<h1><a href="<?php echo $feed->get_permalink(); ?>">
		Seuraa uutisointiamme Facebookissa</a></h1>
        </div>
 	<div class="fb-like" d
    ata-href="https://www.facebook.com/liikevoimaoy" data-width="200" data-layout="button" data-action="like" data-show-faces="false" data-share="false">
  		</div>	
        <p> Allaolevat linkit vievät Liikevoiman FB-sivulle.</p>
        
	<?php	
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	*/
	$arr = array(0,1,2,3,4,5);
	foreach ( $arr as  $value):
		$item = $feed->get_item($value);
	?>
 
		<div class="item">
		  <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo html_entity_decode($item->get_title()); ?></a></h2>
			
            <p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div>
 
	<?php endforeach; ?>
	
   
  </aside>
  <footer id="footer">
	<p>Yhteistyökumppaneitamme ovat: 
<div class="fb-like-box" data-href="https://www.facebook.com/liikevoimaoy" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
  </footer>
</div>
</body>
</html>
