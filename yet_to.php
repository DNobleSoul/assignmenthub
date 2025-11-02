<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> Details</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header id="main-header">
        <nav>
            <h1>C. Noble Dike MSc CS, LASU</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active-nav"><a href="index.php#section-two">Courses</a></li>
                <li><a href="#">Credit</a></li>
            </ul>
        </nav>
    </header>

    <section id="detail-layout">
        <div class="course-container">
            
            <aside class="sidebar">
                <div class="sidebar-header">
                    <h3>List of Assignments</h3>
                </div>
                <ul>
                    <!--<li>
                        <a href="course-details.php?course=<?php echo 'assignmentID'; ?>" 
                                class="<?php echo ($code == $course_code) ? 'active-link' : ''; ?>">
                                1st Assignment
                            </a>
                    </li>-->
                    
                    
                </ul>
            </aside>
            
            <article class="main-content">
                <h2 class="detail-title">
                    <?php echo 'No assignment yet!'; ?></h2>

                
                
                

                <a href="index.php#section-two" class="back-link">&larr; Back to Course List</a>
            </article>

        </div>
    </section>

    <footer id="main-footer">
        <p>&copy; 2025 C. Noble Dike MSc CS LASU</p>
    </footer>

</body>
</html>