<div id="courses" class="contentbox">

  <div id="coursesDiv" class="centerPseudo">

        <?php
        include 'php/courses.php';
        $coursesCount = getCoursesCount();
        for ($i = 0; $i < $coursesCount; $i++) {
            echo givenArticlesIndexGetCoursesParagraph($i);
        }
        ?>

    </div>

</div>
