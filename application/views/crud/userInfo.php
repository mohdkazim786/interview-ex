
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
    <div class="container" style="width:70%;">
        <div class="form">          
            <h1>Details Form</h1>
            <a href="<?= base_url('crud/')?>" class="addData">Add Data</a>
                <table border="1" class="table">
                    <tr>
                        <th>USER ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Telephone/Mobile</th>
                        <th>Designation</th>
                        <th>Gender </th>
                        <th>Hobbies </th>
                    </tr>
                        <?php 
                            foreach($lists as $list)
                            {
                        ?>
                    <tr>
                         <td><?= $list->id?></td>
                         <td><?= ucfirst($list->firstName)?></td>
                         <td><?= ucfirst($list->lastname)?></td>
                         <td><?= $list->email?></td>
                         <td><?= $list->dob?></td>
                         <td><?= $list->mobile?></td>
                         <td><?= $list->designation?></td>
                         <td><?= ucfirst($list->gender)?></td>
                         <td><?= ucfirst($list->hobbies)?></td>
                    </tr>
                    <?php 
                           }
                    ?>
                        
                </table>
        </div>
    </div>
