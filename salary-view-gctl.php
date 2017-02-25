<title>GCTL | Report</title>
<script type="text/javascript">
    function printPageArea(areaID) {
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>
<div class="col-sm-12">
    <h3 class="page-head-line">Salary Print Preview</h3>
    <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
    <a href="index.php?v=salary"><i class="btn btn-success fa fa-pencil"> New Salary</i></a>
    <a href="index.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
    <hr>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        Salary Sheet
    </div>
    <div class="panel-body" id="printableArea">
        <table class="table table-responsive table-bordered table-hover" with="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th class="text-center"> Serial</th>
                <th class="text-center"> Employee Name</th>
                <th class="text-center"> Designation</th>
                <th class="text-center"> Salary date</th>
                <th class="text-center"> Basic</th>
                <th class="text-center"> House rent</th>
                <th class="text-center"> Medical</th>
                <th class="text-center"> Conveyance</th>
                <th class="text-center"> Gross Salary</th>
            </tr>
            <?php
            //  $am = new dalSalary();
            //  Table($am->view(), "v=salary");

            $sal = new dalSalary();
            $data = $sal->view();
            $c = 1;
            foreach ($data as $d) {
                $total = 0;
                ?>
                <tr>
                    <td><?php echo "#" . $c++; ?></td>
                    <td><?php echo $d->name ?></td>
                    <td><?php echo $d->dname ?></td>
                    <td><?php echo $d->date ?></td>
                    <td><?php echo ($d->basic) / 100 * 60 ?></td>
                    <td><?php echo ($d->basic) / 100 * 30 ?></td>
                    <td><?php echo ($d->basic) / 100 * 5 ?></td>
                    <td><?php echo ($d->basic) / 100 * 5 ?></td>
                    <td><?php echo $d->basic ?></td>
                </tr>               
                <?php
            }
            ?>

        </table>
    </div>
</div>