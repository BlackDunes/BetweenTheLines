<?php session_start(); ?>
<?php
	date_default_timezone_set("America/New_York");
	echo "
	<html>
    	<head>";
        include ('style.css');
    	echo "
 		<title>
 			Between the Lines
        </title>
        <link href='http://fonts.googleapis.com/css?family=Alegreya:700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
        <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
        <script src='jquery.js'></script>
        </head>
        <body>
        <center>
        	<div id='wrapper'>
        		<div id='topbar'>
        		</div>
        		<div id='toptitle'>
        			Between the Lines
        		</div>
        		<div id='navbar'>
                    <div class='navleft'>
                        <a href='signup'>Sign Up</a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href='btowse'>Browse</a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href='about'>About</a>
                    </div>
                    <div class='navright'>
                    </div>
                    <div class='clear'>
                    </div>
        		</div>
        		<div id='body'>";
                    if ($_GET['p']) {
                $page = $_GET['p'];
                if (file_exists('pages/'.$page.'.php')) {
                    echo "";
                    include('pages/'.$page.'.php');
                } else {
                     echo "This page is coming soon.";
                }
                } else {

                        echo "
                        <div id='contentarea'>
                            <div id='searchholder'>
                            <input type='text' class='bigsearch' value='Search...' />
                            <img src='images/dot.png' class='navbarbutton'>
                        </div>




                        <div class='mainpagesection'>
        				<div class='mainpagesectionheading' id='newlyadded'>
        				    <h2>Newly Added</h2>
        				</div>

        				<div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>Everything is Illuminated</span><br />
                                    <span class='authortile'>by Jonathan Safran Foer</span>
                                </p>
                            </div>
        					<div class='bookholder'>
                                <p><a href='index.php?p=title'><img src='images/illuminated.png' border='0'></a></p>
                            </div>
        				</div>
        				<div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>Candide</span><br />
                                    <span class='authortile'>by Voltaire</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/candide.png' border='0'></a></p>
                            </div>
        				</div>
        				<div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='shortstorytile'>\"The Lottery\"</span><br />
                                    <span class='authortile'>by Shirley Jackson</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/lottery.png' border='0'></a></p>
                            </div>
        				</div>
        				<div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>The Great Gatsby</span><br />
                                    <span class='authortile'>by F. Scott Fitzgerald</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/gatsby.png' border='0'></a></p>
                            </div>
        				</div>
        				<div id='clear'>
        				</div>
                        </div>


                        
                        <div class='mainpagesection'>
                        <div class='mainpagesectionheading' id='newlyadded'>
                            <h2>Popular Titles</h2>
                        </div>

                        <div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>The Catcher in the Rye</span><br />
                                    <span class='authortile'>by J. D. Salinger</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/catcher.png' border='0'></a></p>
                            </div>
                        </div>
                        <div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>The Giver</span><br />
                                    <span class='authortile'>by Lois Lowry</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/thegiver.png' border='0'></a></p>
                            </div>
                        </div>
                        <div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='booktitletile'>Nausea</span><br />
                                    <span class='authortile'>by Jean Paul Sartre</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/nausea.png' border='0'></a></p>
                            </div>
                        </div>
                        <div class='bookcontainerfront'>
                            <div class='bookholderback'>
                                <p>
                                    <span class='shortstorytile'>\"Nature\"</span><br />
                                    <span class='authortile'>by Ralph Waldo Emerson</span>
                                </p>
                            </div>
                            <div class='bookholder'>
                                <p><a href='unrest'><img src='images/nature.png' border='0'></a></p>
                            </div>
                        </div>
                        <div id='clear'>
                        </div>
                        </div>



        				
        			</div>
        			<div id='sidearea'>

                        <div class='sidesitedescript'>
                            <div class='sitedescriptinner'>
                                <p>
                                    <span class='theaccent'>Between the Lines</span> is a place for <span class='theaccent'>teachers</span>, <span class='theaccent'>professors</span>, and <span class='theaccent'>curious people</span> to share what can be learned from reading.
                                </p>
                            </div>
                        </div>

        				<div class='sidetitle'>
        					Blog
        				</div>

        			<div class='frontblogposttitle'>
                        End of the World
                    </div>
                    <div class='frontblogpost'>
                        So, the world is supposed to end today. Will it? We may never...  <a href='void'>(read more)</a>
                    </div>
                    <div class='frontblogpostarrow'>
                        <img src='images/blogtriangle.png'>
                    </div>
                    <div class='frontblogpostauthor'>
                        <div class='frontblogpostauthorinfo1'>
                            Posted on 12/21/12 by Tim
                        </div>
                        <div class='frontblogpostauthorpic1' style='background:url(images/user.png);'>
                        </div>
                        <div id='clear'>
                        </div>
                    </div>


                    <div class='frontblogposttitle'>
                        Alpha Testing
                    </div>
                    <div class='frontblogpost'>
                        The site is now up for alpha testing! Actually, nothing works yet. But... <a href='void'>(read more)</a>
                    </div>
                    <div class='frontblogpostarrow2'>
                        <img src='images/blogtriangle2.png'>
                    </div>
                    <div class='frontblogpostauthor'>
                        <div class='frontblogpostauthorinfo2'>
                            Posted on 12/05/12 by Raffy
                        </div>
                        <div class='frontblogpostauthorpic2'  style='background:url(images/user2.png);'>
                        </div>
                        <div id='clear'>
                        </div>
                    </div>

        			</div>
        			<div id='clear'>
        			</div>
        		</div>";
            }
        	echo "</div>
            <div id='footer'>
            </div>
        </center>
        </body>
    </html>";
?>

