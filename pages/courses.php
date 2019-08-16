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
    <div class="centerPseudo videoCourses" >
   <iframe width="1152" height="648"
   src="https://www.youtube.com/embed/4z4GYGlE3XQ?autoplay=1">
   </iframe>
    </div>

</div>
