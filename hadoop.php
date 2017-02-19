<!DOCTYPE html>
<!--
Template Name: Pcomspace
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>TECHNOPANDAS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
  <?php  
  require("header.php");
?>
  </div>
  <!-- ################################################################################################ --> 
  <!-- ################################################################################################ --> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ --> 
</div>
<!-- End Top Background Image Wrapper --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <p><ul><li><strong>Hadoop is supported by GNU/Linux platform and its flavors. Therefore, we have to install a Linux operating system for setting up Hadoop environment. In case you have an OS other than Linux, you can install a Virtualbox software in it and have Linux inside the Virtualbox.</strong></li></ul></p>
      <h1>PRE-INSTALLATION STEPS:</h1>
      <p>Before installing Hadoop into the Linux environment, we need to set up Linux using ssh (Secure Shell) and install java. Follow the steps given below for setting up the Linux environment. Copy and execute each of the following command onto your terminal</p>
      
      <ol><strong>
      <li>SSH SETUP AND KEY GENERATION</li></strong>
        <iframe src="txt/ssh.txt" width="500px" height="65px"></iframe>
        <ul>
          <li><strong>$ ssh-keygen -t rsa:</strong> Generates a key-value pair using SSH</li>
          <li><strong>$ cat ~/.ssh/id_rsa.pub >> ~/.ssh/authorized_keys:</strong> Copy the public keys form id_rsa.pub to authorized_keys </li>
          <li><strong>$ chmod 0600 ~/.ssh/authorized_keys:</strong> Provide the owner with read and write permissions to authorized_keys file</li>
        </ul><br>
        <li id="java_inst"><strong>JAVA INSTALLATION</strong></li>
        <iframe src="txt/java.txt" width="500px" height="45px"></iframe><br><br>
        <li><strong>MAKING JAVA AVAILABLE TO ALL USERS</strong></li>
        Please enter the java version instead of -x in the following command: 
        <iframe src="txt/java_local.txt" width="500px" height="45px"></iframe><br><br>
        <li><strong>To set up java PATH and JAVA_HOME variables:</strong> </li>
        <iframe src="txt/java_variables.txt" width="500px" height="150px"></iframe><br>
      </ol>
      <h1>HADOOP DOWNLOAD</h1>
      <p>You can download any version of hadoop above 2.0 from <a  href="http://hadoop.apache.org/releases.html" target="_blank">Apache Hadoop release page</a> or <a href="http://redrockdigimark.com/apachemirror/hadoop/common/hadoop-2.7.3/hadoop-2.7.3.tar.gz">click here</a> to download Hadoop-2.7.3 or you can use the links below to download.</p>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Hadoop - 3.0.0-alpha2</th>
              <th>Hadoop - 3.0.0-alpha1</th>
              <th>Hadoop - 2.6.5</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="http://redrockdigimark.com/apachemirror/hadoop/common/hadoop-3.0.0-alpha2/hadoop-3.0.0-alpha2.tar.gz">Download</a></td>
              <td><a href="http://redrockdigimark.com/apachemirror/hadoop/common/hadoop-3.0.0-alpha1/hadoop-3.0.0-alpha1.tar.gz">Download</a></td>
              <td><a href="http://redrockdigimark.com/apachemirror/hadoop/common/hadoop-2.6.5/hadoop-2.6.5.tar.gz">Download</a></td>
            </tr>
            <tr>
              <td><a href="http://www-eu.apache.org/dist/hadoop/common/hadoop-3.0.0-alpha2/hadoop-3.0.0-alpha2.tar.gz ">Mirror site 1</td>
              <td><a href="http://www-eu.apache.org/dist/hadoop/common/hadoop-3.0.0-alpha1/hadoop-3.0.0-alpha1.tar.gz ">Mirror site 1</a></td>
              <td><a href="http://www-eu.apache.org/dist/hadoop/common/hadoop-2.6.5/hadoop-2.6.5.tar.gz ">Mirror site 1</a></td>
            </tr>
            <tr>
              <td><a href="http://www-us.apache.org/dist/hadoop/common/hadoop-3.0.0-alpha2/hadoop-3.0.0-alpha2.tar.gz ">Mirror site 2</a></td>
              <td><a href="http://www-us.apache.org/dist/hadoop/common/hadoop-3.0.0-alpha1/hadoop-3.0.0-alpha1.tar.gz ">Mirror site 2</a></td>
              <td><a href="http://www-us.apache.org/dist/hadoop/common/hadoop-2.6.5/hadoop-2.6.5.tar.gz ">Mirror site 2</a></td>
              
            </tr>
          </tbody>
        </table>
      </div>
      <p>Once your download is complete, go to your downloads directory and execute the following commands from your terminal:</p>
      <iframe src="txt/hdp_extract.txt" width="650px" height="150px"></iframe>

      <p>
        <h2>HADOOP OPERATION MODES</h2>
        <ol>
          <li><b>Standalone Mode</b>: Initially, hadoop is by default configured to work as a single java process onto your machine.</li>
          <li><b>Pseudo-distributed Mode</b>: In this mode, every hadoop daemon like mapreduce, yarn, etc are simulated on a single machine.</li>
          <li><b>Distributed Mode</b>: In this mode, we have a cluster consisting of two or more machines.</li>
        </ol>
      </p>
      <br>
      <ol>
        <h1><li id="standalone"><b>STANDALONE MODE</b></li></h1>
        <p>Set the hadoop environment variables by appending the following line at the end of ~/.bashrc file:</p>
        <iframe src="txt/standalone_hdp.txt" width="750px" height="280px"></iframe>
<br> <br>
        <h1><li id="pseudo-distributed"><b>PSEUDO-DISTRIBUTED MODE</b></li></h1>
        <p>The following steps will guide you for setting up hadoop in pseudo-distributed mode:</p>
        <p><h1><strong>STEP 1: SETTING UP HADOOP</strong></h1>
        <ul>
          <li>Open bashrc file using the command: sudo gedit ~/.bashrc from your terminal</li>
          <li>Append the following lines at the end of your bashrc file:</li>
        </ul>
        </p>
        <iframe src="txt/hdp_pd_setup.txt" width="500px" height="160px"></iframe>
        <p>
          <ul>
            <li>After appending the lines, execute the following command onto your terminal: <br><strong>source ~/.bashrc</strong></li>
          </ul>
        </p>
        <p><h1><strong>STEP 2: CONFIGURING HADOOP</strong></h1>
        All the hadoop configuration files are located in hadoop/etc/hadoop folder. So execute the following command in your terminal:<br><strong> <ul><li>$ cd  $HADOOP_HOME/etc/hadoop</li></ul></strong>
        <br><b>You need to edit the following listed files to configure hadoop:</b><br><br>
        <ol>
          <h3><li>core-site.xml</li></h3>
          <p>In the etc/hadoop folder, rename the below listed files:
          <ul>
            <li>core-site.xml.template rename to core-site.xml</li>
            <li>hdfs-site.xml.template rename to hdfs-site.xml</li>
            <li>mapred-site.xml.template rename to mapred-site.xml</li>
            <li>yarn-site.xml.template rename to yarn-site.xml</li>
          </ul>
          <ul>
            <li>Now create a folder named tmp in the /usr/local/hadoop folder. You can use the following command to create the directory: <br><strong>$ sudo mkdir $HADOOP_HOME/tmp</strong></li>
            <li>Open core-site.xml file and insert the following lines between configuration tags:</li>
          </ul>
          
          </p>
          <iframe src="txt/core-site.txt" width="450px" height="220px"></iframe>
          <br><br>
          <h3><li>hdfs-site.xml</li></h3>
          <p>The hdfs-site.xml file contains information such as the value of replication data, namenode path,and datanode paths of your local file systems. It means the place where you want to store the
          Hadoop infrastructure. Let us assume the following instance:</p>
          <iframe src="txt/hdfs-site_assume.txt" width="450px" height="220px"></iframe>
          <br><p><b>Now open the hdfs-site.xml and add the following lines between configuration tags:</b>
          <iframe src="txt/hdfs-site.txt" width="450px" height="420px"></iframe>

          <h3><li>yarn-site.xml</li></h3>
          <p>This file is used to configure yarn into Hadoop. Open the yarn-site.xml file and add the following
          properties in between the configuration tags:</p>
          <iframe src="txt/yarn-site.txt" width="450px" height="175px"></iframe>

          <h3><li>mapred-site.xml</li></h3>
          <p>This file is used to specify which MapReduce framework we are using. <b>Now open the hdfs-site.xml and add the following lines between configuration tags:</b></p>
          <iframe src="txt/mapred-site.txt" width="450px" height="175px"></iframe>
        </ol>
        </p>

        <p><h1><strong>STEP 3: VERIFYING HADOOP INSTALLATION:</strong></h1>
        Set up the namenode using the command “hdfs namenode -format” as follows:
        <ul><li><b>$ hdfs namenode -format</b></li></ul>
        You'll get a similar message on successful namenode setup:
        </p>
        <iframe src="txt/namenode_format.txt" width="550px" height="300px"></iframe>
        <p><h1><strong>STEP 4: STARTING THE CLUSTER:</strong></h1>
        Issue the following commands one by one onto your terminal: 
        <ol>
          <b><li>$ start-dfs.sh</li></b>
          <b><li>$ start yarn.sh</li></b>
          <b><li>$ jps</li></b>
        </ol>
        On issuing the last command, if you see the followng services running, then hadoop configuration is successful:
        </p>
        <iframe src="txt/jps.txt" width="450px" height="120px"></iframe>
        <p><h1><strong>STEP 5: ACCESSING HADOOP ON BROWSER</strong></h1>
        <ul>
        <li><b>Enter <i>https://localhost:50070</i> in your browser. You could see the overview of your cluster.</b><br></li>
        <li><b>Enter <i>https://localhost:8088</i> in your browser. You can access all your cluster applications.</b></li>
        </ul>
        </p>
        
      </ol>




      <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
      <img class="imgl borderedbox inspace-5" src="images/demo/imgl.gif" alt="">
      <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
      <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more website templates visit our <a href="http://www.os-templates.com/">free website templates</a> section.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
      <h1>Table(s)</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Header 1</th>
              <th>Header 2</th>
              <th>Header 3</th>
              <th>Header 4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">Value 1</a></td>
              <td>Value 2</td>
              <td>Value 3</td>
              <td>Value 4</td>
            </tr>
            <tr>
              <td>Value 5</td>
              <td>Value 6</td>
              <td>Value 7</td>
              <td><a href="#">Value 8</a></td>
            </tr>
            <tr>
              <td>Value 9</td>
              <td>Value 10</td>
              <td>Value 11</td>
              <td>Value 12</td>
            </tr>
            <tr>
              <td>Value 13</td>
              <td><a href="#">Value 14</a></td>
              <td>Value 15</td>
              <td>Value 16</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ --> 
    </div>
    <!-- ################################################################################################ --> 
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>Lorem ipsum dolor</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#java_inst">Java Installation</a>
            <!--<ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>-->
          </li>
          <li><a href="#standalone">Hadoop Standalone setup</a>
            <!--<ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>-->
              </li>
            <li><a href="#pseudo-distributed">Hadoop Pseudo-Distributed Setup</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>Lorem ipsum dolor</h6>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li>Etiam vel sapien et</li>
            <li><a href="#">Etiam vel sapien et</a></li>
          </ul>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </article>
      </div>
      <!-- ################################################################################################ --> 
    </div>
    <!-- ################################################################################################ --> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper overlay bgded" style="background-image:url('images/demo/backgrounds/04.png');">
  <div id="ctdetails" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_third first"><i class="fa fa-map-marker"></i>
        <p>Our Location</p>
        <p><a href="#">Google Maps</a></p>
      </li>
      <li class="one_third"><i class="fa fa-phone"></i>
        <p>Call us</p>
        <p>+00 (123) 456 7890</p>
      </li>
      <li class="one_third"><i class="fa fa-envelope-o"></i>
        <p>Email us</p>
        <p>info@yourdomainname.com</p>
      </li>
    </ul>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Pcomspace</h6>
      <p>Finibus nibh sed hendrerit vivamus sit amet orci rhoncus dapibus nisl vitae dignissim.</p>
      <p>Augue sed vitae malesuada magna vivamus sit amet enim non odio eleifend ultricies velit elementum ac turpis.</p>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Turpis egestas morbi</h6>
      <nav>
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Elit malesuada ut</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Ac quis interdum</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>In eget nisi vestibulum eu magna rutrum convallis ex pretium varius neque ac dolor maecenas quis lectus porttitor leo sed lectus.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Id tortor gravida</h6>
      <ul class="nospace linklist">
        <li><a href="#">Condimentum nullam tempor</a></li>
        <li><a href="#">Vestibulum vulputate iaculis</a></li>
        <li><a href="#">Sapien volutpat nec suscipit</a></li>
        <li><a href="#">Velit massa sed metus mauris</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ --> 
  </footer>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>