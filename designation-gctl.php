<div class="col-sm-12">
    <div class="col-sm-3">
        <button type="button" data-toggle="modal" data-target="#myModal">New designation entry</button>
    </div>
    <div class="col-sm-6">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    <div class="panel-heading">
                        <h3>Designation</h3>
                    </div>
                    <form role="form" action="index.php?v=designation-insert" method="post">
                        <input type="text" class="form-control" name="deg"/>
                        <div class="panel-heading">
                            <input class="btn-sm btn-success" type="submit" name="sub" value="Save"/> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    </div>
</div>
<div class="col-sm-12">
    <div class="panel-default">
        <div class="panel-heading">
            <h4>Designation</h4>
        </div>
        <div class="panel">
            <table class="table tab-content table-responsive table-striped table-hover" class="container-fluid">
                <tr class="panel panel-info">
                    <th>Serial</th>
                    <th>Designation Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                $deg = new dalDesignation();
                $data = $deg->view();
                $i = 1;
                foreach ($data as $d) {
                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $d->name ?></td>
                        <td><a href="#"><span class="fa fa-pencil btn btn-default"></span></a></td>
                        <td><a href="#"><span class="fa fa-trash btn-danger btn"></span></a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

