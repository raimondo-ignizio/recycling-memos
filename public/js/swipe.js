document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

let xDown = null;
let yDown = null;

function getTouches(evt) {
  return evt.touches;
}

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
};

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    let xUp = evt.touches[0].clientX;
    let yUp = evt.touches[0].clientY;

    let xDiff = xDown - xUp;
    let yDiff = yDown - yUp;

    if ( Math.abs(xDiff) > Math.abs(yDiff) ) {
        if (xDiff > 0) {
          switch (window.location.pathname) {
            case "/":
            window.location.href = "form";
            break;
            case "/form":
            case "/memo":
            window.location.href = "/";
            break;
          }

        } else {
            switch (window.location.pathname) {
              case "/":
              case "/form":
              window.location.href = "memo";
              break;
              case "/memo":
              window.location.href = "form";
              break;
            }
        }
    }

    xDown = null;
    yDown = null;
};
