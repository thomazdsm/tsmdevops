<html>
<head>
    <title>Teste Page</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class=" form-group col-md-4">
                <select class="js-example-basic-single" name="state">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
</html>
