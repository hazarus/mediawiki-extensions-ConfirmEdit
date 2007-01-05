<?php
/**
 * Internationalisation file for ConfirmEdit extension.
 *
 * @package MediaWiki
 * @subpackage Extensions
*/

$wgConfirmEditMessages = array();

$wgConfirmEditMessages['en'] = array(
	'captcha-edit' => 'Your edit includes new external links. To help protect against automated
	spam, please solve the simple sum below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount' => 'To help protect against automated account creation, please solve the simple sum
	below and enter the answer in the box ([[Special:Captcha/help|more info]]):',
	'captcha-createaccount-fail' => "Incorrect or missing confirmation code.",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites. While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of colored or distorted text and ask you to type the words shown. Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers. At the moment we do not have an audio alternative available. Please contact the site administrators for assistance if this is unexpectedly preventing you from making legitimate posts.

You will need to have cookies enabled in your browser for this to work.

Hit the 'back' button in your browser to return to the page editor.",
);

$wgConfirmEditMessages['af'] = array(
	'captcha-short'              => "U wysiging bevat nuwe webskakels. Neem kennis dat blote reklame van u werf, produk of besigheid as vandalisme beskou kan word. As beskerming teen outomatiese gemorsbydraes, sal u die woorde wat onder verskyn in die prentjie moet intik: <br />([[Spesiaal:Captcha/help|Wat is hierdie?]])",
	'captchahelp-title'          => 'Captcha-hulp',
	'captchahelp-text'           => "Webwerwe wat bydraes van die publiek aanvaar (soos hierdie wiki) word soms lastig geval deur kwaaddoeners met programme wat outomaties klomp skakels plak in die werf. Alhoewel hierdie gemors verwyder kan word, is dit lastig. In party gevalle, veral as u webskakels by 'n blad voeg, sal die wiki dalk 'n beeld met verwronge teks vertoon en vra dat u die woorde daarin intik. Omdat hierdie taak moeilik geoutomatiseer word, laat dit meeste regte mense toe om bydraes te maak terwyl dit meeste kwaaddoeners stop. Hierdie kan ongelukkig lastig wees vir mense met beperkte sig, of diegene wat teks- of spraakgebaseerde blaaiers gebruik. Tans is daar nog nie 'n klankalternatief beskikbaar nie. Kontak asseblief die werfadministrateurs vir hulp as hierdie u onverwags belemmer om legitieme bydraes te maak. Gebruik die \"terug\"-knoppie van u blaaier om na die vorige blad terug te keer.",
	'captcha-createaccount'      => "As 'n beskerming teen geoutomatiseerde gemors, tik asseblief die woorde wat in die beeld verskyn in om 'n rekening te skep: <br />([[Special:Captcha/help|Wat is hierdie?]])",
	'captcha-createaccount-fail' => "Verkeerde of geen bevestigingkode.",
);
$wgConfirmEditMessages['bs'] = array(
	'captcha-short' => 'Vaša izmjena uključuje nove URL poveznice; kao zaštita od automatizovanog vandalizma, moraćete da ukucate riječi koje su prikazane u slici:
<br />([[{{ns:special}}:Captcha/help|Šta je ovo?]])',
	'captchahelp-text' => 'Vebsajtovi koji podržavaju slanje sadržaja iz javnosti, kao što je ovaj viki, često zloupotrebljavaju vandali koji koriste automatizovane alate da šalju svoje poveznice ka mnogim sajtovima.  Iako se ove neželjene poveznice mogu ukloniti, one ipak zadaju veliku muku.

Ponekad, pogotovo kad se dodaju nove internet poveznice na stranicu, viki softver Vam može pokazati sliku obojenog i izvrnutog teksta i tražiti da ukucate traženu riječ.  Pošto je teško automatizovati ovakav zadatak, on omogućuje svim pravim ljudima da vrše svoje izmjene, ali će zato spriječiti vandale i ostale robotske napadače.

Nažalost, ovo može da bude nepovoljno za korisnike sa ograničenim vidom i za one koji koriste brauzere bazirane na tekstu ili govoru.  U ovom trenutku, audio alternativa nije dostupna.  Molimo Vas da kontaktirate administratore sajta radi pomoći ako Vas ovo neočekivano ometa u pravljenju dobrih izmjena.

Kliknite \'nazad\' (\'back\') dugme vašeg brauzera da se vratite na polje za unos teksta.',
	'captcha-createaccount' => 'Kao zaštita od automatizovanog vandalizma, moraćete da ukucate riječi koje se nalaze na slici da biste registrovali nalog:
<br />([[{{ns:special}}:Captcha/help|Šta je ovo?]])',
	'captcha-createaccount-fail' => 'Netačan unos ili nedostatak šifre za potvrđivanje.',
);
$wgConfirmEditMessages['cs'] = array(
	'captcha-short'              => 'Vaše editace obsahuje nové odkazy formou URL; v zájmu ochrany před automatickým spamováním musíte opsat text z následujícího obrázku:<br />([[Special:Captcha/help|Co tohle znamená?]])',
	'captchahelp-title'          => 'Nápověda ke captcha',
	'captchahelp-text'           => "Webové stránky, do kterých mohou přispívat jejich návštěvníci (jako například tato wiki), jsou často terčem spammerů, kteří pomocí automatických nástrojů vkládají své odkazy na velké množství stránek. Přestože lze tento spam odstranit, představuje nepříjemné obtěžování.

Někdy, zvláště při přidávání nových webových odkazů, vám může wiki ukázat obrázek barevného či pokrouceného textu a požádat vás o opsání zobrazených znaků. Jelikož takovou úlohu lze jen těžko automatizovat, skuteční lidé mohou dále přispívat, zatímco většina spammerů a jiných robotických útočníků to zastaví.

Bohužel to však může představovat nepříjemný problém pro uživatele se zrakovým postižením či uživatele používající textové prohlížeče či hlasové čtečky. V současné době nemáme alternativní zvukovou verzi. Kontaktujte laskavě správce serveru, pokud vám to brání v užitečných příspěvcích a potřebujete pomoc.

Pro návrat na předchozí stránku stiskněte ve svém prohlížeči tlačítko „zpět“.",
	'captcha-createaccount'      => 'V rámci ochrany před automatickým spamováním musíte pro provedení registrace opsat text z následujícího obrázku:<br />([[Special:Captcha/help|Co tohle znamená?]])',
	'captcha-createaccount-fail' => 'Chybějící či neplatný potvrzovací kód.',
);
$wgConfirmEditMessages['cy'] = array(
	'captcha-short'              => "Mae eich golygiad yn cynnwys cysylltiadau URL newydd. Er mwyn profi nad ydych yn beiriant sbam, teipiwch y geiriau canlynol yn y blwch isod os gwelwch yn dda. <br />([[Arbennig:Captcha/help|Mwy o wybodaeth]])",
	'captchahelp-title'          => 'Cymorth "captcha"',
	'captchahelp-text'           => "Yn anffodus, mae safleoedd gwe fel Wicipedia, sy'n caniatau i'r cyhoedd ysgrifennu iddi, yn darged beunyddiol i sbamwyr sy'n defnyddio rhaglenni arbennig i bostio eu cysylltiadau. Gellir dileu'r dolenni o'r dudalen, ond mae hyn yn drafferth mawr. O dro i dro, fe fydd y safle hon yn dangos delwedd o destun, ac fe fydd yn rhaid i chi deipio'r geiriau a ddangosir. Mae hyn yn dasg anodd iawn i ragenni cyfrifiadurol, felly dylai golygwyr go iawn gyflawni'r dasg yn di-drafferth, yn wahanol i'r rhaglenni sbam. Mae hyn yn amlwg yn creu trafferthion i'r sawl sydd yn defnyddio porwyr testun neu sydd yn colli eu golwg. Ar hyn o bryd nid oes fersiwn sain ar gael. Cysylltwch â gweinyddwyr y safle os ydi'r nodwedd hon yn eich rhwystro rhag ychwanegu golygiadau dilys. Gwasgwch botwm 'nôl' eich porwr er mwyn dychwelyd.",
	'captcha-createaccount'      => "Teipiwch y geiriau sy'n ymddangos yn y ddelwedd isod os gwelwch yn dda. Mae'r nodwedd hon yn rhwystro rhaglenni sbam rhag creu cyfrifon i'w hunain. <br />([[Arbennig:Captcha/help|Mwy o wybodaeth]])",
	'captcha-createaccount-fail' => "Côd cadarnhau ar goll neu'n anghywir.",
);
$wgConfirmEditMessages['de'] = array(
	'captcha-edit'		     => "Ihre Bearbeitung enthält neue externe Links. Zum Schutz vor automatisiertem Spamming ist es nötig, dass Sie die nachfolgende Rechenaufgabe lösen und das Ergebnis eintragen. Klicken Sie dann erneut auf „Seite speichern“.<br /> [[{{ns:special}}:Captcha/help|(Was soll das?)]]",
	'captchahelp-title'          => 'Captcha-Hilfe',
	'captchahelp-text'           => "Internetangebote, die für Beiträge von praktisch jedem offen sind — so wie das {{SITENAME}}-Wiki — werden oft von Spammern missbraucht, die ihre Links automatisch auf vielen Webseiten platzieren. Diese Spam-Links können wieder entfernt werden, sie sind aber ein erhebliches Ärgernis. In manchen Fällen, insbesondere beim Hinzufügen von neuen Weblinks zu einer Seite, kann es vorkommen, dass dieses Wiki ein Bild mit einem farbigen und verzerrten Text anzeigt und dazu auffordert, die angezeigten Wörter einzutippen. Da eine solche Aufgabe nur schwer automatisch erledigt werden kann, werden dadurch die meisten Spammer, die mit automatischen Werkzeugen arbeiten, gestoppt, wogegen menschliche Benutzer ihren Beitrag absenden können. Leider kann dies zu Schwierigkeiten für Personen führen, die über eine eingeschränkte Sehfähigkeit verfügen oder text- oder sprachbasierte Browser verwenden. Eine Lösung ist die reguläre Anmeldung als Benutzer. Der „Zurück“-Knopf des Browsers führt zurück in das Bearbeitungsfenster.",
	'captcha-createaccount'      => "Zum Schutz vor automatisierter Anlage von Benutzerkonten müssen Sie einmalig die nebenstehende Rechenaufgabe lösen. [[{{ns:special}}:Captcha/help|(Fragen oder Probleme?)]]",
	'captcha-createaccount-fail' => "Falscher oder fehlender Bestätigungscode.",
);
$wgConfirmEditMessages['et'] = array(
	'captcha-short'              => "Teie muudatuses on uusi linke; kaitseks spämmi vastu peate sisestama järgneval pildil olevad sõnad:<br /> ([[Special:Captcha/help|Mis see on?]])",
	'captchahelp-title'          => 'Mis on Captcha?',
	'captchahelp-text'           => "Internetisaite, mis lubavad külastajatel sisu muuta (nagu ka see Viki), kasutavad sageli spämmerid ära, postitades reklaamlinke - spämmi. Kuigi neid linke saab alati ära võtta, on nad ikkagi üpris tülikad. Omale kasutajakontot registreerides või mõnele lehele uusi internetiaadresse postitades näidatakse teile moonutatud tekstiga pilti ning palutakse teil sisestada seal näidatud sõnad. Kuna selliselt pildilt on arvutil raske teksti välja lugeda, on see efektiivseks kaitseks spämmirobotite vastu, samas lubades tavainimestel oma muudatusi rahus teha. Kahjuks võib see tekitada ebamugavusi nägemisraskustega inimestele või neile, kes kasutavad kõnesüntesaatorit või tekstipõhist brauserit. Hetkel pole meil helipõhist alternatiivi. Kui teil tekib ootamatult raskusi oma muudatuste tegemisel, siis kirjutage sellest [[Vikipeedia:Üldine arutelu|üldise arutelu]] lehele. Konto registreerimise lehele või lehe redigeerimisele tagasi jõudmiseks vajutage oma brauseri tagasi-nuppu.",
	'captcha-createaccount'      => "Kaitsena spämmi vastu peate konto registreerimiseks lahtrisse kirjutama järgneva tehte tulemuse.<br /> ([[Special:Captcha/help|Mis see on?]])",
	'captcha-createaccount-fail' => "Puuduv või valesti sisestatud kinnituskood.",
);
$wgConfirmEditMessages['eu'] = array(
	'captcha-short'              => "Zure aldaketan URL lotura berriak daude; spam-a saihesteko, jarraian dagoen irudiko hitzak idaztea beharrezkoa da:<br /> ([[Special:Captcha/help|Zer da hau?]])",
	'captchahelp-title'          => 'Captcha laguntza',
	'captchahelp-text'           => "Publikoki aldaketak egiteko aukerak dituzten webguneetan, wiki honetan bezalaxe, spam testuak gehitzen dira sarritan tresna automatikoak erabiliz. Lotura horiek ezabatu egin daitezkeen arren, traba dira. Batzutan, eta bereziki webgune berri bateko loturak gehitzen dituzunean, hitz batzuk dituen irudi bat agertuko zaizu, eta bertan ageri den testua idazteko eskatuko zaizu. Lan hori automatizatzeko zaila da, eta pertsonei ezer kostatzen ez zaigunez, spam testuak saihesteko lagungarria da. Zoritxarrez, ikusmen mugatua edo testu bidezko nabigatzaileak erabiltzen dituzten erabiltzeek arazoak izan ditzakete. Horrelako zerbait gertatzen bazaizu, mesedez, jarri administratzaileekin harremanetan. Zure nabigatzaileko 'atzera' lotura erabili aldaketen orrialdera itzultzeko.",
	'captcha-createaccount'      => "Spam-a saihesteko, mesedez, irudian agertzen den hizki edo zenbaki kodea, beheko laukian idatzi zure kontua sortzeko:<br /> ([[Special:Captcha/help|Zer da hau?]])",
	'captcha-createaccount-fail' => "Baieztatze kode ezegokia.",
);
$wgConfirmEditMessages['fi'] = array(
	'captcha-short'              => "Muokkauksesi sisältää uusia linkkejä muille sivuille. Automaattisen linkkien lisäämisen estämisen vuoksi sinun pitää kirjoittaa alla olevan kuvan sisältämät sanat:<br />
([[Special:Captcha/help|Mikä tämä on?]])",
	'captchahelp-title'          => 'Captcha-ohje',
	'captchahelp-text'           => "Verkkosivut, jotka sallivat ulkopuolisten lisätä sisältöä, joutuvat usein spam-hyökkäysten kohteeksi. Spam-hyökkäyksessä spammerit käyttävät työkaluja, jotka automaattisesti lisäävät linkkejä monille sivuille. Vaikka nämä linkit voidaan poistaa, aiheutuu niistä silti merkittävä haitta.

Joskus, erityisesti kun lisäät uusia linkkejä, saatat nähdä kuvan, jossa on värillistä ja vääristynyttä tekstiä, ja sinua pyydetään kirjoittamaan sen sisältämät sanat. Koska tätä tehtävää on vaikea automatisoida, se sallii melkein kaikkien oikeiden ihmisten tehdä muutoksensa, mutta estää automaattiset lisäykset..

Valitettavasti tämä saattaa estää käyttäjiä, joilla on rajoittunut näkökyky tai käyttäjiä, jotka käyttävät teksti- tai puhepohjaisia selaimia. Ota yhteyttä sivuston ylläpitäjään, jos et pysty tekemään kunnollisia muutoksia.

Voit palata muokkaustilaan selaimen paluutoiminnolla.",
	'captcha-createaccount'      => "Automaattisten spam-hyökkäysten estämiseksi, sinun täytyy kirjoittaa alla olevan kuvan sisältämät sanat, jotta voisit luoda tunnuksen:<br />
([[Special:Captcha/help|Mikä tämä on?]])",
	'captcha-createaccount-fail' => "Väärä tai puuttuva varmistuskoodi.",
);
$wgConfirmEditMessages['ga'] = array(
	'captcha-short'              => "Tá naisc URL nua san athrú seo atá tú ar tí a dhéanamh; mar chosaint in éadan turscair uathoibrithe, caithfidh tú na focail san íomhá seo a ionchur: <br />([[Speisialta:Captcha/help|Céard é seo?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites. While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of colored or distorted text and ask you to type the words shown. Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers. At the moment we do not have an audio alternative available. Please contact the site administrators for assistance if this is unexpectedly preventing you from making legitimate posts.

Hit the 'back' button in your browser to return to the page editor.",
	'captcha-createaccount'      => "Mar chosaint in éadan turscair uathoibrithe, caithfidh tú na focail san íomhá seo a ionchur chun cuntas a chlárú: <br />([[Speisialta:Captcha/help|Céard é seo?]])",
	'captcha-createaccount-fail' => "Ní raibh an cód deimhnithe ceart sa bhosca, nó ní raibh aon chód ann ar chor ar bith.",
);
$wgConfirmEditMessages['gl'] = array(
	'captcha-short'              => "A súa edición inclúe novos enderezos URL; como protección contra as ferramentas de publicación automática de enlaces publicitarios necesita teclear as palabras que aparecen nesta imaxe:<br /> ([[Special:Captcha/help|Qué é isto?]])",
	'captchahelp-title'          => 'Captcha axuda',
	'captchahelp-text'           => "'''CAPTCHA''' (acrónimo de \"'''C'''ompletely '''A'''utomated '''P'''ublic '''T'''uring test to tell '''C'''omputers and '''H'''umans '''A'''part\") é un test de autentificación do tipo desafío-resposta usado nos contornos informáticos para distinguir usuarios humanos de máquinas. Os sitios web que aceptan publicar as contribucións dos usuarios coma este wiki sofren, con frecuencia, o abuso por parte de ''spammers'' que usan ferramentas que automatizan a inclusión de lixo en forma de enlaces publicitarios nunha chea páxinas en pouco tempo. Mentres ditas ligazóns non son eliminadas supoñen unha molestia e unha perda de tempo. En ocasións, en particular cando engada algún novo vínculo externo, o wiki pode mostrar unha imaxe dun texto coloreado e distorsionado e pedíralle que teclee as palabras mostradas. Como esta tarefa é difícil de automatizar permite distinguir entre persoas e robots, e dificulta os ataques automatizados dos ''spammers''. Por desgraza pode causar problemas a aqueles usuarios con dificultades de visión, ou os que utilicen navegadores de texto ou navegadores baseados en sistemas de voz. Polo de agora non dispoñemos dunha alternativa de audio. Por favor contacte cun [[Special:Listusers/sysop|administrador]] do wiki para solicitar axuda se o sistema lle impide rexistrase para facer contribucións lexítimas. Prema no botón 'atrás' ou equivalente do seu navegador para volver á páxina na que estaba.",
	'captcha-createaccount'      => "Como protección fronte a sistemas de creación automática de contas de usuario usados polos ''spamers'', ten que teclear as palabras que aparecen na imaxe para rexistrar unha conta:<br /> ([[Special:Captcha/help|Qué é isto?]])",
	'captcha-createaccount-fail' => "Falta o código de confirmación ou é incorrecto.",
);
$wgConfirmEditMessages['he'] = array(
	'captcha-edit'               => 'עריכתכם כוללת קישורים חיצוניים חדשים. כהגנה מפני ספאם אוטומטי, אנא פיתרו את תרגיל החיבור הפשוט שלהלן והקלידו את התשובה בתיבה ([[{{ns:special}}:Captcha/help|מידע נוסף]]):',
	'captcha-createaccount'      => 'כהגנה מפני יצירת חשבונות אוטומטית, אנא פיתרו את תרגיל החיבור הפשוט שלהלן והקלידו את התשובה בתיבה ([[{{ns:special}}:Captcha/help|מידע נוסף]]):',
	'captcha-createaccount-fail' => 'לא הקלדתם קוד אישור, או שהוא שגוי.',
	'captchahelp-title'          => 'עזרה במערכת הגנת הספאם',
	'captchahelp-text'           => "פעמים רבות מנצלים ספאמרים אתרים שמקבלים תוכן מהציבור, כמו הוויקי הזה, כדי לפרסם את הקישורים שלהם לאתרים רבים באינטרנט, באמצעות כלים אוטומטיים. אמנם ניתן להסיר את קישורי הספאם הללו, אך זהו מטרד משמעותי.

לעיתים, בעיקר כשאתם מכניסים קישורי אינטרנט חדשים לתוך עמוד, הוויקי עשוי להראות תמונה של טקסט צבעוני או מעוקם ויבקש מכם להקליד את המילים המוצגות. כיוון שזו משימה שקשה לבצעה בצורה אוטומטית, הדבר יאפשר לבני־אדם אמיתיים לשלוח את הדפים, אך יעצור את רוב הספאמרים והמתקיפים הרובוטיים.

לרוע המזל, הדבר עשוי לגרום לאי נוחות למשתמשים עם דפדפן בגרסה מוגבלת, או שמשתמשים בדפדפנים מבוססי טקסט או דיבור. כרגע, אין לנו חלופה קולית זמינה. אנא צרו קשר עם מנהלי האתר לעזרה אם המערכת מונעת מכם באופן בלתי צפוי לבצע עריכות לגיטימיות.

עליכם להפעיל את תכונת העוגיות (Cookies) בדפדפן שלכם כדי שזה יעבוד.

אנא לחצו על הכפתור 'Back' בדפדפן שלכם כדי לחזור לדף העריכה.",
);
$wgConfirmEditMessages['hr'] = array(
	'captcha-short'              => "Vaše uređivanje sadrži nove vanjske poveznice. Kao zaštitu od automatskog spama, trebate unijeti slova koja vidite na slici: <br />([[Posebno:Captcha/help|Pomoć?]])",
	'captchahelp-title'          => 'Antispam pomoć',
	'captchahelp-text'           => "Web poslužitelje koji rade na temelju javnih doprinosa, poput wiki, često zloupotrebljavaju spameri. Oni koriste automatske alate pomoću kojih generiraju poveznice od vlastitog interesa. Iako se te poveznice najčešće uklanjaju, mogu predstavljati neugodnost pri radu. Ponekad se dogodi da wiki prikaže sliku čudnog tekstualnog sadržaja uz koju morate unijeti prikazana slova. Budući da je takvu radnju teško automatizirati, većina se napadača obeshrabri, a pravi suradnici bez većih smetnji nastavljaju pridonositi. Ukoliko ste suradnik koji koristi tekstualni klijent te vas česte ovakve provjere ometaju pri dodavanju važećih sadržaja, molimo da se obratite [[Special:Listusers/sysop|administratorima]].",
	'captcha-createaccount'      => "Kao zaštitu od automatskog spama, pri otvaranju računa trebate unijeti slova koja vidite na slici: <br />([[Posebno:Captcha/help|Pomoć]])",
	'captcha-createaccount-fail' => "Potvrdni kod je nepotpun ili netočan.",
);

$wgConfirmEditMessages['id'] = array(
	'captcha-short'              => "Suntingan Anda menyertakan pralana luar baru. Sebagai perlindungan terhadap ''spam'' otomatis, Anda harus mengetikkan kata atau hasil perhitungan yang tertera berikut ini:<br />
([[Special:Captcha/help|Apa ini?]])",
	'captchahelp-title'          => 'Mengenai Captcha',
	'captchahelp-text'           => "Situs-situs web yang menerima masukan data dari publik, seperti {{ns:project}} ini, kerapkali disalahgunakan oleh pengguna-pengguna yang tidak bertanggungjawab untuk mengirimkan spam dengan menggunakan program-program otomatis. Walaupun spam-spam tersebut dapat dibuang, tetapi tetap saja menimbulkan gangguan berarti.

Ketika menambahkan pranala web baru ke suatu halaman, {{ns:project}} akan menampilkan sebuah gambar tulisan yang terdistorsi atau suatu perhitungan sederhana dan meminta Anda untuk mengetikkan kata atau hasil dimaksud. Karena ini merupakan suatu pekerjaan yang sulit diotomatisasi, pembatasan ini akan mengizinkan hampir semua manusia untuk melakukannya, tapi di sisi lain akan menghentikan kebanyakan aksi spam dan penyerangan yang dilakukan oleh bot otomatis.

Sayangnya, hal ini dapat menimbulkan kesulitan bagi pengguna dengan keterbatasan penglihatan atau pengguna yang menggunakan penjelajah basis teks atau suara. Saat ini, kami tidak memiliki suatu alternatif suara untuk hal ini. Silakan minta bantuan dari pengurus situs jika hal ini menghambat Anda untuk mengirimkan suntingan yang layak.

Tekan tombol 'back' di penjelajah web Anda untuk kembali ke halaman penyuntingan.",
	'captcha-createaccount'      => "Sebagai perlindungan melawan spam, Anda diharuskan untuk mengetikkan kata atau hasil perhitungan di bawah ini di kotak yang tersedia untuk dapat mendaftarkan pengguna baru:<br />
([[Special:Captcha/help|Apa ini?]])",
	'captcha-createaccount-fail' => "Kode konfirmasi salah atau belum diisi.",
);
$wgConfirmEditMessages['is'] = array(
	'captcha-short'              => "Breyting þín fól í sér nýja tengla á aðrar vefsíður. Til þess að verjast sjálfvirku auglýsingarusli verðum við að biðja þig um að skrifa inn orðin sem sjást á þessari mynd: <br />([[Special:Captcha/help|Hvað er þetta?]])",
	'captchahelp-title'          => 'Captcha-hjálp',
	'captchahelp-text'           => "Vefsíður sem að leyfa framlög frá frá almenningi, líkt og þessi wiki-vefur, eru oft misnotaðar af svokölluðum „spömmurum“ sem nota sjálfvirk tól til þess að setja inn tengla á aðrar vefsíður. Aðrir notendur geta fjarlægt þessa tengla en töluverð truflun er af þeim.

Stundum þegar þú breytir síðum, sérstaklega ef breytingin felur í sér nýja tengla á aðra vefi, getur gerst að þú sért beðin(n) um að skrifa inn orð sem birtast á lituðum eða óskýrum myndum. Fyrir flesta notendur af holdi og blóði er þetta lítið mál en sjálfvirk tól ráða ekki við þetta.

Því miður kann þetta að valda notendum óþægindum sem hafa skerta sjón eða notast við talmálsvafra. Enn sem komið er eru ekki til aðrir valkostir fyrir þau tilvik. Ef þetta kemur í veg fyrir lögmætar breytingar af þinni hálfu getur þú leitað aðstoðar hjá stjórnendum vefsins.

Notaðu „back“-hnapp vafrans til að halda áfram.",
	'captcha-createaccount'      => "Til þess að verjast sjálfvirku auglýsingarusli verðum við að biðja þig um að skrifa inn orðin sem sjást á þessari mynd áður en þú skráir notandanafn: <br />([[Special:Captcha/help|Hvað er þetta?]])",
	'captcha-createaccount-fail' => "Staðfestingarkóðinn var rangur eða ekki til staðar.",
);
$wgConfirmEditMessages['it'] = array(
	'captcha-short'              => "La modifica richiesta aggiunge dei nuovi collegamenti (URL) alla pagina; come misura precauzionale contro l'inserimento automatico di spam, per confermarla è necessario inserire le parole che appaiono nell'immagine:<br />
([[Special:Captcha/help|Cosa vuol dire?]])",
	'captchahelp-title'          => "Cos'è il captcha?",
	'captchahelp-text'           => "Capita spesso che i siti Web che accettano messaggi pubblici, come questo wiki, siano presi di mira da spammer che usano strumenti automatici per inserire collegamenti pubblicitari verso un gran numero di siti. Per quanto i collegamenti indesiderati si possano rimuovere, si tratta comunque di una seccatura non indifferente.
	
In alcuni casi, ad esempio quando si tenta di aggiungere nuovi collegamenti Web in una pagina, il software wiki può mostrare una immagine con un breve testo colorato e/o distorto chiedendo di riscriverlo in un'apposita finestrella. Poiché si tratta di un'azione difficile da replicare da parte di un computer, questo meccanismo consente a (quasi tutti) gli utenti reali di completare l'inserimento desiderato, impedendo l'accesso alla maggior parte degli spammer e degli altri attacchi automatizzati.	
	
Sfortunatamente, queste misure di sicurezza possono mettere in difficoltà gli utenti con problemi visivi o coloro che utilizzano browser testuali o basati sulla sintesi vocale. Purtroppo al momento non è disponibile un meccanismo alternativo basato su messaggi audio; se queste procedure impediscono l'inserimento informazioni che si ritengono legittime, si prega di contattare gli amministratori del sito e chiedere loro assistenza.

Fare clic sul pulsante 'back' del browser per tornare alla pagina di modifica.",
	'captcha-createaccount'      => "Come misura di sicurezza nei confronti dei messaggi di spam automatici, per registrarsi è necessario inserire le parole che appaiono nell'immagine:<br />
([[Speciale:Captcha/help|Cosa vuol dire?]])",
	'captcha-createaccount-fail' => "Codice di verifica errato o mancante.",
);
$wgConfirmEditMessages['ja'] = array(
	'captcha-short'              => "あなたの編集は新しいURLへのリンクを含みます。スパム防止のため、下記に現れる単語を入力してください。<br />
([[Special:Captcha/help|これはなに？]])",
	'captchahelp-title'          => 'Captcha ヘルプ',
	'captchahelp-text'           => "当Wikiのような、投稿が公開されているウェブサイトは、多くのサイトに自分たちへのリンクを自動投稿するツールで、スパム屋により荒らされます。これらのスパムは除去できるものの、それらは非常にうっとうしいです。

時々、特に新しいリンクをページに追加したとき、Wikiが色の付いた、もしくは、ゆがめられた文字を提示し、入力をお願いすることがあります。この作業は自動化が難しいため、本当の人間の投稿を可能にしつつ、多くのスパム屋やロボットの攻撃を防ぐことが出来ます。

しかし、残念なことに、テキストベースやスピーチベースのブラウザを使っている、視覚障害者に不便をおかけする場合があります。現時点では、音声版の代替物がありません。正当な投稿をするにあたって、これが障害となっている場合、サイト管理者に連絡し、協力を求めてください。

編集ページに戻るには、ブラウザの戻るボタンを押してください。",
	'captcha-createaccount'      => "スパム防止のため、アカウントを登録するにあたって、下記に現れる単語を入力してください。<br />
([[Special:Captcha/help|これはなに？]])",
	'captcha-createaccount-fail' => "確認コードの入力がないか、間違っています。",
);
$wgConfirmEditMessages['kk-kz'] = array(
	'captcha-short'              => "Өңдеген мағлұматыңызда жаңа сілтеме URL жайлар бар екен; аутоматты «спам»-нан қорғану жолында, осы суреттегі көрсетілген сөздерді енгізіңіз:<br />
([[{{ns:special}}:Captcha/help|Бұл не?]])",
	'captchahelp-title'          => 'CAPTCHA қызметінің анықтамасы',
	'captchahelp-text'           => "Осы уики сияқты, баршадан жіберілген хабарды қабылдайтын веб-торапты, аутоматты құралдары бар «спаммерлер» көп торап сілтемелерін жиі жаудырады. Осындай «спам» сілтемелерін аластау болғанда да, бұл мәнді ыза келтіреді.

Кейде, әсіресе бетке жаңа веб сілтемесін қосқанда, осы уики өңі өзгерген не майысқан мәтінді көрсетіп және көрсетілген сөздерді енгізуін сұрауға  мүмкін. Осы тапсырысты аутоматтау өте қиын, сондықтан бұл иманды адам көпшілігіне кедергі болмайды, бірақ «спаммерлерді» және басқа бот бұзақыларды тоқтатады.

Өкінішке орай, бұл көруі төмендеген, немесе мәтін не дауыс негізіндегі шолғышты қолданатын пайдаланушыға ыңғайсыздық келтіруге мүмкін. Осы қазір бізде дыбысты балама жоқ. Егер бұл адал жазуыңызға кедергі шытесе торап бақылаушыларына қатынасыңыз.

Бет өдңдеуішке кері қайту үшін «Артқа» түймесін басыңыз.",
	'captcha-createaccount'      => "Аутоматты «спам»-нан қорғану жолында, жаңа тіркелгі жасау үшін осы суретте көрсетілген сөздерді енгізіңіз:<br />
([[{{ns:special}}:Captcha/help|Бұл не?]])",
	'captcha-createaccount-fail' => "Куәландыру коды дұрыс емес немесе жоқ.",
);
$wgConfirmEditMessages['kk-tr'] = array(
	'captcha-short'              => "Öñdegen mağlumatıñızda jaña silteme URL jaýlar bar eken; awtomattı «spam»-nan qorğanw jolında, osı swrettegi körsetilgen sözderdi engiziñiz:<br />
([[{{ns:special}}:Captcha/help|Bul ne?]])",
	'captchahelp-title'          => 'CAPTCHA qızmetiniñ anıqtaması',
	'captchahelp-text'           => "Osı wïkï sïyaqtı, barşadan jiberilgen xabardı qabıldaýtın veb-toraptı, awtomattı quraldarı bar «spammerler» köp torap siltemelerin jïi jawdıradı. Osındaý «spam» siltemelerin alastaw bolğanda da, bul mändi ıza keltiredi.

Keýde, äsirese betke jaña veb siltemesin qosqanda, osı wïkï öñi özgergen ne maýısqan mätindi körsetip jäne körsetilgen sözderdi engizwin surawğa  mümkin. Osı tapsırıstı awtomattaw öte qïın, sondıqtan bul ïmandı adam köpşiligine kedergi bolmaýdı, biraq «spammerlerdi» jäne basqa bot buzaqılardı toqtatadı.

Ökinişke oraý, bul körwi tömendegen, nemese mätin ne dawıs negizindegi şolğıştı qoldanatın paýdalanwşığa ıñğaýsızdıq keltirwge mümkin. Osı qazir bizde dıbıstı balama joq. Eger bul adal jazwıñızğa kedergi şıtese torap baqılawşılarına qatınasıñız.

Bet ödñdewişke keri qaýtw üşin «Artqa» tüýmesin basıñız.",
	'captcha-createaccount'      => "Awtomattı «spam»-nan qorğanw jolında, jaña tirkelgi jasaw üşin osı swrette körsetilgen sözderdi engiziñiz:<br />
([[{{ns:special}}:Captcha/help|Bul ne?]])",
	'captcha-createaccount-fail' => "Kwälandırw kodı durıs emes nemese joq.",
);
$wgConfirmEditMessages['kk-cn'] = array(
	'captcha-short'              => "ٴوڭدەگەن ماعلۇماتىڭىزدا جاڭا سٴىلتەمە URL جايلار بار ەكەن; اۋتوماتتى «سپام»-نان قورعانۋ جولىندا, وسى سۋرەتتەگٴى كٴورسەتٴىلگەن سٴوزدەردٴى ەنگٴىزٴىڭٴىز:<br />
([[{{ns:special}}:Captcha/help|بۇل نە?]])",
	'captchahelp-title'          => 'CAPTCHA قىزمەتٴىنٴىڭ انىقتاماسى',
	'captchahelp-text'           => "وسى ۋيكي سيياقتى, بارشادان جٴىبەرٴىلگەن حاباردى قابىلدايتىن ۆەب-توراپتى, اۋتوماتتى قۇرالدارى بار «سپاممەرلەر» كٴوپ توراپ سٴىلتەمەلەرٴىن جيٴى جاۋدىرادى. وسىنداي «سپام» سٴىلتەمەلەرٴىن الاستاۋ بولعاندا دا, بۇل مٴاندٴى ىزا كەلتٴىرەدٴى.

كەيدە, ٴاسٴىرەسە بەتكە جاڭا ۆەب سٴىلتەمەسٴىن قوسقاندا, وسى ۋيكي ٴوڭٴى ٴوزگەرگەن نە مايىسقان مٴاتٴىندٴى كٴورسەتٴىپ جٴانە كٴورسەتٴىلگەن سٴوزدەردٴى ەنگٴىزۋٴىن سۇراۋعا  مٴۇمكٴىن. وسى تاپسىرىستى اۋتوماتتاۋ ٴوتە قيىن, سوندىقتان بۇل يماندى ادام كٴوپشٴىلٴىگٴىنە كەدەرگٴى بولمايدى, بٴىراق «سپاممەرلەردٴى» جٴانە باسقا بوت بۇزاقىلاردى توقتاتادى.

ٴوكٴىنٴىشكە وراي, بۇل كٴورۋٴى تٴومەندەگەن, نەمەسە مٴاتٴىن نە داۋىس نەگٴىزٴىندەگٴى شولعىشتى قولداناتىن پايدالانۋشىعا ىڭعايسىزدىق كەلتٴىرۋگە مٴۇمكٴىن. وسى قازٴىر بٴىزدە دىبىستى بالاما جوق. ەگەر بۇل ادال جازۋىڭىزعا كەدەرگٴى شىتەسە توراپ باقىلاۋشىلارىنا قاتىناسىڭىز.

بەت ٴودڭدەۋٴىشكە كەرٴى قايتۋ ٴۇشٴىن «ارتقا» تٴۇيمەسٴىن باسىڭىز.",
	'captcha-createaccount'      => "اۋتوماتتى «سپام»-نان قورعانۋ جولىندا, جاڭا تٴىركەلگٴى جاساۋ ٴۇشٴىن وسى سۋرەتتە كٴورسەتٴىلگەن سٴوزدەردٴى ەنگٴىزٴىڭٴىز:<br />
([[{{ns:special}}:Captcha/help|بۇل نە?]])",
	'captcha-createaccount-fail' => "كۋٴالاندىرۋ كودى دۇرىس ەمەس نەمەسە جوق.",
);
$wgConfirmEditMessages['kk'] = $wgConfirmEditMessages['kk-kz'];
$wgConfirmEditMessages['la'] = array(
	'captcha-short'              => "Emendatione tua insunt nexus URL; ut spam automaticum vitemus, necesse est tibi inscribere verba, quae in hac imagine videntur. <br /> ([[Specialis:Captcha/Auxilium|Quidst illud?]])",
	'captchahelp-title'          => 'Captcha auxilium',
	'captchahelp-text'           => "Web sites that accept postings from the public, like this wiki, are often abused by spammers who use automated tools to post their links to many sites. While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may show you an image of colored or distorted text and ask you to type the words shown. Since this is a task that's hard to automate, it will allow most real humans to make their posts while stopping most spammers and other robotic attackers.

Unfortunately this may inconvenience users with limited vision or using text-based or speech-based browsers. At the moment we do not have an audio alternative available. Please contact the site administrators for assistance if this is unexpectedly preventing you from making legitimate posts.

Hit the 'back' button in your browser to return to the page editor.",
	'captcha-createaccount'      => "Ut spam automaticum vitemus, necesse est tibi inscribere verba, quae in hac imagine videntur, priusquam rationem possis creare. <br /> ([[Specialis:Captcha/Auxilium|Quidst illud?]])",
	'captcha-createaccount-fail' => "Codex affirmationis aut non scriptus est aut male.",
);
$wgConfirmEditMessages['lv'] = array(
	'captcha-short'              => "Tavas izmaiņas ietver jaunu URL saiti. Lai pasargātos no automātiskas mēstuļošanas, Tev ir jāieraksta vārds, kas redzams šajā attēlā: <br />([[Special:Captcha/help|Kāpēc tā?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Interneta lapas, kurās iespējams pievienot tekstu, kā šajā wiki, bieži cieš no mēstuļotājiem, kuri izmanto automatizētus līdzekļus, lai pievienotu savus saites daudzās jo daudzās interneta lapās. Kaut arī šīs saites var viegli dzēst, tomēr tās ir nozīmīgs traucēklis. Reizēm, jo īpaši pievienojot jaunas interneta saites, wiki programmatūra var parādīt Tev attēlu, kurā ir krāsains vai sagrozīts teksts. Šis teksts ir jāpārraksta un to ir ļoti grūti izdarīt automātiski, tā apgrūtinot lielāko daļu mēstuļotāju, savukārt gandrīz visi parastie lietotāji to var izdarīt bez grūtībām. Diemžēl tas var apgrūtināt lietotājus, kuriem ir redzes traucējumi vai kuri izmanto teksta pārlūkus vai dzirdes pārlūkus. Šobrīd nav pieejama audio alternatīva, bet sazinies ar wiki administratoriem, ja tas liedz Tev veikt labi domātus papildinājumus. Spied pārlūka pogu \"Atpakaļ\" (''Back''), lai atgrieztos iepriekšējā lapā.",
	'captcha-createaccount'      => "Lai pasargātos no automātiskas mēstuļošanas, Tev reģistrējoties ir jāieraksta vārds, kas redzams šajā attēlā: <br />([[Special:Captcha/help|Kāpēc tā?]])",
	'captcha-createaccount-fail' => "Nepareizs apstiprinājuma kods vai arī tas nav ievadīts.",
);
$wgConfirmEditMessages['nl'] = array(
	'captcha-short'              => "Uw bewerking bevat nieuwe externe links (URL's). Voer ter bescherming tegen geautomatiseerde spam de woorden in die in de volgende afbeelding te zien zijn:<br />
([[Special:Captcha/help|Wat is dit?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Websites die vrij te bewerken zijn, zoals deze wiki, worden vaak misbruikt door spammers die er met hun programma's automatisch links op zetten naar vele websites. Hoewel deze externe links weer verwijderd kunnen worden, leveren ze wel veel hinder en administratief werk op.

Soms, en in het bijzonder bij het toevoegen van externe links op pagina's, toont de wiki u een afbeelding met gekleurde of vervormde tekst en wordt u gevraagd de getoonde tekst in te voeren. Omdat dit proces lastig te automatiseren is, zijn vrijwel alleen mensen in staat dit proces succesvol te doorlopen en worden hiermee spammers en andere geautomatiseerde aanvallen geweerd.

Helaas levert deze bevestiging voor gebruikers met een visuele handicap of een tekst- of spraakgebaseerde browser problemen op. Op het moment is er geen alternatief met geluid beschikbaar. Vraag alstublieft assistentie van de sitebeheerders als dit proces u verhindert een nuttige bijdrage te leveren.

Klik op de knop 'terug' in uw browser om terug te gaan naar het tekstbewerkingsscherm.",
	'captcha-createaccount'      => "Voer ter bescherming tegen geautomatiseerde spam de woorden in die in de volgende afbeelding te zien zijn om uw gebruiker aan te maken:<br />
([[Special:Captcha/help|Wat is dit?]])",
	'captcha-createaccount-fail' => "Onjuiste bevestigingscode of niet ingevuld.",
);
$wgConfirmEditMessages['no'] = array(
	'captcha-short'              => "Din redigering inkluderer nye lenker; som en beskyttelse mot automatisert spam er du nødt til skrive inn ordene i dette bildet:
<br />([[Special:Captcha/help|Hva er dette?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Internettsider som kan redigeres av alle, som denne wikien, blir ofte misbrukt av spammere som bruker roboter for å poste massive antall lenker. Selv om slike spamlenker kan fjernes er de til betydelig irritasjon.

Noen ganger, særlig hvis du vil legge til nye internettlenker til en side, kan wikien vise deg et bilde av en farvet eller ujevn tekst og be deg skrive inn ordene som vises. Siden det er vanskelig å automatisere denne oppgaven, vil funksjonen slippe de fleste virkelige mennesker igjennom, men stoppe spammere.

Dessverre finnes det i øyeblikket ikke noe audioalternativ for brukere med begrenset syn som som bruker tekst- eller talebaserte nettlesere. Vennlig kontakt administratorene hvis denne funksjonen forhindrer deg i å foreta legitime endringer.

Trykk på «tilbake»-knappen for å komme tilbake til redigeringssiden.",
	'captcha-createaccount'      => "For å beskytte Wikipedia mot spam må du skrive inn ordene i bildet for å registrere en konto.
<br />([[Special:Captcha/help|Hva er dette?]])
",
	'captcha-createaccount-fail' => "Feil eller manglende bekreftelseskode.",
);
$wgConfirmEditMessages['nn'] = array(
	'captcha-short'              => "Endringa di inkluderer nye lenkjer; som eit vern mot automatisert reklame (spam) er du nøydd til skrive inn orda i dette bildet: <br />([[Special:Captcha/help|Kva er dette?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Internettsider som kan bli endra av alle, som denne wikien, blir ofte misbruka av reklameinnleggjarar (spammarar) som nyttar robotar til å poste store tal lenkjer. Sjølv om slike reklamelenkjer kan bli fjerna er dei til betydelig irritasjon. Nokon gonger, særleg viss du vil leggje til nye internettlenker til ei side, kan wikien vise deg eit bilete av ein farga eller ujamn tekst og be deg skrive inn orda som blir visa. Sidan det er vanskeleg å automatisere denne oppgåva, vil funksjonen slippe dei fleste verkelege menneska gjennom, men stoppe reklamerobotar. Diverre finst det i augeblikket ikkje noko lydalternativ for brukarar med nedsett syn som brukar tekst- eller talebaserte nettlesarar. Ver venleg å kontakte administratorane viss denne funksjonen hindrar deg i å foreta legitime endringar. Trykk på «tilbake»-knappen for å komma tilbake til redigeringssida.",
	'captcha-createaccount'      => "For å verne Wikipedia mot reklame (spam) må du skrive inn orda i biletet for å registrere ein konto. <br />([[Special:Captcha/help|Kva er dette?]])",
	'captcha-createaccount-fail' => "Feil eller manglande godkjenningskode.",
);
$wgConfirmEditMessages['oc'] = array(
	'captcha-short'              => "Vòstra modificacion inclutz de ligams URL novèla ; per empachar las connexions automatizadas, devètz picar los mots que s’afichan dins l’imatge que seguís : <br />([[Special:Captcha/help|Qu'es aquò?]])",
	'captchahelp-title'          => 'Ajuda pel Captcha',
	'captchahelp-text'           => "Los sites webs que permeton al mai grand nombre de participar, coma aqueste wiki, son sovent atacats per de spammers qu'utilizan d'espleches automatizas per mandar lor ligams sus de fòrça sites sulcòp. Son fòrt aisits de suprimir mas avèm francament de causas mai risolièras de far. De còps quand ajustatz de ligams novèls vèrs lo web, lo wiki pòt vos mostrar un imatge amb un tèxt coloriat o torçut e vos demandar de lo picar. Es una tasca relativament complicada d'automatizar, çò que permet de diferenciar un uman real d'un logicial automatic malvolent. Malaürosament, aqueste sistèma es pas adaptat a d'utilizaires mal-vesents o utilizant de navigaires textuals o audiò. Actualament, prepausem pas d'alternativas adaptadas. Se avètz besonh d'ajuda esitetz pas a contactar los administrators del sit. Clicatz sul boton 'recular' de vòstre navigaire per tornar a l'editor.",
	'captcha-createaccount'      => "As a protection against automated spam, you'll need to type in the words that appear in this image to register an account:<br />
([[Special:Captcha/help|What is this?]])",
	'captcha-createaccount-fail' => "Còdi de confirmacion mancant o invalid.",
);
$wgConfirmEditMessages['pt'] = array(
	'captcha-short'              => "Sua edição inclui novos links externos; como prevenção contra sistemas automatizados que inserem spam, será necessário que você digite as palavras exibidas na seguinte imagem:<br />
([[Special:Captcha/help|What is this?]])",
	'captchahelp-title'          => 'Ajuda com o Captcha',
	'captchahelp-text'           => "Sítios abertos a inserções públicas, como é o caso deste wiki, são vulneráveis a spammers que utilizem ferramentas automatizadas para inserir seus links em diversos locais. Remover tais links posteriormente poderá significar um significativo incômodo.

Algumas vezes, especialmente ao adicionar novos links externos em uma página, o sistema exibirá uma imagem com um texto colorido ou distorcido e pedirá que você digite as palavras exibidas. Uma vez que essa é uma tarefa um tanto difícil de ser automatizada, ela possibilita que vários humanos façam as suas inserções ao mesmo tempo que inibe as que forem feitas por spammers e mecanismos automatizados.

Infelizmente, isso pode ser dificultoso a utilizadores com limitações visuais ou que naveguem através de  mecanismos baseados em texto ou baseados em voz. No momento não há uma alternativa em áudio. Por gentileza, contacte os administradores do sítio em casos que seja necessária a assistência de alguém para que você possa fazer as suas inserções legítimas.

Pressione o botão 'voltar' de seu navegador para retornar à página de edição.",
	'captcha-createaccount'      => "Como prevenção contra sistemas automatizados que inserem spam, será necessário que você digite as palavras exibidas na seguinte imagem para que possa se cadastrar:<br />
([[Special:Captcha/help|O que é isto?]])",
	'captcha-createaccount-fail' => "Código incorreto ou não preenchido.",
);
$wgConfirmEditMessages['pt-br'] = $wgConfirmEditMessages['pt'];
$wgConfirmEditMessages['ru'] = array(
	'captcha-short'              => "Вы добавили ссылку на внешний сайт; в целях защиты от автоматического спама, введите буквы изображённые на картинке:<br />
([[{{ns:special}}:Captcha/help|Что это такое?]])",
	'captchahelp-title'          => 'Справка о CAPTCHA',
	'captchahelp-text'           => "Вебсайты позволяющие добавлять и изменять своё содержимое, в том числе вики, часто становятся целью спамеров, использующих программы для автоматического добавления ссылок. Хотя такие ссылки могут быть удалены, они являются существенной помехой.

Иногда, например при добавлении на страницу новой веб-ссылки, вики может показать вам картинку с цветным или искажённым текстом и предложить ввести текст, который вы видите. Так как подобная задача трудноавтоматизируема, это даёт возможность большинству людей разместить свои изменения, в то время как большинство спамерских и вандальных программ не могут это сделать.

К сожалению, подобная защита может причинить неудобства людям с ограничениями по зрению или тем, кто использует читающие браузеры. В настоящее время у нас нет звуковой альтернативы данной проверке. Пожалуйста, обратитесь за помощью к администраторам, если подобная проверка мешает вам добросовестно работать с сайтом.  

Нажмите кнопку «Назад» в ваше браузере, чтобы вернуться к редактированию.",
	'captcha-createaccount'      => "В качестве меры против автоматического спама, вы должны ввести буквы, изображённые на картинке, чтобы зарегистрироваться в системе:<br />
([[{{ns:special}}:Captcha/help|Что это такое?]])",
	'captcha-createaccount-fail' => "Код подтверждения отсутствует или неверен.",
);
$wgConfirmEditMessages['sk'] = array(
	'captcha-short'              => "Vaša úprava obsahuje nové URL odkazy; kvôli ochrane proti automatizovanému spamu je potrebné napísať slová zobrazené na tomto obrázku: <br />([[Special:Captcha/help|Čo je toto?]])",
	'captchahelp-title'          => 'Pomocník ku captcha',
	'captchahelp-text'           => "Webstránky prijímajúce príspevky od verejnosti ako táto wiki sú často cieľom zneužitia spammemi, ktorí používajú automatizované nástroje na to, aby svoje odkazy umiestnili na množstvo stránok. Hoci je možné tieto odkazy odstrániť, zbytočne to zaťažuje redaktorov.

Niekedy, obzvlášť keď pridávate webové odkazy k článkom, wiki Vám môže zobraziť obrázok so zafarbeným alebo pokriveným textom a požiadať Vás o prepísanie zobrazených slov. Keďže takúto úlohu je ťažké zautomatizovať a umožní skutočným ľuďom poslať svoje príspevky, zastaví to väčšinu spammerov a iných robotických útočníkov.

Naneštastie, môže to byť prekážkou pre používateľov so zrakovým postihnutím alebo tých, ktorí používajú textové alebo hovoriace prehliadače. Momentálne nemáme dostupnú audio zvukovú alternatívu. Kontaktujte prosím administratorov stránok, ak Vám to neočakávane komplikuje umiestňovanie oprávnených príspevkov.

Stlačením tlačidla \"späť\" vo Vašom prehliadači sa vrátite do editora stránky.",
	'captcha-createaccount'      => "Kvôli ochrane proti automatizovanému spamu je potrebné napísať slová zobrazené na tomto obrázku, až potom bude vytvorený nový účet: <br />([[Special:Captcha/help|Čo je toto?]])",
	'captcha-createaccount-fail' => "Nesprávny alebo chýbajúci potvrdzovací kód.",
);
$wgConfirmEditMessages['sl'] = array(
	'captcha-short'              => "Vaše urejanje vključuje nove URL-povezave; zaradi zaščite pred avtomatizirano navlako boste morali vpisati besede, ki se pojavijo v okencu: <br />([[{{ns:Special}}:Captcha/help|Kaj je to?]])",
	'captchahelp-title'          => 'Pomoč za captcha',
	'captchahelp-text'           => "Spletne strani, ki omogočajo objavljanje širši javnosti, kot na primer ta wiki, pogosto zlorabljajo spamerji, ki za objavo svojih povezav na mnogih straneh uporabljajo avtomatizirana orodja. Čeprav se te neželene povezave da odstraniti, so precejšnja nadloga.

Včasih, zlasti pri dodajanju novih spletnih povezav na stran, vam bo morda wiki prikazal sliko obarvanega ali popačenega besedila in zahteval vpis prikazanih besed. Ker je to opravilo težko avtomatizirati, bo s tem večini ljudi objavljanje dovoljeno, spamerji in druge robotski napadalci pa bodo ustavljeni.

Žal lahko to povzroči nevšečnosti uporabnikom s slabim vidom in tistim, ki uporabljajo besedilne ali govorne brskalnike. Glasovna možnost trenutno še ni na razpolago. Če vam to nepričakovano preprečuje legitimno objavo, se, prosimo, obrnite na administratorje spletišča.

Za vrnitev v urejevalnik izberite gumb 'nazaj' vašega brskalnika.",
	'captcha-createaccount'      => "Za registracijo je zaradi zaščite pred neželenimi reklamnimi sporočili treba vpisati prikazane besede: <br />([[{{ns:special}}:Captcha|Kaj je to?]])",
	'captcha-createaccount-fail' => "Nepravilna ali manjkajoča potrditvena koda.",
);
$wgConfirmEditMessages['sq'] = array(
	'captcha-short'              => "Redaktimi juaj ka lidhje URL të reja dhe si mbrojtje kundër abuzimeve automatike duhet të shtypni çfarë shfaqet tek figura e mëposhtme:<br /> ([[Special:Captcha|Çfarë është kjo?]])",
	'captchahelp-title'          => 'Captcha help',
	'captchahelp-text'           => "Faqet e rrjetit që pranojnë shkrime nga publiku, siç është edhe kjo wiki, shpesh abuzohen nga njerëz që duan të përfitojnë duke reklamuar ose promovuar lidhjet e tyre. Këto lloj abuzimesh mund të hiqen kollaj por janë një bezdi dhe shpenzim kohe i papranueshëm.

Ndonjëherë, sidomos kur po hapni një llogari të re apo kur po shtoni lidhje të reja nëpërmjet redaktimit tuaj, sistemi mund t'ju shfaqi një figurë që përmban fjalë me gërma ose numra të shtrembruara ose me ngjyra të ndryshme të cilat ju duhet të shtypni para se të mund të kryeni veprimin në fjalë. Kjo bëhet pasi është shumë e vështirë për një robot ose mjet automatik të kryejë të njëjtën punë. Kështu mund të dallohet nëse jeni me të vërtetë një njeri apo një robot. Ky lloj sistemi s'mund të ndalojë tërë abuzimet por ndalon një pjesë të mirë të tyre, sidomos ato që janë automatike dhe të shumta në numër.

Fatkeqësisht ky lloj sistemi mund të bezdisi përdoruesit me pamje të kufizuar ose ata që përdorin mjete teksti ose shfletues leximi me zë. Tani për tani nuk kemi mundësi për të ofruar një sistem me zë në vend të figurave. Ju lutem lidhuni me administruesit nëse ky sistem po ju ndalon të jepni kontribute të vlefshme.

Shtypni butonin \"prapa\" (\"back\") të shfletuesit tuaj për tu kthyer tek faqja e mëparshme.",
	'captcha-createaccount'      => "Për mbrojtje kundër regjistrimeve automatike duhet të shtypni çfarë shfaqet tek figura e mëposhtme para se të hapni llogarinë:<br /> ([[Special:Captcha|Çfarë është kjo?]])",
	'captcha-createaccount-fail' => "Mesazhi që duhej shtypur mungon ose nuk është shtypur siç duhet.",
);

$wgConfirmEditMessages['wa'] = array(
	'captcha-short' => 'Dins vos candjmints i gn a des novelès hårdêyes (URL); po s\' mete a houte des robots di spam, nos vs dimandans d\' acertiner ki vos estoz bén ene djin, po çoula, tapez les mots k\' aparexhèt dins l\' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])',
	'captchahelp-title' => 'Aidance passete d\' acertinaedje',
	'captchahelp-text' => 'Les waibes k\' acceptèt des messaedjes do publik, come ci wiki chal, sont sovint eployîs pa des må-fjhants spameus, po pleur mete, avou des usteyes otomatikes, des loyéns di rclame viè les sites da zels.
Bén seur, on pout todi les disfacer al mwin, mins c\' est on soyant ovraedje.

Adon, pa côps, copurade cwand vos radjoutez des hårdêyes a ene pådje, ou å moumint d\' ahiver on novea conte sol wiki, on eployrè ene passete d\' acertinaedje, dj\' ô bén k\' on vos mostere ene imådje avou on tecse kitoirdou eyet vs dimander di taper les mots so l\' imådje. Come li ricnoxhance di ç\' tecse la est målåjheye a fé otomaticmint pa on robot, çoula permete di leyî les vraiyès djins fé leus candjmints tot arestant l\' plupårt des spameus et des sfwaitès atakes pa robot.

Målureuzmint çoula apoite eto des målåjhminces po les cis k\' ont des problinmes po vey, ou k\' eployèt des betchteus e môde tecse ou båzés sol vwès. Pol moumint, nos n\' avans nén ene alternative odio. S\' i vs plait contactez les manaedjeus do site po d\' l\' aidance si çoula vos espaitche di fé vos candjmints ledjitimes.

Clitchîz sol boton «En erî» di vosse betchteu waibe po rivni al pådje di dvant.',
	'captcha-createaccount' => 'Po s\' mete a houte des robots di spam, nos vs dimandans d\' acertiner ki vos estoz bén ene djin po-z ahiver vosse conte, po çoula, tapez les mots k\' aparexhèt dins l\' imådje chal pa dzo:<br />([[{{ns:special}}:Captcha/help|Pocwè fjhans ns çoula?]])',
	'captcha-createaccount-fail' => 'Li côde d\' acertinaedje est incorek ou mancant.',
);
$wgConfirmEditMessages['zh-cn'] = array(
	'captcha-short'              => "你编辑的内容中含有一个新的URL链接；为了免受自动垃圾程序的侵扰，你需要输入显示在下面图片中的文字：<br />
([[Special:Captcha/help|这是什么？]])",
	'captchahelp-title'          => 'Captcha 帮助',
	'captchahelp-text'           => "象本站一样，对公众开放编辑的站点经常被垃圾链接骚扰。那些人使用自动化垃圾程序将他们的链接张贴到很多站点。虽然这些链接可以被清除，但是这些东西确实令人十分讨厌。

有时，特别是当给一个页面添加新的网页链接时，本站会让你看一幅有颜色的或者有变形文字的图像，并且要你输入所显示的文字。因为这是难以自动完成的一项任务，它将允许人保存他们的编辑，同时阻止大多数发送垃圾邮件者和其他机器人的攻击。

令人遗憾是，这会使得视力不好的人，或者使用基于文本或者基于声音的浏览器的用户感到不便。而目前我们还没有提供的音频的选择。如果这正好阻止你进行正常的编辑，请和管理员联系获得帮助。

单击你浏览器中的“后退”按钮返回你所编辑的页面。",
	'captcha-createaccount'      => "为了防止程序自动注册，你需要输入以下图片中显示的文字才能注册帐户：<br />
([[Special:Captcha/help|这是什么？]])",
	'captcha-createaccount-fail' => "验证码错误或丢失。",
);
$wgConfirmEditMessages['zh-tw'] = array(
	'captcha-short'              => "你編輯的內容中含有一個新的URL連結；為了免受自動垃圾程式的侵擾，你需要輸入顯示在下面圖片中的文字：<br />
([[Special:Captcha/help|這是什麼？]])",
	'captchahelp-title'          => 'Captcha 說明',
	'captchahelp-text'           => "像本站一樣，對公眾開放編輯的網站經常被垃圾連結騷擾。那些人使用自動化垃圾程序將他們的連結張貼到很多網站。雖然這些連結可以被清除，但是這些東西確實令人十分討厭。

有時，特別是當給一個頁面添加新的網頁連結時，本站會讓你看一幅有顏色的或者有變形文字的圖像，並且要你輸入所顯示的文字。因為這是難以自動完成的一項任務，它將允許人保存他們的編輯，同時阻止大多數發送垃圾郵件者和其他機器人的攻擊。

令人遺憾是，這會使得視力不好的人，或者使用基於文本或者基於聲音的瀏覽器的用戶感到不便。而目前我們還沒有提供的音頻的選擇。如果這正好阻止你進行正常的編輯，請和管理員聯繫獲得幫助。

點擊瀏覽器中的「後退」按鈕返回你所編輯的頁面。",
	'captcha-createaccount'      => "為了防止程式自動註冊，你需要輸入以下圖片中顯示的文字才能註冊帳戶：<br />
([[Special:Captcha/help|這是什麼？]])",
	'captcha-createaccount-fail' => "驗證碼錯誤或丟失。",
);
$wgConfirmEditMessages['zh-yue'] = array(
	'captcha-short'              => "你編輯的內容中含有新的URL連結；為咗避免受到自動垃圾程式的侵擾，你需要輸入顯示喺下面圖片度嘅文字：<br />
([[Special:Captcha/help|呢個係乜嘢嚟？]])",
	'captchahelp-title'          => 'Captcha 幫助',
	'captchahelp-text'           => "就好似呢個wiki咁，對公眾開放編輯嘅網站係會經常受到垃圾連結騷擾。嗰啲人利用自動化垃圾程序將佢哋嘅連結張貼到好多網站。雖然呢啲連結可以被清除，但係呢啲嘢確實令人十分之討厭。

有時，特別係當響一頁添加新嘅網頁連結嗰陣，呢個網站會畀你睇一幅有顏色的或者有變形文字嘅圖像，跟住要你輸入所顯示嘅文字。因為咁係難以自動完成嘅一項任務，它將允許人保存佢哋嘅編輯，同時亦阻止大多數發送垃圾郵件者同其它機械人嘅攻擊。

令人遺憾嘅係，咁會令到視力唔好嘅人，或者利用基於文本或者基於聲音嘅瀏覽器用戶感到不便。而目前我哋仲未能夠提供音頻嘅選擇。如果咁樣咁啱阻止到你進行正常嘅編輯，請同管理員聯繫以獲得幫助。

撳一下響瀏覽器度嘅「後退」掣返去你之前所編輯緊嘅頁面。",
	'captcha-createaccount'      => "為咗防止程式自動註冊，你需要輸入以下圖片中顯示的文字先至能夠註冊得到個戶口：<br />
([[Special:Captcha/help|呢個係乜嘢嚟？]])",
	'captcha-createaccount-fail' => "驗證碼錯誤或者唔見咗。",
);
$wgConfirmEditMessages['zh-hk'] = $wgConfirmEditMessages['zh-tw'];
$wgConfirmEditMessages['zh-sg'] = $wgConfirmEditMessages['zh-cn'];
?>
