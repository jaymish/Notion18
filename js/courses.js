// Institutes
var institute_arr = new Array("LJ Institute of Engineering & Technology", "LJ Institute of Media & Communication", "RJ Tibrewal Commerce College", "LJ Institute of Management Studies", "LJ Institute of Pharmacy", "LJ Institute of Applied Sciences", "LJ Institute of Business Administration", "LJ College of Computer Application", "LJ Institute of Computer Application", "LJ School of Architecture", "LJ School of Law", "LJ Polytechnic", "LJ Institute of Physiotherapy", "New LJ Commerce College", "Adani Institute of Infrastructure Engineering", "Aditya Silver Oak Institute of Technology", "Ahmedabad Institute of Technology", "Amiraj College of Engineering and Technology", "Apollo Institute of Engineering and Technology", "Central Institute of Plastic Engineering and Technology, Vatva", "Hasmukh Goswami College of Engineering", "Institute of Engineering and Technology (IET)", "Institute of Infrastructure Technology Research and Management (IITRAM)", "L. D. Engineering College", "Nirma University, Institute of Technology", "SAL College of Engineering", "Sal Institute of Technology and Engineering Research", "SAL Engineering and Technical Institute, Sola", "Silver Oak College of Engineering and Technology", "Vishwakarma Government Engineering College (VGEC)", "Government Engineering College", "Gandhinagar Institute of Technology", "Kalol Institute of Technology, Kalol", "Other");

// Courses
var c_a = new Array();
c_a[0] = "";
c_a[1] = "Automobile Engineering|Chemical Engineering|Civil Engineering|Computer Engineering|Electronics & Communication Engineering|Instrumentation & Control Engineering|Information & Communication Technology|Information Technology|Mechanical Engineering";
c_a[2] = "PGDMC";
c_a[3] = "B.COM|M.COM";
c_a[4] = "Masters of Business Administration";
c_a[5] = "BPharm|MPharm";
c_a[6] = "Chemistry|Microbiology|Biotechnology|Physics|Maths|English";
c_a[7] = "BBA";
c_a[8] = "BCA";
c_a[9] = "MCA|MCA(integrated)";
c_a[10] = "BArch";
c_a[11] = "LL.B.|B.B.A LL.B.";
c_a[12] = "Architecture Assistantship|Automobile|Electrical|Civil|Computer|Electronics & Communication|Information Technology|Mechanical";
c_a[13] = "NA";
c_a[14] = "NA";
c_a[15] = "Civil & Infrastructure Engineering|Electrical Engineering|Information and Communication Technology";
c_a[16] = "Aeronautical Engineering|Chemical Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Information Technology|Mechanical Engineering";
c_a[17] = "Automobile Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering";
c_a[18] = "Civil Engineering|Computer Science and Engineering|Electrical Engineering|Mechanical Engineering";
c_a[19] = "Civil Engineering|Computer Engineering|Electrical Engineering|Information Technology|Mechanical Engineering";
c_a[20] = "Manufacturing Engineering|Plastic Technology";
c_a[21] = "Automobile Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering";
c_a[22] = "Chemical Engineering|Information and Communication Technology|Mechanical Engineering";
c_a[23] = "Civil Engineering|Electrical Engineering|Mechanical Engineering";
c_a[24] = "Automobile Engineering|Biomedical Engineering|Chemical Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Environmental Engineering|Information Technology|Instrumentation & Control Engineering|Mechanical Engineering|Plastic Technology|Rubber Technology|Textile Technology";
c_a[25] = "Chemical Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Instrumentation & Control Engineering|Mechanical Engineering";
c_a[26] = "Chemical Engineering|Civil Engineering|Computer Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering|Mechatronics Engineering";
c_a[27] = "Automobile Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Instrumentation & Control Engineering|Mechanical Engineering";
c_a[28] = "Chemical Engineering|Civil Engineering|Computer Engineering|Electrical & Electronics Engineering|Mechanical Engineering";
c_a[29] = "Aeronautical Engineering|Civil Engineering|Computer Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering";
c_a[30] = "Chemical Engineering|Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Instrumentation & Control Engineering|Mechanical Engineering|Power Electronics Engineering";
c_a[31] = "Biomedical Engineering|Computer Engineering|Electronics & Communication Engineering|Information Technology|Instrumentation & Control Engineering|Metallurgical Engineering";
c_a[32] = "Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering";
c_a[33] = "Civil Engineering|Computer Engineering|Electrical Engineering|Electronics & Communication Engineering|Information Technology|Mechanical Engineering";
c_a[34] = "ANY"

function populateCourses(instituteElementId, courseElementId) {

    var selectedInstituteIndex = document.getElementById(instituteElementId).selectedIndex;

    var courseElement = document.getElementById(courseElementId);

    courseElement.length = 0;
    courseElement.options[0] = new Option('Select Course', '');
    courseElement.selectedIndex = 0;

    var course_arr = c_a[selectedInstituteIndex].split("|");

    for (var i = 0; i < course_arr.length; i++) {
        courseElement.options[courseElement.length] = new Option(course_arr[i], course_arr[i]);
    }
}

function populateInstitutes(instituteElementId, courseElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var instituteElement = document.getElementById(instituteElementId);
    instituteElement.length = 0;
    instituteElement.options[0] = new Option('Select Institute', '-1');
    instituteElement.selectedIndex = 0;
    for (var i = 0; i < institute_arr.length; i++) {
        instituteElement.options[instituteElement.length] = new Option(institute_arr[i], institute_arr[i]);
    }

    // Assigned all institutes. Now assign event listener for the courses.

    if (courseElementId) {
        instituteElement.onchange = function () {
            populateCourses(instituteElementId, courseElementId);
        };
    }
}