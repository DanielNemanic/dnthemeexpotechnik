<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Themes</title>


    <link rel="stylesheet/less" type="text/css" href="custom/dnexpotechnik.less" >

    <script type="text/javascript">less = { env: 'development' };</script>
    <script type="text/javascript" src="less.js" ></script>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="node_modules/uikit/dist/js/uikit.js"></script>
    <script type="text/javascript" src="node_modules/uikit/dist/js/uikit-icons.js"></script>

</head>
<body>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
        <a href="/"><img src="../Icons/expotechnik/ET_horizontal_white_nav.png" class="Logo" /></a>

        <ul class="uk-navbar-nav uk-hidden-small">
            <li class="uk-active"><a href="/"><span class=""></span>Home</a></li>
            <li><a href="/user/login/"><span class=""></span>Login</a></li>
            <li><a href="/user/registrieren/"><span class=""></span>Registrieren</a></li>
            <li ><a href="/blog/"><span class=""></span>News</a></li>
            <li ><a href="/ueber-mich/"><span class=""></span>New Mail Groups</a></li>
            <li ><a href="/kontakt/"><span class=""></span>Products & Prices</a></li>
            <li ><a href="/impressum/"><span class=""></span>HelpDesk</a></li>
            <li >
                <a href="/shop/"><span class=""></span>Instructions</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="/"><span class=""></span>Home</a></li>
                        <li><a href="/user/login/"><span class=""></span>Login</a></li>
                        <li><a href="/user/registrieren/"><span class=""></span>Registrieren</a></li>
                        <li ><a href="/blog/"><span class=""></span>Blog</a></li>
                        <li ><a href="/ueber-mich/"><span class=""></span>Über Mich</a></li>
                        <li ><a href="/kontakt/"><span class=""></span>Kontakt</a></li>
                        <li ><a href="/impressum/"><span class=""></span>Impressum</a></li>
                    </ul>
                </div>
            </li>
            <li ><a href="/impressum/"><span class=""></span>HelpDesk</a></li>
        </ul>
        <ul class="uk-navbar-nav ">
            <li>
                <div class="uk-offcanvas-content">
                    <a href="#offcanvas" class="uk-navbar-toggle" uk-toggle uk-navbar-toggle-icon ></a>
                    <div id="offcanvas"  uk-offcanvas="mode: slide">
                        <div class="uk-offcanvas-bar">
                            <button class="uk-offcanvas-close" type="button" uk-close></button>
                            <div class="uk-card uk-card-large">
                                <p>
                                    <a class="uk-navbar-brand" href="/"> DanisKreativWelt</a>
                                </p>
                            </div>

                            <ul class="uk-nav uk-nav-default uk-nav-parent-icon" uk-nav="multiple:true;toggle:> a.SubLink">
                                <li class="uk-active"><a href="/"><span class=""></span>Home</a></li>
                                <li><a href="/user/login/"><span class=""></span>Login</a></li>
                                <li><a href="/user/registrieren/"><span class=""></span>Registrieren</a></li>
                                <li><a href="/blog/"><span class=""></span>Blog</a></li>
                                <li><a href="/ueber-mich/"><span class=""></span>Über Mich</a></li>
                                <li><a href="/kontakt/"><span class=""></span>Kontakt</a></li>
                                <li><a href="/impressum/"><span class=""></span>Impressum</a></li>
                                <li class="uk-parent">
                                    <a href="#" class="SubLink"></a>
                                    <a href="/shop/"><span class=""></span>Shop</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#">Sub item</a></li>
                                        <li>
                                            <a href="#">Sub item</a>
                                            <ul>
                                                <li><a href="#">Sub item</a></li>
                                                <li><a href="#">Sub item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="uk-nav-divider"></li>
                                <li >
                                    <span uk-icon="icon: sign-out"></span> Sign out
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<noscript>
    &lt;div class="jumbotron"&gt;
    &lt;h2&gt; Hallo,&lt;br&gt;
    auf dieser Seite wird JavaScript benötigt.&lt;br&gt;
    Bitte aktivieren Sie dies in Ihren Einstellungen, da sonst Fehler entstehen und die Seite nicht richtig ausgeführt wird.
    &lt;/h2&gt;

    &lt;/div&gt;
</noscript>

<!--TYPO3SEARCH_begin-->

<?php
function getContent() {
    return '
        <article class="uk-article">

            <h2 class="uk-article-title">Hallo...</h2>

            <p class="uk-article-meta">

            </p>
            <hr class="uk-article-divider uk-grid-margin">

            <div class="uk-grid uk-clearfix uk-grid-margin uk-row-first">
                <div class="uk-width-1-1">
                    <p>... hier entsteht eine neue Seite rum um das Thema Stampin Up.
                    </p>
                    <p>&nbsp;</p>
                    <p>Seien Sie gespannt.</p>
                </div>
            </div>
        </article>    
    ';
}

function getSidebar() {
    return '
<div class="uk-width-small-1-1 uk-width-medium-2-10 uk-width-large-2-10 LeftSide uk-row-first">
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" uk-nav="multiple:true;toggle:> a.SubLink">
            <li><a href="/extensions/aimeos/"><span class=""></span>Aimeos</a></li>
            <li><a href="/extensions/dnbook/"><span class=""></span>DNBook</a></li>
            <li><a href="/extensions/dnbusinesscard/"><span class=""></span>DNBusinessCard</a></li>
            <li><a href="/extensions/dnetreports/"><span class=""></span>DNETReports</a></li>
            <li><a href="/extensions/dnexponatsliste/"><span class=""></span>DNExponatsliste</a></li>
            <li><a href="/extensions/dnfilecomments/"><span class=""></span>DNFileComments</a></li>
            <li><a href="/extensions/dnftpaccounts/"><span class=""></span>DNFTPAccounts</a></li>
            <li class="uk-parent" >
                <a href="#" class="SubLink"></a>
                <a href="/extensions/dnnavision/"><span class=""></span>DNNavision</a>
                <ul class="uk-nav-sub">
                    <li><a href="/extensions/dnnavision/itemlist/"><span class=""></span>Itemlist</a></li>
                </ul>
            </li>
            <li><a href="/extensions/dnpasswordmanager/"><span class=""></span>DNPasswordManager</a></li>
            <li><a href="/extensions/dnpraesenzliste/"><span class=""></span>DNPräsenzliste</a></li>
            <li><a href="/extensions/dnrssreader/"><span class=""></span>DNRSSReader</a></li>
            <li><a href="/extensions/dnsecurelogin/"><span class=""></span>DNSecureLogin</a></li>
            <li><a href="/extensions/dnticket/"><span class=""></span>DNTicket</a></li>
            <li><a href="/extensions/dnyouripadress/"><span class=""></span>DNYourIPAdress</a></li>
            <li><a href="/extensions/news/"><span class=""></span>News</a></li>
            <li><a href="/extensions/typo3-forum/"><span class=""></span>Typo3 Forum</a></li>
            <li><a href="/extensions/toctoc/"><span class=""></span>TocToc</a></li>
        </ul>                  
</div>    
    ';
}
?>

<div class="uk-section uk-section-small block">
    <div class="uk-width-1-1 ">
        <?php echo getContent(); ?>
    </div>
</div>

<div class="uk-section uk-section-small block">
    <div class="uk-width-1-1 ">
        <?php echo getContent(); ?>
    </div>
</div>

<div class="uk-section uk-section-small uk-container" >
    <div class="uk-grid-small uk-grid-match" uk-grid>
        <div class="uk-width-1-5@m">
            <?php echo getSidebar(); ?>
        </div>
        <div class="uk-width-3-5@m">
            <?php echo getContent(); ?>
        </div>
        <div class="uk-width-1-5@m">
            <?php echo getSidebar(); ?>
        </div>
    </div>
</div>
<div class="uk-section uk-section-small uk-container">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-match" uk-grid>
            <div class="uk-width-1-3@s uk-width-1-4@m">
                <?php echo getSidebar(); ?>
            </div>
            <div class="uk-width-2-3@s uk-width-3-4@m">
                <?php echo getContent(); ?>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-match" uk-grid>
            <div class="uk-width-2-3@s uk-width-3-4@m">
                <?php echo getContent(); ?>
            </div>
            <div class="uk-width-1-3@s uk-width-1-4@m">
                <?php echo getSidebar(); ?>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-section-small Footer uk-light uk-background-secondary">
    <div class="uk-container uk-text-center ">
        <a href="/">
            ET Global Exhibig Group
        </a>
    </div>
    <footer class="uk-container uk-text-center">
        <a href="http://etglobal.com" target="_blank" title="ET Global Exhibig Group">
            <span uk-icon="" class="uk-icon-button uk-button-default uk-margin-small-right" >E</span>
        </a>
        <a href="https://www.facebook.com/ETGlobalExhibitGroup" target="_blank" title="Follow ET Global Exhibig Group via Facebook">
            <span uk-icon="icon: facebook" class="uk-icon-button uk-button-default uk-margin-small-right" ></span>
        </a>
        <a href="https://twitter.com/ETGlobal_DE" target="_blank" title="Follow ET Global Exhibig Group via Twitter">
            <span uk-icon="icon: twitter" class="uk-icon-button uk-button-default uk-margin-small-right" ></span>
        </a>
        <a href=".uk-navbar" class="uk-position-right" uk-scroll uk-totop></a>
    </footer>
</div>

</body>
</html>