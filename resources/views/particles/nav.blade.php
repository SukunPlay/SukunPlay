@section('head')
    <!-- Styles -->
    #title{
    height: 50px;
    line-height: 50px;
    font-family: 'DroidArabicKufiRegular';
    font-weight: normal;
    font-style: normal;
    vertical-align: middle;
    }
    #logo{

    }




@endsection
<div class="section" style="background-color: black; height: 120px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-2 text-right " id="title">
                <h2 class="align-middle" style="color: #B79D49; margin-top: 40px"></h2>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <img
                    src="data:image/png;base64,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"
                    alt="logo" class="img img-responsive" width="50%" id="logo">
            </div>
        </div>
    </div>
</div>
