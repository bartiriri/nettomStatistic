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
            <input type="date">
        </div>
        <div class="col-lg-3">
            <input type="date">
        </div>
        <div class="col-lg-3 mb-1">
            <button class="btn btn-primary">Search</button>
        </div>

    </div>
    <div class="row shadow mt-4 rounded">
        <div class="col text-center pt-2 pb-2">
            Data show from begin to now
        </div>
        <div class="col text-center">

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
    } );
</script>

<?php include('footer.php'); ?>



