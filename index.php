<?php

include 'config.php';
include 'functions.php';
include 'thinkific.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch ($action) {
  case 'get_course_reviews':
    echo get_course_reviews($course_ids);
    break;
  case 'get_enrollments':
    echo get_enrollments();
    break;
}
