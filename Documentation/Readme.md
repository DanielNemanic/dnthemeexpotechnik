<h1>Installationsanleitung</h1>

<h3>Backend Einstellungen</h3>
<pre>
options{
	pageTree.showPageIdWithTitle = 1
}
</pre>

<h3>System Wide Configuration:</h3>
<pre>
BE      -> warning_email_addr       Mail@Addess.de
MAIL    -> defaultMailFromAddress   Mail@Addess.de
MAIL    -> defaultMailFromName      E3 Group
SYS     -> UTF8filesystem           true
SYS     -> phpTimeZone              UTC+1
</pre>

<h3>TypoScript hinzufügen</h3>
<pre>
Constants:
@import 'EXT:dnthemeexpotechnik/Configuration/TypoScript/constants.typoscript'

Typoscript:
@import 'EXT:dnthemeexpotechnik/Configuration/TypoScript/setup.typoscript'
</pre>

<h3>SiteConfiguration:</h3>
<pre>
routeEnhancers:
  FeLogin:
    type: Extbase
    limitToPages: [****]
    extension: Felogin
    plugin: Login
    routes:
      - routePath: '/forgotPassword/'
        _controller: 'PasswordRecovery::recovery'
      - routePath: '/'
        _controller: 'Login::login'
</pre>
