<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Georgia Tech + Open Academic Environment</title>
        <link rel="stylesheet" type="text/css" href="css/screen.css">
        <script src="lib/jquery-1.8.2.js"></script>
        <script src="js/main.js"></script>
		<?php include('index_header_script.php');?>
    </head>
    <body>
        <div id="gt-page-container">
            <div id="gt-topnavigation-container">
                <div id="gt-topnavigation-left">
                    <ul>
                        <li>
                            <a href="javascript:;" title="Dashboard" id="topnavigation_home">
                                <div class="gt-home-icon"></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Inbox" id="topnavigation_inbox">
                                <div class="gt-inbox-icon"></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Library" id="topnavigation_task">
                                <div class="gt-task-icon"></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Library" id="topnavigation_library">
                                <div class="gt-library-icon"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="gt-topnavigation-right">
                    <div class="gt-cogwheel-icon gt-force-right"></div>
                    <a href="javascript:;" id="topnavigation-explore-link" class="gt-force-right">Explore</a>
                    <form id="topnavigation_search_form" class="gt-force-right">
                        <a href="javascript:;" title="Search">
                            <div class="gt-magnifier-icon gt-force-right"></div>
                        </a>
                        <input type="text" id="topnavigation_search_input" class="gt-force-right"/>
                    </form>
                </div>
                <div id="gt-topnavigation-center"></div>
            </div>

             <div id="gt-lhnav-container">
                <div id="lhnav-level-1">
                    <img id="profile-image" src="http://www.gravatar.com/avatar/7937c2985aa325a2f1dd0de91432ed13" alt="User image"/>
                    <ul>
                        <img src="images/dummy_lhnav_screen.png" alt="replace this image"/>
                    </ul>
                </div>
             </div>

             <div id="gt-content-container">
                <div class="gt-content-column">
                    <h2>Research materials</h2>
                    <div>
                        <input type="checkbox" id="rm_everything"/>
                        <label for="rm_everything">Everything</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_peerreviewarticles"/>
                        <label for="rm_peerreviewarticles">Peer review articles</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_journalarticles"/>
                        <label for="rm_journalarticles">Journal articles</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_publications"/>
                        <label for="rm_publications">Publications</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_books"/>
                        <label for="rm_books">Books</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_images"/>
                        <label for="rm_images">Images</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_video"/>
                        <label for="rm_video">Video</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_conferenceproceedings"/>
                        <label for="rm_conferenceproceedings">Conference proceedings</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_archivalmaterials"/>
                        <label for="rm_archivalmaterials">Archival materials</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_statisticalinformation"/>
                        <label for="rm_statisticalinformation">Statistical information</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_websites"/>
                        <label for="rm_websites">Websites</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_bibliographies"/>
                        <label for="rm_bibliographies">Bibliographies</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_footnotes"/>
                        <label for="rm_footnotes">Footnotes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_researchgroups"/>
                        <label for="rm_researchgroups">Research groups</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_collections"/>
                        <label for="rm_collections">Collections</label>
                    </div>
                    <div>
                        <input type="checkbox" id="rm_people"/>
                        <label for="rm_people">People</label>
                    </div>

                    <h2>Suggested terms</h2>
                    <img src="images/dummy_left_content.png" alt="Left column content"/>
                </div>
                <div class="gt-content-column" id="gt-center-column">
<?php include("index-center-content.php"); ?>
                    
                </div>
                <div class="gt-content-column">
                    <h2>Recommended <span class="h2-large">Tutorials</span></h2>
                    <ul>
                        <li><a href="javascript:;" title="Selecting the Appropriate Database for Research">Selecting the Appropriate Database for Research</a></li>
                        <li><a href="javascript:;" title="Developing a Search Strategy">Developing a Search Strategy</a></li>
                        <li><a href="javascript:;" title="Using Fintit@GT to Obtain Articles &amp; Books">Using FindIt@GT to Obtain Articles &amp; Books</a></li>
                    </ul>
                    <ul>
                        <li><a href="javascript:;" title="Using EndNote to Create Citations and Bibliographies">Citations/Bibliographies</a></li>
                        <li><a href="javascript:;" title="Creating an Annotated Bibliography with EndNote">Creating an Annotated Bibliography with EndNote</a></li>
                        <li><a href="javascript:;" title="Papers">Papers</a></li>
                        <li><a href="javascript:;" title="Videos">Videos</a></li>
                        <li><a href="javascript:;" title="Further Skills">Further Skills</a></li>

                    <ul>
                </div>
             </div>
        </div>
    </body>
</html>
