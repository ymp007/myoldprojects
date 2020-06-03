<h1 class="heading">Concern Form</h1>
<?php
include 'validation.php';
?>
<form action="" name="concernform" method="post" onsubmit="validateData()">
	<table>
	<tr>
	<td><label>Enter Your Name: </label></td><td><input type="text" name="name" value="<?php if(isset($name))
	 echo $name?>" /><label id="errorn"><?php 
		echo $nameError;
	 ?></label></td></tr>
	<tr>
	<td><label>Enter Your Email: </label></td><td><input type="email" name="email" value="<?php 
	if(isset($email))
		echo $email;
	?>" /><label id="errore"><?php if(isset($emailError)){
		echo $emailError;
	} ?></label></td></tr>
	<tr>
	<td><label>Do you want immediate Reply?</label></td><td><?php echo checkRadio();?><?php if(isset($radioError)){
		echo $radioError;
	} ?></td></tr>
	<tr>
	<td><label>Where did you faced this difficulty : </label></td><td><?php
		echo checkBox(); 
	?><br/>
	</td></tr>
	<tr>
	<td><label>Select Subject : </label></td><td><select name="subject">
		<?php
			echo populateDropdown();
		?>
	</select></td></tr>
	<tr>
	<td><label>Enter your Question here : 
	 </label></td><td><textarea  name="question" rows="5" cols="40"  placeholder="Write Your Question here" id="question" style="resize: none;"><?php 
	 if (isset($question)) {
	 	echo $question;
	 }
	 ?></textarea><label id="errorq"><?php if(isset($questionError)){
		echo $questionError;
	} ?></label></td></tr>
	<tr>
	<td colspan="2"><input type="submit" value="Submit" id="submit" /></td></tr>
	</table>
</form>