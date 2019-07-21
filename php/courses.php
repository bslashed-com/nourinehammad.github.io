<?php

function getCoursesCount()
{
    global $courses;
    return count($courses);
}


function givenArticlesIndexGetCoursesParagraph($index)
{
    global $courses;
    $j = 0;
    $name = $courses[$index][$j++];
    $link = $courses[$index][$j++];
    $formatNew = '
    <div class="articlePDivs">  <a class="articleLinks" href="%s" target="_blank">%s</a>
    </div>
  		';
    $result = sprintf($formatNew, $link, $name);
    return $result;
}

?>