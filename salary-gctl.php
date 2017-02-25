<div class="col-sm-12">
    <h3 class="page-head-line">Create salary</h3>
    <a href="index.php?v=salary-view"><i class="btn btn-success fa fa-pencil">Report</i></a>
    <a href="index.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
    <hr>
</div>
<div class=" container">
    <form role="form" action="index.php?v=salary-insert" method="post">
        <div class="form-group">
            <label>Salary Date:</label>
            <input type="text" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label>Employee Name:</label>
            <select class="form-control" name="name">
                <?php
                $ddown = new dalStaff();
                Dropdown($ddown->view(), 0);
                ?>
            </select>
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
            <label>Salary Amount:</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <input type="submit" name="sub" class="btn btn-default" />
    </form>
</div>