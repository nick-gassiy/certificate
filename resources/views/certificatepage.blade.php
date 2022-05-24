<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>.
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<style type="text/css">
    * {
        /*font-family: Helvetica, sans-serif;*/
        font-family: "DejaVu Sans", sans-serif;
    }
</style>
<body>
<div class="container" style="width: 600px; margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="form-group">
                            <label for="certificateNumber">Номер сертифікату : </label>
                            <span>{{$certificate['certificateNumber']}}</span>
                        </div>

                        <div class="form-group">
                            <label for="certificateName">Назва курсу : </label>
                            <span>{{$certificate['certificateName']}}</span>
                        </div>

                        <div class="form-group">
                            <label for="username">Ім'я : </label>
                            <span>{{$certificate['username']}}</span>
                        </div>

                        <div class="form-group">
                            <label for="username">Дата пройдення : </label>
                            <span>{{$certificate['certificateFinish']}}</span>
                        </div>
                </div>
            </div>
            <form method="GET" id = 'certificateForm' action="{{route('createPdf',['id' => $certificate['id']])}}">
                <button class="btn btn-primary active">Скачати сертифікат</button>
            </form>

            </div>
        </div>
    </div>
</div>

</body>

</html>
