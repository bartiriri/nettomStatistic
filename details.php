<?php include('header.php');?>


<div class="container-fluid">
    <div class="row mt-2 mb-2">
        <a href="index.php">
            <button class="btn btn-primary">Back</button>
        </a>
    </div>
    <div class="row text-center">
        <h3>Detail for <strong>strona główna(page)</strong></h3>
    </div>
    <div class="row text-center justify-content-center shadow rounded">
        <h4>Search by date</h4>
        <div class="col-lg-3">
            <label>From:</label>
            <input id="details_from" type="date" max='<?php echo date("Y-m-d") ?>'>
        </div>
        <div class="col-lg-3">
            <label>To:</label>
            <input id="details_to" type="date" max='<?php echo date("Y-m-d") ?>'>
        </div>
        <div class="col-lg-3 mb-1">
            <button id="details_search" class="btn btn-primary">Search</button>
        </div>

    </div>
    <div class="row shadow mt-4 rounded">
        <div class="col text-center pt-2 pb-2">
            Data show from <strong>begin</strong> to <strong>now</strong>
        </div>
        <div class="col text-center pt-2">
            Unique entry : <strong>20</strong>
        </div>
    </div>
    <div class="row shadow mt-4 rounded pt-2 pb-2">
        <table id="tabela">
            <thead>
            <tr>
                <td>Lp.</td>
                <td>ip</td>
                <td>Agent</td>
                <td>Date</td>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1.</td>
                <td>Strona główna</td>
                <td>100</td>
                <td><a  href="details.php"><img src="image/list-action.png"/></a></td>
            </tr>


            </tbody>

        </table>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabela').DataTable();
        VALID_DATE_FORM.detailsForm();
    } );
</script>

<?php include('footer.php'); ?>



