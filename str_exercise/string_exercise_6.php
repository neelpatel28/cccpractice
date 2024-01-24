<?php

//Logic : higher percent is given comparatively btwn two variables, whic is the difference.
// hence [ a% - b% ] / a%

function lower_percent($higherPercent) {
  // Calculate the lower %
  $lowerPercent = (100 * $higherPercent) / (100 + $higherPercent);
  echo "If a is $higherPercent% higher than b, then b is $lowerPercent% lower than a.";
}

lower_percent(10);
?>