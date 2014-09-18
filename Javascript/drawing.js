var draw, littleDraw;

draw = function(num_cycles, init_cycle) {
  var all_drawings, array_points, c, canvas, color_points, ctx, current_cycle, drawing, num_points, quadratic_points, tangents, _i;
  c = document.getElementById("canvas");
  ctx = c.getContext("2d");
  canvas = document.getElementById("background_canvas");
  c.width = canvas.clientWidth;
  c.height = canvas.clientHeight;
  _i = 0;
  current_cycle = init_cycle;
  num_points = 250;
  array_points = Array(num_points);
  quadratic_points = Array(num_points - 1);
  tangents = Array(num_points - 1);
  color_points = Array(num_points);
  all_drawings = Array();
  drawing = function() {
    var grey_range, i, quad_x, quad_y, x, y, _k, _numDrawings, grey_tonality;
    grey_range = 255;
    for (var _p = 0; _p < num_points; _p++) {
    if (_i >= grey_range) {
      color_points[_i] = 1 / 1.5;
    } else {
      color_points[_i] = _i / (grey_range * 1.5);
    }
    if (_i === 0) {
      array_points[_i] = [Math.floor(Math.random() * c.width), Math.floor(Math.random() * c.height)];
      quadratic_points[_i] = [quad_x = array_points[_i][0] + (Math.floor(Math.random() * 3) + 2) * (Math.random() < 0.5 ? -1 : 1), quad_y = array_points[_i][1] + (Math.floor(Math.random() * 3) + 2) * (Math.random() < 0.5 ? -1 : 1)];
      _i = _i + 1;
    } else {
      i = _i - 1;
      array_points[_i] = [x = array_points[i][0] + (10 * (Math.random() < 0.5 ? -1 : 1)), y = array_points[i][1] + (+10 * (Math.random() < 0.5 ? -1 : 1))];
      if (array_points[_i][0] > c.width) {
        array_points[_i][0] = array_points[_i][0] - (array_points[_i][0] - c.width) * 4;
      } else if (array_points[_i][0] < 0) {
        array_points[_i][0] = 0 - array_points[_i][0];
      } else if (array_points[_i][1] > c.height) {
        array_points[_i][1] = array_points[_i][1] - (array_points[_i][1] - c.height) * 4;
      } else {
        if (array_points[_i][1] < 0) {
          array_points[_i][1] = 0 - array_points[_i][1];
        }
      }
      ctx.beginPath();
      ctx.moveTo(array_points[i][0], array_points[i][1]);
      grey_tonality = Math.floor(Math.random() * 250).toString();
      ctx.strokeStyle = "rgba(" + grey_tonality + ", " + grey_tonality + ", " + grey_tonality + "," + color_points[i].toString() + ")";
      tangents[i] = (array_points[_i][1] - quadratic_points[i][1]) / (array_points[_i][0] - quadratic_points[i][0]);
      quad_x = array_points[_i][0] + ((Math.floor((Math.random() * 3) + 2)) * ((array_points[_i][0] - quadratic_points[i][0]) < 0.0 ? -1 : 1));
      quadratic_points[_i] = [quad_x, quad_y = array_points[_i][1] + ((quad_x - array_points[_i][0]) * tangents[i])];
      ctx.quadraticCurveTo(quadratic_points[i][0], quadratic_points[i][1], array_points[_i][0], array_points[_i][1]);
      ctx.stroke();
      _i = _i + 1;
      if (_i === num_points) {
        _i = 0;
        current_cycle = current_cycle + 1;
        if (current_cycle === num_cycles) {
          _i = num_points + 1;
          _k = 0;
          _numDrawings = all_drawings.length;
          while (_k < _numDrawings) {
            clearInterval(all_drawings[_k]);
            _k++;
          }
        }
      }
    }
    }
  };

  for (var _r = 0; _r < init_cycle; _r++) {
    drawing();
  };
  all_drawings[0] = setInterval(function() {
    drawing();
  }, 1);
};

littleDraw = function(num_cycles, init_cycle) {
  var all_drawings, array_points, c, canvas, color_points, ctx, current_cycle, drawing, num_points, quadratic_points, tangents, _i;
  c = document.getElementById("canvas");
  ctx = c.getContext("2d");
  canvas = document.getElementById("background_canvas");
  c.width = canvas.clientWidth;
  c.height = canvas.clientHeight;
  _i = 0;
  current_cycle = init_cycle;
  num_points = 250;
  array_points = Array(num_points);
  quadratic_points = Array(num_points - 1);
  tangents = Array(num_points - 1);
  color_points = Array(num_points);
  all_drawings = Array();
  drawing = function() {
    var grey_range, i, quad_x, quad_y, x, y, _k, _numDrawings, grey_tonality;
    grey_range = 255;
    if (_i >= grey_range) {
      color_points[_i] = 1 / 1.5;
    } else {
      color_points[_i] = _i / (grey_range * 1.5);
    }
    if (_i === 0) {
      array_points[_i] = [Math.floor(Math.random() * c.width), Math.floor(Math.random() * c.height)];
      quadratic_points[_i] = [quad_x = array_points[_i][0] + (Math.floor(Math.random() * 3) + 2) * (Math.random() < 0.5 ? -1 : 1), quad_y = array_points[_i][1] + (Math.floor(Math.random() * 3) + 2) * (Math.random() < 0.5 ? -1 : 1)];
      _i = _i + 1;
    } else {
      i = _i - 1;
      array_points[_i] = [x = array_points[i][0] + (10 * (Math.random() < 0.5 ? -1 : 1)), y = array_points[i][1] + (+10 * (Math.random() < 0.5 ? -1 : 1))];
      if (array_points[_i][0] > c.width) {
        array_points[_i][0] = array_points[_i][0] - (array_points[_i][0] - c.width) * 4;
      } else if (array_points[_i][0] < 0) {
        array_points[_i][0] = 0 - array_points[_i][0];
      } else if (array_points[_i][1] > c.height) {
        array_points[_i][1] = array_points[_i][1] - (array_points[_i][1] - c.height) * 4;
      } else {
        if (array_points[_i][1] < 0) {
          array_points[_i][1] = 0 - array_points[_i][1];
        }
      }
      ctx.beginPath();
      ctx.moveTo(array_points[i][0], array_points[i][1]);
      grey_tonality = Math.floor(Math.random() * 250).toString();
      ctx.strokeStyle = "rgba(" + grey_tonality + ", " + grey_tonality + ", " + grey_tonality + "," + color_points[i].toString() + ")";
      tangents[i] = (array_points[_i][1] - quadratic_points[i][1]) / (array_points[_i][0] - quadratic_points[i][0]);
      quad_x = array_points[_i][0] + ((Math.floor((Math.random() * 3) + 2)) * ((array_points[_i][0] - quadratic_points[i][0]) < 0.0 ? -1 : 1));
      quadratic_points[_i] = [quad_x, quad_y = array_points[_i][1] + ((quad_x - array_points[_i][0]) * tangents[i])];
      ctx.quadraticCurveTo(quadratic_points[i][0], quadratic_points[i][1], array_points[_i][0], array_points[_i][1]);
      ctx.stroke();
      _i = _i + 1;
      if (_i === num_points) {
        _i = 0;
        current_cycle = current_cycle + 1;
        if (current_cycle === num_cycles) {
          _i = num_points + 1;
          _k = 0;
          _numDrawings = all_drawings.length;
          while (_k < _numDrawings) {
            clearInterval(all_drawings[_k]);
            _k++;
          }
        }
      }
    }
  };

  for (var _r = 0; _r < init_cycle; _r++) {
    drawing();
  };
  all_drawings[0] = setInterval(function() {
    drawing();
  }, 1);
};
