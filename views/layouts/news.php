<?php
use app\assets\NewsAsset;
use yii\bootstrap4\html;
use yii\bootstrap4\url;

NewsAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<title><?=html::encode($this->title)?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
  <div id="feeds">
    <p><a class="rsslink" href="#">Articles</a> <a class="rsslink" href="#">Comments</a></p>
  </div>
  <!-- /feeds -->
  <div id="topbar"> </div>
  <!-- /topbar -->
  <div id="header">
    <h1><a href="#">Cover Theme</a></h1>
    <h2>Just another Weblog Theme</h2>
  </div>
  <!-- /header -->
  <form method="get" id="searchform" action="#" >
    <input type="text" value="Search this website..."  onfocus="if (this.value == 'Search this website...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this website...';}" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Go" />
  </form>
  <div id="nav">
    <ul id="menu">
      <li class="current_page_item"><a href="#">Home</a></li>
      <li><a href="examples.html">Examples</a></li>
      <li><a href="single.html">Single</a></li>
      <li><a href="#">Drop-down</a>
        <ul>
          <li><a href="#">Level 1</a></li>
          <li><a href="#">Level 1</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a href="#">Level 2</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <!-- /menu -->
  </div>
  <!-- /nav -->
  <div id="content">
    <div id="center">
    	<?=$content?>
    </div>
    <!-- /center -->
    <div id="sidebar">
      <div id="top">
        <div class="topitem">
          <h3>Categories</h3>
          <ul id="categories">
            <li class="cat-item"><a href="#">Culture and Community</a></li>
            <li class="cat-item"><a href="#">Featured</a></li>
            <li class="cat-item"><a href="#">Food and Drinks</a></li>
            <li class="cat-item"><a href="#">Health and Medicine</a></li>
            <li class="cat-item"><a href="#">Politics and Relations</a></li>
            <li class="cat-item"><a href="#">Travel and Leisure</a></li>
          </ul>
          <!-- /categories -->
        </div>
        <!-- /topitem -->
      </div>
      <!-- /top -->
      <!-- <div id="left">
        <div class="sitem">
          <h3>Archives</h3>
          <ul class="links">
            <li><a href="#">November 2009</a></li>
            <li><a href="#">October 2009</a></li>
            <li><a href="#">September 2009</a></li>
            <li><a href="#">August 2009</a></li>
            <li><a href="#">July 2009</a></li>
            <li><a href="#">June 2009</a></li>
            <li><a href="#">May 2009</a></li>
          </ul>
        </div>
      </div> -->
      <!-- /left -->
      <!-- <div id="right">
        <div class="sitem">
          <h3>Blogroll</h3>
          <ul class="links">
            <li><a href="#">Development Blog</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Plugins</a></li>
            <li><a href="#">Suggest Ideas</a></li>
            <li><a href="#">Support Forum</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">WordPress Planet</a></li>
          </ul>
        </div>
      </div> -->
      <!-- /right -->
      <!-- <div id="bottom">
        <div class="sitem">
          <h3>Recent Comments</h3>
          <ul>
            <li class="recentcomments"><a href="#">Lucy</a> on <a href="#">Nam vestibulum ultrices</a><br/>
              <em>&quot;Vivamus vitae risus sed dolor porta tincidunt ut gravida est. Nam viverra ullamc&#8230;&quot;</em></li>
            <li class="recentcomments"><a href="#">Michael</a> on <a href="#">Nam vestibulum ultrices</a><br/>
              <em>&quot;Sed purus justo, sagittis eu posuere ac, rutrum non mi. Nunc nibh lacus, tincidu&#8230;&quot;</em></li>
            <li class="recentcomments"><a href="#">Dora</a> on <a href="#">Lorem ipsum dolor</a><br/>
              <em>&quot;Aliquam id diam purus. Vestibulum mattis accumsan quam in gravida. Duis elementu&#8230;&quot;</em></li>
            <li class="recentcomments"><a href="#">Brian</a> on <a href="#">Vivamus sit</a><br/>
              <em>&quot;Ut convallis nisl commodo magna faucibus commodo. Aenean nibh massa, vestibulum &#8230;&quot;</em></li>
            <li class="recentcomments"><a href="#">Alec</a> on <a href="#">Vivamus sit</a><br/>
              <em>&quot;Morbi at nunc augue, in accumsan dui. Nulla urna mi, mattis id scelerisque id, d&#8230;&quot;</em></li>
          </ul>
        </div>
      </div> -->
    </div>
    <!-- /sidebar -->
    <div id="footer">
      <div id="fbar">
        <div class="flinks">
          <h3>Most commented</h3>
          <ul>
            <li><a href="#">Vivamus sit</a></li>
            <li><a href="#">Nam vestibulum ultrices</a></li>
            <li><a href="#">Lorem ipsum dolor</a></li>
            <li><a href="#">Donec nec lacus</a></li>
            <li><a href="#">Donec lacinia</a></li>
            <li><a href="#">Nunc velit massa</a></li>
          </ul>
        </div>
        <!-- /flinks -->
        <div class="flinks">
          <h3>Recent Articles</h3>
          <ul>
            <li><a href="#">Aenean nisl elit</a></li>
            <li><a href="#">Phasellus accumsan</a></li>
            <li><a href="#">Integer blandit</a></li>
            <li><a href="#">Aenean eros enim</a></li>
            <li><a href="#">Nunc velit massa</a></li>
            <li><a href="#">Donec lacinia</a></li>
          </ul>
        </div>
        <!-- /flinks -->
        <div class="flinks">
          <h3>Tag Cloud</h3>
          <a href="#" style='font-size: 14pt;'>culture</a> <a href="#" style='font-size: 10pt;'>fashion</a> <a href="#" style='font-size: 12pt;'>food</a> <a href="#" style='font-size: 12pt;'>gadget</a> <a href="#" style='font-size: 12pt;'>health</a> <a href="#" style='font-size: 10pt;'>history</a> <a href="#" style='font-size: 8pt;'>language</a> <a href="#" style='font-size: 10pt;'>philosophy</a> <a href="#" style='font-size: 14pt;'>politics</a> <a href="#" style='font-size: 10pt;'>technology</a> <a href="#" style='font-size: 16pt;'>travel</a> <a href="#" style='font-size: 22pt;'>wordpress</a> </div>
        <!-- /flinks -->
      </div>
      <!-- /fbar -->
      <div id="copyright">
        <p>&copy; 2009 Cover Theme &middot; <a href="http://www.onedesigns.ro/designs/wordpress/cover/">Cover Theme</a> by <a href="http://www.onedesigns.ro">One Designs</a></p>
      </div>
      <!-- /copyright -->
    </div>
    <!-- /footer -->
  </div>
  <!-- /content -->
</div>
<!-- /wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
