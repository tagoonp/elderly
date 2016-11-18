<div class="main-menu">
  <div class="container" >
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" style="padding: 0px; margin: 0px; background: rgb(255, 115, 0); border: none;">
      <div class="container" style="padding: 0px; margin: 0px;">
        <div class="navbar-header" style="padding: 0px; margin: 0px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand thfont" href="index.php<?php echo $lang_url;?>" style="color: #fff;">
            <?php
            if($default_lang=='th')
              echo "หน้าแรก";
            else
              echo "Home";
            ?>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <?php
            $strSQL = "SELECT * FROM ".$tbPrefix."menu WHERE mn_position = ?";
            $resultMenu1 = $db->select($strSQL, array('1'));
            if($resultMenu1){
              foreach ($resultMenu1 as $value) {
                $strSQL = "SELECT * FROM ".$tbPrefix."submenu WHERE smn_mainmenu_item	 = ?";
                $resultMenu2 = $db->select($strSQL, array($value['mn_id']));
                if($resultMenu2){
                  ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $value['mn_title_'.$default_lang]; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php
                      foreach ($resultMenu2 as $value2) {
                        ?>
                        <li><a href="#contact"><?php echo $value2['smn_title_'.$default_lang]; ?></a></li>
                        <?php
                      }
                      ?>
                    </ul>
                  </li>
                  <?php
                }else{
                  ?>
                  <li><a href="#contact"><?php echo $value['mn_title_'.$default_lang]; ?></a></li>
                  <?php
                }
              }
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </div>
</div>
