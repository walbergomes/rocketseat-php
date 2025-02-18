<?php

function dumpAndDie(...$dump) {
  echo "<pre>";
  var_dump($dump);
  echo "</pre>";
  die();
};