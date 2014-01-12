<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$mazzaByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<figure class="right top">
			<img src="img/me.jpg">
			<figcaption>
				<p>Bild på Mats Sandén</p>
			</figcaption>
</figure>
</a>

<p>
			Jag heter Mats Sandén och jag kommer från Hässleholm i Skåne. Jag arbetar med utveckling av mobiltelefoner på Sony Mobile i Lund och det har jag gjort sedan 2006. 
			Innan dess jobbade jag för Ericsson i Hässleholm, Lund, Karlskrona och Linköping. Då arbetade jag i huvudsak med företagets BSC (Base Station Controller). Det är den 
			nätnod som styr alla basstationer i ett GSM nät. Under något år arbetade jag på Ersicsson Mobile Platforms i Lund där jag var med om att tillverka de första 3G telefonerna 
			i världen. Jag har bred erfarenhet av GSM, GPRS, EDGE, UMTS och nu på senare tid LTE.<br/>
			Just nu arbetar jag mest med olika verifieringsaktiviteter mot i huvudsak de amerikanska mobiloperatörerna. Det är mycket planering och uppföljning men även praktisk exekvering av
			avancerade tester och felsökning i labmiljö. 
		</p> 
		<p>
			Stor del av min fritid tillbringar jag framför datorn. Jag brukar läsa någon kurs på högskolan varje termin och det har blivit inom data. Jag har tidigare läst programmering i Java och 
			de inledande kurserna på BTH htmlphp och oophp.  
			För att kompensera för inaktiviteten på jobbet och studierna försöker jag träna regelbundet. Det har genom åren blivit mycket löpning, men även cykel och på senare år rollerblades med stavar.
			Jag har under det senaste året börjat ägna mig åt Geocaching. Jag börjar nu närma mig 1000 funna cacher... och det blir kanske värt att fira.
		</p>
  
{$mazzaByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
