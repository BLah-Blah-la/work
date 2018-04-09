$(correctImageSize($('#img')))

function correctImageSize(img) {
  var was = {
    w: img.offsetWidth,
    h: img.offsetHeight
    }
  var max = {
    w: 300,
    h: 700
    }
  if (!was.w || !was.h) return false; // anti DBZ
  var rK = {
    w: max.w/was.w,
    h: max.h/was.h
    }
  var resizeK = (rK.w > rK.h) ? rK.h : rK.w; 
  img.width = Math.floor(resizeK * was.w);
  img.height = Math.floor(resizeK * was.h);
  return true;
  }