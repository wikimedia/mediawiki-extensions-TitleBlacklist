<?php
/**
 * Internationalisation file for extension TitleBlacklist.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'titleblacklist' =>
"# This is a title blacklist. Titles that match a regex here cannot be created.
# Use \"#\" for comments.
",
	'titleblacklist-forbidden-edit' => 'The title "$2" has been banned from creation.  It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-move' => '"$2" cannot be moved to "$3", because the title "$3" has been banned from creation. It matches the following blacklist entry: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'The file name "$2" has been banned from creation. It matches the following blacklist entry: <code>\$1</code>',
	'titleblacklist-invalid' => 'The following {{PLURAL:$1|line|lines}} in the title blacklist {{PLURAL:$1|is|are}} invalid; please correct {{PLURAL:$1|it|them}} before saving:',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'titleblacklist'                  => '# هذه قائمة سوداء للعناوين. العناوين التي تطابق ريجيكس هنا لا يمكن إنشاؤها.
# استخدم "#" للتعليقات.',
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

/** Czech (Česky)
 * @author Li-sung
 */
$messages['cs'] = array(
	'titleblacklist'                  => '# Toto je černá listina názvů. Název, který bude odpovídat regulárnímu výrazu, nebude možné vytvořit.
# Používejte „#“ pro označení komentáře.',
	'titleblacklist-forbidden-edit'   => 'Název "$2" je zakázáno vytvářet. Odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '„$2“ nelze přesunout na název „$3“, protože název „$3“ je zakázáno vytvářet. Odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Soubor s jménem „$2“ je zakázáno vytvářet. Název odpovídá následujícímu záznamu na černé listině: <code>$1</code>',
	'titleblacklist-invalid'          => 'Na černé listině názvů {{PLURAL:$1|je následující řádka neplatný regulární výraz|jsou následující řádky neplatné regulární výrazy|jsou následující řádky regulární výrazy}} a je nutné {{PLURAL:$1|ji|je|je}} před uložením stránky opravit :',
);

/** German (Deutsch)
 */
$messages['de'] = array(
	'titleblacklist' =>
"# Dies ist die Schwarze Liste unerwünschter Seitennamen.
# Jeder Seitenname, auf den die folgenden regulären Ausdrücke zutreffen, kann nicht erstellt werden.
# Text hinter einer Raute „#“ wird als Kommentar gesehen.",
	'titleblacklist-forbidden-edit'   => "'''Eine Seite mit dem Titel „$2“ kann nicht erstellt werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-move'   => "'''Die Seite „$2“ kann nicht nach „$3“ verschoben werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-forbidden-upload' => "'''Eine Datei mit dem Namen „$2“ kann nicht hochgeladen werden.'''<br />Der Titel kollidiert mit diesem Sperrbegriff: '''''\$1'''''",
	'titleblacklist-invalid'          => 'Die {{PLURAL:$1|folgende Zeile|folgenden Zeilen}} in der Sperrliste {{PLURAL:$1|ist|sind}} ungültig; bitte korrigiere diese vor dem Speichern:',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Nike
 */
$messages['fi'] = array(
	'titleblacklist'         => '# Tämä sivu sisältää sääntöjä, jotka estävät tietyn nimisten uusien sivujen luomisen.
# Estettyjä ovat sivut, joiden sivunimet vastaavat täällä määritettyjä säännöllisiä lausekkeita.
# Käytä #-merkkiä kommentointiin.',
	'titleblacklist-invalid' => '{{PLURAL:$1|Seuraava listan rivi ei ole kelvollinen|Seuraavat listan rivit eivät ole kelvollisia}}. Korjaa {{PLURAL:$1|se|ne}} ennen tallentamista.',
);

/** French (Français)
 * @author Grondin
 */
$messages['fr'] = array(
	'titleblacklist'                  => "# Ceci est un titre mis en liste noire
# Chaque titre qu'indique ici le code regex ne peux être créé.
# Utilisez « # » pour écrire des commentaires",
	'titleblacklist-forbidden-edit'   => "Le titre « $2 » est interdit à la création.
Dans la liste noire, il est détecté par l'entrée suivante : <code>$1</code>",
	'titleblacklist-forbidden-move'   => "La page intitulée « $2 » ne peut être déplacée vers « $3 » parce que cette dernière a été interdite à la création. Dans la liste noire, elle correspond à l'entrée : <code>$1</code>",
	'titleblacklist-forbidden-upload' => "Le fichier intitulé « $2 » est interdit à la création. Dans la liste noire, il correspond à l'entrée : <code>$1</code>",
	'titleblacklist-invalid'          => '{{PLURAL:$1|La ligne suivante|Les lignes suivantes}} dans la liste noire des titres {{PLURAL:$1|est invalide|sont invalides}} : vous êtes invité à {{PLURAL:$1|la|les}} corriger avant de sauvegarder.',
);

/** Galician (Galego) */
$messages['gl'] = array(
	'titleblacklist' => '# É unha listaxe negra de títulos
# Ningún título que coincida cunha destas expresións regulares se pode crear e editar
# Use "#" para os comentarios',
);

/** Croatian (Hrvatski)
 * @author Dnik
 */
$messages['hr'] = array(
	'titleblacklist'                  => '# Ovo je popis zabranjenih naslova. Naslovi koji se podudaraju s regularnim izrazom se ne mogu kreirati.
# Koristite "#" za komentare.',
	'titleblacklist-forbidden-edit'   => 'Naslov "$2" je zabranjen za kreiranje.  Podudara se sa sljedećom stavkom popisa zabranjenih: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" ne može biti premješten na "$3", jer je naslov "$3" zabranjeno kreirati. Podudara se sa sljedećom stavkom popisa zabranjenih: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Ime datoteke "$2" je zabranjeno kreirati. Poklapa se sa stavkom popisa zabranjenih: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Sljedeći {{PLURAL:$1|redak|redci}} u popisu zabranjenih naslova {{PLURAL:$1|je|su}} nedozvoljeni; molimo ispravite {{PLURAL:$1|ga|ih}} prije spremanja:',
);

$messages['hsb'] = array(
	'titleblacklist' => '# To je čorna lisćina nastawkowych mjenow
# Kóžde nastawkowe mjeno, kotrež so k regularnemu wurazej hodźi, njesmě so wutworjeć a wobdźěłować
# Wužij "#" za komentary',
	'titleblacklist-forbidden-edit' => '<div align="center" style="border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;">
\'\'\'Strona z titulom "$2" njehodźi so wutworić\'\'\' <br />
Wotpowěduje slědowacemu regularnemu wurazej čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'
</div>',
	'titleblacklist-forbidden-move' => '<span class="error">
\'\'\'Strona z titulom "$2" njeda so do "$3"\'\'\' přesunyć.<br />
Kryje so ze slědowacym regularnym wurazom čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'
</span>',
	'titleblacklist-forbidden-upload' => '\'\'\'Dataja z mjenom "$2" njeda so nahrać\'\'\' <br />
Kryje so ze slědowacym regularnym wurazom čorneje lisćiny: \'\'\'\'\'$1\'\'\'\'\'',
);

/** Hungarian (Magyar)
 * @author Bdanee
 */
$messages['hu'] = array(
	'titleblacklist'                  => '# Ez a címek feketelistája. Azon címek, amelyek illeszkednek az itt található reguláris kifejezésekre, nem hozhatóak létre.
# Használd a „#” karaktert megjegyzések írásához.',
	'titleblacklist-forbidden-edit'   => '„$1” című lapot tilos készíteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '„$2” nem nevezhető át „$3” névre, mert „$3” névvel tilos lapot készíteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>$1</code>',
	'titleblacklist-forbidden-upload' => '„$1” nevű fájlt tilos feltölteni. Illeszkedik a következő feketelistás bejegyzéssel: <code>\\$1</code>',
	'titleblacklist-invalid'          => 'Az alábbi {{PLURAL:$1|sor hibás|sorok hibásak}} a lapcímek feketelistájában; {{PLURAL:$1|javítsd|javítsd őket}} mentés előtt:',
);

/** Italian (Italiano)
 * @author BrokenArrow
 */
$messages['it'] = array(
	'titleblacklist'                  => '# Lista dei titoli non consentiti. 
# È impedita la creazione delle pagine il cui titolo corrisponde a un\'espressione regolare indicata di seguito.
# Usare "#" per le righe di commento.',
	'titleblacklist-forbidden-edit'   => 'La creazione di pagine con titolo "$2" è stata impedita. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Impossibile spostare la pagina "$2" al titolo "$3" in quanto la creazione di pagine con titolo "$3" è stata impedita. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'La creazione di file con titolo "$2" è stato impedito. La voce corrispondente nell\'elenco dei titoli non consentiti è la seguente: <code>$1</code>',
	'titleblacklist-invalid'          => "{{PLURAL:$1|La seguente riga|Le seguenti righe}} dell'elenco dei titoli non consentiti {{PLURAL:$1|non è valida|non sono valide}}; si prega di correggere {{PLURAL:$1|l'errore|gli errori}} prima di salvare la pagina.",
);

/** Latin (Latina)
 * @author UV
 */
$messages['la'] = array(
	'titleblacklist'                  => '# Hic est index titulorum prohibitorum. Tituli qui congruunt cum
# una ex expressionibus regularis sequentibus creari non possunt.
# Utere "#" pro commentariis.',
	'titleblacklist-forbidden-edit'   => 'Pagina cum titulo "$2" creari non potest. Hic titulus congruit cum expressione regulari: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Pagina cum titulo "$2" non ad "$3" moveri potest, quia titulus "$3" prohibitus est ne pagina creetur. Hic titulus congruit cum expressione regulari: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Fasciculus cum titulo "$2" onerari non potest. Hic titulus congruit cum expressione regulari: <code>\\$1</code>',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author SPQRobin
 */
$messages['nl'] = array(
	'titleblacklist'                  => '# Dit is een zwarte lijst voor paginanamen. Iedere paginanaam die voldoet aan een regex kan niet aangemaakt en bewerkt worden.
# Gebruik "#" voor opmerkingen.',
	'titleblacklist-forbidden-edit'   => 'Een pagina met de naam "$2" kan niet aangemaakt worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" kan niet hernoemd worden naar "$3", omdat pagina\'s met de naam "$3" niet aangemaakt kunnen worden. Deze paginanaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Het bestand "$2" kan niet toegevoegd worden. Deze bestandsnaam voldoet aan de volgende beperking op de zwarte lijst: <code>$1</code>',
	'titleblacklist-invalid'          => 'De volgende {{PLURAL:$1|regel|regels}} in de zwarte lijst voor paginanamen {{PLURAL:$1|is|zijn}} ongeldig. Verbeter die {{PLURAL:$1|regel|regels}} alstublieft voordat u de lijst opslaat:',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'titleblacklist'                  => "# Aquò es un títol mes en lista negra 
# Cada títol qu'indica aicí lo còde regex es interdich a la creacion e a l'edicion 
# Utilizatz « # » per escriure de comentaris",
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\"> '''La pagina intitolada « \$2 » pòt pas èsser creada.''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''\$1''''' </div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\"> '''La page intitolada « \$2 » pòt pas èsser deplaçada a « \$3 ».''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''\$1''''' </span>",
	'titleblacklist-forbidden-upload' => "'''Un fichièr nomenat « $2 » pòt pas èsser telecargat.''' <br /> Dins la lista negra, correspond a l'expression racionala : '''''$1'''''",
);

/** Portuguese (Português)
 * @author 555
 */
$messages['pt'] = array(
	'titleblacklist'                  => '# Esta é uma lista negra de títulos. Títulos que se encaixem em uma regex não poderão ser criados.
# Utilize "#" para fazer comentários.',
	'titleblacklist-forbidden-edit'   => 'O título "$2" foi impedido de ser criado. Ele se encaixa na seguinte entrada da lista negra: <code>$1</code>',
	'titleblacklist-forbidden-move'   => '"$2" não pode ser movida para "$3" já que "$3" é um título impedido de ser criado. Se encaixa na seguinte entrada da lista-negra: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'O ficheiro "$2" foi impedido de ser criado. Ele se encaixa na seguinte entrada da lista negra: <code>\\$1</code>',
	'titleblacklist-invalid'          => '{{PLURAL:$1|A seguinte linha|As seguintes linhas}} da lista negra {{PLURAL:$1|é inválida|são inválidas}}. Por gentileza, {{PLURAL:$1|corrija-a|corrija-as}} antes de salvar:',
);

/** Russian (Русский)
 * @author VasilievVV
 */
$messages['ru'] = array(
	'titleblacklist' =>
"# Это список запрещённый названий
# Любая статья, название которой попадает под этот список, не может быть создана
# Используйте « # » для комментариев",
	'titleblacklist-forbidden-edit' => "
<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Страница с названием \"\$2\" не может быть создана''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</div>",
	'titleblacklist-forbidden-move' => "<span class=\"error\">
'''Страница с названием \"\$2\" не может быть перемещена''' <br />
Она попадает под следующую запись списка запрещенных названий: '''''\$1'''''
</span>",
	'titleblacklist-forbidden-upload' => "
'''Файл с названием \"\$2\" не может быть загружен''' <br />
Он попадает под следующую запись списка запрещенных названий: '''''\$1'''''",
	'titleblacklist-invalid' => '{{PLURAL:$1|Следующая строка|Следующие строки}} в списке запрещенный названий {{PLURAL:$1|не является правильным регулярным выражением|не являются правильными регулярными выражениями}}. Пожалуйста, исправьте {{PLURAL:$1|её|их}} перед сохранением:',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'titleblacklist'                  => '# Toto je čierna listina názvov stránok. Názvy, ktoré zodpovedajú tu uvedenému regulárnemu výrazu nebude možné vytvoriť.
# Komentáre začínajú znakom „#“.',
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
# Älke Siedennoome, ap dän do foulgjende reguläre Uutdrukke touträffe, kon nit moaked un beoarbaided wäide.
# Text bääte ne Ruute „#“ wäd as Kommentoar betrachted.',
	'titleblacklist-forbidden-edit'   => "<div align=\"center\" style=\"border: 1px solid #f88; padding: 0.5em; margin-bottom: 3px; font-size: 95%; width: auto;\">
'''Ne Siede mäd dän Tittel „\$2“ kon nit moaked wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''\$1'''''</div>",
	'titleblacklist-forbidden-move'   => "<span class=\"error\">
'''Ju Siede „\$2“ kon nit ätter „\$3“ ferschäuwen wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''\$1'''''</span>",
	'titleblacklist-forbidden-upload' => "'''Ne Doatäi mäd dän Noome „$2“ kon nit hoochleeden wäide.''' <br />
Die Tittel kollidiert mäd dissen Speerbegriep: '''''$1'''''",
);

/** Swedish (Svenska)
 * @author Lejonel
 */
$messages['sv'] = array(
	'titleblacklist'                  => '# Det här är en lista över förbjudna sidtitlar. Titlar som matchar ett reguljärt uttryck här kan inte skapas.
# Använd "#" för kommentarer.',
	'titleblacklist-forbidden-edit'   => 'Sidtiteln "$2" har stoppats från att skapas. Den matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-forbidden-move'   => 'Sidan "$2" kan inte flyttas till "$3", eftersom titeln "$3" har förbjudits att skapas. Titeln matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-forbidden-upload' => 'Filnamnet "$2" har stoppats från att skapas. Namnet matchar följande rad i svarta listan för sidtitlar: <code>$1</code>',
	'titleblacklist-invalid'          => 'Följande {{PLURAL:$1|rad|rader}} i listan är {{PLURAL:$1|felaktig|felaktiga}}; {{PLURAL:$1|den|de}} måste rättas innan du kan spara:',
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

$messages['zh']     = $messages['zh-hans'];
$messages['zh-cn']  = $messages['zh-hans'];
$messages['zh-hk']  = $messages['zh-hant'];
$messages['zh-sg']  = $messages['zh-hans'];
$messages['zh-tw']  = $messages['zh-hant'];
$messages['zh-yue'] = $messages['yue'];
