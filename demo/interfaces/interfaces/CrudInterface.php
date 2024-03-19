<?php

interface CrudInterface {
  function create($entity = null, $isNew = true) : bool;
  function read();
  function update();
  function delete();
} 