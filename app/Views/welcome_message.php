
<?= $this->extend('base') ?>


<?= $this->section('header') ?>

<div class="header">
            <a href="#default" class="logo"><img id="logo" src="./imgs/DLab_Logo_FC100.png"></a>
            <div class="header-right">
              <a class="active" href="#home">Home</a>
              <a id="Projecten" href="#projecten">Projecten</a>
              <a id="Diensten" href="#onze diensten">Onze Diensten</a>
              <a id="OverOns" href="#over ons">Over ons</a>
              <a id="Nieuws" href="#nieuws">Nieuws</a>
              <a id="Contact" href="#contact">Contact</a>
              <ul>
                <li>
                    <a class="fa fa-phone" href="tel:+31-6-254-26-731"> <span id="phone-text">+31-6-25426731</span> </a>
                </li>   

                <li> 
                    <a class="fa fa-clock-o href=">
                        <span id="clock-text">Ma - Vr: 9:00 - 16:00</span>
                    </a>   
                </li>

                <li>
                    <a href="href=mailto:info@dlab.nl" class="fa fa-envelope-o"> <span id="envelope-text">info@dlab.nl</span> </a>
                </li>
            </ul>


			<nav id="socials">
				<a class="fa fa-facebook" href="https://www.facebook.com/pg/DLab058/"></a>
				<a class="fa fa-linkedin" href="https://www.linkedin.com/company/dlab-friesland"></a>
				<a class="fa fa-instagram" href="https://www.linkedin.com/company/dlab-friesland"></a>
			</nav>



			</div>

<?= $this->endSection('header') ?>

<!-- CONTENT -->

<?= $this->section('main') ?>

<?= $this->section('onesection') ?>

<div class="leftside">

<div id="above">
	<h1>Onze diensten</h1>

	<hr>

	<div class="navigation">
		<button id="left-b"><i class="fa fa-angle-left"></i></button>
		<button id="right-b"><i class="fa fa-angle-right"></i></button>
	</div>
</div>


	<div class="scroll-img">

		<div id="img1">
			<img id="service-01" src="./imgs/service-01.jpg">
			<h1>3D Printen - Objet30 Prime</h1>

			<p>Deze hoogwaardige 3D printer print de fijnste ontwerpen in hoog detail. Het ondersteunende materiaal is wateroplosbaar en daardoor eenvoudig en zonder 'littekens' te verwijderen.</p>
		</div>

		<div id="img2">
			<img id="service-02" src="./imgs/service-02.jpg">
			<h1>3D Printen - Print farm</h1>
			
			<p>Onze betrouwbare Ender3 machines zijn in staat in relatief korte tijd grote volumes te printen in een goede kwaliteit.</p>
		</div>
		
		<!-- <div id="img3">
			<img src="" alt="">
	
			<p>3D Printen - Formlabs</p>

			<p>Deze hars printer kan met behulp van laserlicht en een speciale vloeistof heel gedetaileerd 3D-printen. Zeer geschikt voor bijvoorbeeld sieraden of miniaturen.</p>
		</div>

		<div id="img4">
			<img src="" alt="">
	
			<p>Lasersnijden</p>

			<p>De lasersnijder is het werkpaard van het lab. In rap tempo worden diverse materialen (geen metalen) gesneden en/of gegraveerd. De maximale afmetingen bedragen 100 bij 60 cm.</p>
		</div>

		<div id="img5">
			<img src="" alt="" id="">

			<p>CNC</p>

			<p>Deze gloednieuwe CNC vreest moeiteloos door hout en aluminium. Lever het 3D model aan in STL of Fusion360 formaat en de machine doet de rest.</p>
		</div>

		<div id="img6">
			<img src="" alt="">
			<p>3D keramiekprinter</p>
			
			<p>Ook nieuw in ons pallet is deze grote delta 3D keramiekprinter. De klei wordt laagje voor laagje op elkaar geprint. Het eindresultaat wordt vervolgens afgebakken in een grote oven.</p>
		</div>

		<div id="img7">
			<img src="" alt="">
			<p>3D-Scannen</p>

			<p>Is een object lastig na te tekenen in een CAD programma dan kan ook gebruik worden gemaakt van een 3D-handscanner. De scan wordt omgezet naar bijvoorbeeld een STL bestand.</p>
		</div>

		<div id="img8">
			<img src="" alt="">
			<p>Printen</p>

			<p>Posters, stickers en canvas kan worden geprint op onze grote printer van 135 cm breed. Stickers kunnen naderhand worden uitgesneden met de automatische vinylsnijmachine.</p>
		</div>

		<div id="img9">
			<img src="" alt="">
			<p>Prototyping</p>

			<p>Een idee voor een nieuw product of dienst maar zelf niet de middelen of de kennis om dit verder alleen uit te werken? In het D'lab is de beschikking over zowel de machines als wel de kennis.</p>
		</div>

		<div id="img10">
			<img src="" alt="">
			<p>Workshops</p>

			<p>Leren 3D-printen, 3D-tekenen, Ontwerpen voor de lasersnijder, prototypen, werken met electronica, etc? Vraag naar de mogelijkheden.</p>
		</div>

		<div id="img11">
			<img src="" alt="">
			<p>Metaal en houtbewerking</p>

			<p>Voor metaalwerk hebben we de beschikking over een grote metaalhal en een houthal met een diversiteit aan machinerie.</p>
		</div>

		<div id="img12">
			<img src="" alt="">
			<p>Divers gereedshap</p>

			<p>Naast de grote machines is er ook een diversiteit aan klein handgereedschap beschikbaar.</p>
		</div> -->

		</div>

</div>


<div class="rightside">
<div id="afspraak">
	<h1>Maak een afspraak</h1>

	<p>Voor het maken van een afspraak voor het gebruik maken van machines, mail met dlabagenda@gmail.com <br>

		<br>

		Voor vragen m.b.t. prototyping mogelijkheden e.d, mail met info@dlab.nl <br>

		<br>
		
		Telefoon: +31-6 25 42 67 31</p>
</div>
</div>

<?= $this->endSection('onesection') ?>


<?= $this->section('twosection') ?>


<div class="section-title-wrap mb-30">
        <h1>Projecten</h1>
        <hr>
    </div>

    <div class="project-items">
        <ul>
            <li><a href="#All">All</a></li>
            <li><a href="#3D Design">3D Design</a></li>
            <li><a href="#Art">Art</a></li>
            <li><a href="#Electronica">Electronica</a></li>
            <li><a href="#Laser">Laser</a></li>
        </ul>
    </div>


	<div class="project-photos">
		<img src="./imgs/project-h1-01.jpg" alt="01">
		<img src="./imgs/project-h1-02.jpg" alt="02">
		<img src="./imgs/project-h1-03.jpg" alt="03">
		<img src="./imgs/project-h1-04.jpg" alt="04">
		<img src="./imgs/project-h1-05.jpg" alt="05">
		<img src="./imgs/project-h1-06.jpg" alt="06">
		<img src="./imgs/project-h1-07.jpg" alt="07">
	</div>


	<div class="Dlab-info">
		<img id="aboutimg" src="./imgs/about-1.jpg" alt="about1">
		<h1>D'Lab</h1>

		<hr>

		<p id="infotext">D'Lab is een fablab, ook wel maaklab genoemd, waar zowel bedrijven als particulieren als wel studenten terecht kunnen voor het ontwikkelen van allerlei soorten prototypes.
		<br> <br>
		Het D'Lab is onderdeel van het Friesland College maar werkt ook nauw samen met de Frisian Design Factory (onderdeel van NHL/Stenden).
		<br> <br>
		<a id="Meer-a" href="">Meer..</a>
		</p>
	</div>
   
<?= $this->endSection('twosection') ?>

<?= $this->Section('threesection') ?>
	<div class="section-title-wrap mb-30">
			<h1>Ervaringen van anderen</h1>
			<hr>
		</div>
<?= $this->endSection('threesection') ?>

<?= $this->endSection('main') ?>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<?= $this->section('footer') ?>
<p>D'Lab is de plek voor het ontwikkelen van innovative oplossingen. Door de centrale locatie in het centrum van de stad en midden tussen een variëteit van complementaire bedrijven is dit de ideale plek voor het maken van slimme protoypes.</p>

<div class="Info_Container">
	<h3>Informatie</h3>
	<ul class="list list-6" id="list">
		<li>
			<a href="#projects">> Onze Projecten</a>
		</li>
		<li>
			<a href="#services">> Onze Diensten</a>
		</li>
		<li>
			<a href="#about">> Over Ons</a>
		</li>
		<li>
			<a href="#news">> Laatste nieuws</a>
		</li>
		<li>
			<a href="#services">> Reserveren</a>
		</li>
	</ul>
</div>
<img src="imgs/logo-white.png" id="logo">
<div class="widget-item">
	<div class="widget-body">
		<div class="widget-title">
			<h3>D'Lab locatie</h3>
		</div>
		<div class="widget-body">
			<div class="office-info">
				<p>
					<i class="fa fa-map-marker"></i>
					Blokhuisplein 40, Leeuwarden, Nederland
				</p>
				<p>
					<i class="fa fa-phone"></i>
						+31-6-25426731
				</p>
				<p>
					<i class="fa fa-envelope-o"></i>
					info@dlab.nl
				</p>
				<p>
					<i class="fa fa-clock-o"></i>
					Ma - Vr: 9:00 - 16:00
				</p>
				</div>
			</div>
		</div>
	</div>

	<p id="footertext">© Copyright 2019 D'Lab.</p>
<?= $this->endSection('footer') ?>

<!-- SCRIPTS -->
<?= $this->section('script') ?>
<script src="./JS/scroll.js"></script>
<?= $this->endSection('script') ?>


<!-- -->



