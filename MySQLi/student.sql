CREATE TABLE student_info (
  student_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(50) NOT NULL,
  student_age INT(3) NOT NULL,
  student_address VARCHAR(100) NOT NULL
);

CREATE TABLE course_info (
  course_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(50) NOT NULL,
  course_teacher VARCHAR(50) NOT NULL,
  course_time VARCHAR(50) NOT NULL,
  course_location VARCHAR(100) NOT NULL
);

CREATE TABLE student_course (
  student_id INT(11) NOT NULL,
  course_id INT(11) NOT NULL,
  PRIMARY KEY (student_id, course_id),
  FOREIGN KEY (student_id) REFERENCES student_info(student_id),
  FOREIGN KEY (course_id) REFERENCES course_info(course_id)
);
