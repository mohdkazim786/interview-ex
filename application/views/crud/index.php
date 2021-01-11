
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css')?>">
    <style type="text/css">
   
        .error_msg{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">          
            <h1>Details Form</h1>

              <?= form_open(base_url('crud/register'))?>
                <label>First Name</label>
                <input type="text" name="firstName"value="<?= set_value('firstName')?>"  placeholder="Enter Your First Name">
                 <?= form_error('firstName','<div class="error_msg">','</div>'); ?>  
                <label>Last Name</label>
                <input type="text" name="lastname" value="<?= set_value('lastname')?>" placeholder="Enter Your  Last Name">
                <?= form_error('lastname','<div class="error_msg">','</div>'); ?>  
                <label>Email</label>
                <input type="email" name="email"value="<?= set_value('email')?>"  placeholder="Enter Your Email">
                <?= form_error('email','<div class="error_msg">','</div>'); ?>  
                <label>Birth</label>
                <input type="date" name="dob" value="<?= set_value('dob')?>" placeholder="Enter Your Date of Birth">
                <?= form_error('dob','<div class="error_msg">','</div>'); ?>  
                <label>Mobile</label>
                <input type="number" name="mobile" value="<?= set_value('mobile')?>" placeholder="Enter Your Mobile">
                <?= form_error('mobile','<div class="error_msg">','</div>'); ?>  
                <label>Designation</label>
                <input type="text" name="designation" value="<?= set_value('designation')?>" placeholder="Enter Your Designation">
                <?= form_error('designation','<div class="error_msg">','</div>'); ?>  
                <div class="gender">
                    <p>Gender</p>
                    Male<input type="radio" name="gender" value="male">
                    Female<input type="radio" name="gender" value="female">
                    Other<input type="radio" name="gender" value="other">
                    <?= form_error('gender','<div class="error_msg">','</div>'); ?> 

                </div>
                <div class="hobbies">
                    <p>Hobbies</p>
                    Gaming<input type="Checkbox" name="hobbies[]"  value="gaming">
                    Reading <input type="Checkbox" name="hobbies[]"  value="reading">
                    Photography <input type="Checkbox" name="hobbies[]" value="photography">
                    Design <input type="Checkbox" name="hobbies[]" value="design">
                    <?= form_error('hobbies[]','<div class="error_msg">','</div>'); ?> 
                </div>
                <!-- <button type="submit" id="register" class="btn btn-primary">Submit</button> -->
                    <input type="submit" id="button" name="submit" value="Submit">

            </form>
        </div>
    </div>
