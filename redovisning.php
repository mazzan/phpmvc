<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexted";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<p>Här följer mina redovisningar under kursen phpmvc:</p>

<h2>Kmom01: En boilerplate</h2>
<p>Det här kursmomentet utgjorde inga som helst svårigheter. Jag tror att de erfarenheter kurserna htmlphp och oophp gett utgör en bra grund som start för denna kurs. Den struktur, med templates,  
MOS använde i sitt exempel kände jag väl igen sedan övningarna med Anax. Det kändes därför naturligt att bygga upp min sida efter samma koncept. Under detta moment la jag huvuddelen av tiden 
på att läsa in mig på HTML5Boilerplate.</p>
<p>Jag arbetar på en dator med Windows 7. Då jag skriver kod i PHP använder jag J-Edit som jag vant mig vid under kurserna vid BTH. Då jag kodar i Java använder jag annars Eclipse, som för övrigt 
har bra stöd för PHP utveckling. Som utvecklingmiljö använder jag WAMP server då den erbjuder en Apache server samt stöd för både PHP och MySQL. Jag använder FileZilla för att flytta filer och har
även börjat titta lite på GIT då detta ingår i kursen.</p>
<p>Tanken på att använda Boilerplate är mig inte alls främmande. Jag har tidigare tittat på olika CMS lösningar som Joomla och Wordpress. Då man bygger upp mindre webbplatser tycks en Boilerplate vara 
mycket smidigare. Vad avser just HTML5Boilerplate har jag ingen direkt uppfattning. Vad jag har förstått innehåller den all den funktionalitet man inledningsvis behöver för att bygga upp en webbplats.</p>
<p>GIT har ingått i tidigare kurser så det var ingen omdedelbar nyhet. På mitt arbete är revisionshantering av kod aoch filer A och O. Där känns det självklart och viktigt att detta sköts. Tidigare har jag 
inte direkt känt behovet av detta vad avser mina filer i hemmadatorn... men tanken är ju god :-)



EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
