@extends("theme")
@section("content")
<div class="container">
<table class="table table-borderless">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
<div class="row">
<div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
<tr>
    <td>EmpCode</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-warning">Search</button></td>
</tr>
</div>
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div></div>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
@endsection