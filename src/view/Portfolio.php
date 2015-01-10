<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 5:19 PM
 */

namespace view;

require_once("./src/model/Portfolio.php");
require_once("./src/view/ProjectList.php");

class Portfolio {
    private $model;

    public function __contruct(\model\Portfolio $model){
        $this->model = $model;
    }

    public function getStartPage(){
        return <<<HTML
        <article>
<figure>
    <img src="img/Erik.png" alt="Bild på Erik Hamrin">
</figure>
<h1>Om mig</h1>
    <p>Jag bor tillsammans med min sambo i Vänersborg, ett stenkast från Vänern. Där studerar jag på distans på programmet Webbprogrammerare(120hp) på Linnéuniversitet i Kalmar.</p>
    <p>Tidigare har jag studerat 3D-animation på Högskolan Väst, vilket var anledningen till omlokalisering till västkusten från Västerås där jag är uppväxt. Under studierna valdes jag till Näringslivsansvarig på Högskolan Västs studentkår där jag var ansvarig för kårens kontakter med företag, arbetsmarknadsdag, introduktionsveckor(inslussning, nollning, finns många ord..). Under tiden fick jag upp ögonen mer och mer för hemsideutveckling.</p>
    <p>Jag läste "HTML, CSS, PHP & JavaScript"(30hp) på BTH efter min avslutade mandatperiod på studentkåren och sökte sedan programmet "Webbprogrammerare" på LNU där jag läser idag.</p>
    <p>
        Lite kuriosa:
        <ul>
			<li>
				Jag har sprungit 5km i 57&deg;C.
			</li>
			<li>
				Jag gillar Star Trek!
			</li>
			<li>
				Jag har bott i micro-brewery meckat Longmont, CO.
			</li>
		</ul>
    </p>
    <p>Titta gärna runt på lite kodexempel och kontakta mig om du har några frågor eller funderingar!</p>
    <p>Allt gott,<br/>Erik Hamrin</p>
    </article>
HTML;


    }

    public function getContactPage(){
    return <<<HTML
 <div id="contact">
    <span class="contact-label">Skype:</span>erik-hamrin<br/>
    <span class="contact-label">Telefon:</span><a href="tel: +46707774394">070-777 43 94</a><br/>
    <span class="contact-label">Mail:</span><a href="mailto: kontakt@erikhamrin.se">kontakt@erikhamrin.se</a><br/>
    <br/>
    <span class="contact-label">GitHub:</span><a href="http://www.github.com/eh222ve" target="_blank">Länk till GitHub-profil</a><br/>
    <span class="contact-label">LinkedIn:</span><a href="http://se.linkedin.com/pub/erik-hamrin/84/691/249/" target="_blank">Länk till LinkedIn-profil</a><br/>
    <span class="contact-label">Facebook:</span><a href="http://www.facebook.com/erik.hamrin.1" target="_blank">Länk till Facebook-profil</a><br/>
</div>
HTML;


    }

}