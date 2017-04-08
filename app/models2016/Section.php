<?php

namespace App\models2016;

/**
 * @property mixed id
 * @property mixed type
 * @property mixed title
 * @property mixed presenter
 * @property mixed level
 * @property mixed time
 * @property mixed room
 * @property mixed desc
 */
class Section extends StaticModel
{
    protected $guarded = [];

    public static $data = [

        // Workshops


        //--------------------------------------------------------------

        [
            'id' => 'intro',
            'type' => 'workshop',
            'title' => 'کارگاه لینوکس مقدماتی و شروع کار با لینوکس',
            'presenter' => 'gholizade',
            'level' => 'شروع کار',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'یک شروع عالی برای کار با سیستم عامل لینوکس. نیاز به کار با سیستم عامل لینوکس و نرم افزار های متن باز هر روز بیشتر از روز دیگر حس می شود، پس اگر شما هم می خواهید با کار با این سیستم عامل آشنا شوید، در این کارگاه ثبت نام کنید. 
شرکت‌کنندگان در روز اول این کارگاه با محیط سیستم عامل لینوکس، محیط‌های گرافیکی و دیگر قابلیت‌های آن آشنا می‌شوند. در روز دوم شرکت‌کنندگان با محیط ترمینال، فایل سیستم لینوکس، پردازش فایل‌های متنی، نصب برنامه‌های مختلف، مدیریت processها، کار با vim و... آشنا می‌شوند. در پایان دو روز ارائه‌ای با عنوان How to Live Happily in Linux خواهیم داشت که به شرکت‌کنندگان می‌آموزد چگونه تمام کارهای روزمره‌ی خود را در لینوکس انجام دهند، بدون این که به سیستم عامل دیگری نیاز داشته باشند.
جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.
سرفصل موضوعاتی که در این کارگاه ارائه می‌شوند عبارتند از:
<h3>روز اول:</h3>
<div style="direction: ltr;">
<br>
<li>An Introduction To Linux and GNU</li>
<li>Post Installation Tasks</li>
<li>Package Management and Installing a new software</li>
<li>Difference between distro and desktop and Other graphical environments</li>
<li>Network Configuration</li>
<li>Users and Groups</li>
<li>File Hierarchy</li>
<li>Simple Bash</li>
<br>
</div>
<h3>روز دوم:</h3>
<div style="direction: ltr;">
<li>An introduction to terminal</li>
<li>Basic file management</li>
<li>Find system files and place files in the correct location</li>
<li>Create and change hard and symbolic links</li>
<li>Processing text files</li>
<li>Use streams, pipes and redirects</li>
<li>Programming in Linux</li>
<li>Make and install programs from source</li>
<li>Create, monitor and kill processes</li>
<li>SSH</li>
<li>Measure and Troubleshoot Resource Usage</li>
<li>Basic network configuration and troubleshooting</li>
</div>
'
        ],

        //--------------------------------------------------------------


        [
            'id' => 'linux_pro',
            'type' => 'workshop',
            'title' => 'کارگاه لینوکس پیشرفته',
            'presenter' => 'razmnoosh',
            'presenters' => ['naderi'],
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
<div style="direction: ltr">
<h2>1.	THE LINUX FILESYSTEM</h2>
<li>a.	Filesystem Support</li>
<li>b.	Unix/Linux Filesystem Features</li>
<li>c.	Filesystem Hierarchy Standard</li>
<li>d.	Determining Disk Usage With df and du</li>
<li>e.	File Ownership</li>
<li>f.	Default Group Ownership</li>
<li>g.	File and Directory Permissions</li>
<li>h.	File Creation Permissions with umask</li>
<li>i.	SUID and SGID on files</li>
<li>j.	SGID and Sticky Bit on Directories</li>
<li>k.	User Private Group Scheme</li>
<h2>2.	MANIPULATING FILES</h2>
<li>a.	Physical Unix File Structure</li>
<li>b.	Filesystem Links</li>
<li>c.	File Extensions and Content</li>
<li>d.	Displaying Files</li>
<li>e.	Previewing Files</li>
<li>f.	Producing File Statistics</li>
<li>g.	Displaying Binary Files</li>
<li>h.	Searching the Filesystem</li>
<li>i.	Alternate Search Method</li>
<h2>3.	SHELL</h2>
<li>a.	Role of Command Shell</li>
<li>b.	Communication Channels</li>
<li>c.	File Redirection</li>
<li>d.	Piping Commands Together</li>
<li>e.	Filename Matching</li>
<li>f.	File Globbing and Wildcard Patterns</li>
<li>g.	Brace Expansion</li>
<li>h.	Shell and Environment Variables</li>
<li>i.	Key Environment Variables</li>
<li>j.	Which and Type</li>
<li>k.	General Quoting Rules</li>
<li>l.	Nesting Commands</li>
<h2>4.	ARCHIVING AND COMPRESSION</h2>
<li>a.	Archives with tar</li>
<li>b.	The gzip Compression Utility</li>
<li>c.	The bzip2 Compression Utility</li>
<li>d.	The XZ Compression Utility</li>
<h2>5.	TEXT EDITING</h2>
<li>a.	vi and Vim</li>
<li>b.	Learning Vim Basics</li>
<h2>6.	COMMAND SHELLS</h2>
<li>a.	Shells</li>
<li>b.	Identifying the Shell</li>
<li>c.	Changing the Shell</li>
<li>d.	Configuration Files</li>
<li>e.	Script Execution</li>
<li>f.	Shell Prompts</li>
<li>g.	Zsh: Zero Shell</li>
<li>h.	Zsh: Configuration Files</li>
<li>i.	Zsh: Command Line History</li>
<li>j.	Zsh: Command Editing</li>
<li>k.	Zsh: Command Completion</li>
<li>l.	Zsh: "shortcuts"</li>
<li>m.	Zsh: prompt</li>
<li>n.	Setting Resource Limits via ulimit</li>
<h2>7.	INTRODUCTION TO SHELL SCRIPTING</h2>
<li>a.	Shell Script Strengths and Weaknesses</li>
<li>b.	Example Shell Script</li>
<li>c.	Positional Parameters</li>
<li>d.	Input & Output</li>
<li>e.	Doing Math</li>
<li>f.	Comparisons with test</li>
<li>g.	Exit Status</li>
<li>h.	Conditional Statements</li>
<li>i.	Flow Control: case</li>
<li>j.	The for Loop</li>
<li>k.	The while and until Loops</li>
<h2>8.	PROCESS MANAGEMENT AND JOB CONTROL</h2>
<li>a.	What is a Process?</li>
<li>b.	Process Lifecycle</li>
<li>c.	Process States</li>
<li>d.	Viewing Processes</li>
<li>e.	Signals</li>
<li>f.	Tools to Send Signals</li>
<li>g.	nohup and disown</li>
<li>h.	Managing Processes</li>
<li>i.	Tuning Process Scheduling</li>
<li>j.	Job Control Overview</li>
<li>k.	Job Control Commands</li>
<li>l.	Persistent Shell Sessions with Screen</li>
<li>m.	Using screen</li>
<li>n.	Advanced Screen</li>
<h2>9.	AT AND CRON</h2>
<li>a.	Automating Tasks</li>
<li>b.	at/batch</li>
<li>c.	cron</li>
<li>d.	The crontab Command</li>
<li>e.	crontab Format</li>
<li>f.	/etc/cron.*/ Directories</li>
<li>g.	Anacron</li>
<h2>10.	MANAGING SOFTWARE</h2>
<li>a.	Aptitude</li>
<li>b.	Configuring APT</li>
<li>c.	New packaging System in Ubuntu 16.04</li>
<h2>11.	THE SECURE SHELL (SSH)</h2>
<li>a.	Secure Shell</li>
<li>b.	ssh and sshd Configuration</li>
<li>c.	Accessing Remote Shells</li>
<li>d.	Transferring Files</li>
<li>e.	Alternative sftp Clients</li>
<li>f.	SSH Key Management</li>
<li>g.	ssh-agent</li>
<h2>12.	MOUNTING FILESYSTEMS & MANAGING REMOVABLE MEDIA</h2>
<li>a.	Filesystems Concept Review</li>
<li>b.	Mounting Filesystems</li>
<li>c.	Filesystem Table (/etc/fstab)</li>
<li>d.	AutoFS</li>
<li>e.	Removable Media</li>#11
</div>

            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'openstack',
            'type' => 'workshop',
            'title' => 'کارگاه Openstack',
            'presenter' => 'pooyan',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'این کارگاه توضیحات معماری یک اُپن‌استک و تنظیمات اولیه از پیاده‌سازی آن به شرکت کنندگان می‌دهد.
سرفصل‌های ارائه شده در این کارگاه عبارتند از:
<div style="direction: ltr;">
<h3>Introduction to Openstack</h3>
<li>Introduction and Welcome</li>
<li>Next Gen OpenStack Data Centers</li>
<h3>Architecture Components of OpenStack</h3>
<li>What OpenStack is Not. (The History)</li>
<li>Architecture </li>
<li>Nova Compute</li>
<li>Swift - Storage</li>
<li>Glance - Image Sevice</li>
<li>Neutron - Networking</li>
<li>Horizon - Dashboard</li>
<li>Keystone - Identity Service</li>
<h3>OpenStack Demonstrations</h3>
<li>OpenStack Hypervisors</li>
<li>Choosing your Distribution platform</li>
<li>Creating your Own Openstack using DecStack</li>
</div>
'
        ],


        //--------------------------------------------------------------

        [
            'id' => 'docker-workshop',
            'type' => 'workshop',
            'title' => 'کارگاه داکر و وب سرور',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
                        <h2>کارگاه داکر و وب سرور</h2>
            <div class="col-md-12">
<p>
در سال های اخیر، نیاز به توسعه و به روز رسانی سریع آپدیت های نرم افزاری برای توسعه دهندگان امری ضروری شده.
داکر با معرفی مفهوم "Container" ها پیچیده ترین کانفیگ های سرور و شبکه را به سادگی یک خط دستور کرده است !
این به شما تضمین میکند که همیشه دقیقا همان نسخه از نرم افزاری را که می خواهید می توانید داشته باشید که می خواهید. 
دردسر ها و سردرد ها بابت عدم سازگاری نسخه های مختلف یک کتابخانه را فراموش کنید.
<br>
</p>
<p>
<strong>
در پایان این ارائه انتظار می رود شرکت کنندگان بتوانند یک وب سرور ابری بر پایه داکر را راه اندازی و نگهداری کنند.
</strong> 
</p>
<h2>سرفصل ها:</h2>
<div style="direction: ltr;">

<ul>
<li>An overview of virtualization platforms</li>
<li>What is Cloud ?
<li>Introduction to containers
<li>LXC
<li>The technology: CGroups And Kernel]
<li>Docker
<li>Enterprise DevOps Strategy
<li>The Technology: Docker Engine
<li>Install docker
<li>Basic operation with docker containers
<li>Writing DockerFiles</li>
<li>Docker images</li>
<li>Introduction to layouts</li>
<li>Managing images</li>
<li>Docker Registry + Docker Hub</li>
<li>Container monitoring and metrics</li>
<li>Container migration</li>
<li>Docker Networking       </li>
<li>Containers Storage </li>
<li>Cluster Nodes using Docker swarm</li>
<li>Docker Compose</li>
<li>Building infrastructure using docker-compose files</li>
<li>Writing simple docker-compose files</li>
<li>Core OS : Introduction & Setup</li>
<li>Google Kubernetes : Introduction</li>
<li>Webservers : Build a nginx/php stack using docker</li>
</ul>

</p>
 </div>
            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'golang',
            'type' => 'workshop',
            'title' => 'کارگاه GoLang',
            'presenter' => 'parham',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
            سرفصل‌های ارائه شده در این کارگاه عبارتند از:
<br>
<div style="direction: ltr;">
            <h2>Introduction to GoLang</h2>
<h3>The Go Programming Language</h3>
<h3>Program Elements</h3>
<li>Constants</li>
<li>Variables</li>
<li>Types</li>
<li>Types Declaration</li>
<li>Slices</li>
<li>Pointers</li>
<li>Maps</li>
<li>Statements</li>
<li>Functions</li>
<li>Method</li>
<li>Interface Types</li>
<li>Packages</li>
<h3>Concurrency</h3>
<li>GoRoutine</li>
<li>Channels</li>
<h3>Miscellaneous</h3>
<li>Go Tools</li>
<li>Beehive</li>
</div>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'python',
            'type' => 'workshop',
            'title' => 'کارگاه Python',
            'presenter' => 'bahar',
            'presenters' => ['taher'],
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
            زبان Python يکی از قدرتمندترين و سريع ترين و در عين حال ساده ترين زبان های برنامه نويسی است که در چندسال اخير٬  

تعداد توسعه دهندگان آن رشد خيره کننده ای داشته است. در حال حاضر زبان پايتون٬ به عنوان مهمترين زبان آکادميک و آموزشی٬ 

در زمينه های گوناگون از کار با الگوريتم های مهم هوش مصنوعی و يادگيری ماشين گرفته٬  تا توسعه دهندگی وب٬  طراحی و 

پياده سازی خزشگرهای وب و پروژه های دانشگاهی به کار ميرود. در اين کارگاه٬  با مهمترين خصوصيات و مزيت های زبان 

٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين کتابخانه ها و چارچوب های مبتنی بر زبان 

پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.

مهمترين خصوصيات و مزيت های زبان ٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين 

کتابخانه ها و چارچوب های مبتنی بر زبان پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.
            '
        ],


        //--------------------------------------------------------------
        [
            'id' => 'network',
            'type' => 'workshop',
            'title' => 'Network & Security',
            'presenter' => 'rahimkhani',
            'presenters' => ['khademi'],
            'level' => 'پیشرفته',
            'date' => '1,2',
            'time' => 'هر دو روز ۹:۰۰ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
     آشنایی با مباحث شبکه و امنیت در سیستم عامل لینوکس هدف اصلی این کارگاه است. در پایان این کارگاه با مفاهیم مدیریت شبکه و اصول پایه‌ای امنیت آشنا خواهید شد.
            <br>
         موضوعات و مباحثی که در این کارگاه مورد بررسی قرار می‌گیرند عبارتند از:
            <br>
<div style="direction: ltr;"> 
<li>Introduction to IP Protocol</li>
<li>IP configuration</li>
<li>Basic IP Troubleshooting tools</li>
<li>Routing</li> 
<li>Introduction to TCP Protocols</li>
<li>Basic TCP Troubleshooting tools: netstat, lsof, …</li>
<li>Netcat</li>
<li>NMAP</li>
<li>Basic socket Programming with Python</li>
<li>SCAPY: Scapy is a powerful interactive packet manipulation program</li>
<li>IPTABLES: Packet Filtering</li>
<li>TCPDUMP, WIRESHARK & TSHARK: Packet Capturing tools</li>
<li>SSH: Secure Shell</li>	
<li>wireshark</li>
<li>Network Scanning</li>
<li>Security Bassics</li>
</div>
</br>جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.برای کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
         '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'scientific',
            'type' => 'workshop',
            'title' => 'MATLAB & Scientific Tools',
            'presenter' => 'navid',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => null,
            'desc' => '
<p style="direction : rtl;">
            متلب (MATLAB) يک محيط نرم افزاری برای انجام محاسبات عددی و يک زبان برنامه نويسی نسل چهارم می باشد. نسل چهارم بدين معنی است که٬ اين زبان های برنامه نويسی يا محيط های برنامه نويسی برای اهداف خاص طراحی شده اند و از طرفی اين زبان ها هزينه برنامه نويسی٬ زمان توسعه و هزينه توسعه نرم افزار را کاهش می دهند.
            <br>
هدف از کارگاه پيش رو بيان مطالب زير می باشد:
</p>
<br>
<h3>بخش اول:</h3>
<li>معرفی نرم افزار و آموزش نصب آن در لينوکس</li>
<li>بيان جزئيات محيط نرم افزار</li>
<li>حل معادلات و ترسيم داده ها</li>
<br>
<h3>بخش دوم:</h3>
<li>نحوه ی ايجاد واسط گرافيکی</li> 
<li>معرفی تولباکس های معروف در زمينه هوش مصنوعی</li>
<li>حل چند مسئله يادگيری ماشين</li>
<br>
لازم به ذکر است که مقدمه ی بيان شده بصورت عمومی خواهد بود و مثال های تخصصی در زمينه هوش مصنوعی بيان و حل خواهند شد.
</br>جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.برای کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'embedded',
            'type' => 'workshop',
            'title' => 'Embedded Systems',
            'presenter' => 'naser',
            'presenters' => ['abolfazl', 'mehdisaj', 'amir'],
            'level' => 'متوسط',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹:۰۰ تا ۱۲:۳۰',
            'room' => null,
            'desc' => 'بخش اول: Into to System on a board
کلاس اول این کارگاه به معرفی و آموزش راه اندازی و نصب سیستم یک برد آموزشی ( رسپبری پای) و نکات مهم برای کار در محیط سیستم عامل مخصوص آن میپردازد؛ تا کارآموزان بتوانند برد خود را برای آموزش های ادامه کارگاه آماده کنند.
</br>
مهدی سجادی - مبتدی
</br>
بخش دوم: Embedded Systems: IoT Basics 1
</br>
در ادامه کارگاه Embedded Systems کارآموزان درباره کاربرد های سخت افزاری برد رسپری به عنوان یک سیستم رو برد در تعامل با یک میکرو کنترلر آشنا میشوند.
هدف از این کارگاه آشنایی کاربران با مبانی سیستم‌های درگیر در اینترنت اشیا است که سرفصل‌های ارائه شده در این کارگاه حاصل خروجی پروژه ملی اینترنت اشیای دانشگاه امیرکبیر است. 
</br>
سرفصل‌های این کارگاه عبارتند از: 
<div style="direction: ltr;" >
<li>1) Introduction to Embedded systems, Arduino and Rasp Berry Pi mini computers</li>
<li>2) Arduino: Hello World (LED on/off – Blink)</li>
<li>3) Arduino: IR detection</li>
<li>4) R­Pi: What are GPIO pins?! (+ GPIO on Python)</li>
<li>5) R­Pi: IR detection</li>
</div>
در نهایت شرکت‌کنندگان مفاهیم ابتدایی سیستم‌های نهفته را دریافته و دیدی از دنیای الکترونیک سیستم‌های اینترنت اشیا خواهند داشت.
</br>
ابولفضل دانایی - متوسط
</br>
بخش سوم: Embeded WebServer from Scratch
</br>
مباحث این کارگاه ادامه کارگاه System on a Board‌ می‌باشند. استفاده از ​یک​ سخت‌افزار بومی مبتنی بر پردازنده ARM Cortex-A8​ ​به نام ApexV210 برای راه اندازی یک وب سرور از ابتدا.
</li>مطالب قابل ارائه‌شامل موارد زیر هستند: <li>
</li>آشنایی با سیستم‌های نهفته<li>
</li>آشنایی با مفهوم cross-compile<li>
</li>آشنایی با بوت لودر محبوب u-boot و پیکربندی اولیه و کراس کامپایل​ آن​<li>
</li>آشنایی با کرنل لینوکس، پیکربندی اولیه و کراس کامپایل آن<li>
</li>آشنایی باbusybox و استفاده از آن به عنوان یک root file system ساده<li>
</li>​آماده سازی یک web server کوچک بر روی این پلتفرم​<li>
</li>انتقال برنامه‌ها<li>
</li>بوت کردن سخت‌افزار​ و مشاهده نتیجه​<li>
</br>
مهندس افشین - پیشرفته
</br>

بخش چهارم: Embedded-Systems: IoT Basics 2
</br>
این کلاس ادامه کارگاه‌های System on a Board می‌باشد در این کارگاه کارآموزان با برد خود به همراه یک میکرو کنترلر یک کاربرد ساده از ایده های قابل پیاده سازی در مورد خانه های هوشمند توسط این برد ها را آموزش میبینند. 
</br>
سرفصل‌های این کارگاه عبارتند از:
<div style="direction: ltr;">
<li>1) Introduction to Serial protocol</li>
<li>2) Defining a basic data transmission between R­Pi and Arduino using Serial interface</li>
<li>3) R­Pi checks the IR signal</li>
<li>4) R­Pi decides what to do</li>
<li>5) R­Pi orders Arduino to light on/off</li>
<li>6) Special part: Introduction to RF (wireless) protocols + Testing one of them</li>
</div>
</br>
در نهایت شرکت‌کنندگان این کارگاه‌ها توانایی طراحی و پیاده‌سازی یک سیستم واقعی که در خانه‌های هوشمند استفاده می‌شوند را خواهند داشت.

امیر رضایی - متوسط




'
        ],

        [
            'id' => 'setup',
            'type' => 'workshop',
            'title' => 'Setup Workshop',
            'presenter' => null,
            'level' => 'شروع کار',
            'date' => '0',
            'time' => 'روز صفرم - ۱۳:۰۰ تا ۱۸:۰۰',
            'room' => 'سایت کامپیوتر',
            'desc' => 'روز چهارشنبه از ساعت 13 تا 18 کارگاهی برای نصب و راه اندازی سیستم عامل لینوکس خواهیم داشت.در این کارگاه با روش نصب ubuntu، ساخت فایل سیستم های مورد نیاز و تنظیمات اولیه سیستم عامل  آشنا می شویم.
 حضور در این کارگاه رایگان است و همه می توانند در آن شرکت کنند. همچنین شرکت در این کارگاه به همه شرکت کنندگان کارگاه لینوکس مقدماتی توصیه می شود. جهت شرکت در این کارگاه از قسمت ثبت نام وارد شوید.
جهت کسب اطلاعات بیشتر به آدرس register@linuxfest.ir پیام بفرستید.
'
        ],

        // Presentations


        [
            'id' => 'iaas',
            'type' => 'presentation',
            'title' => 'Cloud Computing I: IaaS, PaaS, and Iran',
            'presenter' => 'alijavadi',
            'level' => 'پیشرفته',
            'time' => 'روز اول - ۱۴:۰۰ تا ۱۴:۳۰',
            'date' => '1',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
همیشه در دسترس بودن همواره یکی از مهم‌ترین مسائل برای شرکت‌های سرویس‌دهنده در حوزهٔ فناوری اطلاعات بوده است. توسعهٔ نرم‌افزاری و ارتقای سرویس‌هایی که در هر لحظه از شبانه‌روز کاربر دارند چالشی جدی در این زمینه است. در چند سال اخیر با گسترش تکنولوژی‌های کانتینر تحولی گسترده در نحوهٔ نگرش به این مسئله رخ داده است.
<br>
در این بخش از ارائه‌های مربوط به رایانش ابری می‌خواهیم مروری کنیم بر این چالش‌ها و مجموعه روش‌هایی که برای حل این مسئله آمده و بعضاً رفته‌اند.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'kubernetes',
            'type' => 'presentation',
            'title' => 'Cloud Computing II: Kubernetes',
            'presenter' => 'alijavadi',
            'presenters' => ['nasiri'],
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۴:۳۰ تا ۱۵:۰۰',
            'room' => 'سالن آمفی تئاتر',
            'desc' => '
در میان راه‌حل‌هایی که برای حل موضوع همیشه در دسترس بودن بر اساس کانتینر ارائه شده است، Kubernetes به چند دلیل مورد توجه خیلی از شرکت‌ها قرار گرفته است. Kubernetes در استک تکنولوژی‌های ابری وظایف دو لایهٔ Scheduling و Orchestration را انجام می‌دهد.
<br>
در بخش دوم ارائه‌های مربوط به رایانش ابری می‌خواهیم در مورد نگاه متفاوتی که مهندسین گوگل در حل مسأله داشته‌اند و در پی آن Kubernetes را خلق کرده‌اند صحبت کنیم.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker',
            'type' => 'presentation',
            'title' => 'Cloud Computing III: Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۰۰ تا ۱۵:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            <h2>داکر چیست ؟</h2>
            <div class="col-md-8">
<p>
در سال های اخیر، نیاز به توسعه و به روز رسانی سریع آپدیت های نرم افزاری برای توسعه دهندگان امری ضروری شده.
داکر با معرفی مفهوم "Container" ها پیچیده ترین کانفیگ های سرور و شبکه را به سادگی یک خط دستور کرده است !
این به شما تضمین میکند که همیشه دقیقا همان نسخه از نرم افزاری را که می خواهید می توانید داشته باشید که می خواهید. 
دردسر ها و سردرد ها بابت عدم سازگاری نسخه های مختلف یک کتابخانه را فراموش کنید.
<br>
</p>
<p>
در این ارائه علاوه بر معرفی این تکنولوژی، به این موضوع می پردازیم که چگونه داکر تمامی استارتاپ های جدید را تحت تاثیر خود قرار داده است
</p>
<p>
برای اطلاعات بیشتر در مورد این پلتفورم می توانید به این آدرس مراجعه فرمایید:
<a target="_blank" href="https://www.docker.com/what-docker">https://www.docker.com/what-docker</a>
</p>
 </div>
      <div class="col-md-2">
<img src="https://www.docker.com/sites/default/files/what-is-vm-diagram.png" class="image-responsive" width="300px">
</div>
<br>
<div class="col-md-12">
<p>
در این ارائه بعد از معرفی این پلتفرم، به کاربرد های عملی آن و ابزارهایی که استفاده از داکر را برای شرکت ها و Devops ها عملی می کنند می پردازیم.
</p>
</div>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'core_os',
            'type' => 'presentation',
            'title' => 'Cloud Computing IV: CoreOS & C-Config',
            'presenter' => 'nasiri',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
در بخش اول ارائه‌های مربوط به رایانش ابری برای لایه‌های سخت‌افزار، Virtualization و سیستم عامل چند راه‌کار متداول مطرح شد. یکی از این راه‌کارها استفاده از یک سیستم عامل مینیمال بود. CoreOS هدف خود را چنین قرار داده است.
<br>
در این بخش می‌خواهیم دربارهٔ چند نوآوری CoreOS صحبت کنیم و سپس به سراغ Cloud-Config برویم که هر چند ایده‌اش از CoreOS نبوده است، ولی CoreOS از آن به خوبی بهره برده است.
            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'good',
            'type' => 'presentation',
            'title' => 'The goodies Everyone Must Have',
            'presenter' => 'taher',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۵:۰۰ تا ۱۵:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '<p>
            ادراک در ماشین ها چگونه اتفاق می افتد ؟
دانشمندان علوم شناختی و یادگیری ماشین برای تحقیق پاسخ این سوال ازابزارهای علمی استفاده میکنند،
که از جمله آنها ابزارهایی است که در این ارائه از آنها استفاده شده:
<li>Cuda</li>
<li>Caffe</li>
<li>ROS</li>
<li>Docker</li>
 و مهمتر از همه، اینکه این ابزارها همه تحت سیستم عامل لینوکس هستند.
در این ارائه نگاهی اجمالی به مفاهیم به کار برده شده در حل مسئله شناخت اجسام در بینایی ماشین با روش شبکه های عصبی درهم تنیده (Convolutional Neural Network) در محیط لینوکس و با نظری به ساختار و نحوه استفاده از این ابزارها خواهیم داشت.
</p>
'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'dataware',
            'type' => 'presentation',
            'title' => 'Data Wherehouse and Dimensional Modeling',
            'presenter' => 'afshin',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز اول - ۱۶:۰۰ تا ۱۷:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
         لطفاً چند دقیقه بعد مجدداً تلاش نمایید تا جزئیات ارائه را مشاهده کنید...
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'ubuntu_portable',
            'type' => 'presentation',
            'title' => 'Ubuntu on Portable Devices',
            'presenter' => 'danial',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۷:۳۰ تا ۱۸:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            در سال های اخیر لینوکس و اوبونتو پیشرفت های زیادی داشته اند و اوبونتو بر روی دستگاه های قابل حمل از جمله تبلت ها نیز پشتیبانی می شود. در این ارائه جذاب از آقای بهزادی به این موضوع می پردازیم.
            '
        ],

        //--------------------------------------------------------------
        // Discussion Board

        [
            'id' => 'board',
            'type' => 'board',
            'title' => 'کسب و کارهای متن‌باز',
            'presenter' => 'danial',
            'presenters' => ['eslamifar'],
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۱۸:۰۰ تا ۱۹:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            جایی نروید! به زودی توضیحات این برد گفت‌و‌گو را فراهم می‌کنیم، اندکی صبر کنید...
            <br>
            '
        ],
        
        //--------------------------------------------------------------
        
        [
            'id' => 'lt',
            'type' => 'lightning_talks',
            'title' => 'Lightning Talks',
            'presenter' => null,
//            'presenters' => [],
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۵:۳۰ تا ۱۶:۱۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            صحبت‌های کوتاه چند دقیقه‌ای! شاید شما هم در ابتدا با شنیدن نام Lightning Talk تعجب کنید اما این نوع ارائه‌ها در اصل به نوعی ارائه‌های کوتاهی اطلاق می‌شوند که توسط افراد مختلف ارائه داده می‌شوند.
            <br>
            در روز دوم جشنواره لینوکس (جمعه) یک سری ارائه کوتاه خواهیم داشت که جزئیات آن را در زیر می‌توانید مشاهده نمایید:
             <h3>ارائه Faster and Simpler, Beyond Terminal</h3>
             <li>ارائه دهنده: سینا بهارلویی</li>
             <li>زمان: ۱۵:۳۰ تا ۱۵:۴۰</li>
             
             <h3>ارائه Gulp: One-Step builds & automation</h3>
             <li>ارائه دهنده: مسعود بنابی</li>
             <li>زمان: ۱۵:۴۰ تا ۱۵:۵۰</li>
             
             <h3>ارائه An introduction to TensorFlow</h3>
             <li>ارائه دهنده: سیاوش کاووسی</li>
             <li>زمان: ۱۵:۵۰ تا ۱۶:۰۰</li>
             
             <h3>ارائه What can we learn from a simple command?</h3>
             <li>ارائه دهنده: سجاد اعظمی</li>
             <li>زمان: ۱۶:۰۰ تا ۱۶:۱۰</li>
            <br>
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'vim',
            'type' => 'presentation',
            'title' => 'Start Using vim',
            'presenter' => 'tabrizian',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۱۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'در این ارائه ابتدا به این سوال که چرا ما باید vim را بیاموزیم پاسخ می‌دهیم و سپس درباره‌ی حالت‌های مختلف vim توضیح می‌دهیم و در آخر چند مثال از کارهای روزمره که vim آن‌ها را راحت‌تر می‌کند خواهیم گفت.'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'big_data',
            'type' => 'presentation',
            'title' => 'Big Data Computing Platforms',
            'presenter' => 'payberah',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۱۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
چکیده: در سال‌های اخیر شاهد افزایش چشمگیر تولید داده بوده‌ایم. این داده‌های بزرگ یا big data دارای مشخصات مشترکی هستند که می‌توان به حجم بالای داده، نرخ تولید بالا و تنوع محتوی اشاره کرد. برای ذخیره‌سازی و پردارش این داده‌ها، ابزارهای متنوع و زیادی تولید شده است. تعداد و تنوع موجود در این ابزارها، امکان انتخاب ابزار مناسب برای کارهای مختلف را مشکل کرده است. بعضی از این ابزارها به صورت خاص منظوره و برای کار مشخصی طراحی شده‌اند (برای مثال برای پردازش داده‌های جاری و یا گراف)، و بعضی از آنها، مانند Hadoop MapReduce و Spark، حالت کلی‌تر دارند و برای انواع پردازش‌ها می‌توانند مورد استفاده قرار بگیرند. در این ارائه، سعی داریم تا مروری بر این ابزارها داشته باشیم و به طور خلاصه بعضی از آنها را معرفی کنیم.
'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker-netw',
            'type' => 'presentation',
            'title' => 'Low Level Networking Inside Docker',
            'presenter' => 'tim',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۴:۰۰ تا ۱۴:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'امروزه شبکه‌های نرم افزار بنیان که در آن‌ها سعی بر کنترل شبکه بر اساس نرم افزار می‌باشد به سرعت در حال گسترش است، در کنار شبکه‌های نرم افزار بنیان ایده‌ی پیاده‌سازی عملیات‌های شبکه مثل سوئیچینگ نیز به صورت نرم افزاری رو به گسترش نهاده است، در همه این ایده‌ها مشکل اصلی تعداد بسته‌هایی است که می‌توان به صورت نرم افزاری پردازش نمود، پلتفرم NetVM قصد حل این مشکل را دارد.'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'iot',
            'type' => 'presentation',
            'title' => 'Internet of Things and IPv6',
            'presenter' => 'parham',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۱۴:۳۰ تا ۱۵:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
            امروزه اینترنت اشیا بسیار گسترده شده است و در بسیاری از زمینه‌ها مطرح شده است. نسخه ۶ام پروتکل IP یکی گزینه‌های مطرح برای ایجاد ارتباط در اینترنت اشیا می‌باشد، در این ارائه می‌خواهیم مشکلات و مزایای استفاده از IPv6 در اینترنت اشیا را بررسی نماییم.
            '
        ],

        //--------------------------------------------------------------


    ];

}
