<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticPagesSeeder extends Seeder {

    public function run() {

        DB::table('static_pages')->insert([
            'code'=> 'terms',
            'lang_id'=> 1,
            'header' => 'STATIC_PAGE.TERMS_HEADER',
            'content' => '<h1>Terms and Conditions for mycompany</h1><h2>Introduction</h2><p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, mycompany.com accessible at mycompany.com.</p><p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. These Terms and Conditions have been generated with the help of the <a href="https://www.termsandcondiitionssample.com">Terms And Conditiions Sample Generator</a>.</p><p>Minors or people below 18 years old are not allowed to use this Website.</p><h2>Intellectual Property Rights</h2><p>Other than the content you own, under these Terms, mycompany and/or its licensors own all the intellectual property rights and materials contained in this Website.</p><p>You are granted limited license only for purposes of viewing the material contained on this Website.</p><h2>Restrictions</h2><p>You are specifically restricted from all of the following:</p><ul>	<li>publishing any Website material in any other media;</li>	<li>selling, sublicensing and/or otherwise commercializing any Website material;</li>	<li>publicly performing and/or showing any Website material;</li>	<li>using this Website in any way that is or may be damaging to this Website;</li>	<li>using this Website in any way that impacts user access to this Website;</li>	<li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>	<li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>	<li>using this Website to engage in any advertising or marketing.</li></ul><p>Certain areas of this Website are restricted from being access by you and mycompany may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p><h2>Your Content</h2><p>In these Website Standard Terms and Conditions, &quot;Your Content&quot; shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant mycompany a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p><p>Your Content must be your own and must not be invading any third-party&rsquo;s rights. mycompany reserves the right to remove any of Your Content from this Website at any time without notice.</p><h2>Your Privacy</h2><p>Please read Privacy Policy.</p><h2>No warranties</h2><p>This Website is provided &quot;as is,&quot; with all faults, and mycompany express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p><h2>Limitation of liability</h2><p>In no event shall mycompany, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. &nbsp;mycompany, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p><h2>Indemnification</h2><p>You hereby indemnify to the fullest extent mycompany from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p><h2>Severability</h2><p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p><h2>Variation of Terms</h2><p>mycompany is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p><h2>Assignment</h2><p>The mycompany is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p><h2>Entire Agreement</h2><p>These Terms constitute the entire agreement between mycompany and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p><h2>Governing Law &amp; Jurisdiction</h2><p>These Terms will be governed by and interpreted in accordance with the laws of the State of us, and you submit to the non-exclusive jurisdiction of the state and federal courts located in us for the resolution of any disputes.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'terms',
            'lang_id'=> 2,
            'header' => 'STATIC_PAGE.TERMS_HEADER',
            'content' => '<p>Положения и условия для mycompany<br />Вступление</p><p>Эти Стандартные положения и условия веб-сайта, изложенные на этой веб-странице, регулируют использование вами нашего веб-сайта mycompany.com, доступного по адресу mycompany.com.</p><p>Эти Условия будут применяться в полной мере и повлияют на использование вами данного Веб-сайта. Используя этот веб-сайт, вы соглашаетесь принять все условия, изложенные здесь. Вы не должны использовать этот веб-сайт, если не согласны с какими-либо из этих Стандартных положений и условий веб-сайта. Эти Положения и условия были созданы с помощью Генератора образцов условий и положений.</p><p>Несовершеннолетним и лицам младше 18 лет не разрешается использовать этот Веб-сайт.<br />Права интеллектуальной собственности</p><p>Помимо содержимого, которым вы владеете, в соответствии с настоящими Условиями моя компания и / или ее лицензиары владеют всеми правами интеллектуальной собственности и материалами, содержащимися на этом Веб-сайте.</p><p>Вам предоставляется ограниченная лицензия только для просмотра материалов, содержащихся на этом веб-сайте.<br />Ограничения</p><p>Вам специально запрещены все следующие действия:</p><p>&nbsp;&nbsp;&nbsp; публикация любых материалов Веб-сайта в любых других средствах массовой информации;<br />&nbsp;&nbsp;&nbsp; продажа, сублицензирование и / или иное коммерческое использование любых материалов Веб-сайта;<br />&nbsp;&nbsp;&nbsp; публичное исполнение и / или показ любых материалов Веб-сайта;<br />&nbsp;&nbsp;&nbsp; использование этого веб-сайта любым способом, который наносит или может нанести ущерб этому веб-сайту;<br />&nbsp;&nbsp;&nbsp; использование этого веб-сайта любым способом, который влияет на доступ пользователей к этому веб-сайту;<br />&nbsp;&nbsp;&nbsp; использование этого Веб-сайта вопреки применимым законам и постановлениям или каким-либо образом может причинить вред Веб-сайту или любому физическому или юридическому лицу;<br />&nbsp;&nbsp;&nbsp; участие в любом интеллектуальном анализе данных, сборе данных, извлечении данных или любой другой подобной деятельности в отношении этого Веб-сайта;<br />&nbsp;&nbsp;&nbsp; использование этого Веб-сайта для участия в любой рекламе или маркетинге.</p><p>Доступ к определенным областям этого веб-сайта ограничен вами, и mycompany может дополнительно ограничить ваш доступ к любым областям этого веб-сайта в любое время по своему усмотрению. Любой идентификатор пользователя и пароль, которые могут быть у вас для этого Веб-сайта, являются конфиденциальными, и вы также должны сохранять конфиденциальность.<br />Ваш контент</p><p>В настоящих Стандартных положениях и условиях веб-сайта &laquo;Ваш контент&raquo; означает любой аудио-, видеотекст, изображения или другие материалы, которые вы выбираете для отображения на этом веб-сайте. Отображая Ваш Контент, вы предоставляете mycompany неисключительную всемирную безотзывную сублицензируемую лицензию на использование, воспроизведение, адаптацию, публикацию, перевод и распространение на любых и всех носителях.</p><p>Ваш Контент должен быть вашим собственным и не должен нарушать права третьих лиц. mycompany оставляет за собой право удалить любой Ваш Контент с этого Веб-сайта в любое время без предварительного уведомления.<br />Ваша конфиденциальность</p><p>Пожалуйста, прочтите Политику конфиденциальности.<br />Никаких гарантий</p><p>Этот веб-сайт предоставляется &laquo;как есть&raquo; со всеми ошибками, и моя компания не дает никаких заверений или гарантий любого рода, связанных с этим веб-сайтом или материалами, содержащимися на этом веб-сайте. Кроме того, ничто, содержащееся на этом веб-сайте, не может быть истолковано как совет.<br />Ограничение ответственности</p><p>Ни в коем случае ни моя компания, ни ее должностные лица, директора и сотрудники не несут ответственности за что-либо, возникающее в результате или каким-либо образом связанное с использованием вами этого Веб-сайта, независимо от того, предусмотрена ли такая ответственность по контракту. mycompany, включая ее должностных лиц, директоров и сотрудников, не несет ответственности за какие-либо косвенные, косвенные или особые обязательства, возникающие в результате или каким-либо образом связанные с использованием вами данного Веб-сайта.<br />Возмещение</p><p>Настоящим вы в полной мере освобождаете мою компанию от любых и / или всех обязательств, затрат, требований, причин действий, убытков и расходов, возникающих каким-либо образом в связи с нарушением вами любого из положений настоящих Условий.<br />Делимость</p><p>Если какое-либо положение настоящих Условий будет признано недействительным в соответствии с применимым законодательством, такие положения будут удалены, не затрагивая остальные положения настоящего документа.<br />Изменение условий</p><p>mycompany имеет право пересматривать настоящие Условия в любое время по своему усмотрению, и, используя этот веб-сайт, вы должны регулярно просматривать эти Условия.<br />Назначение</p><p>Моя компания имеет право переуступать, передавать и передавать свои права и / или обязательства в соответствии с настоящими Условиями без какого-либо уведомления. Однако вам не разрешается переуступать, передавать или передавать какие-либо из ваших прав и / или обязательств в соответствии с настоящими Условиями.<br />Полное согласие</p><p>Настоящие Условия представляют собой полное соглашение между mycompany и вами в отношении использования вами данного Веб-сайта и заменяют собой все предыдущие соглашения и договоренности.<br />Применимое право и юрисдикция</p><p>Настоящие Условия будут регулироваться и толковаться в соответствии с законами нашего штата, и вы подчиняетесь неисключительной юрисдикции судов штата и федеральных судов, расположенных в нас, для разрешения любых споров.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'privacy',
            'lang_id'=> 1,
            'header' => 'STATIC_PAGE.PRIVACY_HEADER',
            'content' => '<p><strong>Privacy Policy for Company Name</strong></p><p>At Website Name, accessible at Website.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Website Name and how we use it.</p><p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at <a href="mailto:Email@Website.com" target="_blank">Email@Website.com</a></p><p><strong>Log Files</strong></p><p>Website Name follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p><p><strong>Cookies and Web Beacons</strong></p><p>Like any other website, Website Name uses &lsquo;cookies&#39;. These cookies are used to store information including visitors&#39; preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users&#39; experience by customizing our web page content based on visitors&#39; browser type and/or other information.</p><p><strong>DoubleClick DART Cookie</strong></p><p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to <a href="http://www.website.com" target="_blank">www.website.com</a> and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL &ndash; <a href="https://policies.google.com/technologies/ads" target="_blank">https://policies.google.com/technologies/ads</a>.</p><p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p><ul>	<li>	<p>Google</p>	<p><a href="https://policies.google.com/technologies/ads" target="_blank">https://policies.google.com/technologies/ads</a></p>	</li></ul><p><strong>Privacy Policies</strong></p><p>You may consult this list to find the Privacy Policy for each of the advertising partners of Website Name.</p><p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Website Name, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p><p>Note that Website Name has no access to or control over these cookies that are used by third-party advertisers.</p><p><strong>Third Part Privacy Policies</strong></p><p>Website Name&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p><p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites. What Are Cookies?</p><p><strong>Children&#39;s Information</strong></p><p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p><p>Website Name does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p><p><strong>Online Privacy Policy Only</strong></p><p>This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Website Name. This policy is not applicable to any information collected offline or via channels other than this website.</p><p><strong>Consent</strong></p><p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'privacy',
            'lang_id'=> 2,
            'header' => 'STATIC_PAGE.PRIVACY_HEADER',
            'content' => '<p><strong>Политика конфиденциальности персональных данных</strong></p><p>&nbsp;<p>Настоящая Политика конфиденциальности персональных данных (далее &ndash; Политика конфиденциальности) действует в отношении всей информации, которую сайт App Creator, (далее &ndash; Сервис) расположенный на доменном имени mysite.ru (а также его субдоменах), может получить о Пользователе во время использования сайта mysite.ru (а также его субдоменов), его программ и его продуктов.</p><strong>1. Определение терминов</strong></p><p>&nbsp;<p>1.1 В настоящей Политике конфиденциальности используются следующие термины:</p></p><p>1.1.1. &laquo;Администрация сайта&raquo; (далее &ndash; Администрация) &ndash; уполномоченные сотрудники на управление сайтом App Creator, которые организуют и (или) осуществляют обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p><p>1.1.2. &laquo;Персональные данные&raquo; - любая информация, относящаяся к прямо или косвенно определенному, или определяемому физическому лицу (субъекту персональных данных).</p><p>1.1.3. &laquo;Обработка персональных данных&raquo; - любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p><p>1.1.4. &laquo;Конфиденциальность персональных данных&raquo; - обязательное для соблюдения Оператором или иным получившим доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.</p><p>1.1.5. &laquo;Сайт App Creator&raquo; - это совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному адресу (URL): mysite.ru, а также его субдоменах.</p><p>1.1.6. &laquo;Субдомены&raquo; - это страницы или совокупность страниц, расположенные на доменах третьего уровня, принадлежащие сайту App Creator, а также другие временные страницы, внизу который указана контактная информация Администрации</p><p>1.1.5. &laquo;Пользователь сайта App Creator &raquo; (далее Пользователь) &ndash; лицо, имеющее доступ к сайту App Creator, посредством сети Интернет и использующее информацию, материалы и продукты сайта App Creator.</p><p>1.1.7. &laquo;Cookies&raquo; &mdash; небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.</p><p>1.1.8. &laquo;IP-адрес&raquo; &mdash; уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает доступ на Сервис.</p><p><strong>2. Общие положения</strong></p><p>&nbsp;<p>2.1. Использование сайта App Creator Пользователем означает согласие с настоящей Политикой конфиденциальности и условиями обработки персональных данных Пользователя.</p></p><p>2.2. В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование сайта App Creator .</p><p>2.3. Настоящая Политика конфиденциальности применяется к сайту App Creator. Сервис не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на сайте App Creator.</p><p>2.4. Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.</p><p><strong>3. Предмет политики конфиденциальности</strong></p><p>&nbsp;<p>3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации при регистрации на сайте App Creator или при подписке на информационную e-mail рассылку.</p></p><p>3.2. Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности, предоставляются Пользователем путём заполнения форм на сайте App Creator и включают в себя следующую информацию:<br />3.2.1. фамилию, имя, отчество Пользователя;<br />3.2.2. контактный телефон Пользователя;<br />3.2.3. адрес электронной почты (e-mail)<br />3.2.4. место жительство Пользователя (при необходимости)<br />3.2.5. фотографию (при необходимости)</p><p>3.3. Сервис защищает Данные, которые автоматически передаются при посещении страниц:<br />- IP адрес;<br />- информация из cookies;<br />- информация о браузере<br />- время доступа;<br />- реферер (адрес предыдущей страницы).</p><p>3.3.1. Отключение cookies может повлечь невозможность доступа к частям сайта , требующим авторизации.</p><p>3.3.2. Сервис осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация используется с целью предотвращения, выявления и решения технических проблем.</p><p>3.4. Любая иная персональная информация неоговоренная выше (история посещения, используемые браузеры, операционные системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев, предусмотренных в п.п. 5.2. настоящей Политики конфиденциальности.</p><p><strong>4. Цели сбора персональной информации пользователя</strong></p><p>&nbsp;<p>4.1. Персональные данные Пользователя Администрация может использовать в целях:<br />4.1.1. Идентификации Пользователя, зарегистрированного на сайте App Creator для его дальнейшей авторизации.<br />4.1.2. Предоставления Пользователю доступа к персонализированным данным сайта App Creator.<br />4.1.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования сайта App Creator, обработки запросов и заявок от Пользователя.<br />4.1.4. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.<br />4.1.5. Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.<br />4.1.6. Создания учетной записи для использования частей сайта App Creator, если Пользователь дал согласие на создание учетной записи.<br />4.1.7. Уведомления Пользователя по электронной почте.<br />4.1.8. Предоставления Пользователю эффективной технической поддержки при возникновении проблем, связанных с использованием сайта App Creator.<br />4.1.9. Предоставления Пользователю с его согласия специальных предложений, новостной рассылки и иных сведений от имени сайта App Creator.</p><strong>5. Способы и сроки обработки персональной информации</strong></p><p>&nbsp;<p>5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.</p></p><p>5.2. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.</p><p>5.3. При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об утрате или разглашении персональных данных.</p><p>5.4. Администрация принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.</p><p>5.5. Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</p><p><strong>6. Права и обязанности сторон</strong></p><p>&nbsp;<p>6.1. Пользователь вправе:</p></p><p>6.1.1. Принимать свободное решение о предоставлении своих персональных данных, необходимых для использования сайта App Creator, и давать согласие на их обработку.</p><p>6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.</p><p>6.1.3. Пользователь имеет право на получение у Администрации информации, касающейся обработки его персональных данных, если такое право не ограничено в соответствии с федеральными законами. Пользователь вправе требовать от Администрации уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав. Для этого достаточно уведомить Администрацию по указаному E-mail адресу.</p><p>6.2. Администрация обязана:</p><p>6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики конфиденциальности.</p><p>6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением п.п. 5.2. настоящей Политики Конфиденциальности.</p><p>6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте.</p><p>6.2.4. Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.</p><p><strong>Ответственность сторон</strong></p><p>&nbsp;<p>7.1. Администрация, не исполнившая свои обязательства, несёт ответственность за убытки, понесённые Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2. и 7.2. настоящей Политики Конфиденциальности.</p></p><p>7.2. В случае утраты или разглашения Конфиденциальной информации Администрация не несёт ответственность, если данная конфиденциальная информация:<br />7.2.1. Стала публичным достоянием до её утраты или разглашения.<br />7.2.2. Была получена от третьей стороны до момента её получения Администрацией Ресурса.<br />7.2.3. Была разглашена с согласия Пользователя.</p><p>7.3. Пользователь несет полную ответственность за соблюдение требований законодательства РФ, в том числе законов о рекламе, о защите авторских и смежных прав, об охране товарных знаков и знаков обслуживания, но не ограничиваясь перечисленным, включая полную ответственность за содержание и форму материалов.</p><p>7.4. Пользователь признает, что ответственность за любую информацию (в том числе, но не ограничиваясь: файлы с данными, тексты и т. д.), к которой он может иметь доступ как к части сайта App Creator, несет лицо, предоставившее такую информацию.</p><p>7.5. Пользователь соглашается, что информация, предоставленная ему как часть сайта App Creator, может являться объектом интеллектуальной собственности, права на который защищены и принадлежат другим Пользователям, партнерам или рекламодателям, которые размещают такую информацию на сайте App Creator.<br />Пользователь не вправе вносить изменения, передавать в аренду, передавать на условиях займа, продавать, распространять или создавать производные работы на основе такого Содержания (полностью или в части), за исключением случаев, когда такие действия были письменно прямо разрешены собственниками такого Содержания в соответствии с условиями отдельного соглашения.</p><p>7.6. В отношение текстовых материалов (статей, публикаций, находящихся в свободном публичном доступе на сайте App Creator) допускается их распространение при условии, что будет дана ссылка на Сервис.</p><p>7.7. Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный Пользователем в результате удаления, сбоя или невозможности сохранения какого-либо Содержания и иных коммуникационных данных, содержащихся на сайте App Creator или передаваемых через него.</p><p>7.8. Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за: использования либо невозможности использования сайта, либо отдельных сервисов; несанкционированного доступа к коммуникациям Пользователя; заявления или поведение любого третьего лица на сайте.</p><p>7.9. Администрация не несет ответственность за какую-либо информацию, размещенную пользователем на сайте App Creator, включая, но не ограничиваясь: информацию, защищенную авторским правом, без прямого согласия владельца авторского права.</p><p><strong>8. Разрешение споров</strong></p><p>&nbsp;<p>8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией, обязательным является предъявление претензии (письменного предложения или предложения в электронном виде о добровольном урегулировании спора).</p></p><p>8.2. Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно или в электронном виде уведомляет заявителя претензии о результатах рассмотрения претензии.</p><p>8.3. При не достижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Москва.</p><p>8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией применяется действующее законодательство Российской Федерации.</p><p><strong>9. Дополнительные условия</strong></p><p>&nbsp;<p>9.1. Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.</p></p><p>9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте App Creator, если иное не предусмотрено новой редакцией Политики конфиденциальности.</p><p>9.3. Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по адресу: <a href="mailto:hello@mysite.ru" target="_blank">hello@mysite.ru</a></p><p>9.4. Действующая Политика конфиденциальности размещена на странице по адресу <a href="http://mysite.ru/politika.html" target="_blank">http://mysite.ru/politika.html</a></p><p>Обновлено: 24 Сентября 2021 года</p><p><strong>г. Москва, ИП Иванов И.И., ОГРН 123456789</strong></p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'contacts',
            'lang_id'=> 1,
            'header' => 'STATIC_PAGE.CONTACT_US_HEADER',
            'content' => '<p>Moscow, Mira 111</p><p>Working hours</p><p>Mon-Fri: 9.00 - 18.00<br />Sat-Sun: weekend</p><p>Phone</p><p><a href="tel:+79256542250">+7 925 123-45-67</a></p><p>Email</p><p><a href="mailto:info@nwicode.com">info@nwicode.com</a></p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'contacts',
            'lang_id'=> 2,
            'header' => 'STATIC_PAGE.CONTACT_US_HEADER',
            'content' => '<p>г. Москва, Мира 111</p><p>Режим работы</p><p>Пн - Пт: 9.00 - 18.00<br />Сб - Вс: выходные</p><p>Телефон</p><p><a href="tel:+79256542250">+7 925 123-45-67</a></p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'template_app_privacy',
            'lang_id'=> 1,
            'header' => 'STATIC_PAGE.TEMPLATE_APP_PRIVACY_HEADER',
            'content' => '<p>Application privacy template</p><br /><p>Name: [USER_NAME]</p><br /><p>Email: [EMAIL]</p><br /><p>Application: [app_name]</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_REGISTRATION_TEMPLATE',
            'lang_id'=> 1,
            'header' => 'MAIL.TEMPLATE.MAIL_REGISTRATION_TEMPLATE_HEADER',
            'content' => '<p>Welcome to NWicode<br />------------------------------------------<br />[name],</p><p>You are joining over a million business owners and entrepreneurs who have used our tools to develop mobile apps and grow their businesses.</p><p>We know starting and running your business is hard work. NWicode helps by making planning and management more intuitive. We are here to help you succeed. If you need any help with NWicode along the way, please don&#39;t hesitate to contact us.</p><p>This email contains important account information. Please keep this for your records.</p><p>Your registration information:</p><p>Login: [email]</p><p>Password: xxxxxxxx</p><p>You can start developing right now by clicking on the following link: xxxxxxxxx</p><p>Need help with your new account?<br />Our customer advocacy team is on hand. Call us at xxxxxxx or contact us in another way.</p><p>Best wishes,<br />NWicode team</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_REGISTRATION_TEMPLATE',
            'lang_id'=> 2,
            'header' => 'MAIL.TEMPLATE.MAIL_REGISTRATION_TEMPLATE_HEADER',
            'content' => '<p>Добро пожаловать в NWicode<br />------------------------------------------<br />[name],<br /><br />Вы присоединяетесь к более чем миллиону владельцев бизнеса и предпринимателей, которые использовали наши инструменты для разработки мобильных приложений и развития своего бизнеса.<br /><br />Мы знаем, что запуск и ведение вашего бизнеса - это тяжелая работа. NWicode помогает, делая планирование и управление более интуитивно понятными. Мы здесь, чтобы помочь вам добиться успеха. Если вам нужна какая-либо помощь с NWicode по пути, пожалуйста, не стесняйтесь <strong>обращаться к нам.</strong><br /><br />Это электронное письмо содержит важную информацию об учетной записи. Пожалуйста, сохраните это для своих записей.<br /><br />Ваша регистрационная информация:<br /><br />Login: [email]</p><p>Password: xxxxxxxx<br /><br />Вы можете приступить к разработке прямо сейчас, перейдя по следующей ссылке: хххххххх<br /><br />Нужна помощь с вашей новой учетной записью?<br />Наша команда по защите интересов клиентов находится наготове. Позвоните нам по телефону ххххххх &nbsp;или <strong>свяжитесь с нами</strong> другим способом.<br /><br />С наилучшими пожеланиями,<br />команда NWicode</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_RESTORE_PASSWORD_TEMPLATE',
            'lang_id'=> 1,
            'header' => 'MAIL.TEMPLATE.MAIL_RESTORE_PASSWORD_TEMPLATE_HEADER',
            'content' => '<p><strong>Password change request</strong></p><p>[name],<br />your new password <strong>[new_password]</strong></p><p>The message is generated automatically.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_RESTORE_PASSWORD_TEMPLATE',
            'lang_id'=> 2,
            'header' => 'MAIL.TEMPLATE.MAIL_RESTORE_PASSWORD_TEMPLATE_HEADER',
            'content' => '<p><strong>Запрос на смену пароля</strong><br /><br />[name],<br />ваш новый пароль <strong>[new_password]</strong><br /><br />Сообщение сгенерировано автоматически.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'META_TITLE',
            'lang_id'=> 1,
            'header' => 'PAGE.SETTINGS_META.TITLE',
            'content' => 'APP Creator'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'META_TITLE',
            'lang_id'=> 2,
            'header' => 'PAGE.SETTINGS_META.TITLE',
            'content' => 'Коструктор мобильных приложений'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'META_DESCRIPTION',
            'lang_id'=> 1,
            'header' => 'PAGE.SETTINGS_META.TITLE',
            'content' => 'APP Creator'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'META_DESCRIPTION',
            'lang_id'=> 2,
            'header' => 'PAGE.SETTINGS_META.TITLE',
            'content' => 'Discover Amazing APP CREATOR with great build tools'
        ]);
		
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_ACTIVATION_CODE',
            'lang_id'=> 1,
            'header' => 'MAIL.TEMPLATE.MAIL_ACTIVATION_CODE_HEADER',
            'content' => '<p>Activation code</p><p><strong>[code]</strong></p><p>The message is generated automatically.</p>'
        ]);
        DB::table('static_pages')->insert([
            'code'=> 'MAIL_ACTIVATION_CODE',
            'lang_id'=> 2,
            'header' => 'MAIL.TEMPLATE.MAIL_ACTIVATION_CODE_HEADER',
            'content' => '<p>Код активации</p><p><strong>[code]</strong></p><p>Сообщение сгенерировано автоматически.</p>'
        ]);		
		
    }
}
