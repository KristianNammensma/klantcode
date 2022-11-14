<?php
 $userModel = new \App\Models\UserModel(); 

 $img = $_POST['img'] ?? '';
 $tussenV = $_POST['titel'] ?? ''; // $pageNumber = $_GET['page'] ?? 1; als  
 $achterN = $_POST['datum'] ?? '';
 $straat = $_POST['info'] ?? '';


 $data = [
    'img'  => $img,
    'titel' => $tussenV,
    'datum'  => $achterN,
    'info' => $straat,
    ];

	if(isset($_POST['submit']))
	{
		$userModel->insert($data);
	}

// $userModel->insert($data);


var_dump($data);


foreach($userModel as $user)
{
	
}

?>

<style>
	input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button[type=submit],#submit {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>

<container>
	<form action="" method="post">

			<input placeholder='foto url' required name='img'type='url'>
			<input placeholder='titel' name='titel'type='text'>
			<input placeholder='datum d/m/y' required name='datum'type='date'>
			<input placeholder='info' required name='info'type='text'>
			<input type="submit" id="submit" value="submit">
	</form> 
</container>