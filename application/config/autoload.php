<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session','form_validation','upload', 'email');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','form','security','text','string','email');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Auth_model', 'Auth_modelOC','Gsu_model');
