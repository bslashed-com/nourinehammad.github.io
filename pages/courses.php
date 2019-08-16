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


    <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/4z4GYGlE3XQ" frameborder="0" allowfullscreen> </iframe>
    </div>
    </div>
</div>
