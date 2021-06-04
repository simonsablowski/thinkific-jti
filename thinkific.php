<?php

function get_course_reviews(array $course_ids) {
  $output = '';

  foreach($course_ids as $course_id) {
    $output .= get_data(sprintf('https://api.thinkific.com/api/public/v1/course_reviews?course_id=%s&page=1&limit=1000&approved=true', $course_id));
  }

  return $output;
}

function get_enrollments() {
  $output = get_data('https://api.thinkific.com/api/public/v1/enrollments?page=1&limit=2000');

  return $output;
}
