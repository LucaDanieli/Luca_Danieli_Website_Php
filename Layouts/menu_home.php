<link rel="stylesheet" type="text/css" href="Css/central_menu.css">

<div id="menu_home">
  <div id="tab_music">
    <div id="music_menu">
      <p id="menu_big_font"> <!--<a href="<?php echo $music_and_video_page ?>" id="menu_link_big">--> <?php echo strtoupper($music_and_video_title) ?> </p>
      <p id="menu_small_font"><!--<a href="<?php echo $music_pages[0] ?>" id="menu_link_small">--> <?php echo strtoupper($music_names[0]) ?> <!--</a>--> | 
        <a href="<?php echo $music_pages[1] ?>" id="menu_link_small"> <?php echo $music_names[1] ?> </a> | 
        <a href="<?php echo $music_pages[2] ?>" id="menu_link_small"> <?php echo $music_names[2] ?> </a> | 
        <a href="<?php echo $music_pages[3] ?>" id="menu_link_small"> <?php echo $music_names[3] ?> </a></p>
      <p id="menu_small_font"><!--<a href="<?php echo $video_pages[0] ?>" id="menu_link_small">--> <?php echo strtoupper($video_names[0]) ?> <!--</a>--> | 
        <a href="<?php echo $video_pages[1] ?>" id="menu_link_small"> <?php echo $video_names[1] ?> </a></p>
    </div>
    <div id="line_music"></div>
  </div>

  <div id="tab_writings">
    <div id="writings_menu">
      <p id="menu_big_font"><!--<a href="<?php echo $writings_page ?>" id="menu_link_big">--> <?php echo strtoupper($writings_title) ?> </p>
      <p id="menu_small_font"><!--<a href="<?php echo $poems_pages[0] ?>" id="menu_link_small">--> <?php echo strtoupper($poems_names[0]) ?> <!--</a>--> | 
        <a href="<?php echo $poems_pages[1] ?>" id="menu_link_small"> <?php echo $poems_names[1] ?> </a> | 
        <a href="<?php echo $poems_pages[2] ?>" id="menu_link_small"> <?php echo $poems_names[2] ?> </a>  | 
        <a href="<?php echo $poems_pages[3] ?>" id="menu_link_small"> <?php echo $poems_names[3] ?> </a> </p>
      <p id="menu_small_font"><!--<a href="<?php echo $theatre_pages[0] ?>" id="menu_link_small">--> <?php echo strtoupper($theatre_names[0]) ?> <!--</a>--> | 
      <a href="<?php echo $theatre_pages[1] ?>" id="menu_link_small"> <?php echo $theatre_names[1] ?> </a></p>
    </div>
    <div id="line_writings"></div>
  </div>

  <div id="tab_works">
    <div id="works_menu">
      <p id="menu_big_font"><!--<a href="<?php echo $works_page ?>" id="menu_link_big">--> <?php echo strtoupper($works_title) ?> </p>
      <p id="menu_small_font"><!--<a href="<?php echo $codes_pages[0] ?>" id="menu_link_small">--> <?php echo strtoupper($codes_names[0]) ?> <!--</a>--> | 
        <a href="<?php echo $codes_pages[1] ?>" id="menu_link_small"> <?php echo $codes_names[1] ?> </a> | 
        <a href="<?php echo $codes_pages[2] ?>" id="menu_link_small"> <?php echo $codes_names[2] ?> </a>
        <?php if (count($codes_pages) > 3) {
          echo '<a href="' . $codes_pages[0] . '" id="menu_link_small"> Others.. </a>';
        } else {
          //echo '<a href="' . $codes_pages[3] . '" id="menu_link_small"> ' . $codes_names[3] . ' </a>';
          //return;
        }; ?>
        </p>
      <!--<p id="menu_small_font"><a href="<?php echo $publications_pages[0] ?>" id="menu_link_small"> <?php echo strtoupper($publications_names[0]) ?> </a></p>-->
    </div>
    <div id="line_works"></div>
  </div>
</div>
