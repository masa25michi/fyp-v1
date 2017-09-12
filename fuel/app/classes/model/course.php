<?php

class Model_Course extends \Orm\Model {
    protected static $_table_name = 'course';

    protected static $_primary_key = array('course_id');

    protected static $_properties = array (
        'course_id',
        'course_name'
    );
}