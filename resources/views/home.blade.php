<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<div class="container" style="width: 600px; margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" id = 'certificateForm' action="{{route('create')}}">
                        @csrf
                        <div class="form-group">
                            <label for="certificateNumber">Номер сертифікату</label>
                            <input type="number" required class="form-control" name="certificateNumber" id="certificateNumber" placeholder="Введіть номер сертифікату">
                        </div>

                        <div class="form-group">
                            <label for="certificateName">Назва курсу</label>
                            <input type="text" required class="form-control" name="certificateName" id="certificateName" placeholder="Введіть назву курсу">
                        </div>

                        <div class="form-group">
                            <label for="username">Ім'я</label>
                            <input type="text" required class="form-control" name="username" id="username" placeholder="Введіть ім'я">
                        </div>

                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                            <input type='text' required name="certificateFinish" id = "certificateFinish" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <button class="btn btn-primary active">Отримати сертифікат</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker();
    });
</script>
</html>
