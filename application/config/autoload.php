<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','view','form_validation');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','form','file');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('model');
