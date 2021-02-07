<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="show_data.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="myprofile.php">My Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="importcsv.php">Import CSV</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="salaryfilter.php">Salary<99000</a>
        </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> </a>
            </li>
        </ul>
        <form action="searchActionPage.php" class="form-inline" method="post">
            <input class="form-control mr-sm-2" required type="text" name="search" id="search" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
</nav>
