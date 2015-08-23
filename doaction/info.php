<?php

class Info {
	
	private $strPage = "";
	private $about = "do";
	
	function execute(){
                
            clsAddScript::addCSS('style');
            
		$infoPage = getValue($this->about); 
		if($infoPage =="cookies" ){			
			$this->strPage = <<<HTML

<h1 class="newh1">Användarvillkor och cookies</h1>
<div class="row">			
<div class="col-sm-8">

<p>
Dessa villkor reglerar användandet av tjänsten Egrannar.se som tillhandahålls av Cityblock Development AB med organisationsnummer 556856-1897, nedan kallad Egrannar, och den part som använder tjänsten, nedan kallad Användaren.</p>
<p>Villkoren gäller från och med 2011-10-01 och tills vidare.</p>

<h4>1 Användarkonto</h4>
<p>Ett användarkonto krävs för att du ska kunna komma åt de skyddade delarna av Egrannar. För att kunna skapa ett användarkonto krävs ett lösenord vilket du får av din förenings styrelse. Det är också styrelsen som bestämmer vem som får skapa ett användarkonto hos Egrannar.</p>
<h4>2 Allmänna regler</h4>
<p>För att alla skall trivas så bra som möjligt inom Egrannar har vi identifierat ett antal förhållningspunkter. Dessa skapar en trivsam grund för er alla:</p>
Endast boende i föreningen får skapa ett konto.
<ul>

<li>Du måste följa svensk lag när du använder Egrannar.  Några enkla tips och förhållningsregler:
<ul>
<li>Du får inte använda Egrannar för olagliga aktiviteter eller för distribution av material som är olagligt eller som kan upplevas som stötande. Till exempel så är hets mot folkgrupp, trakasserier, mobbning, kedjebrev eller intrång på copyrightskyddat material aktiviteter som kan vara stötande och olagliga.</li>
<li>Länkningar till sajter som innehåller olagligt innehåll är att betrakta som olagligt. Användare som gör sådan länkning är direkt ansvarig för denna förseelse.</li>
<li>Du får inte ladda upp virussmittade, pornografiska eller copyrightskyddade filer (t.ex. mp3-filer med kända artister), eller länka till pornografiska, rasistiska eller andra uppenbart olämpliga sajter.</li>

</li>
</ul>
<li>Avstå från alla former av intrångsförsök i Egrannars system.</li>
<li>Du får inte använda Egrannar som distributionskanal eller kontaktbas för kommersiella budskap, skräppost eller kedjebrev.</li> 
<li>Du får inte använda, kopiera eller skicka vidare användarinformation.</li> 
<li>Ditt lösenord är din nyckel till Egrannar och du ansvarar för att ditt lösenord förblir din privata hemlighet.</li>
</ul>
<h4>3 Användaruppgifter</h4>
<p>Vi månar om din personliga integritet. Genom att skapa ett konto på Egrannar.se godkänner du att dina uppgifter sparas i vårt register. Vårt register följer personuppgiftslagen (PuL). Dina uppgifter kommer inte att säljas vidare till någon tredje part, däremot kan Egrannar.se och Cityblock Development AB genom tredje part använda lagrad information för att informera om relevanta funktioner och tjänster, eller i syfte att utveckla Egrannar.se. Observera att vi inte säljer eller på annat sätt distribuerar dina uppgifter vidare till någon tredje part utanför Cityblock Development AB i marknadsföringssyfte.</p>
 
<p>Cityblock Development AB, organisationsnummer 556856-1897, är personuppgiftsansvarig. Om du vill ha användarvilkoren förtydligade gå till ”kontakta oss” och skicka ett e-mail.</p>

<h4>4 Användning av cookies och andra mätverktyg</h4>
<p>Vi använder cookies för att underlätta användningen av vår webbplats och personalisera vissa delar av innehållet. En cookie är en liten textfil som skickas från vår webbserver och som sparas av din webbläsare. Cookien hjälper annonssystemet att känna igen vilken typ av innehåll och vilka annonser som besökts på våra webbplatser. Informationen som sparas kan vara uppgifter om hur våra läsare har surfat på och använt våra webbplatser, om vilken webbläsare våra läsare använder, vilka annonser våra läsare har sett och hur de surfat mellan de olika webbplatserna som Egrannar har ett samarbete med.</p> 
<p>Vi använder statistik i samlad/aggregerad form om användare/trafik och trafikleverantörer. Sådan statistik innehåller dock aldrig någon form av personlig information. Din ip-adress sparas för att du fullt ut skall kunna nyttja tjänsten samt av säkerhetsskäl då du själv aktivt registrerar dig på webbplatsen.</p>

Syften:
<ul> 
<li>Låta systemet känna igen återkommande användare för att kunna anpassa tjänsterna.</li> 
<li>Beräkna och rapportera användarantal och trafik.</li> 
<li>Underlätta för dig att röra dig på webbplatsen.</li> 
<li>Bygga segment och målgrupper i marknadsföringssyfte och för att kunna rikta annonser.</li> 
<li>Minska reklam som är irrelevant för vissa målgrupper.</li> 
<li>Utveckla och förbättra webbplatsen genom att förstå hur den används.</li>
</ul> 
<p>Ibland använder vi tredjepartscookies från andra företag för att göra marknadsundersökningar och trafikmätningar, underlätta annonshantering och för att förbättra funktionaliteten på webbplatsen. Vi använder ibland pixlar och genomskinliga gif-filer för att underlätta annonseringen på webben. Dessa filer kommer från vårt annonsnätverk och vår teknikleverantör. Filerna gör att annonssystemet känner igen cookies på din dator för att kunna förstå vilka annonser som ska visas eller vilka annonser som har visats i webbläsaren.</p> 
Så förhindrar du att cookies lagras
<ul> 
<li> Du kan radera cookies från din hårddisk när som helst, men detta gör att dina personliga inställningar försvinner.</li> 
<li>Du kan också ändra inställningarna i din webbläsare så att den inte tillåter att cookies sparas på din hårddisk. Detta försämrar dock funktionaliteten på vissa webbsidor, kan förhindra tillgång till medlemssidor och göra att visst innehåll och vissa funktioner inte är tillgängliga.</li>
</ul> 
<p>Mer information om hur du kan förhindra cookies kan du läsa på Post och Telestyrelsens sida <a href="http://www.pts.se/sv/Regler/Lagar/Lag-om-elektronisk-kommunikation/Cookies-kakor/" target="_blank">http://www.pts.se/sv/Regler/Lagar/Lag-om-elektronisk-kommunikation/Cookies-kakor/</a>.</p> 
<p>Ändring</p> 
<p>Vi kan från tid till annan komma att ändra denna integritetspolicy för att följa lagstadgade krav samt vår egen praxis för insamling och behandling av data.</p>
<h4>5 Ändrade villkor</h4>
<p>Vi kan från tid till annan komma att ändra dessa användarvillkor för att följa lagstadgade krav samt vår egen praxis för insamling och behandling av data.  Genom att fortsätta använda Egrannar anses användaren ha godkänt förändrade regler och villkor. Om användare vill avsluta medlemskapet har användaren möjlighet att  avregistrera sig från Egrannar.</p>

</div>
<div class="col-sm-4">

</div>
</div><!-- end row -->
			
			
HTML;
			
        }else if($infoPage == "kontakt"){
            $this->strPage = <<<HTML

<h1>Kontakt</h1>
<div class="row">
<div class="col-sm-8">
<p>För att kontakta en bostadsrättsförening går du in på dess respektive sida.</p>
<p>Om du vill kontakta Cityblock Development AB som driver sidan www.egrannar.se är du välkommen du e-posta oss på adressen info@egrannar.com.</p>
<p>
</p>
</div>
<div class="col-sm-4">

</div>
</div><!-- end row -->
            
HTML;

		}else if($infoPage == "omegrannar"){
			$this->strPage = <<<HTML

<h1>Om Egrannar</h1>
<div class="row">
<div class="col-sm-8">
<p>Egrannar är en tjänst som erbjuder bostadsrättsföreningar en gratis hemsida med möjlighet till inloggning för medlammarna och flera funktioner som gör det smidigare att bo i bostadsrätt, 
bland annat bokning av tvättstuga, bastu och andra eventuella gemensamma resurser i föreningen.</p>
<p>Sidan finansieras med hjälp av annonser och det är anledningen till att vi kan ebjuda bostadsrättsföreningar dessa tjänster utan kostnad.</p>
<p>Egrannar ägs och drivs av Cityblock Development AB med organisationsnummer 556856-1897.</p>
<p>
</p>
</div>
<div class="col-sm-4">

</div>
</div><!-- end row -->
HTML;

		}	
	}
	
	function renderBody(){ 
		return $this->strPage;
	}
}
?>
