<?php
/**
 * Internationalisation file for extension TitleBlacklist.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'titleblacklist-desc' => 'Allows to forbid creation of pages with specified titles: [[MediaWiki:Titleblacklist]] and [[MediaWiki:Titlewhitelist]]',
	'titleblacklist' =>
"# This is a title blacklist. Titles that match a regex here cannot be created.
# Use \"#\" for comments.
",
	'titlewhitelist' => "# This is a title whitelist. Use \"#\" for comments",
	'titleblacklist-forbidden-edit' => 'The title "$2" has been banned from creation.  It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" cannot be moved to "$3", because the title "$3" has been banned from creation. It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'The file name "$2" has been banned from creation. It matches the following blacklist entry: <code>\$1</code>',
	'titleblacklist-invalid' => 'The following {{PLURAL:$1|line|lines}} in the title blacklist {{PLURAL:$1|is|are}} invalid; please correct {{PLURAL:$1|it|them}} before saving:',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'titleblacklist-desc'             => 'يسمح بمنع إنشاء الصفحات بعناوين محددة: [[MediaWiki:Titleblacklist]] و [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# هذه قائمة سوداء للعناوين. العناوين التي تطابق ريجيكس هنا لا يمكن إنشاؤها.
# استخدم "#" للتعليقات.',
	'titlewhitelist'                  => '# هذه قائمة بيضاء للعناوين. استخدم "#" للتعليقات',
	'titleblacklist-forbidden-edit'   => 'العنوان "$2" تم منعه من الإنشاء.  هو يطابق المدخلة التالية في القائمة السوداء: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" لا يمكن نقلها إلى "$3"، لأن العنوان "$3" تم منعه من الإنشاء. هو يطابق المدخلة التالية في القائمة السوداء : <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'اسم الملف "$2" تم منعه من الإنشاء. هو يطابق المدخلة التالية في القائمة السوداء: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|السطر|السطور}} التالية في قائمة العناوين السوداء {{PLURAL:$1|غير صحيح|غير صحيحة}}؛ من فضلك {{PLURAL:$1|صححه|صححهم}} قبل الحفظ:',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'titleblacklist'                  => '# Страницата съдържа черен списък за заглавия на страници
# Страници, чиито заглавия съответстват с регулярните изрази в списъка, не могат да бъдат създавани или редактирани
# За коментари се използва символът "#"',
	'titleblacklist-forbidden-edit'   => 'Страницата "$2" не може да бъде създадена, тъй като съвпада със запис от черния списък: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Страницата "$2" не може да бъде преместена като "$3", тъй като съвпада със запис от черния списък: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Файлът "$2" не може да бъде качен, тъй като съвпада със запис от черния списък: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Следният ред|Следните редове}} от черния списък на заглавията {{PLURAL:$1|е невалиден|са невалидни}} и трябва да {{PLURAL:$1|бъде коригиран|бъдат коригирани}} преди съхранение:',
);

/** Bengali (বাংলা)
 * @author Zaheen
 */
$messages['bn'] = array(
	'titleblacklist'                  => '# এটি শিরোনাম কালোতালিকা। যেসব পাতার শিরোনাম এখানকার একটি রেগুলার এক্সপ্রেশনের সাথে মিলে যাবে, সেগুলি সৃষ্টি করা যাবে না।
# মন্তব্যের জন্য "#" ব্যবহার করুন।',
	'titlewhitelist'                  => '# এটি একটি শিরোনাম সাদাতালিকা। মন্তব্যের জন্য "#" ব্যবহার করুন',
	'titleblacklist-forbidden-edit'   => '"$2" শিরোনামটি সৃষ্টি করা নিষিদ্ধ করা হয়েছে। এটি কালোতালিকার এই ভুক্তিটির সাথে মিলে গেছে: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2"-কে "$3"-এ সরানো যাবে না, কারণ "$3" শিরোনামটি নিষিদ্ধ। শিরোনামটি এই কালোতালিকা ভুক্তিটির সাথে মিলে গেছে: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '"$2" ফাইলনামটি সৃষ্টি নিষিদ্ধ। নামটি এই কালোতালিকা ভুক্তিটির সাথে মিলে গেছে: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'শিরোনাম কালোতালিকার এই {{PLURAL:$1|টি লাইন|টি লাইন}} অবৈধ; অনুগ্রহ করে সংরক্ষণ করার আগে  {{PLURAL:$1|এটি|এগুলি}} সংশোধন করুন:',
);

/** Catalan (Català)
 * @author SMP
 */
$messages['ca'] = array(
	'titleblacklist'                  => "# Això és una llista negra de títols. Aquelles pàgines que compleixin alguna expressió regular (''regex'') d'aquí no podran ser creades.
# Les línies que començen per \"#\" són comentaris.",
	'titleblacklist-forbidden-edit'   => 'El títol «$2» està prohibit i no es pot crear. Concorda amb la següent entrada de la llista negra: <code>$1</code>',
	'titleblacklist-forbidden-move'   => "No es pot moure «$2» a «$3», perquè el títol «$3» està prohibit. Concorda amb l'entrada de la llista negra següent: <code>$1</code>",
	'titleblacklist-forbidden-upload' => "El nom de fitxer «$2» ha estat prohibit i se n'impedeix la creació. Concorda amb la següent línia de la llista negra: <code>\\$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La línia següent|Les línies següents}} de la llista negra no {{PLURAL:$1|és vàlida|són vàlides}}; heu de corregir-{{PLURAL:$1|la|les}} abans de guardar:',
);

/** Czech (Česky)
 * @author Li-sung
 * @author Matěj Grabovský
 */
$messages['cs'] = array(
	'titleblacklist-desc'             => 'Umožňuje zakázat tvorbu stránek s určitými názvy: [[MediaWiki:Titleblacklist|Černá listina názvů]] a [[MediaWiki:Titlewhitelist|Bílá listina názvů]]',
	'titleblacklist'                  => '# Toto je černá listina názvů. Název, který bude odpovídat regulárnímu výrazu, nebude možné vytvořit.
# Používejte „#“ pro označení komentáře.',
	'titlewhitelist'                  => '# Toto je bílá listina názvů stránek. Řádky komentářů začínají znakem „#“',
	'titleblacklist-forbidden-edit'   => 'Název "$2" je zakázáno vytvářet. Odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '„$2“ nelze přesunout na název „$3“, protože název „$3“ je zakázáno vytvářet. Odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Soubor s jménem „$2“ je zakázáno vytvářet. Název odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-invalid'          => 'Na černé listině názvů {{PLURAL:$1|je následující řádka neplatný regulární výraz|jsou následující řádky neplatné regulární výrazy|jsou následující řádky regulární výrazy}} a je nutné {{PLURAL:$1|ji|je|je}} před uložením stránky opravit :',
);

/** German (Deutsch)
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'titleblacklist-desc'             => 'Ergänzt eine schwarze Liste unerwünschter Seitennamen: [[MediaWiki:Titleblacklist]] und [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen.",
	'titlewhitelist'                  => '# Dies ist die Ausnahmeliste von der Schwarzen Liste unerwünschter Seitennamen. Benutze „#“ für Kommentare',
	'titleblacklist-forbidden-edit'   => "'''Eine Seite mit dem Titel „$2“ kann nicht erstellt werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-move'   => "'''Die Seite „$2“ kann nicht nach „$3“ verschoben werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-upload' => "'''Eine Datei mit dem Namen „$2“ kann nicht hochgeladen werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-invalid'          => 'Die {{PLURAL:$1|folgende Zeile|folgenden Zeilen}} in der Sperrliste {{PLURAL:$1|ist|sind}} ungültig; bitte korrigiere diese vor dem Speichern:',
);

/** فارسی (فارسی)
 * @author Huji
 */
$messages['fa'] = array(
	'titleblacklist-desc'             => 'امکان جلوگیری از ایجاد صفحه‌هایی با عنوان‌های خاص را می‌دهد: [[MediaWiki:Titleblacklist]] و [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# این یک فهرست سیاه عنوان‌ها است. عنوان‌هایی که با یک regex در این صفحه مطابقت کنند را نمی‌توان ایجاد کرد.
# از «#» برای توضیحات استفاده کنید.',
	'titlewhitelist'                  => '# این یک فهرست سفید برای عنوان‌ها است. از «#» برای افزودن توضیحات استفاده کنید.',
	'titleblacklist-forbidden-edit'   => 'ایجاد عنوان «$2» ممنوع شده‌است. این عنوان با این دستور از فهرست سیاه مطابقت می‌کند: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '«$2» را نمی‌توان به «$3» انتقال داد. ایجاد «$3» ممنوع است. چون با این دستور از فهرست سیاه مطابقت می‌کند: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'ایجاد نام «$2» برای پرونده‌ها ممنوع است، زیرا با این دستور از فهرست سیاه مطابقت می‌کند: <code>\\$1</code>',
	'titleblacklist-invalid'          => '
{{PLURAL:$1|سطر|سطرهای}} زیر در فهرست سیاه عنوان‌ها غیرمجاز {{PLURAL:$1|است|هستند}}؛ لطفاً {{PLURAL:$1|آن|آن‌ها}} را قبل از ذخیره کردن اصلاح کنید:',

);

/** Finnish (Suomi)
 * @author Nike
 * @author Crt
 * @author Cimon Avaro
 */
$messages['fi'] = array(
	'titleblacklist'                  => '# Tämä sivu sisältää sääntöjä, jotka estävät tietyn nimisten uusien sivujen luomisen.
# Estettyjä ovat sivut, joiden sivunimet vastaavat täällä määritettyjä säännöllisiä lausekkeita.
# Käytä #-merkkiä kommentointiin.',
	'titlewhitelist'                  => '# Tämä sivu sisältää sivujen sallittuja nimiä. Käytä #-merkkiä kommentointia varten.',
	'titleblacklist-forbidden-edit'   => 'Sivun ”$2” luonti on estetty, koska se täsmää seuraavaan osaan estolistassa: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Sivua ”$2” ei voi siirtää nimelle ”$3”, koska sivun ”$3” luonti on estetty. Se täsmää seuraavaan osaan estolistassa: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Tiedoston ”$2” luonti on estetty, koska se täsmää seuraavaan osaan estolistassa: <code>$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Seuraava listan rivi ei ole kelvollinen|Seuraavat listan rivit eivät ole kelvollisia}}. Korjaa {{PLURAL:$1|se|ne}} ennen tallentamista.',
);

/** French (Français)
 * @author Grondin
 * @author Meithal
 */
$messages['fr'] = array(
	'titleblacklist-desc'             => "Permet d'interdire la création de pages en fonction d'une [[MediaWiki:Titleblacklist|liste noire]] et d'une [[MediaWiki:Titlewhitelist|liste blanche]] de titres",
	'titleblacklist'                  => "# Ceci est un titre mis en liste noire
# Chaque titre qu'indique ici le code regex ne peux être créé.
# Utilisez « # » pour écrire des commentaires",
	'titlewhitelist'                  => '# Ceci est la liste blanche des titres. Utilisez « # » pour les commentaires.',
	'titleblacklist-forbidden-edit'   => "Le titre « $2 » est interdit à la création.
Dans la liste noire, il est détecté par l'entrée suivante : <code>$1</code>",
	'titleblacklist-forbidden-move'   => "La page intitulée « $2 » ne peut être déplacée vers « $3 » parce que cette dernière a été interdite à la création. Dans la liste noire, elle correspond à l'entrée : <code>$1</code>",
	'titleblacklist-forbidden-upload' => "Le fichier intitulé « $2 » est interdit à la création. Dans la liste noire, il correspond à l'entrée : <code>$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La ligne suivante|Les lignes suivantes}} dans la liste noire des titres {{PLURAL:$1|est invalide|sont invalides}} : vous êtes invité à {{PLURAL:$1|la|les}} corriger avant de sauvegarder.',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'titleblacklist-desc'             => 'Pèrmèt de dèfendre la crèacion de pâges d’aprés una [[MediaWiki:Titleblacklist|lista nêre]] et una [[MediaWiki:Titlewhitelist|lista blanche]] de titros.',
	'titleblacklist'                  => '# Cen est la lista nêre des titros. Châque titro qu’endique ique lo code RegEx pôt pas étre crèâ.
# Utilisâd « # » por los comentèros.',
	'titlewhitelist'                  => '# Cen est la lista blanche des titros. Utilisâd « # » por los comentèros.',
	'titleblacklist-forbidden-edit'   => 'Lo titro « $2 » est dèfendu a la crèacion.
Dens la lista nêre, corrèspond a l’entrâ siuventa : <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'La pâge avouéc lo titro « $2 » pôt pas étre dèplaciê vers « $3 » perce que ceti dèrriér at étâ dèfendu a la crèacion. Dens la lista nêre, corrèspond a l’entrâ siuventa : <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Lo fichiér avouéc lo titro « $2 » est dèfendu a la crèacion. Dens la lista nêre, corrèspond a l’entrâ siuventa : <code>$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|La legne siuventa|Les legnes siuventes}} dens la lista nêre des titros {{PLURAL:$1|est envalida|sont envalides}} : vos éte envitâ a {{PLURAL:$1|la|les}} corregiér devant que sôvar.',
);

/** Galician (Galego)
 * @author Alma
 * @author Xosé
 */
$messages['gl'] = array(
	'titleblacklist' => '# Esta é unha listaxe negra de títulos. Non se pode crear ningún título que coincida cunha destas expresións regulares.
# Use "#" para os comentarios.',
	'titlewhitelist' => '# Este é un título da listaxe branca. Use "#" para os comentarios',
);

/** Croatian (Hrvatski)
 * @author Dnik
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'titleblacklist'                  => '# Ovo je popis zabranjenih naslova. Naslovi koji se podudaraju s regularnim izrazom se ne mogu kreirati.
# Koristite "#" za komentare.',
	'titlewhitelist'                  => "# Ovo je tzv. ''bijela knjiga'' ili ''whitelist'' imena članaka. Rabite \"#\" za komentar",
	'titleblacklist-forbidden-edit'   => 'Naslov "$2" je zabranjen za kreiranje.  Podudara se sa sljedećom stavkom popisa zabranjenih: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" ne može biti premješten na "$3", jer je naslov "$3" zabranjeno kreirati. Podudara se sa sljedećom stavkom popisa zabranjenih: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Ime datoteke "$2" je zabranjeno kreirati. Poklapa se sa stavkom popisa zabranjenih: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Sljedeći {{PLURAL:$1|redak|redci}} u popisu zabranjenih naslova {{PLURAL:$1|je|su}} nedozvoljeni; molimo ispravite {{PLURAL:$1|ga|ih}} prije spremanja:',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'titleblacklist-desc'             => 'Dowola wutworjenje stronow z podatymi titulemi zakazać: [[MediaWiki:Titleblacklist]] a [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# To je čorna lisćina nastawkowych mjenow. Titule, kotrež so na regularny wuraz hodźa,  njehodźa so wutworjeć.
# Wužij "#" za komentary.',
	'titlewhitelist'                  => '# Tuta je běła lisćina titulow. Wužij "#" za komentary',
	'titleblacklist-forbidden-edit'   => 'Strona z titulom "$2" njeda so wutworić. Wotpowěduje slědowacemu zapiskej čorneje lisćiny: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Strona z titulom "$2" njeda so do "$3" přesunyć, dokelž titul "$3" njesmě so wutworjeć.
Kryje so ze slědowacym zaspiskom čorneje lisćiny: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Dataja z mjenom "$2" njesmě so wutworjeć. Kryje so ze slědowacym zapiskom čorneje lisćiny: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Slědowaca linka|Slědowace linki}} w čornej lisćinje titulow {{PLURAL:$1|je njepłaćiwa|su njepłaćiwe}}; prošu skoriguj {{PLURAL:$1|ju|je}} před składowanjom:',
);

/** Hungarian (Magyar)
 * @author Bdanee
 */
$messages['hu'] = array(
	'titleblacklist-desc'             => 'Lehetővé teszi adott címmel rendelkező lapok elkészítését: [[MediaWiki:Titleblacklist]] és [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Ez a címek feketelistája. Azon címek, amelyek illeszkednek az itt található reguláris kifejezésekre, nem hozhatóak létre.
# Használd a „#” karaktert megjegyzések írásához.',
	'titlewhitelist'                  => '# Ez egy engedélyező lista. A # karakterrel írhatsz megjegyzéseket.',
	'titleblacklist-forbidden-edit'   => '„$1” című lapot tilos készíteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '„$2” nem nevezhető át „$3” névre, mert „$3” névvel tilos lapot készíteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '„$1” nevű fájlt tilos feltölteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Az alábbi {{PLURAL:$1|sor hibás|sorok hibásak}} a lapcímek feketelistájában; {{PLURAL:$1|javítsd|javítsd őket}} mentés előtt:',
);

/** Italian (Italiano)
 * @author BrokenArrow
 */
$messages['it'] = array(
	'titleblacklist-desc'             => 'Consente di proibire la creazione di pagine con i titoli indicati in [[MediaWiki:Titleblacklist]] e [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Lista dei titoli non consentiti. 
# È impedita la creazione delle pagine il cui titolo corrisponde a un\'espressione regolare indicata di seguito.
# Usare "#" per le righe di commento.',
	'titlewhitelist'                  => '# Questa è una whitelist dei titoli. Usare "#" per le righe di commento',
	'titleblacklist-forbidden-edit'   => 'La creazione di pagine con titolo "$2" è stata impedita. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Impossibile spostare la pagina "$2" al titolo "$3" in quanto la creazione di pagine con titolo "$3" è stata impedita. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'La creazione di file con titolo "$2" è stato impedito. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-invalid'          => "{{PLURAL:$1|La seguente riga|Le seguenti righe}} dell'elenco dei titoli non consentiti {{PLURAL:$1|non è valida|non sono valide}}; si prega di correggere {{PLURAL:$1|l'errore|gli errori}} prima di salvare la pagina.",
);

/** Japanese (日本語)
 * @author JtFuruhata
 */
$messages['ja'] = array(
	'titleblacklist-desc'             => '指定したページ名での新規作成を禁止する: [[MediaWiki:Titleblacklist|タイトルブラックリスト]] および [[MediaWiki:Titlewhitelist|タイトルホワイトリスト]]',
	'titleblacklist'                  => '# これは、タイトルブラックリストです。正規表現に一致するタイトルでの新規作成を禁止します。
# "#"以降はコメントとして扱われます。',
	'titlewhitelist'                  => '# これは、タイトルホワイトリストです。"#"以降はコメントとして扱われます。',
	'titleblacklist-forbidden-edit'   => '"$2" という名前での新規作成は禁止されています。これは以下のブラックリスト項目に一致します: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$3" という名前での新規作成は禁止されているため、"$2" を移動することはできません。これは以下のブラックリスト項目に一致します: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '"$2" というファイル名でのアップロードは禁止されています。これは以下のブラックリスト項目に一致します: <code>$1</code>',
	'titleblacklist-invalid'          => 'タイトルブラックリスト{{PLURAL:$1|に|に}}不正な{{PLURAL:$1|行が|行が複数}}存在します。保存する前に{{PLURAL:$1|これ|これら}}を修正してください:',
);

/** Kazakh (Қазақша)
 * @author AlefZet
 */
$messages['kk-cyrl'] = array(
	'titleblacklist'                  => '# Бұл атаулардың қара тізімі. Жүйелі айтылымдарға (regex) сәйкес мындағы атаулар жаратылмайды. 
Мәндемелер үшін «#» нышанын қолданыңыз.',
	'titlewhitelist'                  => '# Бұл атаулардың ақ тізімі. Мәндемелер үшін «#» нышанын қолданыңыз',
	'titleblacklist-forbidden-edit'   => '«$2» деген атау жаратуы құлыпталған.  Бұл қара тізімнің жазбасына сәйкес: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '«$2» деген «$3» дегенге жылжытылмайды, себебі «$3» деген атау жаратуы құлыпталған. Бұл қара тізімнің жазбасына сәйкес: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '«$2» деген файл аты жаратуы құлыпталған.  Бұл қара тізімнің жазбасына сәйкес: <code>$1</code>',
	'titleblacklist-invalid'          => 'Атаулардың қара тізіміндегі келесі {{PLURAL:$1|жол|жолдар}} {{PLURAL:$1||}} жарамсыз; сақтау алдында {{PLURAL:$1|бұны|бұларды}} дұрыстап шығыңыз:',
);
$messages['kk-latn'] = array(
	'titleblacklist'                  => '# Bul atawlardıñ qara tizimi. Jüýeli aýtılımdarğa (regex) säýkes mındağı atawlar jaratılmaýdı. 
Mändemeler üşin «#» nışanın qoldanıñız.',
	'titlewhitelist'                  => '# Bul atawlardıñ aq tizimi. Mändemeler üşin «#» nışanın qoldanıñız',
	'titleblacklist-forbidden-edit'   => '«$2» degen ataw jaratwı qulıptalğan.  Bul qara tizimniñ jazbasına säýkes: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '«$2» degen «$3» degenge jıljıtılmaýdı, sebebi «$3» degen ataw jaratwı qulıptalğan. Bul qara tizimniñ jazbasına säýkes: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '«$2» degen faýl atı jaratwı qulıptalğan.  Bul qara tizimniñ jazbasına säýkes: <code>$1</code>',
	'titleblacklist-invalid'          => 'Atawlardıñ qara tizimindegi kelesi {{PLURAL:$1|jol|joldar}} {{PLURAL:$1||}} jaramsız; saqtaw aldında {{PLURAL:$1|bunı|bulardı}} durıstap şığıñız:',
);
$messages['kk-arab'] = array(
	'titleblacklist'                  => '# بۇل اتاۋلاردىڭ قارا ٴتىزىمى. جۇيەلى ايتىلىمدارعا (regex) سايكەس مىنداعى اتاۋلار جاراتىلمايدى. 
ماندەمەلەر ٴۇشىن «#» نىشانىن قولدانىڭىز.',
	'titlewhitelist'                  => '# بۇل اتاۋلاردىڭ اق ٴتىزىمى. ماندەمەلەر ٴۇشىن «#» نىشانىن قولدانىڭىز',
	'titleblacklist-forbidden-edit'   => '«$2» دەگەن اتاۋ جاراتۋى قۇلىپتالعان.  بۇل قارا ٴتىزىمنىڭ جازباسىنا سايكەس: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '«$2» دەگەن «$3» دەگەنگە جىلجىتىلمايدى, سەبەبى «$3» دەگەن اتاۋ جاراتۋى قۇلىپتالعان. بۇل قارا ٴتىزىمنىڭ جازباسىنا سايكەس: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '«$2» دەگەن فايل اتى جاراتۋى قۇلىپتالعان.  بۇل قارا ٴتىزىمنىڭ جازباسىنا سايكەس: <code>$1</code>',
	'titleblacklist-invalid'          => 'اتاۋلاردىڭ قارا تىزىمىندەگى كەلەسى {{PLURAL:$1|جول|جولدار}} {{PLURAL:$1||}} جارامسىز; ساقتاۋ الدىندا {{PLURAL:$1|بۇنى|بۇلاردى}} دۇرىستاپ شىعىڭىز:',
);

/** Latin (Latina)
 * @author UV
 */
$messages['la'] = array(
	'titleblacklist'                  => '# Hic est index titulorum prohibitorum. Tituli qui congruunt cum
# una ex expressionibus regularis sequentibus creari non possunt.
# Utere "#" pro commentariis.',
	'titlewhitelist'                  => '# Hic est index titulorum permissorum. Utere "#" pro commentariis',
	'titleblacklist-forbidden-edit'   => 'Pagina cum titulo "$2" creari non potest. Hic titulus congruit cum expressione regulari: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Pagina cum titulo "$2" non ad "$3" moveri potest, quia titulus "$3" prohibitus est ne pagina creetur. Hic titulus congruit cum expressione regulari: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Fasciculus cum titulo "$2" onerari non potest. Hic titulus congruit cum expressione regulari: <code>\\$1</code>',
);

/** Limburgish (Limburgs)
 * @author Matthias
 */
$messages['li'] = array(
	'titleblacklist-desc'             => "Voorkomt het aanmake van pagina's met aangegeve name: [[MediaWiki:Titleblacklist]] en [[MediaWiki:Titlewhitelist]]",
	'titleblacklist'                  => '# Dit is een zwarte lijst voor paginanamen. Iedere paginanaam die voldoet aan een regex kan niet aangemaakt en bewerkt worden.
# Gebruik "#" voor opmerkingen.',
	'titlewhitelist'                  => '# Dit is een witte lijst voor paginanamen. Gebruik "#" voor opmerkingen.',
	'titleblacklist-forbidden-edit'   => 'Een pagina met de naam "$2" kan niet aangemaakt worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" kan niet hernoemd worden naar "$3", omdat pagina\'s met de naam "$3" niet aangemaakt kunnen worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Het bestand "$2" kan niet toegevoegd worden. Deze bestandsnaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-invalid'          => 'De volgende {{PLURAL:$1|regel|regels}} in de zwarte lijst veur paginaname {{PLURAL:$1|is|zijn}} ongeldig. Verbeter die {{PLURAL:$1|regel|regels}} asjeblieft veurdat ge de lijst opslaat:',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 */
$messages['nl'] = array(
	'titleblacklist-desc'             => "Voorkomt het aanmaken van pagina's met aangegeven namen: [[MediaWiki:Titleblacklist]] en [[MediaWiki:Titlewhitelist]]",
	'titleblacklist'                  => '# Dit is een zwarte lijst voor paginanamen. Iedere paginanaam die voldoet aan een regex kan niet aangemaakt en bewerkt worden.
# Gebruik "#" voor opmerkingen.',
	'titlewhitelist'                  => '# Dit is een witte lijst voor paginanamen. Gebruik "#" voor opmerkingen.',
	'titleblacklist-forbidden-edit'   => 'Een pagina met de naam "$2" kan niet aangemaakt worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" kan niet hernoemd worden naar "$3", omdat pagina\'s met de naam "$3" niet aangemaakt kunnen worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Het bestand "$2" kan niet toegevoegd worden. Deze bestandsnaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-invalid'          => 'De volgende {{PLURAL:$1|regel|regels}} in de zwarte lijst voor paginanamen {{PLURAL:$1|is|zijn}} ongeldig. Verbeter die {{PLURAL:$1|regel|regels}} alstublieft voordat u de lijst opslaat:',
);

/** Norwegian (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'titleblacklist-desc'             => 'Gir muligheten til å forhindre at sider med visse titler opprettes, ved å bruke [[MediaWiki:Titleblacklist]] og [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Dette er en svartlisting for titler. Titler som passer med regulære uttrykk her kan ikke opprettes.
# Bruk «#» for kommentarer.',
	'titlewhitelist'                  => '# Dette er en hvitelisting for titler. Bruk «#» for kommentarer.',
	'titleblacklist-forbidden-edit'   => 'Tittelen «$2» er stengt for oppretting. Den blokkeres av følgende svartelistingselement: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '«$2» kan ikke flyttes til «$3» fordi tittelen «$3» har blitt stengt for oppretting. Den tilsvarer følgende element i svartelistinga: <code>$1</code<',
	'titleblacklist-forbidden-upload' => 'Filnavnet «$2» er blokkert for oppretting. Den tilsvarer følgende svartelisteelement: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Følgende {{PLURAL:$1|linje|linjer}} i tittelsvartelista er {{PLURAL:$1|ugyldig|ugyldige}}; vennligst korriger {{PLURAL:$1|den|dem}} før du lagrer:',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'titleblacklist'                  => '# Aquò es un títol mes en lista negra. Cada títol qu\'indica aicí lo còde regex es interdich a la creacion e a l\'edicion.
# Utilizatz "#" per escriure de comentaris.',
	'titlewhitelist'                  => '# Aquò es la lista blanca dels títols. Utilizatz « # » pels comentaris.',
	'titleblacklist-forbidden-edit'   => "La pagina intitolada « $2 » pòt pas èsser creada. Dins la lista negra, correspond a l'expression racionala : <code>$1</code>",
	'titleblacklist-forbidden-move'   => 'La page intitolada "$2" pòt pas èsser renomenada "$3". Dins la lista negra, correspond a l\'expression racionala : <code>$1</code>',
	'titleblacklist-forbidden-upload' => "'''Un fichièr nomenat \"\$2\" pòt pas èsser telecargat.''' <br /> Dins la lista negra, correspond a l'expression racionala :  <code>\\\$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La linha seguenta|Las linhas seguentas}} dins la lista negra dels títols {{PLURAL:$1|es invalida|son invalidas}} : sètz convidat a {{PLURAL:$1|la|las}} corregir abans de salvagardar.',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'titleblacklist-desc'             => 'Pozwala zabezpieczyć przed możliwością utworzenia stron o określonych tytułach: [[MediaWiki:Titleblacklist]] i [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# To jest lista zabronionych nazw artykułów. Artykuły o nazwach odpowiadających tym wzorcom, zapisanym wyrażeniami regularnymi, nie będą mogły zostać utworzone.
# Użyj znaku "#" by utworzyć komentarz.',
	'titlewhitelist'                  => '# To jest lista dopuszczalnych nazw artykułów. 
# Użyj znaku "#" by utworzyć komentarz.',
	'titleblacklist-forbidden-edit'   => 'Nie wolno utworzyć artykułu o nazwie "$2". Pasuje ona do następującego wzorca z listy nazw zabronionych: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Zmiana nazwy z "$2" na "$3" nie jest możliwa, ponieważ nazwa "$3" jest zabroniona. Pasuje ona do następującego wzorca z listy nazw zabronionych: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Utworzenie pliku o nazwie "$2" nie jest możliwe. Nazwa pasuje do następującego wzorca z listy nazw zabronionych: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Następująca linia|Następujące linie}} na liście zabronionych tytułów stron {{PLURAL:$1|jest nieprawidłowa|są nieprawidłowe}}. Popraw {{PLURAL:$1|ją|je}} przed zapisaniem:',
);

/** Portuguese (Português)
 * @author 555
 * @author Malafaya
 */
$messages['pt'] = array(
	'titleblacklist-desc'             => 'Permite a proibição da criação de páginas com títulos específicos: [[MediaWiki:Titleblacklist]] e [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Esta é uma lista negra de títulos. Títulos que se encaixem em uma regex não poderão ser criados.
# Utilize "#" para fazer comentários.',
	'titlewhitelist'                  => '# Esta é uma lista branca de títulos. Utilize "#" para fazer comentários',
	'titleblacklist-forbidden-edit'   => 'O título "$2" foi impedido de ser criado. Ele se encaixa na seguinte entrada da lista negra: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" não pode ser movida para "$3" já que "$3" é um título impedido de ser criado. Se encaixa na seguinte entrada da lista-negra: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'O ficheiro "$2" foi impedido de ser criado. Ele se encaixa na seguinte entrada da lista negra: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|A seguinte linha|As seguintes linhas}} da lista negra {{PLURAL:$1|é inválida|são inválidas}}. Por gentileza, {{PLURAL:$1|corrija-a|corrija-as}} antes de salvar:',
);

/** Russian (Русский)
 * @author .:Ajvol:.
 */
$messages['ru'] = array(
	'titleblacklist-desc'             => 'Позволяет запретить создание страниц с указанными названиями: [[MediaWiki:Titleblacklist]] и [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Это список запрещённый названий
# Любая статья, название которой попадает под этот список, не может быть создана
# Используйте « # » для комментариев',
	'titlewhitelist'                  => '# Это «белый список» названий. Для комментариев используйте «#»',
	'titleblacklist-forbidden-edit'   => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Страница с названием \"\$2\" не может быть создана''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Страница с названием \"\$2\" не может быть перемещена''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "
'''Файл с названием \"\$2\" не может быть загружен''' <br />
Он попадает под следующую запись списка запрещенных названий: '''''\$1'''''",
	'titleblacklist-invalid'          => '{{PLURAL:$1|Следующая строка|Следующие строки}} в списке запрещенный названий {{PLURAL:$1|не является правильным регулярным выражением|не являются правильными регулярными выражениями}}. Пожалуйста, исправьте {{PLURAL:$1|её|их}} перед сохранением:',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'titleblacklist'                  => '# Бу бобуллубут ааттар испииһэктэрэ. Бу испииһэккэ киирбит ханнык баҕарар ыстатыйа оҥоһуллар кыаҕа суох.
# Ырытарга « # » бэлиэни туһаныҥ.',
	'titlewhitelist'                  => '# Бу ааттар «үрүҥ испииһэктэрэ». Ырытарга «#» бэлиэни туһаныҥ.',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Маннык ааттаах сирэй \"\$2\" кыайан оҥоһуллубат''' <br />
Бобуллубут ааттар испииһэктэригэр киирэр: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Маннык ааттаах сирэй \"\$2\" маннык ааттанар \"\$3\" кыаҕа суох, тоҕо диэтэххэ \"\$3\" оҥоһуллара бобуллубут''' <br />
Бобуллубут ааттар испииһэктэригэр киирэр: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "'''Маннык ааттаах билэ \"\$2\" кыстанар (киллэриллэр) кыаҕа суох''' <br />
Бобуллубут ааттар испииһэктэригэр киирэр: '''''\$1'''''",
	'titleblacklist-invalid'          => 'Бобуллубут ааттар испииһэктэрин бу {{PLURAL:$1|строката|строкаалара}} {{PLURAL:$1|сыыһалаах|сыыһалаахтар}}. Бука диэн ону көннөр:',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'titleblacklist-desc'             => 'Umožňuje zakázať tvorbu stránok s určenými názvami: [[MediaWiki:Titleblacklist|Čierna listina názvov]] a [[MediaWiki:Titlewhitelist|Biela listina názvov]]',
	'titleblacklist'                  => '# Toto je čierna listina názvov stránok. Názvy, ktoré zodpovedajú tu uvedenému regulárnemu výrazu nebude možné vytvoriť.
# Komentáre začínajú znakom „#“.',
	'titlewhitelist'                  => '# Toto je biela listina názvov stránok. Riadky komentárov začínajú znakom „#“',
	'titleblacklist-forbidden-edit'   => 'Vytvorenie stránky z názovom „$2“ bolo zakázané. Zodpovedá tejto položke čiernej listiny: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '„$2“ nie je možné presunúť na „$3“, pretože vytvorenie stránky z názovom „$3“ bolo zakázané. Zodpovedá tejto položke čiernej listiny: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Bolo zakázané vytvorenie súboru s názvom „$2“. Zodpovedá tejto položke čiernej listiny: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|Nasledovný riadok|Nasledovné riadky}} čiernej listiny názvov stránok {{PLURAL:$1|je neplatný|sú neplatné}} a je potrebné {{PLURAL:$1|ho|ich}} opraviť pred uložením stránky:',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'titleblacklist'                  => '# Dit is ju Swotte Lieste fon nit wonskede Siedennoomen.
# Älke Siedennoome, ap dän do foulgjende reguläre Uutdrukke touträffe, kon nit moaked wäide.
# Text bääte ne Ruute „#“ wäd as Kommentoar betrachted.',
	'titleblacklist-forbidden-edit'   => "'''Ne Siede mäd dän Tittel „$2“ kon nit moaked wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''$1'''''",
	'titleblacklist-forbidden-move'   => "'''Ju Siede „$2“ kon nit ätter „$3“ ferschäuwen wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''$1'''''",
	'titleblacklist-forbidden-upload' => "'''Ne Doatäi mäd dän Noome „$2“ kon nit hoochleeden wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: <code>\\$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|Ju foulgjende Riege|Do foulgjende Riegen}} in ju Speerlieste {{PLURAL:$1|is|sunt}} uungultich; korrigier do foar dät Spiekerjen:',
);

/** Swedish (Svenska)
 * @author Lejonel
 */
$messages['sv'] = array(
	'titleblacklist-desc'             => 'Ger möjlighet att förhindra att sidor med vissa titlar skapas, genom att använda  [[MediaWiki:Titleblacklist]] och [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Det här är en lista över förbjudna sidtitlar. Titlar som matchar ett reguljärt uttryck här kan inte skapas.
# Använd "#" för kommentarer.',
	'titlewhitelist'                  => '# Det är en lista över tillåtna sidtitlar. Använd "#" för att skriva kommentarer.',
	'titleblacklist-forbidden-edit'   => 'Sidtiteln "$2" har stoppats från att skapas. Den matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Sidan "$2" kan inte flyttas till "$3", eftersom titeln "$3" har förbjudits att skapas. Titeln matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Filnamnet "$2" har stoppats från att skapas. Namnet matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-invalid'          => 'Följande {{PLURAL:$1|rad|rader}} i listan är {{PLURAL:$1|felaktig|felaktiga}}; {{PLURAL:$1|den|de}} måste rättas innan du kan spara:',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'titleblacklist'                  => '# ఇది శీర్షికల నిరోధపు జాబితా. ఇక్కడ ఉన్న regexకి సరిపోలే శీర్షికలు గల పేజీలను సృష్టించలేరు.
# వ్యాఖ్యానించడానికి "#"ని వాడండి.',
	'titlewhitelist'                  => '# ఇది అనుమతించే శీర్షికల జాబితా. వ్యాఖ్యానించడానికి "#"ని వాడండి',
	'titleblacklist-forbidden-edit'   => '"$2" అనే శీర్షిక గల పేజీలను సృష్టించడంపై నిషేధం విధించారు. ఇది నిరోధపు జాబితాలోని ఈ పద్దుకి సరిపోలింది: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2"ని "$3"కి తరలించలేము, ఎందుకంటే "$3" అన్న శీర్షికని సృష్టించడంపై నిషేధం ఉంది. ఇది నిరోధపు జాబితాలోని ఈ పద్దుకి సరిపోలుతుంది: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '"$2" అన్న పేరు గల ఫైలుని సృష్టించడాన్ని నిషేధించారు. ఇది నిషేధపు జాబితాలోని ఈ పద్దుకి సరిపోలుతుంది: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'శీర్షికల నిరోధపు జాబితాలోని ఈ క్రింద పేర్కొన్న {{PLURAL:$1|లైను|లైన్లు}} తప్పుగా {{PLURAL:$1|ఉంది|ఉన్నాయి}}; భద్రపరిచేముందు {{PLURAL:$1|దాన్ని|వాటిని}} సరిదిద్దండి:',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'titleblacklist-desc'             => 'Cấm không được tạo ra trang có các tên được định rõ: [[MediaWiki:Titleblacklist]] và [[MediaWiki:Titlewhitelist]]',
	'titleblacklist'                  => '# Đây là danh sách đen về tên trang. Không được tạo ra các trang trùng với một biểu thức chính quy ở đây.
# Hãy bắt đầu lời ghi chú với “#”.',
	'titlewhitelist'                  => '# Đây là “danh sách trắng” về tên trang. Hãy bắt đầu lời ghi chú với “#”.',
	'titleblacklist-forbidden-edit'   => 'Không được tạo ra trang dưới tên “$2”, vì tên này trùng với khoản sau trong danh sách đen: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Không được di chuyển “$2” đến “$3”, vì tên thứ hai bị cấm. Nó trùng với khoản sau trong danh sách đen: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Không được tải lên tập tin dưới tên “$2”, vì tên này trùng với khoản sau trong danh sách đen: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Những dòng sau đây trong danh sách đen về tên trang không hợp lệ; xin hãy sửa chữa chúng để tuân theo cú pháp biểu thức chính quy trước khi lưu trang:',
);

/** Cantonese (粵語 / 廣東話)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'titleblacklist' =>
"# 呢個係一個標題黑名單。同呢度配合正規表達式嘅標題係唔可以新開嘅。
# 用 \"#\" 去做註解。
",
	'titleblacklist-forbidden-edit' => '個標題 "$2" 已經禁止咗去開版。佢同下面黑名單嘅項目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 唔可以搬到去 "$3"，由於個標題 "$3" 已經禁止咗去開。佢同下面黑名單嘅項目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '個檔名 "$2" 已經禁止咗去開版。佢同下面黑名單嘅項目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '下面響標題黑名單嘅{{PLURAL:$1|一行|幾行}}無效；請響保存之前改正{{PLURAL:$1|佢|佢哋}}:',
);

/** chinese (simplified) (中文 (简化字))
 * @author Fdcn
 * @author Shinjiman
 */
$messages['zh-hans'] = array(
	'titleblacklist' =>
"# 本页面为“标题黑名单”。任何匹配本名单正则表达式的标题会被阻止建立和编辑。
# 请使用\"#\"来添加注释。
",
	'titleblacklist-forbidden-edit' => '标题 "$2" 已经被禁止创建。它跟以下黑名单的项目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 不可以移动到 "$3"，由于该标题 "$3" 已经被禁止创建。它跟以下黑名单的项目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '文件名称 "$2" 已经被禁止创建。它跟以下黑名单的项目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '以下在标题黑名单上的{{PLURAL:$1|一行|多行}}无效；请在保存前改正{{PLURAL:$1|它|它们}}:',
);

/** Chinese (Traditional) (中文 (傳統字))
 * @author Fdcn
 * @author Shinjiman
 */
$messages['zh-hant'] = array(
	'titleblacklist' =>
"# 本頁面為「標題黑名單」。任何匹配本名單正則表達式的標題會被阻止建立和編輯。
# 請使用\"#\"來添加註釋。
",
	'titleblacklist-forbidden-edit' => '標題 "$2" 已經被禁止創建。它跟以下黑名單的項目配合: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" 不可以移動到 "$3"，由於該標題 "$3" 已經被禁止創建。它跟以下黑名單的項目配合: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '檔案名稱 "$2" 已經被禁止創建。它跟以下黑名單的項目配合: <code>\$1</code>',
	'titleblacklist-invalid' => '以下在標題黑名單上的{{PLURAL:$1|一行|多行}}無效；請在保存前改正{{PLURAL:$1|它|它們}}:',
);

