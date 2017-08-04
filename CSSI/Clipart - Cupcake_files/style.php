/*Css section for main widget. Inside content field. */
/*all deleted rules are in cssbackup*/


.underline
{
    border-bottom: 1px solid #DDDDDD;
}


div#container ul, .sidebox ul {padding:0px; list-style: none; }
.sidebox ul { margin:0px;}
ol { list-style-position: inside; }
p { line-height: 160%; margin-bottom:1em; }
html, body, div, span, applet, img, object, form, label, #search-i, #s-button{
  /** @rejon nuked 20150514 because think redundant with bootstrap
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-style: inherit;
    font-size: 100%;
    font-family: inherit;
    vertical-align: baseline;
    background: transparent; */
}

ul {
    list-style: none; 
}

ul, ol, li {
    padding: 0;
    margin: 0;
}

:focus { outline: 0; }
body {
    padding: 0;
    margin: 0;
    font-size: 9pt;
    color: #000;
    height: 100%;
    background: #FFF;
    text-align: center;
    line-height: 1em;
}
img { border: 0;}


#search_text {
    padding: 1px 3px;
    color: #777;
    font-weight: bold;
    font-size: 11pt;
}

.clear { clear: both; font-size: 0.3pt;}
.clearfix:after {
content: ".";
display: block;
clear: both;
visibility: hidden;
line-height: 0;
height: 0;
}
.clearfix { display: block;}
html[xmlns] .clearfix { display: block;}
* html .clearfix { height: 1%;}
#main {
    width: 960px;
    text-align: left;
    margin: 0 auto;
}

/* see flex header */
#header {
    height: 46px;
    background-color: #4e9a06;
    margin: 0 16px;
    position: relative;
}


.barrier {
    border: none; 
    height: 1px;
    color: #ddd;
    background-color: #ddd; 
    margin-bottom: 16px;
}

.cleartotal {
    clear: both; 
}

.ucfirst {
  text-transform:capitalize; 
}

#logo {
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    left: 11px;
    color: #FFF;
    font-size: 30pt;
    font-weight: bold;
    line-height: 0;
}
#logo a:link, #logo a:visited { color: #FFF; }

#logged {
    color: #FFF;
    font-size: 9pt;
    text-align: right;
    padding: 14px 20px 20px 10px;
}
#logged b { color: #FFF; margin:0 5px 0 5px;}
#logged a:link, #logged a:visited { color: #FFF; margin:0 5px 0 5px; font-size:14px;}
#logged a:hover, #logged a:active { text-decoration: underline; }

#upload-menu {
    color: #FFF;
    font-size: 9pt;
    text-align: right;
    padding: 14px 20px 20px 10px;
}

#upload-menu a:link, #upload-menu a:visited { color: #FFF; margin:0 5px 0 5px;}
#upload-menu a:hover, #upload-menu a:active { text-decoration: none; }

#search {
    text-align: center;
    padding: 0 20px 0 0;
}
#search-i {
    /* @rejon nuked 20150514
  background: #FFF; */
}

#mainnav {
    margin: 0px 16px 0px;
    background-color: #e2e2e2;
    border: 1px solid #ccc;
}
#mainnav li {
    height: 39px;
    line-height: 39px;
    overflow: hidden;
    float: left;
    color: #2e3436;
}
#mainnav li a:link, #mainnav li a:visited {
    color: #2e3436;
    text-decoration: none;
    display: block;
    padding: 0 0.62em;
    font-size: 14pt;
    background-color: #e2e2e2;
    border-right: 1px solid #ccc;
}
#mainnav li a:hover, #mainnav li a:active { background: #fff; }

#mainnav li.active a {
    color: #FFF;
    background-color: #424544;
}


#logged a#uploadshare:hover {
   text-decoration: none;
   border-bottom: none;
}


#content {
   margin: 0 16px;
   padding: 18px 20px;
   border-left: 1px solid #ccc;
   border-right: 1px solid #ccc;
}

#content h2 img { position: relative; top: 3px; }

#content h4 {
    line-height: 14pt; 
}

#content h4 a {
    /* @rejon 20150615
  color: #555753; */
}

#sidebar-i { width: 255px; float: right; }
#sidebar-i h3 {
    font-size: 13.5pt;
    font-weight: normal;
    line-height: 2.3;
    margin-left: 30px;
}
#sidebar-i h3 a:link, #sidebar-i h3 a:visited {  }
#sidebar-i h3#f-e-p {
    background: url(none);
    color: #555753;
    margin-left: 0;
    text-align: center;
}
#sidebar-i h3#f-e-p a:link, #sidebar-i h3#f-e-p a:visited { color: #555753; }
#onindex {
    padding: 0 0 20px 30px;
    color: #8a8c87;
    line-height: 1.3;
}
#onindex p {
    margin-left: -30px;
    text-align: center;
    position: relative;
}
#onindex p #sitepick-index { right: 10px; top: 10px; position: absolute; }
#onindex p img { max-width: 250px; }
* html #onindex p img { width: 250px; }
#onindex a:link, #onindex a:visited { color: #8a8c87; }
#onindex a:link strong, #onindex a:visited strong {
    color: #555753;
    font-weight: bold;
    display: block;
    font-size: 11pt;
    padding: 10px 0 0 0;
}
#onindex a:hover, #onindex a:active { text-decoration: none; color: #000; }
#onindex a:hover strong, #onindex a:active strong { color: #000; }
#sidebar-nav { padding: 5px 0 20px 0; margin-left: 30px; }
#sidebar-nav li {
    font-size: 12pt;
    line-height: 1.35;
    padding: 0 0 0 20px;
}
#sidebar-nav li a:link, #sidebar-nav li a:visited { color: #555753; }
#recent { padding: 0 0 20px 0; margin-left: 30px; }
#recent strong {
    display: block;
    font-weight: normal;
    font-size: 13.5pt;
    line-height: 1.2;
}
#recent li {
   color: #888a85;
   padding: 0 0 5px 20px;
   min-height: 1%;
   background: url(/assets/ocal_skin/images/dot.png) 0 6px no-repeat;
}
* html #recent li { height: 1%; }
#recent li a:link, #recent li a:visited { color: #888a85; }
#recent li a:hover, #recent li a:active { color: #000; text-decoration: none; }


#links {
    height: 45px;
    background-color: #4f514d;
    color: #FFF;
    font-size: 0.9em;
    height: 30px;
    line-height: 30px;
    text-align: center;
}
#links a:link, #links a:visited { color: #FFF; text-decoration: none; }
#links a:hover, #links a:active { text-decoration: underline; }

/* For recent */
#sidebar-r { width: 322px; float: right; margin-right: -14px;  }
* html #sidebar-r { display: inline; }
#p-tags, #categories, #stats, #u-list, #f-about, .f-sdb-d {
    margin: 0 24px 18px 0;
}
#p-tags ul {

    padding: 0 17px 12px;
    font-size: 16pt;
}
#p-tags ul li, #fortagspage li {
    display: inline;
    padding: 0 12px 0 0;
    line-height: 1.3;
}
#p-tags ul a:link, #p-tags ul a:visited { text-decoration: underline; }
#fortagspage a:link, #fortagspage a:visited { color: #555; }
#p-tags ul a:hover, #p-tags ul a:active { text-decoration: none; }
#p-tags .t1 { font-size: 100%; }
#p-tags .t2 { font-size: 80%; }
#p-tags .t3 { font-size: 60%; }
#p-tags .t4 { font-size: 40%; }
#categories a:link, #categories a:visited { color: #000; }
#categories a:hover, #categories a:active { text-decoration: underline;}
#categories ul {
    float: left;
    padding: 5px 0 15px 17px;
    font-size: 10pt;
    line-height: 1.5;
}
#categories ul li { width: 89px;}
#stats div {
    padding: 5px 0 15px;
}
#stats h3 { font-size: 10.5pt; }
#stats div dl {
    padding: 0 25px 0 0;
    line-height: 1.5;
    font-size: 10.5pt;
}
#stats div dt {
    float: left;
    clear: both;
    color: #555753;
    font-weight: bold;
}
#stats div dd { text-align: right; color: #b2b3b0; }
#recent-img { position: relative; float: left; width: 572px;}

#recent-img h3#toptitle {
  margin: 0 15px 10px 0; 
  border-bottom: none; 
  padding-bottom: 0px;
}
#recent-img h3 {
  width: 90%;
  color: #777;
  font-size: 16pt;
  clear: both;
  font-weight: normal;
  margin: 0 15px 25px 0;
  border-bottom: 1px solid #DDD;
  padding-bottom: 8px;
}


#content .recent-img-d { padding: 0px; }
.r-img { width: 280px; float: left; height: 100px; border-right: 5px solid #FFF; margin-bottom: 15px; overflow: hidden;}
* html .r-img { overflow: hidden; }
.r-img div.r-img-i { float: left; width: 110px; }
.r-img img { max-width: 100%; height: auto; max-height: 100px; }
.r-img .small_stars { padding: 3px 0; }
.r-img h4 {
    font-size: 11pt;
    line-height: 1.2;
    padding: 3px 0 3px;
    font-weight: bold;
    display:inline;
}
.r-img p {
    color: #555753;
    font-size: 9pt;
    line-height: 1.1;
  margin:0px;
}
.r-img p a:link, .r-img p a:visited { color: #555753; font-weight: bold; }
.r-img .stars { display: block; margin-top: 5px; }
.r-img-i { height: 100px;text-align: center;}
.r-img-t { float:left;}

    .clipart-thumb .wrap {
        background-size: 0px 0px;
    }
    
    .svg .clipart-thumb .wrap {
        height: 100%;
        width: 90%;
        display: block;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
    }
    
    .clipart-thumb img {
        visibility: visible;
    }
    
    .svg .clipart-thumb img {
        visibility: visible;
    }
    
    .clipart-thumb .wrap a {
        display: table-cell;
        width: 90px;
        height: 90px;
        vertical-align: middle;
        text-align: center;
    }


/* For view  - this is confusing.*/
#forview { width: 600px; float: left; }
#view { padding: 0 0 20px; }
#sidebar-v { width: 275px; float: right; padding: 10px 0 0; }
.comment { padding: 0 0 20px; border-bottom: 1px solid #eee; }
.comment img { float: left; margin: 0 15px 5px 0; max-height:60px; max-width:60px; }
* html .comment img { display: inline; }
.comment h5 {
    color: #888a85;
    font-weight: normal;
    font-size: 11pt;
    padding: 0 0 7px 75px;
}
.comment h5 a:link, .comment h5 a:visited {  }
.comment h5 a:hover, .comment h5 a:active { text-decoration: underline; }
.comment p { color: #555753; padding: 0 0 0 75px; line-height: 1.2; }
#addcomments { clear: both; padding: 10px 0 0; }
#addcomments span {
    width: 275px;
    height: 87px;
    display: block;
}
#addcomments textarea {
    width: 265px;
    height: 81px;
    display: block;
    border: 0;
    background: transparent;
    padding: 3px 5px;
    color: #333;
}
#sbcm {
    height: 23px;
    width: 83px;
    font-size: 11pt;
    line-height: 23px;
    color: #000;
    float: right;
    margin-top: 5px;
}
#sbcm:hover { color: #cf6107; }
#maxlength { color: #444; font-size: 9pt; padding: 10px 0 0 10px; }
#maxlength em { padding: 0 2px; }
#maxlength #mcount {
    border: 0;
    background: #FFF;
    width: 35px;
    text-align: right;
    color: #222;
    font-size: 9pt;
}
#m-rews { margin-top: -15px; }
#m-rews a:link, #m-rews a:visited {
    font-weight: bold;
    color: #555753;
    font-size: 10.5pt;
    float: right;
}
#m-rews a:hover, #m-rews a:active { text-decoration: none; color: #000; }
#m-rews span {
    color: #888a85;
    font-size: 18pt;
    position: relative;
    top: 4px;
}
#m-rews:hover span, #m-rews:active span { color: #000; }
#w-rews { clear: both; text-align: right; padding: 25px 0 10px; }
#w-rews a:link, #w-rews a:visited {
  border: 1px solid #CCC;
  background: #EEE;
  text-transform: lowercase;
  font-size: 11pt;
  padding: 0 5px;
  position: relative;
}
#w-rews a:active { top: 2px; }
#content #view h2 {
  /*
    color: #2e3436;
    line-height: 1.2;
    padding: 10px 0 15px;
  */
}
#viewimg {
    width: 250px;
    float: left;
    position: relative;
    text-align: center;
}
#viewimg #bigimage { max-width: 250px; }
* html #viewimg #bigimage { width: 250px; }
#viewimg #sitepick { top: 10px; right: 2px; position: absolute; }
#viewimg #howimadethis { bottom: 10px; left: 0; position: absolute; }
#imginfo { width: 345px; float: right; }
#imginfo dt {
    width: 110px;
    float: left;
    text-align: right;
    color: #2e3436;
    font-weight: bold;
    font-size: 10pt;
    clear: both;
    margin: 0 0 10px;
    line-height: 1.1;
}
#imginfo dd {
    width: 230px;
    float: left;
    margin: 0 0 10px 3px;
    color: #2e3436;
    line-height: 1.3;
}
* html #imginfo dd { display: inline; }
.img-actions { clear: both; padding: 0; }
.img-actions li { float: right; height: 47px; padding-left: 5px; }
/**
 @rejon nuked 20150514

.img-actions li#a-remix span { background: url(/assets/ocal_skin/images/actions.gif) 50% 7px no-repeat; }
.img-actions li#a-delete span { background: url(/assets/ocal_skin/images/actions.gif) 50% -47px no-repeat; }
.img-actions li#a-pick span { background: url(/assets/ocal_skin/images/actions.gif) 50% -106px no-repeat; }
.img-actions li#a-loveit span { background: url(/assets/ocal_skin/images/actions.gif) 50% -176px no-repeat; }
.img-actions li#a-howto span { background: url(/assets/ocal_skin/images/actions.gif) 50% -249px no-repeat; }
*/

.img-actions li a:link, .img-actions li a:visited {
    height: 47px;
    width: 59px;
}
.img-actions li.d-svg a:link, .img-actions li.d-svg a:visited, .img-actions li.ib-svg a:link, .img-actions li.ib-svg a:visited {
    width: 249px;
}

#content .cc_playlist_popup {
    line-height: 20px;
    text-align: left;
    position: absolute;
    background: #FBAD3C;
    top: 0;
    left: 0;
}
#content .cc_playlist_popup p { border-bottom: 1px solid #FFF; padding: 2px 10px; white-space: nowrap; }
#content .cc_playlist_popup a:link, #content .cc_playlist_popup a:visited {
    display: inline;
    line-height: 20px;
    background: url(none);
    padding: 0;
    white-space: nowrap;
}
#content .cc_playlist_popup a:hover, #content .cc_playlist_popup a:active { background: url(none); }
#imginfo #tviewauthor { line-height: 15pt; }
#imginfo #viewauthor { font-size: 14pt; line-height: 14pt; }
#imginfo #viewauthor a:link, #imginfo #viewauthor a:visited { }
#imginfo #tviewrating { line-height: 21px; margin: 10px 0 20px; }
#imginfo #viewrating { height: 21px; margin: 10px 0 20px 3px; }
/** @rejon nuked 20150514
#imginfo #viewtags span { padding: 0 0 0 15px; background: url(/assets/ocal_skin/images/fortags.png) 0 2px no-repeat;} */
#imginfo #viewtags { color: #757772; }
#imginfo #viewtags a:link, #imginfo #viewtags a:visited { color: #757772;}
#lossy { float: left; padding: 16px 0 0; }
#lossy li { float: left; padding: 0 0 0 8px; color: #555753; }
#lossy li strong { font-size: 12pt; padding: 0 5px 0; }
#lossy .btn { width: 50px; }

#rss_titles {
  position: relative;
  float: left;
}
      
#rss_titles li {
  margin: 0px 0px 1px 17px;
  position: relative;
  float: left;
  clear: left;
}


/*Custom pages CSS*/

.manual ul
{
  list-style: disc outside none;
  padding: 0 0 0 18px;
}


/*Custom css classes section*/
.bullets { list-style:inside circle; }


.paging {
    text-align: center;  
    clear: both;
}

/*this heading should only be used on the stylesheet-display widget*/
.attention {
  padding: 0;
  margin: 0;
  color: blue!important;
  height: 100%;
  background: #FFF;
  text-align: center;
  line-height: 1;
}

/*Custom css classes section */

.left{float:left; width:580px;}
.list-default ul
{
  list-style: disc outside none;
  padding: 0 0 0 18px;
}

.hidden {
    display:none;
}

.message {
    padding:0%;
    margin:0 0 0% 0;
    border:1px solid #F3E533;
    background:#FCFFCD;
    width:100%
}

.prioritybox {
    border: 2px solid #4e9a06;;
    padding: 8px;
}


.featurebox {
  border: 2px solid #ddd;
  padding: 20px;
  margin-bottom: 20px;
  clear: both;
}
.featurebox p:first-child,
.featurebox h2:first-child,
.featurebox h3:first-child,
.featurebox h4:first-child {
  padding-top: 0;
  margin-top: 0;
  margin-bottom: 4px;
}
.featurebox p:last-child {
  padding-bottom: 0;
  margin-bottom: 0;
}

.featurebox h3 {
  font-weight: normal;
  font-size: 14pt;
  color: #73d216;
}

.sidebox
{
  position: relative;
  float: right;
  margin-right:-14px;
  margin: 0 -14px 8px 0;
  width: 322px;
  list-style: none;
  line-height:1.3;
  font-size: 12pt;
  clear: right;
}
     
.highlight, 
.highlight a,
.sidebox h3.highlight,
.sidebox h3.highlight a {
  color: #4e9a06;
  }
.sidebox h3 {
   color:#888A85;
  font-size:14pt;
  font-weight:normal;
  line-height:1.5;
  padding:0 17px 5px;
  position: relative;
  float: left;
  width: 288px;
  margin: 0 0 0 0; 
}
.sidebox .boxtop
{

  margin: 0;
  padding: 0;
  display: none;
}

.sidebox .boxbottom
{

    clear: both;
    background-position: -572px;
    padding-bottom: 12px;
    display: none;

  
}

.sidebox .wrapper,
.sidebox #wrapper
{
  position: relative;
  float: left;
  width: 95%;
  padding:1em;
  padding-top: 0;
}
  
.sidebox li {
    padding: 2px 0;
}


.wrapper table {
    width: 100%;
}
table td.metric {
    width: 50%;
    font-weight: bold;
}

table td.number {
    width: 50%;
    text-align: right;
}

table td.heading
{
    width: 33%;
    font-weight: normal;
    color: #444;
}

.wrapper table td {
  padding: 0;
  margin: 0;
}



span.big { font-size: 20px }
span.small { font-size: 9px }
span.red { color: red; }
span.green { color: green; }
span.blue { color: blue; }
span.u { text-decoration: underline; }
span.b { font-weight: bold; }
span.i { font-style: italic; }
span.quote {
  display: block;
  margin-left: 24px;
  font-style: italic;
  padding: 3px;
}
span.quote span { display: block; margin-bottom: 2px; font-weight: bold;}
span.right { display: block; float: right; margin: 4px; }
span.left { display: block; float: left; margin: 4px; }

div#list-no-description td.wordwrapper, div#list-no-description th.wordwrapper, td.wordwrapper  {
  word-wrap: break-word;
  width: 300px;
}


/*********************** Favorite Icon Styles *************************/

a .favorite-add {
    width: 15px;
    height: 15px;
    background-image: url("/image/12px/svg_to_png/135559/OCAL_Favorites_Icon_Unselected.png");
    background-position: center center;
    background-repeat: no-repeat;
}

a:hover .favorite-add {
    background-image: url("/image/12px/svg_to_png/137125/OCAL_Favorites_Icon_Selected_Red.png");
    background-position: center center;
    background-repeat: no-repeat;
}

a .favorite-remove {
    width: 15px;
    height: 15px;
    background-image: url("/image/12px/svg_to_png/137125/OCAL_Favorites_Icon_Selected_Red.png");
    background-position: center center;
    background-repeat: no-repeat;
}

a:hover .favorite-remove {
    background-image: url("/image/12px/svg_to_png/135559/OCAL_Favorites_Icon_Unselected.png");
    background-position: center center;
    background-repeat: no-repeat;
}


.bubble a {
  font-weight: bold;
  color: #555753;
  cursor: pointer;
}

.bubble a:hover {
  text-decoration: none;
  
}

.bubble-downloads a:link:hover,
.bubble-downloads .glyphicon:hover,
.bubble-downloads a:hover {
  color: #4e9a06;
}

.bubble-comments a:link:hover,
.bubble-comments .glyphicon:hover,
.bubble-comments a:hover {
  color: #428bca;
}

.bubble-love:hover, 
.bubble .bubble-love a:link:hover,
.bubble-love a:link:hover,
.bubble-love .glyphicon:hover,
.bubble-love a:hover {
  color: #cc0000; 

}

.bubble-number {
  padding-right: 6px;
  padding-left: 4px;
  font-family: Arial, Helvetica, sans-serif; 
  font-weight: bold;
}

.bubble-love {
  height: 19px;
  vertical-align: bottom;
  margin-left: -1px;
}
.bubble-love .glyphicon {
  float: left; 
  margin-top: 1px;
}
.bubble-love .glyphicon .bubble-number {
  float: right;
  padding-top: 2px;

  
}

#container {
  height: 39px;
}
#stats div dd { float: right; }


.mgmt-delete { border: none !important; }

/** @rejon 20150615 
input[type=text] {
  border: 1px solid #888;
  width: 100%;
  margin-bottom: 12px;
}
*/

fieldset { 
  border: none;
}


.openclipart-green { color: #4e9a06; }
.openclipart-orange { color: #f57900 }
.openclipart-purple { color: #75507b }
.openclipart-red { color: #cc0000 }
.openclipart-blue { color: #204a87 }



/*********************** Detail Page Styles *************************/

#detail { overflow: hidden; float: left; }


.thumbnail_info_downloaded, .favorite-icon, .favorite-icon div
{
    display: inline-block;
    color: #555753;
}

.img-actions li.u-svg { clear: both; padding:0 35px 8px 0; margin-top: -1px;}
.img-actions li.u-svg a:link, .img-actions li.u-svg a:visited {
    width: 249px;
}



/*Css for 20 footer*/
#footer { 
  margin: 0 16px; 
  clear: both; 
  border-left: 1px solid #ccc;
  border-right: 1px solid #ccc;
}
#forfooter {
    background-color: #204a87;
}

#footer a {
 color: white;
  text-decoration: underline;
  margin-right: 8px;
}

#footer h3 {
 text-align: center;
 font-size: 18pt;
 font-weight: normal;
 margin: 0 0 0px 0;
 padding: 20px 0px 0px 0px;
  color: white;
}

#footer h3 a {
 text-decoration: none;
  margin-right: 0;
}

#footer h3 a:hover {
 color: #4e9a06; 
}

#footer h3:last-child {
 margin-bottom: 20px; 
}





#collections-by-clipart li
{
    margin-bottom: 1em;
}

#notifications-bar {
  border-left: 1px solid #CCCCCC;
  border-right: 1px solid #CCCCCC;
}
div.comment.clearfix {
  padding: 20px 0;
  margin-bottom: 10px;

}

.edit {
  clear: none; 
}

div#forview {
  margin: 0;
  padding: 0;
}

#description {
  /* These are technically the same, but use both */
  overflow-wrap: break-word;
  word-wrap: break-word;

  -ms-word-break: break-all;
  /* This is the dangerous one in WebKit, as it breaks things wherever */
  word-break: break-all;
  /* Instead use this non-standard one: */
  word-break: break-word;
}


#detail textarea {width: 100%;}

#detail .edit_in_place textarea { height: 150px; }

dd#viewtags {
  white-space: pre;           /* CSS 2.0 */
  white-space: pre-wrap;      /* CSS 2.1 */
  white-space: pre-line;      /* CSS 3.0 */
  white-space: -pre-wrap;     /* Opera 4-6 */
  white-space: -o-pre-wrap;   /* Opera 7 */
  white-space: -moz-pre-wrap; /* Mozilla */
  white-space: -hp-pre-wrap;  /* HP Printers */
  word-wrap: break-word;      /* IE 5+ */
}
dd#viewtags, dd#description, #view h2.auth div {
  cursor: pointer;
}
dd#viewtags div, dd#description div{
  float: left;
  padding: 4px;
  overflow: auto;
}
dd#viewtags div:hover, dd#description div:hover, #view h2 div:hover {
  background-color: #fbeed5;
  border: 1px solid #c09853;
  border-radius: 4px;
}


span.tool-svg,
span.tool {
  position: relative;
  cursor: help;
}

span.tip {
  display: none;
}


/******************* Collect Styles **********************/

#collection-new #form_container
{
  float: right;
  width: 275px;
}


/******************* SVG Background Image Styles ******************/

.clipart-detail a.clipart-source {
    display: block;
    height: 100%;
    width: 100%;
}

.svg #viewimg.clipart-detail {
    width: 42%;
    height: auto;
}

.svg .clipart-detail .wrap {
    width: 100%;
    height: 100%;
    display: block;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}

.easy {
    float: right;
    clear: right;
}

.easy li a {
    width: 249px;
display: block;
margin: 6px 0;
}

#upload-remix-box
{
    float: right;
}

/* remix box */
.img-actions li.u-svg {
    clear: both;
    margin-top: -1px;
    padding: 0 25px 10px 0; 
}

#detail_set
{
  width: 275px;
}

.collection_hook {
  
  width: 62px;
  margin-right: 1px;
}
#favorite-detail {display: inline-block;} 

#detail_edit {
 margin-bottom: 10px; 
}

#detail_set_test h2 {
  margin: 5px 0 5px 0;
}

