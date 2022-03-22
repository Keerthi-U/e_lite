<?php
include_once('header.php');
include_once('sidebar.php');

?>
<!-- fa fa icon cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- fetch data from table  -->
<?php  
include_once('db.php');
$query ="SELECT c.id,c.fullname,c.form_type,c.fathername,c.gender ,c.contactnumber,c.created_by,c.approved_status, COUNT(p.student_id) AS number_of_student FROM scholarship_table c LEFT JOIN family_information p ON c.id = p.student_id GROUP BY c.id;
";
$result = mysqli_query($conn,$query);
?>
<style>
       .table-containerr {
        width: 100%;
        padding: 31px;
        padding-top: 52px;
        }
        table {
        border-spacing: 0 0.85rem !important;
        }

        .table .dropdown {
        display: inline-block;
        }

        .table td,
        .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
        }
       .table>tbody>tr>td  {
        padding: 6px;
        font-size: 12px;
        }
        .table thead tr,
        .table thead th {
        border: none;
        font-size: 11.5px;
        letter-spacing: 1px;
        color: #933ec5;
        text-transform: uppercase;
        background: transparent;
        }

        .table td {
        background: #fff;
        }
        .table th {
        background: #fff;
        }
        .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        }

        .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        }

        .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
        }

        .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        }

        .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
        }

        table.dataTable.dtr-inline.collapsed
        > tbody
        > tr[role="row"]
        > td:first-child:before,
        table.dataTable.dtr-inline.collapsed
        > tbody
        > tr[role="row"]
        > th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
        table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
        padding-left: 48px;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
        width: 100%;
        }

        table.dataTable > tbody > tr.child span.dtr-title {
        min-width: 50%;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
        table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
        table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
        }

        div.dataTables_wrapper div.dataTables_length label,
        div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
        }

        @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
        }

        .btn-icon {
        background: #fff;
        }
        .btn-icon .bx {
        font-size: 20px;
        }

        .btn .bx {
        vertical-align: middle;
        font-size: 20px;
        }

        .dropdown-menu {
        padding: 0.25rem 0;
        }

        .dropdown-item {
        padding: 0.5rem 1rem;
        }

        .badge {
        padding: 0.5em 0.75em;
        }

        .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
        }

        .table a {
        color: #212529;
        }

        .table a:hover,
        .table a:focus {
        text-decoration: none;
        }

        table.dataTable {
        margin-top: 12px !important;
        }

        .icon > .bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
        }

        .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
        }

        .avatar-blue {
         background-color: #c8d9f1;
         color: #467fcf;
        }

        .avatar-pink {
         background-color: #fcd3e1;
         color: #f66d9b;
         }
        table {
        border-collapse:separate; 
        border-spacing: 0 1em;
        }
        tr{
        border-top: none!important;
        }
        table td , th {
        border-top: none !important;
        }
        div.dataTables_wrapper div.dataTables_length select {
        width: 75px;
        display: inline-block;
        border: none !important;
        }
        div.dataTables_wrapper div.dataTables_length label, div.dataTables_wrapper div.dataTables_filter label {
            margin-bottom: 0;
            color: #a3a19e!important;
        }
        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: auto;
            border: none!important;
        }
        div.dataTables_wrapper div.dataTables_length select {
            width: 77px;
            display: inline-block;
            border: none !important;
            padding: 5px;
        }
        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: auto;
            border: none!important;
            padding: 7px;
        }
        .fac-icon1,.fac-icon2,.fac-icon3{
            padding: 3px 6px;
            border: none;
            margin: 1px;
        }
        .fac-icon1 {
        background: #e1e16d;
        color: black;
        }
        .fac-icon2 {
        background: green;
        color: white;
        }
       .fac-icon3 {
        background: #c90707;
        color: white;
        }
     </style>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
     <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-containerr">
          <table class="table table-striped" id="example" >
            <caption>Bootstrap 3 Table - SPLessons.com</caption>
            <thead>
                <tr>
                <th>id</th>
                <th>Form Type</th>
                <th>Family-Members</th>
                <th>Full Name</th>
                <th>Father Name</th>
                <th>Gender</th>
                <th>Contact Num</th>
                <th>Created By</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody >
                <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['form_type'] ?></td>
                <td><?php echo $row['number_of_student'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['fathername'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['contactnumber'] ?></td>
                <td><?php echo $row['created_by']?></td>
                <td><?php if($row['approved_status'] === NULL){ echo 'Pending';}?></td>
                <td><a href="view.php?id=<?php echo $row['id'];?>"  class="fa fa-eye fac-icon1"> </a>
                <button class="fa fa-pencil fac-icon2"></button>
                <button class="fa fa-trash-o fac-icon3"></button>
               </td>
               </tr>
              <?php
                }
              ?>
            </tbody>
            </table>
         </div>
       </div>


    <div class="name">
        <div id="name">

        </div>
    </div>
 
        <?php
        include_once('footer.php');
        ?>
     

        <script>




</script>
    