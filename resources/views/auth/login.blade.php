<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.shared.head')
    <style >
        .mCSB_container{
            width: 100% !important;
        }
    </style>
</head>
<!-- Menu-compact layout -->

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" id="login-form" class="md-float-material">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="auth-box">
                                <div class="row">
                                    @if ($errors->has('name') || $errors->has('password'))
                                        <div class="col-md-12">
                                            <div class="messages-error text-center">
                                                <p class="text-danger error">{{ $errors->first('name') }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        {!! Form::text('username', old('username'), ['class' => 'form-control', 'required' => '', 'placeholder' => 'Usuario']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        {!! Form::password('password', ['class' => 'form-control', 'required' => '', 'placeholder' => 'Contraseña'], old('password')) !!}
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Iniciar sesión</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Required Jquery -->
    @include('admin.shared.scripts')
    <script  src="{{ asset('js/login.js') }}"></script>
</body>
</html>