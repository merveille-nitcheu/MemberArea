@extends('layouts.app_dashboard')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Profil</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="../index.html" class="text-muted text-hover-primary">Mes Publications</a>
                </li>


            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->


    <div id="kt_content_container" class="container">
        <!--begin::Post card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20 pb-lg-0">

                <!--begin::Section-->
                <div class="mb-17">
                    <!--begin::Content-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Title-->
                        <h3 class="text-black">Mes Publications</h3>
                        <!--end::Title-->

                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed mb-9"></div>
                    <!--end::Separator-->
                    <!--begin::Row-->


                    <div class="row g-10">

                        <!--begin::Col-->
                        @foreach($posts as $key => $post)
                        <div class="col-md-4">
                            <!--begin::Hot sales post-->
                            <div class="card-xl-stretch ms-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="#showpost" data-bs-toggle="modal">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded max-h-175px">
                                        <img src="{{Storage::url($post->path_photo)}}" alt="" style="width:100%; height:100%;">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">


                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="mt-5">
                                    <!--begin::Title-->
                                    <?php  $lignes = explode("\n",$post->description); $debut = array_slice($lignes, 0, 2); $premieres_lignes=implode("\n",$debut)
                                        ?>
                                    <a href="/" class="  fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base ">{{$premieres_lignes}}</a>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <div class="fs-6 fw-bolder mt-5">
                                        <!--begin::Label-->
                                        <!--begin::Author-->
                                            <span class="btn btn-sm btn-light">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                    </svg>
                                                </span>
                                            <!--end::Svg Icon-->{{count($post->commentaires)}}</span>
                                        <a href="/" class="text-gray-700 text-hover-primary mx-2">publié le {{$post->created_at->format('d/m/Y')}}</a>
                                        <!--end::Author-->
                                    </div>
                                    <div class="fs-6 fw-bolder mt-5">
                                        <a href="#formedit" class="btn btn-info me-20" data-bs-toggle="modal">Edit</a>
                                        <a href="#deletepost" class="btn btn-danger" style="margin-left: 85px;"data-bs-toggle="modal">Delete</a>
                                    </div>
                                        <!--begin::Date-->

                                        <!--end::Action-->

                                    <!--end::Text-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Hot sales post-->
                      </div>
                                <!--modal por show-->
                            <div class="modal fade" tabindex="-1" id="showpost">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Post du {{$post->created_at->format('d/m/Y')}}</h5>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x"></span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">
                                            <div class="bgi-no-repeat bgi-size-cover rounded h-300px w-400px mb-5">
                                                <img src="{{Storage::url($post->path_photo)}}"  alt="" style="width:100%; height:100%;margin-right:30px">
                                            </div>
                                            <p class="mt-5">{{$post->description}}</p>
                                        </div>

                                        <div class=" d-flex justify-content-end modal-footer">

                                            <button type="button" class="btn" style="background-color: #cb0c9f" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--modal d'edition -->
                            <div class="modal fade" id="formedit" tabindex="-1"  aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Form-->
                                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{route('update',$post->id)}}" enctype="multipart/form-data">
                                            <!--begin::Modal header-->
                                            @csrf

                                            <div class="modal-header" id="kt_modal_new_address_header">
                                                <!--begin::Modal title-->
                                                <h2>Modifier votre Post</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body py-10 px-lg-17">
                                                <!--begin::Scroll-->
                                                <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px" style="">

                                                    <!--begin::Input group-->
                                                    <div class="row mb-5">



                                                            <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="fs-5 fw-bold mb-2">Description</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"  name="description" placeholder="{{$post->description}}"></textarea>
                                                                <div class="separator mb-4"  style="background-color: #cb0c9f"></div>


                                                            </div>
                                                   </div>
                                                   <div class="row mb-5">



                                                    <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class=" fs-5 fw-bold mb-2">Telecharger votre photo</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="file" id="images" name="path_photo" class="form-control form-control-solid">

                                                    </div>
                                                    <div class=" w-700px h-300px" id="bloc_photo" >
                                                        <img src="{{Storage::url($post->path_photo)}}" alt="" id="image"  height='100%' width='100%' class="justify-content-center" style="object-fit: cover;margin-right:30px">

                                                    </div>
                                           </div>
                                                <!--end::Scroll-->
                                               </div>
                                           </div>
                                            <!--end::Modal body-->
                                            <!--begin::Modal footer-->
                                            <div class="modal-footer flex-center">
                                                <!--begin::Button-->
                                                <button type="reset" id="kt_modal_new_address_cancel" data-bs-dismiss="modal" class="btn btn-secondary me-3">fermer</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" id="kt_modal_new_address_submit" class="btn" style="background-color: #cb0c9f">
                                                    <span class="indicator-label">Soumettre</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Modal footer-->

                                    </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" tabindex="-1" id="deletepost">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{route('destroy',$post->id)}}" enctype="multipart/form-data">
                                            <!--begin::Modal header-->
                                            @csrf

                                        <div class="modal-header">
                                            <h5 class="modal-title">Post du {{$post->created_at->format('d/m/Y')}}</h5>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x"></span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">

                                            <p class="mt-5">Etes-vous sur de vouloir supprimer</p>
                                        </div>

                                        <div class=" d-flex justify-content-end modal-footer">

                                            <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn" style="background-color: #cb0c9f" >Supprimer</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Section-->

            </div>
            <!--end::Body-->
        </div>
        <!--end::Post card-->
    </div>
    <!--end::Container-->


<script>
    var importer = document.getElementById('images');

    importer.addEventListener('change',  (e) => {
        console.log('bbb')
        let preview = document.getElementById('bloc_photo');
        preview.style.display='block'
        var input = e.target;
        if (input.files && input.files[0]) { // check if the files property is defined
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('image');
                output.setAttribute("src", dataURL);
            }
        }
    });

</script>


@endsection
