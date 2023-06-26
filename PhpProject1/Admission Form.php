<!DOCTYPE HTML> 
<html lang="en"> 
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  

<?php
// define variables and set to empty values
$id1Err=$progErr=$BatchErr=$semesterErr= $YearErr=$CreditErr=$BnameErr=$EnameErr=$dateErr= $NidErr= $genderErr= $maritalErr= $BloodErr=$emailErr=
$CellphoneErr=$FathernameErr=$FOcupationErr=$FcellErr=$MothernameErr=$MOcupationErr=$McellErr=$EmailMFErr= $IncomeErr=$preaddErr=$fnameErr=$mnameErr= $peraddErr=
$peraddErr= $localguardErr=$localocuErr=$localaddErr=$localgemailErr=$localgcellErr=$ExamErr=$InstituitionErr=$BoardErr=$GroupErr=$yearpErr=$gpaErr=$waiverErr=$fileErr=
$otherErr=$pwaiverErr=$signAErr=$signPErr=$admErr=$DadmErr= "";
$id1=$prog=$Batch=$semester=$Year=$Credit=$Bname=$Ename=$date=  $Nid= $gender= $marital = $Blood= $email=$Cellphone=
$Fathername=$FOcupation=$Fcell=$Mothername=$MOcupation=$Mcell=$EmailMF= $Income=$preadd= $peradd= $localguard=$localocu=$localadd=$localgemail=$localgcell=$Exam=
$Instituition=$Board=$Group=$yearp=$gpa=$hExam=$hInstituition=$hBoard=$hGroup=$hyearp=$hgpa=$waiver=$file=$other=$pwaiver=$signA=$signP=$adm=$Dadm="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id1"])) {
    $id1Err = "Id is required";
  } else {
    $id1 = test_input($_POST["id1"]);
    
      preg_match('/[0-9]{9}/', $id1); 
  }

  if (empty($_POST["prog"])) {
    $progErr = "Program is required";
  } else {
    $prog = test_input($_POST["prog"]);
     
  }


  if (empty($_POST["Batch"])) {
    $BatchErr = "Batch is required";
  } else {
    $Batch = test_input($_POST["Batch"]);   
  }

  if (empty($_POST["semester"])) {
    $semesterErr = "Semester is required";
  } else {
    $semester = test_input($_POST["semester"]);   
  }

  if (empty($_POST["Year"])) {
    $YearErr = "Year is required";
  } else {
    $Year = test_input($_POST["Year"]);   
  }
  if (empty($_POST["Credit"])) {
    $CreditErr = "Credit is required";
  } else {
    $Credit = test_input($_POST["Credit"]);   
  }


   if (empty($_POST["Bname"])) {
    $BnameErr = "Bangla Name is required";
  } else {
    $Bname = test_input($_POST["Bname"]);   
  }
  
  if (empty($_POST["Ename"])) {
    $EnameErr = "English Name is required";
  } else {
    $Ename = test_input($_POST["Ename"]);   
  }
  
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);   
  }
  if (empty($_POST["Nid"])) {
    $NidErr = "Nid is required";
  } else {
    $Nid = test_input($_POST["Nid"]);   
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);   
  }
  
  if (empty($_POST["marital"])) {
    $maritalErr = "Marital Status is required";
  } else { 
    $marital = test_input($_POST["marital"]);   
  }

  if (empty($_POST["Blood"])) {
    $BloodErr = "Blood Group is required";
  } else { 
    $Blood = test_input($_POST["Blood"]);   
  }
  if (empty($_POST["email"])) {
    $emailErr = "email is required";
  } else { 
    $email = test_input($_POST["email"]);   
  }
  if (empty($_POST["Cellphoneno"])) {
    $CellphoneErr = "Cell phone no is required";
  } else { 
    $Cellphone = test_input($_POST["Cellphoneno"]);   
  }
  if (empty($_POST["Fathername"])) {
    $FathernameErr = "Father name is required";
  } else { 
    $Fathername = test_input($_POST["Fathername"]);   
  }
  if (empty($_POST["FOcupation"])) {
    $FOcupationErr = "Ocupation is required";
  } else { 
    $FOcupation = test_input($_POST["FOcupation"]);   
  }
  if (empty($_POST["fathercellno"])) {
    $FcellErr = "cell No is required";
  } else { 
    $Fcell = test_input($_POST["fathercellno"]);   
  }
  if (empty($_POST["Mothername"])) {
    $MothernameErr = "Mother name is required";
  } else { 
    $Mothername = test_input($_POST["Mothername"]);   
  }
  if (empty($_POST["MOcupation"])) {
    $MOcupationErr = "Mother Ocupation is required";
  } else { 
    $MOcupation = test_input($_POST["MOcupation"]);   
  }
  if (empty($_POST["Mothercellno"])) {
    $McellErr = "cell No is required";
  } else { 
    $Mcell = test_input($_POST["Mothercellno"]);   
  }
  if (empty($_POST["Mothercellno"])) {
    $McellErr = "cell No is required";
  } else { 
    $Mcell = test_input($_POST["Mothercellno"]);   
  }
  if (empty($_POST["EmailMF"])) {
    $EmailMFErr = "Email is required";
  } else { 
    $EmailMF = test_input($_POST["EmailMF"]);   
  }
  if (empty($_POST["Income"])) {
    $IncomeErr = "Income is required";
  } else { 
    $Income = test_input($_POST["Income"]);   
  }
  if (empty($_POST["preadd"])) {
    $preaddErr = "Present Address is required";
  } else { 
    $preadd = test_input($_POST["preadd"]);   
  }
  if (empty($_POST["peradd"])) {
    $peraddErr = "Permanent Address is required";
  } else { 
    $peradd = test_input($_POST["peradd"]);   
  }
  if (empty($_POST["localguard"])) {
    $localguardErr = "Local guardian is required";
  } else { 
    $localguard = test_input($_POST["localguard"]);   
  }

  if (empty($_POST["localocu"])) {
    $localocuErr = "Local ocupation is required";
  } else { 
    $localocu = test_input($_POST["localocu"]);   
  }

  if (empty($_POST["localadd"])) {
    $localaddErr = "Local guardian address is required";
  } else { 
    $localadd= test_input($_POST["localadd"]);   
  }
  if (empty($_POST["localgemail"])) {
    $localgemailErr = "Local guardian email address is required";
  } else { 
    $localgemail= test_input($_POST["localgemail"]);   
  }
  if (empty($_POST["localgcell"])) {
    $localgcellErr = "Local guardian cell is required";
  } else { 
    $localgcell= test_input($_POST["localgcell"]);   
  }
  if (empty($_POST["Exam"])) {
    $ExamErr = " ";
  } else { 
    $Exam= test_input($_POST["Exam"]);   
  }
  if (empty($_POST["Instituition"])) {
    $InstituitionErr = " ";
  } else { 
    $Instituition= test_input($_POST["Instituition"]);   
  }
  if (empty($_POST["Board"])) {
    $BoardErr = " ";
  } else { 
    $Board= test_input($_POST["Board"]);   
  }
  if (empty($_POST["Group"])) {
    $GroupErr = " ";
  } else { 
    $Group= test_input($_POST["Group"]);   
  }
  if (empty($_POST["yearp"])) {
    $yearpErr = " ";
  } else { 
    $yearp= test_input($_POST["yearp"]);   
  }
  if (empty($_POST["gpa"])) {
    $gpaErr = " ";
  } else { 
    $gpa= test_input($_POST["gpa"]);   
  }
  if (empty($_POST["hExam"])) {
    $ExamErr = " ";
  } else { 
    $hExam= test_input($_POST["hExam"]);   
  }
  if (empty($_POST["hInstituition"])) {
    $InstituitionErr = " ";
  } else { 
    $hInstituition= test_input($_POST["hInstituition"]);   
  }
  if (empty($_POST["hBoard"])) {
    $BoardErr = " ";
  } else { 
    $hBoard= test_input($_POST["hBoard"]);   
  }
  if (empty($_POST["hGroup"])) {
    $GroupErr = " ";
  } else { 
    $hGroup= test_input($_POST["hGroup"]);   
  }
  if (empty($_POST["hyearp"])) {
    $yearpErr = " ";
  } else { 
    $hyearp= test_input($_POST["hyearp"]);   
  }
  if (empty($_POST["hgpa"])) {
    $gpaErr = " ";
  } else { 
    $hgpa= test_input($_POST["hgpa"]);   
  }
  if (empty($_POST["waiver"])) {
    $waiverErr = "waiver is required";
  } else {
    $waiver = test_input($_POST["waiver"]);   
  }
  if (empty($_POST["file"])) {
    $fileErr = "file is required";
  } else {
    $file = test_input($_POST["file"]);   
  }
  if (empty($_POST["other"])) {
    $otherErr = "others is required";
  } else {
    $other = test_input($_POST["other"]);   
  }
  if (empty($_POST["pwaiver"])) {
    $pwaiverErr = "waiver is required";
  } else {
    $pwaiver = test_input($_POST["pwaiver"]);   
  }
  if (empty($_POST["signA"])) {
    $signAErr = "sign is required";
  } else {
    $signA = test_input($_POST["signA"]);   
  }
  if (empty($_POST["signP"])) {
    $signPErr = "sign is required";
  } else {
    $signP = test_input($_POST["signP"]);   
  }
  if (empty($_POST["adm"])) {
    $admErr = "sign is required";
  } else {
    $adm = test_input($_POST["adm"]);   
  }
  if (empty($_POST["Dadm"])) {
    $DadmErr = "sign is required";
  } else {
    $Dadm = test_input($_POST["Dadm"]);   
  } 




}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class=" container ">
      <div class=" text-center pt-4">
      <img src="ISU_banner.jpg" alt="ISU Logo" width="400px" height="100px">
      <br> <br>
        <h3 class="text-bg-dark"> Application For Admission</h3>
        <p> (For official use only)</p>
        
        </div>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

      

       <div class="row">
       <div class =" col-6  ">
       ID NO: <span class="text-danger">* <?php echo $id1Err;?></span>
       <input type="number" name="id1" class="form-control" placeholder=" Enter ID NO." value="<?php echo $id1;?>">
    </div>
   
    <div class="col-3 ">
    Program :<span class="text-danger">* <?php echo $progErr;?></span><br>
    

  <select name="prog" class="form-control" placeholder="Enter Program" value="<?php echo $prog;?>">
  <option value="">Select Program
  <option value="B.Sc in Computer Science & Engineering">B.Sc in Computer Science & Engineering
  <option value="B.Sc in Textile Engineering">B.Sc in Textile Engineering
    <option value="Business Administration">Business Administration
    <option value="B.A in English">B.A in English
    <option value="Masters of Business Administration">Masters of Business Administration
    <option value="M.A in English Literatural & Cultural Studies">M.A in English Literatural & Cultural Studies
</select>

    </div>
    <div class="col-3 ">
    Batch:<span class="text-danger">* <?php echo $BatchErr;?></span>
    <input type="number" name="Batch" class="form-control" placeholder="Enter Batch." value="* <?php echo $Batch;?>">
    </div>
    </div>

    <br>
    <div class="row">
       <div class =" col-6  ">
       Semester: <span class="text-danger">* <?php echo $semesterErr;?></span> <br>
          <input type="radio" name="semester" value="Spring (January-June)">Spring (January-June).
         <input type="radio" name="semester" value="Fall( July-December)">Fall( July-December).
        </div>
   
    <div class="col-3 ">
    Year: <span class="text-danger">* <?php echo $YearErr;?></span><br>

    <select name="Year" class="form-control" placeholder="Enter Year" value="* <?php echo $Year;?>">
  <option value="">Select Year
  <option value="2018">2018
  <option value="2019">2019
    <option value="2020">2020
    <option value="2021">2021
    <option value="2022">2022
</select>
</div>

    <div class="col-3 ">
    Required Credit:<span class="text-danger">* <?php echo $CreditErr;?></span>
    <input type="number" name="Credit" class="form-control" placeholder="Enter Required Credit" value="* <?php echo $Credit;?>"> 
    </div>
</div>
  
      <br> 
      <div class="border bg-dark text-white">
         <h5> 1. PERSONAL INFORMATION</h5>
         </div>
           Full Name  (In Bangla): <span class="text-danger">* <?php echo $BnameErr;?></span>
        <input type="text" name="Bname" class="form-control" placeholder="Enter Full Bangla Name"value="<?php echo $Bname;?>">
  <br>
  Full Name  (In English Block Letters): <span class="text-danger">* <?php echo $EnameErr;?></span>
    <input type="text" name="Ename" class="form-control" placeholder="Enter Full English Name" value="<?php echo $Ename;?>">
    <p>(Acording to SSC/O Level/Equivalant Certificates, leave a blank box between different parts of name) </p>

    <br>
    <div class="row">
      <div class ="col-6">
    Date Of Birth : <span class="text-danger">* <?php echo $dateErr;?></span>
    <input type="date" name="date" class="form-control" placeholder="Enter Date of Birth" value="<?php echo $date;?>"></div>
  <br>
  <div class ="col-6">
  NID: <span>(if applicable)* <?php echo $NidErr;?></span>
       <input type="number" name="Nid" class="form-control" placeholder=" Enter NID" value="* <?php echo $Nid;?>"></div></div>
       <br> <br>
       <div class="row">
       <div class ="col-4">
       Gender: <span class="text-danger">* <?php echo $genderErr;?></span> <br>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        
        </div>
        <div class =" col-4">
      Marital status: <span class="text-danger">* <?php echo $maritalErr;?></span> <br>
        <input type="radio" name="marital" value="Single">Single
        <input type="radio" name="marital" value="Married">Married     
         </div>    
         <div class="col-4">
         Blood group:<span class="text-danger">* <?php echo $BloodErr;?></span>  
         <select name="Blood" class="form-control" placeholder="Enter Blood Group" value="<?php echo $Blood;?>">
  <option value="">Select Blood Group
  <option value="A(+ve)">A(+ve)
  <option value="B(+ve)">B(+ve)
    <option value="O(+ve)">O(+ve)
    <option value="AB(+ve)">AB(+ve)
    <option value="A(-ve)">A(-ve)
    <option value="B(-ve)">B(-ve)
    <option value="O(-ve)">O(-ve)
    <option value="AB(-ve)">AB(-ve)
</select>
        
</div>   </div>
<br> <br>

   

    <br>
    <div class="row">
      <div class="col-6">
  E-mail: 
  <span class="text-danger">* <?php echo $emailErr;?></span>
  <input type="text" name="email" class="form-control" placeholder="Enter email"value="<?php echo $email;?>"></div>
  <div class="col-6">
  Cell Phone NO: <span class="text-danger">* <?php echo $CellphoneErr;?></span>
       <input type="number" name="Cellphoneno" class="form-control" placeholder=" Enter Cell Phone NO." value="<?php echo $Cellphone;?>"></div></div>
       <br>
     
       <div class="row">
       <div class =" col-6  ">
       Father's Name: <span class="text-danger">* <?php echo $FathernameErr;?></span>
    <input type="text" name="Fathername" class="form-control" placeholder="Enter Father's Name" value="<?php echo $Fathername;?>">
    </div>
   
    <div class="col-3 ">
    Ocupation:<span class="text-danger">* <?php echo $FOcupationErr;?></span> <br>
    <input type="text" name="FOcupation" class="form-control" placeholder="Enter Father's Ocupation" value="<?php echo $FOcupation;?>">
    </div>
    <div class="col-3 ">
    Cell Phone Number: <span class="text-danger">* <?php echo $FcellErr;?></span>
    <input type="number" name="fathercellno" class="form-control" placeholder="Enter Cell No." value="<?php echo $Fcell;?>">
    </div>
    </div>
    <br>
    <div class="row">
       <div class =" col-6  ">
       Mother's Name: <span class="text-danger"> * <?php echo $MothernameErr;?> </span>
    <input type="text" name="Mothername" class="form-control" placeholder="Enter Mother's Name" value="<?php echo $Mothername;?>">
    </div>
   
    <div class="col-3 ">
    Ocupation:<span class="text-danger">* <?php echo $MOcupationErr;?></span> <br>
    <input type="text" name="MOcupation" class="form-control" placeholder="Enter Mother's Ocupation" value="<?php echo $MOcupation;?>">
    </div>
    <div class="col-3 ">
    Cell Phone Number: <span class="text-danger">* <?php echo $McellErr;?></span> 
    <input type="number" name="Mothercellno" class="form-control" placeholder="Enter Cell No." value=" <?php echo $Mcell;?>">
    </div>
    </div>
    <br>
   
    <div class="row">
       <div class =" col-6  ">
       Email Address Mother/Father: <span class="text-danger">* <?php echo $EmailMFErr;?></span> 
    <input type="text" name="EmailMF" class="form-control" placeholder="Enter Email Address" value=" <?php echo $EmailMF;?>"> 
    </div>
   
    <div class="col-6 ">
    Monthly Income of the Family: <span class="text-danger">* <?php echo $IncomeErr;?></span> 
    <input type="number" name="Income" class="form-control" placeholder="Enter Monthly Income" value=" <?php echo $Income;?>"> 
    </div>
    </div>
    <br>
    Present Address: <span class="text-danger">* <?php echo $preaddErr;?></span>
    <textarea type="text" name="preadd" class="form-control" placeholder="Enter present address" value=" <?php echo $preadd;?>"></textarea>

  <br>
  Permanent Address: <span class="text-danger">* <?php echo $peraddErr;?></span>
    <textarea type="text" name="peradd" class="form-control" placeholder="Enter permanent address" value=" <?php echo $peradd;?>"></textarea>
  <br>
  <div class="row">
       <div class =" col-6  ">
      Local Guardian's Name: <span class="text-danger">* <?php echo $localguardErr;?></span>
    <input type="text" name="localguard" class="form-control" placeholder="Enter local Guardian name" value="<?php echo $localguard;?>">
    </div>
   
    <div class="col-6 ">
    Occupation:<span class="text-danger">* <?php echo $localocuErr;?></span> <br>
    <input type="text" name="localocu" class="form-control" placeholder="Occupation" value="<?php echo $localocu;?>">

    </div>
     </div>
<br>
Local Address: <span class="text-danger">* <?php echo $localaddErr;?></span>
    <textarea type="text" name="localadd" class="form-control" placeholder="Enter local guardian address" value=" <?php echo $localadd;?>"></textarea>
    <div class="row">
       <div class =" col-6  ">
      Email Address: <span class="text-danger">* <?php echo $localgemailErr;?></span>
    <input type="text" name="localgemail" class="form-control" placeholder="Enter Email Address" value="<?php echo $localgemail;?>">
    </div>
   
    <div class="col-6 ">
    Cell Phone Number :<span class="text-danger">* <?php echo $localgcellErr;?></span>
    <input type="number" name="localgcell" class="form-control" placeholder="Enter Cell Phone Number" value=" <?php echo $localgcell;?>">
    </div>
    </div>
<br> 
<div class="border bg-dark text-white" >
<h5>2. ACADEMIC INFORMATION</h5>(Provide in chronological order begining with SSC/O Level/Equivalent)<span class="text-danger">* </span> </div>
<table  class="table table-bordered" border="2" cellpadding="5" style="width:100%">
<thead>
        <tr align="center">
            <th>  Exams. Passed <span class="text-danger">* <?php echo $ExamErr;?></span>  </th>
            <th> Name of Institution <span class="text-danger">* <?php echo $InstituitionErr;?></span></th>
            <th> Board/University  <span class="text-danger">* <?php echo $BoardErr;?></span> </th>
            <th>  Group <span class="text-danger">* <?php echo $GroupErr;?></span>  </th>
            <th>  Year of Passing   <span class="text-danger">* <?php echo $yearpErr;?></span></th>
            <th> Division /Class/GPA  <span class="text-danger">* <?php echo $gpaErr;?> </th>
            
        </tr>
      
</thead>
<tbody>
   <tr>
     <td>  <input type="text" name="Exam" class="form-control" placeholder="" value="<?php echo $Exam;?>">  </td>
    <td> <input type="text" name="Instituition" class="form-control" placeholder="" value=" <?php echo $Instituition;?>" > </td>
    <td> <input type="text" name="Board" class="form-control" placeholder="" value=" <?php echo $Board;?> " >  </td>
    <td><input type="text" name="Group" class="form-control" placeholder="" value="<?php echo $Group;?> "  >  </td>
    <td>  <input type="text" name="yearp" class="form-control" placeholder="" value="<?php echo $yearp;?> ">  </td>
    <td> <input type="text" name="gpa" class="form-control" placeholder="" value="  <?php echo $gpa;?>" >  </td>

</tr>

<tr>
<td>  <input type="text" name="hExam" class="form-control" placeholder="" value="<?php echo $hExam;?>">  </td>
    <td> <input type="text" name="hInstituition" class="form-control" placeholder="" value=" <?php echo $hInstituition;?>" > </td>
    <td> <input type="text" name="hBoard" class="form-control" placeholder="" value=" <?php echo $hBoard;?> " >  </td>
    <td><input type="text" name="hGroup" class="form-control" placeholder="" value="<?php echo $hGroup;?> "  >  </td>
    <td>  <input type="text" name="hyearp" class="form-control" placeholder="" value="<?php echo $hyearp;?> ">  </td>
    <td> <input type="text" name="hgpa" class="form-control" placeholder="" value="  <?php echo $hgpa;?>" >  </td>

</tr>
<tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td><input type="text" name="name" class="form-control" placeholder="" value=" "  >  </td>
    <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>

</tr>
<tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td><input type="text" name="name" class="form-control" placeholder="" value=" "  >  </td>
    <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>

</tr>
<tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td><input type="text" name="name" class="form-control" placeholder="" value=" "  >  </td>
    <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>

</tr>


   
</tbody>
</table>
<div >
         Waver Catagory( Attach Neccessary Documants): <span class="text-danger">* <?php echo $waiverErr;?></span><br> <br>
         <div class =" ps-5 "> 
         <input type="radio" name="waiver" value="Freedom Fighter">Freedom Fighter
        <input type="radio" name="waiver" value="Ethnic Minority">Ethnic Minority
        <input type="radio" name="waiver" value="Sibling">Sibling
        <input type="radio" name="waiver" value="Spouse ">Spouse 
     <br>   <br>    
        <input type="radio" name="category" value="National Player/ Artist/Actor/Journalist">National Player/ Artist/Actor/Journalist
        <input type="radio" name="category" value="Female">Female
        <input type="radio" name="category" value="Corporate">Corporate
        <input type="radio" name="category" value="Merit">Merit 

        <br>
        <br>
        <h6>Attach File <span class="text-danger">* <?php echo $fileErr;?></span></h6>
        <input type="file"name="file"class="form-control" placeholder = " Attach Files"  value="<?php echo $file;?> " >
        </div>
</div>
   
       
    <div class="row">
       <div class =" col-6  ">
      Others: <span class="text-danger">* <?php echo $otherErr;?></span>
    <input type="text" name="other" class="form-control" placeholder="Enter Others" value="<?php echo $other;?>">
    </div>
   
    <div class="col-6 ">
    Parcentage of Waiver: <span class="text-danger">* <?php echo $pwaiverErr;?></span> <br>
    <select name="pwaiver" class="form-control" placeholder="Enter Parcentage of Waiver"  value="<?php echo $pwaiver;?>">
    <option value=""> Enter Parcentage of Waiver
  <option value="10%">10% 
  <option value="20%">20% 
    <option value="35%">35% 
    <option value="40%">40% 
    <option value="50%">50% 
    <option value="75%">75% 
    <option value="100%">100% 
</select>
    </div>
    </div>
    <br> <br>
    <div class="border bg-dark text-white" >
<h5> 3.JOB EXPERIENCE</h5> (applicable only for the candidates of Master's Program)</div>
<p>Begining with current position, list the organizations you have worked for and positions held (use separate sheets, if necessary)</p>
<table  class="table table-bordered" border="2" cellpadding="5" style="width:100%">
<thead>
        <tr align="center">
            <th> Name of Organization  </th>
            <th> Position Held </th>
            <th> Year (from-to) </th>
        </tr>
</thead>
<tbody>
   <tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
</tr>

<tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
</tr>
<tr>
     <td>  <input type="text" name="name" class="form-control" placeholder="" value=" ">  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>
    <td> <input type="text" name="name" class="form-control" placeholder="" value=" " >  </td>   
</tr>
</tr>
</tbody>
</table>
<br> <br>
<div class="border bg-dark text-white" >
<h5> 4.NTERNATIONAL STUDENTS</h5> (please fill in this part accordingly)</div>

Name of the Country: 
        <input type="text" name="name" class="form-control" placeholder="Name of the Country"value="">
  <br>
  Name and address of the Embassy/High Commision/Cosulate: 
  <textarea name="comment" rows="2" cols="40"class="form-control" ></textarea>
    <br>
  Contact person(s) of the Embassy/High Commision/Consulate: 
    <input type="text" name="name" class="form-control" placeholder=" Contact person(s)" value="">
    <br>
  Contact Number: 
    <input type="number" name="contact" class="form-control" placeholder=" Contact Number" value="">
    <br>
    <div class="row">
       <div class =" col-6  ">
       Passport Number: 
    <input type="text" name="contact" class="form-control" placeholder="Enter Passport Number" value="">
    </div>

    <div class="col-3 ">
    Date of Issue: 
    <input type="Date" name="contact" class="form-control" placeholder="Date of Issue" value="">
    </div>
    <div class="col-3 ">
    Valid Up to: <span class="text-danger">
    
    <input type="Date" name="contact" class="form-control" placeholder="Valid Up to" value="<">
    </div>
    </div>
    <br>
    <div class="row">
       <div class =" col-6  ">
       Duration of Visa:From <span class="text-danger"></span>
    <input type="Date" name="name" class="form-control" placeholder="From" value="">
    </div>
   
    <div class="col-6 ">
    To: <br>
    <input type="Date" name="name" class="form-control" placeholder="To" value="">
    </div>
    </div>
    <br> <br>

    <div class="border bg-dark text-white" >
<h5> 5. REFEREE</h5> (For International Students Only)</div>
<br>
  Name: 
    <input type="text" name="name" class="form-control" placeholder="Name" value="">
    <br>
  Designation: 
    <input type="text" name="name" class="form-control" placeholder="Designation" value="">
    <br>
  Name of Institution/Organization:
    <input type="text" name="name" class="form-control" placeholder="Name of Institution/Organization" value="">
    <br>
  Address:
  <textarea name="comment" rows="2" cols="40"class="form-control" ></textarea>
    <br>
    <div class="row">
       <div class =" col-6  ">
       Tell/Cell No 
    <input type="number" name="name" class="form-control" placeholder=" Tell/Cell No" value="">
    </div>
   
    <div class="col-6 ">
    Email: <br>
    <input type="Text" name="name" class="form-control" placeholder="Email" value="">
    </div>
    </div>
    <br> <br>
    <div class="border bg-dark text-white" >
<h5> 5. DECLARATION</h5></div>
<div class="row">
  
  <div class="col-1 text-center" >
  (a) 
</div>
<div class="col-11">
<p> I do hereby declare that all the information and statements mentioned in this form are correct, accurate and complete. I understand that the application will not be processed unless I provide all required documentation. </p>
</div>
</div>

<div class="row">
  
  <div class="col-1 text-center" >
  (b) 

</div>
<div class="col-11">
<p> I fully understand the curriculam of <b>International Standard University (ISU)</b> and undertake to follow it, as offered and instructed with full dedication and seriousness. I also abide by applicable rules and regulations, laws and decisions regarding the tuition fees or any other matter, whatever it maybe, adopted by the ISU authorities from time to time.</p>
</div>
</div>
<div class="row">
  
  <div class="col-1 text-center" >
  (c) 

</div>
<div class="col-11">
<p> During my stay at ISU, I will not involve any myself in any political activity or any kind of grouping, and will not take part in any activity subversive to the state of or descipline.</p>
</div>
</div>
<br> <br>
<div class="row">
       <div class =" col-6 text-center">
       Signature of the Applicant with date <span class="text-danger">* <?php echo $signAErr;?></span>
    <input type="text" name="signA" class="form-control" placeholder="Signature of the Applicant with date" value="<?php echo $signA;?>">
    </div>
   
    <div class="col-6 text-center">
    Signature of parent/Guardian/Local Guardian with date <span class="text-danger">* <?php echo $signPErr;?></span><br>
    <input type="Text" name="signP" class="form-control" placeholder=" Signature of parent/Guardian/Local Guardian with date" value="<?php echo $signP;?>">
    </div>
    </div>
<br> <br>

<div class="row">
  <div class="col-1">
  <strong>Encolsers:</strong>
  </div>
  <div class="col-11">
  <p>(a) (i) Photocopies of certificate and transcripts/mark-sheets, (ii) Guardian Income certificate & Undertaking in applicable cases, (iii) Photocopy of Passport and approved Visa pages for International Students, (iv) 4 photographs, (v) Photocopy of NID. Card?Birth Certificate.</p>
   <p> (b) Original certificates, Mark sheets and other papers must be produced at the time of registration for verification. Permission for admission will be allowed if the application is duly filled in and the documents are found correct.</p>
  </div>
</div>

<br> <br> 
<div class="row">
       <div class =" col-6 text-center">
      Admission officer <span class="text-danger">* <?php echo $admErr;?></span><br>
    <input type="text" name="adm" class="form-control" placeholder="Admission officer" value="<?php echo $adm;?>">
    </div>
   
    <div class="col-6 text-center">
    Director, Admission <span class="text-danger">* <?php echo $DadmErr;?></span><br>
    <input type="text" name="Dadm" class="form-control" placeholder="Director, Admission" value="<?php echo $Dadm;?>">
    </div>
    </div>

    <br>
  <br> 
  <div class="ps-5 h3" text-strong>
  <input type="submit" name="submit" value="Submit">
  </div>
    
</form>
<br> <br>
<?php
echo "<h2>Check The Info:</h2>";
echo $id1;
echo "<br>";
echo $prog;
echo "<br>";
echo $Batch;
echo "<br>";
echo $semester;
echo "<br>";
echo $Year;
echo "<br>";
echo $Credit;
echo "<br>";
echo $Bname;
echo "<br>";
echo $Ename;
echo "<br>";
echo $date;
echo "<br>";
echo $Nid;
echo "<br>";
echo $gender;
echo "<br>";
echo $marital;
echo "<br>";
echo $Blood;
echo "<br>";
echo $email;
echo "<br>";
echo $Cellphone;
echo "<br>";
echo $Fathername;
echo "<br>";
echo $FOcupation;
echo "<br>";
echo $Fcell;
echo "<br>";
echo $Mothername;
echo "<br>";
echo $MOcupation;
echo "<br>";
echo $Mcell;
echo "<br>";
echo $EmailMF;
echo "<br>";
echo $Income;
echo "<br>";
echo $preadd;
echo "<br>";
echo $peradd;
echo "<br>";
echo $localguard;
echo "<br>";
echo $localocu;
echo "<br>";
echo $localadd;
echo "<br>";
echo $localgemail;
echo "<br>";
echo $localgcell;
echo "<br>";
echo $Exam;
echo "<br>";
echo $Instituition;
echo "<br>";
echo $Board;
echo "<br>";
echo $Group;
echo "<br>";
echo $yearp;
echo "<br>";
echo $gpa;
echo "<br>";
echo $hExam;
echo "<br>";
echo $hInstituition;
echo "<br>";
echo $hBoard;
echo "<br>";
echo $hGroup;
echo "<br>";
echo $hyearp;
echo "<br>";
echo $hgpa;
echo "<br>";
echo $waiver;
echo "<br>";
echo $file;
echo "<br>";
echo $other;
echo "<br>";
echo $pwaiver;
echo "<br>";
echo $signA;
echo "<br>";
echo $signP;
echo "<br>";
echo $adm;
echo "<br>";
echo $Dadm;
echo "<br>";
?>
</div>
</div>
</body>
</html>