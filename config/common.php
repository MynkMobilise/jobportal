<?php
include('dbconfig.php');
// Location
if(isset($_GET['loc'])){
    $jobtype = mysqli_query($conn,"Delete from locations where id='".$_GET['loc']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../locationlist');
}
// JOB TYPE
if(isset($_POST['insertjobtype'])){
    $jobtype = mysqli_query($conn,"INSERT into jobtype values(0,'".$_POST['name']."',now())");
    
    $_SESSION['successmsg']="1";
    header('location:../job_type');
}        
if(isset($_GET['jobtype'])){
    $jobtype = mysqli_query($conn,"Delete from jobtype where id='".$_GET['jobtype']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../job_type');
}
// JOB CATEGORY
if(isset($_POST['insertjobcat'])){
    $jobtype = mysqli_query($conn,"INSERT into jobcategory values(0,'".$_POST['name']."',now())");
    
    $_SESSION['successmsg']="1";
    header('location:../jobcategory');
}        
if(isset($_GET['jobcat'])){
    $jobtype = mysqli_query($conn,"Delete from jobcategory where id='".$_GET['jobcat']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../jobcategory');
}
// JOBS
if(isset($_POST['insertjob'])){
   if($_POST['upid']=='0'){
        if(isset($_POST['feature']) && $_POST['feature']=='1'){
            $fea = 1;
        }else{
            $fea = 0;
        }
        $descr = $conn->real_escape_string($_POST['jdescr']);
        $jobref = "App-".rand('1000','9999');
        $job = mysqli_query($conn,"INSERT into jobs Values(0,'".$jobref."','".$_POST['title']."','".$_POST['category']."','".$_POST['emp']."'
        ,'".$_POST['loc']."','".$_POST['postdate']."','".$_POST['expiredate']."','".$_POST['website']."','".$_POST['status']."'
        ,'".$fea."',now(),'".$_POST['jobtype']."','".$_POST['vac']."','".$_POST['applyat']."'
        ,'".$_POST['exp']."','".$_POST['language']."','".$_POST['education']."','".$_POST['sal']."','".$descr."','".$_POST['pro']."')");
        
        $_SESSION['successmsg']="1";
        header('location:../joblist');
    }else{
        if(isset($_POST['feature']) && $_POST['feature']=='1'){
            $fea = 1;
        }else{
            $fea = 0;
        }
        $descr = $conn->real_escape_string($_POST['jdescr']);
        $jobref = $_POST['refno'];
        $delete = mysqli_query($conn,"Delete from jobs where id='".$_POST['upid']."'");
        $job = mysqli_query($conn,"INSERT into jobs Values('".$_POST['upid']."','".$jobref."','".$_POST['title']."','".$_POST['category']."','".$_POST['emp']."'
        ,'".$_POST['loc']."','".$_POST['postdate']."','".$_POST['expiredate']."','".$_POST['website']."','".$_POST['status']."'
        ,'".$fea."',now(),'".$_POST['jobtype']."','".$_POST['vac']."','".$_POST['applyat']."'
        ,'".$_POST['exp']."','".$_POST['language']."','".$_POST['education']."','".$_POST['sal']."','".$descr."','".$_POST['pro']."')");
        
        $_SESSION['successmsg']="1";
        header('location:../joblist');
    }
}
if(isset($_GET['job'])){
    $job = mysqli_query($conn,"Delete from jobs where id='".$_GET['job']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../joblist');
}
// PACKAGES
if(isset($_POST['insertpackage'])){
   if($_POST['upid']=='0'){
        $pack = mysqli_query($conn,"INSERT into packages Values(0,'".$_POST['packtype']."','".$_POST['title']."','".$_POST['price']."','".$_POST['gst']."'
		,'".$_POST['jobpost']."','".$_POST['jobpostval']."','".$_POST['resumeno']."','".$_POST['featurejob']."','".$_POST['c_support']."',
		'".$_POST['status']."','".$_POST['visible']."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../packagelist');
    }else{
        $delete = mysqli_query($conn,"Delete from packages where id='".$_POST['upid']."'");
		$pack = mysqli_query($conn,"INSERT into packages Values('".$_POST['upid']."','".$_POST['packtype']."','".$_POST['title']."','".$_POST['price']."',
		'".$_POST['gst']."','".$_POST['jobpost']."','".$_POST['jobpostval']."','".$_POST['resumeno']."','".$_POST['featurejob']."','".$_POST['c_support']."',
		'".$_POST['status']."','".$_POST['visible']."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../packagelist');
    }
}
if(isset($_GET['package'])){
    $pack = mysqli_query($conn,"Delete from packages where id='".$_GET['package']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../packagelist');
}
// Coupon
if(isset($_POST['insertcoupon'])){
   if($_POST['upid']=='0'){
        $cou = mysqli_query($conn,"INSERT into coupons Values(0,'".$_POST['name']."','".$_POST['code']."','".$_POST['sdate']."','".$_POST['edate']."'
		,'".$_POST['discount']."','".$_POST['usage']."','".$_POST['status']."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../coupon');
    }else{
		$delete = mysqli_query($conn,"Delete from coupons where id='".$_POST['upid']."'");
        $cou = mysqli_query($conn,"INSERT into coupons Values('".$_POST['upid']."','".$_POST['name']."','".$_POST['code']."','".$_POST['sdate']."',
		'".$_POST['edate']."','".$_POST['discount']."','".$_POST['usage']."','".$_POST['status']."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../coupon');
    }
}
if(isset($_GET['coupon'])){
    $pack = mysqli_query($conn,"Delete from coupons where id='".$_GET['coupon']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../coupon');
}
// About 
if(isset($_POST['insertabout'])){
	if($_POST['upid']=='0'){
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values(0,'about','".$_POST['website']."','".$descr."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../aboutpage');
    }else{
		$delete = mysqli_query($conn,"Delete from pagescontent where id='".$_POST['upid']."'");
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values('".$_POST['upid']."','about','".$_POST['website']."','".$descr."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../aboutpage');
    }
}
if(isset($_POST['insertterm'])){
	if($_POST['upid']=='0'){
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values(0,'term','".$_POST['website']."','".$descr."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../termpage');
    }else{
		$delete = mysqli_query($conn,"Delete from pagescontent where id='".$_POST['upid']."'");
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values('".$_POST['upid']."','term','".$_POST['website']."','".$descr."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../termpage');
    }
}
if(isset($_POST['insertpolicy'])){
	if($_POST['upid']=='0'){
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values(0,'policy','".$_POST['website']."','".$descr."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../policypage');
    }else{
		$delete = mysqli_query($conn,"Delete from pagescontent where id='".$_POST['upid']."'");
		$descr = $conn->real_escape_string($_POST['jdescr']);
        $about = mysqli_query($conn,"INSERT into pagescontent Values('".$_POST['upid']."','policy','".$_POST['website']."','".$descr."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../policypage');
    }
}
if(isset($_GET['about'])){
    $del = mysqli_query($conn,"Delete from pagecontent where id='".$_GET['about']."'");
    header('location:../aboutpage');
}
if(isset($_GET['term'])){
    $pack = mysqli_query($conn,"Delete from pagecontent where id='".$_GET['term']."'");
    header('location:../aboutpage');
}
if(isset($_GET['policy'])){
    $pack = mysqli_query($conn,"Delete from pagecontent where id='".$_GET['policy']."'");
    header('location:../policypage');
}
// Roles
if(isset($_POST['insertrole'])){
	$roles = mysqli_query($conn,"INSERT into roles values(0,'".$_POST['role']."')");
	if($roles){
		$lastid = mysqli_query($conn,"Select max(id) as id from roles");
		$roleid = mysqli_fetch_assoc($lastid);
		if(isset($_POST['loc'])){$loc=1;}else{$loc=0;}
		if(isset($_POST['job'])){$job=1;}else{$job=0;}
		if(isset($_POST['emp'])){$emp=1;}else{$emp=0;}
		if(isset($_POST['can'])){$can=1;}else{$can=0;}
		if(isset($_POST['pack'])){$pack=1;}else{$pack=0;}
		if(isset($_POST['page'])){$page=1;}else{$page=0;}
		if(isset($_POST['cou'])){$cou=1;}else{$cou=0;}
		if(isset($_POST['blog'])){$blog=1;}else{$blog=0;}
		if(isset($_POST['enq'])){$enq=1;}else{$enq=0;}
	    if(isset($_POST['pchange'])){$p=1;}else{$p=0;}	
		$permission = mysqli_query($conn,"Insert into roles_permission values(0,'".$rolid['id']."','".$loc."','".$job."','".$emp."','".$can."','".$pack."',
		'".$cou."','".$page."','".$blog."','".$enq."','".$p."',now())");
	}
	 
     $_SESSION['successmsg']="1";
     header('location:../roles');
}
if(isset($_GET['role'])){
    $pack = mysqli_query($conn,"Delete from roles where id='".$_GET['role']."'");
    header('location:../roles');
}
// Blog
if(isset($_POST['insertblog'])){
   if($_POST['upid']=='0'){
	   $descr = $conn->real_escape_string($_POST['jdescr']);
       $blog = mysqli_query($conn,"INSERT into blogs Values(0,'".$_POST['website']."','".$_POST['title']."','".$descr."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../bloglist');
    }else{
		$delete = mysqli_query($conn,"Delete from blogs where id='".$_POST['upid']."'");
        $blog = mysqli_query($conn,"INSERT into blogs Values('".$_POST['upid']."','".$_POST['website']."','".$_POST['title']."','".$descr."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../bloglist');
    }
}
if(isset($_GET['blog'])){
    $pack = mysqli_query($conn,"Delete from blogs where id='".$_GET['blog']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../bloglist');
}
if(isset($_POST['changepass'])){
	 	$update = mysqli_query($conn,"Update admin_login set password='".md5($_POST['newpass'])."' where username='".$_POST['email']."'");
		
        $_SESSION['successmsg']="1";
        header('location:../changepassword');
}
// Users
if(isset($_POST['insertuser'])){
   if($_POST['upid']=='0'){
       $user = mysqli_query($conn,"INSERT into staff Values(0,'".$_POST['role']."','".$_POST['name']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['phone']."','".$_POST['status']."',now())");
        
        $_SESSION['successmsg']="1";
        header('location:../stafflist');
    }else{
		$delete = mysqli_query($conn,"Delete from staff where id='".$_POST['upid']."'");
		if($_POST['oldpassword']==$_POST['password']){
				$pass = $_POST['oldpassword'];
		}else{
				$pass = md5($_POST['password']);
		}
        $user = mysqli_query($conn,"INSERT into staff Values('".$_POST['upid']."','".$_POST['role']."','".$_POST['name']."','".$_POST['email']."','".$pass."','".$_POST['phone']."','".$_POST['status']."',now())");
		
        $_SESSION['successmsg']="1";
        header('location:../stafflist');
    }
}
if(isset($_GET['user'])){
    $user = mysqli_query($conn,"Delete from staff where id='".$_GET['user']."'");
    
    $_SESSION['successmsg']="2";
    header('location:../stafflist');
}

?>
