@extends('layouts.app_dashboard')
@section('content')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">File d'acualité</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="../index.html" class="text-muted text-hover-primary">Accueil</a>
                </li>


            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-8">
                <!--begin::Feeds Widget 1-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body pb-0">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center">
                            <!--begin::User-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px me-5">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nom }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bolder">{{session('utilisateur')->nom}}</a>
                                    <span class="text-gray-400 fw-bold">{{session('utilisateur')->pseudo}}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Menu-->
                            <div class="my-0 mb-5">
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->

                                <!--end::Menu 2-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->

                        <form id="kt_forms_widget_1_form" class=" pb-3 mt-5" method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                            @csrf

                            <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px my-10" data-kt-autosize="true" rows="1" placeholder="Quoi de neuf ? ..." name="description"></textarea>
                            <!--end::Editor-->
                            <div class=" w-700px h-300px" id="bloc_photo" style="display: none">
                                <img src="" alt="" id="image"  height='100%' width='100%' class="justify-content-center" style="object-fit: cover;margin-right:30px">

                            </div>
                            <div class="separator mx-3 my-5"></div>
                            <div class="d-flex justify-content-end mt-2">

                                <div class="btn btn-icon btn-sm btn-active-color-primary ps-0">

                                    <label class="svg-icon svg-icon-2 mb-3" for="images">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
                                            <path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
                                            <path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
                                            </svg>

                                    </label>

                                    <input type="file" id="images" name="path_photo" hidden>


                                    <!--end::Svg Icon-->
                                </div>
                                <div class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                    <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->
                                    <span class="svg-icon svg-icon-2 mb-3" onclick="submitForm()">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M14,13.381038 L14,3.47213595 L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) "/>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>

                            </div>






                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Feeds Widget 1-->


                <!--begin::Feeds widget 5-->
                @foreach($posts as $key => $post)
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5 object-cover">
                                        <img src="{{Storage::url($post->client->user->profile_photo_path)}}" alt="manu" style="background-color:#EBF4FF"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bolder">{{$post->client->user->nom}}</a>
                                        <span class="text-gray-400 fw-bold">{{$post->client->user->pseudo}}</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">

                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Post-->
                            <div class="mb-5">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-size-cover rounded h-300px w-700px mb-5">
                                    <img src="{{Storage::url($post->path_photo)}}"  alt="" style="width:100%; height:100%;margin-right:30px">
                                </div>
                                <!--end::Image-->
                                <!--begin::Text-->
                                <div class="text-gray-800 mb-5">{{$post->description}}</div>
                                <!--end::Text-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center mb-5">
                                    <span class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4" onclick="viewComments(this)">
                                    <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->{{count($post->commentaires)}}</span>

                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Post-->

                            <div class="mb-7 ps-10" style="display: none" id="commentaires">
                                <!--begin::Reply-->
                                @foreach($post->commentaires->whereNull('commentaire_id') as $key => $commentaire)
                                <div onclick="Viewsouscomments(this)">
                                        <div class="d-flex mb-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img src="{{Storage::url($commentaire->client->user->profile_photo_path)}}" alt="" style="background-color:#EBF4FF"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->


                                            <div class="d-flex flex-column flex-row-fluid" >

                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <span class="text-gray-800 text-hover-primary fw-bolder me-2">{{$commentaire->client->user->pseudo}}</span>
                                                    <span class="text-gray-400 fw-bold fs-7"> publié le {{$commentaire->created_at->format('d/m/Y')}}</span>

                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Post-->
                                                <span class="text-gray-800 fs-7 fw-normal pt-1">{{$commentaire->nom_description}}</span>
                                                <!--end::Post-->
                                            </div>


                                        </div>

                                        <div id="view_sous_commentaire" style="display: none">
                                            <form class="position-relative mb-1 ms-20" id = "form_sous_commentaire" method="POST" action="{{ route('replies.store', ['id' => $commentaire->id, 'id_post' => $commentaire->post->id])}}" enctype="multipart/form-data">
                                                  @csrf

                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Repondre.." name="sous_commentaire"></textarea>
                                                <div class="position-absolute top-0 end-0 me-n5">
                                                    <span href="" class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                        <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->

                                                        {{-- <span class="svg-icon svg-icon-2 mb-3" onclick="submitFormSousCommentaire()"> --}}
                                                        <button type="submit" class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                        <span class="svg-icon svg-icon-2 mb-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M14,13.381038 L14,3.47213595 L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) "/>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        </button>
                                                        <!--end::Svg Icon-->
                                                    </span>

                                                </div>
                                            </form>

                                            <div class="separator mb-5 ms-20"></div>
                                        </div>

                                    <div style="display: none">
                                        @foreach($commentaire->replies as $key => $replie)
                                            <div class="d-flex mb-5 ms-20" >

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="{{Storage::url($replie->client->user->profile_photo_path)}}" alt="" style="background-color:#EBF4FF"/>
                                                </div>



                                                <div class="d-flex flex-column flex-row-fluid" >

                                                    <div class="d-flex align-items-center flex-wrap mb-1">
                                                        <span class="text-gray-800 text-hover-primary fw-bolder me-2">{{$replie->client->user->pseudo}}</span>
                                                        <span class="text-gray-400 fw-bold fs-7"> publié le {{$replie->created_at->format('d/m/Y')}}</span>

                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Post-->
                                                    <span class="text-gray-800 fs-7 fw-normal pt-1">{{$replie->nom_description}}</span>
                                                    <!--end::Post-->
                                                </div>


                                            </div>
                                       @endforeach
                                    </div>





                                </div>
                                @endforeach

                            </div>


                            <!--begin::Separator-->
                            <div class="separator mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Reply input-->
                            <form class="position-relative mb-6" id = "form_commentaire" method="POST" action="{{ route('commentaire.store',$post->id)}}" enctype="multipart/form-data">
                                @csrf

                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Repondre.." name="commentaire"></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span href="" class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->
                                        <button type ="submit" class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <span class="svg-icon svg-icon-2 mb-3" >
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M14,13.381038 L14,3.47213595 L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) "/>
                                                    </g>
                                                </svg>
                                            </span>
                                        </button>

                                        <!--end::Svg Icon-->
                                    </span>

                                </div>
                            </form>
                            <!--edit::Reply input-->
                        </div>
                        <!--end::Body-->
                    </div>
                @endforeach


            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <div class="flex-column flex-lg-row-auto w-300 w-lg-350px w-xl-350px mb-10 mb-lg-0">
                    <!--begin::Contacts-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Form-->
                            <form class="w-100 position-relative" autocomplete="on">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid px-15" name="search" value="" placeholder="Suivre ..." />
                                <!--end::Input-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5" id="kt_chat_contacts_body">
                            <!--begin::List-->
                            <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="0px">
                                <!--begin::User-->
                                @foreach($clients as $key => $client)
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                 <img alt="Pic" src="{{Storage::url($client->profile_photo_path)}}"/>
                                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">{{$client->nom}}</a>
                                                <div class="fw-bold text-muted">{{$client->pseudo}}</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->

                                        <!--end::Lat seen-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed d-none"></div>
                                @endforeach







                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->





<script>


    function submitForm() {
        document.getElementById("kt_forms_widget_1_form").submit();
    }

    function submitFormSousCommentaire() {

        document.getElementById("form_sous_commentaire").submit();
    }


    let n=true
    function viewComments(e) {

        if(n){
            let parent = e.parentNode
            let parent2 = parent.parentNode
            let suivant = parent2.nextElementSibling
            suivant.style.display = "block";
            n = false
        }else{
            let parent = e.parentNode
            let parent2 = parent.parentNode
            let suivant = parent2.nextElementSibling
            suivant.style.display = "none";
            n = true
        }

    }

    function Viewsouscomments(e) {

        if(n){
            let elemnt = e.lastElementChild
            elemnt.style.display = "block"
            e.children[1].style.display="block"
            n = false
        }else{
            let elemnt = e.lastElementChild
            elemnt.style.display = "none"
            e.children[1].style.display="none"
            n = true
        }


    }

    //var importer = document.getElementsByName('path_photo');
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
