var setElementQuality;

setElementQuality = function(uom, style_item, quality, from_value) {
  if (quality === "opacity") {
    document.getElementById(style_item).style.opacity = from_value;
    return from_value;
  } else if (quality === "height") {
    document.getElementById(style_item).style.height = from_value.toString() + uom;
    return from_value;
  } else if (quality === "margin-top") {
    document.getElementById(style_item).style.marginTop = from_value.toString() + uom;
    return from_value;
  } else if (quality === "top") {
    document.getElementById(style_item).style.top = from_value.toString() + uom;
    return from_value;
  } else if (quality === "left") {
    document.getElementById(style_item).style.left = from_value.toString() + uom;
    return from_value;
  } else if (quality === "width") {
    document.getElementById(style_item).style.width = from_value.toString() + uom;
    return from_value;
  } else if (quality === "line-height") {
    document.getElementById(style_item).style.lineHeight = from_value.toString();
    return from_value;
  } else if (quality === "font-size") {
    document.getElementById(style_item).style.fontSize = from_value.toString() + uom;
    return from_value;
  } else if (quality === "min-width") {
    document.getElementById(style_item).style.minWidth = from_value.toString() + uom;
    return from_value;
  } else if (quality === "min-height") {
    document.getElementById(style_item).style.minHeight = from_value.toString() + uom;
    return from_value;
  }
};

var getElementQuality;

getElementQuality = function(style_item, quality) {
  var value;
  if (quality === "line-height") {
    value = document.getElementById(style_item).style.lineHeight;
  }
  return value;
};


//


var move_values, move_values_init, value_to;

move_values = function(uom, style_item, quality, from_value, to_value, step, tolerance) {
  if (from_value < to_value) {
    from_value = from_value + step;
  } else if (from_value > to_value) {
    from_value = from_value - step;
  }
  if (to_value - from_value < tolerance && to_value - from_value > -1 * tolerance) {
    clearInterval(update_values);
  }
  return setElementQuality(uom, style_item, quality, from_value);
};

move_values_init = function(uom, fps, style_item, quality, from_value, to_value, step, tolerance) {
  var update_values;
  return setInterval(update_values = function() {
    return from_value = move_values(uom, style_item, quality, from_value, to_value, step, tolerance);
  }, fps);
};

value_to = function(uom, time, fps, style_item, quality, from_value, to_value, step, tolerance) {
  var update_values;
  if (tolerance == null) {
    tolerance = 0.001;
  }
  return setTimeout(update_values = function() {
    var new_value;
    return new_value = move_values_init(uom, fps, style_item, quality, from_value, to_value, step, tolerance);
  }, time);
};


//


var detect_ellittic_speed, ellittic_motion, move_ellittic, value_ellittic_to;

detect_ellittic_speed = function(speed_increase, from_value, focus_one, focus_two, rescaling) {
  var increase;
  increase = focus_one + focus_two - 2 * from_value;
  return speed_increase = speed_increase + increase / rescaling;
};

move_ellittic = function(direction, uom, style_item, quality, from_value, to_value, step, speed_increase) {
  var speed;
  if (direction === "up") {
    if (from_value < to_value) {
      speed = step;
      step = step + speed * speed_increase;
      from_value = from_value + step;
      return setElementQuality(uom, style_item, quality, from_value);
    }
  } else if (direction === "down") {
    if (from_value > to_value) {
      speed = step;
      step = step + speed * speed_increase;
      from_value = from_value + step;
      return setElementQuality(uom, style_item, quality, from_value);
    }
  }
};

ellittic_motion = function(direction, uom, fps, style_item, quality, from_value, to_value, step, speed_increase, focus_center, rescaling) {
  var distance, focus_one, focus_two, update_values;
  distance = to_value - from_value;
  focus_one = distance / focus_center;
  focus_one = from_value + focus_one;
  focus_two = distance / focus_center * (focus_center - 1);
  focus_two = from_value + focus_two;
  return setInterval(update_values = function() {
    speed_increase = detect_ellittic_speed(speed_increase, from_value, focus_one, focus_two, rescaling);
    return from_value = move_ellittic(direction, uom, style_item, quality, from_value, to_value, step, speed_increase);
  }, fps);
};

value_ellittic_to = function(direction, uom, time, fps, style_item, quality, from_value, to_value, step, speed_increase, focus_center, rescaling) {
  var update_values;
  return setTimeout(update_values = function() {
    var new_value;
    return new_value = ellittic_motion(direction, uom, fps, style_item, quality, from_value, to_value, step, speed_increase, focus_center, rescaling);
  }, time);
};


//


var set_element_quality;

set_element_quality = function(uom, time, style_item, quality, value) {
  var update_values;
  return setTimeout(update_values = function() {
    var new_value;
    return new_value = setElementQuality(uom, style_item, quality, value);
  }, time);
};

var get_element_quality;

get_element_quality = function(time, style_item, quality) {
  var update_values;
  return setTimeout(update_values = function() {
    var new_value;
    return new_value = getElementQuality(style_item, quality);
  }, time);
};


//



// -------------


entering = function() {
  set_element_quality("%", 0, "logo_background", "height", 95);
  set_element_quality("%", 0, "logo_line", "top", 50);
  set_element_quality("px", 0, "logo_line", "margin-top", 39);
  set_element_quality("", 0, "logo_image", "opacity", 0);
  set_element_quality("", 0, "logo_line", "opacity", 0);
  set_element_quality("", 0, "header_tab", "opacity", 0);
  set_element_quality("", 0, "footer_menu", "opacity", 0);
  set_element_quality("", 0, "current_page_tab", "opacity", 0);
  set_element_quality("", 0, "profile_image", "opacity", 0);
  set_element_quality("", 0, "central_menu", "opacity", 0);
  set_element_quality("", 0, "menu_home", "opacity", 0);
  value_to("", 500, 10, "logo_image", "opacity", 0, 0.6, 0.005);
  value_to("", 500, 10, "logo_line", "opacity", 0, 1, 0.01);
  value_to("", 1500, 10, "header_tab", "opacity", 0, 1, 0.005);
  value_ellittic_to("down", "%", 4000, 10, "logo_background", "height", 95, 10, 0.01, 0.001, 5, 80);
  value_ellittic_to("up", "%", 4000, 10, "logo_line", "top", 50, 100, 0.01, 0.001, 5, 80);
  value_ellittic_to("down", "px", 4000, 10, "logo_line", "margin-top", 39, -2, 0.03, 0.001, 20, 40);
  value_to("", 5000, 10, "footer_menu", "opacity", 0, 1, 0.01);
  value_to("", 5000, 10, "current_page_tab", "opacity", 0, 1, 0.01);
  value_to("", 6500, 10, "profile_image", "opacity", 0, 0.9, 0.01);
  value_to("", 6500, 10, "central_menu", "opacity", 0, 0.8, 0.01);
  value_to("", 6500, 10, "menu_home", "opacity", 0, 1, 0.01);
};


//-----CSS-Font

var set_font_size;

set_font_size = function(item, quality, original_value, uom, rad) {
  var originalFontSize, originalHeight = 700, newFontSize, newHeight, scaleFactor, newWidth, screenRate;
//  originalFontSize = get_element_quality(0, item, quality);
  newHeight = window.innerHeight;
  newWidth = window.innerWidth;
  screenRate = newHeight/newWidth;
  originalFontSize = original_value;
  if (newHeight < 500) {
    scaleFactor = Math.pow(500/originalHeight, 1/rad);
    newFontSize = Math.round(originalFontSize * scaleFactor * 100) / 100;
    set_element_quality(uom, 0, item, quality, newFontSize);
  } else if (newHeight >= 400 && newHeight < 660) {
    scaleFactor = Math.pow(newHeight/originalHeight, 1/rad);
    newFontSize = Math.round(originalFontSize * scaleFactor * 100) / 100;
    set_element_quality(uom, 0, item, quality, newFontSize);
  } else if (newHeight >= 660) {
    set_element_quality(uom, 0, item, quality, originalFontSize);
  }
};

var font_size_min;

font_size_min = function(item, quality, original_value, uom1, new_value, uom2) {
  var newHeight, newWidth;
  newWidth = window.innerWidth;
  if (newWidth < 850) {
    set_element_quality(uom2, 0, item, quality, new_value);
  } else if (newWidth >= 850) {
    set_element_quality(uom1, 0, item, quality, original_value);
  }
};

//------------TABLE-HEIGHT

var micropost_getHeight;

micropost_getHeight = function() {
var heightT = document.getElementById("micropost").offsetHeight;
};


var mp_original_style;
var enlarge_post, shrink_post;
var post_open = false;
var title_over, descr_over, title_fadeIn;

var posTables = function(num_cycles, initial_top, initial_left) {
  var current_top = initial_top, current_left = initial_left, maximum_width = 70, post_distance = 25, tbl, num_posts_per_line, tbl_top_position = [], previous_id, tbl_top_anal, tbl_top_anal_height, column_height_array = [], max_height, new_top_offsets = [], original_post_css;

  num_posts_per_line = Math.floor((maximum_width-initial_left)/post_distance) + 1;
  column_height_array = [0,0,0];
  for (var current_id = 0; current_id <= num_cycles; current_id++) {
    var tbl, tbl_top_anal_height;
    tbl = document.getElementById("micropost" + current_id );
    tbl_top_anal_height = tbl.offsetHeight;
    column_height_array[current_id % num_posts_per_line] = column_height_array[current_id % num_posts_per_line] + tbl_top_anal_height + 15;
  };
  max_height = Math.max.apply(Math, column_height_array);
  for (var l = 0; l < num_posts_per_line; l++) {
    new_top_offsets[l] = (max_height - column_height_array[l]) / 2;
  };
  for (var current_id = 0; current_id <= num_cycles; current_id++ ) {
    tbl = document.getElementById("micropost" + current_id );
    if (current_id >= num_posts_per_line) {
      previous_id = current_id - (num_posts_per_line );
      tbl_top_anal = document.getElementById("micropost" + previous_id);
      tbl_top_anal_height = tbl_top_anal.offsetHeight;
      current_top = tbl_top_position[current_id % num_posts_per_line] + tbl_top_anal_height + 15 + new_top_offsets[current_id % num_posts_per_line];
      tbl_top_position[current_id % num_posts_per_line] = current_top;
    } else {
      current_top = initial_top + new_top_offsets[current_id % num_posts_per_line];
      tbl_top_position[current_id % num_posts_per_line] = initial_top;
    }
    mp_original_style = tbl.getAttribute("style");
    tbl.setAttribute("style", "position: absolute; width: 23%; top:" + current_top + "px; left:" + current_left + "%; font-size: 0.9em; border-collapse: collapse; font-family: Impact, Charcoal, sans-serif; text-align: center; color: #333; font-weight: bold; background-color: #ddd;");
    current_left = current_left + post_distance;
    if (current_left > maximum_width) { 
      current_left = initial_left;
    }    
  }
};

enlarge_post = function(elem, id_number) {
  var attr, attr_array = [], n_attr, n_array = [], top_value, width_value, left_value, mp_title, mp_descr;
  attr = elem.getAttribute("style");
  attr_array = attr.replace(" ", "").split(";");
  if (post_open == false) {
    for (var i=0; i<attr_array.length; i++) {
      n_attr = attr_array[i];
      n_array = n_attr.split(":");
      if (n_array[0].indexOf("top") > -1) { 
        top_value = n_array[1];
        top_value = top_value.replace(/[^0-9.]+/g, '');
        top_value = (+top_value) - 1;
      }
      if (n_array[0].indexOf("left") > -1) { 
        left_value = n_array[1];
        left_value = left_value.replace(/[^0-9.]+/g, '');
        left_value = (+left_value) - 1;
      }
      if (n_array[0].indexOf("width") > -1) { 
        width_value = n_array[1];
        width_value = width_value.replace(/[^0-9.]+/g, '');
        width_value = (+width_value) + 2;
      }
    }
    mp_original_style = elem.getAttribute("style");
    post_open = true;
    elem.setAttribute("style", mp_original_style + " width:" + width_value + "%; top:" + top_value + "px; left:" + left_value + "%; ");
    mp_title = "micropost_title" + id_number;
    mp_descr = "micropost_descr" + id_number;
  } else {
    n_attr = elem.getAttribute("style");
    elem.setAttribute("style", n_attr);
  }
};

shrink_post = function(elem, id_number) {
  var mp_title, mp_descr;
  clearInterval(title_fadeIn);
  elem.setAttribute("style", mp_original_style);
  mp_title = "micropost_title" + id_number;
  mp_descr = "micropost_descr" + id_number;
  document.getElementById(mp_title).setAttribute("style", "padding: 10px; font-size: 100%;");
  document.getElementById(mp_descr).setAttribute("style", "padding: 10px; font-size: 80%; text-align: left;");
  post_open = false;
};

title_over = function(elem, id_number) {
  var mp_descr, gray_grad = 221, new_style;
  mp_descr = "micropost_descr" + id_number;
  document.getElementById(mp_descr).setAttribute("style", "padding: 12px; font-size: 90%; text-align: left;");
  elem.setAttribute("style", "padding: 12px; font-size: 110%;");
  title_fadeIn = 
    setInterval( function() {
      new_style = "padding: 12px; font-size: 110%; background-color: rgb(" + gray_grad + "," + gray_grad + ","  + gray_grad + ")";
      elem.setAttribute("style", new_style);
      gray_grad++;
      if (gray_grad > 238) {
        clearInterval(title_fadeIn);
      };
    }, 1); 
};

descr_over = function(elem, id_number) {
  var mp_title;
  mp_title = "micropost_title" + id_number;
  elem.setAttribute("style", "padding: 12px; font-size: 90%; text-align: left;")
  document.getElementById(mp_title).setAttribute("style", "padding: 12px; font-size: 110%; background-color: rgb(221, 221, 221)");
};
