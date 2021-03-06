<?php
require_once './global.inc.php';
session_start();
if (!oauth_session_exists()) {
    header('Location: ' . '404.php');
}
?>
<?php
//data feeding to the database
if (isset($_POST['valid'])) {
    //$user = $_SESSION['user'];
    $userId = 4;
    $partner = $_POST['partner'];
    $leader = $_POST['lead'];
    $estimation = $_POST['estimation'];
    $technos = $_POST['technologies'];
    $description = $_POST['description'];
    echo $partner . $leader . $estimation . $technos . $description;
    return;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php require_once './head.inc.php'; ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php require_once './nav.inc.php'; ?>


        <div class="container clearfix">

            <div id="bannerArea" class="clearfix">
                <div id="bannerLeft">

                    <div id="example-two">

                        <ul class="nav">
                            <li class="nav-one"><a href="#featured2" class="current">3rd Year Proposals</a></li>
                            <li class="nav-two"><a href="#core2">Final Year Proposals</a></li>

                        </ul>

                        <div class="list-wrap">

                            <div id="featured2">

                                <p class="descriptionTab">
                                    Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                </p>


                                <div id="accordion"> 

                                    <h3 class="greenColor clearfix">
                                        <div>
                                            <div class="descriptionArea">
                                                <a href="#">Fuel Management System </a>
                                                <p> HTML5/JavaScript, ASP.NET</p>
                                            </div>
                                            <div class="darkGray">
                                                <ul>
                                                    <li class="endGPA"><span>Partner :</span> 99X Technology</li>
                                                    <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                    <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </h3>  
                                    <div class="contentData research clearfix"> 

                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div> 

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">High Performance Event Bus</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> MIT</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div> 

                                    <h3 class="greenColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Fuzzy Logic based Geo Filtering</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> CodeGen</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>   

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Social Media Management System </a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> WSO2</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>   

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Employee Performance Management System</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> 99X Technology</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div> 
                                    </h3> 
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>  

                                </div>   

                            </div>

                            <div id="core2" class="hide">
                                <div id="accordion2"> 

                                    <h3 class="greenColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Fuel Management System </a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> 99X Technology</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData research clearfix"> 

                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div> 

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">High Performance Event Bus</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> MIT</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div> 

                                    <h3 class="greenColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Fuzzy Logic based Geo Filtering</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> CodeGen</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>   

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Social Media Management System </a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> WSO2</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div>
                                    </h3>  
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>   

                                    <h3 class="yellowColor clearfix">
                                        <div class="descriptionArea">
                                            <a href="#">Employee Performance Management System</a>
                                            <p> HTML5/JavaScript, ASP.NET</p>
                                        </div>
                                        <div class="darkGray">
                                            <ul>
                                                <li class="endGPA"><span>Partner :</span> 99X Technology</li>
                                                <li class="endGPA"><span>Estimation :</span> 230 hours</li>
                                                <li class="linkedLink"><span>Lead :</span> <a href="asd.html">Frank Warnakula</a></li>
                                            </ul>
                                        </div> 
                                    </h3> 
                                    <div class="contentData clearfix"> 

                                        <img src="img/img5.jpg"/> 
                                        <p>  
                                            Passionate in dynamic field of Computer Science & Engineering and to explore new technology, new perceptions and diverse thinking patterns. Yet, not restricted as a computer science geek, but passionate in experiencing diverse fields and people. Proven myself to be successful in team work and leadership.
                                        </p>  
                                    </div>  

                                </div>
                            </div>



                        </div> <!-- END List Wrap -->

                    </div>

                </div>
                <div id="rightSide">
                    <div id="addProject">
                        <a href="javascript: void(0)">
                            Propose a New Project
                        </a>
                    </div>

                    <ul id="legend">
                        <li class="greenBox clearfix">
                            <span></span>
                            <p>Project Selected by Students</p>
                        </li>
                        <li class="ice clearfix">
                            <span></span>
                            <p>Project not Selected yet</p>
                        </li>
                    </ul>



                    <div class="componentContainer">
                        <div class="heading">
                            <p>Filter by Technology</p>
                        </div>

                        <div class="ccContainer">
                            <div class="cloudArea"><img src="img/cloud.jpg" /></div>
                            <div class="cloudArea">


                                <select>
                                    <option>Select Technology</option>
                                    <?php
                                    $tecs = new TechnologyTools();
                                    $arr = $tecs->getAlltechnologies();
                                    foreach ($arr as $value) {
                                        echo "<option value='$value->id'>$value->name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="componentContainer">
                        <div class="heading">
                            <p>Sort Research Projects</p>
                        </div>

                        <div class="ccContainer">
                            <ul>
                                <li><input type="checkbox"><label>By Published Date</label></li>
                                <li><input type="checkbox"><label>By Estimated Hours</label></li>
                                <li><input type="checkbox"><label>By Project Name</label></li>
                                <li><input type="checkbox"><label>By Partner Company</label></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!--application form-->
        <style type="text/css">
            #projectApplicationWrapper{
                position: fixed;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.3);
                top: 0px;

                left: -999999px;
            }

            #projectApplication{
                position: relative;
                width: 450px;
                border: solid 1px #41719C;
                height: 500px;
                top:50%;
                margin-left: -225px;
                margin-top: -250px;
                left: 50%;
                background: white;
                padding: 15px;
            }

            #projectForm td{
                padding: 10px;
            }

            .formInput{
                width: 100%;
            }

            .formInput select,.formInput input,.formInput textarea{
                width: 100%;
            }

            .formInput textArea{
                height: 150px;
            }

            #formControls{                
                text-align: right;
            }
            #formControls button{                
                display: block;
                background: none repeat scroll 0% 0% #5B9BD5;
                border: 1px solid #41719C;
                padding: 10px;
                font-size: 18px;
                color: #FFF;
                text-align: center;
                text-decoration: none;
                width: 150px;
            }
        </style>

        <div id="projectApplicationWrapper">
            <div id="projectApplication">
                <h2>New project proposal</h2>
                <div id="projectForm">
                    <table>
                        <tr>
                            <td>
                                <label for="partnerCombo">Partner</label>
                            </td>
                            <td class="formInput">
                                <select name="partner" id="partnerCombo">
                                    <?php
                                    $companyTools = new CompnayTools();
                                    $companyArray = $companyTools->getAllPremiumCompanies();
                                    $company = new Company(null);
                                    foreach ($companyArray as $company) {
                                        ?>
                                        <option value="<?php echo $company->id; ?>"><?php echo $company->name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="estimatedTimeTxt">Estimation(hours)</label>
                            </td>
                            <td class="formInput">
                                <input name="estimatedTime" type="text" id="estimatedTimeTxt">
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label for="leadCombo">Lead</label>
                            </td>
                            <td class="formInput">

                                <select name="lead" id="leadCombo">
                                    <?php
                                    $userTools = new UserTools();
                                    $users = $userTools->getAllLeads();
                                    $user = new User();

                                    foreach ($users as $user) {
                                        echo "<option id='$user->id'>$user->name</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="technologyTxt">Technology</label>
                            </td>
                            <td class="formInput">
                                <input type="hidden" name="technology" id="technologyVals">
                                <input name="technology" type="text" id="technologyTxt" size="50">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="descriptionTxt">Description</label>
                            </td>
                            <td class="formInput">
                                <textarea id="descriptionTxt" name="description"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td id="formControls">
                                <button type="button" onclick="submit()">Add</button>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>


        <?php include_once 'scripts.inc.php'; ?>

        <script src="js/research.js" type="text/javascript"></script>
        <script>
                                    //loading batches till technologies ae implemented:dummy
                                    var json = '<?php echo json_encode($arr); ?>';
                                    tempArray = new Array();
                                    tempArray = JSON.parse(json);
                                    for (i = 0; i < tempArray.length; i++) {
                                        technologies.push({value: "" + tempArray[i].id.toString(), label: "" + tempArray[i].name.toString()});
                                    }
        </script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
    </body>
</html>