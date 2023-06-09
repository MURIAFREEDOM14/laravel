<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>proyekPortal</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="/Atlantis/examples/assets/img/icon.ico" type="image/x-icon"/>
        <style>
            .bold{
                font-size: 11px;
                text-transform: uppercase;
                font-weight: bold;
                line-height:1px;
            }
            .img{
                border: 1px solid black;
                border-radius: 2%;
            }
            .hidden{
                display:none;
            }
        </style>
        <!-- Fonts and icons -->
        <script src="/Atlantis/examples/assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/Atlantis/examples/assets/css/fonts.min.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="/Atlantis/examples/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Atlantis/examples/assets/css/atlantis.min.css">
        <link rel="stylesheet" href="/cardSlide/style.css">    
    </head>
    <body>
        <div class="wrapper">
            <div class="main-header">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="blue2">

                    <a href="/" class="logo">
                        <img src="/Atlantis/examples/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                </div>
                <!-- End Logo Header -->

                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                            <li class="nav-item dropdown hidden-caret">
                                <a class="btn btn-outline-primary dropdown-toggle" href="/perbaikan" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope" style="color:white"></i>
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Pesan
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="">
                                                    <div class="notif-img">
                                                        <img src="/Atlantis/examples/assets/img/jm_denis.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block">
                                                            How are you ?
                                                        </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="/semua_pesan">Lihat Semua Pesan<i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hidden-caret">
                                <a class="btn btn-outline-primary dropdown-toggle" href="" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell" style="color: orange"></i>
                                    {{-- <span class="notification"></span> --}}
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">Ada Notifikasi Baru</div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                @foreach ($notif as $item)
                                                <a>
                                                    <div class="notif-icon notif-warning"> <i class="fas fa-bell"></i> </div>
                                                    <div class="notif-content">
                                                        <div class="" style="">{{$item->isi}}</div>
                                                    </div>
                                                </a>    
                                                @endforeach
                                                <a>
                                                    <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                    <div class="notif-content">
                                                        <div class="">Selamat Datang</div>
                                                        <span class="time"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="/semua_notif">Lihat Semua Notifikasi<i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        @if ($kandidat->foto_4x6 !== null)
                                            <img src="/gambar/Kandidat/{{$kandidat->nama}}/4x6/{{$kandidat->foto_4x6}}" alt="/Atlantis/examples." class="avatar-img rounded-circle">
                                        @else
                                            <img src="/gambar/default_user.png" alt="/Atlantis/examples." class="avatar-img rounded-circle">                                            
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    @if ($kandidat->foto_4x6 !== null)
                                                        <img src="/gambar/Kandidat/{{$kandidat->nama}}/4x6/{{$kandidat->foto_4x6}}" alt="image profile" class="avatar-img rounded">
                                                    @else
                                                        <img src="/gambar/default_user.png" alt="image profile" class="avatar-img rounded">                                                        
                                                    @endif
                                                </div>
                                                <div class="u-text">
                                                    <b class="bold">{{$kandidat->nama}}</b>
                                                    <p class="text-muted">{{$kandidat->email}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/profil_kandidat">Profilku</a>
                                            <a class="dropdown-item" href="/isi_kandidat_personal">Edit Profil</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/contact_us">Contact Us</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin keluar?')" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                Keluar
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <!-- Sidebar -->
            <div class="sidebar sidebar-style-2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <div class="user">
                            <div class="avatar-sm float-left mr-2">
                                @if ($kandidat->foto_4x6 !== null)
                                    <img src="/gambar/Kandidat/{{$kandidat->nama}}/4x6/{{$kandidat->foto_4x6}}" alt="" class="avatar-img rounded-circle">                                    
                                @else
                                    <img src="/gambar/default_user.png" alt="" class="avatar-img rounded-circle">
                                @endif
                            </div>
                            <div class="info">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span>
                                        <span class="" style="text-transform: uppercase;"><b class="bold">{{$kandidat->nama_panggilan}}</b></span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <div class="clearfix"></div>
                                <div class="collapse in" id="collapseExample">
                                    <ul class="nav">
                                        <li>
                                            <a href="/kandidat" class="dropdown-item">
                                                <span class="link-collapse">Beranda</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/profil_kandidat" class="dropdown-item">
                                                <span class="link-collapse">Profilku</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/isi_kandidat_personal" class="dropdown-item">
                                                <span class="link-collapse">Edit Profil</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/logout" class="dropdown-item">
                                                <span class="link-collapse">Keluar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-primary">
                            <li class="nav-item active">
                                <a href="/kandidat" class="btn" aria-expanded="false">
                                    <i class="fas fa-home"></i>
                                    <p style="text-transform: uppercase">beranda</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Menu</h4>
                            </li>
                            <li class="nav-item">
                                <a class="btn  disabled" href="/pelatihan_interview">
                                    <i class="fas fa-clipboard-list"></i>
                                    {{-- <i class="fas fa-crown" style="color: yellow"></i> --}}
                                    <p>Pelatihan Interview</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                </span>
                            </li>
                            
                            <li class="nav-item active">
                                <a data-toggle="collapse" href="#forms">
                                    <i class="fas fa-crown"></i>
                                    <p style="text-transform: uppercase;">Akun Prioritas</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <div class="card mx-2 bg-primary">
                                                <div class="card-body">
                                                    @if ($pembayaran == null)
                                                        <div class="text-center" style="font-size: 15px;font-weight:bold">Upgrade Akunmu ke Prioritas dan dapatkan</div>
                                                        <hr style="background-color:white">
                                                        <p style="font-size: 13px;font-weight:bold;"><i class="fas fa-check-circle" style="color: yellow;"></i>&nbsp;Nama Anda Akan muncul paling atas pada pencarian Calon kandidat perusahaan</p>
                                                        <p style="color: gray;font-size: 13px;font-weight:bold"><i class="fas fa-check-circle" style="color:gray;"></i>&nbsp;Anda akan mendapat fitur pelatihan interview online gratis</p>
                                                        <hr style="background-color:white">
                                                        <a href="/payment" class="btn btn-info text-white" style="text-transform: uppercase;font-weight:bold;">Upgrade</a>
                                                    @elseif($pembayaran->foto_pembayaran !== null)
                                                        <p style="font-size: 13px;font-weight:bold;" class="text-center">Verifikasi Pembayaran anda sedang dalam proses</p>
                                                        <p style="font-size: 13px;font-weight:bold;" class="text-center">Mohon Tunggu</p> 
                                                    @else

                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">
                <div class="content">
                    <main class="px-3">
                        @include('sweetalert::alert')
                        @yield('content')
                        {{-- <div class="modal fade" id="prioritas" tabindex="-1" aria-labelledby="prioritas" aria-hidden="true">
                            @if ($pembayaran == null)
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="background-color:#088395">
                                        <div class="modal-header">
                                            <div class="card" style="background-color:blue">
                                                <div class="card-body">
                                                    <b class="text-white" style="text-transform: uppercase;">Akun Prioritas &nbsp;<i class="fas fa-crown" style="color: yellow"></i></b>                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <b class="bold text-white" style="font-size: 17px;">Yang Akan anda dapatkan di akun Prioritas :</b>
                                            <p><i class="fas fa-check-circle" style="color: yellow;"></i>&nbsp;<b class="text-white" style="font-size: 15px; text-transform:uppercase">Nama Anda Akan muncul paling atas pada pencarian Calon kandidat perusahaan</b></p>
                                            <p><i class="fas fa-check-circle" style="color:gray;"></i>&nbsp;<b class="" style="text-decoration-color: gray; font-size:15px; text-transform:uppercase">anda akan mendapat fitur pelatihan interview online gratis</b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn text-white" style="background-color: gray;" data-dismiss="modal">Lewati</button>
                                            <a class="btn" href="/pembayaran" style="background-color: yellow">Upgrade</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="modal-dialog modal-lg border border-primary">
                                    <div class="modal-content" style="background-color:#0A4D68">
                                        <div class="modal-header">
                                            <div class="card" style="background-color:blue;">
                                                <div class="card-body">
                                                    <b class="text-white" style="text-transform: uppercase;">Akun Prioritas &nbsp;<i class="fas fa-crown" style="color: yellow"></i></b>                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body text-center">
                                            <b class="text-white" style="text-transform: uppercase;">Verifikasi Pembayaran anda sedang dalam proses</b>
                                            <p><b class="text-white" style="text-transform: uppercase;">Mohon Tunggu</b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>    
                            @endif
                        </div> --}}
                    </main>
                </div>
                <footer class="footer" style="background-color: #FFD966;">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul class="nav nav-primary">
                                <li class="nav-item">
                                    <div class="copyright" style="color:black;">
                                        &copy; Copyright <strong><span>ProyekPortal</span></strong>. All Rights Reserved
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Help
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Licenses
                                    </a>
                                </li> --}}
                            </ul>
                        </nav>
                        <div class="copyright ml-auto">
                            &nbsp;
                            {{-- 2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a> --}}
                        </div>
                    </div>
                </footer>
            </div>

        </div>
        <!--   Core JS Files   -->
        <script src="/Atlantis/examples/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="/Atlantis/examples/assets/js/core/popper.min.js"></script>
        <script src="/Atlantis/examples/assets/js/core/bootstrap.min.js"></script>
        <script src="/cardSlide/script.js"></script>

        <!-- jQuery UI -->
        <script src="/Atlantis/examples/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="/Atlantis/examples/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="/Atlantis/examples/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


        <!-- Chart JS -->
        <script src="/Atlantis/examples/assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="/Atlantis/examples/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="/Atlantis/examples/assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="/Atlantis/examples/assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/Atlantis/examples/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="/Atlantis/examples/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
        <script src="/Atlantis/examples/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

        <!-- Sweet Alert -->
        <script src="/Atlantis/examples/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Atlantis JS -->
        <script src="/Atlantis/examples/assets/js/atlantis.min.js"></script>
        
        <!-- datatable -->
        <script>
            $(document).ready(function() {
                $('#basic-datatables').DataTable({
                });
    
                $('#multi-filter-select').DataTable( {
                    "pageLength": 5,
                    initComplete: function () {
                        this.api().columns().every( function () {
                            var column = this;
                            var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                    );
    
                                column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                            } );
    
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                    }
                });
    
                // Add Row
                $('#add-row').DataTable({
                    "pageLength": 5,
                });
    
                var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
    
                $('#addRowButton').click(function() {
                    $('#add-row').dataTable().fnAddData([
                        $("#addName").val(),
                        $("#addPosition").val(),
                        $("#addOffice").val(),
                        action
                        ]);
                    $('#addRowModal').modal('hide');
    
                });
            });
        </script>

        <!-- sweetalert -->
        <script>
            //== Class definition
            var SweetAlert2Demo = function() {

                //== Demos
                var initDemos = function() {
                    //== Sweetalert Demo 1
                    $('#alert_demo_1').click(function(e) {
                        swal('Good job!', {
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });
                    });

                    //== Sweetalert Demo 2
                    $('#alert_demo_2').click(function(e) {
                        swal("Here's the title!", "...and here's the text!", {
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });
                    });

                    //== Sweetalert Demo 3
                    $('#alert_demo_3_1').click(function(e) {
                        swal("Good job!", "You clicked the button!", {
                            icon : "warning",
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-warning'
                                }
                            },
                        });
                    });

                    $('#alert_demo_3_2').click(function(e) {
                        swal("Good job!", "You clicked the button!", {
                            icon : "error",
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-danger'
                                }
                            },
                        });
                    });

                    $('#alert_demo_3_3').click(function(e) {
                        swal("Good job!", "You clicked the button!", {
                            icon : "success",
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });
                    });

                    $('#alert_demo_3_4').click(function(e) {
                        swal("Good job!", "You clicked the button!", {
                            icon : "info",
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-info'
                                }
                            },
                        });
                    });

                    //== Sweetalert Demo 4
                    $('#alert_demo_4').click(function(e) {
                        swal({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            buttons: {
                                confirm: {
                                    text: "Confirm Me",
                                    value: true,
                                    visible: true,
                                    className: "btn btn-success",
                                    closeModal: true
                                }
                            }
                        });
                    });

                    $('#alert_demo_5').click(function(e){
                        swal({
                            title: 'Input Something',
                            html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                            content: {
                                element: "input",
                                attributes: {
                                    placeholder: "Input Something",
                                    type: "text",
                                    id: "input-field",
                                    className: "form-control"
                                },
                            },
                            buttons: {
                                cancel: {
                                    visible: true,
                                    className: 'btn btn-danger'
                                },        			
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        }).then(
                        function() {
                            swal("", "You entered : " + $('#input-field').val(), "success");
                        }
                        );
                    });

                    $('#alert_demo_6').click(function(e) {
                        swal("This modal will disappear soon!", {
                            buttons: false,
                            timer: 3000,
                        });
                    });

                    $('#alert_demo_7').click(function(e) {
                        swal({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            buttons:{
                                confirm: {
                                    text : 'Yes, delete it!',
                                    className : 'btn btn-success'
                                },
                                cancel: {
                                    visible: true,
                                    className: 'btn btn-danger'
                                }
                            }
                        }).then((Delete) => {
                            if (Delete) {
                                swal({
                                    title: 'Deleted!',
                                    text: 'Your file has been deleted.',
                                    type: 'success',
                                    buttons : {
                                        confirm: {
                                            className : 'btn btn-success'
                                        }
                                    }
                                });
                            } else {
                                swal.close();
                            }
                        });
                    });

                    $('#alert_demo_8').click(function(e) {
                        swal({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            buttons:{
                                cancel: {
                                    visible: true,
                                    text : 'No, cancel!',
                                    className: 'btn btn-danger'
                                },        			
                                confirm: {
                                    text : 'Yes, delete it!',
                                    className : 'btn btn-success'
                                }
                            }
                        }).then((willDelete) => {
                            if (willDelete) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                    buttons : {
                                        confirm : {
                                            className: 'btn btn-success'
                                        }
                                    }
                                });
                            } else {
                                swal("Your imaginary file is safe!", {
                                    buttons : {
                                        confirm : {
                                            className: 'btn btn-success'
                                        }
                                    }
                                });
                            }
                        });
                    })

                };

                return {
                    //== Init
                    init: function() {
                        initDemos();
                    },
                };
            }();

            //== Class Initialization
            jQuery(document).ready(function() {
                SweetAlert2Demo.init();
            });
	</script>
    </body>
</html>
