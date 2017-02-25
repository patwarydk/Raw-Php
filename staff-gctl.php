<div class="col-sm-12">
    <h3 class="page-head-line">New Staff Entry</h3>
    <a href="index.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
    <hr>
</div>
<div class="container">
    <form role="form" action="index.php?v=staff-insert" method="post">
        <div class="form-group">
            <label>Joining Date:</label>
            <input type="text" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control"  placeholder="Employee name">
        </div>
        <div class="form-group">
            <label>Designation:</label>
            <select class="form-control" name="deg">
                <?php
                $ddown = new dalDesignation();
                Dropdown($ddown->view(), 0);
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Salary:</label>
            <input type="text" name="salary" class="form-control" placeholder="Salary amount">
        </div>
        <input type="submit" name="sub" class="btn btn-default"/>
    </form>
</div>