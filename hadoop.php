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
        </ul>
        <li><strong>JAVA INSTALLATION</strong></li>
        <iframe src="txt/java.txt" width="500px" height="45px"></iframe>
        <li><strong>MAKING JAVA AVAILABLE TO ALL USERS</strong></li>
        Please enter the java version instead of -x in the following command: 
        <iframe src="txt/java_local.txt" width="500px" height="45px"></iframe>
        <li><strong>To set up java PATH and JAVA_HOME variables:</strong> </li>
        <iframe src="txt/java_variables.txt" width="500px" height="150px"></iframe>
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
      <iframe src="txt/hdp_extract.txt" width="500px" height="150px"></iframe>
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
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
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