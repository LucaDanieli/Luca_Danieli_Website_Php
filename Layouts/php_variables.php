<?php

$root_descr = "Luca Danieli Official Website And Portfolio";
$root_page = "http://www.lucadanieli.com/";

//$root_page = "";

$home = "Home";
$home_page = $root_page . strtolower(str_replace(' ', '_', $home)) . ".php";

/* first level - example: Music And Video -> Luca Danieli Official Website And Portfolio : Music And Video -> root/music_and_video.php */

$music_and_video = "Music And Video";
$music_and_video_title = "Artistic";
$music_and_video_descr = $root_descr . " : " . $music_and_video;
$music_and_video_page = $root_page . strtolower(str_replace(' ', '_', $music_and_video)) . ".php";

$writings = "Writings";
$writings_title = "Writings";
$writings_descr = $root_descr . " : " . $writings;
$writings_page = $root_page . strtolower(str_replace(' ', '_', $writings)) . ".php";

$works = "Works";
$works_title = "Works";
$works_descr = $root_descr . " : " . $works;
$works_page = $root_page . strtolower(str_replace(' ', '_', $works)) . ".php";

$about = "About";
$about_title = "About";
$about_descr = $root_descr . " : " . $about;
$about_page = $root_page . strtolower(str_replace(' ', '_', $about)) . ".php";

$about_description = "
Hi! <br><br>

A few notes about me: <br><br>

I was born in 1988 in Arzignano (VI), Italy, and studied Sound Engineering & New Technologies with Nicola Bernardini, Alvise Vidolin and Massimo Marchi at the Conservatory “C. Pollini” of Padova; Music Theory and Contemporary Art History with Stefano Lanza and Alessandra Possamai; Instrumental and Electronic Music Composition, VideoArt and Human-Computer Interfaces with Iannis Zannos, Theodore Lotis, Marianne Strapatsakis, Andreas Mniestris and Dimitra Trypani at the Ionian University (Greece).
<br>

Now, I am a PhD student at the University of Birmingham, studying with Dr Scott Wilson.
";
$about_add = "

";

$contact = "Contact";
$contact_title = "Contact";
$contact_descr = $root_descr . " : " . $contact;
$contact_page = $root_page . strtolower(str_replace(' ', '_', $contact)) . ".php";

$contact_description = "
Ehi! <br><br>

If you want to contact me, in case you were interested on anything, please use the email below. <br><br>
Don't be scared of the notation: it is to prevent spam! You just have to replace the [] with appropriate symbols. <br><br>

<b>dnllcu [at] gmail [dot] com</b>

";
$contact_add = "

";

//-------------------------------------------MUSIC

/* second level - example: Studio secondo -> Luca Danieli Official Website And Portfolio - Music And Video: Studio secondo -> root/Music/studio_secondo.php */

$music_menu_top = 30;
$music_menu_left = 13;

$music_names = array(
  $music = "Music", 
  $silenzi = "Silenzi", 
  $dramma4 = "Dramma in 4 parti",
  $studio2 = "Studio secondo",
  null,
);

$music_descriptions = array(
  $music_descr = $root_descr . " : " . $music, 
  $silenzi_descr = $root_descr . " - " . $music . " : " . $silenzi, 
  $dramma4_descr = $root_descr . " - " . $music . " : " . $dramma4,
  $studio2_descr = $root_descr . " - " . $music . " : " . $studio2
);

$music_pages = array(
  $music_page = $root_page . $music . "/" . strtolower(str_replace(' ', '_', $music)) . ".php", 
  $silenzi_page = $root_page . $music . "/" . strtolower(str_replace(' ', '_', $silenzi)) . ".php", 
  $dramma4_page = $root_page . $music . "/" . strtolower(str_replace(' ', '_', $dramma4)) . ".php",
  $studio2_page = $root_page . $music . "/" . strtolower(str_replace(' ', '_', $studio2)) . ".php"
);

$music_previews = array(
  $silenzi_preview = "For singer, recital and live-electronics. Premiered at the Sonic Art Forum, Colchester, 2013.",
  $dramma4_preview = "For 4 voices and electronics. :anguages: English, Italian, Serbian, Rumanian",
  $studio2_preview = "For string ensemble: violin, 2 violas, 2 cellos and doublebass.",
);

$silenzi_description = "
<p id='description_music_standard_page'><i>Silenzi</i> (<i>Silence</i>) is a musical piece for singer, recital and electronics inspired by poem of the same name written by Marco Bragolusi.</p>
<p id='description_music_standard_page'>It has been premiered at the Sonic Art Forum - experimental music and sound art conference - in Colchester (UK)  on 2-3 November 2013.</p>
";
$silenzi_add = "
<p id='description_music_standard_page'>The work investigates the idea of embodiment, through a comparison between speech and sing.</p>
<p id='description_music_standard_page'>Music: Luca Danieli - text: Marco Bragolusi - voice: Namritha Nori.</p>
";
$silenzi_soundFile = ' <iframe width="100%" height="140" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115281490&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> ';


$dramma4_description = "
<p id='description_music_standard_page'><i>Dramma in 4 parti</i> was original conceived as a live-videoart installation: the music herein is for real-time performance. <br></p>
<p id='description_music_standard_page'>This work is a study on phonetic superimpositions as material for musical writing: syllables overlap continuously, creating hints for structure's expansion or contraction. </p>
";
$dramma4_add = "
<p id='description_music_standard_page'>The piece treats the problem of 'hidden' (or 'black') markets and it is written in four languages: English, Italian, Serbian and Rumanian.</p>
<p id='description_music_standard_page'>Music: Luca Danieli.  </p>
";
$dramma4_soundFile = ' <iframe width="100%" height="140" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/165907204&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe> ';


$studio2_description = "
<p id='description_music_standard_page'><i>Studio secondo</i> is a composition for string ensemble, composed during my studies. The dedicated ensemble is made of one violin, two viols, two cellos and doublebass. <br></p>
<p id='description_music_standard_page'> As thi was a personal study, I can say that the piece is stylistically lively and it approaches several harmonic techniques, moving from eighteenth century ones to the contemporary. </p>
";
$studio2_add = "
<p id='description_music_standard_page'>You can find the score <a href='" . $root_page . "Documents/luca_danieli_studio_secondo.pdf' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>.</p>
<p id='description_music_standard_page'>Music: Luca Danieli.  </p>
";

//-------------------------------------------VIDEO

$video_names = array(
  $video = "Video", 
  $bruno_maderna = "Variations on Bruno Maderna's Notturno" 
);

$video_descriptions = array(
  $video_descr = $root_descr . " : " . $video, 
  $bruno_maderna_descr = $root_descr . " - " . $video . " : " . $bruno_maderna
);

$video_pages = array(
  $video_page = $root_page . $video . "/" . strtolower(str_replace(' ', '_', $video)) . ".php", 
  $bruno_maderna_page = $root_page . $video . "/" . strtolower(str_replace("'", '', str_replace(' ', '_', $bruno_maderna))) . ".php"
);

$bruno_maderna_description = "
<p id='description_music_standard_page'>Variations on Bruno Maderna's Notturno explores the application of musical structures in video sequences, to enrich the relationship between audio and images. Herein, particularly, it has been used a musical structure called variation. </p>
";
$bruno_maderna_add = "";
$bruno_maderna_videoFile = ' <iframe src="//player.vimeo.com/video/74562358" id="video" style="height: 220px; width: 100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

//--------------------------------------------------POEMS

$poems_names = array(
  $poems = "Poems", 
  $apologia = "Apologia della bellezza: il bacio di Vancouver", 
  $la_tragedia = "La tragedia",
  $aforismi = "Aforismi"
);

$poems_descriptions = array(
  $poems_descr = $root_descr . " : " . $poems, 
  $apologia_descr = $root_descr . " - " . $poems . " : " . $apologia, 
  $la_tragedia_descr = $root_descr . " - " . $poems . " : " . $la_tragedia,
  $aforismi_descr = $root_descr . " - " . $poems . " : " . $aforismi
);

$poems_pages = array(
  $poems_page = $root_page . $poems . "/" . strtolower(str_replace(' ', '_', $poems)) . ".php", 
  $apologia_page = $root_page . $poems . "/" . strtolower(str_replace(' ', '_', $apologia)) . ".php", 
  $la_tragedia_page = $root_page . $poems . "/" . strtolower(str_replace(' ', '_', $la_tragedia)) . ".php",
  $aforismi_page = $root_page . $poems . "/" . strtolower(str_replace(' ', '_', $aforismi)) . ".php"
);

$apologia_description = "
<p id='description_music_standard_page'> Apologia della bellezza: il bacio di Vancouver is a poem debating the role of photography in the contemporary. I was inspired by the photo 'The Vancouver Riot's Kiss' by Rich Lam. The picture is available <a href='http://static.guim.co.uk/sys-images/Guardian/Pix/commercial/2011/6/17/1308266116195/Vancouver-riot-kiss-coupl-001.jpg' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>. </p>
";
$apologia_add = "
<table style='width: 100%; cellspacing: 0; position:absolute; top: 86%; border-collapse: collapse'>
<tr><td style='width: 50%; cellspacing: 0; padding: 0;'>
<p id='description_music_standard_page' style='text-align: center;'>
Più esimio bacio mai non fu dato<br>
da chi si millanta di essere amante<br>
focoso. Sembrava un giunco piegato<br>
dal vento, lei, riversa su quel gréto<br>
d'asfalto, da cui la folla correva<br>
Circonvicino era tutto un ossesso;<br> 
un baroccio di gente che gridava<br>
copiosa. Lui con il braccio piegato<br> 
a proteggere il viso parlamentò<br>
con l'autorità, soverchia su loro.<br> 
Poi, in mezzo al furore, un bacio assennato.<br> 
I patetici c'han visto un diamante<br>
e gli sciacalli i dismessi sobborghi<br> 
romantici. L'hanno dipinta come<br>
le battone 'à la va-vite' di Whitechapel,<br>
</p>
</td><td stule='width: 50%; cellspacing: 0; padding: 0;'>
<p id='description_music_standard_page' style='text-align: center;'>
nell'erotica abulìa del suo amplesso:<br>
manigoldi che non hanno musica<br>
nelle parole e pospongono al vero,<br> 
svellendolo chimèrico dal tempo,<br>
il messaggio commesso alla memoria.<br> 
Orbè, quel bacio, d'amore istoriato,<br>
era un topazio incolore; un istante<br>
sospeso e non emanava malizia<br>
né voluttà. Copriva una vita<br>
cangiante, e dietro l'etica fluiva<br> 
velata: in quel gesto è solo il riflesso<br> 
a mostrarsi, col mezzo dell'apatìa.<br>
Per questo è potuto esser carpito<br>
e suscitare bellezza: quel bacio<br> 
mostra una cosa e fa intender dell'altro.<br> 
</p>
</td></tr>
</table>";

$la_tragedia_description = "";

$la_tragedia_add = "
<p id='description_music_standard_page' style='text-align: center;'>
Di sui più bei prati<br>
l'ombra dei cipressi<br>
scandaglia il tempo,<br> 
immobili,<br>
e non s'ode voce.<br> 
Il fascio violaceo<br>
trema in lontananza,<br> 
annoiato.<br>
Di colpo un grido.<br> 
Le rondini s'alzano, maestose.<br> 
E quel che la follia ebbe fatto<br>
venne subito saputo; un grande mormorio:<br> 
s'erano amati con morbo, mentre io,<br>
all'ombra dei cipressi,<br>
guardando le rondini assopite,<br> 
chiedevo l'importante dell'amare;<br>
e rispondevo ch'era amare.<br>
</p>";

$aforismi_description = "";

$aforismi_add = "
<p id='description_music_standard_page' style='font-size: 80%;'>
Che la donna mente; anche l'uomo mente.<br>
Che la donna è romantica; anche l'uomo è romantico.<br>
Che l'uomo è freddo; anche la donna diniega.<br>
Che l'uomo ama il corpo; è vero, ma anche l'uomo è romantico e la donna animale.<br>
Che donna è competizione; spesso l'uomo non sopporta questa sua virilità.<br>
Che la donna è preda e l'uomo cacciatore; sono entità affini, ed attraendosi lacerano il muro della reticenza.<br>
E poi ridono.<br>
Che il maschile è il portatore di sapienza e per questo lo stronzo cucca; che il maschile è il portatore di sapienza e per questo l'oca scopa.<br>
Il mondo della parità sessuale sembra un paradosso da chi stesso inneggia alla sua causa.<br>
E' che per esser persona bisogna oltrepassare la linea dell'alienazione. E di 'alienazioni' ce ne sono due: 'alienazione da' ed 'alienzazione in'.<br>
L' alienzazione 'in' è crisi dell'identità mentre il 'da' è l'emancipazione.<br>
Alienazione 'nei' gruppi: maschio e femmina.
Alienazione 'nella' società: ricchi e poveri.
Alienazione 'nel' contesto: moda e riscontro.<br>
Ogni persona che si aliena 'in' trova affermazione.
C'è chi sparla, chi ride del mondo, chi ferisce e degrada.
C'è chi reclama ideali che poi si dimentica.
C'è chi pensa se stesso diverso da come si muove.<br>
Questo è l'attore che non se ne esce e rimane a applaudire.
Alienazione 'da' è tutto il resto.
Alienazione 'da' i tòpoi di razza.<br>
Quel che non viene all'occhio, è che succede tutto il contrario ai princìpi di un uomo.
Quindi l' 'in' è il 'da', e il 'da' è 'in'.<br>
L'alienazione 'nei' propri princìpi è un ciclo che si auto-alimenta, mentre l'alienazione 'da' questi stessi princìpi è crisi dell'io.<br>
Alienati 'da' e poi alienati 'in'. E poi se vuoi gioca, che nessuno ha detto che l'uomo non sia un uomo e la donna non sia donna.<br>
E' che troppo spesso l'uomo dimentica d'esser romantico.
</p>";

//---------------------------------------THEATRE

$theatre_names = array(
  $theatre = "Theatre", 
  $agatodemone = "Agatodemone e il cacodemone" 
);

$theatre_descriptions = array(
  $theatre_descr = $root_descr . " : " . $theatre,
  $agatodemone_descr = $root_descr . " - " . $theatre . " : " . $agatodemone 
);

$theatre_pages = array(
  $theatre_page = $root_page . $theatre . "/" . strtolower(str_replace(' ', '_', $theatre)) . ".php", 
  $agatodemone_page = $root_page . $theatre . "/" . strtolower(str_replace(' ', '_', $agatodemone)) . ".php" 
);

$agatodemone_description = "
I have written the theatrical work <i>Agatodemone e il Cacodemone</i> when I was 21. Originally, it was conceived in three acts. The third one should be a twenty-minutes musical piece for Flute, Oboe, Tuba, Cello and Live-Electronics. Unfortunately, I have never had the time to conclude this work and therefore I leave it uncomplete. Maybe I will end it someday.<br>
The prosody is representation of the emotional status of the two characters. The rhythm and the writing style are central and evolve during the play.
</p>
";

$agatodemone_add = "
<p id='description_music_standard_page' style='font-size: 100%;'>
You can download the *.pdf version <a href='" . $root_page . "Documents/agatodemone_e_il_cacodemone.pdf' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>.
</p>
";

$agatodemone_image = ' <img style="position: absolute; width: 20%; top: 5%; left: 40%;" src="' . $root_page . 'Images/agatodemone_e_il_cacodemone.jpg "> ';

//-------------------------------------------------------CODES

$codes_menu_top = 30;
$codes_menu_left = 13;

$codes_names = array(
  $codes = "Codes", 
  $websites = "Websites", 
  $supercollider = "SuperCollider",
  $processing_codes = "Processing"
);

$codes_descriptions = array(
  $codes_descr = $root_descr . " : " . $codes, 
  $websites_descr = $root_descr . " - " . $codes . " : " . $websites, 
  $supercollider_descr = $root_descr . " - " . $codes . " : " . $supercollider,
  $processing_codes_descr = $root_descr . " - " . $codes . " : " . $processing_codes
);

$codes_pages = array(
  $codes_page = $root_page . $codes . "/" . strtolower(str_replace(' ', '_', $codes)) . ".php", 
  $websites_page = $root_page . $codes . "/" . strtolower(str_replace(' ', '_', $websites)) . ".php", 
  $supercollider_page = $root_page . $codes . "/" . strtolower(str_replace(' ', '_', $supercollider)) . ".php"
);

$codes_previews = array(
  $websites_preview = "This is a list of various websites that I have created.",
  $supercollider_preview = "Supercollider is a programming language for real time audio synthesis and algorithmic composition.",
  $processing_preview = "Some little examples I have written in processing.",
);

//---------------------------------------------WEBSITES

$websites_names = array(
  "", 
  $luca_portfolio = "Luca Danieli's Portfolio", 
  $fusdi = "Fai uno sforzo d'immaginazione idiota",
  $rpso = "Rifugio per stili orfani"
);

$websites_descriptions = array(
  "",
  $luca_portfolio_descr = $root_descr . " - " . $codes . " : " . $websites . " - " . $luca_portfolio, 
  $fusdi_descr = $root_descr . " - " . $codes . " : " . $websites . " - " . $fusdi,
  $rpso_descr = $root_descr . " - " . $codes . " : " . $websites . " - " . $rpso
);


$websites_menu_top = 30;
$websites_menu_left = 13;

$websites_pages = array(
  "",
  $luca_portfolio_page = $root_page . $codes . "/" . $websites . "/" . strtolower(str_replace("'", '', str_replace(' ', '_', $luca_portfolio))) . ".php", 
  $fusdi_page = $root_page . $codes . "/" . $websites . "/" . strtolower(str_replace(",", '', str_replace("'", '', str_replace(' ', '_', $fusdi)))) . ".php",
  $rpso_page = $root_page . $codes . "/" . $websites . "/" . strtolower(str_replace(' ', '_', $rpso)) . ".php"
);

$websites_previews = array(
  $luca_portfolio_preview = "I have tried to simulate herein part of Ruby's dynamic approach to web development.",
  $fusdi_preview = "Website realized in 2011. This website is dedicated to the second album of the musical band Blackcherry.",
  $rpso_preview = "Website realized in 2008. This website is dedicated to the first album of the musical band Blackcherry.",
);

$luca_portfolio_description = "
This website was originally done using Ruby on Rails. Unfortunately, my web hosting does not support Ruby applications, so I found myself to re-code the website in PHP. 
I have tried to simulate herein part of Ruby's dynamic approach to web development, fragmenting the code in numerous little and re-usable scripts, which help debugging and the manteinance of the website.
</p>
";

$luca_portfolio_add = "
<p id='description_music_standard_page' style='font-size: 100%;'>
You can find the project <a href='https://github.com/LucaDanieli/Luca_Danieli_Website_Php' target='_blank' style='text-decoration: none; color: #bbb;'>here</a> as GIT repository.
</p>
";

$luca_portfolio_image = '
<table id="websites_image_background" style="top: 70%; height: 30%;"><tr><td></td></tr></table>
<table id="websites_image" style="top: 70% height: 30%">
  <tr><td style="width: 100%; height: 1px; background-color: #ef5423;"></td></tr>
  <tr><td id="websites_image_section"> 
    <img style="position: absolute; width: 30%; top: 5%; left: 34%;" src="' . $root_page . 'Images/luca_danieli_website_preview.png "> 
  </td></tr>
</table>  
';

$fusdi_description = "
This website was created as integral part of the album <i>Fai uno sforzo d'immaginazione, idiota</i> released by Blackcherry, a musical band I used to play with. <br>
After the dissolution of the band, I was the only member to take in charge the completition of the project through recordings and promotion. I therefore recorded and mixed the album and made the official webpage.
</p>
";

$fusdi_add = "
<p id='description_music_standard_page' style='font-size: 100%;'>
The website is written in PHP, Javascript and Html with very simple but ustounding and clear layout.
</p>

<p id='description_music_standard_page' style='font-size: 100%;'>
You can find the website <a href='https://http://www.lucadanieli.com/FUSDI/blackcherry/home.php' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>.
</p>
";

$fusdi_image = '
<table id="websites_image_background" style="top: 70%; height: 30%;"><tr><td></td></tr></table>
<table id="websites_image" style="top: 70% height: 30%">
  <tr><td style="width: 100%; height: 1px; background-color: #ef5423;"></td></tr>
  <tr><td id="websites_image_section"> 
    <img style="position: absolute; width: 38%; top: 5%; left: 30%;" src="' . $root_page . 'Images/FUSDI_preview.jpg "> 
  </td></tr>
</table>  
';


$rpso_description = "
<p id='description_music_standard_page' style='font-size: 100%;'>
I made this website when I was 19 years old. It is done mostly in Photoshop, using frames to lighten the loading process. The design is truly gorgeous and I did most of the images used.
</p>
";

$rpso_add = "
<p id='description_music_standard_page' style='font-size: 100%;'>
You can find the website <a href='http://www.lucadanieli.com/FUSDI/blackcherry/rpso/home.html' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>.
</p>
";

$rpso_image = '
<table id="websites_image_background" style="top: 70%; height: 30%;"><tr><td></td></tr></table>
<table id="websites_image" style="top: 70% height: 30%">
  <tr><td style="width: 100%; height: 1px; background-color: #ef5423;"></td></tr>
  <tr><td id="websites_image_section"> 
    <img style="position: absolute; width: 34%; top: 5%; left: 32%;" src="' . $root_page . 'Images/RPSO_preview.jpg "> 
  </td></tr>
</table>  
';

$supercollider_description = "
<p id='description_music_standard_page' style='font-size: 100%;'>
I have been developing SuperCollider for 5 months now, taking part to the development of the new IDE.
<br><br>
I also make music with SuperCollider. I use it principally for real-time performances with acoustic instruments, as means for musical structuring and sound transformation.
</p>
";

$supercollider_add = "
<p id='description_music_standard_page' style='font-size: 100%;'>
SuperCollider is an environment and programming language originally released in 1996 by James McCartney for real-time audio synthesis and algorithmic composition. You can find more information <a href='http://supercollider.sourceforge.net/' target='_blank' style='text-decoration: none; color: #bbb;'>here</a>.
</p>
";


//---------------------------------------------------------PUBLICATIONS

$publications_names = array(
  $publications = "Publications"
);

$publications_descriptions = array(
  $publications_descr = $root_descr . " : " . $publications 
);

$publications_pages = array(
  $publications_page = $root_page . $publications . "/" . strtolower(str_replace(' ', '_', $publications)) . ".php"
);
?>
