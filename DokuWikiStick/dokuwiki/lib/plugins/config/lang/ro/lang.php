<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Sergiu Baltariu <s_baltariu@yahoo.com>
 * @author s_baltariu@yahoo.com
 * @author Emanuel-Emeric Andrasi <n30@mandrivausers.ro>
 * @author Emanuel-Emeric Andrași <n30@mandrivausers.ro>
 * @author Emanuel-Emeric Andraşi <em.andrasi@mandrivausers.ro>
 * @author Emanuel-Emeric Andrasi <em.andrasi@mandrivausers.ro>
 * @author Marius OLAR <olarmariusalex@gmail.com>
 * @author Marius Olar <olarmariusalex@yahoo.com>
 * @author Emanuel-Emeric Andrași <em.andrasi@mandrivausers.ro>
 */
$lang['menu']                  = 'Setări de Configurare';
$lang['error']                 = 'Setări nu au fost actualizate datorită unei valori incorecte; verificaţi modificările şi încercaţi din nou. <br /> Valorile incorecte vor apărea într-un chenar roşu.';
$lang['updated']               = 'Setările au fost actualizate cu succes.';
$lang['nochoice']              = '(nici o altă opţiune nu este disponibilă)';
$lang['locked']                = 'Fişierul de setări nu poate fi actualizat. Dacă nu s-a dorit aceasta, asiguraţi-vă că numele şi drepturile de acces ale fişierului de setări localizate sunt corecte.';
$lang['danger']                = 'Pericol: Modificarea aceastei opțiuni poate conduce la imposibilitatea accesării wiki-ului și a meniului de configurare!';
$lang['warning']               = 'Atenție: Modificarea aceastei opțiuni poate duce la evenimente nedorite!';
$lang['security']              = 'Alertă de securitate: Modificarea acestei opțiuni poate prezenta un risc de securitate!';
$lang['_configuration_manager'] = 'Manager Configurare';
$lang['_header_dokuwiki']      = 'Setări DokuWiki';
$lang['_header_plugin']        = 'Setări Plugin-uri';
$lang['_header_template']      = 'Setări Şabloane';
$lang['_header_undefined']     = 'Setări Nedefinite';
$lang['_basic']                = 'Setări de Bază';
$lang['_display']              = 'Setări Afişare';
$lang['_authentication']       = 'Setări Autentificare';
$lang['_anti_spam']            = 'Setări Anti-Spam';
$lang['_editing']              = 'Setări Editare';
$lang['_links']                = 'Setări Legături';
$lang['_media']                = 'Setări Media';
$lang['_advanced']             = 'Setări Avansate';
$lang['_network']              = 'Setări Reţea';
$lang['_msg_setting_undefined'] = 'Nesetat metadata';
$lang['_msg_setting_no_class'] = 'Nesetat class';
$lang['_msg_setting_no_default'] = 'Nici o valoare implicită';
$lang['title']                 = 'Titlul wiki';
$lang['start']                 = 'Numele paginii de start';
$lang['lang']                  = 'Limbă';
$lang['template']              = 'Şablon';
$lang['tagline']               = 'Slogan (dacă templateul suportă opțiunea)';
$lang['sidebar']               = 'Numele paginii barei laterale (dacă templateul suportă opțiunea), câmpul lăsat gol dezactivează bara laterală';
$lang['license']               = 'Sub ce licenţă va fi publicat conţinutul?';
$lang['savedir']               = 'Director pentru salvarea datelor';
$lang['basedir']               = 'Director bază';
$lang['baseurl']               = 'URL bază ';
$lang['cookiedir']             = 'Cale Cookie. Lăsați gol pentru a utiliza baseurl.';
$lang['dmode']                 = 'Mod creare director';
$lang['fmode']                 = 'Mod creare fişier';
$lang['allowdebug']            = 'Permite depanarea <b>dezactivaţi dacă cu e necesar!</b>';
$lang['recent']                = 'Modificări recente';
$lang['recent_days']           = 'Câte modificări recente să se păstreze?';
$lang['breadcrumbs']           = 'Numărul de "urme" lăsate';
$lang['youarehere']            = 'Structura ierarhică a "urmelor" lăsate';
$lang['fullpath']              = 'Arată calea completă a paginii în subsol';
$lang['typography']            = 'Fă înlocuiri topografice';
$lang['dformat']               = 'Format dată (vezi funcţia PHP <a href="http://php.net/strftime">strftime</a>)';
$lang['signature']             = 'Semnătura';
$lang['showuseras']            = 'Ce se afişează la indicarea utilizatorului care a editat ultimul o pagină';
$lang['toptoclevel']           = 'Primul nivel pentru cuprins';
$lang['tocminheads']           = 'Numărul minim de titluri ce determină dacă se alcătuieşte Tabelul de Cuprins (TOC)';
$lang['maxtoclevel']           = 'Nivelul maxim pentru cuprins';
$lang['maxseclevel']           = 'Nivelul maxim de editare al secţiunii';
$lang['camelcase']             = 'Foloseşte CamelCase pentru legături';
$lang['deaccent']              = 'numedepagină curate';
$lang['useheading']            = 'Foloseşte primul titlu pentru numele paginii';
$lang['sneaky_index']          = 'Implicit, DokuWiki va arăta toate numele de spaţii la vizualizarea indexului. Activând această opţiune vor fi ascunse acelea la care utilizatorul nu are drepturi de citire. Aceasta poate determina ascunderea sub-numelor de spaţii accesibile. Aceasta poate face index-ul  inutilizabil cu anumite setări ale ACL';
$lang['hidepages']             = 'Ascunde paginile pereche (expresii regulate)';
$lang['useacl']                = 'Utilizează liste de control al accesului';
$lang['autopasswd']            = 'Parole autogenerate';
$lang['authtype']              = 'Autentificare backend';
$lang['passcrypt']             = 'Metoda de criptare a parolei';
$lang['defaultgroup']          = 'Grup implicit';
$lang['superuser']             = 'Superuser - un grup sau un utilizator cu acces complet la toate paginile şi funcţiile indiferent de setările ACL';
$lang['manager']               = 'Manager - un grup sau un utilizator cu acces la anumite funcţii de management';
$lang['profileconfirm']        = 'Confirmă schimbarea profilului cu parola';
$lang['rememberme']            = 'Permiteţi cookies permanente la login (ţine-mă minte)';
$lang['disableactions']        = 'Dezactivează acţiunile DokuWiki';
$lang['disableactions_check']  = 'Verifică';
$lang['disableactions_subscription'] = 'Subscrie/Anulează subscrierea';
$lang['disableactions_wikicode'] = 'Vizualizează sursa/Export Raw';
$lang['disableactions_other']  = 'Alte acţiuni (separate prin virgulă)';
$lang['auth_security_timeout'] = 'Timpul de expirare al Autentificării Securizate (secunde)';
$lang['securecookie']          = 'Cookies-urile setate via HTTPS să fie trimise doar via HTTPS de către browser? Dezactivaţi această opţiune numai când login-ul wiki-ului este securizat cu SSL dar navigarea wiki-ului se realizează nesecurizat.';
$lang['remote']                = 'Activează sistemul remote API. Acesta permite altor aplicații să acceseze wiki-ul via XML-RPC sau alte mecanisme.';
$lang['remoteuser']            = 'Restricționează accesul sistemului remote API la grupurile sau utilizatorii următori (separați prin virgulă). Lăsați câmpul gol pentru a da acces către toți.';
$lang['usewordblock']          = 'Blochează spam-ul pe baza listei de cuvinte';
$lang['relnofollow']           = 'Folosiţi rel="nofollow" pentru legăturile externe';
$lang['indexdelay']            = 'Timpul de întârziere înainte de indexare (sec)';
$lang['mailguard']             = 'Adrese de email acoperite';
$lang['iexssprotect']          = 'Verifică fişierele încărcate pentru posibil cod periculos JavaScript sau HTML';
$lang['usedraft']              = 'Salvează automat o schiţă în timpul editării';
$lang['htmlok']                = 'Permite intercalare cod HTML';
$lang['phpok']                 = 'Permite intercalare cod PHP';
$lang['locktime']              = 'Durata maximă pentru blocarea fişierelor (secunde)';
$lang['cachetime']             = 'Durata maximă pentru cache (secunde)';
$lang['target____wiki']        = 'Fereastra ţintă pentru legăturile interne';
$lang['target____interwiki']   = 'Fereastra ţintă pentru legăturile interwiki';
$lang['target____extern']      = 'Fereastra ţintă pentru legăturile externe';
$lang['target____media']       = 'Fereastra ţintă pentru legăturile media';
$lang['target____windows']     = 'Fereastra ţintă pentru legăturile windows';
$lang['mediarevisions']        = 'Activare Revizii Media?';
$lang['refcheck']              = 'Verificare referinţă media';
$lang['gdlib']                 = 'Versiunea GD Lib';
$lang['im_convert']            = 'Calea către instrumentul de conversie ImageMagick';
$lang['jpg_quality']           = 'Calitatea compresiei JPG (0-100)';
$lang['fetchsize']             = 'Dimensiunea maximă (byte) pe care fetch.php poate să descarce din exterior';
$lang['subscribers']           = 'Activează suportul pentru subscrierea paginii';
$lang['subscribe_time']        = 'Timpul după care lista de abonare şi digestie sunt trimise (sec); Aceasta ar trebui să fie mai mic decât timpul specificat în recent_days.';
$lang['notify']                = 'Trimite notificări privind modificările pe această adresă de email';
$lang['registernotify']        = 'Trimite informare noilor utilizatori înregistraţi pe această adresă de email';
$lang['mailfrom']              = 'Adresa de email utilizată pentru mailuri automate';
$lang['mailprefix']            = 'Prefix subiect e-mail de folosit pentru mail-uri automate';
$lang['sitemap']               = 'Generează Google sitemap (zile)';
$lang['rss_type']              = 'Tip flux XML';
$lang['rss_linkto']            = 'Fluxul XML se leagă la';
$lang['rss_content']           = 'Ce să afişez în obiectele fluxurilor XML';
$lang['rss_update']            = 'Intervalul de actualizare a fluxului XML (sec)';
$lang['rss_show_summary']      = 'Fluxul XML arată rezumat în titlu';
$lang['rss_media']             = 'Ce fel de modificări ar trebui afișate în fluxul XML?';
$lang['updatecheck']           = 'Verificare actualizări şi avertismente privind securitatea? DokuWiki trebuie să contacteze update.dokuwiki.org pentru această facilitate.';
$lang['userewrite']            = 'Folosire URL-uri "nice"';
$lang['useslash']              = 'Foloseşte slash-ul ca separator de spaţii de nume în URL-uri';
$lang['sepchar']               = 'Separator cuvinte în numele paginii';
$lang['canonical']             = 'Foloseşte URL-uri canonice';
$lang['fnencode']              = 'Metoda de encodare a numelor fişierelor non-ASCII.';
$lang['autoplural']            = 'Verifică formele de plural în legături';
$lang['compression']           = 'Metoda de criptare a fişierelor pod';
$lang['gzip_output']           = 'Foloseşte gzip pentru codarea conţinutului xhtml';
$lang['compress']              = 'Compactează codul CSS şi javascript produs';
$lang['cssdatauri']            = 'Dimensiunea în octeți până la care imaginile regasite în fișierele CSS ar trebui să fie incluse direct în stylesheet pentru a reduce supraîncărcarea antetului cererii HTTP. Această tehnică nu va funcționa în IE < 8! <code>400</code> până la <code>600</code> octeți sunt suficienți. Introduceți <code>0</code> pentru a dezactiva această opțiune.';
$lang['send404']               = 'Trimite mesajul "HTTP 404/Page Not Found" pentru paginile inexistente';
$lang['broken_iua']            = 'Funcţia ignore_user_abort nu funcţionează pe sistemul dumneavoastră? Aceasta poate determina nefuncţionarea indexului de căutare. IIS+PHP/CGI sunt cunoscute ca fiind nefuncţionale. Mai multe detalii găsiţi la <a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">Bug 852</a>';
$lang['xsendfile']             = 'Folosiţi header-ul X-Send pentru a-i permite serverului web să trimită fişiere statice? Serverul web trebuie să permită aceasta.';
$lang['renderer_xhtml']        = 'Motorul de randare principal folosit pentru afişarea wiki în format xhtml';
$lang['renderer__core']        = '%s (nucleu dokuwiki)';
$lang['renderer__plugin']      = '%s (plugin)';
$lang['proxy____host']         = 'Nume server Proxy';
$lang['proxy____port']         = 'Port Proxy';
$lang['proxy____user']         = 'Nume utilizator Proxy';
$lang['proxy____pass']         = 'Parolă Proxy';
$lang['proxy____ssl']          = 'Foloseşte SSL pentru conectare la Proxy';
$lang['proxy____except']       = 'Expresie regulară de potrivit cu URL-uri pentru care proxy-ul trebuie păsuit.';
$lang['safemodehack']          = 'Activează safemode hack';
$lang['ftp____host']           = 'Server FTP pentru safemode hack';
$lang['ftp____port']           = 'Port FTP pentru safemode hack';
$lang['ftp____user']           = 'Nume utilizator pentru safemode hack';
$lang['ftp____pass']           = 'Parolă FTP pentru safemode hack';
$lang['ftp____root']           = 'Director rădăcină FTP pentru safemode hack';
$lang['license_o_']            = 'Nici una aleasă';
$lang['typography_o_0']        = 'nimic';
$lang['typography_o_1']        = 'Numai ghilimele duble';
$lang['typography_o_2']        = 'Toate ghilimelele (s-ar putea să nu fucţioneze întotdeauna)';
$lang['userewrite_o_0']        = 'nimic';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki intern';
$lang['deaccent_o_0']          = 'închis';
$lang['deaccent_o_1']          = 'înlătură accentele';
$lang['deaccent_o_2']          = 'romanizează';
$lang['gdlib_o_0']             = 'biblioteca GD Lib nu este disponibilă';
$lang['gdlib_o_1']             = 'Versiunea 1.x';
$lang['gdlib_o_2']             = 'Detectare automată';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = 'Abstract';
$lang['rss_content_o_diff']    = 'Diferenţe unificate';
$lang['rss_content_o_htmldiff'] = 'Tabel diferenţe în format HTML';
$lang['rss_content_o_html']    = 'Conţinut pagină complet HTML';
$lang['rss_linkto_o_diff']     = 'vizualizare diferenţe';
$lang['rss_linkto_o_page']     = 'pagina revizuită';
$lang['rss_linkto_o_rev']      = 'lista revizuirilor';
$lang['rss_linkto_o_current']  = 'pagina curentă';
$lang['compression_o_0']       = 'nici una';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = 'nu se foloseşte';
$lang['xsendfile_o_1']         = 'Header proprietar lighttpd (înaintea versiunii 1.5)';
$lang['xsendfile_o_2']         = 'Header standard X-Sendfile';
$lang['xsendfile_o_3']         = 'Header proprietar Nginx X-Accel-Redirect';
$lang['showuseras_o_loginname'] = 'Numele de login';
$lang['showuseras_o_username'] = 'Numele complet al utilizatorului';
$lang['showuseras_o_email']    = 'Adresa de e-mail a utilizatorului (mascată conform setărilor de protecţie)';
$lang['showuseras_o_email_link'] = 'Adresa de e-mail a utilizatorului ca mailto: link';
$lang['useheading_o_0']        = 'Niciodată';
$lang['useheading_o_navigation'] = 'Doar navigare';
$lang['useheading_o_content']  = 'Doar conţinutul Wiki';
$lang['useheading_o_1']        = 'Întotdeauna';
$lang['readdircache']          = 'Vârsta maximă depozitare readdir (sec)';
