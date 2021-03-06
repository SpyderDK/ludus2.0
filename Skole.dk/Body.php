<?php
// starter en session
session_start();
?>
<!DOCTYPE html>
<html lang="da">
<head>
                
                
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <title>B-Ludus 2.0</title>
    <meta name="description" content="!BODY! Velkommen til ludus 2.0 ">
    
    <link rel="stylesheet" type="text/css" href="BMain.css">
    <link rel="stylesheet" type="text/css" href="BText.css">

</head>

<body class="show-update-notification     frontpage var-1">
<!--
    <div id="siteMenu">
        <div id="sitemenu_Headmenu" class="SiteMenu__component SiteMenu__show-menu">
            <div class="SiteMenu__container container">
                <div class="SiteMenu__block mb-5">
                    <div class="SiteMenu__block-head">
                        <a href="Body.html" target="_parent" class="SiteMenu__block-head-logo" title="Til forsiden">
                            <img alt="Logo" src="">
                        </a>
                        <button type="button" class="SiteMenu__block-head-close">
                            <img alt="close" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDUwICg1NDk4MykgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+aWNvbl9jbG9zZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJpY29uX2Nsb3NlIiBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8cG9seWdvbiBpZD0iU2hhcGUiIHBvaW50cz0iMTQuMyAwLjIgOC41IDUuOSAyLjcgMC4yIDAuOSAxLjkgNi43IDcuNyAwLjkgMTMuNSAyLjcgMTUuMyA4LjUgOS41IDE0LjMgMTUuMyAxNiAxMy41IDEwLjMgNy43IDE2IDEuOSI+PC9wb2x5Z29uPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+Cg==">
                        </button>
                    </div>
                    <hr class="dotted-spacer dotted-spacer--blue">
                    <nav id="sitemenu-block-body" class="SiteMenu__block-body">
                        <div class="SiteMenu__block-section-menu row">
                            <div class="col-12 col-lg-4">
                                <div class="SiteMenu__block-section-menu-list-head">
                                    <a href="" class="font-maison">Undervisningsbrug</a>
                                </div>
                                <ul class="SiteMenu__block-section-menu-list-links">
                                    <li class="SiteMenu__listItem">
                                        <a href="Skema.html">Skema</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Aflevering.html">Aflevering</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Lektier.html">Lektier</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Dokumenter.html">Dokumenter</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Bøger.html" target="_blank">Bøger</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="SiteMenu__block-section-menu-list-head">
                                    <a href="" class="font-maison">Andet</a>
                                </div>
                                <ul class="SiteMenu__block-section-menu-list-links">
                                    <li class="SiteMenu__listItem">
                                        <a href="Tradium_nyheder.html">Seneste nyheder</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Beskeder.html">Beskeder</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Studieplan.html">Studieplan</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Kalender.html">Kalendar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="SiteMenu__block-section-menu-list-head">
                                    <a href="" class="font-maison">Indstillinger</a>
                                </div>
                                <ul class="SiteMenu__block-section-menu-list-links">
                                    <li class="SiteMenu__listItem">
                                        <a href="Indstillinger.html">Indstillinger</a>
                                    </li>
                                    <li class="SiteMenu__listItem">
                                        <a href="Support.html">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="SiteMenu__block-bottom-menu">
                            <ul>
                                <li class="SiteMenu__block-nav-link SiteMenu__listItem">
                                    <a href="Log__ud.html">Log ud</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="SiteMenu__block-body-dotted-spacer dotted-spacer dotted-spacer--blue">
                    </nav>
                </div>
            </div>
            <div aria-hidden="true" role="button" class="SiteMenu__overlay dotted-spacer dotted-spacer--blue"></div>
        </div>
    </div>
-->


<div id="Header-nav-bar">
    <header class="Header__siteHeader">
        <div class="Header__container container">
            <div class="row">
                <div class="Header__logoColumn col-12">
                    <a href="Body.html" title="Forside" class="d-inline-block">
                        <figure class="Header__logoColumn-logo"><img alt="Logo" src=""></figure>
                    </a>
                </div>
                <div class="Header__menuColumn col-12">
                    <ul class="Header__menuColumn-menuList">
                        <li class="Header__menuItem">
                            <a title="Skema" class="Header__menuItem-link" href="Skema.html">Skema</a>
                        </li>
                        <li class="Header__menuItem">
                            <a title="Aflevering" class="Header__menuItem-link" href="Aflevering.html">Aflevering</a>
                        </li>
                        <li class="Header__menuItem">
                            <a title="Dokumenter" class="Header__menuItem-link" href="Dokumenter.html">Dokumenter</a>
                        </li>
                        <li class="Header__menuItem--search">
                            <button type="button"></button>
                        </li>
                        <li class="Header__menuItem--hamburger-menu">
                            <button type="button">
                                <span class="Header__iconMenu"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>













    <div class="content-wrapper full-page-overflow" style="position: relative;">
            <div class="inner-wrapper">
                <div class="background-banner d-none d-lg-block sticky-element static-bottom" style="top: 0px;">
                    <div class="wallpaper-wrapper">
                        <div id="Wallpaper_baggrund" class="dfp-top-wallpaper banner-no-margin banner"></div>
                    </div>
                </div>
            <div class="container bg" id="content">
                <div class="banner-pt-10 banner-mb-10 bg-white d-lg-none"></div>
                <div class="row m-0 background-for-wallpaper">
                    <div class="col-12 px-0 px-lg-3">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 mb-2">
                                <div id="white-bar ">
                                    <article class="NewsTeaser__teaser NewsTeaser__teaser-fullwidth-horizontal">
                                        <div class="NewsTeaser__teaser-description">
                                        <a href="Aflevering.html" class="NewsTeaser__teaser-section-link font-maison">Opgave overblik</a>
                                        <a class="NewsTeaser__teaser-link" href="Aflevering.html">
                                        <h2 class="NewsTeaser__teaser-header">Du har nu kun X afleveringer tilbage</h2></a></div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                            <div id="black bar">
                                <article class="NewsTeaser__teaser NewsTeaser__teaser-fullwidth-horizontal NewsTeaser__teaser-dark NewsTeaser__teaser-with-image">
                                    <div class="NewsTeaser__teaser-description">
                                        <a href="Aflevering.html" class="NewsTeaser__teaser-section-link font-maison">Manglende opgaver</a>
                                        <a class="NewsTeaser__teaser-link" href="Aflevering.html">
                                            <h1 class="NewsTeaser__teaser-header">Du mangler og aflevere X afleveringer</h1>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-8 mb-0 main order-1 order-md-1 order-lg-1">
                                <div class="graph-with-top-bottom-container">
                                    <div class="react-component mb-2 rendered" > 
                                        <div>
                                            <div> <!-- Dette nedstående kode er hentet fra https://www.nordnet.dk/dk og er blevet rettet til det vi har -->
                                                <div class="HeightTransition__wrapper">
                                                    <div class="InstrumentGraph InstrumentGraph__InstrumentGraph">
                                                        <div class="Graph Graph__Graph">
                                                            <div class="Graph__graph Graph__Graph__graph Graph__container Graph__Graph__container-enter-done">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="TopBottom TopBottom__TopBottom">
                                                     <!-- Fulde ramme til Skema/Lektie kassen-->
                                                    <div class="TopBottom__container TopBottom__TopBottom__container">
                                                        <div class="TopBottom__TopBottom__lists TopBottom__lists TopBottom__TopBottom__lists-enter-done">
                                                            <div class="TopBottom-InstrumentList InstrumentList__TopBottom-InstrumentList">
                                                                <div class="TopBottom-InstrumentList__header InstrumentList__TopBottom-InstrumentList__header">
                                                                     <!-- Skema titel-->
                                                                    <h3 class="TopBottom-InstrumentList__title InstrumentList__TopBottom-InstrumentList__title">Skema</h3>
                                                                </div>
                                                                <ol class="TopBottom-InstrumentList__list InstrumentList__TopBottom-InstrumentList__list">
                                                                    <li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-fifth Instrument__TopBottom-Instrument--position-fifth elements-list-5 Instrument__elements-list-5" style="top: 188px; height: 43px;">
                                                                        <div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder">
                                                                            
                                                                            
                                                                                    
                                                                                </div>
                                                                                <div class="HeightTransition__wrapper">
                                                                                   
                                                                                <div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content">
                                                                                        <div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left">
                                                                                            <h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument">
                                                                                                <a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Skema.html">Digital design og udvikling</a>
                                                                                            </h4>
                                                                                            </div>
                                                                                            <div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right">
                                                                                                <div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange">
                                                                                                    
                                                                                                </div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-first Instrument__TopBottom-Instrument--position-first elements-list-5 Instrument__elements-list-5" style="top: 0px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Skema.html">Digital design og udvikling</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-fourth Instrument__TopBottom-Instrument--position-fourth elements-list-5 Instrument__elements-list-5" style="top: 141px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Skema.html">>Digital design og udvikling</a></h4><span class="TopBottom-Instrument__volume Instrument__TopBottom-Instrument__volume">VOL 2.363.652</span></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-third Instrument__TopBottom-Instrument--position-third elements-list-5 Instrument__elements-list-5" style="top: 94px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Skema.html">Dansk</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-second Instrument__TopBottom-Instrument--position-second elements-list-5 Instrument__elements-list-5" style="top: 47px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Skema.html">Matematik</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li></ol></div><div class="TopBottom-InstrumentList InstrumentList__TopBottom-InstrumentList"><div class="TopBottom-InstrumentList__header InstrumentList__TopBottom-InstrumentList__header"><h3 class="TopBottom-InstrumentList__title InstrumentList__TopBottom-InstrumentList__title">Lektie</h3></div><ol class="TopBottom-InstrumentList__list InstrumentList__TopBottom-InstrumentList__list"><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-first Instrument__TopBottom-Instrument--position-first elements-list-5 Instrument__elements-list-5" style="top: 0px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Lektie.html">Projekt</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-third Instrument__TopBottom-Instrument--position-third elements-list-5 Instrument__elements-list-5" style="top: 94px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Lektie.html">Slavenation DK</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-second Instrument__TopBottom-Instrument--position-second elements-list-5 Instrument__elements-list-5" style="top: 47px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Lektie.html">Vektorer i rummet</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-fourth Instrument__TopBottom-Instrument--position-fourth elements-list-5 Instrument__elements-list-5" style="top: 141px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Lektie.html">Projekt</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li><li class="TopBottom-Instrument Instrument__TopBottom-Instrument TopBottom-Instrument--position-fifth Instrument__TopBottom-Instrument--position-fifth elements-list-5 Instrument__elements-list-5" style="top: 188px; height: 43px;"><div class="TopBottom-Instrument__watchlist__placeholder Instrument__TopBottom-Instrument__watchlist__placeholder"></div><div class="TopBottom-Instrument__content Instrument__TopBottom-Instrument__content"><div class="TopBottom-Instrument__content__left Instrument__TopBottom-Instrument__content__left"><h4 class="TopBottom-Instrument__instrument Instrument__TopBottom-Instrument__instrument"><a class="TopBottom-Instrument__instrument__link Instrument__TopBottom-Instrument__instrument__link" href="Lektie.html">Projekt</a></h4></div><div class="TopBottom-Instrument__content__right Instrument__TopBottom-Instrument__content__right"><div class="TopBottom-Instrument__relativeChange__wrapper Instrument__TopBottom-Instrument__relativeChange__wrapper TopBottom-Instrument__relativeChange__wrapper--negativeChange Instrument__TopBottom-Instrument__relativeChange__wrapper--negativeChange"></div></div></div></li></ol></div></div></div></div>
                                                                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                <div class="d-block d-md-none banner-negative-mt-5 banner-mb-20 mb-1 p-0">
                                </div>
                        </div>
                    </div>

                        <div>
   

</div>
                

                    <!-- SENESTE NYHEDER-->
                        <div class="col-12 col-lg-4 mb-0 latest-news sidebar order-3 order-md-3 order-lg-2">
                            <div id="news-list" class="react-component mb-2 rendered">
                                <div class="LatestNews__wrapper">
                                <h2>Seneste nyheder</h2>
                                <ul>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">10:37</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">10:08</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">90:50</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">09:45</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">08:08</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">10:08</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                    <li class="LatestNews__row">
                                        <div class="LatestNews__date">
                                            <time class="font-maison">13:08</time>
                                            <span class="LatestNews__category font-maison">Nyheder</span>
                                        </div>
                                        <a href="Tradium_nyheder.html" class="LatestNews__title">Du har måske fået coronavirus såååå væk fra skolen du</a>
                                    </li>
                                </ul>
                                <div class="LatestNews__more"></div>
                                
                                </div>
                            </div>

                            
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>
    </div>
    </div>

    
                                            <!-- FOOTER -->

        <div id="react_component_5e957f0719b924.37361623">
            <footer class="Footer__component font-maison">
                <div class="container-fluid">
                    <div class="Footer__logoContainer row">
                        <div class="Footer__container container">
                            <h1>VORES LOGO. </h1>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

                                        
</body>
</html>
