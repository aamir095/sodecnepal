<?php
function uploadNoticeImage($path,$file)
{

   $source=$file['tmp_name'];
   $oldname=$file['name'];
   $temp=explode('.', $oldname);
   $newname=md5(rand(111111,999999).time().$temp[0]). "." .$temp[1];

  if (!is_dir($path))		
      mkdir($path,0777);
  if(move_uploaded_file($source, $path."/".$newname))
    return $newname;

    return false;  

}

function insertNotice($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_notice(`tv_title`,`tv_description`,`status`,`image_path`,`created_date`) VALUES (:tv_title, :tv_description,:status, :image_path, :created_date)");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
    $stmt->bindParam(':created_date',$data['created_date']);

	if($stmt->execute())
		return true;


	return false;
}
function getAllNotices($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_notice");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getNoticeById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_notice WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateNotice($conn,$data)
{
	
	if (!empty($data['image_path']))
	{
	$stmt = $conn->prepare("UPDATE mmt_notice SET tv_title=:tv_title, tv_description=:tv_description,status=:status, image_path=:image_path, created_date=:created_date WHERE id=:id");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':created_date',$data['created_date']);
	$stmt->bindParam(':id',$data['id']);
	}

	else
	{
	$stmt = $conn->prepare("UPDATE mmt_notice SET tv_title=:tv_title, tv_description=:tv_description, status=:status, created_date=:created_date  WHERE id=:id");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':created_date',$data['created_date']);
	$stmt->bindParam(':id',$data['id']);
	}
	if($stmt->execute())
		return true;


	return false;
}

function deleteNotice($conn,$id)
{
	$user = getNoticeById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_notice WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
	   @unlink("uploads/".$user['image_path']); 	
	   return true;
	}


	return false;
}
function getAllActiveNotices($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_notice WHERE status='active' ORDER BY id DESC LIMIT 4");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getAllActiveListingNotices($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_notice WHERE status='active' ORDER BY id DESC LIMIT 2 ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getNoticeInPage($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_notice WHERE status='active'  ORDER BY id DESC ");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getNoticeByIdInHomePage($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_notice WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
